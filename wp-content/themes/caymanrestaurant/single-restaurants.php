<?php get_header(); ?>
<?php while (have_posts()): the_post(); ?>
<section>
    <div class="container-fluid">
        <?php
            $restaurant = get_post_meta( get_the_ID());
            //print_r($restaurant);
            $restaurant_banners = get_post_meta( get_the_ID(), 'restaurant-banner', true );
        ?>
        <div class="row">
            <div class="col-12 px-0">
                <div id="CarouselBanner" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner carousel-height">
                        <?php 
                            //print_r($restaurant_logo); ?>
                            <div class="test-index position-absolute top-50 start-50 translate-middle">
                                <img src="<?php echo $restaurant['restaurant-logo'][0]; ?>" class="d-block w-100">
                            </div>
                        <?php 
                            $d = 0; 
                            foreach($restaurant_banners as $restaurant_banner){ 
                                    if($d==0){
                                        $active = 'active';
                                    }else{
                                        $active = '';
                                    }
                                    $d++;
                        ?>
                                    <div class="carousel-item <?php echo $active; ?>">
                                        <img src="<?php echo $restaurant_banner['url']; ?>" class="d-block w-100 banner-height">
                                    </div>
                            <?php } ?>  
                    </div>
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
<section class="bg-blue">
    <div class="container">
        <div class="row">
            <div class="col-12 padding-top-lg padding-bottom-lg">
                <div class="row">
                    <div class="col-12 padding-top-lg padding-bottom-lg">
                        <h1 class="font-orange font_Trebuchet_Bold text-center"><?php the_title(); ?></h1>
                    </div>
                    <div class="col-lg-4 padding-top-md padding-bottom-md border-right position-relative min-height">
                        <h5 class="font-orange"><i class="bi bi-circle font-orange"></i> Location</h5>
                        <div class="restaurant-info"><?php echo $restaurant['restaurant-location'][0]; ?></div>
                    </div>
                    <div class="col-lg-4 padding-top-md padding-bottom-md border-right position-relative min-height">
                        <?php 
                            $term_obj_list = get_the_terms( $post->ID, 'category-cuisines' );
                            $cuisines = join(', ', wp_list_pluck($term_obj_list, 'name'));
                        ?>
                        <h5 class="font-orange"><i class="bi bi-circle font-orange"></i> Cousines</h5>
                        <p class="font-white p-info"><?php echo $cuisines; ?></p>
                    </div>
                    <div class="col-lg-4 padding-top-md padding-bottom-md min-height">
                        <h5 class="font-orange"><i class="bi bi-circle font-orange"></i> Hours</h5>
                        <div class="restaurant-info"><?php echo $restaurant['restaurant-hours'][0]; ?></div> 
                    </div>
                    <div class="col-lg-4">
                        <div class="border-bottom-info d-none d-xxl-block"></div>
                    </div>
                    <div class="col-lg-4">
                        <div class="border-bottom-info d-none d-xxl-block"></div>
                    </div>
                    <div class="col-lg-4">
                        <div class="border-bottom-info d-none d-xxl-block"></div>
                    </div>

                    <div class="col-lg-4 padding-top-md padding-bottom-md position-relative start-bottom min-height">
                        <h5 class="font-orange"><i class="bi bi-circle font-orange"></i> Review</h5>
                        <div class="restaurant-info"><?php echo $restaurant['restaurant-location'][0]; ?></div>
                    </div>
                    <div class="col-lg-4 padding-top-md padding-bottom-md position-relative start-bottom min-height">
                        <h5 class="font-orange"><i class="bi bi-circle font-orange"></i> Meals</h5>
                        <?php 
                            $term_obj_list = get_the_terms( $post->ID, 'category-meals' );
                            $meals = join(', ', wp_list_pluck($term_obj_list, 'name'));
                        ?>
                        <p class="font-white p-info"><?php echo $meals; ?></p>
                    </div>
                    <div class="col-lg-4 padding-top-md padding-bottom-md min-height">
                        <h5 class="font-orange"><i class="bi bi-circle font-orange"></i> Contact</h5>
                        <p class="font-white p-info"><?php echo $restaurant['restaurant-phone'][0]; ?> | <?php echo $restaurant['restaurant-website-url'][0]; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php get_footer(); ?>