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
    background:rgba(255,0,0,.85);
    text-align:center;
    min-width: 1em;
    font-weight:bold;
  }
  #ex3 .fa-stack-1x, .fa-stack-2x{
    background-color:#d90000;
    border-radius: 100px;
  }
</style>
<header id="header">
      <nav class="navbar navbar-expand-lg navbar-light bg-light" id="main-nav-bar">
      <a href="{{route('home')}}"> <img class="logo" src="/front-end/images/logo.png"/></a>
        <div class="collapse navbar-collapse" id="main-navbar-items">
          <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('home') }}">@lang('Home')</a>
            </li>

            @if(!Auth::check() )

            <li class="nav-item">
              <a class="nav-link" href="{{route('login')}}">@lang('Login')</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('register')}}">@lang('Sign up')</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="#">@lang('About')</a>
            </li>
            @else



            <li class="nav-item">
              {{-- <a class="nav-link" href="{{ route('mycart')}}">@lang('My Cart') </a> --}}
              <a href="{{route('mycart')}}">
                <div id="ex3">
                  <span class="p1 fa-stack fa-1x has-badge" data-count=@if(!empty(Session::get('order_item_count'))) {{ Session::get('order_item_count')}} @endif>
                    <i class="p2 fa fa-circle fa-stack-2x"></i>
                    <i class="p3 fa fa-shopping-cart fa-stack-2x fa-inverse" data-count=@if(!empty(Session::get('order_item_count'))) {{ Session::get('order_item_count')}} @endif></i>
                  </span>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">@lang('My Account')</a>
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
        <a class="navbar-brand rate-us" href="#">@lang('Rate us?')</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
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
