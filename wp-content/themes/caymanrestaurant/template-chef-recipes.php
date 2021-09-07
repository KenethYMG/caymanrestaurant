<?php
/*
Template Name: Template Chef Recipes
*/

get_header();

//Get Image Chef Field
$images_banner = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'full');
$urlBanner = "";
if(isset($images_banner)){
    $urlBanner = $images_banner;
}

?>

<div class="container-fluid   px-0">
    <!--banner chefs-->
    <div class="banner_featured" style="background:url('<?php echo $urlBanner ?>')">
        <div class="name_chef_inner">
            <div class="inner_name_chef font-white">
                <h1 class="font_Tahu"><?php echo the_title(); ?></h1>
            </div>
        </div>
    </div>
    <!--banner chefs-->

    <div class="description_chef_inner w-100 font_Trebuchet">
        <div class="inner_description d-flex justify-content-center  align-items-center flex-column flex-wrap h-100 text-center">
        <?php the_excerpt(); ?>
        </div><!-- /.inner_description -->
    </div><!-- /description_restaurant -->

 <?php 
    require("archive-chefs-recipes.php");
 ?>

</div>



<?php get_footer(); ?>