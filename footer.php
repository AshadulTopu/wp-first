  <!-- CTA Area Start Here -->
  <section class="cta-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h4>best solution for your business </h4>
                <p>the can be used on larger scale projectss as well as small scale projectss</p>
            </div>
            <div class="col-md-6 text-center">
                <a href="" class="box-btn">contact us</a>
            </div>
        </div>
    </div>
</section>
<!-- CTA Area End Here -->
    
    
    <!-- Footer Area Start Here -->
    <footer class="footer-area bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/footer-bg.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                        <?php dynamic_sidebar('footer-widget-1'); ?>
                </div>
                <div class="col-xl-2 col-lg-3 mt-5 mt-lg-0">
                    <?php dynamic_sidebar('footer-widget-2'); ?>
                    <!-- <div class="single-footer">
                        <h4>quick links</h4>
                        <ul>
                            <li><a href=""><i class="fas fa-angle-double-right"></i> Home</a></li>
                            <li><a href=""><i class="fas fa-angle-double-right"></i> About</a></li>
                            <li><a href=""><i class="fas fa-angle-double-right"></i> Services</a></li>
                            <li><a href=""><i class="fas fa-angle-double-right"></i> Blog</a></li>
                            <li><a href=""><i class="fas fa-angle-double-right"></i> Contact</a></li>
                        </ul>
                    </div> -->
                </div>
                <div class="col-xl-4 col-lg-3 mt-5 mt-lg-0">
                    <?php dynamic_sidebar('footer-widget-3'); ?>

                    <!-- <div class="single-footer">
                        <h4>latest posts</h4>
                        <ul>
                            <li><a href=""><i class="fas fa-angle-double-right"></i> Lorem ipsum dolor sit amet.</a></li>
                            <li><a href=""><i class="fas fa-angle-double-right"></i> Lorem ipsum dolor sit amet.</a></li>
                            <li><a href=""><i class="fas fa-angle-double-right"></i> Lorem ipsum dolor sit amet.</a></li>
                            <li><a href=""><i class="fas fa-angle-double-right"></i> Lorem ipsum dolor sit amet.</a></li>
                            <li><a href=""><i class="fas fa-angle-double-right"></i> Lorem ipsum dolor sit amet.</a></li>
                        </ul>
                    </div> -->
                </div>
                <div class="col-lg-3 mt-5 mt-sm-0">
                    <?php dynamic_sidebar('footer-widget-4'); ?>
                    <!-- <div class="single-footer">
                        <h4>contact us</h4>
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i> 245 Street, Sydney, Australia</li>
                            <li><i class="fas fa-mobile-alt"></i> +23 0034 5567 341</li>
                            <li><i class="fas fa-phone-alt"></i> +23 0034 5567 341</li>
                            <li><i class="far fa-envelope"></i> info@demo.com</li>
                            <li><i class="fas fa-globe-europe"></i> www.demo.com</li>
                        </ul>
                    </div> -->
                </div>
            </div>
            <div class="row footer-bottom">
                <div class="col-sm-6">
                    <div class="footer-copy">
                        <p>&copy; All Rights Reserved 2022</p>
                    </div>
                </div>
                <div class="col-sm-6 text-end">
                    <div class="footer-social">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End Here -->
  <?php wp_footer();?>

</body>
</html>