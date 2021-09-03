<?php get_header(); ?>

<div class="container-fluid  px-0">
    <!--banner chefs-->
    <div class="banner_featured" style="background:url('<?php echo IMAGES ?>/listing-chefs-recipes.jpg')">
        <div class="name_chef_inner">
            <div class="inner_name_chef font-white">
                <h1 class="font_Tahu">Recipes</h1>
            </div>
        </div>
    </div>
    <!--banner chefs-->

    <div class="description_chef_inner w-100 font_Trebuchet ">
        <div class="inner_description d-flex justify-content-center  align-items-center flex-column flex-wrap h-100 text-center">

        </div><!-- /.inner_description -->
    </div><!-- /description_restaurant -->

    <div class="browse-tag bg-blue container-fluid pt-5 pb-5">
        <h2 class="button_view_more_chef views_read_more_blue text-uppercase font-light-blue font_Din_Condensed_Bold mb-5">
            Browse Tag
        </h2>
        <div class="container container-tags-recipes">
            <div class="row">
                <div class="col mb-3">
                    <div class="imageTag mx-auto shadow rounded">

                    </div>
                    <span class="titleTag mt-3 text-uppercase font-light-blue text-center d-block">
                        Dinner
                    </span>
                </div>
                <div class="col mb-3">
                    <div class="imageTag mx-auto shadow rounded">

                    </div>
                    <span class="titleTag mt-3 text-uppercase font-light-blue text-center d-block">
                        Dinner
                    </span>
                </div>
                <div class="col mb-3">
                    <div class="imageTag mx-auto shadow rounded">

                    </div>
                    <span class="titleTag mt-3 text-uppercase font-light-blue text-center d-block">
                        Dinner
                    </span>
                </div>
                <div class="col mb-3">
                    <div class="imageTag mx-auto shadow rounded">

                    </div>
                    <span class="titleTag mt-3 text-uppercase font-light-blue text-center d-block">
                        Dinner
                    </span>
                </div>
                <div class="col mb-3">
                    <div class="imageTag mx-auto shadow rounded">

                    </div>
                    <span class="titleTag mt-3 text-uppercase font-light-blue text-center d-block">
                        Dinner
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <div class="imageTag mx-auto shadow rounded">

                    </div>
                    <span class="titleTag mt-3 text-uppercase font-light-blue text-center d-block">
                        Dinner
                    </span>
                </div>
                <div class="col mb-3">
                    <div class="imageTag mx-auto shadow rounded">

                    </div>
                    <span class="titleTag mt-3 text-uppercase font-light-blue text-center d-block">
                        Dinner
                    </span>
                </div>
                <div class="col mb-3">
                    <div class="imageTag mx-auto shadow rounded">

                    </div>
                    <span class="titleTag mt-3 text-uppercase font-light-blue text-center d-block">
                        Dinner
                    </span>
                </div>
                <div class="col mb-3">
                    <div class="imageTag mx-auto shadow rounded">

                    </div>
                    <span class="titleTag mt-3 text-uppercase font-light-blue text-center d-block">
                        Dinner
                    </span>
                </div>
                <div class="col mb-3">
                    <div class="imageTag mx-auto shadow rounded">

                    </div>
                    <span class="titleTag mt-3 text-uppercase font-light-blue text-center d-block">
                        Dinner
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- /browse-tag -->

    <div class="">
        <h1 class="title_section_blue font_Din_Condensed_Bold text-uppercase font-light-blue pt-5 pb-3">Recipes</h1>
        <!--Listing Chefs Recipies-->
        <div class="container-fluid  chefs_recipies_by_chef">
            <div class="container pb-3">
                <div class="row ">
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

                    ?>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 px-md-4 px-lg-4 text-center mb-5">
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

                    <div class="pagination-box">
                        <?php
                        //count max num 
                        $total_pages = $loop->max_num_pages;
                        //print paginatior
                        if ($total_pages > 1) {
                            echo paginator_kr($total_pages);
                        }

                        ?>
                    </div>


                </div>
            </div>
        </div>
        <!-- listingChefs Recipies-->
    </div>

</div>

<?php get_footer(); ?>