<?php

kirbytext::$tags['figure'] = array(    
    'attr' => array(
    'figure',
    'align'
    ),
  'html' => function($tag) {

    $filename = $tag->attr('figure');        
    $image = $tag->page()->image($filename);
    $url = $image->url();
    $align = $tag->attr('align', 'default');
    
    $html = '<figure class="figure-'.$align.'"><img src="'.$url.'" /></figure>';
    return $html;
  }
);

?>