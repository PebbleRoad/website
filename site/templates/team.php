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

                <h2 class="visuallyhidden">Meet the team</h2>

                <?php
                    $children = $page->children();

                    foreach($children as $child):
                ?>

                <!-- Service -->
                <article class="listing listing-split listing-team" itemscope itemtype="http://schema.org/Person">
                    <?php 
                        $image = $child->images()->find('thumb.png');
                        if($image){
                    ?>
                    <figure class="split-left figure-person">
                        <img src="<?= $image->url() ?>" alt="<?= $child->title() ?>" itemprop="image">
                    </figure>
                    <?php }  ?>
                    
                    <h3 itemprop="name"><?= $child->title() ?></h3>

                    <?= kirbytext($child->summary()) ?>

                    <!-- Social -->
                    <p>
                        <?php
                        if($child->twitter() != ''):
                        ?>
                        <a class="link-twitter link-round" href="<?= $child->twitter() ?>" rel="external twitter"><span class="visuallyhidden">Twitter</span></a>
                        <? endif ?>
                        
                        <?php
                        if($child->linkedin() != ''):
                        ?>
                        <a class="link-linkedin link-round" href="<?= $child->linkedin() ?>" rel="external linkedin"><span class="visuallyhidden">LinkedIn</span></a>
                        <? endif ?>
                        
                        <?php
                        if($child->google() != ''):
                        ?>
                        <a class="link-gplus link-round" href="<?= $child->google() ?>" rel="external gplus"><span class="visuallyhidden">Google Plus</span></a>
                        <? endif ?>

                        <?php
                        if($child->github() != ''):
                        ?>
                        <a class="link-github link-round" href="<?= $child->github() ?>" rel="external github"><span class="visuallyhidden">Github</span></a>
                        <? endif ?>
                                               
                    </p>
                    <!-- / Social -->

                </article>
                <!-- / Service-->
            
                <?php endforeach ?>

            </section>
        </article>
        <!-- / Article body-->
    </section>

<?php snippet('footer') ?>