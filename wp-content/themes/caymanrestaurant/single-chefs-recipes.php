<?php
//show headers
get_header();

global $post;

//Name restaruant of chef recipes
$nameRestaurantCR = get_post_meta(get_the_ID(), 'name-restaurant-recipes-chef', true);;

//Banner Chef
$bannerChef = get_post_meta(get_the_ID(), 'banner-recipe', true);;

//introduction
$contentIntroduction = get_post_meta(get_the_ID(), 'introduction', true);;

//Get Image recipe Field
$images_recipe = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');


//YIELDS
$yields = get_post_meta(get_the_ID(), 'chef-recipes-yields', true);

//preparation
$preparation = get_post_meta(get_the_ID(), 'chef-recipes-prep-time', true);

//COOK TIME
$cooki_time = get_post_meta(get_the_ID(), 'chef-recipes-cook-time', true);

//Ingredients
$ingredients = get_post_meta(get_the_ID(), 'chef-recipes-ingredients', true);

//Directios
$directions_list = get_post_meta(get_the_ID(), 'chef-recipes-directions', true);

//Difficulty
$Difficulty = get_post_meta(get_the_ID(), 'chef-recipes-difficulty', true);

//Youtube Url
$youtube_url = get_post_meta(get_the_ID(), 'chef-recipes-video', true);
$getIdvideo = explode("v=", $youtube_url);


?>
<div class="container-fluid px-0 recipes-single-full">
    <!--banner recipe-->
    <div class="banner_featured" style="background:url('<?php echo $bannerChef; ?>')">
        <div class="name_chef_inner">
            <div class="inner_name_chef font-white">
                <h1 class="font_Tahu"><?php echo the_title(); ?></h1>
            </div>

        </div>
    </div>
    <!--banner recipe-->

    <div class="description_chef_inner w-100 font_Trebuchet mb-5">
        <div class="inner_description d-flex justify-content-center  align-items-center flex-column flex-wrap h-100 text-center">
            <?php echo $contentIntroduction; ?>
        </div><!-- /.inner_description -->
    </div><!-- /description_restaurant -->

    <div class="container shadow rounded">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4 ps-5 pe-5 pb-5 pt-5">
                <h2 class="font-teal text-uppercase font_Trebuchet_Bold"><?php echo the_title(); ?></h2>
                <span class="sub-heading  text-uppercase name_restaurant_chef font-teal font_Trebuchet_Bold  mb-2"><?php echo $nameRestaurantCR; ?></span>
                <div class="bodyChef font_Trebuchet"><?php echo $contentIntroduction; ?></div>
                <div class="instructions">
                    <ul>
                        <li class="text-uppercase"><b>Serves:</b> <?php echo $yields; ?></li>
                        <li class="text-uppercase"><b>Prep Time:</b> <?php echo $preparation; ?></li>
                        <li class="text-uppercase"><b>Cook Time:</b> <?php echo $cooki_time; ?></li>
                        <li class="text-uppercase"><b>Difficulty:</b> <?php echo $Difficulty; ?></li>
                    </ul>
                </div>

                <div class="tag-recipes mt-4 font-teals">
                    <?php
                    $tagRecipes = get_the_terms($post->ID, 'chef-recipes-tags');
                    $tagRecipesList = join(", ", wp_list_pluck($tagRecipes, 'name'));
                    ?>
                    <span class="tags-taxonomy font_Trebuchet mb-2 text-uppercase d-flex"><i class="bi bi-tag"></i><?php echo $tagRecipesList; ?></span>
                </div>

            </div>
            <div class="col-12 col-md-8 col-lg-8 px-0 columnLateralChef imageRecipe">
                <img src="<?php echo $images_recipe[0]; ?>" class="img-fluid w-100" />

            </div>
        </div>
    </div>

    <!--directions recipe-->
    <div class="container-fluid featured_chefs mt-5 pb-5 shadow rounded">
        <h1 class="title_section_f_chefs font_Tahu pt-5 pb-3">Directions</h1>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4 ps-5 pe-5 pb-5 pt-5 bg-dark-blue">
                    <h2 class="font-teal text-uppercase font_Trebuchet_Bold fs-4 mb-3">INGREDIENTS</h2>
                    <div class="bodyChef font_Trebuchet font-white ingredientsBox"><?php echo $ingredients; ?></div>
                </div>
                <div class="col-12 col-md-8 col-lg-8 ps-5 pe-5 pb-5 pt-5" style="background:#6298C6">
                    <h2 class="font-blue text-uppercase font_Trebuchet_Bold fs-4 mb-3">METHOD</h2>
                    <div class="bodyChef font_Trebuchet font-white directionsBox"><?php echo $directions_list; ?></div>

                </div>
            </div>
        </div>
    </div>
    <!--end directions recipe-->

    <!--video recipe-->
    <?php if (isset($getIdvideo[1])) { ?>
        <div class="container-fluid video-recipes mt-5 pb-5 shadow rounded">
            <div class="container px-0">
                <div class="row px-0">
                    <div class="col-12 col-md-12 col-lg-12">
                        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="788.54" height="443" type="text/html" src="https://www.youtube.com/embed/<?php echo $getIdvideo[1]; ?>"></iframe>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!--end directions recipe-->

</div>

<?php get_footer(); ?>