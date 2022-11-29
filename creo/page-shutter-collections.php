<?php get_header(); ?>

<!-- header image with title -->
	<div class="header-img4">
		<div class=" header-overlay">
			<div class="row">
				<div class="col">
					<div class="header-block">
						<!-- <img src="wp-content\themes\creo\imgs\the-shutter-room-img1.jpg" alt=""> -->
						<div class="inner-header-block">
							<h1>Shutter Collections</h1>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p> -->
							<a class="button4" href="https://theshutterroom.co.uk/book-a-consultation/">Book A Consultation</a>
						</div>
					</div>
				</div> <!-- /.col -->
			</div>
		</div>
	</div> <!-- /.row -->

	<div class="container">
    <div class="row shutter-blk">

			<div class="col-12 shutter-container-grid">
				<div class="col-12 grid-desk">
					<?php include('inc/lrg-post-loop.php'); ?>
				</div>
				<div class="col-12 grid-mob">
					<?php include('inc/sm-post-loop.php'); ?>
				</div>
			</div>

    </div>

	<?php get_footer(); ?>
