
<?php
 
 $product_shuffle1 = $mobile->getData();
 
 $product_shuffle2 = $computer->getData();
 
 $product_shuffle3 = $headphone->getData();
 
 $product_shuffle4 = $camera->getData();
 
 $product_shuffle5 = $other->getData();
 
?>

        <div class="products">   
            <div class="row row-2">
                <h2 >All Product <hr></h2> 
                <select>
                    <option> Default by sorting</option>
                    <option> Sort by pricing</option>
                    <option> Sort by popularity</option>
                    <option> Sort by rating</option>
                </select>
            </div>
<!--swiper  slider start-->
                <!-- mobile section..............................  -->
                
                <h4>Mobile & Accessories </h4>
                <div class="slider-box">
                    <?php foreach($product_shuffle1 as $item) { ?>
                    <div class="col-4">
                        <img src="<?php echo $item['item_image'] ?>" alt="PCcomponent">
                        <p><?php echo $item['item_name'] ?></p>                
                    </div>
                    <?php }?>    
                </div>
               <!-- mobile section end............................................... -->
               <!-- Laptop section -->
               <h4>PC & Accessories</h4>
                <div class="slider-box">
                    <?php foreach($product_shuffle2 as $item) { ?>
                    <div class="col-4">
                        <img src="<?php echo $item['item_image'] ?>" alt="PCcomponent">
                        <p><?php echo $item['item_name'] ?></p>                
                    </div>
                    <?php }?> 
                </div>
               <!-- laptop section end -->

               <!-- Headphones section -->
               <h4>Headphones & Audio</h4>
                <div class="slider-box">
                   <?php foreach($product_shuffle3 as $item) { ?>
                    <div class="col-4">
                        <img src="<?php echo $item['item_image'] ?>" alt="PCcomponent">
                        <p><?php echo $item['item_name'] ?></p>                
                    </div>
                    <?php }?> 
                </div>
               <!-- Headphones section end -->

               <!-- camera section  -->
               <h4>TV Cameras & Digital Watch </h4>
                <div class="slider-box">
                   <?php foreach($product_shuffle4 as $item) { ?>
                    <div class="col-4">
                        <img src="<?php echo $item['item_image'] ?>" alt="PCcomponent">
                        <p><?php echo $item['item_name'] ?></p>                
                    </div>
                    <?php }?> 
                </div>
               <!-- camera section end -->

               <!-- other section  -->
               <h4>Others</h4>
                <div class="slider-box">
                    <?php foreach($product_shuffle5 as $item) { ?>
                    <div class="col-4">
                        <img src="<?php echo $item['item_image'] ?>" alt="PCcomponent">
                        <p><?php echo $item['item_name'] ?></p>                
                    </div>
                    <?php }?> 
                </div>
               <!-- other section end -->
<!--swiper  slider end-------------------------------->
            <div class="page-btn">
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>4</span>
                <span>&#8594;</span>
            </div>
        </div>
