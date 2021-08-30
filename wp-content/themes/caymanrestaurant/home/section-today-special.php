<div class="container-fluid today-special-box mt-3  pt-4 pb-4">
    <h1 class="title_section_f_chefs font_Tahu pt-5 pb-5">Today Special</h1>
    <div class="container">
        <div class="row">
            <?php
            //Query Post - Food in the news 
            /* query_posts('post_type=food-in-the-news&posts_per_page=4');
                //While Food in the news
                while (have_posts()): the_post();

                //Get Image Field
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail');
                $ImageUrl = $image[0];
                
                //Description News
                $content = get_the_content();
                $content = strip_tags($content);*/


            ?>
            <!--col-->
            <div class="col-12 col-md-4 col-lg-4 mb-5 box-girate-r">
                <div class="card">
                    <div class="boxImage">
                    <img src="http://localhost/caymanrestaurant/wp-content/uploads/2021/08/pexels-lisa-1753052.jpg" class="img-fluid" />
                    </div>
                    <div class="card-body mt-4">
                        <span class="nameSpecial font-orange font_Trebuchet text-uppercase d-block">Happy Hour 5-8</span>
                        <span class="nameRestaurant font-white font_Trebuchet text-uppercase d-block">Restaurant Name</span>
                    </div>
                </div>
            </div>
            <!--col-->

            <!--col-->
            <div class="col-12 col-md-4 col-lg-4 mb-5 box-girate-l">
                <div class="card">
                    <div class="boxImage">
                    <img src="http://localhost/caymanrestaurant/wp-content/uploads/2021/08/pexels-lisa-1753052.jpg" class="img-fluid" />
                    </div>
                    <div class="card-body mt-4">
                        <span class="nameSpecial font-orange font_Trebuchet text-uppercase d-block">Burger Friday</span>
                        <span class="nameRestaurant font-white font_Trebuchet text-uppercase d-block">Restaurant Name</span>
                    </div>
                </div>
            </div>
            <!--col-->

            <!--col-->
            <div class="col-12 col-md-4 col-lg-4 mb-5">
                <div class="card">
                    <div class="boxImage">
                    <img src="http://localhost/caymanrestaurant/wp-content/uploads/2021/08/pexels-lisa-1753052.jpg" class="img-fluid" />
                    </div>
                    <div class="card-body mt-4">
                        <span class="nameSpecial font-orange font_Trebuchet text-uppercase d-block">Seafood sunday</span>
                        <span class="nameRestaurant font-white font_Trebuchet text-uppercase d-block">Restaurant Name</span>
                    </div>
                </div>
            </div>
            <!--col-->

            <?php //endwhile; 
            ?>
        </div>
    </div>
</div>