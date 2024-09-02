<?php
/*
Template Name: Portfolio Page
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

<!-- Portfolio Area Start Here -->
<section class="portfolio-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <ul class="portfolio-menu">
                    <li class="active" data-filter="*">All</li>

                    <?php
                    
                    $portfolio_menu = get_terms('portfolio-type');
                    
                    // echo '<pre>';
                    // print_r($portfolio_menu);
                    // echo '</pre>';

                    foreach($portfolio_menu as $menu){
                        echo '<li data-filter=".'.$menu->slug.'">'.$menu->name.'</li>';
                    }

                    ?>

                    <!-- <li data-filter=".business">business</li>
                    <li data-filter=".finance">finance</li>
                    <li data-filter=".marketing">marketing</li>
                    <li data-filter=".idea">idea</li> -->
                </ul>
            </div>
        </div>
        <div class="row g-3 portfolio-items">

            <!-- portfolio item -->
            <?php

            $args = array(
                'post_type' => 'portfolio',
                'posts_per_page' => -1
            );

            $query = new WP_Query($args);
            while($query->have_posts()){
                $query->the_post();

                // $portfolio_type = get_the_terms(get_the_ID(), 'portfolio-type');
                // // $portfolio_type = $portfolio_type[0]->slug;
                // foreach($portfolio_type as $type){
                //     echo $portfolio_type = $type->slug;
                // }
                ?>                            
                <div class="col-md-4 
                <?php 
                $portfolio_type = get_the_terms(get_the_ID(), 'portfolio-type');
                foreach($portfolio_type as $type){
                    echo $type->slug . ' ';
                } ?>
                ">
                    <div class="single-portfolio">
                        <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title(); ?>">
                        <a href="<?php the_permalink();?>">
                        <div class="portfolio-overlay">
                            <i class="fas fa-link"></i>
                            <h4><?php the_title(); ?> <span><?php echo $type->name ; ?></span></h4>
                        </div>
                        </a>
                    </div>
                </div>
                <?php
                    }

                    wp_reset_postdata();
                ?>
            <!-- <div class="col-md-4 marketing idea">
                <div class="single-portfolio">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/portfolio/02.jpg" alt="">
                    <div class="portfolio-overlay">
                        <i class="fas fa-link"></i>
                        <h4>portfolio name <span>branding</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 business finance idea">
                <div class="single-portfolio">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/portfolio/03.jpg" alt="">
                    <div class="portfolio-overlay">
                        <i class="fas fa-link"></i>
                        <h4>portfolio name <span>branding</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 idea">
                <div class="single-portfolio">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/portfolio/04.jpg" alt="">
                    <div class="portfolio-overlay">
                        <i class="fas fa-link"></i>
                        <h4>portfolio name <span>branding</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 marketing finance">
                <div class="single-portfolio">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/portfolio/05.jpg" alt="">
                    <div class="portfolio-overlay">
                        <i class="fas fa-link"></i>
                        <h4>portfolio name <span>branding</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 idea finance">
                <div class="single-portfolio">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/portfolio/06.jpg" alt="">
                    <div class="portfolio-overlay">
                        <i class="fas fa-link"></i>
                        <h4>portfolio name <span>branding</span></h4>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!-- Portfolio Area End Here -->

<?php get_footer();?>