<?php if( have_rows('shutter_image') ):?>

<?php while( have_rows('shutter_image') ) : the_row();
  $shutter = get_sub_field ("shutter_image");
?>

<div class="shutter">
  <div class="col-12 shut-post-grd">
    <div class="shut-grd-item">
      <img src="<?php echo $shutter ;?>">
    </div>
  </div>
</div>

<?php endwhile; ?>

<?php endif; ?>
