<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <?php query_posts('post_type=slider&post_per_page=1') ?>
                <div class="carousel-inner">
                    <?php 
                    while (have_posts()): the_post(); 
                        $images_url = get_post_meta( get_the_ID(), 'upload-images', true );
                        $d = 0; 
            
                        if ( ! empty( $images_url ) ) {
                            $images = explode(",", $images_url);
                        }
                            foreach($images as $image){ 
                                if($d==0){
                                    $active = 'active';
                                }else{
                                    $active = '';
                                }
                                $d++;
                    ?>
                                <div class="carousel-item <?php echo $active; ?>">
                                    <img src="<?php echo $image; ?>" class="d-block w-100">
                                </div>
                     <?php } ?>
                     <?php endwhile; ?>
                     
                </div>
            </div>
        </div>
    </div>
</div>
<style>
.carousel-inner{
    height: 600px;
}
</style>