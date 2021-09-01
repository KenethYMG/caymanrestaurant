<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 px-0">
            <?php while (have_posts()): the_post(); ?>
            <div id="CarouselBanner" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php 
                        $restaurant_banners = get_post_meta( get_the_ID(), 'restaurant-banner', true );
                        $restaurant_logo = get_post_meta( get_the_ID(), 'restaurant-logo', true );
                        //print_r($restaurant_logo); ?>
                        <div class="test-index position-absolute top-50 start-50 translate-middle text-center">
                            <img src="<?php echo $restaurant_logo; ?>" class="d-block w-100">
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
                                    <img src="<?php echo $restaurant_banner['url']; ?>" class="d-block w-100">
                                </div>
                        <?php } ?>  
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>