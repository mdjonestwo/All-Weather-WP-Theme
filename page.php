<?php get_header() ?>


    <?php while(have_posts()){
        the_post(); ?>
   
  <section id="#about-page " class="about-us">
        <div class="about-pic" style="background-image: url('<?php the_post_thumbnail_url( 'full'); ?> ');">
          
        </div>
        <div class="about-text">
            <h2><?php the_title() ?></h2>
            <p><?php the_content() ?></p>
            <p><?php the_field('test-text'); ?> </p>
            <a href="">Read More</a>
        </div>
    </section>

    <?php };

    get_footer();

?> 