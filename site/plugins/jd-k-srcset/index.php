<?php

$originalTag = Kirby\Text\KirbyTag::$types['image'];
Kirby::plugin('colin-johnston/jd-k-srcset', [
    'tags' => [
        'image' => [
            'attr' => array_merge(
                $originalTag['attr'],
                [
                    'srcset'
                ]),

            'html' => function($tag) use ($originalTag)  {

                $file = $tag->file($tag->value());
                // $presets = $kirby->option('thumbs.srcsets.default');
                $presets = option('thumbs.srcsets.default');
                dump($presets);
                $srcset = $tag->srcset ? explode(',', $tag->srcset): $presets;
                dump($srcset);
                
                // from texnixie 
                $srcset = array_map(function($item) {
                    return (int) $item;
                  }, $srcset);

                $result = $originalTag['html']($tag);

                if (! $file === true || is_null($srcset) === true) {
                    return $result;
                }

                // $files = [];
                // foreach ($srcset as $width) {
                //     // if ($file->width() < $width) {
                //     //     continue;
                //     // }

                //     $imageResized = $file->resize($width);
                //     $files[] = $imageResized->url();
                //     // $srcset[] = $imageResized->url() . ' ' . $imageResized->width() . 'w';
                // }
                // dump($files);
            

                $pattern = '/<img.*?>/i';

                // build a new image tag with the srcset
                $image = Html::img($tag->src, [
                    'width'  => $tag->width,
                    'height' => $tag->height,
                    'class'  => $tag->imgclass,
                    'title'  => $tag->title,
                    'alt'    => $tag->alt ?? ' ',
                    'srcset' => $file->srcset($srcset),
                ]);
                dump($image);
             
                // resize
                // $widths = $kirby->option('thumbs.srcsets.default', $srcset);

                // foreach ($widths as $width) {
                //     if ($image->width() < $width) {
                //         continue;
                //     }

                //     $imageResized = $image->resize($width);
                //     $srcset[] = $imageResized->url() . ' ' . $imageResized->width() . 'w';
                // }


                // replace the old image tag
                $result = preg_replace($pattern, $image , $result);

                return $result;
            }
        ]
    ]
]);
