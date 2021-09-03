<?php get_header(); ?>

<div class="container-fluid   px-0">
    <!--banner chefs-->
    <div class="banner_featured" style="background:url('<?php echo IMAGES ?>/food-in-news-banner.jpg')">
        <div class="name_chef_inner">
            <div class="inner_name_chef font-white">
                <h1 class="font_Tahu">Food in the News</h1>
            </div>
        </div>
    </div>
    <!--banner chefs-->

    <div class="pt-5">
        <!--listing food in the news-->
        <div class="container">
            <div class="row">
                <?php
                //Query Post - Food in the news 
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                $args = array(
                    'post_type' => 'food-in-the-news', // Your post type name
                    'posts_per_page' => 6,
                    'paged' => $paged,
                );

                $loop = new WP_Query($args);

                //While Food in the news
                while ($loop->have_posts()) : $loop->the_post();

                    //Get Image Field
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                    $ImageUrl = $image[0];

                    //Description News
                    $content = get_the_content();
                    $content = strip_tags($content);


                ?>
                    <!--col-->
                    <div class="col-12 col-md-4 col-lg-4 mb-5">
                        <div class="card">
                            <div class="boxImage">
                                <img src="<?php echo $ImageUrl; ?>" class="img-fluid">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title font_Trebuchet text-uppercase mb-4"><?php echo the_title(); ?></h3>
                                <p class="card-text font_Trebuchet mb-4"><?php echo substr($content, 0, 112); ?></p>
                                <a href="<?php the_permalink(); ?>" class="buttonLink btn btn-light btn-lg btn-green font-white text-uppercase font_Din_Condensed_Bold">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!--col-->

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
        <!--listing food in the news-->

    </div>

    <?php get_footer(); ?>