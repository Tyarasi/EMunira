@extends('master')
@section('home_content')

<div class="jas-wc dib w__100 mb__60" role="main">
    <nav class="woocommerce-breadcrumb"><a href="/">Home</a><i class="fa fa-angle-right"></i>UKHTI</nav>

    <div class="term-description">
        <p>UKHTI &#8211; The Best Modest Fashion Made in Idonesia</p>
    </div>
    <div class="jas-container">
        <div class="jas-filter-wrap pr">
            <div class="filter-sidebar bgbl pf left">
                <h3 class="mg__0 tc cw bgb tu ls__2 visible-sm">Filter<i
                        class="close-filter pe-7s-close pa"></i>
                </h3>
                <div class="filter-content">
                    <aside id="woocommerce_price_filter-2" class="widget woocommerce widget_price_filter">
                        <h3 class="widget-title tu fwsb">Filter by price</h3>
                        <form method="get" action="/product-category/ukhti/">
                            <div class="price_slider_wrapper">
                                <div class="price_slider" style="display:none;"></div>
                                <div class="price_slider_amount" data-step="10">
                                    <label class="screen-reader-text" for="min_price">Min price</label>
                                    <input type="text" id="min_price" name="min_price" value="279300"
                                        data-min="279300" placeholder="Min price">
                                    <label class="screen-reader-text" for="max_price">Max price</label>
                                    <input type="text" id="max_price" name="max_price" value="699000"
                                        data-max="699000" placeholder="Max price">
                                    <button type="submit" class="button">Filter</button>
                                    <div class="price_label" style="display:none;">
                                        Price: <span class="from"></span> &mdash; <span class="to"></span>
                                    </div>
                                    <input type="hidden" name="simply_static_page" value="3334">
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </form>

                    </aside>
                    <aside id="yith-woo-ajax-reset-navigation-2"
                        class="widget yith-woocommerce-ajax-product-filter yith-woo-ajax-reset-navigation yith-woo-ajax-navigation woocommerce widget_layered_nav"
                        style="display:none"></aside>
                </div>
            </div>
            <div class="woocommerce-notices-wrapper"></div>
            <div class="result-count-order">
                <div class="flex between-xs middle-xs"> <a class="filter-trigger mr__50"><i
                            class="fa fa-sliders fwb"></i></a>

                    <div class="wc-col-switch flex">
                        <a href="#" class="pr one hide-md hidden-sm visible-xs mr__10" data-col="12"></a>
                        <a href="#" class="pr two mr__10" data-col="6"></a>
                        <a href="#" class="pr hidden-xs three mr__10" data-col="4"></a>
                        <a href="#" class="pr hidden-sm four mr__10 active" data-col="3"></a>
                        <a href="#" class="pr hidden-sm six" data-col="2"></a>
                    </div>
                   
                </div>
            </div>

            <div class="products jas-row">

                <div
                    class="jas-col-md-3 jas-col-sm-4 jas-col-xs-6 mt__30 post-7010 product type-product status-publish has-post-thumbnail product_cat-ukhti  instock shipping-taxable purchasable product-type-variable">
                    <div class="product-inner pr">
                        <div class="product-image pr">
                            <div class="yith-wcwl-add-to-wishlist ts__03 mg__0 pa add-to-wishlist-7010">
                                <div class="yith-wcwl-add-button show">
                                    <a href="/wishlist/" data-product-id="7010" data-product-type="variable"
                                        class="add_to_wishlist cw"><i class="fa fa-heart-o"></i></a><i
                                        class="fa fa-spinner fa-pulse ajax-loading pa"
                                        style="visibility:hidden"></i>
                                </div>
                                <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;"><a
                                        class="chp" href="/wishlist/"><i class="fa fa-heart"></i></a></div>
                                <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none"><a
                                        href="/wishlist/" class="chp"><i class="fa fa-heart"></i></a></div>
                            </div>
                            <div class="product-image-flip">
                                <a href="/shop/ukhti-gamis-azkia-mustard/"><img width="600" height="800"
                                        src="{{asset ('FE/wp-content/uploads/2023/08/AZKIA-MUS-WEB-4.jpg') }}"
                                        class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                        alt="AZKIA-MUS-WEB-4" title="AZKIA-MUS-WEB-4" decoding="async"
                                        loading="lazy"
                                        srcset="{{asset ('FE/wp-content/uploads/2023/08/AZKIA-MUS-WEB-4.jpg') }} 600w, {{asset ('FE/wp-content/uploads/2023/08/AZKIA-MUS-WEB-4-225x300.jpg') }} 225w, {{asset ('FE/wp-content/uploads/2023/08/AZKIA-MUS-WEB-4-113x150.jpg') }} 113w, {{asset ('FE/wp-content/uploads/2023/08/AZKIA-MUS-WEB-4-570x760.jpg') }} 570w"
                                        sizes="auto, (max-width: 600px) 100vw, 600px"></a><a
                                    href="/shop/ukhti-gamis-azkia-mustard/" class="db pa back"
                                    title="UKHTI GAMIS AZKIA MUSTARD"><img width="600" height="800"
                                        src="{{asset ('FE/wp-content/uploads/2023/08/AZKIA-MUS-WEB-3.jpg') }}"
                                        class="attachment-shop_catalog size-shop_catalog" alt=""
                                        decoding="async" loading="lazy"
                                        srcset="{{asset ('FE/wp-content/uploads/2023/08/AZKIA-MUS-WEB-3.jpg') }} 600w, {{asset ('FE/wp-content/uploads/2023/08/AZKIA-MUS-WEB-3-225x300.jpg') }} 225w, {{asset ('FE/wp-content/uploads/2023/08/AZKIA-MUS-WEB-3-113x150.jpg') }} 113w, {{asset ('FE/wp-content/uploads/2023/08/AZKIA-MUS-WEB-3-570x760.jpg') }} 570w"
                                        sizes="auto, (max-width: 600px) 100vw, 600px"></a>
                            </div> <a class="btn-quickview pa cd br__40 pl__25 pr__25 bgw tc dib"
                                href="javascript:void(0);" data-prod="7010">Quick Shop</a>
                            <div class="product-attr pa ts__03 cw"></div>
                        </div>
                        <!-- .product-image -->
                        <div class="product-info mt__15">
                            <h3 class="product-title pr fs__14 mg__0 fwm"><a class="cd chp"
                                    href="/shop/ukhti-gamis-azkia-mustard/">UKHTI GAMIS AZKIA MUSTARD</a>
                            </h3>
                            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                            class="woocommerce-Price-currencySymbol">Rp</span>&nbsp;396,000</bdi></span>
                                &ndash; <span class="woocommerce-Price-amount amount"><bdi><span
                                            class="woocommerce-Price-currencySymbol">Rp</span>&nbsp;416,000</bdi></span></span>
                        </div>
                        <!-- .product-info -->
                    </div>
                    <!-- .product-inner -->
                </div>



                <div
                    class="jas-col-md-3 jas-col-sm-4 jas-col-xs-6 mt__30 post-7000 product type-product status-publish has-post-thumbnail product_cat-ukhti  instock shipping-taxable purchasable product-type-variable">
                    <div class="product-inner pr">
                        <div class="product-image pr">
                            <div class="yith-wcwl-add-to-wishlist ts__03 mg__0 pa add-to-wishlist-7000">
                                <div class="yith-wcwl-add-button show">
                                    <a href="/wishlist/" data-product-id="7000" data-product-type="variable"
                                        class="add_to_wishlist cw"><i class="fa fa-heart-o"></i></a><i
                                        class="fa fa-spinner fa-pulse ajax-loading pa"
                                        style="visibility:hidden"></i>
                                </div>
                                <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;"><a
                                        class="chp" href="/wishlist/"><i class="fa fa-heart"></i></a></div>
                                <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none"><a
                                        href="/wishlist/" class="chp"><i class="fa fa-heart"></i></a></div>
                            </div>
                            <div class="product-image-flip">
                                <a href="/shop/ukhti-gamis-azkia-mocca/"><img width="600" height="800"
                                        src="{{asset ('FE/wp-content/uploads/2023/08/AZKIA-MOC-WEB-4.jpg') }}"
                                        class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                        alt="AZKIA-MOC-WEB-4" title="AZKIA-MOC-WEB-4" decoding="async"
                                        loading="lazy"
                                        srcset="{{asset ('FE/wp-content/uploads/2023/08/AZKIA-MOC-WEB-4.jpg') }} 600w, {{asset ('FE/wp-content/uploads/2023/08/AZKIA-MOC-WEB-4-225x300.jpg') }} 225w, {{asset ('FE/wp-content/uploads/2023/08/AZKIA-MOC-WEB-4-113x150.jpg') }} 113w, {{asset ('FE/wp-content/uploads/2023/08/AZKIA-MOC-WEB-4-570x760.jpg') }} 570w"
                                        sizes="auto, (max-width: 600px) 100vw, 600px"></a><a
                                    href="/shop/ukhti-gamis-azkia-mocca/" class="db pa back"
                                    title="UKHTI GAMIS AZKIA MOCCA"><img width="600" height="800"
                                        src="{{asset ('FE/wp-content/uploads/2023/08/AZKIA-MOC-WEB-5.jpg') }}"
                                        class="attachment-shop_catalog size-shop_catalog" alt=""
                                        decoding="async" loading="lazy"
                                        srcset="{{asset ('FE/wp-content/uploads/2023/08/AZKIA-MOC-WEB-5.jpg') }} 600w, {{asset ('FE/wp-content/uploads/2023/08/AZKIA-MOC-WEB-5-225x300.jpg') }} 225w, {{asset ('FE/wp-content/uploads/2023/08/AZKIA-MOC-WEB-5-113x150.jpg') }} 113w, {{asset ('FE/wp-content/uploads/2023/08/AZKIA-MOC-WEB-5-570x760.jpg') }} 570w"
                                        sizes="auto, (max-width: 600px) 100vw, 600px"></a>
                            </div> <a class="btn-quickview pa cd br__40 pl__25 pr__25 bgw tc dib"
                                href="javascript:void(0);" data-prod="7000">Quick Shop</a>
                            <div class="product-attr pa ts__03 cw"></div>
                        </div>
                        <!-- .product-image -->
                        <div class="product-info mt__15">
                            <h3 class="product-title pr fs__14 mg__0 fwm"><a class="cd chp"
                                    href="/shop/ukhti-gamis-azkia-mocca/">UKHTI GAMIS AZKIA MOCCA</a></h3>
                            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                            class="woocommerce-Price-currencySymbol">Rp</span>&nbsp;396,000</bdi></span>
                                &ndash; <span class="woocommerce-Price-amount amount"><bdi><span
                                            class="woocommerce-Price-currencySymbol">Rp</span>&nbsp;416,000</bdi></span></span>
                        </div>
                        <!-- .product-info -->
                    </div>
                    <!-- .product-inner -->
                </div>



                <div
                    class="jas-col-md-3 jas-col-sm-4 jas-col-xs-6 mt__30 post-6989 product type-product status-publish has-post-thumbnail product_cat-ukhti  instock shipping-taxable purchasable product-type-variable">
                    <div class="product-inner pr">
                        <div class="product-image pr">
                            <div class="yith-wcwl-add-to-wishlist ts__03 mg__0 pa add-to-wishlist-6989">
                                <div class="yith-wcwl-add-button show">
                                    <a href="/wishlist/" data-product-id="6989" data-product-type="variable"
                                        class="add_to_wishlist cw"><i class="fa fa-heart-o"></i></a><i
                                        class="fa fa-spinner fa-pulse ajax-loading pa"
                                        style="visibility:hidden"></i>
                                </div>
                                <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;"><a
                                        class="chp" href="/wishlist/"><i class="fa fa-heart"></i></a></div>
                                <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none"><a
                                        href="/wishlist/" class="chp"><i class="fa fa-heart"></i></a></div>
                            </div>
                            <div class="product-image-flip">
                                <a href="/shop/ukhti-gamis-azkia-cappucino/"><img width="600" height="800"
                                        src="{{asset ('FE/wp-content/uploads/2023/08/AZKIA-CAP-WEB-6.jpg') }}"
                                        class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                        alt="AZKIA-CAP-WEB-6" title="AZKIA-CAP-WEB-6" decoding="async"
                                        loading="lazy"
                                        srcset="{{asset ('FE/wp-content/uploads/2023/08/AZKIA-CAP-WEB-6.jpg') }} 600w, {{asset ('FE/wp-content/uploads/2023/08/AZKIA-CAP-WEB-6-225x300.jpg') }} 225w, {{asset ('FE/wp-content/uploads/2023/08/AZKIA-CAP-WEB-6-113x150.jpg') }} 113w, {{asset ('FE/wp-content/uploads/2023/08/AZKIA-CAP-WEB-6-570x760.jpg') }} 570w"
                                        sizes="auto, (max-width: 600px) 100vw, 600px"></a><a
                                    href="/shop/ukhti-gamis-azkia-cappucino/" class="db pa back"
                                    title="UKHTI GAMIS AZKIA CAPPUCINO"><img width="600" height="800"
                                        src="{{asset ('FE/wp-content/uploads/2023/08/AZKIA-CAP-WEB-5.jpg') }}"
                                        class="attachment-shop_catalog size-shop_catalog" alt=""
                                        decoding="async" loading="lazy"
                                        srcset="{{asset ('FE/wp-content/uploads/2023/08/AZKIA-CAP-WEB-5.jpg') }} 600w, {{asset ('FE/wp-content/uploads/2023/08/AZKIA-CAP-WEB-5-225x300.jpg') }} 225w, {{asset ('FE/wp-content/uploads/2023/08/AZKIA-CAP-WEB-5-113x150.jpg') }} 113w, {{asset ('FE/wp-content/uploads/2023/08/AZKIA-CAP-WEB-5-570x760.jpg') }} 570w"
                                        sizes="auto, (max-width: 600px) 100vw, 600px"></a>
                            </div> <a class="btn-quickview pa cd br__40 pl__25 pr__25 bgw tc dib"
                                href="javascript:void(0);" data-prod="6989">Quick Shop</a>
                            <div class="product-attr pa ts__03 cw"></div>
                        </div>
                        <!-- .product-image -->
                        <div class="product-info mt__15">
                            <h3 class="product-title pr fs__14 mg__0 fwm"><a class="cd chp"
                                    href="/shop/ukhti-gamis-azkia-cappucino/">UKHTI GAMIS AZKIA
                                    CAPPUCINO</a></h3>
                            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                            class="woocommerce-Price-currencySymbol">Rp</span>&nbsp;396,000</bdi></span>
                                &ndash; <span class="woocommerce-Price-amount amount"><bdi><span
                                            class="woocommerce-Price-currencySymbol">Rp</span>&nbsp;416,000</bdi></span></span>
                        </div>
                        <!-- .product-info -->
                    </div>
                    <!-- .product-inner -->
                </div>



                <div
                    class="jas-col-md-3 jas-col-sm-4 jas-col-xs-6 mt__30 post-6979 product type-product status-publish has-post-thumbnail product_cat-ukhti last instock shipping-taxable purchasable product-type-variable">
                    <div class="product-inner pr">
                        <div class="product-image pr">
                            <div class="yith-wcwl-add-to-wishlist ts__03 mg__0 pa add-to-wishlist-6979">
                                <div class="yith-wcwl-add-button show">
                                    <a href="/wishlist/" data-product-id="6979" data-product-type="variable"
                                        class="add_to_wishlist cw"><i class="fa fa-heart-o"></i></a><i
                                        class="fa fa-spinner fa-pulse ajax-loading pa"
                                        style="visibility:hidden"></i>
                                </div>
                                <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;"><a
                                        class="chp" href="/wishlist/"><i class="fa fa-heart"></i></a></div>
                                <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none"><a
                                        href="/wishlist/" class="chp"><i class="fa fa-heart"></i></a></div>
                            </div>
                            <div class="product-image-flip">
                                <a href="/shop/ukhti-gamis-azkia-army/"><img width="600" height="800"
                                        src="{{asset ('FE/wp-content/uploads/2023/08/AZKIA-ARM-WEB-5.jpg') }}"
                                        class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                        alt="AZKIA-ARM-WEB-5" title="AZKIA-ARM-WEB-5" decoding="async"
                                        loading="lazy"
                                        srcset="{{asset ('FE/wp-content/uploads/2023/08/AZKIA-ARM-WEB-5.jpg') }} 600w, {{asset ('FE/wp-content/uploads/2023/08/AZKIA-ARM-WEB-5-225x300.jpg') }} 225w, {{asset ('FE/wp-content/uploads/2023/08/AZKIA-ARM-WEB-5-113x150.jpg') }} 113w, {{asset ('FE/wp-content/uploads/2023/08/AZKIA-ARM-WEB-5-570x760.jpg') }} 570w"
                                        sizes="auto, (max-width: 600px) 100vw, 600px"></a><a
                                    href="/shop/ukhti-gamis-azkia-army/" class="db pa back"
                                    title="UKHTI GAMIS AZKIA ARMY"><img width="600" height="800"
                                        src="{{asset ('FE/wp-content/uploads/2023/08/AZKIA-ARM-WEB-4.jpg') }}"
                                        class="attachment-shop_catalog size-shop_catalog" alt=""
                                        decoding="async" loading="lazy"
                                        srcset="{{asset ('FE/wp-content/uploads/2023/08/AZKIA-ARM-WEB-4.jpg') }} 600w, {{asset ('FE/wp-content/uploads/2023/08/AZKIA-ARM-WEB-4-225x300.jpg') }} 225w, {{asset ('FE/wp-content/uploads/2023/08/AZKIA-ARM-WEB-4-113x150.jpg') }} 113w, {{asset ('FE/wp-content/uploads/2023/08/AZKIA-ARM-WEB-4-570x760.jpg') }} 570w"
                                        sizes="auto, (max-width: 600px) 100vw, 600px"></a>
                            </div> <a class="btn-quickview pa cd br__40 pl__25 pr__25 bgw tc dib"
                                href="javascript:void(0);" data-prod="6979">Quick Shop</a>
                            <div class="product-attr pa ts__03 cw"></div>
                        </div>
                        <!-- .product-image -->
                        <div class="product-info mt__15">
                            <h3 class="product-title pr fs__14 mg__0 fwm"><a class="cd chp"
                                    href="/shop/ukhti-gamis-azkia-army/">UKHTI GAMIS AZKIA ARMY</a></h3>
                            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                            class="woocommerce-Price-currencySymbol">Rp</span>&nbsp;396,000</bdi></span>
                                &ndash; <span class="woocommerce-Price-amount amount"><bdi><span
                                            class="woocommerce-Price-currencySymbol">Rp</span>&nbsp;416,000</bdi></span></span>
                        </div>
                        <!-- .product-info -->
                    </div>
                    <!-- .product-inner -->
                </div>



                <div
                    class="jas-col-md-3 jas-col-sm-4 jas-col-xs-6 mt__30 post-6967 product type-product status-publish has-post-thumbnail product_cat-ukhti first outofstock shipping-taxable purchasable product-type-variable">
                    <div class="product-inner pr">
                        <div class="product-image pr">
                            <div class="yith-wcwl-add-to-wishlist ts__03 mg__0 pa add-to-wishlist-6967">
                                <div class="yith-wcwl-add-button show">
                                    <a href="/wishlist/" data-product-id="6967" data-product-type="variable"
                                        class="add_to_wishlist cw"><i class="fa fa-heart-o"></i></a><i
                                        class="fa fa-spinner fa-pulse ajax-loading pa"
                                        style="visibility:hidden"></i>
                                </div>
                                <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;"><a
                                        class="chp" href="/wishlist/"><i class="fa fa-heart"></i></a></div>
                                <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none"><a
                                        href="/wishlist/" class="chp"><i class="fa fa-heart"></i></a></div>
                            </div> 
                            <div class="product-image-flip">
                                <a href="/shop/ukhti-gamis-elnara-putih/"><img width="600" height="800"
                                        src="{{asset ('FE/wp-content/uploads/2023/07/ELNARA-PUT-WEB-4.jpg') }}"
                                        class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                        alt="ELNARA-PUT-WEB-4" title="ELNARA-PUT-WEB-4" decoding="async"
                                        loading="lazy"
                                        srcset="{{asset ('FE/wp-content/uploads/2023/07/ELNARA-PUT-WEB-4.jpg') }} 600w, {{asset ('FE/wp-content/uploads/2023/07/ELNARA-PUT-WEB-4-225x300.jpg') }} 225w, {{asset ('FE/wp-content/uploads/2023/07/ELNARA-PUT-WEB-4-113x150.jpg') }} 113w, {{asset ('FE/wp-content/uploads/2023/07/ELNARA-PUT-WEB-4-570x760.jpg') }} 570w"
                                        sizes="auto, (max-width: 600px) 100vw, 600px"></a><a
                                    href="/shop/ukhti-gamis-elnara-putih/" class="db pa back"
                                    title="UKHTI GAMIS ELNARA PUTIH"><img width="600" height="800"
                                        src="{{asset ('FE/wp-content/uploads/2023/07/ELNARA-PUT-WEB-5.jpg') }}"
                                        class="attachment-shop_catalog size-shop_catalog" alt=""
                                        decoding="async" loading="lazy"
                                        srcset="{{asset ('FE/wp-content/uploads/2023/07/ELNARA-PUT-WEB-5.jpg') }} 600w, {{asset ('FE/wp-content/uploads/2023/07/ELNARA-PUT-WEB-5-225x300.jpg') }} 225w, {{asset ('FE/wp-content/uploads/2023/07/ELNARA-PUT-WEB-5-113x150.jpg') }} 113w, {{asset ('FE/wp-content/uploads/2023/07/ELNARA-PUT-WEB-5-570x760.jpg') }} 570w"
                                        sizes="auto, (max-width: 600px) 100vw, 600px"></a>
                            </div> <a class="btn-quickview pa cd br__40 pl__25 pr__25 bgw tc dib"
                                href="javascript:void(0);" data-prod="6967">Quick Shop</a>
                            <div class="product-attr pa ts__03 cw"></div>
                        </div>
                        <!-- .product-image -->
                        <div class="product-info mt__15">
                            <h3 class="product-title pr fs__14 mg__0 fwm"><a class="cd chp"
                                    href="/shop/ukhti-gamis-elnara-putih/">UKHTI GAMIS ELNARA PUTIH</a></h3>
                            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                            class="woocommerce-Price-currencySymbol">Rp</span>&nbsp;339,000</bdi></span>
                                &ndash; <span class="woocommerce-Price-amount amount"><bdi><span
                                            class="woocommerce-Price-currencySymbol">Rp</span>&nbsp;359,000</bdi></span></span>
                        </div>
                        <!-- .product-info -->
                    </div>
                    <!-- .product-inner -->
                </div>



                <div
                    class="jas-col-md-3 jas-col-sm-4 jas-col-xs-6 mt__30 post-6957 product type-product status-publish has-post-thumbnail product_cat-ukhti  outofstock shipping-taxable purchasable product-type-variable">
                    <div class="product-inner pr">
                        <div class="product-image pr">
                            <div class="yith-wcwl-add-to-wishlist ts__03 mg__0 pa add-to-wishlist-6957">
                                <div class="yith-wcwl-add-button show">
                                    <a href="/wishlist/" data-product-id="6957" data-product-type="variable"
                                        class="add_to_wishlist cw"><i class="fa fa-heart-o"></i></a><i
                                        class="fa fa-spinner fa-pulse ajax-loading pa"
                                        style="visibility:hidden"></i>
                                </div>
                                <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;"><a
                                        class="chp" href="/wishlist/"><i class="fa fa-heart"></i></a></div>
                                <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none"><a
                                        href="/wishlist/" class="chp"><i class="fa fa-heart"></i></a></div>
                            </div> 
                            <div class="product-image-flip">
                                <a href="/shop/ukhti-gamis-elnara-magenta/"><img width="600" height="800"
                                        src="{{asset ('FE/wp-content/uploads/2023/07/ELNARA-MAG-WEB-3.jpg') }}"
                                        class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                        alt="ELNARA-MAG-WEB-3" title="ELNARA-MAG-WEB-3" decoding="async"
                                        loading="lazy"
                                        srcset="{{asset ('FE/wp-content/uploads/2023/07/ELNARA-MAG-WEB-3.jpg') }} 600w, {{asset ('FE/wp-content/uploads/2023/07/ELNARA-MAG-WEB-3-225x300.jpg') }} 225w, {{asset ('FE/wp-content/uploads/2023/07/ELNARA-MAG-WEB-3-113x150.jpg') }} 113w, {{asset ('FE/wp-content/uploads/2023/07/ELNARA-MAG-WEB-3-570x760.jpg') }} 570w"
                                        sizes="auto, (max-width: 600px) 100vw, 600px"></a><a
                                    href="/shop/ukhti-gamis-elnara-magenta/" class="db pa back"
                                    title="UKHTI GAMIS ELNARA MAGENTA"><img width="600" height="800"
                                        src="{{asset ('FE/wp-content/uploads/2023/07/ELNARA-MAG-WEB-5.jpg') }}"
                                        class="attachment-shop_catalog size-shop_catalog" alt=""
                                        decoding="async" loading="lazy"
                                        srcset="{{asset ('FE/wp-content/uploads/2023/07/ELNARA-MAG-WEB-5.jpg') }} 600w, {{asset ('FE/wp-content/uploads/2023/07/ELNARA-MAG-WEB-5-225x300.jpg') }} 225w, {{asset ('FE/wp-content/uploads/2023/07/ELNARA-MAG-WEB-5-113x150.jpg') }} 113w, {{asset ('FE/wp-content/uploads/2023/07/ELNARA-MAG-WEB-5-570x760.jpg') }} 570w"
                                        sizes="auto, (max-width: 600px) 100vw, 600px"></a>
                            </div> <a class="btn-quickview pa cd br__40 pl__25 pr__25 bgw tc dib"
                                href="javascript:void(0);" data-prod="6957">Quick Shop</a>
                            <div class="product-attr pa ts__03 cw"></div>
                        </div>
                        <!-- .product-image -->
                        <div class="product-info mt__15">
                            <h3 class="product-title pr fs__14 mg__0 fwm"><a class="cd chp"
                                    href="/shop/ukhti-gamis-elnara-magenta/">UKHTI GAMIS ELNARA MAGENTA</a>
                            </h3>
                            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                            class="woocommerce-Price-currencySymbol">Rp</span>&nbsp;339,000</bdi></span>
                                &ndash; <span class="woocommerce-Price-amount amount"><bdi><span
                                            class="woocommerce-Price-currencySymbol">Rp</span>&nbsp;359,000</bdi></span></span>
                        </div>
                        <!-- .product-info -->
                    </div>
                    <!-- .product-inner -->
                </div>



            



       



      



          



         



         



      



         


      



       



    



      



     





                



             


            



         



          



       



              



          


                


          



           



          



               



             



        



      



              



         



         


         


       



             



          


               

            </div>
            <!-- .jas-row -->

        </div>


    </div>
</div>

@endsection