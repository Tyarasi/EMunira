@extends('master')

@section('home_content')
    <div id="jas-content" bis_skin_checked="1">
        <div class="page-head pr tc"
            style="background: url(https://www.munira.co.id {{ asset('FE/wp-content/uploads/2017/07/img-63.png') }} no-repeat center center / cover;"
            bis_skin_checked="1">
            <div class="jas-container pr" bis_skin_checked="1">
                <h1 class="tu mb__10 cw" itemprop="headline">Checkout</h1>
                <p>Mohon isi semua Data dengan benar. Terima kasih telah berbelanja.</p>
            </div>
        </div>

        <div class="jas-container" bis_skin_checked="1">
            <div class="jas-row jas-page" bis_skin_checked="1">
                <div class="jas-col-md-12 jas-col-xs-12 mt__60 mb__60" role="main" itemscope="itemscope"
                    itemtype="http://schema.org/CreativeWork" bis_skin_checked="1">
                    <div class="woocommerce" bis_skin_checked="1">
                        <div class="woocommerce-notices-wrapper" bis_skin_checked="1"></div>
                        <div class="woocommerce-form-coupon-toggle" bis_skin_checked="1">

                            <div class="woocommerce-info" bis_skin_checked="1">
                                Have a coupon? <a href="https://www.munira.co.id/checkout/#" class="showcoupon">Click here
                                    to enter your code</a> </div>
                        </div>

                        <form class="checkout_coupon woocommerce-form-coupon" method="post" style="display:none">

                            <p>If you have a coupon code, please apply it below.</p>

                            <p class="form-row form-row-first">
                                <label for="coupon_code" class="screen-reader-text">Coupon:</label>
                                <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code"
                                    id="coupon_code" value="">
                            </p>

                            <p class="form-row form-row-last">
                                <button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply
                                    coupon</button>
                            </p>

                            <div class="clear" bis_skin_checked="1"></div>
                        </form>
                        <div class="woocommerce-notices-wrapper" bis_skin_checked="1"></div>
                        <form name="checkout" method="post" class="checkout woocommerce-checkout jas-row mt__60 mb__60"
                            action="https://www.munira.co.id/checkout/" enctype="multipart/form-data"
                            novalidate="novalidate">


                            <div class="jas-col-md-6 jas-col-sm-6 jas-col-xs-12" bis_skin_checked="1">

                                <div id="customer_details" bis_skin_checked="1">
                                    <div class="woocommerce-billing-fields" bis_skin_checked="1">

                                        <h3>Billing Details</h3>



                                        <div class="woocommerce-billing-fields__field-wrapper" bis_skin_checked="1">
                                            <p class="form-row form-row-first validate-required"
                                                id="billing_first_name_field" data-priority="10"><label
                                                    for="billing_first_name" class="">First name&nbsp;<abbr
                                                        class="required" title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><input type="text"
                                                        class="input-text " name="billing_first_name"
                                                        id="billing_first_name" placeholder="" value="Safri"
                                                        autocomplete="given-name"></span></p>
                                            <p class="form-row form-row-last validate-required" id="billing_last_name_field"
                                                data-priority="20"><label for="billing_last_name" class="">Last
                                                    name&nbsp;<abbr class="required" title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><input type="text"
                                                        class="input-text " name="billing_last_name" id="billing_last_name"
                                                        placeholder="" value="Helmi" autocomplete="family-name"></span></p>
                                            <p class="form-row form-row-wide" id="billing_company_field" data-priority="30">
                                                <label for="billing_company" class="">Company
                                                    name&nbsp;<span class="optional">(optional)</span></label><span
                                                    class="woocommerce-input-wrapper"><input type="text"
                                                        class="input-text " name="billing_company" id="billing_company"
                                                        placeholder="" value="" autocomplete="organization"></span>
                                            </p>
                                            <p class="form-row form-row-wide address-field validate-required woocommerce-validated"
                                                id="billing_country_field" data-priority="40"><label
                                                    for="billing_country" class="">Country / Region&nbsp;<abbr
                                                        class="required" title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><select name="billing_country"
                                                        id="billing_country"
                                                        class="country_to_state country_select select2-hidden-accessible"
                                                        autocomplete="country"
                                                        data-placeholder="Select a country / region…"
                                                        data-label="Country / Region" tabindex="-1" aria-hidden="true">
                                                        <option value="">Select a country / region…</option>
                                                        <option value="AU">Australia</option>
                                                        <option value="HK">Hong Kong</option>
                                                        <option value="ID">Indonesia</option>
                                                        <option value="MY">Malaysia</option>
                                                        <option value="SG">Singapore</option>
                                                    </select>
                                                </p>

                                            <p class="form-row address-field validate-required validate-state woocommerce-validated form-row-wide"
                                                id="billing_state_field" data-priority="50"
                                                data-o_class="form-row form-row-wide address-field validate-required validate-state">
                                                <label for="billing_state" class="">Province&nbsp;<abbr
                                                        class="required" title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><select name="billing_state"
                                                        id="billing_state" class="state_select select2-hidden-accessible"
                                                        autocomplete="address-level1" data-placeholder="Pilih Provinsi"
                                                        data-input-classes="" data-label="Provinsi" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="">Select an option…</option>
                                                        <option value="AC">Daerah Istimewa Aceh</option>
                                                        <option value="SU">Sumatera Utara</option>
                                                        <option value="SB">Sumatera Barat</option>
                                                        <option value="RI">Riau</option>
                                                        <option value="KR">Kepulauan Riau</option>
                                                        <option value="JA">Jambi</option>
                                                        <option value="SS">Sumatera Selatan</option>
                                                        <option value="BB">Bangka Belitung</option>
                                                        <option value="BE">Bengkulu</option>
                                                        <option value="LA">Lampung</option>
                                                        <option value="JK">DKI Jakarta</option>
                                                        <option value="JB">Jawa Barat</option>
                                                        <option value="BT">Banten</option>
                                                        <option value="JT">Jawa Tengah</option>
                                                        <option value="JI">Jawa Timur</option>
                                                        <option value="YO">Daerah Istimewa Yogyakarta</option>
                                                        <option value="BA">Bali</option>
                                                        <option value="NB">Nusa Tenggara Barat</option>
                                                        <option value="NT">Nusa Tenggara Timur</option>
                                                        <option value="KB">Kalimantan Barat</option>
                                                        <option value="KT">Kalimantan Tengah</option>
                                                        <option value="KI">Kalimantan Timur</option>
                                                        <option value="KS">Kalimantan Selatan</option>
                                                        <option value="KU">Kalimantan Utara</option>
                                                        <option value="SA">Sulawesi Utara</option>
                                                        <option value="ST">Sulawesi Tengah</option>
                                                        <option value="SG">Sulawesi Tenggara</option>
                                                        <option value="SR">Sulawesi Barat</option>
                                                        <option value="SN">Sulawesi Selatan</option>
                                                        <option value="GO">Gorontalo</option>
                                                        <option value="MA">Maluku</option>
                                                        <option value="MU">Maluku Utara</option>
                                                        <option value="PA">Papua</option>
                                                        <option value="PB">Papua Barat</option>
                                                    </select>
                                                
                                            </p>
                                            <p class="form-row validate-required address-field form-row-wide woocommerce-validated"
                                                id="billing_city_field" data-priority="60"
                                                data-o_class="form-row validate-required"><label for="billing_city"
                                                    class="">Town / City&nbsp;<abbr class="required"
                                                        title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><select name="billing_city"
                                                        id="billing_city" class="select select2-hidden-accessible"
                                                        data-allow_clear="true" data-placeholder="Pilih Kota / Kabupaten"
                                                        tabindex="-1" aria-hidden="true">
                                                        <option value="0">Pilih Kota</option>
                                                        <option value="150">SOREANG,KAB.BANDUNG</option>
                                                        <option value="151">BANDUNG BARAT</option>
                                                        <option value="152">BEKASI</option>
                                                        <option value="153">BOGOR</option>
                                                        <option value="154">CIAMIS, KAB.CIAMIS</option>
                                                        <option value="155">CIANJUR,KAB.CIANJUR</option>
                                                        <option value="156">CIREBON</option>
                                                        <option value="157">GARUT, KAB.GARUT</option>
                                                        <option value="158">INDRAMAYU</option>
                                                        <option value="159">KARAWANG</option>
                                                        <option value="160">KUNINGAN, KAB KUNINGAN</option>
                                                        <option value="161">MAJALENGKA, KAB MAJALENGKA</option>
                                                        <option value="162">PURWAKARTA,KAB.PURWAKARTA</option>
                                                        <option value="163">SUBANG,KAB.SUBANG</option>
                                                        <option value="164">SUKABUMI</option>
                                                        <option value="165">SUMEDANG</option>
                                                        <option value="166">TASIKMALAYA</option>
                                                        <option value="167">BANDUNG</option>
                                                        <option value="168">BANJAR</option>
                                                        <option value="169">CIMAHI</option>
                                                        <option value="170">DEPOK</option>
                                                        <option value="496">CIBINONG,KAB.BOGOR</option>
                                                        <option value="498">CIKARANG,KAB.BEKASI</option>
                                                        <option value="637">SUMBER, KAB CIREBON</option>
                                                        <option value="646">SINGAPARNA,KAB.TASIKMALAYA</option>
                                                        <option value="730">PANGANDARAN</option>
                                                    </select>
                                                    
                                            </p>
                                            <p class="form-row form-row-wide address-field update_totals_on_change validate-required"
                                                id="billing_district_field" data-priority="70"><label
                                                    for="billing_district" class="">Kecamatan&nbsp;<abbr
                                                        class="required" title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><select name="billing_district"
                                                        id="billing_district" class="select select2-hidden-accessible"
                                                        data-allow_clear="true" data-placeholder="Pilih Kecamatan"
                                                        tabindex="-1" aria-hidden="true" disabled="">
                                                        <option value="0">Pilih Kecamatan</option>
                                                    </select>
                                                    <span
                                                        class="select2 select2-container select2-container--default select2-container--disabled"
                                                        dir="ltr" style="width: 158px;">
                                                        <span
                                                            class="selection">
                                                            <span
                                                                class="select2-selection select2-selection--single"
                                                                aria-haspopup="true" aria-expanded="false" tabindex="-1"
                                                                aria-labelledby="select2-billing_district-container"
                                                                role="combobox">
                                                               
                                                            </span>
                                                        </span>
                                                        <span
                                                            class="dropdown-wrapper"
                                                            aria-hidden="true">
                                                        </span>
                                                    </span>
                                                </span>
                                            </p>
                                            <p class="form-row address-field validate-required form-row-wide"
                                                id="billing_address_1_field" data-priority="80"><label
                                                    for="billing_address_1" class="">Street address&nbsp;<abbr
                                                        class="required" title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><input type="text"
                                                        class="input-text " name="billing_address_1"
                                                        id="billing_address_1" placeholder="House number and street name"
                                                        value="Permata Puri 2 Blok BB1/12A" autocomplete="address-line1"
                                                        data-placeholder="House number and street name"></span></p>
                                            <p class="form-row address-field form-row-wide" id="billing_address_2_field"
                                                data-priority="90"><label for="billing_address_2"
                                                    class="screen-reader-text">Apartment,
                                                    suite, unit, etc.&nbsp;<span
                                                        class="optional">(optional)</span></label><span
                                                    class="woocommerce-input-wrapper"><input type="text"
                                                        class="input-text " name="billing_address_2"
                                                        id="billing_address_2"
                                                        placeholder="Apartment, suite, unit, etc. (optional)"
                                                        value="Cimanggis" autocomplete="address-line2"
                                                        data-placeholder="Apartment, suite, unit, etc. (optional)"></span>
                                            </p>
                                            <p class="form-row address-field validate-required validate-postcode form-row-wide"
                                                id="billing_postcode_field" data-priority="100"
                                                data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
                                                <label for="billing_postcode" class="">Postcode / ZIP&nbsp;<abbr
                                                        class="required" title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><input type="text"
                                                        class="input-text " name="billing_postcode" id="billing_postcode"
                                                        placeholder="" value="16452" autocomplete="postal-code"></span>
                                            </p>
                                            <p class="form-row form-row-wide validate-required validate-phone"
                                                id="billing_phone_field" data-priority="110"><label for="billing_phone"
                                                    class="">Phone&nbsp;<abbr class="required"
                                                        title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><input type="tel"
                                                        class="input-text " name="billing_phone" id="billing_phone"
                                                        placeholder="" value="0816717303" autocomplete="tel"></span>
                                            </p>
                                            <p class="form-row form-row-wide validate-required validate-email"
                                                id="billing_email_field" data-priority="120"><label for="billing_email"
                                                    class="">Email address&nbsp;<abbr class="required"
                                                        title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><input type="email"
                                                        class="input-text " name="billing_email" id="billing_email"
                                                        placeholder="" value="apinpp2@yahoo.com"
                                                        autocomplete="email username"></span></p>
                                        </div>

                                    </div>


                                    <div class="woocommerce-shipping-fields" bis_skin_checked="1">


                                        <h3 id="ship-to-different-address" class="pr style-checkbox">
                                            <input id="ship-to-different-address-checkbox" class="input-checkbox"
                                                type="checkbox" name="ship_to_different_address" value="1">
                                            <label for="ship-to-different-address-checkbox"
                                                class="checkbox"></label><span>Ship to a different address?</span>
                                        </h3>

                                        <div class="shipping_address" style="display: none;" bis_skin_checked="1">



                                            <p class="form-row form-row-first validate-required"
                                                id="shipping_first_name_field" data-priority="10"><label
                                                    for="shipping_first_name" class="">First name&nbsp;<abbr
                                                        class="required" title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><input type="text"
                                                        class="input-text " name="shipping_first_name"
                                                        id="shipping_first_name" placeholder="" value=""
                                                        autocomplete="given-name"></span></p>

                                            <p class="form-row form-row-last validate-required"
                                                id="shipping_last_name_field" data-priority="20"><label
                                                    for="shipping_last_name" class="">Last name&nbsp;<abbr
                                                        class="required" title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><input type="text"
                                                        class="input-text " name="shipping_last_name"
                                                        id="shipping_last_name" placeholder="" value=""
                                                        autocomplete="family-name"></span></p>

                                            <p class="form-row form-row-wide" id="shipping_company_field"
                                                data-priority="30"><label for="shipping_company" class="">Company
                                                    name&nbsp;<span class="optional">(optional)</span></label><span
                                                    class="woocommerce-input-wrapper"><input type="text"
                                                        class="input-text " name="shipping_company" id="shipping_company"
                                                        placeholder="" value="" autocomplete="organization"></span>
                                            </p>

                                            <p class="form-row form-row-wide address-field validate-required woocommerce-validated"
                                                id="shipping_country_field" data-priority="40"><label
                                                    for="shipping_country" class="">Country / Region&nbsp;<abbr
                                                        class="required" title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><select name="shipping_country"
                                                        id="shipping_country"
                                                        class="country_to_state country_select select2-hidden-accessible"
                                                        autocomplete="country"
                                                        data-placeholder="Select a country / region…"
                                                        data-label="Country / Region" tabindex="-1" aria-hidden="true">
                                                        <option value="">Select a country / region…</option>
                                                        <option value="AU">Australia</option>
                                                        <option value="HK">Hong Kong</option>
                                                        <option value="ID" selected="selected">Indonesia</option>
                                                        <option value="MY">Malaysia</option>
                                                        <option value="SG">Singapore</option>
                                                    </select>
                                                    <span class="select2 select2-container select2-container--default"dir="ltr" style="width: 100%;">
                                                        <span class="selection">
                                                            <span class="select2-selection select2-selection--single"aria-haspopup="true" aria-expanded="false" tabindex="0" aria-label="Country / Region" role="combobox">
                                                                <span class="select2-selection__rendered"id="select2-shipping_country-container" role="textbox" aria-readonly="true"title="Indonesia">Indonesia</span>
                                                                <span class="select2-selection__arrow" role="presentation">
                                                                    <b role="presentation"></b>
                                                                </span>
                                                            </span>
                                                        </span>
                                                        <span class="dropdown-wrapper"aria-hidden="true"></span>
                                                    </span>
                                                    <noscript><button type="submit" name="woocommerce_checkout_update_totals"value="Update country / region">Update country /region</button>
                                                    </noscript>
                                                </span>
                                            </p>

                                            <p class="form-row address-field validate-required validate-state woocommerce-validated form-row-wide"
                                                id="shipping_state_field" data-priority="50"
                                                data-o_class="form-row form-row-wide address-field validate-required validate-state">
                                                <label for="shipping_state" class="">Province&nbsp;<abbr
                                                        class="required" title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><select name="shipping_state"
                                                        id="shipping_state" class="state_select select2-hidden-accessible"
                                                        autocomplete="address-level1" data-placeholder="Pilih Provinsi"
                                                        data-input-classes="" data-label="Provinsi" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="">Select an option…</option>
                                                        <option value="AC">Daerah Istimewa Aceh</option>
                                                        <option value="SU">Sumatera Utara</option>
                                                        <option value="SB">Sumatera Barat</option>
                                                        <option value="RI">Riau</option>
                                                        <option value="KR">Kepulauan Riau</option>
                                                        <option value="JA">Jambi</option>
                                                        <option value="SS">Sumatera Selatan</option>
                                                        <option value="BB">Bangka Belitung</option>
                                                        <option value="BE">Bengkulu</option>
                                                        <option value="LA">Lampung</option>
                                                        <option value="JK">DKI Jakarta</option>
                                                        <option value="JB">Jawa Barat</option>
                                                        <option value="BT">Banten</option>
                                                        <option value="JT">Jawa Tengah</option>
                                                        <option value="JI">Jawa Timur</option>
                                                        <option value="YO">Daerah Istimewa Yogyakarta</option>
                                                        <option value="BA">Bali</option>
                                                        <option value="NB">Nusa Tenggara Barat</option>
                                                        <option value="NT">Nusa Tenggara Timur</option>
                                                        <option value="KB">Kalimantan Barat</option>
                                                        <option value="KT">Kalimantan Tengah</option>
                                                        <option value="KI">Kalimantan Timur</option>
                                                        <option value="KS">Kalimantan Selatan</option>
                                                        <option value="KU">Kalimantan Utara</option>
                                                        <option value="SA">Sulawesi Utara</option>
                                                        <option value="ST">Sulawesi Tengah</option>
                                                        <option value="SG">Sulawesi Tenggara</option>
                                                        <option value="SR">Sulawesi Barat</option>
                                                        <option value="SN">Sulawesi Selatan</option>
                                                        <option value="GO">Gorontalo</option>
                                                        <option value="MA">Maluku</option>
                                                        <option value="MU">Maluku Utara</option>
                                                        <option value="PA">Papua</option>
                                                        <option value="PB">Papua Barat</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--default"
                                                        dir="ltr" style="width: 100%;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single"
                                                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                                aria-label="Provinsi" role="combobox"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-shipping_state-container" role="textbox"
                                                                    aria-readonly="true" title="DKI Jakarta">DKI
                                                                    Jakarta</span><span class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper"
                                                            aria-hidden="true"></span></span></span>
                                            </p>

                                            <p class="form-row validate-required address-field form-row-wide"
                                                id="shipping_city_field" data-priority="60"
                                                data-o_class="form-row validate-required"><label for="shipping_city"
                                                    class="">Town / City&nbsp;<abbr class="required"
                                                        title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><select name="shipping_city"
                                                        id="shipping_city" class="select select2-hidden-accessible"
                                                        data-allow_clear="true" data-placeholder="Pilih Kota / Kabupaten"
                                                        tabindex="-1" aria-hidden="true">
                                                        <option value="0">Pilih Kota</option>
                                                        <option value="171">JAKARTA BARAT</option>
                                                        <option value="172">JAKARTA SELATAN</option>
                                                        <option value="173">JAKARTA PUSAT</option>
                                                        <option value="174">JAKARTA UTARA</option>
                                                        <option value="175">JAKARTA TIMUR</option>
                                                        <option value="176">PULAU PRAMUKA</option>
                                                        <option value="510">JAKARTA</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--default"
                                                        dir="ltr" style="width: auto;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single"
                                                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                                aria-labelledby="select2-shipping_city-container"
                                                                role="combobox"><span class="select2-selection__rendered"
                                                                    id="select2-shipping_city-container" role="textbox"
                                                                    aria-readonly="true" title="Pilih Kota">Pilih
                                                                    Kota</span><span class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper"
                                                            aria-hidden="true"></span></span><input type="text"
                                                        class="input-text " name="shipping_city_text"
                                                        id="shipping_city_text" placeholder="" value=""
                                                        autocomplete="address-level2" style="display: none;"></span>
                                            </p>

                                            <p class="form-row form-row-wide address-field update_totals_on_change validate-required"
                                                id="shipping_district_field" data-priority="70"><label
                                                    for="shipping_district" class="">Kecamatan&nbsp;<abbr
                                                        class="required" title="required">*</abbr></label>
                                                        <span
                                                    class="woocommerce-input-wrapper">
                                                    <select name="shipping_district"
                                                        id="shipping_district" class="select select2-hidden-accessible"
                                                        data-allow_clear="true" data-placeholder="Pilih Kecamatan"
                                                        tabindex="-1" aria-hidden="true" disabled="">
                                                        <option value="0">Pilih Kecamatan</option>
                                                        <option value="0">Pilih Kecamatan</option>
                                                        <option value="0">Pilih Kecamatan</option>
                                                        <option value="0">Pilih Kecamatan</option>
                                                        <option value="0">Pilih Kecamatan</option>
                                                        <option value="0">Pilih Kecamatan</option>
                                                    </select>
                                                    
                                                </span>
                                            </p>

                                            <p class="form-row address-field validate-required form-row-wide"
                                                id="shipping_address_1_field" data-priority="80"><label
                                                    for="shipping_address_1" class="">Street address&nbsp;<abbr
                                                        class="required" title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><input type="text"
                                                        class="input-text " name="shipping_address_1"
                                                        id="shipping_address_1" placeholder="House number and street name"
                                                        value="" autocomplete="address-line1"
                                                        data-placeholder="House number and street name"></span></p>

                                            <p class="form-row address-field form-row-wide" id="shipping_address_2_field"
                                                data-priority="90"><label for="shipping_address_2"
                                                    class="screen-reader-text">Apartment,
                                                    suite, unit, etc.&nbsp;<span
                                                        class="optional">(optional)</span></label><span
                                                    class="woocommerce-input-wrapper"><input type="text"
                                                        class="input-text " name="shipping_address_2"
                                                        id="shipping_address_2"
                                                        placeholder="Apartment, suite, unit, etc. (optional)"
                                                        value="" autocomplete="address-line2"
                                                        data-placeholder="Apartment, suite, unit, etc. (optional)"></span>
                                            </p>

                                            <p class="form-row address-field validate-required validate-postcode form-row-wide"
                                                id="shipping_postcode_field" data-priority="100"
                                                data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
                                                <label for="shipping_postcode" class="">Postcode / ZIP&nbsp;<abbr
                                                        class="required" title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><input type="text"
                                                        class="input-text " name="shipping_postcode"
                                                        id="shipping_postcode" placeholder="" value=""
                                                        autocomplete="postal-code"></span>
                                            </p>


                                        </div>






                                        <p class="form-row notes" id="order_comments_field" data-priority=""><label
                                                for="order_comments" class="">Order notes&nbsp;<span
                                                    class="optional">(optional)</span></label><span
                                                class="woocommerce-input-wrapper">
                                                <textarea name="order_comments" class="input-text " id="order_comments"
                                                    placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea>
                                            </span></p>


                                    </div>
                                </div>

                            </div>


                            <div class="jas-col-md-6 jas-col-sm-6 jas-col-xs-12" bis_skin_checked="1">
                                <h3 id="order_review_heading">Your order</h3>


                                <div id="order_review" class="woocommerce-checkout-review-order" bis_skin_checked="1">

                                    <table class="shop_table woocommerce-checkout-review-order-table">
                                        <thead>
                                            <tr>
                                                <th class="product-thumb">Product</th>
                                                <th class="product-name"></th>
                                                <th class="product-total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="cart_item">
                                                <td class="product-thumb">
                                                    <a href="https://www.munira.co.id/shop/munira-khimar-hermosa-milo/"><img
                                                            width="570" height="760"
                                                            src="{{ asset('FE/wp-content/uploads/2023/08/LATIFA-BIR-WEB-4.jpg') }}"
                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                            alt="" decoding="async" loading="lazy"
                                                            srcset="{{ asset('FE/wp-content/uploads/2023/08/LATIFA-BIR-WEB-4.jpg') }} 570w, {{ asset('FE/wp-content/uploads/2023/08/LATIFA-BIR-WEB-4.jpg') }} 225w, {{ asset('FE/wp-content/uploads/2023/08/LATIFA-BIR-WEB-4.jpg') }} 113w, {{ asset('FE/wp-content/uploads/2023/08/LATIFA-BIR-WEB-4.jpg') }} 600w"
                                                            sizes="auto, (max-width: 570px) 100vw, 570px"></a>
                                                </td>
                                                <td class="item-name">
                                                    MUNIRA SCRAF MSCARF LATIFA BIRU&nbsp; <strong
                                                        class="product-quantity">×
                                                        1</strong> </td>
                                                <td class="product-total">
                                                    <span class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">Rp</span>&nbsp;239,000</bdi></span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="product-name">
                                                    Berat Pengiriman </td>
                                                <td class="product-total">
                                                    1 Kg
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>

                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td colspan="2"><span
                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">Rp</span>&nbsp;239,000</bdi></span>
                                                </td>
                                            </tr>




                                            <tr class="woocommerce-shipping-totals shipping">
                                                <th>Shipping</th>
                                                <td data-title="Shipping">
                                                    Enter your address to view shipping options.

                                                </td>
                                            </tr>






                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td colspan="2"><strong><span
                                                            class="woocommerce-Price-amount amount"><bdi><span
                                                                    class="woocommerce-Price-currencySymbol">Rp</span>&nbsp;239,000</bdi></span></strong>
                                                </td>
                                            </tr>


                                        </tfoot>
                                    </table>

                                    <div id="payment" class="woocommerce-checkout-payment" bis_skin_checked="1">
                                        <ul class="wc_payment_methods payment_methods methods">
                                            <li class="wc_payment_method payment_method_midtrans">
                                                <input id="payment_method_midtrans" type="radio" class="input-radio"
                                                    name="payment_method" value="midtrans" checked="checked"
                                                    data-order_button_text="" style="display: none;">

                                                <label for="payment_method_midtrans">
                                                    All Supported Payment <img
                                                        src="/Checkout – Munira Hijab &amp; UKHTI Modest Fashion_files/midtrans.png"
                                                        alt="Midtrans"
                                                        style="max-height: 2em; max-width: 4em; background-color: #ffffffdd; padding: 0.2em 0.3em; border-radius: 0.3em; border: 0.5px solid #ccccccdd;">
                                                </label>
                                                <div class="payment_box payment_method_midtrans" bis_skin_checked="1">
                                                    <p>Accept all various supported payment methods. Choose your
                                                        preferred payment on the next page. Secure payment via
                                                        Midtrans.</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="form-row place-order" bis_skin_checked="1">
                                            <noscript>
                                                Since your browser does not support JavaScript, or it is disabled,
                                                please ensure you click the <em>Update Totals</em> button before
                                                placing your order. You may be charged more than the amount stated
                                                above if you fail to do so. <br /><button type="submit"
                                                    class="button alt" name="woocommerce_checkout_update_totals"
                                                    value="Update totals">Update totals</button>
                                            </noscript>

                                            <p class="form-row terms wc-terms-and-conditions pr style-checkbox">
                                                <input type="checkbox" class="input-checkbox" name="terms"
                                                    id="terms">
                                                <label for="terms" class="checkbox"></label><span>I’ve read and
                                                    accept the <a
                                                        href="https://www.munira.co.id/bergabung-menjadi-agen-reseller/"
                                                        target="_blank">terms &amp; conditions</a></span> <span
                                                    class="required">*</span>
                                                <input type="hidden" name="terms-field" value="1">
                                            </p>


                                            <button type="submit" class="button alt"
                                                name="woocommerce_checkout_place_order" id="place_order"
                                                value="Place order" data-value="Place order">Place order</button>

                                            <input type="hidden" id="woocommerce-process-checkout-nonce"
                                                name="woocommerce-process-checkout-nonce" value="a05f900680"><input
                                                type="hidden" name="_wp_http_referer"
                                                value="/?wc-ajax=update_order_review">
                                        </div>
                                    </div>


                                </div>

                            </div>
                            <input type="hidden" name="pys_utm"
                                value="utm_source:undefined|utm_medium:undefined|utm_campaign:undefined|utm_term:undefined|utm_content:undefined">
                            <input type="hidden" name="pys_utm_id"
                                value="fbadid:undefined|gadid:undefined|padid:undefined|bingid:undefined"> <input
                                type="hidden" name="pys_browser_time" value="22-23|Saturday|March"> <input
                                type="hidden" name="pys_landing" value="https://www.munira.co.id/"> <input
                                type="hidden" name="pys_source" value="direct"> <input type="hidden"
                                name="pys_order_type" value="normal"> <input type="hidden" name="last_pys_landing"
                                value="https://www.munira.co.id/shop/munira-khimar-syahla/"> <input type="hidden"
                                name="last_pys_source" value="direct"> <input type="hidden" name="last_pys_utm"
                                value="utm_source:undefined|utm_medium:undefined|utm_campaign:undefined|utm_term:undefined|utm_content:undefined">
                            <input type="hidden" name="last_pys_utm_id"
                                value="fbadid:undefined|gadid:undefined|padid:undefined|bingid:undefined">
                        </form>

                    </div>
                </div><!-- $classes -->

            </div><!-- .jas-row -->
        </div>
    </div>
@endsection
