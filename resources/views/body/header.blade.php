<header id="jas-header" class="header-3" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
    <div class="header__top bgbl  fs__12  pt__10 pb__10 pl__15 pr__15">
        <div class="jas-row middle-xs">
            <div class="jas-col-md-4 jas-col-sm-6 jas-col-xs-12 start-md start-sm center-xs">
                <div class="header-text">
                    <i class="pe-7s-call"></i> +62 813-1925-6407 <i class="pe-7s-mail ml__15"></i> <a class="cg"
                        href="mailto:sales@munira.co.id"><span
                            class="__cf_email__">sales@munira.co.id</span></a>
                </div>
            </div>
            <div class="jas-col-md-4 jas-col-sm-6 jas-col-xs-12 center-md end-sm center-xs">
                <div class="header-text">Nikmati koleksi <span class="cr">Terbaru</span>! <a href="shop/index.html">Shop
                        Now</a> </div>
            </div>
            <div class="jas-col-md-4 jas-col-sm-2 jas-col-xs-12 flex end-md hidden-sm hidden-xs">
            </div>
        </div>
        <!-- .jas-row -->
    </div>
    <!-- .header__top -->
    <div class="header__mid pl__15 pr__15">
        <div class="jas-row middle-xs">
            <div class="hide-md visible-sm visible-xs jas-col-sm-4 jas-col-xs-3 flex start-md flex">
                <a href="javascript:void(0);" class="jas-push-menu-btn hide-md visible-sm visible-xs">
                    <img src="{{ asset('FE/wp-content/themes/claue/assets/images/icons/hamburger-black.svg') }}" width="30"
                        height="16" alt="Menu"> </a>
            </div>
            <div class="jas-col-md-2 jas-col-sm-4 jas-col-xs-6 start-md center-sm center-xs">
                <div class="jas-branding ts__05"><a class="db" href="/"><img class="regular-logo"
                            src="{{ asset('FE/wp-content/uploads/2017/07/logo-munira.png') }}" width="181" height="36"
                            alt="Munira Hijab &amp; UKHTI Modest Fashion"><img class="retina-logo"
                            src="{{ asset('FE/wp-content/uploads/2017/07/logo-munira.png') }}" width="90.5" height="18"
                            alt="Munira Hijab &amp; UKHTI Modest Fashion"></a></div>
            </div>
            <div class="jas-col-md-8 hidden-sm hidden-xs">
                <nav class="jas-navigation flex center-xs">
                    <ul id="jas-menu" class="jas-menu clearfix">
                        <li id="menu-item-6507"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item current_page_item">
                            <a href="{{ route('home')}}">HOME</a></li>
                        <li id="menu-item-5754"
                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children">
                            <a href="product-category/munira/">MUNIRA</a>
                            <ul class="sub-menu">
                                <li id="menu-item-6205"
                                    class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                        href="product-category/bergo/index.html">BERGO</a></li>
                                <li id="menu-item-6206"
                                    class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                        href="product-category/khimar/index.html">KHIMAR</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-5755"
                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat"><a
                                href="product-category/ukhti/">UKHTI</a></li>
                    </ul>
                </nav><!-- .jas-navigation -->
            </div>
        </div>
        <!-- .jas-row -->
    </div>
    <!-- .header__mid -->
    <form class="header__search w__100 dn pf" role="search" method="get" action="/" itemprop="potentialAction"
        itemscope="itemscope" itemtype="http://schema.org/SearchAction">
        <div class="pa">
            <input class="w__100 jas-ajax-search" type="text" name="s" placeholder="Search for...">
            <input type="hidden" name="post_type" value="product">
        </div>
        <a id="sf-close" class="pa" href="#"><i class="pe-7s-close"></i></a>
    </form>
    <!-- #header__search -->

    <div class="jas-canvas-menu jas-push-menu">
        <h3 class="mg__0 tc cw bgb tu ls__2">Menu <i class="close-menu pe-7s-close pa"></i>
        </h3>
        <div class="hide-md visible-sm visible-xs center-xs mt__30 flex tc">
        </div>
        <div class="jas-action flex center-xs middle-xs hide-md hidden-sm visible-xs mt__30">
            <a class="sf-open cb chp" href="javascript:void(0);"><i class="pe-7s-search"></i></a>
            <a class="cb chp db jas-my-account" href="my-account/"><i class="pe-7s-user"></i></a><a
                class="cb chp wishlist-icon" href="/wishlist/"><i class="pe-7s-like"></i></a>
        </div>
        <!-- .jas-action -->
        <div id="jas-mobile-menu" class="menu-main-menu-container">
            <ul id="menu-main-menu" class="menu">
                <li
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item current_page_item active">
                    <a href="{{ route('home')}}"><span>HOME</span></a></li>
                <li
                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children has-sub">
                    <a href="product-category/munira/"><span>MUNIRA</span></a>
                    <ul>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                href="product-category/bergo/"><span>BERGO</span></a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                href="product-category/khimar/"><span>KHIMAR</span></a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                href="product-category/scarf/"><span>SCARF</span></a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                href="product-category/pashmina/"><span>PASHMINA</span></a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                href="product-category/mukena/"><span>MUKENA</span></a></li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat"><a
                        href="product-category/ukhti/"><span>UKHTI</span></a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a
                        href="product-category/um-men/"><span>UM MEN</span></a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a
                        href="product-category/sale/"><span>SALE</span></a></li>
            </ul>
        </div>
    </div>
    <!-- .jas-canvas-menu -->


    <div class="jas-mini-cart jas-push-menu">
        <div class="jas-mini-cart-content">
            <h3 class="mg__0 tc cw bgb tu ls__2">Mini Cart <i class="close-cart pe-7s-close pa"></i>
            </h3>
            <div class="widget_shopping_cart_content"></div>
        </div>
    </div>
    <!-- .jas-mini-cart -->
</header><!-- #jas-header -->

<div class="shop-top-sidebar">
    <aside id="woocommerce_product_categories-4" class="widget woocommerce widget_product_categories">
        <ul class="product-categories">
            <li class="cat-item cat-item-168"><a href="product-category/bergo/">BERGO</a></li>
            <li class="cat-item cat-item-169"><a href="product-category/khimar/">KHIMAR</a></li>
            <li class="cat-item cat-item-172"><a href="product-category/mukena/">MUKENA</a></li>
            <li class="cat-item cat-item-163"><a href="product-category/munira/">MUNIRA</a></li>
            <li class="cat-item cat-item-171"><a href="product-category/pashmina/">PASHMINA</a></li>
            <li class="cat-item cat-item-166"><a href="product-category/sale/">SALE</a></li>
            <li class="cat-item cat-item-170"><a href="product-category/scarf/">SCARF</a></li>
            <li class="cat-item cat-item-164"><a href="product-category/ukhti/">UKHTI</a></li>
            <li class="cat-item cat-item-167"><a href="product-category/um-men/">UM MEN</a></li>
            <li class="cat-item cat-item-165"><a href="product-category/uncategorized/">Uncategorized</a></li>
        </ul>
    </aside>
</div>