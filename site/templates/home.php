<?php snippet('header-home') ?>
    
    <section class="section">        
        <!-- Article body-->
        <article class="article-body">
            
            <!-- Grid list -->
            <section class="article-grid">
              <article>
                  <?php
                    $category = $pages->find('articles');
                    $items = $category->children()->visible()->flip()->limit(1);
                  ?>
                  <h2 class="visuallyhidden"><?= $category->title() ?></h2>
                  <a class="text-label" href="<?= $category->url() ?>"><?= $category->title() ?></a>
                  <?php foreach($items as $item): ?>
                  <h3><a href="<?= $item->url() ?>"><?= $item->title() ?></a></h3>
                  <?= kirbytext(truncate($item->summary(), 20, '...')) ?>
                  <?php endforeach ?>
              </article>
              <article>
                  <?php
                    $category = $pages->find('events');
                    $items = $category->children()->visible()->flip()->limit(1);
                  ?>
                  <h2 class="visuallyhidden"><?= $category->title() ?></h2>
                  <a class="text-label" href="<?= $category->url() ?>"><?= $category->title() ?></a>
                  <?php foreach($items as $item): ?>
                  <h3><a href="<?= $item->url() ?>"><?= $item->title() ?></a></h3>
                  <?= kirbytext(truncate($item->summary(), 20, '...')) ?>
                  <?php endforeach ?>
              </article>
              <article>
                  <?php
                    $category = $pages->find('labs');
                    $items = $category->children()->visible()->flip()->limit(1);
                  ?>
                  <h2 class="visuallyhidden"><?= $category->title() ?></h2>
                  <a class="text-label" href="<?= $category->url() ?>"><?= $category->title() ?></a>
                  <?php foreach($items as $item): ?>
                  <h3><a href="<?= $item->url() ?>"><?= $item->title() ?></a></h3>
                  <?= kirbytext(truncate($item->summary(), 20)) ?>
                  <?php endforeach ?>
              </article>
                          
            </section>
            <!-- / Grid list -->
            <!-- Grid list -->
            <section class="article-grid">
              <article>
                  <?php
                    $category = $pages->find('books');
                    $items = $category->children()->visible()->flip()->limit(1);
                  ?>
                  <h2 class="visuallyhidden"><?= $category->title() ?></h2>
                  <a class="text-label" href="<?= $category->url() ?>"><?= $category->title() ?></a>
                  <?php foreach($items as $item): ?>
                  <h3><a href="<?= $item->url() ?>"><?= $item->title() ?></a></h3>
                  <?= kirbytext(truncate($item->summary(), 20, '...')) ?>
                  <?php endforeach ?>
              </article>

              <article>
                  <h2 class="visuallyhidden">Google+</h2>
                  <a class="text-label" href="https://plus.google.com/116500201979181780899">Google+</a>
                  
                  <?php 
                  foreach(gPlus(1) as $feed): 
                  ?>
                  <h3><a href="https://plus.google.com/116500201979181780899"><?= truncate($feed->title, '10', '...') ?></a></h3>
                  <?php if(isset($feed->object->content)) { ?>
                  <p><?= $feed->object->content ?></p>
<?php
echo '<!--';
//print_r($feed);
echo '-->';
?>
		  <?php } ?>
                  <?php endforeach ?>
              </article>
              <a class="newsletter" href="http://pebbleroad.us2.list-manage1.com/subscribe?u=7039e618134bbccd1c1d6b82e&id=9efa45b5a3">

                <p>Newsletter</p>
                <p class="title">Handpicked stories from the team at PebbleRoad</p>

                <p class="link">Subscribe</p>
                
              </a>
            </section>            
            <!-- / Grid list -->


        </article>
    </section>

<?php snippet('footer') ?>
