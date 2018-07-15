 @extends('client.main') 

 @section('styles')

<link rel="stylesheet" href="{{URL::asset('/front-end/css/buy_item.css')}}">
<style>
    .image_slider {
        height: 13em !important;
        border: 0.04em solid #8a8a8a;
        width: 100% !important;
    }

    .image_thum {
        left: -4em !important;
        width: auto !important;
        height: 4.1em !important;
    }

    a:hover {
        color: inherit;
        text-decoration: none;
    }

    a {
        color: inherit;
        text-decoration: none;

    }

    .div_item .rating .star::after {
        color: #d80001;
        width: 0.75em;
        height: 1.7em;
    }

    .div_item .rating .star::before {
        color: #d80001;
        width: 0.75em;
        height: 0.7em;
    }

    a:click {
        color: inherit;
        text-decoration: none;
    }

    .sub-paragraph {
        background-color: #00000044;
        position: relative;
        bottom: 31px;
        font-size: 0.9em;
        color: #fff;
        max-height: 2em;
    }
    .buttons {
        margin: 5px 0;
    }

    button {
        font-size: 14px;
        display: inline;
        padding: 3px 6px;
        border: 2px solid #d80f16;
        background: #fff;
        border-radius: 5px;
        outline: none;
    }

    button:hover {
        border: 2px solid #888;
        background: #ffe;
        cursor: pointer;
    }

    #carouselWrapper {
        position: relative;
        overflow: hidden;
        height: 350px !important;
    }

    #carousel {
        position: absolute;
        visibility: hidden;
    }

    .slider {
        cursor: default;
        position: relative;
        top: 0px;
        left: 240px;
        width: 850px;
        height: 200px;
        overflow: hidden;
    }

    .pictureFrame {
        height: 86px !important;
    }

    .line_category {
        width: 74%;
        margin-top: 0.1em;
        float: right;
    }

    .text_price {
        width: 16%;
    }

    .line_price {
        width: 84%;
        float: right;
    }

    .block_thum,
    .pictureFrame {
        width: 115px !important;
        height: 92px !important;
    }

    #carouselWrapper,
    #carousel {
        width: 110px !important;
    }
    .header_slider{
            width: 900px !important;
        }
        .input-search_icon i {
    margin-right: 1em;
}
    @media (min-width: 768px) and (max-width: 1100px) {
        .div_item .rating {
            bottom: 0.2em;
            left: 0.6em;
        }
        .text_price {
            width: 24%;
        }
        .text_discount{
            width: 6em;
            left: -1em;
        }
        .line_price {
            width: 76%;
            margin-top: 1em;
        }
        #carouselWrapper {
            height: 38em !important;
        }
        .select-menu .select-label {
            height: 63px;
        }
        .select-menu .select-label:before {
            font-size: 26px !important;
        }
        .lable_input_filter {
            width: 24%;
            font-size: 2em;
            margin-top: 1em;
        }

        .modal_filter {
            width: 55%;
            margin-left: 24%;
            max-height: 100%;
            padding-top: 57%;
        }
        .block_slider {
            height: 250px;

        }
        .img_item {
            height: auto;
            width:100%;
        }
        .text_footer {
            font-size: 1.3em;
        }
        .rating {
            left: 0.3em;
            bottom: 0.1em;
        }
        .rating {
            font-size: 2.5em;
        }
        .rating_slide {
            font-size: 1.8em;
        }
        .image_slider {
            height: 17em !important;
        }
        .block_thum,
        .pictureFrame {
            width: 174px !important;
            height: 151px !important;
        }
        .sub-paragraph {
            bottom: 41px;
            font-size: 1.4em;
            padding: 4.4px 19.5px !important;
        }
        .thumnbail {
            margin-left: 55px !important;
        }
        #carouselWrapper,
        #carousel {
            width: 174px !important;
        }
        .block_text_footer {
            margin-left: 20%;
        }
        .navbar_slide {
            height: 700px !important;
            width: 1200px;
        }
        .block_navbar_slide {
            height: 920px !important;
            top: 80px !important;
        }

        #jssor_1 {
            left: 25px !important;
        }
        #carouselWrapper {
            margin-top: 44px;
        }
        .col-md-3 {
            margin-left: 3.5em;
            max-width: 80% !important;
        }
        .logo_text {
            height: 3em;
            margin-left: 0em;
        }
        .line_category {
            width: 62%;
            margin-top: 1em;
        }
        .max_input,
        .min_input {
            height: 2em;
            font-size: 1.6em;
        }
        .btn_model_filter {
            font-size: 1.8em;
            margin-top: 0.5em;
        }
        .input_search_in_modal {
            height: 3em;
            font-size: 1.5em;
        }
        .header_slider{
            width: 730px !important;
        }
        #jssor_1{
            width:920px !important;
        }
        

    }

    @media (min-width: 1024px) and (max-width: 1100px) {
        .item_price {
            font-size: 2.1em;
        }

        .block_navbar_slide {
            top: 100px !important;
        }
    }
