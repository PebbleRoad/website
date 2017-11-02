<?php snippet('header') ?>

    <section class="section">
        <!-- Article header-->
        <header class="article-header">
            <div class="container">
                <h1><?php echo $page->title()->html() ?></h1>                
                <p class="text-lead"><?php echo $page->summary() ?></p>
            </div>
        </header>
        <!-- / Article header-->

        <!-- Article body-->
        <article class="article-body">
            <section class="container">

                
                <?= kirbytext($page->body()) ?>

                <!-- Child Pages -->
                <?php
          
              $articles = $pages->find('articles')->children()->visible()->flip();

                    if($articles->count() > 0){
                ?>
                <h3>Articles</h3>
                <ul>
                <?php
                    foreach($articles as $a):
                ?>
                    <li><a href="<?= $a->url() ?>"><?= $a->title() ?></a></li>
                <?php 
                  endforeach
                 ?>
                </ul>
                <?php } ?>

                
               
            </section>
        </article>
        <!-- / Article body-->


    </section>

<?php snippet('footer') ?>