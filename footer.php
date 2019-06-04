</div> <footer>
      <?php
      query_posts(array(
          'post_type' => 'portrait',
          'showposts' => 4
      ) );
      ?>
      <div class="section">
      <div class="container-fluid padding center-mobile">
          <div class="row footer no-margin">
              <div class="col-sm-12 col-md-4 col-lg-4 footer">
                <h3> Ultimate portraits</h3>
                <?php while (have_posts()) : the_post(); ?>
                        <a href="<?php the_permalink(); ?>"><p class="portrait_title"><?php the_field('portrait_title'); ?></p></a>
              <?php endwhile; ?>
                  <p class="CTA_footer"> <a href="/portraits">See all portraits</a></p>
              </div>
              <div class="col-sm-12 col-md-4 col-lg-4 footer">
                <h3> Pages</h3>
                <?php wp_nav_menu(); ?>
              </div>
<!--
              <div class="col-md-3 footer">
              </div>
-->
              <div class="col-sm-12 col-md-4 col-lg-4 offset-lg-3 footer">
                <h3> Contact</h3>
                <p class="color-footer"><a href="tel:+31614489594">+316 14 48 95 94</a></p>
                <p class="color-footer"><a href="mailto:daan@naadartworks.com">daan@naadartworks.com</a></p>
              </div>
            </div>
            <div class="row footer-padding footer-margin-top">

                <div class="col-md-12 col-lg-3 order-md-2 left-a-bit icon-margin-mobile icon-fix">
                    <a href="https://www.facebook.com/DanielJeremydeJong" target="_blank"><i class="i-size fab fa-facebook-square"></i></a>
                    <a href="https://www.instagram.com/danieljeremy.naad/?hl=en" target="_blank"><i class="i-size fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/daniel-jeremy-9453394/" target="_blank"><i class="i-size fab fa-linkedin"></i></a>
                </div>
                              <div class="col-sm-12 col-md-12 col-lg-9 order-md-1">
                <p class="kvk">kvk: BV15785KHGU448767 | All Daniel Jeremy from Naad Artworks &copy; <?php echo date("Y"); ?> All rights reserved</p>
              </div>
            </div>
          </div>
        </div>

    </footer>
    <?php  wp_footer(); ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/slick/slick.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/main.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/lightbox-plus-jquery.min.js"></script>
  </body>
</html>
