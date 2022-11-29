<?php
$args =  array(
  'post_type' => 'shutter-post',
  // 'orderby' => 'menu_order',
  // 'order' => 'ASC'
  'posts_per_page' => 6,
  'post__not_in' => array(get_the_ID())
);

$custom_query = new WP_Query( $args ); ?>

<?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
  <div class="col-6 lrg-shutter">
    <div class="lrg-shutter-post">
      <div class="shutter-post-cont" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
        <div class="blog-post">
          <h3 class=""><a class="blog-post-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>
      </div>
    </div>
  </div>

<?php endwhile; ?>
