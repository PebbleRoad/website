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
$upcoming = $page->children()->filter(function($c){
	return time() < $c->date();
});
foreach($upcoming as $u):
?>

<article class="listing">
<h4>Upcoming events</h4>
<h2><a href="<?= $u->url() ?>"><?= $u->title() ?></a></h2>
<p itemprop="dateCreated" class="text-date"><?= $u->date('d F Y') ?></p>
<?= kirbytext($u->summary()) ?>
</article>
<? endforeach ?>
                <!-- Article grid -->
                <div class="article-columns" data-columns>

                <!-- Child Pages -->
                <?php
                    $children = $page->children()->filter(function($c){
			return time() > $c->date();
			})->visible()->flip();
		foreach($children as $child):
                ?>
                    <!-- Page -->
                    <article class="listing listing-split">

                        <?php 
                            $image = $child->images()->find('thumb.png');
                            if($image){
                        ?>
                        <a href="<?= $child->url() ?>">
                        <figure>                            
                                <img src="<?= $image->url() ?>" alt="<?= $child->title() ?>" itemprop="image">                            
                        </figure>
                        </a>
                        <?php }  ?>
                        
                        <h2><a href="<?= $child->url() ?>" itemprop="name"><?= $child->title() ?></a></h2>
                        <p itemprop="dateCreated" class="text-date"><?= $child->date('d F Y') ?></p>

                        <?= kirbytext($child->summary()) ?>
                        
                    </article>
                    <!-- / Page -->

                    <?php endforeach ?>
                    <!-- Child Pages -->

                </div>
                <!-- / Article grid -->

                               
            </section>
        </article>
        <!-- / Article body-->


    </section>

<?php snippet('footer') ?>
