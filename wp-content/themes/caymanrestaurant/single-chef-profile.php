<?php
//show headers
get_header();

global $post;

//Banner Chef
$bannerChef = get_post_meta( get_the_ID(), 'banner-chef', true );;

//Description Chef
$nameRestaurant = get_post_meta( get_the_ID(), 'chef-name-restaurant', true );;

//Description Chef
$content = get_post_meta( get_the_ID(), 'chef-description', true );;
$content = strip_tags($content);

?>
<div class="container-fluid px-0">
    <!--banner featured-->
    <div class="banner_featured" style="background:url('<?php echo $bannerChef; ?>')">
        <div class="name_chef_inner">
            <div class="inner_name_chef font-white">
                <h1 class="font_Tahu"><?php echo the_title(); ?></h1>
            </div>

        </div>
    </div>
    <!--banner featured-->

    <div class="description_chef_inner w-100 font_Trebuchet mb-md-5 mb-lg-5">
        <div class="inner_description d-flex justify-content-center  align-items-center flex-column flex-wrap h-100 text-center">
            <?php echo $content; ?>
        </div><!-- /.inner_description -->
    </div><!-- /description_restaurant -->

    <div class="container shadow rounded">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 px-0">
            <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100')) ?>
            </div>
            <div class="col-12 col-md-6 col-lg-6 ps-5 pe-5 pb-5 pt-5 columnLateralChef">
                <h2 class="font-teal text-uppercase font_Trebuchet_Bold"><?php echo the_title(); ?></h2>
                <span class="sub-heading  text-uppercase name_restaurant_chef font-teal font_Trebuchet_Bold  mb-2"><?php echo $nameRestaurant; ?></span>
                <div class="bodyChef"><?php echo $content; ?></div>
            </div>
        </div>
    </div>
</div>
<!--end container fluid-->

<!--Chefs Recipies-->
<div class="container-fluid mt-5 chefs_recipies_by_chef featured_chefs">
    <h1 class="title_section_f_chefs font_Tahu pt-5 pb-5">Favourite Recipe</h1>
    <div class="container pb-3">
        <div class="row">
            <?php
                //Query Post - Chef recipies
                query_posts('post_type=chefs-recipes&posts_per_page=1');
                //While Chef
                while (have_posts()): the_post();
                //Get Introuduction
                $introduction = get_post_meta( get_the_ID(), 'introduction', true );
            
            ?>
            <div class="col-12 col-md-6 col-lg-6 px-0 img_recipes">
                <?php the_post_thumbnail('full', array('class' => 'img-fluid, w-100')) ?>
            </div>
            <div class="col-12 col-md-6 col-lg-6 ps-5 pe-5 pb-5 pt-5 columnLateralChef">
                <h2 class="name_chef text-uppercase font-blue mb-4"><?php echo the_title(); ?></h2>
                <div class="bodyChef mb-4"><?php echo $introduction ?></div>
                <a href="<?php the_permalink();?>" class="view_more_chef mt-3 shadow rounded  btn btn-light btn-lg btn-blue font-white text-uppercase text-center font_Din_Condensed_Bold">See full Recipe</a>
            </div>
            <?php endwhile; ?>
        </div>

        <a href="<?php echo HOMELINK ?>chefs-recipes" class="button_view_more_chef views_read_more text-uppercase font-white font_Din_Condensed_Bold mt-5">
        Sell all recipies
        </a><!-- /.button_view_more -->

    </div>

</div>
<!--Chefs Recipies-->
<?php get_footer(); ?>