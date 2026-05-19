<?php
/**
 * Widget for display Popular products.
 *
 * @package nanda
 * @since 1.0.0
 */

class nanda_Popular_Products extends WP_Widget {
/**
     * Register widget with WordPress.
     */
public function __construct() {
    $widget_ops = array( 
        'classname'                     => 'nanda_popular_products',
        'description'                   => __( 'Display numbers of Popular products for Frontpage', 'nanda' ),
        'customize_selective_nanda'   => true,
    );
    parent::__construct( 'nanda_popular_products', __( 'Ecommerce X: Popular Products', 'nanda' ), $widget_ops );
}

    /**
     * Helper function that holds widget fields
     * Array is used in update and form functions
     */
    private function widget_fields() {

        $fields = array(
            'section_post_count' => array(
                'nanda_widgets_name'         => 'section_post_count',
                'nanda_widgets_title'        => __( 'Product Count', 'nanda' ),
                'nanda_widgets_default'      => 10,  
                'nanda_widgets_field_type'   => 'number'
            ),
        );
        return $fields;
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        extract( $args );
        if( empty( $instance ) ) {
            return ;
        }

        $nanda_product_count  = empty( $instance['section_post_count'] ) ? 10 : $instance['section_post_count'];

        $popular_product_args = array(
            'post_type' => 'product',
            'posts_per_page' => absint( $nanda_product_count ),
            'orderby' =>'meta_value_num',
            'meta_key'  => 'total_sales',
            'order'     => 'desc'
        );        
        $popular_product_query = new WP_Query( $popular_product_args );
        ?>     
        <?php
        if ( $popular_product_query->have_posts() ) {
            while ( $popular_product_query->have_posts() ) {
                $popular_product_query->the_post();?>
                <div class="col-lg-3 col-sm-6">
                  <div class="product-holder">
                    <div class="img-holder">
                       <?php the_post_thumbnail( 'nanda-trending-product-255-*-325' );?>
                       <?php global $product;?>
                       <?php if ( $product->is_on_sale() ) : ?>
                       <div class="tag">
                            <span><?php echo esc_html__('Sale','nanda');?></span>
                        </div>
                      <?php endif;?>
                     <ul class="option">
                        <li>
                          <a href="<?php the_permalink();?>" data-toggle="tooltip" data-placement="top" title="View">
                            <span class="fa fa-search" aria-hidden="true"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <a href="#" class="p-title"><h6><?php the_title();?></h6></a>
            <div class="price-tag">
              <div class="tag-holder">
                <?php
                global $woocommerce;
                $currency = get_woocommerce_currency_symbol();
                $sale = get_post_meta( get_the_ID(), '_sale_price', true);
                ?>
                <span><?php echo esc_html($currency);?> <?php echo esc_html($sale);?></span>
                <div class="cart-btn">
                  <a href="<?php echo esc_url( $product->add_to_cart_url() );?>" class="add-cart"><?php echo esc_html__('Add to cart','nanda');?></a>
              </div>
          </div>
      </div>
  </div>
</div>
<?php  }

} else {?>
    <div class="nanda-no-product-found"><?php esc_html_e( 'No Hot products found', 'nanda' ); ?></div>
<?php }
wp_reset_postdata();
?>
<?php
}

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param   array   $new_instance   Values just sent to be saved.
     * @param   array   $old_instance   Previously saved values from database.
     *
     * @uses    nanda_widgets_updated_field_value()      defined in es-widget-fields.php
     *
     * @return  array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;

        $widget_fields = $this->widget_fields();

        // Loop through fields
        foreach ( $widget_fields as $widget_field ) {

            extract( $widget_field );

            // Use helper function to get updated field values
            $instance[$nanda_widgets_name] = nanda_widgets_updated_field_value( $widget_field, $new_instance[$nanda_widgets_name] );
        }

        return $instance;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param   array $instance Previously saved values from database.
     *
     * @uses    nanda_widgets_show_widget_field()        defined in es-widget-fields.php
     */
    public function form( $instance ) {
        $widget_fields = $this->widget_fields();
        // Loop through fields
        foreach ( $widget_fields as $widget_field ) {
            // Make array elements available as variables
            extract( $widget_field );

            if ( empty( $instance ) && isset( $nanda_widgets_default ) ) {
                $nanda_widgets_field_value = $nanda_widgets_default;
            } elseif( empty( $instance ) ) {
                $nanda_widgets_field_value = '';
            } else {
                $nanda_widgets_field_value = wp_kses_post( $instance[$nanda_widgets_name] );
            }
            nanda_widgets_show_widget_field( $this, $widget_field, $nanda_widgets_field_value );
        }
    }
}