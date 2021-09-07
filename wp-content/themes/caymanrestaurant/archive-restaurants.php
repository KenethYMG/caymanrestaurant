<?php get_header(); ?>
<section>
    <div class="container-fluid  px-0">
        <!--banner chefs-->
        <div class="banner_featured" style="background:url('<?php echo IMAGES ?>/listing-chefs-recipes.jpg')">
            <div class="name_chef_inner">
                <div class="inner_name_chef font-white">
                    <h1 class="font_Tahu">Restaurants</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 px-0">
                <div class="bk-profile-excerpt position-relative">
                    <div class="position-absolute top-50 start-50 translate-middle text-center">
                        <div class="site-description font-white"><?php the_excerpt(); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php //echo do_shortcode('[caf_filter id="77"]'); ?>
            </div>
        </div>
    </div>
</section>
<section class="bg-blue">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <?php
                $args = array(
                'child_of'                 => 0,
                'parent'                   => '',
                'orderby'                  => 'name',
                'order'                    => 'ASC',
                'hide_empty'               => 0,
                'hierarchical'             => 1,
                'taxonomy'                 => 'category-cuisines',
                'pad_counts'               => false );
                $categories = get_categories($args);
                echo '<ul class="filter-cuisines margin-top-lg margin-bottom-lg">';

                foreach ($categories as $category) {
                    $url = get_term_link($category);
                    //print_r($category);
                    $ids = $category->term_id;
                    //print_r($ids);
                    $term_image = get_term_meta( $category->term_id, 'category-cuisine-image', true);
                    //print_r($term_image);
                ?>
                    <li class="text-center">
                        <img class="img-fluid rounded-circle" src="<?php echo $term_image['url'] ?>" />
                        <p class="font-orange text-center text-uppercase font_Trebuchet_Bold margin-top-md"><?php echo $category->name; ?></p> 
                    </li>
                    <?php
                }
                echo '</ul>';
            ?>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 margin-top-lg margin-bottom-lg">
                <h1 class="font-orange text-uppercase text-center margin-top-lg margin-bottom-lg font_Din_Condensed_Bold"><?php post_type_archive_title(); ?></h1>
            </div>
            <?php
            //Query Post - Chef recipies
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $args = array(
                'post_type' => 'restaurants', // Your post type name
                'posts_per_page' => 3,
                'paged' => $paged,
            );

            $loop = new WP_Query($args);

            //While 
            while ($loop->have_posts()) : $loop->the_post(); 
            $location_restaurant = get_post_meta( get_the_ID(), 'restaurant-location', true ); ?>

            <div class="col-12 col-md-4 col-lg-4 mb-5 boxItemGray">
                <div class="card">
                    <div class="boxImage">
                        <?php the_post_thumbnail('full', array('class'=>'img-fluid')); ?>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title font_Trebuchet text-uppercase mb-4"><?php echo the_title(); ?></h3>
                        <p class="card-text font_Trebuchet mb-4"><?php the_excerpt(); ?></p>
                        <p class="card-location font_Trebuchet mb-2"><i class="bi bi-tag"></i><?php echo $location_restaurant; ?></p>
                        <a href="<?php the_permalink();?>" class="buttonLink btn btn-light btn-lg btn-orange font-white  text-uppercase font_Din_Condensed_Bold">Find Out More</a>
                    </div>
                </div>
            </div>

            <?php endwhile; ?>
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
</section>

<?php get_footer(); ?>