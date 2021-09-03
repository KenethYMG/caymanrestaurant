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
                <div class="col-12 padding-top-md padding-bottom-lg margin-bottom-lg">
                    <div class="text-center">
                        <a href="#" class="btn btn-light btn-lg btn-orange font-white">RESERVATION REQUEST</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 padding-top-lg padding-bottom-lg">
                    <h1 class="title-about text-center font-blue font_Din_Condensed_Bold text-uppercase">About us</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-8">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
    <section class="bk-menus margin-top-lg margin-bottom-lg padding-top-lg padding-bottom-lg">
        <div class="container">
            <div class="row">
                <div class="col-12 padding-bottom-lg">
                    <h1 class="title-menu text-center font-blue font_Tahu">Menús</h1>
                </div>
            </div>
            <div class="row justify-content-center">
               <div class="col-sm-3 col-12 padding-top-md padding-bottom-md">
                   <?php $restaurant_breakfast = get_post_meta( get_the_ID(), 'restaurant-breakfast', true ); ?>
                   <div class="text-center">
                       <a target="_blank" href="<?php echo $restaurant_breakfast['url']; ?>" class="text-uppercase btn btn-light btn-lg btn-dark-blue font-white font-uppercase">Breakfast menu</a>
                   </div>
               </div>
               <div class="col-sm-3 col-12 padding-top-md padding-bottom-md">
                    <?php $restaurant_lunch = get_post_meta( get_the_ID(), 'restaurant-lunch', true ); ?>
                    <div class="text-center">
                       <a target="_blank" href="<?php echo $restaurant_lunch['url']; ?>" class="text-uppercase btn btn-light btn-lg btn-dark-blue font-white font-uppercase">Lunch menu</a>
                    </div>
               </div>
               <div class="col-sm-3 col-12 padding-top-md padding-bottom-md">
                    <?php $restaurant_dinner = get_post_meta( get_the_ID(), 'restaurant-dinner', true ); ?>
                    <div class="text-center">
                       <a target="_blank" href="<?php echo $restaurant_dinner['url']; ?>" class="text-uppercase btn btn-light btn-lg btn-dark-blue font-white font-uppercase">Dinner menu</a>
                    </div>
               </div>
               <div class="col-sm-3 col-12 padding-top-md padding-bottom-md">
                    <?php $restaurant_brunch = get_post_meta( get_the_ID(), 'restaurant-brunch', true ); ?>
                    <div class="text-center">
                       <a target="_blank" href="<?php echo $restaurant_brunch['url']; ?>" class="text-uppercase btn btn-light btn-lg btn-dark-blue font-white font-uppercase">Brunch menu</a>
                    </div>
               </div>
            </div>
        </div>
    </section>
    <section class="margin-top-lg margin-bottom-lg">
        <div class="container">
            <div class="row">
                <div class="col-12 padding-top-lg padding-bottom-lg">
                    <h1 class="title-features text-center font-blue font_Din_Condensed_Bold text-uppercase">Features</h1>
                </div>
                <div class="col-12">
                    <?php 
                        $term_obj_list = get_the_terms( $post->ID, 'category-features' );
                        $features = join(', ', wp_list_pluck($term_obj_list, 'name'));
                    ?>
                    <p class="p-info"><?php echo $features; ?></p>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>
<?php get_footer(); ?>