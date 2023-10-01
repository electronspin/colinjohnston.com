<?php

$originalTag = Kirby\Text\KirbyTag::$types['image'];

Kirby::plugin('colin-johnston/respimg', [
  'tags' => [
    'respimg' => [
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
        $srcset = $tag->srcset ? explode(',', $tag->srcset) : $presets;

        // casts kirbytext array strings to ints
        $srcset = array_map(function ($item) {
          return (int) $item;
        }, $srcset);


        $result = $originalTag['html']($tag);

        if (!$file === true || is_null($srcset) === true) {
          return $result;
        }

        $pattern = '/<img.*?>/i';

        // build a new image tag with the srcset
        $image = Html::img($tag->src, [
          'width' => $tag->width,
          'height' => $tag->height,
          'class' => $tag->imgclass,
          'title' => $tag->title,
          'alt' => $tag->alt ?? ' ',
          'srcset' => $tag->srcset($srcset),
        ]);

        // replace the old image tag
        $result = preg_replace($pattern, $image, $result);

        // print_r($srcset);

        return $result;
      }
    ]
  ]
]);

// 2023-09-30
// this is not really doing anything
// how to get actual scrset in output?