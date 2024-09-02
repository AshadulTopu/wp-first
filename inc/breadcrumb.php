<?php 
    while(have_posts()){
        the_post();
        ?>
        <h4><?php the_title(); ?></h4>
        
        <ul>
            <li><a href="<?php echo site_url(); ?>">home</a></li> / 
            <li><?php the_title(); ?></li>
        </ul>
    <?php
    }
    ?>