</style>

<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="/front-end/css/multe_select.css">
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> 
@endsection 
@section('main_section')
<div class="col-md-12 page_content_item" id="content_page">
    @if(!isset($brandfilter))
    <div id="content_page_item">
        <div class="col-md-12 col-sm-12 page_content_item">
            <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:-85px;width:1024px;height:200px;overflow:none;visibility:hidden;background-color:#24262e;">



                <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                </div>
                <div data-u="slides" class="header_slider" style="       
                        cursor:default;position:relative;top:0px;left:230px;height:200px;overflow:hidden;
                ">

                    @if(isset($category))
                    <div>
                        <img data-u="image" src="{{$category->image_id2}}" style="height:15em;width: 45em;    border: 0.04em solid #8a8a8a" />
                        <img data-u="thumb" src="{{$category->image_id}}" />
                        <p class="text_big_image_slider">
                            {{ $category->english }}
                            <img src="/front-end/images/items_page/star.png" class="one_start_slider" />
                        </p>
                    </div>

                    @else

                        @foreach($subcategories as $subcategory)
                        <div>
                            <img data-u="image" src="{{$subcategory->image_id}}" style="height:15em;width: 45em;    border: 0.04em solid #8a8a8a" />
                            <img data-u="thumb" src="{{$subcategory->image_id}}" />
                            <p class="text_big_image_slider">
                                {{ $subcategory->english }}
                                <img src="/front-end/images/items_page/star.png" class="one_start_slider" />
                                <span class="rating ratings{{$subcategory->rate}}" style="bottom: 0.1em;left: 0.9em;"></span>
                            </p>
                        </div>
                        @endforeach
                    @endif
                </div>

            </div>
            <script type="text/javascript">jssor_1_slider_init();</script>

            <div class='thumnbail' style="position: absolute;top: 0px;bottom: 10px;width: 180px;height: 633px;margin-left: 50px;overflow: auto">
                @foreach($subcategories as $subcategory)

                <div class="pictureFrame" style="width: 110px; height: 92px;">
                    <img src="{{$subcategory->image_id2}}" class="block_thum" style="z-index: 1; width: 110px; height: 88px; padding-top: 2px; padding-bottom: 2px;">
                    <a href="{{ route('subcategoryfilter',$subcategory->id) }}">
                        <p class="sub-paragraph" style="z-index: 1;padding: 4.4px 0px;text-align: center;">
                            {{$subcategory->english}}
                        </p>
                    </a>
                </div>

                @endforeach
            </div>
        </div>
        @endif

        <div class="col-md-9 col-sm-12 section_item section_item_select">
            @if(!isset($brandfilter))
            <div class="col-sm-3" style="float:left;">
                <img src={{URL::asset( '/front-end/images/light_logo.png')}} class="img-resposive logo_text" />
            </div>
            @endif
            <div class="col-sm-3" style="float:left;margin-left: 2em;">
                <p class="btn_filter" id="btn_modal_filter">
                    @lang('Filter')
                </p>
            </div>
            <div class="col-sm-5 my-1" style="margin-top: 0em !important;float: left; {{isset($brandfilter) ? 'max-width: 70.666667% !important;' : ';'}}">
                <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                <div class="input-gr'oup">
                    <div class="input-search_icon">
                        <!--                        <img src="./images/signup/at.png">-->
                        <i class="material-icons">&#xE8B6;</i>
                    </div>
                    {!! Form::open(['route' => 'categoryfilter' , 'method' =>'GET']) !!}
                    <input type="text" class="form-control input_search" id="search" name="search" placeholder="@lang('Search') ">
                    <input type="text" hidden="hidden" id="category_id" name="categoryId" value="{{isset($categoryId) ? $categoryId : ''}}">

                    <button type="submit" id="myBtn" hidden="hidden">
                        {!! Form::close() !!} Button
                    </button>
                </div>
            </div>
            <div class="container container_item" style="margin-top: 6em;padding-right: 0em;padding-left: 0em;margin-bottom:20px">
                <div class="tabs">
                    <ul class="tabs__items">
                        @foreach($categories as $category)
                        <a href="{{route('category',$category->id)}}">
                            <li class="tabs__item {{ isset($subcategories[0]) ?($subcategories[0]->category_id == $category->id ? 'tabs_active':'' ) : ''}} ">{{ $category->english }}</li>
                        </a>
                        @endforeach
                    </ul>
                    <div class="tabs__content-wrapper" style="    border-top: 0.1em solid #aaa;">
                        <div class="tabs__content tabs_active" id="filteredproducts">
                            @include('client.pages.item_products',["products" =>$products ])


                        </div>
                        @if(isset($filter) && count($products) > 12)
                        <div class="col-sm-3" style="float:left;margin-left: 20em;margin-top: 50px">
                            <p class="btn_filter" id="btn_modal_filter" onclick="scrollload()">
                                @lang('Load More')
                            </p>
                        </div>
                        @endif
                    </div>
                </div>

            </div>
      
          </div>
    </div>
