<?php get_header() ?>;


    <?php while(have_posts()){
        the_post(); ?>
   
  <section id="#about-page " class="about-us">
        <div class="about-pic">
            <img src="./all-weather-team.jpg" alt="">
        </div>
        <div class="about-text">
            <h2>Gallery</h2>
            <p><?php the_content() ?></p>
            <a href="">Read More</a>
        </div>
    </section>

    <?php };

    get_footer();

?> 