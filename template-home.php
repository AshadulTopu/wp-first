<?php 
/*
Template Name: Home Page
*/ 
get_header();?>


    <!-- Slider Area Start Here -->
    <section class="slider-area">
        <div class="sliders owl-carousel">

        <?php
        // set the query arguments
        $args = array(
            'post_type' => 'sliders',
            'post_status' => 'publish',
            'posts_per_page' => 3,
        );

        // pass the query arguments to the query
        $query = new WP_Query($args);
        // if ($query->have_posts()) {
        
            while ($query->have_posts()) {
                $query->the_post();

                // $sub_heading = get_post_meta(get_the_ID(), 'sub_heading', true);
                // $btn_text = get_post_meta(get_the_ID(), 'btn_text', true);
                // $btn_link = get_post_meta(get_the_ID(), 'btn_link', true);

                 $sub_heading = get_field('sub_heading');
                 $btn_text = get_field('btn_text');
                 $btn_link = get_field('btn_link');

                // do stuff with the post
                ?>
            <div class="single-slide bg" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="slide-content">
                                <?php 
                                if($sub_heading){
                                    ?>
                                    <h4><?php echo $sub_heading; ?></h4>
                                    <?php
                                }
                                ?>
                                <h1><?php the_title(); ?></h1>
                                <!-- <p><?php the_content(); ?></p> -->
                                 <?php the_content(); ?>
                                <?php 
                                if($btn_text){
                                    ?>
                                    <a href="<?php echo $btn_link; ?>" class="box-btn"><?php echo $btn_text; ?></a>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
        // } else {
        //     // no posts found
        //     echo '<p>No posts found</p>';
        // }

        wp_reset_postdata();

        ?>
        </div>
    </section>
    <!-- Slider Area End Here -->

    <!-- About Area Start Here -->
    <div class="section about-area pt-100 pb-100">
        <div class="container">
            <div class="row section-title align-items-center">

            <?php

            $config = get_option('halim_options');
            $about_title = $config['about_title'];
            $sub_title = $config['about_subtitle'];
            $about_desc = $config['about_desc'];

            ?>
                <div class="col-md-6 text-md-end text-sm-center">
                    <?php
                    if($sub_title){
                        echo '<span>'.$sub_title.'</span>';
                    }
                    ?>
                    <!-- <span><?php echo $sub_title; ?></span> -->
                     <?php 
                    if($about_title){
                        echo '<h4>'.$about_title.'</h4>';
                    }
                    ?>
                    <!-- <h4><?php echo $about_title; ?></h4> -->
                </div>
                <div class="col-md-6">
                    <?php
                    if($about_desc){
                        echo '<p>'.$about_desc.'</p>';
                    }
                    ?>
                    <!-- <p><?php echo $about_desc; ?></p> -->
                </div>

            </div>
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="about-content">
                        <?php
                        $about_content_title = $config['about_content_title'];
                        $about_content = $config['about_content'];
                        $about_content_btn = $config['about_content_btn'];
                        ?>
                        <?php
                        if($about_content_title){
                            echo '<h4>'.$about_content_title.'</h4>';
                        }
                        ?>
                        <?php
                        if($about_content){
                            echo '<div class="mb-lg-4 mb-3">'.$about_content.'</div>';
                        }
                        ?>
                        <?php
                        if($about_content_btn){
                            echo '<a href="'.$about_content_btn.'" class="box-btn">read more</a>';
                        }
                        ?>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 mt-5 mt-lg-0">

                <?php
                $about_features = $config['about_page_features'];

                if($about_features){
                    foreach($about_features as $feature){
                        $icon = $feature['feature_icon'];
                        $title = $feature['feature_title'];
                        $desc = $feature['feature_content'];
                        ?>
                        <div class="single-about">
                            <div class="icon">
                                <i class="fas <?php echo $icon; ?>"></i>
                            </div>
                            <div>
                                <h4><?php echo $title; ?></h4>
                                <p><?php echo $desc; ?></p>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End Here -->

    <!-- Skill Area Start Here -->
    <section class="skill-area bg pt-100 pb-100" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-skill.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="skill-title">
                        <?php
                        $section_title = $config['section_title'];
                        if($section_title){
                            echo '<h4>'.$section_title.'</h4>';
                        }
                        ?>
                        <!-- <h4>faq</h4> -->
                    </div>
                    <div class="skill-accordion">
                        <div class="accordion" id="accordionExample">
                            <?php
                            $faq = $config['faq_list'];
                            if($faq){
                                foreach($faq as $key => $value){
                                    $question = $value['faq_question'];
                                    $answer = $value['faq_answer'];
                                    $faq_key = $key + 1;
                                    ?>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="<?php echo $faq_key; ?>">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq<?php echo $faq_key; ?>" aria-expanded="<?php echo $faq_key == 1 ? 'true' : 'false'; ?>" aria-controls="<?php echo $faq_key; ?>">
                                                <?php echo $question; ?>
                                            </button>
                                        </h2>
                                        <div id="faq<?php echo $faq_key; ?>" class="accordion-collapse collapse <?php echo $faq_key == 1 ? 'show' : ''; ?>" aria-labelledby="<?php echo $faq_key; ?>" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <?php echo $answer; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                            <!-- <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Lorem Ipsum is simply 1
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Lorem Ipsum is simply 2
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Lorem Ipsum is simply 3
                                </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                      Lorem Ipsum is simply 4
                                  </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                  </div>
                                </div>
                              </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 mt-5 mt-xl-0">
                    <div class="skill-title">
                        <?php
                        $section_title = $config['skill_title'];
                        if($section_title){
                            echo '<h4>'.$section_title.'</h4>';
                        }
                        ?>
                        <!-- <h4>our skills</h4> -->
                    </div>

                    <?php

                    $skills = $config['skill_list'];
                    if($skills){
                        foreach($skills as $skill){
                            $name = $skill['skill_name'];
                            $percent = $skill['skill_percent'];
                        
                        ?>
                        <div class="single-progress">
                            <h4><?php echo $name; ?></h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: <?php echo $percent; ?>;" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $percent; ?></div>
                            </div>
                        </div>
                        <?php
                        }
                    }
                    // wp_reset_postdata();
                    ?>

                    <!-- <div class="single-progress">
                        <h4>html</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">92%</div>
                        </div>
                    </div> -->
                    <!-- <div class="single-progress">
                        <h4>css</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 84%;" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100">84%</div>
                        </div>
                    </div> -->
                    <!-- <div class="single-progress">
                        <h4>photoshop</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                        </div>
                    </div> -->
                    <!-- <div class="single-progress">
                        <h4>wordpress</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 77%;" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100">77%</div>
                        </div>
                    </div> -->
                    <!-- <div class="single-progress">
                        <h4>seo</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Skill Area End Here -->

    <!-- Services Area Start Here -->
    <section class="services-area pt-100 pb-100">
        <div class="container">
            <div class="row section-title align-items-center">
                <div class="col-md-6 text-md-end text-sm-center">
                    <span>who we are?</span>
                    <h4>our services</h4>
                </div>
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo vitae dicta, hic sapiente sit perspiciatis modi officiis inventore architecto minima.</p>
                </div>
            </div>
            <div class="row">

                <?php 
                $args = array(
                    'post_type' => 'services',
                    'post_status' => 'publish',
                    'posts_per_page' => 6,
                );
                $query = new WP_Query($args);
                while($query->have_posts()) {
                    $query->the_post();
                    $icon = get_field('service_icon');
                    ?>
                    <div class="col-xl-4 col-lg-6">
                        <div class="single-service">
                            <i class="<?php echo $icon ?>"></i>
                            <h4><?php the_title(); ?></h4>
                            <!-- <p><?php the_content(); ?></p> -->
                            <?php the_content(); ?>
                        </div>
                    </div>
             <?php
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
    <!-- Services Area End Here -->

    <!-- Counter Area Start Here -->
    <section class="counter-area">
        <div class="container-fluid g-0">
            <div class="row g-0">
                <?php
                    $counter_list = $config['counter_list'];

                    if($counter_list){
                        foreach($counter_list as $counter){
                            $icon = $counter['counter_icon'];
                            $count = $counter['counter_number'];
                            $title = $counter['counter_name'];
                            ?>
                            <div class="col-xxl-3 col-sm-6">
                                <div class="single-counter">
                                    <?php if($icon){ echo '<i class="'.$icon.'"></i>';}?>
                                    <h4>
                                        <span class="counter">
                                        <?php if($count){echo $count;} ?>
                                    </span>
                                    <?php if ($title) { echo $title;} ?>
                                </h4>
                                </div>
                            </div>
                            <?php
                        }
                    }
                ?>
                <!-- <div class="col-xxl-3 col-sm-6">
                    <div class="single-counter">
                        <i class="fas fa-user"></i>
                        <h4><span class="counter">567</span>customers</h4>
                    </div>
                </div> -->
                <!-- <div class="col-xxl-3 col-sm-6">
                    <div class="single-counter">
                        <i class="fas fa-code"></i>
                        <h4><span class="counter">50,000</span>line of codes</h4>
                    </div>
                </div> -->
                <!-- <div class="col-xxl-3 col-sm-6">
                    <div class="single-counter">
                        <i class="far fa-file"></i>
                        <h4><span class="counter">45</span>projects completed</h4>
                    </div>
                </div> -->
                <!-- <div class="col-xxl-3 col-sm-6">
                    <div class="single-counter">
                        <i class="fas fa-coffee"></i>
                        <h4><span class="counter">2,000</span>cup of coffees</h4>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Counter Area End Here -->

    <!-- Team Area Start Here -->
    <section class="team-area pt-100 pb-100">
        <div class="container">
            <div class="row section-title align-items-center">
                <div class="col-md-6 text-md-end text-sm-center">
                    <span>who we are?</span>
                    <h4>creative team</h4>
                </div>
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo vitae dicta, hic sapiente sit perspiciatis modi officiis inventore architecto minima.</p>
                </div>
            </div>
            <div class="row">
                <?php 
                    $args = array(
                        'post_type' => 'teams',
                        'post_status' => 'publish',
                        'posts_per_page' => 3,
                        'orderby' => 'menu_order',
                        'order' => 'ASC',
                    );

                    $query = new WP_Query($args);

                    while($query->have_posts()) {
                        $query->the_post();
                        $fb_link = get_field('team_fb');
                        $twitter_link = get_field('team_tw');
                        $insta_link = get_field('team_insta');
                        $linkedIn_link = get_field('team_linkedin');
                        $yt_link = get_field('team_youtube');

                        ?>
                        <div class="col-md-4">
                    <div class="single-team">
                        <img src="<?php the_post_thumbnail_url();?>" alt="">
                        <div class="team-content">
                            <h4><?php the_title(); ?> <span> <?php the_content(); ?></span></h4>
                            <div class="team-con">
                            <?php 
                            if($fb_link) {
                                ?>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <?php
                            }
                            ?>
                             <?php 
                            if($twitter_link) {
                                ?>
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <?php
                            }
                            ?>
                             <?php 
                            if( $insta_link ) {
                                ?>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <?php
                            }
                            ?>
                             <?php 
                            if($linkedIn_link) {
                                ?>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <?php
                            }
                            ?>
                             <?php 
                            if($yt_link) {
                                ?>
                                <a href=""><i class="fab fa-youtube"></i></a>
                                <?php
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <!-- Team Area End Here -->

    <!-- Testimonials Area Start Here -->
    <section class="testimonials-area pt-100 pb-100 bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/testi_back.jpg');">
        <div class="container-fluid">
            <div class="row section-title align-items-center">
                <div class="col-md-6 text-md-end text-sm-center">
                    <span>who we are?</span>
                    <h4>what clients say?</h4>
                </div>
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo vitae dicta, hic sapiente sit perspiciatis modi officiis inventore architecto minima.</p>
                </div>
            </div>
            <div class="row">
                <div class="testimonials owl-carousel">

                <?php
                    $args = array(
                        'post_type' => 'testimonials',
                        'post_status' => 'publish',
                        'posts_per_page' => 4,
                        'orderby' => 'menu_order',
                        'order' => 'ASC',
                    );

                    $query = new WP_Query($args);

                    while($query->have_posts()) {
                        $query->the_post();
                        $user_name = get_field('user_name');
                        $user_designation = get_field('user_designation');
                        $message = get_field('message');
                        ?>
                        <div class="single-testimonial">
                        <div>
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        </div>
                        <p>" <?php echo $message ?> "</p>
                        <h4> <?php echo $user_name ?> <span> <?php echo $user_designation ?> </span></h4>
                    </div>
                
                <?php
                    }
                    wp_reset_postdata();             
                ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Area End Here -->

    <!-- Blog Area Start Here -->
    <section class="blog-area pt-100 pb-100">
        <div class="container">
            <div class="row section-title align-items-center">
                <div class="col-md-6 text-md-end text-sm-center">
                    <span>who we are?</span>
                    <h4>what clients say?</h4>
                </div>
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo vitae dicta, hic sapiente sit perspiciatis modi officiis inventore architecto minima.</p>
                </div>
            </div>
             <div class="row">

             <?php 
             
             $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 3,
             );

             $query = new WP_Query($args);

             while($query->have_posts()) {
                $query->the_post();
                ?>
                <div class="col-md-4">
                    <div class="single-blog">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <div class="blog-content">
                            <div class="blog-title">
                                <h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
                            </div>
                            <div class="blog-meta">
                                <a href=""><?php echo get_the_date();?></a>
                                <a href=""><?php the_author(); ?></a>
                            </div>
                            <!-- <p><?php the_content(); ?></p> -->
                             <?php the_excerpt();?>
                            <a href="<?php the_permalink();?>" class="box-btn">read more</a>
                        </div>
                    </div>
                </div>

                <?php
             }
             wp_reset_postdata();             
             ?>
                <!-- <div class="col-md-4">
                    <div class="single-blog">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog1.jpg" alt="">
                        <div class="blog-content">
                            <div class="blog-title">
                                <h4><a href="">blog title</a></h4>
                            </div>
                            <div class="blog-meta">
                                <a href="">5 Jan 2020</a>
                                <a href="">admin</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis magnam a, culpa quis illum aut sint at. Nesciunt tempora officiis labore ducimus laborum saepe dicta?</p>
                            <a href="" class="box-btn">read more</a>
                        </div>
                    </div>
                </div> -->
                
            </div>
        </div>
    </section>
    <!-- Blog Area End Here -->

    <?php get_footer(); ?>