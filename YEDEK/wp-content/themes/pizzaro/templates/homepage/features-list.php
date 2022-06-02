<?php
/**
 * Features Block
 *
 * @package Pizzaro/Templates
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if( empty( $features ) ) {
	return;
}

$section_class = empty( $section_class ) ? 'features-list' : 'features-list ' . $section_class;
if ( ! empty( $animation ) ) {
	$section_class .= ' animate-in-view';
}

$features_count = count( $features );
$column_class 	= 'col-xs-12';

switch( $features_count ) {
	case 1:
		$column_class = $column_class;
	break;
	case 2:
		$column_class .= ' col-sm-6';
	break;
	case 3:
		$column_class .= ' col-sm-4';
	break;
	case 4:
		$column_class .= ' col-sm-3';
	break;
	case 5:
		$column_class .= ' col-sm-20p';
	break;
	default:
		$column_class .= ' col-sm-2';
}

?>



<ul class="products">




    <li id="menu" class="post-82 product type-product status-publish has-post-thumbnail product_cat-pizza first instock shipping-taxable purchasable product-type-simple addon-product liSerro">
        <div class="product-outer" style="height: 564px;">
            <div class="product-inner">
                <div class="product-image-wrapper">
                    <img width="300" height="350" src="http://dev.italianafabbrica.com/wp-content/uploads/2016/09/19.jpg" class="attachment-pizzaro-product-dark-catalog size-pizzaro-product-dark-catalog altImage" alt="" title="84">
                  
                </div>
                <div class="product-content-wrapper">
                    <a href="" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><h2 class="woocommerce-loop-product__title">Fabbrica Menü</h2><div class="woocommerce-product-details__short-description">
    <p id="rmjs-1" style="max-height: none; height: 50px;" data-readmore="" aria-expanded="false"> Birbirinden lezzetli Italiana fabbrica ürünlerini inceleyin.Birbirinden lezzetli Italiana fabbrica ürünlerini inceleyin.</p><span style="display:none" data-readmore-toggle="rmjs-1" aria-controls="rmjs-1">Genişlet »</span>
</div>
<div class="yith_wapo_groups_container">
<div id="ywapo_value_1" class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
        <h3><span>Detaylar için<abbr class="required" title="required">*</abbr></span></h3>
              </div></div>
</a>
                    <div class="hover-area"><input type="button" onclick="window.location.href=''"  value="Menüyü incele"/>
                    </div>
                </div>
            </div>
            <!-- /.product-inner -->
        </div>
        <!-- /.product-outer -->
    </li>



    <li id="franchise" class="post-58 product type-product status-publish has-post-thumbnail product_cat-pizza  instock featured shipping-taxable purchasable product-type-simple addon-product liSerro">
        <div class="product-outer" style="height: 564px;">
            <div class="product-inner">
                <div class="product-image-wrapper">
                     <a href="" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="250" src="http://dev.italianafabbrica.com/wp-content/uploads/2017/12/icon-get_into_firanchising.png" class="attachment-pizzaro-product-dark-catalog size-pizzaro-product-dark-catalog altImage" alt="" title="85">
                    </a>
                </div>
                <div class="product-content-wrapper">
                    <a href="" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><h2 class="woocommerce-loop-product__title">Franchise</h2>			<span class="food-type-icon">
				<i class="po po-veggie-icon"></i>			</span>
		<div class="woocommerce-product-details__short-description">
    <p id="rmjs-2" style="max-height: none; height: 50px;" data-readmore="" aria-expanded="false">Franchise bir markanın imtiyaz hakkı sahibinin, belirli süre, koşul ve sınırlar içinde belirli bir bedel karşılığında, bağımsız yatırımcılara sistem ve markasını kullandırmasına dayanan, uzun vadeli ve sürekli bir iş ilişkisidir.</p><span style="display:none" data-readmore-toggle="rmjs-2" aria-controls="rmjs-2">Genişlet »</span>
</div>
<div class="yith_wapo_groups_container">
<div id="ywapo_value_1" class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
        <h3><span>Detaylar için<abbr class="required" title="required">*</abbr></span></h3>
               </div></div>
</a>
                    <div class="hover-area"><input type="button" onclick="window.location.href='http://dev.italianafabbrica.com/franchasing'"  value="Franchise Başvuru"/>
                    </div>
                </div>
            </div>
            <!-- /.product-inner -->
        </div>
        <!-- /.product-outer -->
    </li>



    <li id="iletisim" class="post-56 product type-product status-publish has-post-thumbnail product_cat-pizza last instock shipping-taxable purchasable product-type-simple addon-product liSerro">
        <div class="product-outer" style="height: 564px;">
            <div class="product-inner">
                <div class="product-image-wrapper">
                    <a href="" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img  width="300" height="500" src="http://dev.italianafabbrica.com/wp-content/uploads/2017/12/contact1-1.jpg" class="attachment-pizzaro-product-dark-catalog size-pizzaro-product-dark-catalog altImage" alt="" title="86">
                    </a>
                </div>
                <div class="product-content-wrapper">
                    <a href="" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><h2 class="woocommerce-loop-product__title">İletişim Formu</h2><div class="woocommerce-product-details__short-description">
    <p id="rmjs-3" style="max-height: none; height: 50px;" data-readmore="" aria-expanded="false">Dilek, şikayet ve önerileriniz bizler için çok değerlidir.</p><span style="display:none" data-readmore-toggle="rmjs-3" aria-controls="rmjs-3">Genişlet »</span>
</div>
<div class="yith_wapo_groups_container">
<div id="ywapo_value_1" class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
        <h3><span>Detaylar için<abbr class="required" title="required">*</abbr></span></h3>
               
			   </div></div>
</a>
                    <div class="hover-area"><input type="button" onclick="window.location.href='http://dev.italianafabbrica.com/bize-ulasin'"  value="Bize Ulaşın"/>
                    </div>
                </div>
            </div>
            <!-- /.product-inner -->
        </div>
        <!-- /.product-outer -->
    </li>


</ul>

</br></br></br> <h1 id="subeler" style="
    text-align:  center;
">
	Şubelerimiz
</h1></br>
<div class="footer-about-info">
    <div class="container">
        <div class="row">
            <div class="col-md-5 image"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3150.526058875848!2d27.848358015128998!3d37.847979779746154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b92b6dbe9d02d5%3A0x85102ae423b1b517!2sItaliana+Fabbrica!5e0!3m2!1str!2str!4v1513715292258" width="650" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-7 content">
                <h2>Italiana Fabbrica Merkez Şube</h2>
                <p>Proin ac semper mi. Phasellus magna elit, dapibus at egestas a, facilisis nec ligula. In vitae ex ante. Aliquam interdum maximus dui quis sodales. Cras vel mi diam. Phasellus mi ante, iaculis nec tempus ac, tincidunt sit amet eros. Fusce malesuada elit massa, ac eleifend massa ligula, semper sed faucibus vitae, fermentum sed ex.</p> <a href="#">Read More &nbsp;&nbsp;&nbsp;→</a>
            </div>
        </div>
    </div>
</div>


<div class="footer-about-info">
    <div class="container">
        <div class="row">
            <div class="col-md-7 content">
                <h2>Italiana Fabbrica Mimar Sinan Şube</h2>
                <p>Proin ac semper mi. Phasellus magna elit, dapibus at egestas a, facilisis nec ligula. In vitae ex ante. Aliquam interdum maximus dui quis sodales. Cras vel mi diam. Phasellus mi ante, iaculis nec tempus ac, tincidunt sit amet eros. Fusce malesuada elit massa, ac eleifend massa ligula, semper sed faucibus vitae, fermentum sed ex.</p> <a href="#">Read More &nbsp;&nbsp;&nbsp;→</a>
            </div>
			 <div class="col-md-5 image"> 
				 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3150.526460501428!2d27.808641515128944!3d37.84797037974611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b92cbe52617917%3A0x66f2e42b53cdccc5!2sFabbrica+Mimarsinan!5e0!3m2!1str!2str!4v1513715379233" width="650" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>