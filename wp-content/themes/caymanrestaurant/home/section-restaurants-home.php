<div class="container-fluid restaurant-list mt-3 mb-3 pt-2 pb-2">
    <h1 class="title_section_blue font_Din_Condensed_Bold text-uppercase font-blue pt-5 pb-5">Today’s Feature Restaurants</h1>
    <div class="container">
        <div class="row">
            <?php
                //Query Post - Food in the news 
                query_posts('post_type=restaurant&posts_per_page=3');
                //While Food in the news
                while (have_posts()): the_post();

                //Get Image Field
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail');
                $ImageUrl = $image[0];
                
                //Description
                $content = get_the_content();
                $content = strip_tags($content);

                //Get Location Restaurant Field
                $location_restaurant = get_post_meta( get_the_ID(), 'location', true )
                
                
            ?>
            <!--col-->
            <div class="col-12 col-md-4 col-lg-4 mb-5 boxItemGray">
                <div class="card">
                    <div class="boxImage">
                        <img src="<?php echo $ImageUrl; ?>"  class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title font_Trebuchet text-uppercase mb-4"><?php echo the_title(); ?></h3>
                        <p class="card-text font_Trebuchet mb-4"><?php echo substr($content, 0, 112); ?></p>
                        <span class="card-location font_Trebuchet mb-2"><i class="bi bi-tag"></i><?php echo $location_restaurant; ?></span>
                        <a href="<?php the_permalink();?>" class="buttonLink btn btn-light btn-lg btn-orange font-white  text-uppercase font_Din_Condensed_Bold">Find Out More</a>
                    </div>
                </div>
            </div>
            <!--col-->

            <?php endwhile; ?>
        </div>
    </div>
    <a href="" class="button_view_more views_read_more  text-uppercase font-white font_Din_Condensed_Bold">
        Sell all restaurants
    </a><!-- /.button_view_more -->
</div>