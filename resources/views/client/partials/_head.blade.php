
      <meta charset="UTF-8">
      <link rel="stylesheet" href="{{URL::asset('/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
      <link rel="stylesheet" href="{{url('/front-end/css/style.css')}}">

      <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="{{url('/front-end/css/jquery-pretty-tabs.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="{{url('/front-end/css/login.css')}}">
      <link rel="stylesheet" href="{{url('/front-end/css/item.css')}}">
      <link rel="stylesheet" href="{{url('/front-end/css/material_icons.css')}}">
      <script type="text/javascript" src="{{url('/front-end/js/plugin/jssor.slider.min.js')}}"></script>
      <script type="text/javascript" src="{{url('/front-end/js/plugin/slide.js')}}"></script>
      <link rel="stylesheet" href="{{url('/front-end/css/SimpleStarRating.css')}}">
      <link rel="stylesheet" type="text/css" href="{{url('static/sweetalert/sweetalert2.min.css')}}">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/flexslider.css" type="text/css" media="screen" />

       <style>
           .rating .star::after {
                color: #d80001;
                width: 0.75em;
                height: 1.7em;

            }
            .rating .star::before{
                color: #d80001;
                width: 0.75em;
                height: 0.7em;
            }
           .modal_one_item_details .rating .star::before {
                color: #d80001;
                width: 0.75em;
                height: 0.7em;
            }
            
           .modal_one_item_details{
             top: 10em;
                top: 2em;
                left:30%;
                z-index: 26;
                margin-top: 0em;  
                width: 26%;
                background-color: #fff;
                margin-left: 4em;
                float: left;
                position: absolute;
                z-index: 15;
                box-shadow: 1px 1px 16px #000000b0;
            }
            .title_similar_items {
                margin-top: 1em;
                margin-left: 3em;
            }
            .star{
                cursor: pointer;
                color: #fff;
            }
                   #content_page{
                margin-top: 6.6em;
                float: left;
            }
                  header{
                position: absolute;
                z-index: 33;
                width: 100%;
            }
            .icon-flag {
                width: 16px;
                height: 16px;
            }
            .rating{
                font-size: 1.3em;
                color: #fff;
                bottom: 0.6em;
                left: 1.4em;
            }
            .header_page  .rating{          
               bottom: 0.2em;
                left: 18em;
            }
            .rating .star::after{
                color: #d80001;
            }
            .rating .star::before{
                color: #fff;
            }
            .autocomplete-items {
                  position: absolute;
                  border: 1px solid #d4d4d4;
                  border-bottom: none;
                  border-top: none;
                  z-index: 99;
                  top: 88%;
                  left: 25%;
                  right: 0;
                  width: 16em;
            }
            .autocomplete-items div {
              cursor: pointer;
              background-color: #fff; 
              border-bottom: 1px solid #d4d4d4; 
              text-align: center;
            }
            .autocomplete-items div label{ 
                text-align: left;
                float: left;
                font-weight: bolder;

              background-color: #fff; 
                font-size: 15px; 
                width: 100%;
                color: gray;
                font-family: -webkit-body;       
            }
            .autocomplete-items div:hover {
              /*when hovering an item:*/
              background-color: #e9e9e9; 
            }
            .autocomplete-active {
              /*when navigating through the items using the arrow keys:*/
              background-color: DodgerBlue !important; 
              color: #ffffff; 
            }
            .div_item  .rating .star::after{
                color: #d80001;
                width: 0.75em;
                height: 0.7em;
            }
            .div_item .rating .star::before{
                color: #d80001;
                width: 0.75em;
                height: 0.7em;
            }
            .flex-direction-nav a {
                 height: 50px;
            }
            .details_comment .rating{
                bottom: unset;
                right: 1.4em;
                left: unset;
            }
             .details_comment  .rating .star::after{
                color: #d80001;
            }
            .details_comment .rating .star::before{
                color: #d80001;
            }
            main {
                background-color: white;
                width: 80%;
                margin: 0 auto;
                padding: 50px;
                text-align: center;
            }
            .golden {
                color: #ee0;
                background-color: #444;
            }
            .big-red {
                color: #f11;
                font-size: 50px;
            }
            .navbar {
                padding: .5rem 7rem;
            }

            .btn_qty{
                cursor: pointer;
            }
            .top_nav {
                margin-left: 55px;
            }
            #nav-bar-search
            {
                margin-right: 138px;
                width: 321px;
            }
            .navbar-divider, .navbar-nav .nav-item+.nav-item, .navbar-nav .nav-link+.nav-link {
                margin-left: 0rem;
            }
            @media (min-width: 0px) and (max-width: 1023px) {
                #navbarSupportedContent ul li {
                    font-size: 21px;
                }

                .top_nav {
                    margin-left: 12px;
                } 
                .landing-items-block .title {
                    margin-left: 7px;
                    top: 7em;
                }
                #nav-bar-search
                {
                    display: none;
                }
                .icon-flag {
                    float: right;
                    margin-top: 0.5em;
                    margin-left: 0.3em;
                }
                .item_in_lg{
                    display: none !important;
                }    
                .rate-us{
                    display: none !important;
                }
            }
            .star_1 i:hover{
                content: "&#xE838;";
            }
        
        </style>
        <style>
            /* jssor slider loading skin spin css */
            .jssorl-009-spin img {
                animation-name: jssorl-009-spin;
                animation-duration: 1.6s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }
            @keyframes jssorl-009-spin {
                from {
                    transform: rotate(0deg);
                }
                to {
                    transform: rotate(360deg);
                }
            }
            .jssora093 {display:block;position:absolute;cursor:pointer;}
            .jssora093 .c {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
            .jssora093 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
            .jssora093:hover {opacity:.8;}
            .jssora093.jssora093dn {opacity:.6;}
            .jssora093.jssora093ds {opacity:.3;pointer-events:none;}
            .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
            .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
            .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
            .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
            .jssort101 .p:hover{padding:2px;}
            .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
            .jssort101 .p:hover.pdn{padding:0;}
            .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
            .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
            .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
            .jssort101 .t {position:initial;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
            .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}
        </style>
        <style>
        #ex3{
          float: right;
        }
        #ex3 .fa-stack[data-count]:after{
            position:absolute;
            right:0%;
            top:1%;
            content: attr(data-count);
            font-size:30%;
            padding:.6em;
            border-radius:50%;
            line-height:.8em;
            color: white;
            background:rgba(0,0,0,.85);
            text-align:center;
            min-width: 1em;
            font-weight:bold;
        }
        #ex3 .fa-stack-1x, .fa-stack-2x{
            background-color:#d90000;
            border-radius: 100px;
        }
        .top_nav{
            max-width: 80%;
        }
        </style>
      @yield('styles')
