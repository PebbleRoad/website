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

                <!-- Contact row -->
                <div class="contact-row">
                  <div class="contact-desc">
                    <?= kirbytext($page->body()) ?>
                  </div>
                  <div class="contact-map">
                    <div id="Map"></div>
                  </div>
                </div>
                <!-- / Contact row -->                

                
                <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
                <script type="text/javascript">
                  (function(){
                    
                    var prLatLong = new google.maps.LatLng(1.297302,103.815082),    
                        mapOptions = {
                          mapTypeId: google.maps.MapTypeId.ROADMAP,
                          mapTypeControl:true,
                          mapTypeControlOptions:{
                            position: google.maps.ControlPosition.TOP_RIGHT
                          },
                          panControl: false,
                          panControlOptions: {
                            position: google.maps.ControlPosition.TOP_LEFT
                          },
                          zoom:16,
                          center: prLatLong,
                          zoomControl: true,
                          zoomControlOptions: {
                            style: google.maps.ZoomControlStyle.LARGE,
                            position: google.maps.ControlPosition.LEFT
                          },
                          streetViewControl: false
                        },
                        infowindow;
                  
                  var map = new google.maps.Map(document.getElementById('Map'), mapOptions);

                  var marker = new google.maps.Marker({
                    position: prLatLong,
                    map: map,
                    title: "PebbleRoad",
                    animation: google.maps.Animation.DROP
                  });

                  var html= '<p><strong>PebbleRoad Pte Ltd</strong><br>314 Tanglin Road,<br/>#01-14 <br/>Singapore - 247977</p>',
                    infowindow = new google.maps.InfoWindow({
                      content: html,
                      maxWidth: 200
                    });

                  google.maps.event.addListener(marker,'click', function(e){
                    if(infowindow) infowindow.close();
                    
                    infowindow.open(map, marker);
                  });


                  })();
                </script>
        


            </section>
        </article>
        <!-- / Article body-->
    </section>

<?php snippet('footer') ?>