<?php
//show headers
get_header();

//Banner Food in the news
$banner_food = get_post_meta(get_the_ID(), 'banner-food-in-the-news', true);;

//Get Image Chef Field
$images_chef = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');


?>


<div class="container-fluid px-0  food-in-the-news-single-full">
    <!--banner recipe-->
    <div class="banner_featured" style="background:url('<?php echo $banner_food; ?>')">
        <div class="name_chef_inner">
            <div class="inner_name_chef font-white">
                <h1 class="font_Tahu"><?php echo the_title(); ?></h1>
            </div>

        </div>
    </div>
    <!--banner recipe-->


    <div class="container mt-5 mb-5 shadow rounded">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 ps-5 pe-5 pb-5 pt-5 columnLateralChef">
                <h2 class="font-teal text-uppercase font_Trebuchet_Bold"><?php echo the_title(); ?></h2>
                <div class="bodyChef"><?php echo the_content(); ?></div>
            </div>

            <div class="col-12 col-md-6 col-lg-6 px-0">
                <img src="<?php echo $images_chef[0]; ?>" class="img-fluid w-100" />
            </div>

        </div>
    </div>


</div>



<?php get_footer(); ?>