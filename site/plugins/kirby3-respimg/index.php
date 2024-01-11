<?php

$originalTag = Kirby\Text\KirbyTag::$types['image'];

Kirby::plugin('colin-johnston/respimg', [
  'tags' => [
    'image' => [
      'attr' => array_merge(
        $originalTag['attr'],
        [
          'srcset'
        ]
      ),

      'html' => function ($tag) use ($originalTag) {

        $file = $tag->file($tag->value());

        // gets srcset array from config
        $presets = option('thumbs.srcsets.default');

        // sets srcset as kirbytag array with fallback to config array
        // $srcset = $tag->srcset ? explode(',', $tag->srcset) : $presets;
      
        // casts kirbytext array strings to ints
        // $srcset = array_map(function ($item) {
        //   return (int) $item;
        // }, $srcset);
      
        // texnixe replacement of two sections above
        $srcset = $tag->srcset ? array_map(fn($item) => (int) $item, explode(',', $tag->srcset)) : $presets;


        $result = $originalTag['html']($tag);

        if (!$file === true || is_null($srcset) === true) {
          return $result;
        }

        $pattern = '/<img.*?>/i';

        // build a new image tag with the srcset
        $image = Html::img($tag->src, [
          'width' => $tag->width,
          'height' => $tag->height,
          'title' => $tag->title,
          'alt' => $tag->alt ?? ' ',
          'class' => $tag->imgclass,
          //remove src and srcset to let lazysizes data-src and data-srcset handle it
//'src' => $tag->src,
//'srcset' => $file->srcset($srcset),
          'src' => null,
          'srcset' => null,
          // for lazysizes
          'data-sizes' => 'auto',
          'data-src' => $tag->src,
          'data-srcset' => $file->srcset($srcset),
        ]);

        // replace the old image tag
        $result = preg_replace($pattern, $image, $result);

        // print_r($srcset);
      
        return $result;
      }
    ]
  ]
]);