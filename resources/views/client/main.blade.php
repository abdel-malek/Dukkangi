<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">
  <head>
      <meta charset="UTF-8">
      <title>Dukkangi</title>
    
      @include('client.partials._head')

      <style>
             body{
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
}
.section_item_select{
    width: 72%;
}
.col_item{
    width: 32%;
        max-width: 32%;
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
            width: 90px !important;
        }
        .top_nav_mobile{
            max-width: 80% !important;
        }
        .sections_mobile{
            width: 59.8%;
        }
        .col_item_mobile{
             width: 90%;
        max-width: 90%;
        }
        
        @media (max-width: 767px)and (min-width:577px){
        .div_login, .div_singup {
    width: 300px;
        }
        }
      </style>
  </head>
  <body>
      <div class="container container_page">
    @include('client.partials._navbar')
    
      @yield('main_section')
    
    @include('client.partials._footer')

    @yield('cart')
     
  </body>
  <script>
          if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
//document.write("<style>"+
//     "@media (min-height: 667px) and (min-width: 300px) {"+
//            ".container{"+
//                "width: 100% !important;"+
//                "max-width: 100% !important;"+
//                "margin: 0px;"+
//                "padding: 0px;"+
//            "}"+
//            ".all_page_item_view, .block_similar{"+
//                 "width: 100% !important;"+
//                "max-width: 100% !important;"+
//            "}"+
//            ".details_comment .rating {"+
//    "margin-top: 1em ;"+
//            "}"+
//            ".title_reviews {"+
//    "margin-top: 29rem;"+
//            "}"+
//            ".header_page .rating {"+
//                "left: 14.4em;"+
//            "}"+
//            ".block_similar{"+
//                "margin-top: 3rem;"+
//            "}"+
//            ".ratings4{"+
//                "margin-top: 0rem !important;"+
//            "}"+
//        "}"+
//        "#main-nav-bar a {"+
//            "width: 19%;"+
//        "}"+
//        ".top_nav {"+
//            "max-width: 70% !important;"+
//        "}"+
//        "#main-nav-bar a {"+
//            "width: 102px;"+
//        "}"+
//        ".sections {"
//            "width: 59.8%;"+
//        "}"+
//        "</style>");
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
}
  </script>
</html>
