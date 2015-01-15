<?php

echo page('articles')->children()->visible()->flip()->limit(10)->feed(array(
  'title'       => 'Latest articles',
  'description' => 'PebbleRoad',
  'link'        => 'articles',
  'textfield'=>'summary'
));

?>