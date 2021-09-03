<!--NEWSLETTER FORM -->
<div class="section-newsletter">
    <?php require('home/section-newsletter.php'); ?>
</div>
<footer class="footer mt-5">
    <div class="container">
        <div class="row">
            <!--SectionFollow-->
            <div class="container-fluid sectionFollow mb-5">
                <div class="row">
                    <!--Word Follow-->

                    <div class="col-12 col-md-6 col-lg-6 text-center text-md-end text-lg-end text-uppercase font-orange textFollow font_Din_Condensed_Bold">Follow Us</div>
                    <!--Social Media-->
                    <div class="col-12 col-md-6 col-lg-6 text-center text-md-start text-lg-start social_box">
                        <?php// echo social_media_area(); ?>
                    </div>

                </div>
            </div><!--/SectionFollow-->

            <!--Copyright-->
            <div class="container-fluid sectionCopyright">
                <div class="row">
                    <?php
                        wp_nav_menu( array( 
                            'theme_location' => 'secondary_menu', 
                            'container_class' => 'footer-menu' ) ); 
                    ?>
                </div>
            </div><!--/Copyright-->
        
        </div>
        
    </div>
    <?php wp_footer(); ?>
</footer>
</body>
</html>