<?php get_header(); ?>


<section>
    <!--banner featured-->
    <div class="banner_featured bg-blue">
        <div class="name_chef_inner">
            <div class="inner_name_chef font-white">
                <h1 class="font_Tahu">Search Result</h1>
            </div>
        </div>
    </div>
    <!--banner featured-->

    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-12">
                
                    <?php
                    $s = get_search_query();
                    $args = array('s' => $s);
                    // The Query
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) {
                        _e("<h2 class='text-center mb-5'>Search Results for: " . get_query_var('s') . "</h2>");
                        echo '<div class="list-result-search">';
                        echo ' <div class="container"><div class="row">';
                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                    ?>
                            <!--col-->
                            <div class="col-12 col-md-3 col-lg-3 mb-5">
                                <div class="card">
                                    <div class="boxImage">
                                        <?php the_post_thumbnail('full', array('class' => 'img-fluid')) ?>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title font_Trebuchet text-uppercase mb-4"><?php echo the_title(); ?></h3>
                                        <p class="card-text font_Trebuchet mb-4"><?php echo wp_trim_words( get_the_excerpt(), 40, '...' ); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="buttonLink btn btn-light btn-lg btn-green font-white text-uppercase font_Din_Condensed_Bold">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!--col-->
                        <?php
                        }
                        echo '</div></div></div>';
                    } else {
                        ?>
                        <h2>Nothing Found</h2>
                        <div class="alert alert-info">
                            <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
                        </div>
                    <?php } ?>

                
            </div>
        </div>
    </div>

</section>

<?php get_footer(); ?>