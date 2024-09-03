<?php
/*
Template Name: About Page
*/ 

get_header();?>

    <!-- breadcrumb Area Start Here -->
    <section class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 text-center">
                    <?php get_template_part('inc/breadcrumb'); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb Area End Here -->

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

<?php get_footer();?>