</div>


<div class="background_modal" style="display: none">
</div>
{!! Form::open(['route'=> 'fullfiltercategory' , 'method'=>'GET' ]) !!}
<div class="modal_filter" id="modal_filter" style="display: none;   overflow: hidden;;max-height: 100%;">
    <div class="col-sm-12 my-1" style="margin-top: 0em !important;float: left;">
        <div class="input-group">
            <input type="text" class="form-control input_filter input_search_in_modal" id="inlineFormInputGroupUsername" name="name"
                placeholder="@lang('Search') ...">
        </div>
    </div>
    <div class="col-sm-12 my-1" style="margin-top: 0em !important;float: left;">
        <p class="lable_input_filter">@lang('Category')</p>
        <div class="input-group line_category">
            <hr class="line_title_input_modal">

        </div>
    </div>
    <div class="col-sm-12 my-1" style="margin-top: 0em !important;float: left;">
        <div class="select-menu js-select-menu" id="unique-id">
            <input class="menu-state js-menu-state" id="unique-id-menu-state" type="checkbox" />
            <label class="select-label js-select-label" data-default-label="Category" data-label="@lang('Category')" name="categories[]" for="unique-id-menu-state">
            </label>
            <ul class="menu js-select-options">
                @foreach($categories as $category)
                <li class="js-filterable" data-filter-criteria="Aliquam erat volutpat">
                    <label class="menu-item">
                        <input class="checkbox js-option" name="categories[]" type="checkbox" value="{{$category->id}}" />
                        <div class="choice-input"></div>
                        <span>{{$category->english}}</span>
                    </label>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="col-sm-12 my-1" style="margin-top: 0em !important;float: left;">
        <p class="lable_input_filter text_price">@lang('Price')</p>
        <div class="input-group line_price">
            <hr class="line_title_input_modal">
        </div>
    </div>
    <div class="col-sm-12 my-1" style="margin-top: 0em !important;float: left;">
        <div class="input-group">
            <div class="input-search_icon">
                <!--                        <img src="./images/signup/at.png">-->
                <i class="material-icons" style="color:#fff;">€</i>
            </div>
            <input type="text" class="form-control input_filter validation_just_number max_input" name="max" id="inlineFormInputGroupUsername"
                placeholder="@lang('Max')">
        </div>
    </div>
    <div class="col-sm-12 my-1" style="margin-top: 0em !important;float: left;">
        <div class="input-group">
            <div class="input-search_icon">
                <!--                        <img src="./images/signup/at.png">-->
                <i class="material-icons" style="color:#fff;">€</i>
            </div>
            <input type="text" name="min" class="form-control input_filter validation_just_number min_input" id="inlineFormInputGroupUsername"
                placeholder="@lang('Min')">
        </div>
    </div>
    <div class="col-sm-12 my-1" style="margin-top: 0em !important;float: left;">
        <div class="input-group">
            <input type="text" hidden="" class="form-control input_filter" id="inlineFormInputGroupUsername" placeholder="Custom field">
        </div>
    </div>

    <div class="col-sm-12 my-1" style="margin-top: 2em !important;float: left;">
        <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
        <div class="input-group">
            <input type="submit" class="btn_model_filter" value="@lang('Show results')" style="border: 0px; cursor: pointer">

        </div>
    </div>
    {!! Form::close() !!}
    <div class="col-sm-12 my-1" style="margin-top: 0em !important;float: left;">
        <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
        <div class="input-group">
            <p class="btn_model_filter cancel-modal" style="background-color: #fff;color: #222;cursor: pointer">
                @lang('Cancel')
            </p>
        </div>
    </div>
