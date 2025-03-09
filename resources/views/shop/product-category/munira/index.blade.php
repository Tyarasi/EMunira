@extends('master')
@section('home_content')
    <div class="jas-wc dib w__100 mb__60" role="main">
        <nav class="woocommerce-breadcrumb"><a href="/">Home</a><i class="fa fa-angle-right"></i>MUNIRA</nav>

        <div class="term-description">
            <p>Munira Hijab &#8211; The Best Syar&#8217;i Hijab made in Indonesia</p>
        </div>
        <div class="jas-container">
            <div class="jas-filter-wrap pr">
                <div class="filter-sidebar bgbl pf left">
                    <h3 class="mg__0 tc cw bgb tu ls__2 visible-sm">Filter<i class="close-filter pe-7s-close pa"></i>
                    </h3>
                    <div class="filter-content">
                        <aside id="woocommerce_price_filter-2" class="widget woocommerce widget_price_filter">
                            <h3 class="widget-title tu fwsb">Filter by price</h3>
                            <form method="get" action="/product-category/munira/">
                                <div class="price_slider_wrapper">
                                    <div class="price_slider" style="display:none;"></div>
                                    <div class="price_slider_amount" data-step="10">
                                        <label class="screen-reader-text" for="min_price">Min price</label>
                                        <input type="text" id="min_price" name="min_price" value="99000"
                                            data-min="99000" placeholder="Min price">
                                        <label class="screen-reader-text" for="max_price">Max price</label>
                                        <input type="text" id="max_price" name="max_price" value="599000"
                                            data-max="599000" placeholder="Max price">
                                        <button type="submit" class="button">Filter</button>
                                        <div class="price_label" style="display:none;">
                                            Price: <span class="from"></span> &mdash; <span class="to"></span>
                                        </div>
                                        <input type="hidden" name="simply_static_page" value="3333">
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
                        class="jas-col-md-3 jas-col-sm-4 jas-col-xs-6 mt__30 post-7049 product type-product status-publish has-post-thumbnail product_cat-munira product_cat-scarf first outofstock shipping-taxable purchasable product-type-simple">
                        <div class="product-inner pr">
                            <div class="product-image pr">
                                <div class="yith-wcwl-add-to-wishlist ts__03 mg__0 pa add-to-wishlist-7049">
                                    <div class="yith-wcwl-add-button show">
                                        <a href="/wishlist/" data-product-id="7049" data-product-type="simple"
                                            class="add_to_wishlist cw"><i class="fa fa-heart-o"></i></a><i
                                            class="fa fa-spinner fa-pulse ajax-loading pa" style="visibility:hidden"></i>
                                    </div>
                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;"><a class="chp"
                                            href="/wishlist/"><i class="fa fa-heart"></i></a></div>
                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none"><a
                                            href="/wishlist/" class="chp"><i class="fa fa-heart"></i></a></div>
                                </div> 
                                <div class="product-image-flip">
                                    <a href="/shop/munira-scarf-mscarf-latifa-biru/"><img width="600" height="800"
                                            src="{{ asset('FE/wp-content/uploads/2023/08/LATIFA-BIR-WEB-4.jpg') }}"
                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                            alt="LATIFA-BIR-WEB-4" title="LATIFA-BIR-WEB-4" decoding="async"
                                            loading="lazy"
                                            srcset="{{ asset('FE/wp-content/uploads/2023/08/LATIFA-BIR-WEB-4.jpg') }} 600w, {{ asset('FE/wp-content/uploads/2023/08/LATIFA-BIR-WEB-4-225x300.jpg') }} 225w, {{ asset('FE/wp-content/uploads/2023/08/LATIFA-BIR-WEB-4-113x150.jpg') }} 113w, {{ asset('FE/wp-content/uploads/2023/08/LATIFA-BIR-WEB-4-570x760.jpg') }} 570w"
                                            sizes="auto, (max-width: 600px) 100vw, 600px"></a><a
                                        href="/shop/munira-scarf-mscarf-latifa-biru/" class="db pa back"
                                        title="MUNIRA SCARF MSCARF LATIFA BIRU"><img width="600" height="800"
                                            src="{{ asset('FE/wp-content/uploads/2023/08/LATIFA-BIR-WEB-3.jpg') }}"
                                            class="attachment-shop_catalog size-shop_catalog" alt=""
                                            decoding="async" loading="lazy"
                                            srcset="{{ asset('FE/wp-content/uploads/2023/08/LATIFA-BIR-WEB-3.jpg') }} 600w, {{ asset('FE/wp-content/uploads/2023/08/LATIFA-BIR-WEB-3-225x300.jpg') }} 225w, {{ asset('FE/wp-content/uploads/2023/08/LATIFA-BIR-WEB-3-113x150.jpg') }} 113w, {{ asset('FE/wp-content/uploads/2023/08/LATIFA-BIR-WEB-3-570x760.jpg') }} 570w"
                                            sizes="auto, (max-width: 600px) 100vw, 600px"></a>
                                </div> <a class="btn-quickview pa cd br__40 pl__25 pr__25 bgw tc dib"
                                    href="javascript:void(0);" data-prod="7049">Quick Shop</a>
                                <div class="product-attr pa ts__03 cw"></div>
                            </div>
                            <!-- .product-image -->
                            <div class="product-info mt__15">
                                <h3 class="product-title pr fs__14 mg__0 fwm"><a class="cd chp"
                                        href="/shop/munira-scarf-mscarf-latifa-biru/">MUNIRA SCARF MSCARF LATIFA
                                        BIRU</a></h3>
                                <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                class="woocommerce-Price-currencySymbol">Rp</span>&nbsp;239,000</bdi></span></span>
                            </div>
                            <!-- .product-info -->
                        </div>
                        <!-- .product-inner -->
                    </div>



                    <div
                        class="jas-col-md-3 jas-col-sm-4 jas-col-xs-6 mt__30 post-7044 product type-product status-publish has-post-thumbnail product_cat-munira product_cat-scarf  outofstock shipping-taxable purchasable product-type-simple">
                        <div class="product-inner pr">
                            <div class="product-image pr">
                                <div class="yith-wcwl-add-to-wishlist ts__03 mg__0 pa add-to-wishlist-7044">
                                    <div class="yith-wcwl-add-button show">
                                        <a href="/wishlist/" data-product-id="7044" data-product-type="simple"
                                            class="add_to_wishlist cw"><i class="fa fa-heart-o"></i></a><i
                                            class="fa fa-spinner fa-pulse ajax-loading pa" style="visibility:hidden"></i>
                                    </div>
                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;"><a
                                            class="chp" href="/wishlist/"><i class="fa fa-heart"></i></a></div>
                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none"><a
                                            href="/wishlist/" class="chp"><i class="fa fa-heart"></i></a></div>
                                </div> 
                                <div class="product-image-flip">
                                    <a href="/shop/munira-scarf-mscarf-latifa-hijau-mint/"><img width="600"
                                            height="800"
                                            src="{{ asset('FE/wp-content/uploads/2023/08/LATIFA-HM-WEB-3.jpg') }}"
                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                            alt="LATIFA-HM-WEB-3" title="LATIFA-HM-WEB-3" decoding="async"
                                            loading="lazy"
                                            srcset="{{ asset('FE/wp-content/uploads/2023/08/LATIFA-HM-WEB-3.jpg') }} 600w, {{ asset('FE/wp-content/uploads/2023/08/LATIFA-HM-WEB-3-225x300.jpg') }} 225w, {{ asset('FE/wp-content/uploads/2023/08/LATIFA-HM-WEB-3-113x150.jpg') }} 113w, {{ asset('FE/wp-content/uploads/2023/08/LATIFA-HM-WEB-3-570x760.jpg') }} 570w"
                                            sizes="auto, (max-width: 600px) 100vw, 600px"></a><a
                                        href="/shop/munira-scarf-mscarf-latifa-hijau-mint/" class="db pa back"
                                        title="MUNIRA SCARF MSCARF LATIFA HIJAU MINT"><img width="600" height="800"
                                            src="{{ asset('FE/wp-content/uploads/2023/08/LATIFA-HM-WEB-4.jpg') }}"
                                            class="attachment-shop_catalog size-shop_catalog" alt=""
                                            decoding="async" loading="lazy"
                                            srcset="{{ asset('FE/wp-content/uploads/2023/08/LATIFA-HM-WEB-4.jpg') }} 600w, {{ asset('FE/wp-content/uploads/2023/08/LATIFA-HM-WEB-4-225x300.jpg') }} 225w, {{ asset('FE/wp-content/uploads/2023/08/LATIFA-HM-WEB-4-113x150.jpg') }} 113w, {{ asset('FE/wp-content/uploads/2023/08/LATIFA-HM-WEB-4-570x760.jpg') }} 570w"
                                            sizes="auto, (max-width: 600px) 100vw, 600px"></a>
                                </div> <a class="btn-quickview pa cd br__40 pl__25 pr__25 bgw tc dib"
                                    href="javascript:void(0);" data-prod="7044">Quick Shop</a>
                                <div class="product-attr pa ts__03 cw"></div>
                            </div>
                            <!-- .product-image -->
                            <div class="product-info mt__15">
                                <h3 class="product-title pr fs__14 mg__0 fwm"><a class="cd chp"
                                        href="/shop/munira-scarf-mscarf-latifa-hijau-mint/">MUNIRA SCARF MSCARF
                                        LATIFA HIJAU MINT</a></h3>
                                <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                class="woocommerce-Price-currencySymbol">Rp</span>&nbsp;239,000</bdi></span></span>
                            </div>
                            <!-- .product-info -->
                        </div>
                        <!-- .product-inner -->
                    </div>



                    <div
                        class="jas-col-md-3 jas-col-sm-4 jas-col-xs-6 mt__30 post-7039 product type-product status-publish has-post-thumbnail product_cat-munira product_cat-scarf  outofstock shipping-taxable purchasable product-type-simple">
                        <div class="product-inner pr">
                            <div class="product-image pr">
                                <div class="yith-wcwl-add-to-wishlist ts__03 mg__0 pa add-to-wishlist-7039">
                                    <div class="yith-wcwl-add-button show">
                                        <a href="/wishlist/" data-product-id="7039" data-product-type="simple"
                                            class="add_to_wishlist cw"><i class="fa fa-heart-o"></i></a><i
                                            class="fa fa-spinner fa-pulse ajax-loading pa" style="visibility:hidden"></i>
                                    </div>
                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;"><a
                                            class="chp" href="/wishlist/"><i class="fa fa-heart"></i></a></div>
                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none"><a
                                            href="/wishlist/" class="chp"><i class="fa fa-heart"></i></a></div>
                                </div> 
                                <div class="product-image-flip">
                                    <a href="/shop/munira-scarf-mscarf-latifa-olive/"><img width="600" height="800"
                                            src="{{ asset('FE/wp-content/uploads/2023/08/LATIFA-OL-WEB-2.jpg') }}"
                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                            alt="LATIFA-OL-WEB-2" title="LATIFA-OL-WEB-2" decoding="async"
                                            loading="lazy"
                                            srcset="{{ asset('FE/wp-content/uploads/2023/08/LATIFA-OL-WEB-2.jpg') }} 600w, {{ asset('FE/wp-content/uploads/2023/08/LATIFA-OL-WEB-2-225x300.jpg') }} 225w, {{ asset('FE/wp-content/uploads/2023/08/LATIFA-OL-WEB-2-113x150.jpg') }} 113w, {{ asset('FE/wp-content/uploads/2023/08/LATIFA-OL-WEB-2-570x760.jpg') }} 570w"
                                            sizes="auto, (max-width: 600px) 100vw, 600px"></a><a
                                        href="/shop/munira-scarf-mscarf-latifa-olive/" class="db pa back"
                                        title="MUNIRA SCARF MSCARF LATIFA OLIVE"><img width="600" height="800"
                                            src="{{ asset('FE/wp-content/uploads/2023/08/LATIFA-OL-WEB-3.jpg') }}"
                                            class="attachment-shop_catalog size-shop_catalog" alt=""
                                            decoding="async" loading="lazy"
                                            srcset="{{ asset('FE/wp-content/uploads/2023/08/LATIFA-OL-WEB-3.jpg') }} 600w, {{ asset('FE/wp-content/uploads/2023/08/LATIFA-OL-WEB-3-225x300.jpg') }} 225w, {{ asset('FE/wp-content/uploads/2023/08/LATIFA-OL-WEB-3-113x150.jpg') }} 113w, {{ asset('FE/wp-content/uploads/2023/08/LATIFA-OL-WEB-3-570x760.jpg') }} 570w"
                                            sizes="auto, (max-width: 600px) 100vw, 600px"></a>
                                </div> <a class="btn-quickview pa cd br__40 pl__25 pr__25 bgw tc dib"
                                    href="javascript:void(0);" data-prod="7039">Quick Shop</a>
                                <div class="product-attr pa ts__03 cw"></div>
                            </div>
                            <!-- .product-image -->
                            <div class="product-info mt__15">
                                <h3 class="product-title pr fs__14 mg__0 fwm"><a class="cd chp"
                                        href="/shop/munira-scarf-mscarf-latifa-olive/">MUNIRA SCARF MSCARF
                                        LATIFA OLIVE</a></h3>
                                <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                class="woocommerce-Price-currencySymbol">Rp</span>&nbsp;239,000</bdi></span></span>
                            </div>
                            <!-- .product-info -->
                        </div>
                        <!-- .product-inner -->
                    </div>



                    <div
                        class="jas-col-md-3 jas-col-sm-4 jas-col-xs-6 mt__30 post-7033 product type-product status-publish has-post-thumbnail product_cat-munira product_cat-scarf  outofstock shipping-taxable purchasable product-type-simple">
                        <div class="product-inner pr">
                            <div class="product-image pr">
                                <div class="yith-wcwl-add-to-wishlist ts__03 mg__0 pa add-to-wishlist-7033">
                                    <div class="yith-wcwl-add-button show">
                                        <a href="/wishlist/" data-product-id="7033" data-product-type="simple"
                                            class="add_to_wishlist cw"><i class="fa fa-heart-o"></i></a><i
                                            class="fa fa-spinner fa-pulse ajax-loading pa" style="visibility:hidden"></i>
                                    </div>
                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;"><a
                                            class="chp" href="/wishlist/"><i class="fa fa-heart"></i></a></div>
                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none"><a
                                            href="/wishlist/" class="chp"><i class="fa fa-heart"></i></a></div>
                                </div> 
                                <div class="product-image-flip">
                                    <a href="/shop/munira-scarf-mscarf-laila-red-brown/"><img width="600"
                                            height="800"
                                            src="{{ asset('FE/wp-content/uploads/2023/08/LAILA-RED-BR-WEB-1.jpg') }}"
                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                            alt="LAILA-RED-BR-WEB-1" title="LAILA-RED-BR-WEB-1" decoding="async"
                                            loading="lazy"
                                            srcset="{{ asset('FE/wp-content/uploads/2023/08/LAILA-RED-BR-WEB-1.jpg') }} 600w, {{ asset('FE/wp-content/uploads/2023/08/LAILA-RED-BR-WEB-1-225x300.jpg') }} 225w, {{ asset('FE/wp-content/uploads/2023/08/LAILA-RED-BR-WEB-1-113x150.jpg') }} 113w, {{ asset('FE/wp-content/uploads/2023/08/LAILA-RED-BR-WEB-1-570x760.jpg') }} 570w"
                                            sizes="auto, (max-width: 600px) 100vw, 600px"></a><a
                                        href="/shop/munira-scarf-mscarf-laila-red-brown/" class="db pa back"
                                        title="MUNIRA SCARF MSCARF LAILA RED BROWN"><img width="600" height="800"
                                            src="{{ asset('FE/wp-content/uploads/2023/08/LAILA-RED-BR-WEB-2.jpg') }}"
                                            class="attachment-shop_catalog size-shop_catalog" alt=""
                                            decoding="async" loading="lazy"
                                            srcset="{{ asset('FE/wp-content/uploads/2023/08/LAILA-RED-BR-WEB-2.jpg') }} 600w, {{ asset('FE/wp-content/uploads/2023/08/LAILA-RED-BR-WEB-2-225x300.jpg') }} 225w, {{ asset('FE/wp-content/uploads/2023/08/LAILA-RED-BR-WEB-2-113x150.jpg') }} 113w, {{ asset('FE/wp-content/uploads/2023/08/LAILA-RED-BR-WEB-2-570x760.jpg') }} 570w"
                                            sizes="auto, (max-width: 600px) 100vw, 600px"></a>
                                </div> <a class="btn-quickview pa cd br__40 pl__25 pr__25 bgw tc dib"
                                    href="javascript:void(0);" data-prod="7033">Quick Shop</a>
                                <div class="product-attr pa ts__03 cw"></div>
                            </div>
                            <!-- .product-image -->
                            <div class="product-info mt__15">
                                <h3 class="product-title pr fs__14 mg__0 fwm"><a class="cd chp"
                                        href="/shop/munira-scarf-mscarf-laila-red-brown/">MUNIRA SCARF MSCARF
                                        LAILA RED BROWN</a></h3>
                                <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                class="woocommerce-Price-currencySymbol">Rp</span>&nbsp;239,000</bdi></span></span>
                            </div>
                            <!-- .product-info -->
                        </div>
                        <!-- .product-inner -->
                    </div>



                    <div
                        class="jas-col-md-3 jas-col-sm-4 jas-col-xs-6 mt__30 post-7028 product type-product status-publish has-post-thumbnail product_cat-munira product_cat-scarf  outofstock shipping-taxable purchasable product-type-simple">
                        <div class="product-inner pr">
                            <div class="product-image pr">
                                <div class="yith-wcwl-add-to-wishlist ts__03 mg__0 pa add-to-wishlist-7028">
                                    <div class="yith-wcwl-add-button show">
                                        <a href="/wishlist/" data-product-id="7028" data-product-type="simple"
                                            class="add_to_wishlist cw"><i class="fa fa-heart-o"></i></a><i
                                            class="fa fa-spinner fa-pulse ajax-loading pa" style="visibility:hidden"></i>
                                    </div>
                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;"><a
                                            class="chp" href="/wishlist/"><i class="fa fa-heart"></i></a></div>
                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none"><a
                                            href="/wishlist/" class="chp"><i class="fa fa-heart"></i></a></div>
                                </div> 
                                <div class="product-image-flip">
                                    <a href="/shop/munira-scarf-mscarf-laila-olive/"><img width="600" height="800"
                                            src="{{ asset('FE/wp-content/uploads/2023/08/LAILA-OL-WEB-1.jpg') }}"
                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                            alt="LAILA-OL-WEB-1" title="LAILA-OL-WEB-1" decoding="async" loading="lazy"
                                            srcset="{{ asset('FE/wp-content/uploads/2023/08/LAILA-OL-WEB-1.jpg') }} 600w, {{ asset('FE/wp-content/uploads/2023/08/LAILA-OL-WEB-1-225x300.jpg') }} 225w, {{ asset('FE/wp-content/uploads/2023/08/LAILA-OL-WEB-1-113x150.jpg') }} 113w, {{ asset('FE/wp-content/uploads/2023/08/LAILA-OL-WEB-1-570x760.jpg') }} 570w"
                                            sizes="auto, (max-width: 600px) 100vw, 600px"></a><a
                                        href="/shop/munira-scarf-mscarf-laila-olive/" class="db pa back"
                                        title="MUNIRA SCARF MSCARF LAILA OLIVE"><img width="600" height="800"
                                            src="{{ asset('FE/wp-content/uploads/2023/08/LAILA-OL-WEB-2.jpg') }}"
                                            class="attachment-shop_catalog size-shop_catalog" alt=""
                                            decoding="async" loading="lazy"
                                            srcset="{{ asset('FE/wp-content/uploads/2023/08/LAILA-OL-WEB-2.jpg') }} 600w, {{ asset('FE/wp-content/uploads/2023/08/LAILA-OL-WEB-2-225x300.jpg') }} 225w, {{ asset('FE/wp-content/uploads/2023/08/LAILA-OL-WEB-2-113x150.jpg') }} 113w, {{ asset('FE/wp-content/uploads/2023/08/LAILA-OL-WEB-2-570x760.jpg') }} 570w"
                                            sizes="auto, (max-width: 600px) 100vw, 600px"></a>
                                </div> <a class="btn-quickview pa cd br__40 pl__25 pr__25 bgw tc dib"
                                    href="javascript:void(0);" data-prod="7028">Quick Shop</a>
                                <div class="product-attr pa ts__03 cw"></div>
                            </div>
                            <!-- .product-image -->
                            <div class="product-info mt__15">
                                <h3 class="product-title pr fs__14 mg__0 fwm"><a class="cd chp"
                                        href="/shop/munira-scarf-mscarf-laila-olive/">MUNIRA SCARF MSCARF LAILA
                                        OLIVE</a></h3>
                                <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                class="woocommerce-Price-currencySymbol">Rp</span>&nbsp;239,000</bdi></span></span>
                            </div>
                            <!-- .product-info -->
                        </div>
                        <!-- .product-inner -->
                    </div>



                    <div
                        class="jas-col-md-3 jas-col-sm-4 jas-col-xs-6 mt__30 post-7023 product type-product status-publish has-post-thumbnail product_cat-munira product_cat-scarf last outofstock shipping-taxable purchasable product-type-simple">
                        <div class="product-inner pr">
                            <div class="product-image pr">
                                <div class="yith-wcwl-add-to-wishlist ts__03 mg__0 pa add-to-wishlist-7023">
                                    <div class="yith-wcwl-add-button show">
                                        <a href="/wishlist/" data-product-id="7023" data-product-type="simple"
                                            class="add_to_wishlist cw"><i class="fa fa-heart-o"></i></a><i
                                            class="fa fa-spinner fa-pulse ajax-loading pa" style="visibility:hidden"></i>
                                    </div>
                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;"><a
                                            class="chp" href="/wishlist/"><i class="fa fa-heart"></i></a></div>
                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none"><a
                                            href="/wishlist/" class="chp"><i class="fa fa-heart"></i></a></div>
                                </div> 
                                <div class="product-image-flip">
                                    <a href="/shop/munira-scarf-mscarf-laila-mocca/"><img width="600" height="800"
                                            src="{{ asset('FE/wp-content/uploads/2023/08/LAILA-MOC-WEB-2.jpg') }}"
                                            class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                            alt="LAILA-MOC-WEB-2" title="LAILA-MOC-WEB-2" decoding="async"
                                            loading="lazy"
                                            srcset="{{ asset('FE/wp-content/uploads/2023/08/LAILA-MOC-WEB-2.jpg') }} 600w, {{ asset('FE/wp-content/uploads/2023/08/LAILA-MOC-WEB-2-225x300.jpg') }} 225w, {{ asset('FE/wp-content/uploads/2023/08/LAILA-MOC-WEB-2-113x150.jpg') }} 113w, {{ asset('FE/wp-content/uploads/2023/08/LAILA-MOC-WEB-2-570x760.jpg') }} 570w"
                                            sizes="auto, (max-width: 600px) 100vw, 600px"></a><a
                                        href="/shop/munira-scarf-mscarf-laila-mocca/" class="db pa back"
                                        title="MUNIRA SCARF MSCARF LAILA MOCCA"><img width="600" height="800"
                                            src="{{ asset('FE/wp-content/uploads/2023/08/LAILA-MOC-WEB-3.jpg') }}"
                                            class="attachment-shop_catalog size-shop_catalog" alt=""
                                            decoding="async" loading="lazy"
                                            srcset="{{ asset('FE/wp-content/uploads/2023/08/LAILA-MOC-WEB-3.jpg') }} 600w, {{ asset('FE/wp-content/uploads/2023/08/LAILA-MOC-WEB-3-225x300.jpg') }} 225w, {{ asset('FE/wp-content/uploads/2023/08/LAILA-MOC-WEB-3-113x150.jpg') }} 113w, {{ asset('FE/wp-content/uploads/2023/08/LAILA-MOC-WEB-3-570x760.jpg') }} 570w"
                                            sizes="auto, (max-width: 600px) 100vw, 600px"></a>
                                </div> <a class="btn-quickview pa cd br__40 pl__25 pr__25 bgw tc dib"
                                    href="javascript:void(0);" data-prod="7023">Quick Shop</a>
                                <div class="product-attr pa ts__03 cw"></div>
                            </div>
                            <!-- .product-image -->
                            <div class="product-info mt__15">
                                <h3 class="product-title pr fs__14 mg__0 fwm"><a class="cd chp"
                                        href="/shop/munira-scarf-mscarf-laila-mocca/">MUNIRA SCARF MSCARF LAILA
                                        MOCCA</a></h3>
                                <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                class="woocommerce-Price-currencySymbol">Rp</span>&nbsp;239,000</bdi></span></span>
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
