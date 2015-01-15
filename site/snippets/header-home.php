<?php snippet('meta') ?>
  
  <!-- Home banner -->
  <div class="banner">
    <!-- Branding-->
    <header class="branding">
      <a href="<?php echo url() ?>" title="Home" class="logo"><span class="visuallyhidden"><?php echo $site->title()->html() ?></span></a>
    </header>
    <!-- / Branding-->

    <!-- Article header-->
    <header class="article-header">
        <div class="container">
          <h1><?= $page->masthead() ?></h1>          
          <!-- Our Services-->
          <nav class="nav-services">
              <!-- Child Pages -->
              <?php
                  $icons = array('icon-map', 'icon-papers', 'icon-icons2', 'icon-workplace', 'icon-users2');
                  $count = 0;
                  
                  $servicesPage = $pages->find('services');                  
                  $services = yaml($servicesPage->services());                  
                  foreach($services as $service):
                                
              ?>
              <a href="<?= $servicesPage->url() ?>#<?= slugify($service['name']) ?>">
                <em class="icon <?= $icons[$count] ?>"></em>
                <h2><?= $service['blurb'] ?></h2>
              </a>
              <?php $count++; endforeach ?>
          </nav>
          <!-- / Our Services-->
        </div>
    </header>
    <!-- / Article header-->
  </div>
  <!-- / Home banner -->