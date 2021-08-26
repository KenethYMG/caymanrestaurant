<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <?php query_posts('post_type=slider&post_per_page=1') ?>
                <div class="carousel-indicators">
                <?php $c = 0; ?>
                <?php while (have_posts()): the_post(); ?>
                    <?php if($c==0){
                        $active = 'active';
                     } else{
                        $active = '';
                    }
                    $c++;
                ?>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="<?php echo $active; ?>" aria-current="true" aria-label="Slide 1"></button>
                <?php endwhile; ?>
                </div>
                <?php $c = 0; ?>
                <div class="carousel-inner">
                <?php while (have_posts()): the_post(); 
                $images_url = get_post_meta( get_the_ID(), 'upload-images', true );
                // Check if the custom field has a value.
                if ( ! empty( $images_url ) ) {
                     $images = explode(",", $images_url);
                     foreach($images as $image){ ?>
                        <?php  if($c==0){
                            $active = 'active';
                            } else{
                            $active = '';
                        }
                        $c++; ?>
                        <div class="carousel-item <?php echo $active; ?>">
                            <img src="<?php echo $image; ?>" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                     <?php } 
                }
                ?>
                </div>
                <?php endwhile; ?>


                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>





<!--

<div id="carousel-home" class="carousel slide" data-ride="carousel">
<?php query_posts('post_type=&post_per_page=-1') ?>
<div class="carousel-inner" role="listbox">
<?php $c = 0; ?>
<?php while (have_posts()): the_post(); ?>
<?php if($c==0){
$active = 'active';
} else{
$active = '';
}
$c++;
?>
<div class="item <?php echo $active ?>">
<?php the_post_thumbnail('full', array('class'=>'img-responsive')); ?>
</div>
<?php endwhile; ?>
</div>
<a class="left carousel position-absolute" href="#carousel-home" role="button" data-slide="prev">
<i class="fa fa-arrow-left carousel" aria-hidden="true"></i>
</a>
<a class="right carousel position-absolute" href="#carousel-home" role="button" data-slide="next">
<i class="fa fa-arrow-right carousel" aria-hidden="true"></i>
</a>
</div>
-->
<style>
.carousel-inner{
    height: 600px;
}
</style>