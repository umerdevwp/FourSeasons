<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>


<footer class="site__footer-wrap">

    <div class="site__footer-inner">

        <div class="footer__col-left">
            <a class="footer_brand" href="<?php echo get_home_url(); ?>">
                <img src="<?php echo get_field("footer_logo", "option"); ?>" alt="">
            </a><!--/.footer_brand-->

            <ul class="foot__social-list">
                <li><a href="<?php echo get_field("facebook", "option"); ?>"><i class="fab fa-facebook-square"></i></a>
                </li>
                <li><a href="<?php echo get_field("twitter", "option"); ?>"><i class="fab fa-twitter"></i></a></li>
                <li><a href="<?php echo get_field("instagram", "option"); ?>"><i class="fab fa-instagram"></i></a></li>
                <li><a href="<?php echo get_field("youtube", "option"); ?>"><i class="fab fa-youtube"></i></a></li>
            </ul><!--/.foot__social-list-->

            <address><a href="#"><?php echo get_field("footer_address", "option"); ?></a></address>
            <a href="tel:+<?php echo get_field("phone_number", "option"); ?>"><?php echo get_field("phone_number", "option"); ?></a>
            <p><?php echo get_field("copyrights_text", "option"); ?></p>
        </div><!--/.footer__col-left-->


        <div class="footer__pods-wrap">

            <div class="footer_pod">
                <h3><a href="<?php echo get_home_url(); ?>/outdoor-living/">Outdoor Living</a></h3>
                <ul>
                    <li><a href="<?php echo get_home_url(); ?>/outdoor-living/sunrooms/">Sunrooms</a></li>
                    <li><a href="<?php echo get_home_url(); ?>/outdoor-living/screen-rooms/">Screen Roooms</a></li>
                    <li><a href="<?php echo get_home_url(); ?>/outdoor-living/pergolas/">Pergolas</a></li>
                    <li><a href="<?php echo get_home_url(); ?>/outdoor-living/patio-covers/">Patio Covers</a></li>
                </ul>
            </div><!--/.footer_pod-->

            <div class="footer_pod">
                <h3><a href="<?php echo get_home_url(); ?>/bathrooms/">Bathrooms</a></h3>
                <ul>
                    <li><a href="<?php echo get_home_url(); ?>/bathrooms/bath-wall-surround/">Bath Wall Surrounds</a>
                    </li>
                    <li><a href="<?php echo get_home_url(); ?>/bathrooms/low-threshold-shower/">Low Threshold
                            Showers</a></li>
                    <li><a href="<?php echo get_home_url(); ?>/bathrooms/replacement-tub-showers/">Replacement Tub &
                            Shower</a></li>
                    <li><a href="<?php echo get_home_url(); ?>/bathrooms/tub-to-shower/">Tub to Shower Conversions</a>
                    </li>
                    <li><a href="<?php echo get_home_url(); ?>/bathrooms/walk-in-shower/">Walk-In Showers</a></li>
                    <li><a href="<?php echo get_home_url(); ?>/bathrooms/walk-in-bath/">Walk-In Tubs</a></li>
                </ul>
            </div><!--/.footer_pod-->

            <div class="footer_pod">
                <h3><a href="<?php echo get_home_url(); ?>/windows/">Windows</a></h3>
                <ul>
                    <li><a href="<?php echo get_home_url(); ?>/windows/awning/">Awning</a></li>
                    <li><a href="<?php echo get_home_url(); ?>/windows/bow-bay/">Bow & Bay</a></li>
                    <li><a href="<?php echo get_home_url(); ?>/windows/casement/">Casement</a></li>
                    <li><a href="<?php echo get_home_url(); ?>/windows/double-hung/">Double Hung</a></li>
                    <li><a href="<?php echo get_home_url(); ?>/windows/garden/">Gardens</a></li>
                    <li><a href="<?php echo get_home_url(); ?>/windows/sliding/">Sliding</a></li>
                </ul>
            </div><!--/.footer_pod-->

            <div class="footer_pod">
                <h3><a href="<?php echo get_home_url(); ?>/doors/">Doors</a></h3>
                <ul>
                    <li><a href="<?php echo get_home_url(); ?>/doors/entry-doors/">Entry Doors</a></li>
                    <li><a href="<?php echo get_home_url(); ?>/doors/patio-doors/">Patio Doors</a></li>
                </ul>
            </div><!--/.footer_pod-->

            <div class="footer_pod">
                <h3><a href="<?php echo get_home_url(); ?>/siding/">Siding</a></h3>
                <ul>
                    <li><a href="<?php echo get_home_url(); ?>/siding/cement-fiber-siding/">Cement Fiber Siding</a>
                    </li>
                    <li><a href="<?php echo get_home_url(); ?>/siding/vinyl-siding/">Vinyl Siding</a></li>

                </ul>
            </div><!--/.footer_pod-->

            <div class="footer_pod">
                <h3><a href="<?php echo get_home_url(); ?>/gutters/">Gutters</a></h3>
                <ul>
                    <li><a href="<?php echo get_home_url(); ?>/gutters/seamless-aluminium/">Seamless</a></li>
                    <li><a href="<?php echo get_home_url(); ?>/gutters/gutter-guards/">Gutter Guards</a></li>
                </ul>
            </div><!--/.footer_pod-->

            <div class="footer_pod">
                <h3><a href="<?php echo get_home_url(); ?>/about-us/">About Us</a></h3>
                <ul>
                    <li><a href="<?php echo get_home_url(); ?>/testimonials/">Testimonials</a></li>
                    <li><a href="<?php echo get_home_url(); ?>/blog/">Blog</a></li>
                    <li><a href="<?php echo get_home_url(); ?>/financing/">Financing</a></li>
                    <li><a href="<?php echo get_home_url(); ?>/hero-progam/">Hero Program</a></li>
                </ul>
            </div><!--/.footer_pod-->

        </div><!--/.footer__pods-wrap-->


    </div><!--/.site__footer-inner-->

