<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 px-0">
            <?php query_posts('post_type=slider&post_per_page=1'); 
            while (have_posts()): the_post(); ?>
            <div id="CarouselHome" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php 
                        $carousel_images = get_post_meta( get_the_ID(), 'carousel-images', true );
                        $carousel_text = get_post_meta( get_the_ID(), 'text-carousel', true ); 
                        $button_label = get_post_meta( get_the_ID(), 'label-button', true );
                        $button_url = get_post_meta( get_the_ID(), 'url-button', true );
                        $bk_description = get_post_meta( get_the_ID(), 'background-description', true );
                        //print_r($carousel_images); ?>
                         <div class="test-index position-absolute top-50 start-50 translate-middle text-center">
                            <h1 class="title-home font-white">
                                    <?php echo $carousel_text; ?>
                            </h1>
                            <a href="<?php echo $button_url; ?>" class="btn btn-light btn-lg btn-orange font-white"><?php echo $button_label; ?></a>
                        </div>
                    <?php 
                        $d = 0; 
                        foreach($carousel_images as $carousel_image){ 
                                if($d==0){
                                    $active = 'active';
                                }else{
                                    $active = '';
                                }
                                $d++;
                    ?>
                                <div class="carousel-item <?php echo $active; ?>">
                                    <img src="<?php echo $carousel_image['url']; ?>" class="d-block w-100">
                                </div>
                        <?php } ?>  
                </div>
            </div>
            <div class="bk-site-description position-relative" style="background-image:url('<?php echo $bk_description; ?>');">
                <div class="position-absolute top-50 start-50 translate-middle text-center">
                    <div class="site-description font-white"><?php the_content(); ?></div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>