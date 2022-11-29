<?php get_header(); ?>

<!-- header image with title -->
	<div class=" header-img2">
		<div class=" header-overlay">
			<div class="row">
				<div class="col">
					<div class="header-block">
						<!-- <img src="wp-content\themes\creo\imgs\the-shutter-room-img1.jpg" alt=""> -->
						<div class="inner-header-block">
							<h1>About Us</h1>
							<p>Based in Ayrshire, The Shutter Room offers premium quality shutters for your home. We pride ourselves on going the extra mile to ensure complete customer satisfaction.</p>
							<a class="button4" href="https://theshutterroom.co.uk/book-a-consultation/">Book A Consultation</a>
						</div>
					</div>
				</div> <!-- /.col -->
			</div>
		</div>
	</div> <!-- /.row -->

  <!-- About the Shutter Room Block -->
  <div class="container">

		<!-- About Block Desktop/ Tablet -->
		<div class="about-desk">
	    <div class="row about-sec1">
	      <div class="col-6 about-sec1-cont">
	        <h2>About The Shutter Room</h2>
	        <p>Launched in 2022, The Shutter Room is an Ayrshire based company offering home shutter products of the finest standards. With a variety of premium shutters available from some of the most renowned manufacturers, we have something for any taste. With decades of industry experience under our belts, we possess the product knowledge and expertise to deliver value to our customers. We pride ourselves on going the extra mile to ensure complete customer satisfaction. Our helpful team will do everything we can to make sure our customers are happy with their product and the service they receive.</p>
	        <a href="https://theshutterroom.co.uk/book-a-consultation/" class="button4">Book A Consultation</a>
	      </div>
	      <div class="col-6 about-sec1-img">
	        <img src="<?php echo get_template_directory_uri(); ?>/imgs/the-shutter-room-img5.jpg" alt="">
	      </div>
	    </div>
		</div>

		<!-- About Block Mobile -->
		<div class="about-mob">
	    <div class="row about-sec1">
	      <div class="col-12 about-sec1-cont">
	        <h2>About The Shutter Room</h2>
	        <p>Launched in 2022, The Shutter Room is an Ayrshire based company offering home shutter products of the finest standards. With a variety of premium shutters available from some of the most renowned manufacturers, we have something for any taste. With decades of industry experience under our belts, we possess the product knowledge and expertise to deliver value to our customers. We pride ourselves on going the extra mile to ensure complete customer satisfaction. Our helpful team will do everything we can to make sure our customers are happy with their product and the service they receive.</p>
	        <a href="https://theshutterroom.co.uk/book-a-consultation/" class="button4">Book A Consultation</a>
	      </div>
	      <div class="col-12 about-sec1-img">
	        <img src="<?php echo get_template_directory_uri(); ?>/imgs/the-shutter-room-img5.jpg" alt="">
	      </div>
	    </div>
		</div>

		<!-- Covering Block Desktop/ Tablet -->
		<div class="about-desk">
	    <div class="row about-sec2">
	      <div class="col-6 about-sec2-img">
	        <img src="<?php echo get_template_directory_uri(); ?>/imgs/the-shutter-room-img6.jpg" alt="">
	      </div>
	      <div class="col-6 about-sec2-cont">
	        <h2>Covering Scotland’s Central Belt</h2>
	        <p>While we’re based in Ayrshire, we are proud to serve the central belt of Scotland. We offer a premium consultation and shutter service, travelling to meet our customers in person in order to provide the best possible service. We understand that everyone's needs are different, and we take care to tailor our shutters to each individual customer. Our extensive experience and knowledge guarantee we provide a high-quality product and service that our customers can rely on. We are passionate about what we do, and we believe that this shows in the quality of our work. If you are looking for beautiful, bespoke shutters, then please get in touch - we would be delighted to help you transform your home.</p>
	        <a href="https://theshutterroom.co.uk/shutter-collections/" class="button4">View Shutter Range</a>
	      </div>
	    </div>
		</div>

		<!-- Covering Block Mobile -->
		<div class="about-mob">
	    <div class="row about-sec1">
	      <div class="col-12 about-sec1-cont">
	        <h2>Covering Scotland’s Central Belt</h2>
	        <p>While we’re based in Ayrshire, we are proud to serve the central belt of Scotland. We offer a premium consultation and shutter service, travelling to meet our customers in person in order to provide the best possible service. We understand that everyone's needs are different, and we take care to tailor our shutters to each individual customer. Our extensive experience and knowledge guarantee we provide a high-quality product and service that our customers can rely on. We are passionate about what we do, and we believe that this shows in the quality of our work. If you are looking for beautiful, bespoke shutters, then please get in touch - we would be delighted to help you transform your home.</p>
	        <a href="https://theshutterroom.co.uk/shutter-collections/" class="button4">View Shutter Range</a>
	      </div>
				<div class="col-12 about-sec1-img">
	        <img src="<?php echo get_template_directory_uri(); ?>/imgs/the-shutter-room-img6.jpg" alt="">
	      </div>
	    </div>
		</div>

    <!-- Shutter Post Listing Grid -->
		<div class="">
			<div class="row shutter-block">

				<div class="col-12 shutter-web">
					<div class="col-8">
						<h2>Our Shutter Collections</h2>
					</div>
					<div class="col-4 shutter-block-r">
						<a class="button3" href="https://theshutterroom.co.uk/shutter-collections/">View All Shutters</a>
					</div>
				</div>

				<div class="col-12 shutter-mob">
					<div class="col-6">
						<h2>Our Shutter Collections</h2>
					</div>
					<div class="col-6 shutter-block-r">
						<a class="button3" href="https://theshutterroom.co.uk/shutter-collections/">View All Shutters</a>
					</div>
				</div>

				<div class="col-12 shutter-container-grid">
		    	<div class="owl-carousel owl-carousel-one owl-theme">
		      	<?php include('inc/post-loop.php'); ?>
		 			</div>
		    </div>
			</div>
		</div>

<?php get_footer(); ?>
