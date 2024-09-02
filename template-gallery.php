<?php
/*
Template Name: Gallery Page
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

    <section class="gallery-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <?php 
                $args = array(
                'post_type' => 'gallery',
                'post_status' => 'publish',
                'posts_per_page' => -1, // -1 = all posts
                'order' => 'ASC'
                );
                
                $query = new WP_Query($args);
                while($query->have_posts()) {
                $query->the_post();

                $image = get_field('image');
                $hover_image = get_field('hover_image');
                ?>

                <div class="col-md-4">
                    <div class="single-gallery">
                        <img src="<?php echo $image; ?>" alt="">
                        <div class="gallery-overlay">
                            <a href="<?php echo $hover_image;?>" class="gallery"><i class="fas fa-plus"></i></a>
                            <h4><?php the_title(); ?></h4>
                        </div>
                    </div>
                </div>

                <?php
                wp_reset_postdata();
                }
                ?>

                <!-- <div class="col-md-4">
                    <div class="single-gallery">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/gallery/gallery2.jpg" alt="">
                        <div class="gallery-overlay">
                            <a href="<?php echo get_template_directory_uri();?>/assets/images/gallery/gallery2.jpg" class="gallery"><i class="fas fa-plus"></i></a>
                            <h4>item name</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-gallery">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/gallery/gallery3.jpg" alt="">
                        <div class="gallery-overlay">
                            <a href="<?php echo get_template_directory_uri();?>/assets/images/gallery/gallery3.jpg" class="gallery"><i class="fas fa-plus"></i></a>
                            <h4>item name</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-gallery">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/gallery/gallery4.jpg" alt="">
                        <div class="gallery-overlay">
                            <a href="<?php echo get_template_directory_uri();?>/assets/images/gallery/gallery4.jpg" class="gallery"><i class="fas fa-plus"></i></a>
                            <h4>item name</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-gallery">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/gallery/gallery5.jpg" alt="">
                        <div class="gallery-overlay">
                            <a href="<?php echo get_template_directory_uri();?>/assets/images/gallery/gallery5.jpg" class="gallery"><i class="fas fa-plus"></i></a>
                            <h4>item name</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-gallery">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/gallery/gallery6.jpg" alt="">
                        <div class="gallery-overlay">
                            <a href="<?php echo get_template_directory_uri();?>/assets/images/gallery/gallery6.jpg" class="gallery"><i class="fas fa-plus"></i></a>
                            <h4>item name</h4>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

<?php get_footer();?>