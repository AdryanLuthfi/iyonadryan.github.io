<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="iyon-favicon.ico" type="image/x-icon">
    <title>Gallery</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">

  </head>

  <body>
  <video width="100%" autoplay loop muted>
      <source src="img/vid/vid_20230713_175236_782.mp4" type="video/mp4">
      Your browser does not support HTML5 video.
    </video>

    <section id="tranding">
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h3 class="text-center section-subheading">Iyon &hearts; Ciwul </h3>
        <h1 class="text-center section-heading">
          <div class="rating">
            <ion-icon name="star"></ion-icon>
          </div>
        </h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/photo/';
                $arrays = array(
                    1 => array('date' => '13-07-2023', 'img' => '1_20230713_175236_782_90s.jpg'),
                    2 => array('date' => '29-07-2023', 'img' => '2_IMG_20230729_231951_881.jpg'),
                    3 => array('date' => '29-07-2023', 'img' => '3_IMG_20230729_231951_962.jpg'),
                    4 => array('date' => '09-09-2023', 'img' => '4_IMG_20230909_192928_757.jpg'),
                    5 => array('date' => '28-10-2023', 'img' => '5_IMG_20231028_234140_594.jpg')
                );
                foreach($arrays as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value['img']; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h6 class="img-number"><?= $value['date']; ?></h6>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->

          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h3 class="text-center section-subheading">&hearts; Start Dating (The Breeze BSD City)	&hearts;</h3>
        <h1 class="text-center section-heading">19/07/2023</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/20230719_start_dating/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->

          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h3 class="text-center section-subheading">&#128247; Selfie Time MKG 	&#128247;</h3>
        <h1 class="text-center section-heading">29/07/2023</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/selfie_time_mkg/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->

          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h3 class="text-center section-subheading">&#x2615; Coffee Date	&#x2615;</h3>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/coffee_date/';
                $arrays = array(
                    1 => array('star' => 4, 'img' => '1_2023-03-11_12-43-51.jpg', 'fav' => false, 'name' => 'Kotta Kopi Kelapa Gading'),
                    2 => array('star' => 5, 'img' => '2_2023-05-06_19-37-11.jpg', 'fav' => false, 'name' => 'LazyBoss Coffee and Desserts'),
                    3 => array('star' => 5, 'img' => '3_2023-05-18_18-48-29.jpg', 'fav' => true, 'name' => 'Twizzly Coffee n Bake'),
                    4 => array('star' => 5, 'img' => '4_2023-07-13_23-29-53.jpg', 'fav' => false, 'name' => 'Identic Coffee Shop'),
                    5 => array('star' => 5, 'img' => '5_2023-07-23_134749_294.jpg', 'fav' => true, 'name' => 'Have A Treat'),
                    6 => array('star' => 4, 'img' => '6_2023-07-26_11-57-28.jpg', 'fav' => false, 'name' => 'Dobro Coffee'),
                    7 => array('star' => 5, 'img' => '7_2023-08-03_083348_241.jpg', 'fav' => true, 'name' => 'Kolibrew Coffee & Patisserie'),
                    8 => array('star' => 5, 'img' => '8_2023-08-12_005149_635.jpg', 'fav' => true, 'name' => 'Cafe Liebe Blume'),
                    9 => array('star' => 5, 'img' => '9_2023-09-06_222056_039.jpg', 'fav' => true, 'name' => 'Tavor Cafe'),
                    10 => array('star' => 5, 'img' => '10_2023-09-12_103204_996.jpg', 'fav' => true, 'name' => 'Affan Coffee House (Kebantenan)')
                );
                foreach($arrays as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value['img']; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= $key; ?></h1>
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                    <?= $value['name']; ?>
                  </h2>
                  <h3 class="food-rating">
                    <span><?= (($value['fav'])) ? $value['star'].'(FAV)' : $value['star']; ?></span>
                    <div class="rating">
                      <?php for ($x = 0; $x <  $value['star']; $x++) { ?>
                        <ion-icon name="star"></ion-icon>
                      <?php } ?>
                    </div>
                  </h3>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->
            
          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <center>
      <div style="color:palevioletred">
        <h1>
          &hearts;
          &hearts;
          &hearts;
          &hearts;
          &hearts;
        </h1>
        <div style="max-width: 32rem;">
          <a href="info.html" class="btn-grad">Info</a>
        </div>
      </div>
      </center>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h1 class="text-center section-heading">28/10/2023</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/20231028/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->

          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h1 class="text-center section-heading">21/10/2023</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/20231021/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->

          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h1 class="text-center section-heading">18/10/2023</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/20231018/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->

          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h1 class="text-center section-heading">11/10/2023</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/20231011/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->

          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h1 class="text-center section-heading">30/09/2023</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/20230930/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->

          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h1 class="text-center section-heading">28/09/2023</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/20230928/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->

          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h1 class="text-center section-heading">16/09/2023</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/20230916/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->

          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h1 class="text-center section-heading">12/09/2023</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/20230912/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->

          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h1 class="text-center section-heading">09/09/2023</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/20230909/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->

          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h1 class="text-center section-heading">06/09/2023</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/20230906/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->

          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h1 class="text-center section-heading">01/09/2023</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/20230901/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->

          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h1 class="text-center section-heading">29/08/2023</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/20230829/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->

          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h1 class="text-center section-heading">22/08/2023</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/20230822/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->

          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h1 class="text-center section-heading">19/08/2023</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/20230819/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->

          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h1 class="text-center section-heading">12/08/2023</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/20230812/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->
            
          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h1 class="text-center section-heading">02/08/2023</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/20230802/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->
            
          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h1 class="text-center section-heading">29/07/2023</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/20230729/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->

          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h1 class="text-center section-heading">22/07/2023</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/20230722/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->

          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h1 class="text-center section-heading">13/07/2023</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/20230713/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->

          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h1 class="text-center section-heading">07/07/2023</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/20230707/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->

          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h1 class="text-center section-heading">24/06/2023</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/20230624/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->

          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h1 class="text-center section-heading">18/05/2023</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/20230518/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->
            
          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h1 class="text-center section-heading">06/05/2023</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/20230506/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->

          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h1 class="text-center section-heading">10/03/2023</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/20230310/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->

          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h1 class="text-center section-heading">18/02/2023</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/20230218/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->

          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h1 class="text-center section-heading">20/12/2022</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/20221220/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->
            
          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h1 class="text-center section-heading">03/01/2017</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/20170103/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->

          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
      <br>
      <br>
      <br>
      <!----------------------------------------------------->
      <!-- Swiper start -->
      <div class="container">
        <h1 class="text-center section-heading">16/07/2016</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <?php
                $dir    = 'img/20160716/';
                $files = array_diff(scandir($dir), array('..', '.'));
                foreach($files as $key=>$value): 
            ?>
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="<?= $dir.$value; ?>" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <h1 class="img-number"><?= (int)$key-1; ?></h1>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- Slide-end -->
        
          </div>
          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>

        </div>
      </div>
      <!-- Swiper end -->
      <!----------------------------------------------------->
    </section>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="script.js"></script>

  </body>
</html>