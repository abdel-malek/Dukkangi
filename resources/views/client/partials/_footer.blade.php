<style type="text/css">
   .flex-control-paging li a.flex-active{
        background-color: #fff ;
   }

</style>
<footer class="footer" style="margin-top: 0px" >
@if(isset($brands))
<div class=" flexslider2 carousel" style="left: 12%;width: 76%; height: 11em;top: 2em;background-color: #d80f17;border-color: #d80f17   ;z-index: 1;margin-bottom: 5em">
        <ul class="slides">
          @foreach($brands as $brand)
          <li>
              <div  style="margin-top: 1em;float: left;max-width: 100%;margin-bottom: 1em">
                  <div class="div_item" style="height: 12em;width: 10em;margin-left: 47px; background-color: #bb313100;box-shadow: 0px 0px 0px #fff;">
                     <a href="{{route('brandfilter',(string)$brand->id)}}"> <img src="{{$brand->image_path}}" class="img_item" style="height: 5.4em" />
                      <p class="item_name" style="width: 100%;text-align: center;color: #fff">{{$brand->english}}</p>
                     </a>
                  </div>
              </div>
          </li>
          @endforeach
          <!-- items mirrored twice, total of 12 -->
        </ul>
      </div>
      @endif

            <div class="col-md-12" style="float:left">
                <h2 class="title_footer">
                    <a href="{{route('about-us')}}" style="color: #fff;text-decoration: none; ">@lang('About Dukkangi')</a>
                </h2>
            </div>
            <div class="col-md-12 " style="text-align: center">
                <p class="text_footer">
                    @lang('All Rights Reserved') <br>
                    Dukkangi 2018
                </p>
            </div>
            <div class="col-md-7 div_icon_footer about" >
                <a href="https://www.instagram.com/"><i class="fa fa-instagram icon_footer icon_inst" ></i></a>
                <a href="https://twitter.com/"><i class="fa fa-twitter icon_footer"></i> </a>
                <a href="https://www.facebook.com/"><i class="fa fa-facebook icon_footer icon_face"></i></a>
            </div>
</footer>

<script src="/front-end/js/plugin/SimpleStarRating.js"></script>
<script src={{url("static/sweetalert/sweetalert2.all.js")}}></script>
<script >
   function showratemodal(){
    $('#rate-us-modal').css({'display':'block'});
   }
</script>
<script >
    var ratings = document.getElementsByClassName('rate-us');

    for (var i = 0; i < ratings.length; i++) {

        var r = new SimpleStarRating(ratings[i]);

    }
     $('.rate-us').click(function () {
        var num_star_active = 0;
        $(this).find('.star').each(function () {
            if ($(this).hasClass('active')) {
                num_star_active++;
            }
        });
        $('#rate-us').val(num_star_active);
    });
</script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<script defer src="/js/jquery.flexslider.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    animationLoop: true,
    itemWidth: 210,
    directionNav: false,  
    itemMargin: 5,
    minItems: 2,
    maxItems: 5,
    controlNav : false
  });
  $('.flexslider2').flexslider({
    animation: "slide",
    animationLoop: true,
    itemWidth: 210, 
    itemMargin: 5,
    minItems: 2,
    maxItems: 4,
    slideshow : false,
    controlNav : true,
    directionNav: true,    
    animationSpeed: 100, 
    slideshowSpeed: 10000,     
  });
});
</script>
<script >
  inp = $('#nav-bar-search');
  inp.keypress(function() {
    // console.log(inp.val());
    text= inp.val();
     $.ajax({
            type: "POST",
            url: `/search-auto`,
            data: { 'text': text },
            headers: {
                "x-csrf-token": $("[name=_token]").val()
            },
        }).done(response => {
            if (response !=  null) {
               console.log(response[0]['english']);
            }
        });
  });

</script>
      @yield('scripts')
