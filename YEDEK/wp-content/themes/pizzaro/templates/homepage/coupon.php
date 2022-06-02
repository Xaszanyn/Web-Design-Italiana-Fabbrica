<?php
/**
 * Coupon
 *
 * @author  Transvelo
 * @package Pizzaro/Templates
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if( empty( $coupon_code ) ) {
	return;
}

$wc_coupon = new WC_Coupon( $coupon_code );
if ( ! is_admin() && ! $wc_coupon->is_valid() ) {
	return;
}

$section_class = empty( $section_class ) ? 'stretch-full-width section-coupon' : 'stretch-full-width section-coupon ' . $section_class;
if ( ! empty( $animation ) ) {
	$section_class .= ' animate-in-view';
}

$style_attr = '';
if( isset( $bg_choice ) && $bg_choice == 'color' && ! empty( $bg_color ) && ! empty( $height ) ) {
	$style_attr = 'background-color:' . $bg_color  . '; height:' . $height . 'px;';
} elseif ( ! empty( $bg_image[0] ) ) {
	$style_attr = 'background-size: cover; background-position: center center; background-image: url( ' . esc_url( $bg_image[0] ) . ' ); height: ' . esc_attr( $bg_image[2] ) . 'px;';
}

?>
<div class="section-product" style="background-size: cover; background-position: center center; background-image: url( http://dev.italianafabbrica.com/wp-content/uploads/2016/09/19.jpg ); height: 881px;">
    <div class="product-wrapper">
        <div class="product-inner">
              <header>
                   <h3 class="pre-title">ıtalıana fabbrıca</h3>
                    <h2 class="title">Menü<span></span></h2>
                  <!--  <h4 class="sub-title">her zaman taze &amp; sağlıklı</h4> -->
                </header>
                <div class="woocommerce-product-details__short-description">
                    <p> </p>
                </div>
                <div class="yith_wapo_groups_container">
                    <div id="ywapo_value_1" class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                       <!--    <h3><span>Gurme Lezzetler<abbr class="required" title="required">*</abbr></span></h3>-->
                      <!--  <div class="ywapo_input_container ywapo_input_container_radio">
                            <input id="ywapo_ctrl_id_1_0" data-typeid="1" data-price="19.9" data-pricetype="fixed" data-index="0" type="radio" name="ywapo_radio_821[]" value="0" required="" class="ywapo_input ywapo_input_radio ywapo_price_fixed">
                            <label for="ywapo_ctrl_id_1_0" class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22  cm</span><abbr class="required" title="required">*</abbr>
                            </label><span class="ywapo_label_price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>19.90</span>
                            </span>
                        </div>
                        <div class="ywapo_input_container ywapo_input_container_radio">
                            <input id="ywapo_ctrl_id_1_1" data-typeid="1" data-price="25.9" data-pricetype="fixed" data-index="1" type="radio" name="ywapo_radio_821[]" value="1" required="" class="ywapo_input ywapo_input_radio ywapo_price_fixed">
                            <label for="ywapo_ctrl_id_1_1" class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29  cm</span><abbr class="required" title="required">*</abbr>
                            </label><span class="ywapo_label_price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>25.90</span>
                            </span>
                        </div> -->
                    </div>
                </div>
			<button> <a style="color: #eee !important;" target="_blank" href="https://image.ibb.co/cOx7Pw/fabrrica_web_menu.jpg">Menüyü İncele</a> </button>
        </div>
    </div>
</div>


