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

              <!-- Child Pages -->
              <?php                  
                  $services = yaml($page->services());
                  foreach($services as $service):
              ?>

              <article class="listing listing-split listing-services" id="<?= slugify($service['name']) ?>">
                <div class="split-left">
                  <h2><?= $service['name'] ?></h2>
                  <p class="text-clients"><strong>Clients: </strong><?= $service['clients'] ?></p>
                </div>

                <?= kirbytext($service['description']) ?>

                <? if(!empty(trim($service['case']))){ 
                  ?>

                  <span class="text-label">Case study</span>

                  <?= kirbytext($service['case']) ?>
                <?php } ?>

                <?= $service['body']? kirbytext($service['body']): '' ?>

              </article>

              


              <?php endforeach ?>
              <!-- Child Pages -->
            </section>
        </article>
        <!-- / Article body-->
    </section>

<?php snippet('footer') ?>