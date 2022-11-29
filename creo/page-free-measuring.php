<?php get_header(); ?>

<!-- header image with title -->
	<div class="header-img6">
		<div class=" header-overlay">
			<div class="row">
				<div class="col">
					<div class="header-block">
						<!-- <img src="wp-content\themes\creo\imgs\the-shutter-room-img1.jpg" alt=""> -->
						<div class="inner-header-block">
							<h1>Free Measuring</h1>
							<p>We offer a free measuring service to all of our customers, meaning there’s one less thing for you to worry about.</p>
							<a class="button4" href="https://theshutterroom.co.uk/book-a-consultation/">Book A Consultation</a>
						</div>
					</div>
				</div> <!-- /.col -->
			</div>
		</div>
	</div> <!-- /.row -->

  <!-- FULL HEIGHT Block -->
  <div class="container">

		<!-- Book Measuring Block Desktop/ Tablet-->
		<div class="about-desk">
	    <div class="row about-sec1">
	      <div class="col-6 about-sec1-cont">
	        <h2>Book A Measuring Consultation</h2>
	        <p>We understand that finding the perfect window shutters for your home is about more than just choosing the right style. Shutters are a significant investment, and it's important to make sure that they are properly installed in order to get the most value for your money. That's why we offer a complimentary measuring consultation. Our experienced team will come to your home, take precise measurements of your windows, and help you choose the best size and style of shutters for your needs. We'll also provide a detailed quote so that you can make an informed decision about your investment. To book your free consultation, simply give us a call or fill out our online form. We look forward to helping you find the perfect shutters for your home.</p>
	        <a href="https://theshutterroom.co.uk/book-a-consultation/" class="button4">Book A Consultation</a>
	      </div>
	      <div class="col-6 about-sec1-img">
	        <img src="<?php echo get_template_directory_uri(); ?>/imgs/the-shutter-room-img14.jpg" alt="">
	      </div>
	    </div>
		</div>

		<!-- Book Measuring Block Desktop/ Tablet-->
		<div class="about-mob">
	    <div class="row about-sec1">
	      <div class="col-12 about-sec1-cont">
	        <h2>Book A Measuring Consultation</h2>
	        <p>We understand that finding the perfect window shutters for your home is about more than just choosing the right style. Shutters are a significant investment, and it's important to make sure that they are properly installed in order to get the most value for your money. That's why we offer a complimentary measuring consultation. Our experienced team will come to your home, take precise measurements of your windows, and help you choose the best size and style of shutters for your needs. We'll also provide a detailed quote so that you can make an informed decision about your investment. To book your free consultation, simply give us a call or fill out our online form. We look forward to helping you find the perfect shutters for your home.</p>
	        <a href="https://theshutterroom.co.uk/book-a-consultation/" class="button4">Book A Consultation</a>
	      </div>
	      <div class="col-12 about-sec1-img">
	        <img src="<?php echo get_template_directory_uri(); ?>/imgs/the-shutter-room-img14.jpg" alt="">
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
