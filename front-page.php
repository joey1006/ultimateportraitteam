<?php get_header(); ?>
  <div class="container-fluid">
    <div class="row row-margin">
      <div class="col-sm-12 order-md-2 col-md-6 header-image">
        <div class="landing-image"> </div>
      </div>
      <div class="col-sm-12 order-md-1 col-md-6 landing-text padding-left row-mobile">
        <div class="logo"><img src="https://danielgotz.nl/wordpress/wp-content/uploads/2019/05/Daniel-jeremy-logo_V02.svg"></div>
        <div class="content">
          <h2 class="content-h2">Welcome to The Ultimate Portrait</h2>
          <p>In this series NaadArtworks paints with objects. These items are used in the same manner as George Seurat made paintings out of dots, David Hockney used Polaroids in his work in the 70s and of course the portraits of Giuseppe Arcimboldo. </p>
          <p> Because of the three-dimensional characteristics of objects, the work sews a fine line between sculpture and painting. </p>
          <p> The items used aren’t just any material. These objects are from the portrayed and have emotional value. They are stuff that people might collect because it tells a story, or represent a period of life. For example: a pair of glasses, a ticket to a concert, or a lighter that may have ignited a love. It’s about the life experiences, which are collected and saved as memorabilia. </p>
          <p> The portrait not only shows an external appearance, but also reflects the journey through a life.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid padding margin-bottom-section">
    <div class="row">
      <!--        <div class="col-sm-1"></div>-->
      <!--        <div class="col-sm-11"><h2>Portraits</h2></div>-->
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
  <hr id="about">
  <div class="container-fluid padding">
    <div class="row about ">
      <!--        <div class="col-md-1 offset"></div>-->
      <div class="col-md-12 col-lg-6">
        <div class="about-image mobile-portrait"> <img src="https://danielgotz.nl/wordpress/wp-content/uploads/2019/05/daniel_jeremy.jpg" alt="" width="450px"></div>
      </div>
      <div class="col-md-12 col-lg-6 about-text content">
        <h2 class="content-h2 h2-up">My name is Daniel Jeremy</h2>
        <p> Daniel is multitalented artist. Strong at realise artwork and making the design. With a strong love for materials he develops, paints, designs and custom made furniture. </p>
        <p><i> “His work is highly intense and contains craftsmanship. His portraits are spot on and a lust for the eye.”</i></p>
        <p> Daniel love’s Drawing, Painting, Sculptures, Assemblage, Portraits, Objects, Furniture, Custom, Upcycle, object trouvé, Inspired by Matter, Emotional, Rhythm &amp; Balance, Dream, Color &amp; Shape. </p>
        <div class="bottom-button margin-bottom">
          <a href="https://danielgotz.nl/wordpress/contact/">
            <button class="button3 content ">contact</button>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="margin-top2">
    <hr> </div>
  <div class="container-fluid padding">
    <div class="row before-footer">
      <div class="col-md-12">
        <h2 class="content-h2"> Process</h2>
        <div class="row no-margin">
          <div class="col-md-12 col-lg-2 mobile-portrait mobile-icon">
            <div class="icon2">
              <svg class="light-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 111 75">
                <title>Asset 2</title>
                <g id="Layer_2" data-name="Layer 2">
                  <g id="Layer_4" data-name="Layer 4">
                    <path class="cls-1" d="M108,0H3A3,3,0,0,0,0,3V72a3,3,0,0,0,3,3H108a3,3,0,0,0,3-3V3A3,3,0,0,0,108,0Zm-7.25,6L64.27,34.76l-1.15.91-7.58,6L48,35.44,47.41,35s0,0,0,0L12.26,6ZM6,8.63,41,37.49,6,65.64ZM11.4,69,45.78,41.39l7.81,6.43a3,3,0,0,0,1.91.68,3,3,0,0,0,1.86-.64l8.2-6.46L99.92,69ZM105,65.38,70.4,37.58,105,10.3Z" /> </g>
                </g>
              </svg>
            </div>
            <h4 class="h4-text">Contact</h4>
            <p>Get in contact by email, phone or via the links below / OR / by Email or phone detailed below. Let’s make a deal. Price, format and deadline.1/3 rd deposit (of proposal price)</p>
          </div>
          <div class="col-md-12 col-lg-2 mobile-portrait mobile-icon">
            <div class="icon2">
              <svg class="light-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 117 111.67">
                <title>box</title>
                <g id="Layer_2" data-name="Layer 2">
                  <g id="Layer_4" data-name="Layer 4">
                    <path class="cls-1" d="M116.76,46.35l0-.06a1.52,1.52,0,0,0-.11-.22.4.4,0,0,0,0-.09h0a2.64,2.64,0,0,0-.24-.34L105.4,32.13l-.22-.27h0a.86.86,0,0,0,.07-.17,3.13,3.13,0,0,0,.14-.9v.81l10.73-13a1.71,1.71,0,0,0,.21-.26,1.1,1.1,0,0,0,.13-.17s0,0,0,0a3.31,3.31,0,0,0,.19-.32v0a1.68,1.68,0,0,0,.16-.39l0,0a1.53,1.53,0,0,0,.08-.37.59.59,0,0,0,0-.13,2.43,2.43,0,0,0,0-.38,2.07,2.07,0,0,0,0-.35,2.75,2.75,0,0,0-.29-1s0,0,0,0a2.44,2.44,0,0,0-.24-.38,2.76,2.76,0,0,0-.26-.32,3.06,3.06,0,0,0-1.28-.78l-.17,0L71.12.17,71,.13l-.12,0A1.63,1.63,0,0,0,70.51,0a2.56,2.56,0,0,0-.39,0,2,2,0,0,0-.42,0,.14.14,0,0,0-.09,0,1.87,1.87,0,0,0-.34.08l-.13,0a3.24,3.24,0,0,0-.39.16h0c-.13.08-.26.16-.38.25A2,2,0,0,0,68,.84a2.64,2.64,0,0,0-.35.4L59.4,11.3,51.1,1.24A2.45,2.45,0,0,0,50.69.8a1.43,1.43,0,0,0-.3-.25h0a2.29,2.29,0,0,0-.29-.18L50,.33a3.25,3.25,0,0,0-.39-.16l-.13,0A2,2,0,0,0,49.19,0,.34.34,0,0,0,49,0a2,2,0,0,0-.35,0,2.56,2.56,0,0,0-.39,0h-.1a1.3,1.3,0,0,0-.27.06l-.12,0-.12,0L4.06,13.52l-.15,0a3.34,3.34,0,0,0-.44.17,3,3,0,0,0-.84.61,2.78,2.78,0,0,0-.26.32,2.07,2.07,0,0,0-.25.4,2.84,2.84,0,0,0-.17.4.25.25,0,0,0,0,.07,2.61,2.61,0,0,0-.09.38.14.14,0,0,0,0,.09,2,2,0,0,0,0,.42v0a2.19,2.19,0,0,0,0,.36,2.22,2.22,0,0,0,.1.5l0,0a1.69,1.69,0,0,0,.16.39,2,2,0,0,0,.22.37l.11.15a.18.18,0,0,0,.05.07L12.55,30.55h0l.09.11-.11.14L.75,45.53l0,0-.12.16a.36.36,0,0,0-.07.1l-.06.1a.6.6,0,0,0-.09.15,2.28,2.28,0,0,0-.17.35A3,3,0,0,0,0,47.87a1.55,1.55,0,0,0,0,.21.52.52,0,0,0,0,.11.35.35,0,0,0,0,.11,2.59,2.59,0,0,0,.18.51c.07.13.14.26.22.38s.18.24.28.35.21.21.32.31h0a2.52,2.52,0,0,0,.34.23l.1.06.23.11.06,0,.06,0,10.63,4.14V92.55a3,3,0,0,0,1.95,2.81l43.43,16.12.15,0a2.22,2.22,0,0,0,.37.09l.18,0,.35,0,.34,0,.18,0a2.15,2.15,0,0,0,.42-.11l.1,0,43.43-16.12a3,3,0,0,0,2-2.81V54.09l9.69-3.77a.2.2,0,0,0,.08,0l.06,0a1.5,1.5,0,0,0,.22-.11l.09-.05h0a2.6,2.6,0,0,0,.34-.24l.16-.15.16-.16a2.43,2.43,0,0,0,.25-.31s0,0,0,0a2.48,2.48,0,0,0,.21-.35,1.8,1.8,0,0,0,.16-.38h0a.61.61,0,0,0,.06-.19v0a1.17,1.17,0,0,0,0-.18,1.55,1.55,0,0,0,0-.21,2.94,2.94,0,0,0-.15-1.34A1.35,1.35,0,0,0,116.76,46.35ZM71.16,6.46,108.84,18l-7.64,9.26L63.68,15.52ZM10,18,47.63,6.46l7.47,9L17.43,27Zm6.47,31.54L7.9,46.2l9.31-11.62L53.68,48.12,44.07,60.29,16.72,49.64ZM56,104.36,18.54,90.46V56.79L44,66.69h0l.25.08.26.07a3.53,3.53,0,0,0,.56.05l.34,0,.23,0,.16,0a1.09,1.09,0,0,0,.24-.07,2.84,2.84,0,0,0,.61-.29l.18-.12a1.54,1.54,0,0,0,.2-.16,2,2,0,0,0,.39-.42L56,54.89Zm3-60.68L24.89,31,59.41,20.47,93.12,31ZM99.4,90.46,62,104.36V56.08l7.63,9.66a2,2,0,0,0,.39.42,1.54,1.54,0,0,0,.2.16l.18.12a2.84,2.84,0,0,0,.61.29,1.09,1.09,0,0,0,.24.07l.16,0,.23,0,.34,0a3.53,3.53,0,0,0,.56-.05l.26-.07L73,66.7h0L99.4,56.43Zm1.83-41.19-28.3,11-9.39-11.9L99.92,34.88l.15.19.09.11,8.92,11Z" /> </g>
                </g>
              </svg>
            </div>
            <h4 class="h4-text">Collecting</h4>
            <p>Collection of personal objects</p>
          </div>
          <div class="col-md-12 col-lg-2 mobile-portrait mobile-icon">
            <div class="icon">
              <svg class="light-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 121.87 110.72">
                <title>process</title>
                <g id="Layer_2" data-name="Layer 2">
                  <g id="Layer_4" data-name="Layer 4">
                    <path class="cls-1" d="M121.49,27a3,3,0,0,0-1.8-1.42L78.47,13.91V3a3,3,0,0,0-3-3H3A3,3,0,0,0,0,3V85.37a3,3,0,0,0,3,3H23.74a3,3,0,0,0,2.15,2.49l69.73,19.75a3.24,3.24,0,0,0,.82.11,3,3,0,0,0,2.88-2.18l6.18-21.83,16.26-57.43A3,3,0,0,0,121.49,27Zm-43,10.15a8.59,8.59,0,0,1,4.58,5.1,16.55,16.55,0,0,1,.25,10.47,17,17,0,0,1-4.83,8.06Zm0,30.85,1,.3A13.77,13.77,0,0,1,89.49,79h0l-11-3.13ZM6,6H72.47V59.68H67.35a19,19,0,0,0-15.77-13.4A23.74,23.74,0,0,0,53.85,36c0-10.87-7-19.71-15.63-19.71S22.59,25.15,22.59,36A23.67,23.67,0,0,0,25,46.64a19.79,19.79,0,0,0-8.73,4.67,18,18,0,0,0-5.19,8.37H6ZM32.5,47a16.08,16.08,0,0,1-3.91-11c0-7.43,4.41-13.71,9.63-13.71S47.85,28.59,47.85,36a16.08,16.08,0,0,1-3.91,11A3,3,0,0,0,46.12,52h2.32A13.79,13.79,0,0,1,61,59.68H17.48a12.58,12.58,0,0,1,2.89-4A14.18,14.18,0,0,1,30,52h.3A3,3,0,0,0,32.5,47ZM6,82.37V65.68H72.47V82.37ZM94.37,104,39.11,88.37H75.47a3,3,0,0,0,3-3v-3.2L91.62,85.9h0L98.92,88Zm6.18-21.84-4.92-1.39A19,19,0,0,0,84.1,63.6a23.65,23.65,0,0,0,5-9.25,22.67,22.67,0,0,0-.43-14.28c-1.79-4.58-5.07-7.75-9.25-8.94-.31-.08-.62-.16-.93-.21V20.14l36.7,10.4Z" />
                  </g>
                </g>
              </svg>
            </div>
            <h4 class="h4-text">The start</h4>
            <p>Daniel Jeremy will select or make images of the person to be portrayed. Daniel Jeremy will make studies.</p>
          </div>
          <!--        </div>-->
          <!--        <div class="row row-margin2">-->
          <div class="col-md-12 col-lg-2 mobile-portrait mobile-icon">
            <div class="icon">
              <svg class="light-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65.25 91">
                <title>Asset 6</title>
                <g id="Layer_2" data-name="Layer 2">
                  <g id="Layer_4" data-name="Layer 4">
                    <path class="cls-1" d="M64.38.89A3,3,0,0,0,62.25,0H3A3,3,0,0,0,0,3V25.47a15.37,15.37,0,0,0,.24,2.72,13.43,13.43,0,0,0,.38,1.64C3,38.3,12,44.91,20.91,46.61l-3.39,27.5c0,.13,0,.25,0,.37C17.5,83.59,23.92,91,31.81,91h1.38c7.89,0,14.31-7.41,14.31-16.52,0-.11,0-.21,0-.32L44.55,46.6c8.81-1.66,17.68-8.28,20-16.81a12.85,12.85,0,0,0,.35-1.61,15.86,15.86,0,0,0,.23-2.58L65.25,3A3,3,0,0,0,64.38.89ZM41.1,41a3,3,0,0,0-2.83,3.32L41.5,74.63C41.44,80.36,37.73,85,33.19,85H31.81c-4.54,0-8.23-4.62-8.31-10.34l3.73-30.29A3,3,0,0,0,24.41,41c-6.2-.33-13.37-4.31-16.62-9.64H57.45C54.32,36.76,47.32,40.68,41.1,41Zm18-15.62H6V6H44.37v9a3,3,0,0,0,6,0V6h8.86Z" /> </g>
                </g>
              </svg>
            </div>
            <h4 class="h4-text">Creating</h4>
            <p>Daniel Jeremy will start an intense process of puzzling, composing and assembling. This may take up to 6 months.</p>
          </div>
          <div class="col-md-12 col-lg-2 mobile-portrait mobile-icon">
            <div class="icon">
              <svg class="light-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 98">
                <title>Asset 4</title>
                <g id="Layer_2" data-name="Layer 2">
                  <g id="Layer_4" data-name="Layer 4">
                    <path class="cls-1" d="M79.71,1.71c0-.08-.08-.16-.13-.24a2.44,2.44,0,0,0-.49-.62L78.91.68,78.7.52,78.43.36,78.17.24l-.28-.1L77.61.06l-.3,0L77,0H3L2.69,0l-.3,0L2.11.14l-.28.1L1.57.36,1.3.52,1.09.68.91.85a2.44,2.44,0,0,0-.49.62c0,.08-.09.16-.13.24A3.07,3.07,0,0,0,0,3V95a3,3,0,0,0,3,3H77a3,3,0,0,0,3-3V3A3.07,3.07,0,0,0,79.71,1.71ZM70.64,6l-9.4,11.41H18.76L9.36,6ZM60,23.41V74.59H20V23.41Zm-54-12,8,9.71V75.92L6,85.63ZM8.54,92l9.4-11.41H62.06L71.46,92ZM74,85.63l-8-9.71V21.08l8-9.71Z" /> </g>
                </g>
              </svg>
            </div>
            <h4 class="h4-text">Done</h4>
            <p>Presentation of completed work. Delivery (as agreed - with or without a plexiglass cover) </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>