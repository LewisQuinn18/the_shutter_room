<?php if( have_rows('available_colours') ):?>

<?php while( have_rows('available_colours') ) : the_row();
  $colour = get_sub_field ("colour");
  $image = get_sub_field ("image");
?>

<div class="col-6 colours">
  <div class="available-colours">
    <div class="colour-grid-item">
      <img src="<?php echo $image ;?>">
      <h4><?php echo $colour; ?></h4>
    </div>
  </div>
  </div> <?php endwhile; ?>

<?php endif; ?>
