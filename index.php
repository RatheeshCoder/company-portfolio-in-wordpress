<?php
get_template_part("./header");
?>


<main>


        <section  id="Home" class="bg_image_section" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;">
            <div class="cta-main">

            <?php
                $backgroundArguments = array(
                    'post_type' => 'Background',
                    'post_status' => 'publish',
                    'posts_per_page'   => -1
                );

                $backgroundQuery = new WP_Query($backgroundArguments);

                if ($backgroundQuery->have_posts()) {
                    while ($backgroundQuery->have_posts()) {
                        $backgroundQuery->the_post();
                        $address_post_id = get_the_ID();
                        $title = CFS()->get('title', $address_post_id);
                        $image = CFS()->get('image', $address_post_id);
				

                ?>
                <div class="cta-content">
                    <h1><?php echo $title ?></h1>
                    <div class="btn">
                    <a href="#products"> <button class="orange-btn " >BUY NOW</button></a>
                       <a href="#Features"><button class="white-btn">See Features</button></a> 
                    </div>

                </div>
                <div class="cta-image">
                    <img src="<?php echo $image ?>" alt="bg-image">
                </div>

                <?php
                    }
                }
                ?>
            </div>

        </section>



        <section  class="Features" id="Features">
            <h1 style="text-align: center;">HGH RAPID TEST KIT</h1>
                <p style="text-align: center;">Human Growth Hormone (HGH) is the most expensive pharmaceutical commonly used in the fitness/bodybuilding community.</p>

            <div class="cta-main">

            <?php
                $FeaturesArguments = array(
                    'post_type' => 'Features',
                    'post_status' => 'publish',
                    'posts_per_page'   => -1
                );

                $FeaturesQuery = new WP_Query($FeaturesArguments);

                if ($FeaturesQuery->have_posts()) {
                    while ($FeaturesQuery->have_posts()) {
                        $FeaturesQuery->the_post();
                        $address_post_id = get_the_ID();
                        $icon_1 = CFS()->get('icon_1', $address_post_id);
                        $title_1 = CFS()->get('title_1', $address_post_id);
                        $para_1 = CFS()->get('para_1', $address_post_id);
                        $icon_2 = CFS()->get('icon_2', $address_post_id);
                        $title_2 = CFS()->get('title_2', $address_post_id);
                        $para_2 = CFS()->get('para_2', $address_post_id);
                        $icon_3 = CFS()->get('icon_3', $address_post_id);
                        $title_3 = CFS()->get('title_3', $address_post_id);
                        $para_3 = CFS()->get('para_3', $address_post_id);
                        $icon_4 = CFS()->get('icon_4', $address_post_id);
                        $title_4 = CFS()->get('title_4', $address_post_id);
                        $para_4 = CFS()->get('para_4', $address_post_id);
                        $big_image = CFS()->get('big_image', $address_post_id);
				

                ?>
                
                        <div class="cta-content">
                            <div class="cta-main-content">
                                <div class="cta-img-text">
                                    <img style="margin-right:10px;" src="<?php echo $icon_1;  ?>" alt="logo">
                                    <h1><?php echo $title_1;  ?></h1>
                                </div>
                                <p><?php echo $para_1 ; ?></p>
    
                            </div>
                            <div class="cta-main-content" style="margin-top: 80px;">
                                <div class="cta-img-text">
                                    <img style="margin-right:10px;" src="<?php echo $icon_2;  ?>" alt="logo">
                                    <h1><?php echo $title_2 ; ?></h1>
                                </div>
                                <p><?php echo $para_2;  ?></p>
    
                            </div>
                            
                        </div>

                        <div class="cta-img">
                                <img style="width: 130%; height: 130%;" src="<?php echo $big_image;  ?>" alt="kit-image">
                        </div>
                        
                        <div class="cta-content">
                            <div class="cta-main-content">
                                <div class="cta-img-text">
                                    <img style="margin-right:10px;" src="<?php echo $icon_3;  ?>" alt="logo">
                                    <h1><?php echo $title_3;  ?></h1>
                                </div>
                                <p><?php echo $para_3;  ?></p>
    
                            </div>
                            <div class="cta-main-content" style="margin-top: 80px;">
                                <div class="cta-img-text">
                                    <img style="margin-right:10px;" src="<?php echo $icon_4;  ?>" alt="logo">
                                    <h1><?php echo $title_4;  ?></h1>
                                </div>
                                <p><?php echo $para_4 ; ?></p>
    
                            </div>
                            
                        </div>

                        <?php
                    }
                }
                ?>
                


            </div>

        </section>



        <div class="product-name" id="products" style="margin-top: 100px;">
            <h1 style="padding: 10px 20px;">PURCHASE</h1>
            <p style="padding: 10px 20px;">HGH Rapid Test Kit is now available at Greatest Discount !</p>
        </div>


       


        <section class="PURCHASE">
            
        <?php
                $SingleProductArguments = array(
                    'post_type' => 'SingleProduct',
                    'post_status' => 'publish',
                    'posts_per_page'   => -1
                );

                $SingleProductQuery = new WP_Query($SingleProductArguments);

                if ($SingleProductQuery->have_posts()) {
                    while ($SingleProductQuery->have_posts()) {
                        $SingleProductQuery->the_post();
                        $address_post_id = get_the_ID();
                        $tltle = CFS()->get('tltle', $address_post_id);
                        $mrp = CFS()->get('mrp', $address_post_id);
                        $price = CFS()->get('price', $address_post_id);
                        $image = CFS()->get('image', $address_post_id);
                        $heading_1 = CFS()->get('heading_1', $address_post_id);
                        $heading_2 = CFS()->get('heading_2', $address_post_id);
                        $heading_3 = CFS()->get('heading_3', $address_post_id);
                        $quantity_1 = CFS()->get('quantity_1', $address_post_id);
                        $quantity_2 = CFS()->get('quantity_2', $address_post_id);
                        $quantity_3 = CFS()->get('quantity_3', $address_post_id);
                        $quantity_4 = CFS()->get('quantity_4', $address_post_id);
                        $discounts_1 = CFS()->get('discounts_1', $address_post_id);
                        $discounts_2 = CFS()->get('discounts_2', $address_post_id);
                        $discounts_3 = CFS()->get('discounts_3', $address_post_id);
                        $discounts_4 = CFS()->get('discounts_4', $address_post_id);
                        $price_1 = CFS()->get('price_1', $address_post_id);
                        $price_2 = CFS()->get('price_2', $address_post_id);
                        $price_3 = CFS()->get('price_3', $address_post_id);
                        $price_4 = CFS()->get('price_4', $address_post_id);
                       
				

                ?>


            <div class="cta-main" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; margin-bottom:50px;">
                <div class="cta-img-text">
                    <div class="cta-title">
                        <img src="http://localhost/single/wp-content/uploads/2023/05/image-8.svg" alt="special offer">
                        <div class="cta-content">
                            <h1><?php echo $tltle; ?></h1>
                            <h1><s><?php echo $mrp; ?></s>&nbsp; <?php echo $price; ?></h1>
                        </div>

                    </div>
                </div>  
                <div >
                       <div class="product">
                    <div class="cta-img">
                        <img src="<?php echo $image; ?>" alt="">
                    </div>
                    <div class="cta-quan">
                        <div class="quantity-controls">
                            <button id="decrease-quantity">-</button>
                            <span class="value" id="quantity-value">0</span>
                            <button id="increase-quantity">+</button>
                          </div>
                    </div>
                </div>
                <div class="cart">
                    <button class="cart-btn" id="add-to-cart">Add to Cart</button>
                </div>

                
                </div>
             

            </div>

            <div class="quantity-main">

                <div class="quantity-ranges">
                    

                    <table>
                        <tr>
                            <th><?php echo $heading_1; ?></th>
                            <th><?php echo $heading_2; ?></th>
                            <th><?php echo $heading_3; ?></th>
                        </tr>
                        <tr id="quantity-range-1" class="quantity-range selected">
                            <td><?php echo $quantity_1; ?></td>
                            <td><?php echo $discounts_1; ?></td>
                            <td><?php echo $price_1; ?></td>
                        </tr>
                        <tr id="quantity-range-2" class="quantity-range">
                            <td><?php echo $quantity_2; ?></td>
                            <td><?php echo $discounts_2; ?></td>
                            <td><?php echo $price_2; ?></td>
                        </tr>
                        <tr id="quantity-range-3" class="quantity-range">
                            <td><?php echo $quantity_3; ?></td>
                            <td><?php echo $discounts_3; ?></td>
                            <td><?php echo $price_3; ?></td>
                        </tr>
                        <tr id="quantity-range-4" class="quantity-range" >
                            <td style="border: none;"><?php echo $quantity_4; ?></td>
                            <td style="border: none;"><?php echo $discounts_4; ?></td>
                            <td style="border: none;"><?php echo $price_4; ?></td>
                        </tr>
                    </table>

                </div>

            </div>

            <?php
                    }
                }
                ?>

        </section>
       



        <section id="INSTRUCTIONS" class="how-to-use">

        <?php
                $HowToUseArguments = array(
                    'post_type' => 'HowToUse',
                    'post_status' => 'publish',
                    'posts_per_page'   => -1
                );

                $HowToUseQuery = new WP_Query($HowToUseArguments);

                if ($HowToUseQuery->have_posts()) {
                    while ($HowToUseQuery->have_posts()) {
                        $HowToUseQuery->the_post();
                        $address_post_id = get_the_ID();
                        $main_title = CFS()->get('main_title', $address_post_id);
                        $main_para = CFS()->get('main_para', $address_post_id);
                        $main_image_1 = CFS()->get('main_image_1', $address_post_id);
                        $image_number_1 = CFS()->get('image_number_1', $address_post_id);
                        $content_1 = CFS()->get('content_1', $address_post_id);
                        $main_image_2 = CFS()->get('main_image_2', $address_post_id);
                        $image_number_2 = CFS()->get('image_number_2', $address_post_id);
                        $content_2 = CFS()->get('content_2', $address_post_id);
                        $main_image_3 = CFS()->get('main_image_3', $address_post_id);
                        $image_number_3 = CFS()->get('image_number_3', $address_post_id);
                        $content_3 = CFS()->get('content_3', $address_post_id);
                       
                       
				

                ?>


            <h1><?php echo $main_title;  ?></h1>
            <p ><?php echo $main_para;  ?></p>
                <div class="cta-main">
                    <div class="cta-content">
                        <img src="<?php echo $main_image_1;  ?>" alt="">
                        <div class="cta-text">
                            <img src="<?php echo $image_number_1;  ?>" alt="">
                            <p style="margin:0px 50px;"><?php echo $content_1;  ?></p>
                        </div>
                    </div>

                    <div class="cta-content " id="last-design" >
                        <div class="cta-text">
                            <img src="<?php echo $image_number_2;  ?>" alt="">
                            <p style="margin:0px 50px;"><?php echo $content_2;  ?></p>
                        </div>
                        <img src="<?php echo $main_image_2;  ?>" alt="">
                    </div>

                    <div class="cta-content">
                        <img src="<?php echo $main_image_3;  ?>" alt="">
                        <div class="cta-text">
                            <img src="<?php echo $image_number_3;  ?>" alt="">
                            <p style="margin:0px 50px;"><?php echo $content_3;  ?></p>
                        </div>
                    </div>

                </div>


                <?php
                    }
                }
                ?>

        </section>



        <section class="result-maim">

        <?php
                $resultArguments = array(
                    'post_type' => 'result',
                    'post_status' => 'publish',
                    'posts_per_page'   => -1
                );

                $resultQuery = new WP_Query($resultArguments);

                if ($resultQuery->have_posts()) {
                    while ($resultQuery->have_posts()) {
                        $resultQuery->the_post();
                        $address_post_id = get_the_ID();
                        $title = CFS()->get('title', $address_post_id);
                        $main_content = CFS()->get('main_content', $address_post_id);
                        $paragraph = CFS()->get('paragraph', $address_post_id);
				

                ?>
            <h1 style="margin:0px 50px;"><?php echo $main_content ;  ?></h1>
            <p style="margin:0px 50px;">
               <?php echo $paragraph;  ?>
            </p>
            <?php
                    }
                }
                ?>
        </section>








</main>




<?php
get_template_part("./footer");
?>