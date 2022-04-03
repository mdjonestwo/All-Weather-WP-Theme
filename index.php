
<?php get_header(); ?>
    <section style="background-image: url(<?php echo get_theme_mod('header_background_image') ?>);" class="jumbo"> 
        <div class="overlay">
        </div>
        <div class="jumbo-text">
            <h2 style="color: <?php echo get_theme_mod('header_font_color') ?>; "><?php echo get_theme_mod('header_main_title') ?></h2>
            <p style="color: <?php echo get_theme_mod('header_font_color') ?>;"><?php echo get_theme_mod('header_sub_title') ?></p>
            <div class="btn-box">
                <button class='primary-btn'>
                    <a  href="<?php echo get_theme_mod('header_btn_link') ?>"><?php echo get_theme_mod('header_btn_txt') ?></a>
                </button>
            </div> 
        </div>       
    </section>
   
    <section class="about-us" style="background-color: url(<?php echo get_theme_mod('who_bg_color') ?>);" >
        <div class="col">
            <div class="about-pic" style="background-image: url(<?php echo get_theme_mod('who_main_image') ?>);">
                <!-- <img src="./IMG_0271.JPG" alt=""> -->
            </div>
        </div>
        <div class="col">
            <div class="about-text">
                <h2><?php echo get_theme_mod('who_main_title') ?></h2>
                <p><?php echo get_theme_mod('who_main_text') ?></p>
                <div class="btn-box">
                    <button class='primary-btn'>
                        <a  href="<?php echo get_theme_mod('who_btn_link') ?>"><?php echo get_theme_mod('who_btn_txt') ?></a>
                    </button>
                </div>
                
            </div>
        </div>

    </section>

    <section class="what" id="gallery">
        <div class="what-container">
            <div class="what-title">
                <h2><?php echo get_theme_mod('what_main_title') ?></h2>
                <p><?php echo get_theme_mod('what_main_text') ?></p>
            </div>
            <div class="work-thumbnails">
                <div class="thumbnail thmb-1" style="background-image: url(<?php echo get_theme_mod('thumb_1_background_image') ?>);" >
                    <a class='primary-btn' href="<?php echo get_theme_mod('thumb_1_btn_link') ?>"><?php echo get_theme_mod('thumb_1_btn_txt') ?></a>
                </div>
                <div class="thumbnail thmb-2" style="background-image: url(<?php echo get_theme_mod('thumb_2_background_image') ?>);" >
                    <a class='primary-btn' href="<?php echo get_theme_mod('thumb_2_btn_link') ?>"><?php echo get_theme_mod('thumb_2_btn_txt') ?></a>
                </div>
                <div class="thumbnail thmb-3" style="background-image: url(<?php echo get_theme_mod('thumb_3_background_image') ?>);" >
                    <a class='primary-btn' href="<?php echo get_theme_mod('thumb_3_btn_link') ?>"><?php echo get_theme_mod('thumb_3_btn_txt') ?></a>
                </div> 
            </div>
        </div>
    </section>

    <section class="why">
        <div class="col">
            <div class="about-text">
                <h2><?php echo get_theme_mod('why_main_title') ?></h2>
                <p><?php echo get_theme_mod('why_main_text') ?></p>
                <div class="btn-box">
                    <button class='primary-btn'>
                        <a  href="<?php echo get_theme_mod('why_btn_link') ?>"><?php echo get_theme_mod('why_btn_txt') ?></a>
                    </button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="about-pic"
            style="background-image: url(<?php echo get_theme_mod('why_main_image') ?>);">
            </div>
        </div>

    </section>

    <!-- <section class="testimonial-section">
        <div class="testimonial-title">
            <h2><?php //echo get_theme_mod('testimonial_header_txt') ?></h2>
        </div>
        <div class="testimonials">
            <div class="testimonial">
                <h5><?php //echo get_theme_mod('testimonial_1_header_txt') ?></h5>
                <p><i><?php //echo get_theme_mod('testimonial_1_body_txt') ?>
                </i></p>
            </div>
            <div class="testimonial">
            <h5><?php //echo get_theme_mod('testimonial_2_header_txt') ?></h5>
                <p><i><?php //echo get_theme_mod('testimonial_2_body_txt') ?>
                </i></p>
            </div>
            <div class="testimonial">
            <h5><?php //echo get_theme_mod('testimonial_3_header_txt') ?></h5>
                <p><i><?php //echo get_theme_mod('testimonial_3_body_txt') ?>
                </i></p>
            </div>
        </div>
    </section> -->

    <!-- <section class="estimate-form">
        <div class="estimate-title">
            <h2>Request estimate</h2>
        </div>
        <form class="form">
            <div class="col-1"> 
                <div class="form-input">
                    <label for="fname">First name:</label><br>
                    <input type="text" id="fname" name="fname"><br>
                </div>
                <div class="form-input">
                    <label for="lname">Last name:</label><br>
                    <input type="text" id="lname" name="lname"><br>  
                </div> 
                <div class="form-input">
                    <label for="email">Email:</label><br>
                    <input type="text" id="email" name="email">
                </div>             
            </div>
            <div class="col-2">
                <label for="fname">Comment:</label><br>
                <input type="text" id="fname" name="fname"><br>
                <div class="col-btn-box">
                    <button class='primary-btn'>
                        <a  href="">Submit</a>
                    </button>
                </div>
            </div>
       
        </form>
    </section> -->

<?php get_footer(); ?>