<?php snippet('header') ?>

    <section class="section" itemscope itemtype="http://schema.org/Article">
        <!-- Article header-->
        <header class="article-header">
            <div class="container">
                <h1><?php echo $page->title()->html() ?></h1>
                <p itemprop="dateCreated" class="text-date"><?= $page->date('d F Y') ?></p>
                <p class="text-authors">by <?= $page->author() ?></p>
                <?php snippet('share') ?>
                <p class="text-lead" itemprop="description"><?php echo $page->summary() ?></p>
            </div>
        </header>
        <!-- / Article header-->

        <!-- Article body-->
        <article class="article-body" itemprop="articleBody">
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

                
                <!-- Comments -->
                <div class="comments">
                    
                    <div id="disqus_thread"></div>

                </div>
                <!-- / Comments -->


            </section>
        </article>
        <!-- / Article body-->


    </section>

<?php snippet('footer') ?>