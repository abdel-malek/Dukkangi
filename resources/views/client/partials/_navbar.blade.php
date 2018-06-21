
<header id="header">
      <nav class="navbar navbar-expand-lg navbar-light bg-light " id="main-nav-bar" style="width: 102%;">
      <a href="{{route('home')}}"> <img class="logo" src="/front-end/images/logo.png"/></a>
        <div class="collapse navbar-collapse top_nav" id="main-navbar-items" style="display: block;text-align: right;">
          <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex" style="text-align: right;direction: ltr;float: right;">
            <li></li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('home') }}">@lang('Home')</a>
            </li>

            @if(!Auth::check() )

            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">@lang('Login')</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">@lang('Sign up')</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="{{ route('about-us') }}">@lang('About')</a>
            </li>
            @else



            <li class="nav-item">
              {{-- <a class="nav-link" href="{{ route('mycart')}}">@lang('My Cart') </a> --}}
              <a href="{{route('mycart')}}">
                <div id="ex3">
                  <span class="p1 fa-stack fa-1x has-badge" data-count=@if(!empty(Session::get('order_item_count'))) {{ Session::get('order_item_count')}} @else 0 @endif>
                    <i class="p2 fa fa-circle fa-stack-2x"></i>
                    <i class="p3 fa fa-shopping-cart fa-stack-2x fa-inverse" data-count=@if(!empty(Session::get('order_item_count'))) {{ Session::get('order_item_count')}} @else 0 @endif></i>
                  </span>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('profile')}}">@lang('My Account')</a>
            </li>

            <li class="nav-item">
              {!! Form::open(['route' => 'logout' , 'id' => 'logout-form']) !!}
                <a class="nav-link" href="javascript:{}" onclick="document.getElementById('logout-form').submit();" >@lang('Logout') </a>

              {!! Form::close() !!}
            </li>
            @endif



          </ul>
        </div>
      </nav>

      <nav class="navbar navbar-expand-lg navbar-light bg-light" id="lang-nav-bar">
        @if(Auth::check())
            <a class="navbar-brand rate-us" onclick="showratemodal();" style="cursor: pointer;" >@lang('Rate us?')</a>
          
        @else
          <a class="navbar-brand rate-us" id="#rateus" href="{{route('login')}}">@lang('Rate us?')</a>
        @endif
        <div class="collapse navbar-collapse" style="display:block;;text-align: right;" id="navbarSupportedContent">
          <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex" style="text-align: right;direction: ltr;float: right;">
            <li class="nav-item {{ App::isLocale('en')  ? 'active':'' }}">
              <a class="nav-link" href="/lang/en">
                <img src='/front-end/images/usa-flag.png' class='icon-flag'>
                English
              </a>
            </li>
            <li class="nav-item {{ App::isLocale('ar')  ? 'active':'' }}">
              <a class="nav-link" href="/lang/ar">
                <img src='/front-end/images/arabic-flag.png' class='icon-flag'>
                Arabic
              </a>
            </li>
            <li class="nav-item {{ App::isLocale('de')  ? 'active':'' }}">
              <a class="nav-link" href="/lang/de">
                <img src='/front-end/images/germany-flag.png' class='icon-flag'>
                German
              </a>
            </li>
            <li class="nav-item {{ App::isLocale('ku')  ? 'active':'' }}">
              <a class="nav-link" href="/lang/ku">
                <img src='/front-end/images/kurdish-flag.png' class='icon-flag'>
                Kurdish
              </a>
            </li>
            <li class="nav-item {{ App::isLocale('tr')  ? 'active':'' }}">
              <a class="nav-link" href="/lang/tr">
                <img src='/front-end/images/turkey-flag.png' class='icon-flag'>
                Turkish
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>


    <div class="modal_one_item_details" id="rate-us-modal" style="top:7em;float: left;height: 36 em;display: none" >
      <div class="col-md-12" >
        <h1>Rate Us</h1>
        {!! Form::open(['route' =>'review']) !!}
          
          {{ Form::label('rate','Rate:') }}
          <span class="rating star rate-us ratinge " style="bottom: 19.8em;"></span>     
          <input id="rate-us" type="number" name="rate" hidden="hidden">
          <hr>
          {{ Form::label('desc', 'Description:')}}
          {{ Form::textarea('desc', null, ['class'=>'form-control'] ) }}
          <hr>
          {{Form::submit('Submit' , ['class' => 'btn btn-block btn-success' , 'style' => 'margin-bottom:30x'])}}

          <a class="btn btn-block btn-default" onclick="$('#rate-us-modal').css({'display':'none'});" >Cancel</a>
        {!! Form::close() !!}
      </div>
    </div>