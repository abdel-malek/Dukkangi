<footer class="footer" style="margin-top: 0px" >
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
      @yield('scripts')
