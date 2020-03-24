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

                // gets srcset array from config
                $presets = option('thumbs.srcsets.default');

                // sets srcset as kirbytag array with fallback to config array
                $srcset = $tag->srcset ? explode(',', $tag->srcset): $presets;
                
                // from @texnixe - casts kirbytext array strings to ints
                $srcset = array_map(function($item) {
                    return (int) $item;
                }, $srcset);

                $result = $originalTag['html']($tag);

                if (! $file === true || is_null($srcset) === true) {
                    return $result;
                }

                $pattern = '/<img.*?>/i';

                // check to see if we have lazysizes on or not
                // ugly way to get `data-` prefix, basically
                if (! option('lazysizes') || option('lazysizes') === false) {
                    $srctag = 'src';
                    $srcsettag = 'srcset';
                } else {
                    $srctag = 'data-src';
                    $srcsettag = 'data-srcset';
                }

                // build a new image tag with the srcset 
                $image = Html::img($tag->src, [
                    'width' => $tag->width,
                    'height' => $tag->height,
                    'class' => $tag->imgclass,
                    'title' => $tag->title,
                    'alt' => $tag->alt ?? ' ',
                    // 'srcset' => $file->srcset($srcset), [see note 1]
                    // the following are ignored if they duplicate src and scrset, added if not
                    // there's got to be ab tter way to do this...
                    strval($srctag) => $tag->src,
                    strval($srcsettag) => $file->srcset($srcset),
                    // [note 1] for some reason if set of data-src and data-srcset are generated, 
                    // I also get a `srcset` even though I'm not explicitily generating it. Confused.
                ]);

                // replace the old image tag
                $result = preg_replace($pattern, $image , $result);

                return $result;
            }
        ]
    ]
]);

