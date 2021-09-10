<?php get_header();

//type content banner
$post_banner = query_posts('post_type=banners&order=ASC');

//While Food in the news
while (have_posts()) : the_post();

//banner
$section_banner = get_post_meta($post->ID, 'banner-chef-recipe', true);
//description
$section_description = get_post_meta($post->ID, 'description-chef-recipe', true);

//Get Image Banner Field
$urlBanner = "";
if(isset($section_banner["url"])){
    $urlBanner = $section_banner["url"];
}

endwhile;

?>

<div class="container-fluid px-0">

    <!--banner chefs-->
    <div class="banner_featured" style="background:url('<?php echo $urlBanner ?>')">
        <div class="name_chef_inner">
            <div class="inner_name_chef font-white">
                <h1 class="font_Tahu">Recipes</h1>
            </div>
        </div>
    </div>
    <!--banner chefs-->

    <div class="description_chef_inner w-100 font_Trebuchet">
        <div class="inner_description d-flex justify-content-center  align-items-center flex-column flex-wrap h-100 text-center">
        <?php echo $section_description; ?>
        </div><!-- /.inner_description -->
    </div><!-- /description_banner -->

</div><!--end container-fluid-->

<div class="browse-tag bg-blue container-fluid pt-4 pb-5">

    <h2 class="button_view_more_chef views_read_more_blue text-uppercase font-light-blue font_Din_Condensed_Bold mb-5">
        Browse Tag
    </h2>
    <div class="container container-tags-recipes">


        <div class="filters filter-button-group">

            <?php
            $terms = get_terms('chef-recipes-tags');
            ?>
            <!--categories - Desktop-->
            <div class="row">
                <?php
                $numOfCols = 5;
                $rowCount = 0;
                foreach ($terms as  $term) {
                    $urlImageTerm = get_term_meta($term->term_id, 'image-tag-recipes', true);
                ?>
                    <div class="itemCategory col-6 col-md- col-lg  mb-3 boxfilter d-none d-md-none d-lg-block d-xl-block d-xxl-block" data-filter=".<?php echo $term->slug; ?>">
                        <div class="imageTag mx-auto shadow rounded">
                            <img src="<?php echo $urlImageTerm; ?>" class="img-fluid rounded" alt="">
                        </div>
                        <span class="titleTag mt-3 text-uppercase font-light-blue text-center d-block">
                            <?php echo $term->name; ?>
                        </span>
                    </div>
                <?php
                    $rowCount++;
                    if ($rowCount % $numOfCols == 0) echo '</div><div class="row">';
                }
                ?>
            </div>
            <!--categories - Desktop-->

            <!--selector input categories - Mobile-->
            <div class="row">
                <select class="boxfilterSelector form-select d-block d-md-block d-lg-none d-xl-none d-xxl-none" aria-label="">
                    <option value="*" selected>--All--</option>
                    <?php foreach ($terms as $key => $term) { ?>
                    <option class='boxfilter' value=".<?php echo $term->slug; ?>" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
                    <?php } ?>
                </select>
            </div>
            <!--end selecto input mobile-->

        </div>
    </div>
</div>
<!-- /browse-tag -->

<div class=" ">




    <h1 class="title_section_blue font_Din_Condensed_Bold text-uppercase font-light-blue pt-5 pb-3">Recipes</h1>
    <!--Listing Chefs Recipies-->
    <div class="container-fluid  chefs_recipies_by_chef">
        <div class="container pb-3">
            <div class="row   grid">
                <?php
                //Query Post - Chef recipies
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                $args = array(
                    'post_type' => 'chefs-recipes', // Your post type name
                    'posts_per_page' => 6,
                    'paged' => $paged,
                );

                $loop = new WP_Query($args);

                //While 
                while ($loop->have_posts()) : $loop->the_post();

                    //Get Introuduction
                    $introduction = get_post_meta(get_the_ID(), 'introduction', true);


                    $termsArray = get_the_terms($post->ID, 'chef-recipes-tags');

                    $termsSLug = "";
                    foreach ($termsArray as $term) {
                        $termsSLug .= $term->slug . ' ';
                    }

                ?>
                    <div class="<?php echo  $termsSLug; ?>  grid-item col-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 px-md-4 px-lg-4 text-center mb-5">
                        <div class="row ">
                            <div class="col-12 col-md-12 col-lg-12 px-0  img_recipes">
                                <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100')) ?>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 ps-5 pe-5 pb-5 pt-5 columnLateralChef">
                                <h2 class="name_chef text-uppercase text-center font-light-blue fs-5 mb-4"><?php echo the_title(); ?></h2>
                                <div class="bodyChef text-center mb-4"><?php echo substr($introduction, 0, 112); ?></div>
                                <div class="tag-recipes mt-4 font-teals">
                                    <?php
                                    $tagRecipes = get_the_terms(get_the_ID(), 'chef-recipes-tags');
                                    $tagRecipesList = join(", ", wp_list_pluck($tagRecipes, 'name'));
                                    ?>
                                    <span class="tags-taxonomy font_Trebuchet mb-2 text-uppercase"><i class="bi bi-tag"></i><?php echo $tagRecipesList; ?></span>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="view_more_chef mt-3 shadow rounded  btn btn-light btn-lg btn-blue font-white text-uppercase text-center font_Din_Condensed_Bold">See full Recipe</a>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_query();
                ?>




            </div>

            <div class="pagination-box">
                <?php
                //count max num 
                $total_pages = $loop->max_num_pages;
                //print paginatior
                if ($total_pages > 1) {
                    // echo paginator_kr($total_pages);
                }

                ?>
            </div>
        </div>
    </div>
    <!-- listingChefs Recipies-->
</div>


<?php get_footer(); ?>