<?php get_header(); ?>

<!-- header image with title -->
	<div class="post-header-img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
		<div class=" header-overlay">
			<div class="row">
				<div class="col">
					<div class="header-block">
						<!-- <img src="wp-content\themes\creo\imgs\the-shutter-room-img1.jpg" alt=""> -->
						<div class="inner-header-block">
							<h1 class="shutter-post-title"><?php the_title(); ?></h1>
							<a class="button4" href="https://theshutterroom.co.uk/book-a-consultation/">Book A Consultation</a>
						</div>
					</div>
				</div> <!-- /.col -->
			</div>
		</div>
	</div> <!-- /.row -->

	<div class="container">

		<!-- Shutter Content -->
		<div class="row">
			<div class="col-12 shutter-post-grid">

				<!-- Shutter Single Desktop/ Tablet -->
				<div class="sing-nrm">
					<!-- Shutter Post Left Col -->
					<div class="col-6 shut-post-grd-l">
						<h2 class="shutter-post-sub"><?php the_title(); ?></h2>
						<div class="shutter-post-p">
							<p class=""><?php the_field('blade_sizes');?></p>
						</div>
						<a href="https://theshutterroom.co.uk/book-a-consultation/" class="button4">Book A Consultation</a>
					</div>

					<!-- Shutter Post Right Col -->
					<div class="col-6 shut-post-grd-r">
						<img src="<?php the_field('shutter_image');?>" alt="">
				 	</div>
				</div>

				<!-- Shutter Single Mobile -->
				<div class="sing-mob">
					<!-- Shutter Post Left Col -->
					<div class="col-12 shut-post-grd-l">
						<h2 class="shutter-post-sub"><?php the_title(); ?></h2>
						<div class="shutter-post-p">
							<p class=""><?php the_field('blade_sizes');?></p>
						</div>
						<a href="https://theshutterroom.co.uk/book-a-consultation/" class="button4">Book A Consultation</a>
					</div>

					<!-- Shutter Post Right Col -->
					<div class="col-12 shut-post-grd-r">
						<img src="<?php the_field('shutter_image');?>" alt="">
				 	</div>
				</div>

			</div>
		</div>

		</div>

		<!-- Avaliable Colours Desk -->
		<div class="aval-col-desk">
			<div class="row colour-ct">
				<div class="col-12 colour-cont">
					<div class="col-12">
						<?php include('inc/colours.php'); ?>
					</div>
				</div>
			</div>
		</div>

		<!-- Avaliable Colours Mob -->
		<div class="aval-col-mob">
			<div class="row colour-ct">
				<div class="col-12 colour-cont">
					<div class="col-12">
						<?php include('inc/colours-mob.php'); ?>
					</div>
				</div>
			</div>
		</div>

		<!-- Related Shutter Posts -->
		<div class="">
			<div class="row shutter-block-pst">

				<div class="col-12 shutter-web">
					<div class="col-8">
						<h2>Related Shutter Collections</h2>
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
