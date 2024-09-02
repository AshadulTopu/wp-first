<?php
/*
Template Name: Services Page
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
                        'posts_per_page' => -1, // -1 = all posts
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
                    wp_reset_postdata();
                    }
                    ?>
                </div>
        </div>
    </div>
</section>
<!-- Services Area End Here -->


<?php get_footer();?>