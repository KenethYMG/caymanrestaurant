<?php get_header(); ?>
<section>
    <div class="container">
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