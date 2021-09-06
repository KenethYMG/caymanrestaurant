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
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
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
            while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="col-4">
                    <?php the_title(); ?>
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