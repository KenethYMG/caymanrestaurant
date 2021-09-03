<div class="container-fluid today-special-box mt-3  pt-4 pb-4">
    <h1 class="title_section_f_chefs font_Tahu pt-5 pb-5">Today Special</h1>
    <div class="container">
        <div class="row">
            <?php
            //Query Post - Today Special
            $post_restaurant = query_posts('post_type=restaurants&order=ASC');

            //While Food in the news
            while (have_posts()) : the_post();



                $Tab1_SpecialFood_Show = get_post_meta($post->ID, 'show-in-home', true);
                $Tab2_SpecialFood_Show = get_post_meta($post->ID, 'show-in-home-2', true);
                $Tab3_SpecialFood_Show = get_post_meta($post->ID, 'show-in-home-3', true);
                $Tab4_SpecialFood_Show = get_post_meta($post->ID, 'show-in-home-4', true);



                //first tab Special Food 1 y 2
                if (isset($Tab1_SpecialFood_Show["mostrar"]) || isset($Tab2_SpecialFood_Show["mostrar"]) || isset($Tab3_SpecialFood_Show["mostrar"]) || isset($Tab4_SpecialFood_Show["mostrar"])) {
                    if ($Tab1_SpecialFood_Show["mostrar"] == "true") {
                        $image = get_post_meta($post->ID, 'sp-1-image-special-1', true);
                        $ImageUrl = $image;
                        $titleFood = get_post_meta($post->ID, 'sp-1-title-special-1', true);
                    } elseif ($Tab2_SpecialFood_Show["mostrar"] == "true") {
                        $image = get_post_meta($post->ID, 'sp-2-image-special-2', true);
                        $ImageUrl = $image;

                        $titleFood = get_post_meta($post->ID, 'sp-2-title-special', true);
                    } elseif ($Tab3_SpecialFood_Show["mostrar"] == "true") {
                        $image = get_post_meta($post->ID, 'sp-3-image-special', true);
                        $ImageUrl = $image;

                        $titleFood = get_post_meta($post->ID, 'sp-3-title-special', true);
                    } elseif ($Tab4_SpecialFood_Show["mostrar"] == "true") {
                        $image = get_post_meta($post->ID, 'sp-4-image-special', true);
                        $ImageUrl = $image;

                        $titleFood = get_post_meta($post->ID, 'sp-4-title-special', true);
                    } else {
                        $ImageUrl = "";

                        $titleFood = "";
                    }
                }


            ?>
                <!--col-->
                <div class="col-12 col-md-4 col-lg-4 mb-5 box-girate-r">
                    <div class="card">
                        <div class="boxImage">
                            <img src="<?php echo $ImageUrl; ?>" class="img-fluid" />
                        </div>
                        <div class="card-body mt-4">
                            <span class="nameSpecial font-orange font_Trebuchet text-uppercase d-block"><?php echo $titleFood; ?></span>
                            <span class="nameRestaurant font-white font_Trebuchet text-uppercase d-block"><?php echo the_title(); ?></span>
                        </div>
                    </div>
                </div>
                <!--col-->



            <?php endwhile; ?>
        </div>
    </div>
</div>