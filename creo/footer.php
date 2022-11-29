</div><!-- /.container -->

<footer class="blog-footer">

<!-- CTA Section -->
  <div class="row cta-background">
    <div class="col-12">
      <div class="footer-block">
				<div class="inner-footer-block">
					<h2>Book A Free Consultation</h2>
					<p>To being the process, simply leave us a few details to book a consultation with one of our shutter design experts.</p>
					<a class="button6" href="https://theshutterroom.co.uk/book-a-consultation/">Book A Consultation</a>
				</div>
			</div>
    </div>
  </div>

  <!-- Footer Contact Section -->
  <div class="container footer-blk">

    <!-- Desktop/ tablet Footer Design -->
    <div class="foot-norm">

      <div class="row">
        <div class="col footer-blk-l">
          <a href="https://theshutterroom.co.uk/"><img src="<?php echo get_template_directory_uri(); ?>/imgs/New-shutter-logo2.png" alt=""></a>
        </div>
        <div class="col footer-blk-c-one">
          <ul>
            <li>Email: info@theshutterroom.co.uk</li>
            <li>Kilmarnock Number - 01563 481353</li>
            <li>Ayr Number - 01292 844001</li>
          </ul>
        </div>
        <div class="col footer-blk-c-two">
          <nav class="blog-nav">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'footer-nav-one',
                'container_class' => 'custom-menu-class' ) );
            ?>
          </nav>
        </div>
        <div class="col footer-blk-r">
          <nav class="blog-nav">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'footer-nav-two',
                'container_class' => 'custom-menu-class' ) );
            ?>
          </nav>
        </div>
      </div>

      <div class="row">
        <div class="col-12 footer-block-btm">
          <div class="col-10 footer-blk-btm-l">
            <p>Website by <a href="https://creodesign.co.uk/">Creo Design</a>, part of <a href="https://solutionsondemand.co.uk/">Solutions on Demand</a>. All rights reserved. <a href="">Privacy Policy</a></p>
          </div>
          <div class="col-2 footer-block-btm-r">
            <a href="http://www.facebook.com/TheShutterRoom"><i class="fab fa-facebook" style="padding-right: 20px; color:#fff;"></i></a>
            <a href="https://instagram.com/the.shutter.room.scotland?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram" style="color:#fff;"></i></a>
          </div>
        </div>
      </div>
    </div>

    <!-- Mobile Footer Design -->
    <div class="foot-mobile">

      <div class="row">
        <div class="col-12">
          <div class="col-12 footer-blk-l">
            <a href="https://theshutterroom.co.uk/"><img src="<?php echo get_template_directory_uri(); ?>/imgs/New-shutter-logo2.png" alt=""></a>
          </div>
          <div class="col-12 footer-blk-c-one">
            <ul>
              <li>Email: info@theshutterroom.co.uk</li>
              <li>Kilmarnock Number - 01563 481353</li>
              <li>Ayr Number - 01292 844001</li>
            </ul>
          </div>
        </div>
        <div class="col-12 foot-mob-sec">
          <div class="col-6 footer-blk-c-two">
            <nav class="blog-nav">
              <?php
              wp_nav_menu( array(
                  'theme_location' => 'footer-nav-one',
                  'container_class' => 'custom-menu-class' ) );
              ?>
            </nav>
          </div>
          <div class="col-6 footer-blk-r">
            <nav class="blog-nav">
              <?php
              wp_nav_menu( array(
                  'theme_location' => 'footer-nav-two',
                  'container_class' => 'custom-menu-class' ) );
              ?>
            </nav>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-12 footer-block-btm">
          <div class="col-10 footer-blk-btm-l">
            <p>Website by <a href="https://creodesign.co.uk/">Creo Design</a>, part of <a href="https://solutionsondemand.co.uk/">Solutions on Demand</a>. All rights reserved. <a href="">Privacy Policy</a></p>
          </div>
          <div class="col-2 footer-block-btm-r">
            <a href="http://www.facebook.com/TheShutterRoom"><i class="fab fa-facebook" style="padding-right: 20px; color:#fff;"></i></a>
            <a href="https://instagram.com/the.shutter.room.scotland?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram" style="color:#fff;"></i></a>
          </div>
        </div>
      </div>
    </div>

  </div>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
<?php wp_footer(); ?>
</body>
</html>