</div>




<!-- Add To Cart -->

<div class="background_modal" style="display: none;"></div>
<div class="modal_one_item_details" id="modal_one_item_details" style="display: none;z-index: 100;" data-productId=""
    data-qty='1'>
    <div class="header_item_details">
        <img src="" id="modal-img" class="img_item_details" style="height: 300px" />
        
    </div>
    <div class="col-md-12" style="margin-top: 0.6em;float: left;">
        <div style="width: 30%;float: left;">
            <h3 class="title_qty">
                @lang('Quantity')
            </h3>
        </div>
        <div style="width: 70%;float: right;">
            <p class="num_qty">
                1
            </p>
            <div style="width:30%;float: right;">
                <img src="/front-end/images/payment/handler-plus.png" onclick="num_plus(this)" class="btn_qty">
                <img src="/front-end/images/payment/handler-min.png" onclick="num_min(this)" class="btn_qty" style="margin-top: -0.9em">
            </div>
            <!-- <img -->
        </div>
    </div>

    <div class="button_modal_one_item_details">
        @if( Auth::check())
        <p class="btn_done" style="background-color: #d80001;color: #fff;cursor: pointer">@lang('Done')</p>
        <p class="btn_cancel" style="margin-left: 9%;cursor: pointer">@lang('Cancel') </p>
        <a href="{{route('mycart')}}">
            <p class="btn_view_my_cart" style="width: 100%;">@lang('View my Cart') </p>
        </a>
        @else
        <a href="{{route('login')}}" class="btn_done" style="background-color: #d80001;color: #fff;cursor: pointer">Login To Add</a>

        <a class="btn_cancel" style="margin-left: 9%;cursor: pointer" onclick="hideModal()">@lang('Cancel') </a>
        @endif
    </div>
</div>
@endsection 
@section('scripts')

<script src="/front-end/js/plugin/multe_select.js"></script>
<script src="/front-end/js/plugin/vertical-slider.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<script src="/front-end/js/plugin/jquery-pretty-tabs.js"></script>

<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>
<script>
    function num_plus(obj) {
        counter = parseInt($(obj).parent().parent().find('p').text());
            if (counter < 1) {
                counter = 1;
                $(obj).parent().parent().find('p').text(counter);
            }
            else {
                 counter = counter + 1
                $(obj).parent().parent().find('p').text(counter);
            }
    }
    function num_min(obj) {
        counter = parseInt($(obj).parent().parent().text());
        if ((counter > 1)) {
            counter = counter - 1;
            $(obj).parent().parent().find('p').text(counter);
        }

    }
