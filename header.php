
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    
      <?php wp_head();?>

</head>
<body>
    
    <!-- Top Area Start Here -->
    <section class="top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7">
                    <div class="top-left">
                        <?php 
                        $config = get_option('halim_options');
                        ?>
                        <?php                         
                        if($config['header_email']){
                            echo '<a href="mailto:'.$config['header_email'].'"> <i class="far fa-envelope"></i> ' .$config['header_email']. '</a>';
                        }
                        ?>
                        <?php
                         if($config['header_phone']){
                            echo '<a href="tel:'.$config['header_phone'].'"> <i class="fas fa-phone-alt"></i> ' .$config['header_phone']. '</a>';
                        }
                         ?>
                        <!-- <a href="mailto:info@halim.com"><i class="far fa-envelope"></i> info@halim.com</a> -->
                        <!-- <a href="tel:+123456789"><i class="fas fa-phone-alt"></i> +123456789</a> -->
                    </div>
                </div>
                <div class="col-md-6 col-sm-5">
                    <div class="top-social">
                        <?php
                        $header_icons = $config['header_icons'];
                        if($header_icons){
                            foreach($header_icons as $icon){
                                // var_dump($icon);
                                echo '<a href="'.$icon['social_link'].'"><i class="'.$icon['social_icon'].'"></i></a>';
                            }
                        }
                        ?>
                        <!-- <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Area End Here -->

   <!-- Header Area Start Here -->
   <header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="">
                            <?php 
                                $logo = $config['logo'];
                                // var_dump($logo);
                                if($logo){
                                    // echo '<a class="navbar-brand" href="'.site_url().'"><img src="'. htmlspecialchars($logo, ENT_QUOTES, 'UTF-8') .'"></a>';
                                    echo '<a class="navbar-brand" href="'.site_url().'"><img src="'.$logo.'"></a>';
                                }else{
                                    echo '<a class="navbar-brand" href="'.site_url().'">Halim</a>';
                                }
                            ?>
                            <!-- <a class="navbar-brand" href="<?php echo site_url(); ?>">Halim</a> -->
                        </div>

                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                      <!--  <div class="navbar-nav">
                             <ul>
                                <li><a class="nav-link" href="index.html">Home</a></li>
                                <li class="caret"><a class="nav-link" href="about.html">About</a>
                                    <ul>
                                        <li><a href="">About Style 1</a></li>
                                        <li><a href="">About Style 2</a></li>
                                        <li><a href="">About Style 3</a></li>          
                                        <li><a href="">About Style 4</a></li>
                                        <li><a href="">About Style 5</a></li>
                                    </ul>
                                </li>
                                <li><a class="nav-link" href="services.html">Services</a></li>
                                <li><a class="nav-link" href="portfolio.html">Portfolio</a></li>
                                <li class="caret"><a class="nav-link" href="gallery.html">Gallery</a>
                                    <ul>
                                        <li><a href="">Gallery Style 1</a></li>
                                        <li><a href="">Gallery Style 2</a></li>
                                        <li><a href="">Gallery Style 3</a></li>          
                                        <li><a href="">Gallery Style 4</a></li>
                                        <li><a href="">Gallery Style 5</a></li>
                                    </ul>
                                </li>
                                <li><a class="nav-link" href="blog.html">Blog</a></li>
                                <li><a class="nav-link" href="contact.html">Contact</a></li>
                            </ul> 
                        </div> -->
                                                 <?php
                            wp_nav_menu( array(
                                'theme_location'  => 'main-menu',
                                'menu_class'      => 'navbar-nav d-flex align-items-center gap-4',
                                // 'menu'            => 'ul',
                                // 'container'       => 'li',
                                // 'container_class' => 'collapse navbar-collapse',
                                // 'container_id'    => 'navbarNavAltMarkup',
                                // 'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                // 'walker'          => new WP_Bootstrap_Navwalker(),
                            ))
                            ?>
                      </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End Here -->
