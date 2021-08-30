<footer class="footer mt-5">
    <div class="container">
        <div class="row">
            <!--SectionFollow-->
            <div class="container-fluid sectionFollow mb-5">
                <div class="row">
                    <!--Word Follow-->

                    <div class="col-12 col-md-6 col-lg-6 text-center text-md-end text-lg-end text-uppercase font-blue textFollow font_Din_Condensed_Bold">Follow Us</div>
                    <!--Social Media-->
                    <div class="col-12 col-md-6 col-lg-6 text-center text-md-start text-lg-start social_box">
                        <?php echo social_media_area(); ?>
                    </div>

                </div>
            </div><!--/SectionFollow-->

            <!--Copyright-->
            <div class="container-fluid sectionCopyright">
                <div class="row">
                    <ul>
                        <li><a class="font-blue" href="">© <?php date("Y"); ?> Cayman Restaurants</a>  </li>
                        <li><a class="font-blue" href="">Terms Of Use</a></li>
                        <li><a class="font-blue" href="">Privacy Policy</a></li>
                        <li><a class="font-blue" href="">info@caymanrestaurants.com</a></li>
                        <li><a class="font-blue" href="">Design: Damon Hardie Design</a></li>
                    </ul>
                </div>
            </div><!--/Copyright-->
        
        </div>
        
    </div>
    <?php wp_footer(); ?>
</footer>
</body>
</html>