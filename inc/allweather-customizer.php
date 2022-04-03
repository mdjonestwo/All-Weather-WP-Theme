<?php


class AllWeather_Customizer{

    public function __construct(){
        add_action('customize_register', array($this, 'register_customize_sections'));
    }

    public function register_customize_sections( $wp_customize) {
        // Initialize Section 
        $this->header_callout_section($wp_customize);
        $this->who_callout_section($wp_customize);
        $this->what_callout_section($wp_customize);
        $this->why_callout_section($wp_customize);
        $this->testimonials_callout_section($wp_customize);
        // $this->benefit_content_callout_section($wp_customize);
        // $this->location_callout_section($wp_customize);
        // $this->testimonials_section($wp_customize);
    }

    /* Sanitize Inputs */
    public function sanitize_custom_option($input) {
        return ( $input === "No" ) ? "No" : "Yes";
    }
    public function sanitize_custom_text($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }
    public function sanitize_custom_url($input) {
        return filter_var($input, FILTER_SANITIZE_URL);
    }
    public function sanitize_custom_email($input) {
        return filter_var($input, FILTER_SANITIZE_EMAIL);
    }
    public function sanitize_hex_color( $color ) {
        if ( '' === $color ) {
            return '';
        }
     
        // 3 or 6 hex digits, or the empty string.
        if ( preg_match( '|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) ) {
            return $color;
        }
    }

        //Header Section, Settings and Controls
        private function header_callout_section($wp_customize){

            //Adding Header Section
            $wp_customize->add_section('header_section', array(
                'title' => "Header Section",
                "priority" => 2, 
                // "description" => __("Introduce yourself.", "gaiasgarden")
            ));
    
            // Main Title Setting
             $wp_customize->add_setting('header_main_title', array(
                'default' => 'All Weather Contracting',
                "sanitize_callback" => array($this, 'sanitize_custom_text')
             ));
    
             // Main Title Control 
             $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic_header_display_control', array(
                'label'=> 'Main Title',
                'section' => 'header_section',
                'settings' => 'header_main_title',
                'type' => 'text',
    
             )));
    
             //Sub Title Setting
             $wp_customize->add_setting('header_sub_title', array(
                'default' => 'Landscape and Garden curators',
                "sanitize_callback" => array($this, 'sanitize_custom_text')
             ));
    
             // Sub Title Control 
             $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic_header_title_control', array(
                'label'=> 'Sub Title',
                'section' => 'header_section',
                'settings' => 'header_sub_title',
                'type' => 'text',
    
             )));
    
             //Button Txt Setting
             $wp_customize->add_setting('header_btn_txt', array(
                'default' => 'Request an estimate',
                "sanitize_callback" => array($this, 'sanitize_custom_text')
             ));
    
             // Button Txt Control 
             $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic_header_btn_txt_control', array(
                'label'=> 'Button Text',
                'section' => 'header_section',
                'settings' => 'header_btn_txt',
                'type' => 'text',
             )));
    
            //Button Link Setting
             $wp_customize->add_setting('header_btn_link', array(
                'default' => '/estimate',
                "sanitize_callback" => array($this, 'sanitize_custom_text')
             ));
    
             // Button Link Control 
             $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic_header_btn_link_control', array(
                'label'=> 'Button Link',
                'section' => 'header_section',
                'settings' => 'header_btn_link',
                'type' => 'text',
                'description' => 'If the link is a page on the site add a "/" before the page name'
             )));
    
            //Header Background Setting
             $wp_customize->add_setting('header_background_image', array(
                'default' => '',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => array( $this, 'sanitize_custom_url' )
             ));
    
             //Header Background Control 
             $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'basic_header_background_image_control', array(
                'label'=> 'Background Image',
                'section' => 'header_section',
                'settings' => 'header_background_image'
        
             )));
    
    
            //Header Font Color Setting
            $wp_customize->add_setting('header_font_color', array(
                'default' => '#000'
             ));
    
             //Header Font Color Control 
             $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'basic_header_font_color_control', array(
                'label'=> 'Font Color',
                'section' => 'header_section',
                'settings' => 'header_font_color'

             )));
    
            //Header Background Color Setting
            $wp_customize->add_setting('header_bg_color', array(
                'default' => ''
             ));
    
             //Header Background Color Control 
             $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'basic_header_bg_color_control', array(
                'label'=> 'Background Color',
                'section' => 'header_section',
                'settings' => 'header_bg_color'
             )));


             //Header Button Color Setting 
             $wp_customize->add_setting('header_btn_color', array(
               'default' => ''
            ));
          
            //Header Button Color Control 
            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'basic_header_btn_color_control', array(
               'label'=> 'Button Color',
               'section' => 'header_section',
               'settings' => 'header_btn_color'
            )));
        }


         //Who Section, Settings and Controls
         private function who_callout_section($wp_customize){

            //Adding Header Section
            $wp_customize->add_section('who_section', array(
               'title' => "Who Section",
               "priority" => 3, 
               // "description" => __("Make A Statement", "Who we are")
            ));

            // Main Title Setting
            $wp_customize->add_setting('who_main_title', array(
               'default' => 'Who we are',
               "sanitize_callback" => array($this, 'sanitize_custom_text')
            ));

            // Main Title Control 
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic_who_display_control', array(
               'label'=> 'Who Title',
               'section' => 'who_section',
               'settings' => 'who_main_title',
               'type' => 'text',
            )));

            // Main Text Setting
            $wp_customize->add_setting('who_main_text', array(
               'default' => 'Details',
               "sanitize_callback" => array($this, 'sanitize_custom_text')
            ));

            // Main Text Control 
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic_who_text_control', array(
               'label'=> 'Who Text',
               'section' => 'who_section',
               'settings' => 'who_main_text',
               'type' => 'textarea',
            )));

            //Who Background Color Setting
            $wp_customize->add_setting('who_bg_color', array(
                'default' => ''
             ));
    
             //Who Background Color Control 
             $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'basic_who_bg_color_control', array(
                'label'=> 'Background Color',
                'section' => 'who_section',
                'settings' => 'who_bg_color'
             )));

               
             //Who Txt Setting
             $wp_customize->add_setting('who_btn_txt', array(
               'default' => 'About Us',
               "sanitize_callback" => array($this, 'sanitize_custom_text')
            ));
   
            // Who Txt Control 
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic_who_btn_txt_control', array(
               'label'=> 'Button Text',
               'section' => 'who_section',
               'settings' => 'who_btn_txt',
               'type' => 'text',
            )));

            //Who Button Link Setting
             $wp_customize->add_setting('who_btn_link', array(
                'default' => '/about',
                "sanitize_callback" => array($this, 'sanitize_custom_text')
             ));
    
             //Who Button Link Control 
             $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'who_btn_link_control', array(
                'label'=> 'Button Link',
                'section' => 'who_section',
                'settings' => 'who_btn_link',
                'type' => 'text',
                'description' => 'If the link is a page on the site add a "/" before the page name'
             )));
    
             //Who Background Setting
             $wp_customize->add_setting('who_main_image', array(
                'default' => '',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => array( $this, 'sanitize_custom_url' )
             ));
    
             //Who Background Control 
             $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'basic_who_main_image_control', array(
                'label'=> 'Who Main Image',
                'section' => 'who_section',
                'settings' => 'who_main_image'
        
             )));

         }

         //What Section, Settings and Controls
         private function what_callout_section($wp_customize){

            //Adding Header Section
            $wp_customize->add_section('what_section', array(
               'title' => "What Section",
               "priority" => 4, 
               // "description" => __("Make A Statement", "What we do")
            ));


            // What Main Title Setting
            $wp_customize->add_setting('what_main_title', array(
               'default' => 'What we do',
               "sanitize_callback" => array($this, 'sanitize_custom_text')
            ));

            //What Main Title Control 
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic_what_display_control', array(
               'label'=> 'What Title',
               'section' => 'what_section',
               'settings' => 'what_main_title',
               'type' => 'text',
            )));

            //What Main Text Setting
            $wp_customize->add_setting('what_main_text', array(
               'default' => 'Details',
               "sanitize_callback" => array($this, 'sanitize_custom_text')
            ));

            //What Main Text Control 
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic_what_text_control', array(
               'label'=> 'What Text',
               'section' => 'what_section',
               'settings' => 'what_main_text',
               'type' => 'textarea',
            )));

            // //What Thumnail 1 Background Setting
            //  $wp_customize->add_setting('thumb_1_image', array(
            //    'default' => '',
            //    'type' => 'theme_mod',
            //    'capability' => 'edit_theme_options',
            //    'sanitize_callback' => array( $this, 'sanitize_custom_url' )
            // ));
   
            // //What Thumnail 1 Background Control 
            // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'basic_who_main_image_control', array(
            //    'label'=> 'Thumbnail 1 Image',
            //    'section' => 'what_section',
            //    'settings' => 'thumb_1_image'
       
            // )));

        
             //What Thumnail 1 Txt Setting
             $wp_customize->add_setting('thumb_1_btn_txt', array(
               'default' => 'Outdoor Rennovations',
               "sanitize_callback" => array($this, 'sanitize_custom_text')
            ));
            
            //What Thumbnail 1 Button Txt Control 
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'thumb_1_btn_txt_control', array(
               'label'=> 'Thumbnail 1 Button Text',
               'section' => 'what_section',
               'settings' => 'thumb_1_btn_txt',
               'type' => 'text',
            )));

            //What Thumbnail 1 Button Link Setting
             $wp_customize->add_setting('thumb_1_btn_link', array(
                'default' => '/about',
                "sanitize_callback" => array($this, 'sanitize_custom_text')
             ));

            //What Thumbnail 1 Link Control 
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'thumb_1_btn_link_control', array(
               'label'=> 'Thumbnail 1 Button Link',
               'section' => 'what_section',
               'settings' => 'thumb_1_btn_link',
               'type' => 'text',
               'description' => 'If the link is a page on the site add a "/" before the page name'
            )));

            //What Thumbnail 1 Background Setting
             $wp_customize->add_setting('thumb_1_background_image', array(
                'default' => '',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => array( $this, 'sanitize_custom_url' )
             ));
    
             //What Thumbnail 1 Background Control 
             $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'thumb_1_background_image_control', array(
                'label'=> 'Thumbnail 1 Background Image',
                'section' => 'what_section',
                'settings' => 'thumb_1_background_image'
        
             )));

            // //What Thumnail 2 Background Setting
            //  $wp_customize->add_setting('thumb_2_image', array(
            //    'default' => '',
            //    'type' => 'theme_mod',
            //    'capability' => 'edit_theme_options',
            //    'sanitize_callback' => array( $this, 'sanitize_custom_url' )
            // ));
   
            // //What Thumnail 2 Background Control 
            // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'basic_who_main_image_control', array(
            //    'label'=> 'Thumbnail 2 Image',
            //    'section' => 'what_section',
            //    'settings' => 'thumb_2_image'
       
            // )));

        
             //What Thumnail 2 Txt Setting
             $wp_customize->add_setting('thumb_2_btn_txt', array(
               'default' => 'Outdoor Rennovations',
               "sanitize_callback" => array($this, 'sanitize_custom_text')
            ));
            
            //What Thumbnail 2 Button Txt Control 
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'thumb_2_btn_txt_control', array(
               'label'=> 'Thumbnail 2 Button Text',
               'section' => 'what_section',
               'settings' => 'thumb_2_btn_txt',
               'type' => 'text',
            )));

            //What Thumbnail 2 Button Link Setting
             $wp_customize->add_setting('thumb_2_btn_link', array(
                'default' => '/about',
                "sanitize_callback" => array($this, 'sanitize_custom_text')
             ));

            //What Thumbnail 2 Link Control 
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'thumb_2_btn_link_control', array(
               'label'=> 'Thumbnail 2 Button Link',
               'section' => 'what_section',
               'settings' => 'thumb_2_btn_link',
               'type' => 'text',
               'description' => 'If the link is a page on the site add a "/" before the page name'
            )));

            //What Thumbnail 2 Background Setting
             $wp_customize->add_setting('thumb_2_background_image', array(
                'default' => '',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => array( $this, 'sanitize_custom_url' )
             ));
    
             //What Thumbnail 2 Background Control 
             $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'thumb_2_background_image_control', array(
                'label'=> 'Thumbnail 2 Background Image',
                'section' => 'what_section',
                'settings' => 'thumb_2_background_image'
        
             )));

            //  //What Thumnail 3 Background Setting
            //  $wp_customize->add_setting('thumb_3_image', array(
            //    'default' => '',
            //    'type' => 'theme_mod',
            //    'capability' => 'edit_theme_options',
            //    'sanitize_callback' => array( $this, 'sanitize_custom_url' )
            // ));
   
            // //What Thumnail 3 Background Control 
            // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'basic_who_main_image_control', array(
            //    'label'=> 'Thumbnail 3 Image',
            //    'section' => 'what_section',
            //    'settings' => 'thumb_3_image'
       
            // )));

        
             //What Thumnail 3 Txt Setting
             $wp_customize->add_setting('thumb_3_btn_txt', array(
               'default' => 'Outdoor Rennovations',
               "sanitize_callback" => array($this, 'sanitize_custom_text')
            ));
            
            //What Thumbnail 3 Button Txt Control 
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'thumb_3_btn_txt_control', array(
               'label'=> 'Thumbnail 3 Button Text',
               'section' => 'what_section',
               'settings' => 'thumb_3_btn_txt',
               'type' => 'text',
            )));

            //What Thumbnail 3 Button Link Setting
             $wp_customize->add_setting('thumb_3_btn_link', array(
                'default' => '/about',
                "sanitize_callback" => array($this, 'sanitize_custom_text')
             ));

            //What Thumbnail 3 Link Control 
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'thumb_3_btn_link_control', array(
               'label'=> 'Thumbnail 3 Button Link',
               'section' => 'what_section',
               'settings' => 'thumb_3_btn_link',
               'type' => 'text',
               'description' => 'If the link is a page on the site add a "/" before the page name'
            )));

            //What Thumbnail 3 Background Setting
             $wp_customize->add_setting('thumb_3_background_image', array(
                'default' => '',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => array( $this, 'sanitize_custom_url' )
             ));
    
             //What Thumbnail 3 Background Control 
             $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'thumb_3_background_image_control', array(
                'label'=> 'Thumbnail 3 Background Image',
                'section' => 'what_section',
                'settings' => 'thumb_3_background_image'
        
             )));
         }


         //Why Section, Settings and Controls
         private function why_callout_section($wp_customize){

            //Adding Header Section
            $wp_customize->add_section('why_section', array(
               'title' => "Why Section",
               "priority" => 5, 
               // "description" => __("Make A Statement", "why we do")
            ));
            
            
            // why Main Title Setting
            $wp_customize->add_setting('why_main_title', array(
               'default' => 'Why we do',
               "sanitize_callback" => array($this, 'sanitize_custom_text')
            ));
            
            //why Main Title Control 
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic_why_display_control', array(
               'label'=> 'Why Title',
               'section' => 'why_section',
               'settings' => 'why_main_title',
               'type' => 'text',
            )));
            
            //why Main Text Setting
            $wp_customize->add_setting('why_main_text', array(
               'default' => 'Details',
               "sanitize_callback" => array($this, 'sanitize_custom_text')
            ));
            
            //why Main Text Control 
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic_why_text_control', array(
               'label'=> 'Why Text',
               'section' => 'why_section',
               'settings' => 'why_main_text',
               'type' => 'textarea',
            )));
            
            //why Button Link Setting
            $wp_customize->add_setting('why_btn_link', array(
               'default' => '/about',
               "sanitize_callback" => array($this, 'sanitize_custom_text')
            ));
   
            //why Button Link Control 
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'why_btn_link_control', array(
               'label'=> 'Button Link',
               'section' => 'why_section',
               'settings' => 'why_btn_link',
               'type' => 'text',
               'description' => 'If the link is a page on the site add a "/" before the page name'
            )));


             //why Background Setting
             $wp_customize->add_setting('why_main_image', array(
               'default' => '',
               'type' => 'theme_mod',
               'capability' => 'edit_theme_options',
               'sanitize_callback' => array( $this, 'sanitize_custom_url' )
            ));
   
            //why Background Control 
            $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'basic_why_main_image_control', array(
               'label'=> 'why Main Image',
               'section' => 'why_section',
               'settings' => 'why_main_image'
       
            )));
                   
             //why Txt Setting
             $wp_customize->add_setting('why_btn_txt', array(
               'default' => 'About Us',
               "sanitize_callback" => array($this, 'sanitize_custom_text')
            ));
   
            // why Txt Control 
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic_why_btn_txt_control', array(
               'label'=> 'Button Text',
               'section' => 'why_section',
               'settings' => 'why_btn_txt',
               'type' => 'text',
            )));
            }
            
         //Who Section, Settings and Controls
         private function testimonials_callout_section($wp_customize){

            //Adding Testimonials Section
            $wp_customize->add_section('testimonials_section', array(
               'title' => "Testimonials Section",
               "priority" => 6, 
               // "description" => __("Make A Statement", "why we do")
            ));
                        
             //Testimonials Header Setting
             $wp_customize->add_setting('testimonial_header_txt', array(
               'default' => 'Testimonials',
               "sanitize_callback" => array($this, 'sanitize_custom_text')
            ));
   
            //Testimonials Header Control 
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'testimonial_header_txt_control', array(
               'label'=> 'Testimonial Header Text',
               'section' => 'testimonials_section',
               'settings' => 'testimonial_header_txt',
               'type' => 'text',
            )));


                         //Testimonials Header Setting
             $wp_customize->add_setting('testimonial_1_header_txt', array(
               'default' => 'John Doe',
               "sanitize_callback" => array($this, 'sanitize_custom_text')
            ));
   
            //Testimonials Header Control 
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'testimonial_1_header_txt_control', array(
               'label'=> 'Testimonial 1 Header Text',
               'section' => 'testimonials_section',
               'settings' => 'testimonial_1_header_txt',
               'type' => 'text',
            )));

            //Testimonials Header Setting
             $wp_customize->add_setting('testimonial_1_body_txt', array(
               'default' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum eaque laboriosam sapiente quod optio quibusdam?",
               "sanitize_callback" => array($this, 'sanitize_custom_text')
            ));
   
            //Testimonials Header Control 
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'testimonial_1_body_txt_control', array(
               'label'=> 'Testimonial 1 Body Text',
               'section' => 'testimonials_section',
               'settings' => 'testimonial_1_body_txt',
               'type' => 'text',
            )));

            //Testimonial 1 Header Setting
             $wp_customize->add_setting('testimonial_1_header_txt', array(
               'default' => 'John Doe',
               "sanitize_callback" => array($this, 'sanitize_custom_text')
            ));
    
            //Testimonial 1 Header Control 
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'testimonial_1_header_txt_control', array(
               'label'=> 'Testimonial 1 Header Text',
               'section' => 'testimonials_section',
               'settings' => 'testimonial_1_header_txt',
               'type' => 'text',
            )));

            //Testimonials 1 Body Setting
             $wp_customize->add_setting('testimonial_1_body_txt', array(
               'default' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum eaque laboriosam sapiente quod optio quibusdam?",
               "sanitize_callback" => array($this, 'sanitize_custom_text')
            ));
   
            //Testimonials 1 Body Control 
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'testimonial_1_body_txt_control', array(
               'label'=> 'Testimonial 1 Body Text',
               'section' => 'testimonials_section',
               'settings' => 'testimonial_1_body_txt',
               'type' => 'text',
            )));



            //Testimonial 2 Header Setting
            $wp_customize->add_setting('testimonial_2_header_txt', array(
               'default' => 'John Doe',
               "sanitize_callback" => array($this, 'sanitize_custom_text')
            ));
    
            //Testimonial 2 Header Control 
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'testimonial_2_header_txt_control', array(
               'label'=> 'Testimonial 2 Header Text',
               'section' => 'testimonials_section',
               'settings' => 'testimonial_2_header_txt',
               'type' => 'text',
            )));

            //Testimonials 2 Body Setting
             $wp_customize->add_setting('testimonial_2_body_txt', array(
               'default' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum eaque laboriosam sapiente quod optio quibusdam?",
               "sanitize_callback" => array($this, 'sanitize_custom_text')
            ));
   
            //Testimonials 2 Body Control 
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'testimonial_2_body_txt_control', array(
               'label'=> 'Testimonial 2 Body Text',
               'section' => 'testimonials_section',
               'settings' => 'testimonial_2_body_txt',
               'type' => 'text',
            )));

            //Testimonial 3 Header Setting
            $wp_customize->add_setting('testimonial_3_header_txt', array(
               'default' => 'John Doe',
               "sanitize_callback" => array($this, 'sanitize_custom_text')
            ));
    
            //Testimonial 3 Header Control 
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'testimonial_3_header_txt_control', array(
               'label'=> 'Testimonial 3 Header Text',
               'section' => 'testimonials_section',
               'settings' => 'testimonial_3_header_txt',
               'type' => 'text',
            )));

            //Testimonials 3 Body Setting
             $wp_customize->add_setting('testimonial_3_body_txt', array(
               'default' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum eaque laboriosam sapiente quod optio quibusdam?",
               "sanitize_callback" => array($this, 'sanitize_custom_text')
            ));
   
            //Testimonials 3 Body Control 
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'testimonial_3_body_txt_control', array(
               'label'=> 'Testimonial 3 Body Text',
               'section' => 'testimonials_section',
               'settings' => 'testimonial_3_body_txt',
               'type' => 'text',
            )));

         }

}

?>