<div class="blog-details">
<h2><?php the_title(); ?></h2>
<?php the_post_thumbnail(); ?>
<?php the_content(); ?>
</div>

<!-- <div class="related_posts">
    <h5>related posts</h5>
    <div class="row">
        <div class="col-xxl-6">
            <div class="single-blog">
                <img src="assets/images/blog/blog2.jpg" alt="">
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
        </div>
        <div class="col-xxl-6">
            <div class="single-blog">
                <img src="assets/images/blog/blog3.jpg" alt="">
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
        </div>
    </div>
</div> -->
<div class="comments">
  <?php
//    comment_form(); 
   ?>
      <?php comments_template(); ?>
</div>