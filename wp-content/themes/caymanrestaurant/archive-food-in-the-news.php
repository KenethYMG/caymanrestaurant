<?php get_header(); ?>

    <div class="pt-5">
        <!--listing food in the news-->
        <div class="container">
            <div class="row">
                <?php
                //Query Post - Food in the news 
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                $args = array(
                    'post_type' => 'food-in-the-news', // Your post type name
                    'posts_per_page' => 8,
                    'paged' => $paged,
                );

                $loop = new WP_Query($args);

                //While Food in the news
                while ($loop->have_posts()) : $loop->the_post();

                    //Description News
                    $content = get_the_content();
                    $content = strip_tags($content);


                ?>
                    <!--col-->
                    <div class="col-12 col-md-3 col-lg-3 mb-5">
                        <div class="card">
                            <div class="boxImage">
                                <?php the_post_thumbnail('full', array('class' => 'img-fluid')) ?>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title font_Trebuchet text-uppercase mb-4"><?php echo the_title(); ?></h3>
                                <p class="card-text font_Trebuchet mb-4"><?php echo substr($content, 0, 112); ?></p>
                                <a href="<?php the_permalink(); ?>" class="buttonLink btn btn-light btn-lg btn-green font-white text-uppercase font_Din_Condensed_Bold">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!--col-->

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
        <!--listing food in the news-->

    <?php get_footer(); ?>