<?php
/**
 * Events Block
 *
 * @package Pizzaro/Templates
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$section_class = empty( $section_class ) ? 'section-store-search' : $section_class . ' section-store-search';

if ( ! empty( $animation ) ) {
	$section_class .= ' animate-in-view';
}

$style_attr = '';
if( isset( $bg_choice ) && $bg_choice == 'color' && ! empty( $bg_color ) ) {
	$style_attr = 'background-color:' . $bg_color  . '; min-height:' . $height . 'px;';
} elseif ( ! empty( $bg_image[0] ) ) {
	$style_attr = 'background-size: cover; background-position: center center; background-image: url( ' . esc_url( $bg_image[0] ) . ' ); min-height: ' . esc_attr( $bg_image[2] ) . 'px;';
}

if ( ! empty( $page_id ) ) : ?>
<div  class="<?php echo esc_attr( $section_class ); ?>" <?php if ( !empty( $animation ) ) : ?>data-animation="<?php echo esc_attr( $animation );?>"<?php endif; ?> <?php if ( !empty( $style_attr ) ) : ?>style="<?php echo esc_attr( $style_attr );?>"<?php endif; ?>>
	<div  class="store-locator">
		<div class="store-info">
			<?php if ( ! empty( $icon_class ) ) : ?>
				<span class="icon"><i class="<?php echo esc_attr( $icon_class ); ?>"></i></span>
			<?php endif; ?>

			<div class="title-text">
				<?php if ( ! empty( $title ) ) : ?>
					<h2 class="title"><?php echo wp_kses_post( $title ); ?></h2>
				<?php endif; ?>

				<?php if ( ! empty( $sub_title ) ) : ?>
					<h3 class="sub-title"><span><?php echo wp_kses_post( $sub_title ); ?></span></h3>
				<?php endif; ?>
			</div>
		</div>

		
		<form style="margin-left: 25%;" >

				<button class="button btn btn-default btnBro"> <a style="color: #eee !important;" target="_blank" href="https://www.google.com/maps/place/Italiana+Fabbrica/@37.84798,27.850547,16z/data=!4m5!3m4!1s0x0:0x85102ae423b1b517!8m2!3d37.8479798!4d27.8505467?hl=tr-TR">Merkez Şube (Aydın)</a> </button>
<button class="button btn btn-default btnBro"> <a style="color: #eee !important;" target="_blank" href="https://www.google.com/maps?ll=37.84797,27.81083&z=16&t=m&hl=tr-TR&gl=TR&mapclient=embed&cid=7418242410973351109">Mimar Sinan Şube (Aydın)</a> </button>
				<p class="haritaP">Şubeleri haritada görmek ve yol tarifi almak için tıklayınız.</p>
			</form>
		
	</div>
</div>
<?php endif;
