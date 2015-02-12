<?php snippet('header') ?>

    <section class="section">
        <!-- Article header-->
        <header class="article-header">
            <div class="container">
                <h1 itemprop="name"><?php echo $page->title() ?></h1>
                <?php snippet('share') ?>
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
                    $children = $page->children()->visible()->flip();
                    foreach($children as $child):
                ?>

                <!-- Page -->
                <article class="listing listing-split">
                    <?php 
                        $image = $child->images()->first();
                        if($image){
                    ?>
                    <figure class="split-left">
                        <img src="<?= $image->url() ?>" alt="<?= $child->title() ?>" itemprop="image">
                    </figure>
                    <?php }  ?>
                    
                    <h2><a href="<?= $child->url() ?>" itemprop="name"><?= $child->title() ?></a></h2>

                    <?= kirbytext($child->summary()) ?>
                </article>
                <!-- / Page -->

                <?php endforeach ?>
                <!-- Child Pages -->

                <?php 
                    if($page->parent() == 'articles'){
                ?>
                <!-- Comments -->
                <div class="comments">
                    
                    <div id="disqus_thread"></div>

                </div>
                <!-- / Comments -->
                <?php } ?>

            </section>
        </article>
        <!-- / Article body-->


    </section>

<?php snippet('footer') ?>