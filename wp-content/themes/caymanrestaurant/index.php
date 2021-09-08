<?php get_header();

//Get Image featured image
$images_banner = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'full');
$urlBanner = "";
if(isset($images_banner)){
    $urlBanner = $images_banner;
}
?>

<section>
    <!--banner featured-->
    <div class="banner_featured" style="background:url('<?php echo $urlBanner ?>')">
        <div class="name_chef_inner">
            <div class="inner_name_chef font-white">
                <h1 class="font_Tahu"><?php echo the_title(); ?></h1>
            </div>
        </div>
    </div>
    <!--banner featured-->

    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-12">
                <?php while( have_posts( ) ) : the_post( ); ?>
                     <?php the_content(); ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

</section>

<?php get_footer(); ?>