</footer><!--/.site__footer-wrap-->

<div class="mobile__footer-nav">

    <ul class="mfoot__nav-links">
        <li><a href="#" id="mftProducts">Products</a></li>
        <li><a href="<?php echo get_home_url(); ?>/free-estimate" class="quote_btn">Get a Free Quote</a></li>
        <li><a href="#" id="mftChat"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/chat_icon.png"
                                          alt=""></a></li>
    </ul><!--/.mfoot__nav-links-->

    <div class="mft__toggle product__toggle-wrap">

        <div class="mft__product-inner">

            <ul>
                <li><a href="<?php echo get_home_url(); ?>/outdoor-living/">Outdoor Living</a></li>
                <li><a href="<?php echo get_home_url(); ?>/doors/">Doors</a></li>
                <li><a href="<?php echo get_home_url(); ?>/bathrooms/">Bathrooms</a></li>
                <li><a href="<?php echo get_home_url(); ?>/windows/">Windows</a></li>
                <li><a href="<?php echo get_home_url(); ?>/siding/">Sidings</a></li>
                <li><a href="<?php echo get_home_url(); ?>/gutters/">Gutters</a></li>
            </ul>

        </div><!--/.mft__product-inner-->

    </div><!--/.mdt__product-toggle-->

    <div class="mft__toggle chat__toggle-wrap">
        <div class="mft__toggle-inner">
            Explicabo fugiat id ipsa iusto nisi nostrum omnis quasi qui ratione totam vel veritatis voluptatibus
            architecto corporis dolore dolorum odit omnis quisquam rem sequi temporibus vel
            velit laborum nesciunt officiis optio quae veniam totam veritatis.
        </div><!--/.mft__toggle-inner-->
    </div><!--/.mdt__chat-toggle-->

</div><!--/.mobile__footer-nav-->

<?php if (is_archive() || is_category() || is_tag() || is_page(685)){}else{ ?>
<div class="lightbox-form-wrapper">
    <div class="lightbox-form-inner">
        <div class="lightbox-form-header">
            <img src="https://socius.allshoreresources.com/wp-content/uploads/2020/03/Spring.png" width="36"
                 id="seasonIcon">
            <p id="lightboxSeasonText" class="txt">SPRING SPECIAL OFFER</p>

            <div class="lightbox-form-promo-text promo-all">
                <h4 id="">get new windows today!</h4>
                <h2>$000 OFF</h2>
                <h3>Get Your Discount Now</h3>
            </div>
            <div class="lightbox-form-promo-text promo-outdoor-living">
                <h4>transform your backyard today!</h4>
                <h2>$000 OFF</h2>
                <h3>Get Your Discount Now</h3>
            </div>
            <div class="lightbox-form-promo-text promo-windows">
                <h4>get windows promotions</h4>
                <h2>$000 OFF</h2>
                <h3>Get Your Discount Now</h3>
            </div>
            <div class="lightbox-form-promo-text promo-bathrooms">
                <h4>get new bathrooms today!</h4>
                <h2>$000 OFF</h2>
                <h3>Get Your Discount Now</h3>
            </div>
            <div class="lightbox-form-promo-text promo-doors">
                <h4>get new doors today!</h4>
                <h2>$000 OFF</h2>
                <h3>Get Your Discount Now</h3>
            </div>
            <div class="lightbox-form-promo-text promo-siding">
                <h4>get new sidings today!</h4>
                <h2>$000 OFF</h2>
                <h3>Get Your Discount Now</h3>
            </div>
            <div class="lightbox-form-promo-text promo-gutters">
                <h4>get new gutters today!</h4>
                <h2>$000 OFF</h2>
                <h3>Get Your Discount Now</h3>
            </div>

        </div>

        <form class="hm__lightbox-form">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <input type="email" class="form-control" id="inputName4" placeholder="Name">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="email" class="form-control" id="inputPhone" placeholder="Phone">
                </div>

                <div class="form-group col-md-6">
                    <input type="email" class="form-control" id="inputZip" placeholder="ZIP">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <select id="inputState" class="form-control">
                        <option>Type of Project</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                        <option>Option 4</option>
                        <option>Option 5</option>
                    </select>
                </div>
            </div>

            <div class="form-row mobile-hidden">
                <div class="form-group col-md-12">
                    <button type="submit" class="button btn_block">Get Your Free Estimate</button>
                </div>
            </div>

            <div class="form-row mobile-show">
                <div class="form-group col-md-12">
                    <a href="#" class="button btn_block">Get Your Free Estimate</a>
                </div>
            </div>

        </form>

        <a href="#" class="button btn_block hero__estimate-link">Get Your Free Estimate</a>

    </div>
</div>

<?php } ?>
<?php wp_footer(); ?>

</div><!--/.end-site-wrapper-->

</body>
</html>

