@extends('client.main')
@section('styles')
        <meta charset="UTF-8">
        <title>Dukkangi</title>
        <link rel="stylesheet" href="{{URL::asset('/front-end/css/lib/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('/front-end/css/style.css')}}">
        <link rel="stylesheet" href="{{URL::asset('/front-end/css/login.css')}}">
        <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
        <style type="text/css">
        </style>
@endsection    

@section('main_section')
 <div class="col-md-12" style="padding-left:0px;padding-right: 0px  " id="content_page">
        <div  id="main-container" class="main-container main-container_singup">
            <div class="container">
                <div class="row">
                    <div class="col align-self-start">
                    </div>
                    <div class="col align-self-center">
                        <img class="welcome-img" src="/front-end/images/welcome-logo2.png" />
                        <div class="col-md-12 col-xs-12 div_singup">
                            {!! Form::open(['route'=>'register']) !!}
                          <div class="col-sm-12 my-1" style="margin-top: 14em !important;float: left;">
                                @if ($errors->has('password') || $errors->has('email') ||$errors->has('name'))
                                <span style="text-align: center;color: #ff0000;">
                                   <u><big><strong>{{ $errors->first('password') }}</strong></big></u>
                                   <u><big><strong>{{ $errors->first('email') }}</strong></big></u>
                                   <u><big><strong>{{ $errors->first('name') }}</strong></big></u>
                                </span>
                                <br>
                                @endif
                
                                <div class="input-group">

                                    <input type="text" class="form-control input_singup" id="inlineFormInputGroupUsername" placeholder="Username" name="name">
                                </div>
                            </div>
                            <div class="col-sm-12 my-1" style="margin-top: 0.5em !important;float: left;">
                                <div class="input-group">

                                    <input type="email" class="form-control input_singup" id="inlineFormInputGroupEmail" placeholder="Email or Phone number" name="email">
                                </div>
                            </div>
                            <div class="col-sm-12 my-1" style="margin-top: 0.5em !important;float: left;">
                                <div class="input-group">

                                    <input name="password" type="password" class="form-control input_singup" id="inlineFormInputGroupPassword" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-sm-12 my-1" style="margin-top: 0.5em !important;float: left;">
                                <div class="input-group">

                                    <input type="password" class="form-control input_singup" id="inlineFormInputGroupConfirmPassword" placeholder="Confirm Password" name="password_confirmation">
                                </div>
                            </div>
                           
                            <div class="col-sm-12 my-1" style="margin-top: 0.5em !important;float: left;">
                                <div class="input-group">

                                    <input type="text" class="form-control input_singup" id="date_of_brith" placeholder="Date of birth" name="dateofbirth">
                                </div>
                            </div>
                            <div class="col-sm-12 my-1" style="margin-top: 3em !important;float: left;">
                                <div class="input-group">
                                    <button type="submit" class="btn_login" style="border :0px">
                                        Sign up
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-12 my-1" style="margin-top: 0.5em !important;float: left;">
                                <div class="input-group">
                                    <a href="{{ route('home') }}" class="btn_cancel"> 
                                        Cancel
                                    </a>    
                                </div>
                            </div>
                        </form>
                            <br>
                            <div class="col-sm-12 my-1" style="margin-top: 3em !important;float: left;padding-left: 1.6em;">
                                <a href="https://www.facebook.com/" target="_blank"><img src="/front-end/images/signup/facebook copy.png" class="icon_social_media" /></a>
                                <a href="https://www.instagram.com/" target="_blank"><img src="/front-end/images/signup/insta.png" class="icon_social_media" /></a>
                                <a href="https://twitter.com/" target="_blank"><img src="/front-end/images/signup/twitter.png" class="icon_social_media" /></a>
                            </div>
                        </div>

                    </div>
                    <div class="col align-self-end">
                    </div>
                </div>
            </div>
        </div>
    </div>
        @endsection

        @section('scripts')
            <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
           <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
             <!--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
            <script src="/front-end/js/main.js"></script>

      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

    <script>
        $(function () {
            $("#date_of_brith").datepicker();
        });
    </script>
    @endsection