</script>
<script>
    var ratings = document.getElementsByClassName('ratings');

    for (var i = 0; i < ratings.length; i++) {

        var r = new SimpleStarRating0(ratings[i]);

    }
    //5 functions for 1, 2, 3, 4, 5 Stars for anything
    //one more function for those which don't have any rate
    //Initial Rate Subcategory
    var ratings = document.getElementsByClassName('ratings1');

    for (var i = 0; i < ratings.length; i++) {

        var r = new SimpleStarRating1(ratings[i]);

    }


    //Form Rate This Product
    var ratings = document.getElementsByClassName('form-rate');
    for (var i = 0; i < ratings.length; i++) {
        var r = new SimpleStarRating(ratings[i]);

    }
    //Initial Rate Product
    var ratings = document.getElementsByClassName('ratings2');
    for (var i = 0; i < ratings.length; i++) {
        var r = new SimpleStarRating2(ratings[i]);

        ratings[i].addEventListener('rate', function (e) {

        });
    }

    //Initial Rate Comments

    var ratings = document.getElementsByClassName('ratings3');
                <?php $counter = 0 ?>

                for (var i = 0; i < ratings.length; i++) {

        var r = new SimpleStarRating3(ratings[i]);
                    <?php $counter++ ?>
                }
    //Initial Rate Simiproducts


    var ratings = document.getElementsByClassName('ratings4');
    for (var i = 0; i < ratings.length; i++) {
        var r = new SimpleStarRating4(ratings[i]);

    }

    var ratings = document.getElementsByClassName('ratings5');
    for (var i = 0; i < ratings.length; i++) {
        var r = new SimpleStarRating5(ratings[i]);

    }

</script>
<script>
    var input = document.getElementById("search");

    input.addEventListener("keyup", function (event) {
        event.preventDefault();
        if (event.keyCode === 13) {
            var click1 = document.getElementById('myBtn');
            click1.click();
        }
    });
</script>
<script>
    $('#btn_modal_filter').click(function () {
        $('.background_modal').show();
        $('#modal_filter').show();
        $('#content_page_item').css('filter', 'blur(5px)');
    });
    $('.background_modal').click(function () {
        $('.background_modal').hide();
        $('#modal_filter').hide();
        $('#content_page_item').css('filter', 'blur(0px)');
    });
    $('.cancel-modal').click(function () {
        $('.background_modal').hide();
        $('#modal_filter').hide();
        $('#content_page_item').css('filter', 'blur(0px)');
    });

</script>
<script>
    $(".validation_just_number").keypress(function (event) {
        $(this).val($(this).val().replace(/[^0-9\.]/g, ''));
        if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });
</script>
<script type="text/javascript">
    // $(function () {
    //     $('.multiselect-ui').multiselect({
    //         includeSelectAllOption: true
    //     });
    // });
</script>
<script>
    var counter = 1;
    function scrollload() {
        counter++;
        console.log(counter);
        var request = $.ajax({
            url: '',
            type: "POST",
            data: { "loads": counter },
        }).done((response) => $('#filteredproducts').append(response));

    }

    function addToCart(id ,qty){
        // id = $(obj).data('id');
        $.ajax({
            type: "POST",
            url: `/cart/add`,
            data: { 'productId': id, 'qty': qty },
            headers: {
                "x-csrf-token": $("[name=_token]").val()
            },
        }).done(response => {
            if (response.id > 0) {
                swal({ title: "Successfully!", text: "Item Added.", type: "success", timer: 2000, showConfirmButton: false });
                hideModal();
            }
        });
    }

     $('#btn_modal_one_item_details').click(function () {
        showModal();
    });
    $('.background_modal').click(function () {
        hideModal();
    });
    $('#modal_one_item_details .btn_cancel').on('click', function () {
        hideModal();
    });

    $('#modal_one_item_details .btn_done').on('click', function () {
        //get productId,Qty
        productId = $('#modal_one_item_details').attr('data-productId');
        qty = $('#modal_one_item_details').attr('data-qty');
        //submit add to cart ajax.
        addToCart(productId, qty);
    });

</script> @endsection