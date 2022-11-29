<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <script>
      document.addEventListener("click", x=>0)
    </script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>

  </head>

  <body>

    <div class="blog-masthead">
      <!-- <div class="container"> -->
        <div class="row header-top-banner">
          <div class="col-12 header-top">
            <p class="head-hide">Get In Touch</p>
            <p>Kilmarnock - 01563 481353</p>
            <p>Ayr - 01292 844001</p>
            <a href="http://www.facebook.com/TheShutterRoom"><i class="fab fa-facebook" style="padding-right: 15px; color:#333;"></i></a>
            <a href="https://instagram.com/the.shutter.room.scotland?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram" style="color:#333;"></i></a>
          </div>
        </div>

        <!-- <div class="header-bottom"> -->
          <div class="header-bottom">
            <div class="col-12 header-web">
              <div class="col-2 header-logo-img">
                <a href="https://theshutterroom.co.uk/"><img src="<?php echo get_template_directory_uri(); ?>/imgs/New-shutter-logo.png" alt=""></a>
              </div>
              <div class="col-7 header-bottom-sec">
                <nav class="header-nav">
                  <?php
                  wp_nav_menu( array(
                      'theme_location' => 'my-custom-menu',
                      'container_class' => 'custom-menu-class' ) );
                  ?>
            		</nav>
              </div>
              <div class="col-3 header-button">
                <a href="https://theshutterroom.co.uk/book-a-consultation/" class="button">Book A Consultation</a>
              </div>
            </div>
          </div>

          <!-- responsive header -->
          <div class="header-bottom">
            <div class="col-12 header-tablet">
              <div class="col-5 header-logo-img">
                <a href="https://theshutterroom.co.uk/"><img src="<?php echo get_template_directory_uri(); ?>/imgs/New-shutter-logo.png" alt=""></a>
              </div>
              <div class="col-3">
                <div class="dropdown">
                  <button class="dropbtn">
                    <i class="fa fa-bars"></i>
                  </button>
                  <div class="dropdown-content">
                    <nav class="header-nav">
                      <?php
                      wp_nav_menu( array(
                          'theme_location' => 'my-custom-menu',
                          'container_class' => 'custom-menu-class' ) );
                      ?>
                		</nav>
                  </div>
                </div>
              </div>
              <div class="col-4 header-button">
                <a href="https://theshutterroom.co.uk/book-a-consultation/" class="button">Book A Consultation</a>
              </div>
            </div>
          </div>

          <!-- responsive phone -->

          </div>
        <!-- </div> -->

      <!-- </div> -->
    </div>
