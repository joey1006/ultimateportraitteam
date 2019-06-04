<?php get_header(); ?>
  <?php
$portraits = array(
    'post_type' => 'portrait',
    'showposts' => 10
);
$the_portraits_query = new WP_Query( $portraits );
?>
    <div class="container-fluid">
      <div class="portraits-section">
        <div class="padding">
          <div class="row">
            <div class="col-md-12">
              <h2 class="content-h2 content-h2-2 h2-up">Portraits</h2> </div>
            <?php while ($the_portraits_query->have_posts()) : $the_portraits_query->the_post(); ?>
              <div class="col-md-4 mobile-portrait portrait-section-portraits"> <a href="<?php the_permalink(); ?>">
              <div class="portrait-styling" style="background-image: url('<?php the_field('portrait_image')?>');">
               </div> <p class="portrait-names"><?php the_field('portrait_title'); ?></p>
             </a> </div>
              <?php endwhile;
        wp_reset_query();?>
          </div>
        </div>
      </div>
    </div>
    <?php get_footer(); ?>