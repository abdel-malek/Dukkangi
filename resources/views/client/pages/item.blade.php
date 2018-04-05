
@extends('client.main')
@section('styles')
    <style >
    .image_slider{
                height:13em !important;
                border: 0.04em solid #8a8a8a;
                width: 100% !important;
            }
            .image_thum{
                left: -4em !important;
                width: auto !important;
                height: 4.1em !important;
            }
    a:hover{
        color: inherit;
        text-decoration:none;
    }
    a{
        color: inherit;
        text-decoration:none;

    }
     .div_item  .rating .star::after{
                color: #d80001;
                width: 0.75em;
                height: 1.7em;
            }
            .div_item .rating .star::before{
                color: #d80001;
                width: 0.75em;
                height: 0.7em;
            }
    a:click{
        color: inherit;
        text-decoration:none;
    }
    .sub-paragraph{
        background-color: #00000044;
    position: relative;
    bottom: 29px;
    font-size: 0.9em;
    color: #fff;
    }

    </style>

<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="/front-end/css/multe_select.css">
      <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

@endsection

@section('main_section')
      <div class="col-md-12" style="padding: 0em 5em;" id="content_page" >
          <div id="content_page_item">
        <div class="col-md-12 col-sm-12 page_content_item">
            <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:-85px;width:1024px;height:200px;overflow:none;visibility:hidden;background-color:#24262e;">



                <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                </div>
                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:240px;width:850px;height:200px;overflow:hidden;">

                    @foreach($subcategories as $subcategory)

                      <div>
                          <img  data-u="image" src="{{$subcategory->image_id}}" style="height:15em;width: 45em;    border: 0.04em solid #8a8a8a" />
                          <img  data-u="thumb" src="{{$subcategory->image_id}}" />
                          <p class="text_big_image_slider">
                              {{ $subcategory->english }}
                              <img src="/front-end/images/items_page/star.png" class="one_start_slider" />
                              <span class="rating ratings{{$subcategory->rate}}" style="bottom: 0.1em;left: 0.9em;"></span>
                          </p>
                      </div>
                    @endforeach
                </div>

            </div>

            <script type="text/javascript">jssor_1_slider_init();</script>

            <div class='thumnbail' style="position: absolute;margin-left: 150px;top: 35px;" >
                @foreach($subcategories as $subcategory)
                <a href="{{ route('subcategoryfilter',$subcategory->id) }}">
                    <div data-id="{{$subcategory->id}}">
                        <div style="z-index: 1; width: 120px; height: 110px;overflow: hidden;">
                            <div style="width: 110px; height: 95px; left: 0px; top: 0px; z-index: 1;">
                            <img src="{{$subcategory->image_id}}" style="z-index: 1;" width="110px" height="88px" />
                                <p class="sub-paragraph" style="z-index: 1;padding: 4.4px 32.5px;">
                                    {{$subcategory->english}}
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>

        </div>

        <div class="col-md-9 col-sm-12 section_item" >
            <div class="col-sm-3" style="float:left;">
                <img src={{URL::asset('/front-end/images/light_logo.png')}} class="img-resposive logo_text" />
            </div>
            <div class="col-sm-3" style="float:left;margin-left: 2em;">
                <p class="btn_filter" id="btn_modal_filter">
                    @lang('Filter')
                </p>
            </div>
            <div class="col-sm-5 my-1" style="margin-top: 0em !important;float: left;">
                <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                <div class="input-gr'oup">
                    <div class="input-search_icon">
                        <!--                        <img src="./images/signup/at.png">-->
                        <i class="material-icons">&#xE8B6;</i>
                    </div>
                    {!! Form::open(['route' => 'categoryfilter' , 'method' =>'GET']) !!}
                        <input type="text" class="form-control input_search" id="search" name="search" placeholder="{{ (isset($lastSearch) ? $lastSearch : __('Search' .'..')) }}">
                        <input type="text" hidden="hidden"  id = "category_id" name="categoryId" value="{{isset($categoryId) ? $categoryId : ''}}">
                        <button type="submit" id="myBtn" hidden="hidden">
                    {!! Form::close() !!}
                    Button</button>
                </div>
            </div>
            <div class="container"  style="margin-top: 6em;padding-right: 0em;padding-left: 0em;margin-bottom:20px" >
                    <div class="tabs">
                    <ul class="tabs__items">
                        @foreach($categories as $category)
                        <a href="{{route('category',$category->id)}}"><li class="tabs__item {{ isset($subcategories[0]) ?($subcategories[0]->category_id == $category->id ? 'tabs_active':'' ) : ''}} ">{{ $category->english }}</li></a>
                        @endforeach
                       </ul>
                    <div class="tabs__content-wrapper" style="    border-top: 0.1em solid #aaa;">
                       <div class="tabs__content tabs_active" id= "filteredproducts" >
                            @include('client.pages.item_products',["products" =>$products ])


                      </div>
                      @if(isset($filter))
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


     <div class="background_modal" style="display: none" >
        </div>
        {!! Form::open(['route'=> 'fullfiltercategory' , 'method'=>'GET' ]) !!}
        <div class="modal_filter" id="modal_filter" style="display: none;overflow: auto;max-height: 800px;">
            <div class="col-sm-12 my-1" style="margin-top: 0em !important;float: left;">
                <div class="input-group">
                    <input type="text" class="form-control input_filter" id="inlineFormInputGroupUsername" name = "name" placeholder="Search ...">
                </div>
            </div>
            <div class="col-sm-12 my-1" style="margin-top: 0em !important;float: left;">
                <p class="lable_input_filter">Category</p>
                <div class="input-group" style="width:76%;float:right;">
                    <hr class="line_title_input_modal">

                </div>
            </div>
            <div class="col-sm-12 my-1" style="margin-top: 0em !important;float: left;">
                <div class="select-menu js-select-menu" id="unique-id">
                    <input class="menu-state js-menu-state" id="unique-id-menu-state" type="checkbox" />
                    <label class="select-label js-select-label" data-default-label="Category" data-label="Category" name="categories[]" for="unique-id-menu-state">
                    </label>
                    <ul class="menu js-select-options">
                        @foreach($categories as $category)
                        <li class="js-filterable" data-filter-criteria="Aliquam erat volutpat">
                            <label class="menu-item">
                                <input class="checkbox js-option" name = "categories[]" type="checkbox" value="{{$category->id}}"/>
                                <div class="choice-input"></div><span>{{$category->english}}</span>
                            </label>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 my-1" style="margin-top: 0em !important;float: left;">
                <p class="lable_input_filter" style="width: 16%;">Price</p>
                <div class="input-group" style="width:84%;float:right;">
                    <hr class="line_title_input_modal">
                </div>
            </div>
            <div class="col-sm-12 my-1" style="margin-top: 0em !important;float: left;">
                <div class="input-group">
                    <div class="input-search_icon">
                        <!--                        <img src="./images/signup/at.png">-->
                        <i class="material-icons" style="color:#fff;">&#xE227;</i>
                    </div>
                    <input type="text" class="form-control input_filter validation_just_number" name="max" id="inlineFormInputGroupUsername" placeholder="Max">
                </div>
            </div>
            <div class="col-sm-12 my-1" style="margin-top: 0em !important;float: left;">
                <div class="input-group">
                    <div class="input-search_icon">
                        <!--                        <img src="./images/signup/at.png">-->
                        <i class="material-icons" style="color:#fff;">&#xE227;</i>
                    </div>
                    <input type="text" name = "min"class="form-control input_filter validation_just_number" id="inlineFormInputGroupUsername" placeholder="Min">
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
                    <input type="submit" class="btn_model_filter" value="Show results" style="border: 0px">

                </div>
            </div>
            {!! Form::close() !!}
            <div class="col-sm-12 my-1" style="margin-top: 0em !important;float: left;">
                <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                <div class="input-group">
                    <p class="btn_model_filter" style="background-color: #fff;color: #222;">
                        Cancel
                    </p>
                </div>
            </div>
        </div>
        @endsection

        @section('scripts')

        <script src = "/front-end/js/plugin/multe_select.js"></script>

        <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>

        <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

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
        <script src="/front-end/js/plugin/SimpleStarRating.js"></script>
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
                <?php $counter= 0 ?>

                for (var i = 0; i < ratings.length; i++) {

                    var r = new SimpleStarRating3(ratings[i]);
                    <?php $counter++?>
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
        <script >
            var input = document.getElementById("search");

            input.addEventListener("keyup", function(event) {
                event.preventDefault();
                if (event.keyCode === 13) {
                    var click1 =  document.getElementById('myBtn');
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
            $(function () {
                $('.multiselect-ui').multiselect({
                    includeSelectAllOption: true
                });
            });
        </script>
        <script>
            var counter = 1;
            function scrollload(){
                counter++;
                console.log(counter);
                var request = $.ajax({
                    url: '' ,
                    type: "POST",
                    data: {"loads": counter } ,
                    //dataType: 'json'
                 }).done((response) => $('#filteredproducts').append(response));

            }

        </script>
        @endsection
