<footer class="footer" style="margin-top: 0px" >
            <div class="col-md-12" style="float:left">
                <h2 class="title_footer">
                    @lang('About Dukkangi')
                </h2>
            </div>
            <div class="col-md-6 " style="float:left;margin-left: 26%;">
                <p class="text_footer">
                    @lang('All Rights Reserved') <br>
                    Dukkangi 2018
                </p>
            </div>
            <div class="col-md-7 div_icon_footer" >
                <a href="https://www.instagram.com/"><i class="fa fa-instagram icon_footer icon_inst" ></i></a>
                <a href="https://twitter.com/"><i class="fa fa-twitter icon_footer"></i> </a>
                <a href="https://www.facebook.com/"><i class="fa fa-facebook icon_footer icon_face"></i></a>
            </div>
</footer>
<script src={{url("static/sweetalert/sweetalert2.all.js")}}></script>
<script >
   function showratemodal(){
    $('#rate-us-modal').css({'display':'block'});
   }
</script>
      @yield('scripts')
