<?php global $product; ?>

    <div class="prd">
        <div class="prd-img">
            <?php
            if (has_post_thumbnail()) {
                ?>
                <a href="<?php echo get_the_permalink(); ?>">
                <?php
                  echo get_the_post_thumbnail( $product->get_id(), 'full', array( 'class' => 'img-responsive' ) );
                 ?>
                 </a>
            <?php
            } else {
                echo '<a href="' . get_the_permalink() . '">' . wc_placeholder_img() . '</a>';
            }
            ?> 
        </div>
        <div class="prd-info">
            <h3><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
            <div class="price"><?php echo wc_price( $product->get_regular_price() ); ?></div>
            <?php woocommerce_template_loop_add_to_cart(); ?>
        </div>
    </div>
