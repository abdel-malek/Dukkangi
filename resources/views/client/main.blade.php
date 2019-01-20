<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">
  <head>
      <meta charset="UTF-8">
      <title>Dukkangi</title>
    
      @include('client.partials._head')

      <style>
/*             body{
            overflow-y: auto;
            overflow-x: auto;
            position: fixed;
            height: 100%;
            width: 100%;
    }
    .container_item{
    width: 1000px;
    max-width: 1000px;
    float: right;
}*/
.section_item_select{
    width: 72%;
}
.col_item{
/*
    width: 32%;
        max-width: 32%;
*/
}
#content_page{
    margin-top: 0rem;
}

     /*For mobile iphone s6+ (5 inch)*/  
         
        .container_mobile{
            width: 100% !important;
                max-width: 100% !important;
                margin: 0px;
                padding: 0px;
        }
        .all_page_item_view_mobile{
            max-width: 100% !important;
            width: 100% !important;
        }
        .block_similar_mobile{
            max-width: 100% !important;
            width: 100% !important;
        }
        .rating_mobile{
            margin-top: 1rem;
        }
        .title_reviews_mobile{
            margin-top: 29rem;
        }
        .header_rating_mobile{
            left : 14.4em !important;
        }
        .block_similar_mobile{
            margin-top: 3rem;
        }
        .ratings4_mobile{
            margin-top: 0rem !important;
        }
        .main-nav-bar_mobile{
            width: 5rem !important;
        }
        .top_nav_mobile{
            max-width: 100% ;
        }
        .sections_mobile{
            width: 59.8%;
        }
        .col_item_mobile{
             width: 90%;
        /*max-width: 90%;*/
        }
        .off_item{
                font-family: 'EagarFont';
        }
        
        .icon-flag {
    width: 25px;
    height: 25px;
}
.input_search_sm{
             display: none !important;
         }

        #ex3 .fa-stack[data-count]:after {
    right: -30%;
    top: -2%;
      font-size: 60%;
    font-family: sans-serif;
    padding: .5em;
        }
         .icon_shopping_cart {
             font-size: 2.3em !important;
         }
        @media (max-width: 767px)and (min-width:577px){
        .div_login, .div_singup {
    width: 300px;
        }
        }
/*        .input_search_sm{
        display: none !important;
    }*/
  @media (min-width: 993px) and (max-width: 1023px) {
         .input_search_lg{
             display: block !important;
         }
         .input_search_sm{
             display: none !important;
         }
        }
   
        @media (min-width: 300px) and (max-width: 690px) {
 .div_icon_footer {
    float: left;
    margin-left: 0%;
    padding-left: 17%;
    
 }
 }
 
 @media(max-width: 991px){
              .title_reviews_mobile{
            margin-top: -3rem;
        }
           .input_search_lg{
             display: none !important;
         }
         .input_search_sm{
             display: block !important;
             margin-top: 1rem;
         }
         .autocomplete-items {
    width: 76%;
         }
          .text_footer {
    font-size: 1.3em;
         }
}
  @media (min-width: 690px) and (max-width: 776px) {
 .div_icon_footer {
    float: left;
    margin-left: 0%;
    padding-left: 23%;
 }
 }
 
      @media (min-width: 992px) and (max-width: 1025px) {

.top_nav {
    max-width: 83% !important;
}
#nav-bar-search {
    margin-right: 0rem;
    width: 179px;
}
.ul_navbar {
    width: 42rem;
}
.nav-item a {
    font-size: 1.3em !important;
}
     }
      @media (min-width: 1288px) and (max-width: 1390px) {
                .icon_shopping_cart {
             font-size: 2.3em !important;
         }
         #ex3 .fa-stack[data-count]:after {
    right: -24% !important;
    font-size: 52% !important;
        padding: .5em;
      /*font-family: sans-serif;*/
         }
          
      }
     @media (min-width: 1108px) and (max-width: 1288px) {
         .icon_shopping_cart {
             font-size: 2.2em !important;
         }
         #ex3 .fa-stack[data-count]:after {
    right: -25% !important;
    font-size: 50% !important;
        padding: .6em;
         }
     }

                   @media (min-width: 750px) and (max-width: 817px) {
               .ul_navbar {
    width: 25rem;
        display: flex!important;
}

   .ul_navbar_mobile {
    width: 31rem;
}
/*.ul_navbar .nav-item a {
    font-size: 1.4em !important;
}*/
.ul_navbar_mobile .nav-item a {
    font-size: 1.3em !important;
}

     }

     @media (min-width: 300px) and (max-width: 766px) {
         .ul_navbar {
             width: 25rem;
             display: flex!important;
         }
         .logo {
             width: 9rem;
         }
         .navbar {
             padding: .5rem 1rem;
         }
         .ul_navbar_mobile {
             width: 31rem;
         }
         /*.ul_navbar .nav-item a {
             font-size: 1.3em !important;
         }*/
         .ul_navbar_mobile .nav-item a {
             font-size: 2em !important;
         }

     }
           .input_search ::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
    color: #aaa !important;
    font-weight: bold !important;
}
.input_search :-moz-placeholder, textarea:-moz-placeholder {
    color: #aaa !important;
    font-weight: bold !important;
}
      </style>
  </head>
  <body>

    @include('client.partials._navbar')
    
      @yield('main_section')
    
    @include('client.partials._footer')

    @yield('cart')
     
  </body>
  <script>
          if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

$('.container').addClass('container_mobile');
$('.all_page_item_view').addClass('all_page_item_view_mobile');
$('.block_similar').addClass('block_similar_mobile');
$('.details_comment .rating').addClass('rating_mobile');
$('.title_reviews').addClass('title_reviews_mobile');
$('.header_page .rating').addClass('header_rating_mobile');
$('.block_similar').addClass('block_similar_mobile');
$('.ratings4').addClass('ratings4_mobile');
$('#main-nav-bar a').addClass('main-nav-bar_mobile');
$('.top_nav').addClass('top_nav_mobile');
$('.sections').addClass('sections_mobile');
$('.col_item').addClass('col_item_mobile');
$('.ul_navbar').addClass('ul_navbar_mobile');

}
  </script>
</html>
