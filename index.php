<?php get_header(); ?>
  <div class="container-fluid padding margin-bottom-section">
    <div class="row row-portraits">

      <div class="col-xs-12 col-md-6 order-md-2 mobile-down">
<!--        <div class="portrait-images"> <img class="" src="--><?php //the_field('portrait_image'); ?><!--" alt="Nic"></div>-->
          <?php

          $images = get_field('portrait_gallery');
          $size = 'large'; // (thumbnail, medium, large, full or custom size)

          if( $images ): ?>
              <div class="portrait-images single-portrait-slider">
                  <?php foreach( $images as $image ): ?>
                      <img src="<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                  <?php endforeach; ?>
              </div>
          <?php endif; ?>
          <?php

          $images = get_field('portrait_gallery');
          $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

          if( $images ): ?>
              <div class="multiple-portraits-slider">
                  <?php foreach( $images as $image ): ?>
                      <div>
                          <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                      </div>
                  <?php endforeach; ?>
              </div>
                                                    <?php endif; ?>
      </div>
          <div class="col-xs-12 col-md-6 portrait_desc order-md-1">
        <h2><?php the_field('portrait_title'); ?></h2>
        <p>
          <?php the_field('portrait_description'); ?>
        </p>
        <p><i>Portrait size: </i>
          <?php the_field('portrait_size_width'); ?> x
            <?php the_field('portrait_size_height'); ?> cm
        </p>

        <div class="embed-container">
	<?php the_field('portrait_video'); ?>
</div>

        <div class="bottom-button">
          <a href="https://danielgotz.nl/wordpress/contact/"><button class="button4">contact</button>  </a></div>
      </div>
  </div>
</div>
  <hr>
  <div class="container-fluid padding">
    <div class="row row-bottom">
      <?php
        $gallery = array(
            'post_type' => 'portrait',
            'showposts' => -1
        );
        $the_query = new WP_Query( $gallery );

        if( $the_query->have_posts() ): ?>
        <div class="multiple-portraits" style="width: 100%;">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="col-md-4 mobile-portrait"> <a href="<?php the_permalink(); ?>">
              <div class="portrait-styling" style="background-image: url('<?php the_field('portrait_image')?>');">
               </div><p class="portrait-names"><?php the_field('portrait_title'); ?></p>
             </a> </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
          <?php wp_reset_query();?>
    </div>
  </div>
  <?php get_footer(); ?>