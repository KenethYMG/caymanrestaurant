<div class="container-fluid featured_chefs mt-3 mb-3 pt-2 pb-2">
    <h1 class="title_section_f_chefs font_Tahu pt-5 pb-5">Features Chefs</h1>
    <div class="container pb-5 inner_box_columns">
        <div class="row justify-content-around">
                <?php
                //Query Post - Chef 
                query_posts('post_type=chefs&posts_per_page=2');
                //While Chef
                while (have_posts()): the_post();
                //Get Image Chef Field
                $images_chef = get_post_meta( get_the_ID(), 'photo-chef', true );
                
                //Description Chef
                $content = get_the_content();
                $content = strip_tags($content);
                
                //Get Name Restaurant Chef
                $name_restaurant_chef = get_post_meta( get_the_ID(), 'restaurant-name', true );
                
                ?>

                <div class="col-12 col-md-6 col-lg-6 mb-3 mb-md-0 mb-lg-0 box_chef">
                    <div class="d-flex innerChef">
                        <div class="row">
                            <div class="col-6 boxImages">
                                <img src="<?php echo $images_chef; ?>"  class="img-fluid">
                            </div>
                            <div class="col-6 informationChef d-flex flex-wrap justify-content-center align-items-center font_Trebuchet text-center pt-5 pb-5">
                                <h2 class="name_chef text-center text-uppercase font-blue mb-1"><?php echo the_title(); ?></h2>
                                <div class="description_chef mb-1"><?php echo substr($content, 0, 112); ?></div>
                                <span class="name_restaurant_chef text-uppercase text-center font-light-blue font_Trebuchet mb-1"><?php echo $name_restaurant_chef; ?></span>
                                <a href="<?php the_permalink();?>" class="view_more_chef  btn btn-light btn-lg btn-blue font-white text-uppercase text-center font_Din_Condensed_Bold">Find out more</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div><!--inner_box_columns-->

    <a href="" class="button_view_more_chef views_read_more text-uppercase font-white font_Din_Condensed_Bold">
        Sell all chefs
    </a><!-- /.button_view_more -->
    

</div>