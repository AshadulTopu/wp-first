<?php
get_header();?>

    <!-- breadcrumb Area Start Here -->
    <section class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 text-center">
                    <h4><?php the_archive_title(); ?></h4>
                    <ul>
                        <li><a href="<?php echo site_url(); ?>">home</a></li> / 
                        <li><?php the_archive_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb Area End Here -->

    <section class="blog-page-area pt-100 pb-100">
        <div class="container">
            <div class="row">

                <?php 
                while(have_posts()) {
                    the_post();
                    ?>
                    <div class="col-md-4">
                        <div class="single-blog">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
                                </div>
                                <div class="blog-meta d-flex align-items-center gap-3 flex-wrap">
                                    <span><?php echo get_the_category_list(', '); ?></span>
                                    <a href=""><?php echo get_the_date();?></a>
                                    <a href=""><?php the_author(); ?></a>
                                </div>
                                <!-- <p><?php the_content(); ?></p> -->
                               <div class="mb-lg-4 mb-3">
                                <?php
                                    // Get the excerpt as a string
                                    $excerpt = get_the_excerpt();

                                    // Check if the length of the excerpt is greater than 120 characters
                                    if (strlen($excerpt) > 180) {
                                        // Truncate the excerpt and add ellipsis
                                        echo substr($excerpt, 0, 180) . '...';
                                    } else {
                                        // Output the excerpt as is
                                        echo $excerpt;
                                    }
                                ?>
                               </div>
                                <a href="<?php the_permalink();?>" class="box-btn">read more</a>
                            </div>
                        </div>
                    </div>

                <?php
             }
             wp_reset_postdata();             
             ?>
            </div>
            <div class="row">
                <div class="col-xxl-12">
                    <!-- <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                          </li>
                        </ul>
                      </nav> -->
                      <!-- <?php
                    //   posts_nav_link('-', 'Previous Page', 'Next Page');
                      ?> -->

                      <!-- <?php
                        // // Ensure you have a loop or query running
                        // if (have_posts()) :
                        //     while (have_posts()) : the_post();
                        //         // Your code to display posts
                        //     endwhile;

                        //     // Pagination arguments
                        //     $pagination_args = array(
                        //         'prev_text'          => __('Previous'),
                        //         'next_text'          => __('Next'),
                        //         'mid_size'           => 2,
                        //         'end_size'           => 1,
                        //         'before_page_number' => '<li class="page-item">',
                        //         'after_page_number'  => '</li>',
                        //         'before'             => '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">',
                        //         'after'              => '</ul></nav>',
                        //     );

                        //     // Display pagination
                        //     echo paginate_links($pagination_args);

                        // else :
                        //     // Code for when no posts are found
                        // endif;
                        ?> -->

                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>