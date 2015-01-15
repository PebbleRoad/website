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


                <?php
                    $children = $page->children();

                    foreach($children as $child):
                ?>

                <!-- Service -->
                <article class="listing listing-split" itemscope itemtype="http://schema.org/Person">
                    <?php 
                        $image = $child->images()->find('thumb.png');
                        if($image){
                    ?>
                    <figure class="split-left">
                        <img src="<?= $image->url() ?>" alt="<?= $child->title() ?>" itemprop="image">
                    </figure>
                    <?php }  ?>
                    
                    <h2><a href="<?= $child->url() ?>" itemprop="name"><?= $child->title() ?></a></h2>

                    <?= kirbytext($child->summary()) ?>

                    <?php snippet('license') ?>
                    
                </article>
                <!-- / Service-->
            
                <?php endforeach ?>

            </section>
        </article>
        <!-- / Article body-->
    </section>

<?php snippet('footer') ?>