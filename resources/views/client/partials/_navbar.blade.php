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

            @else



            <li class="nav-item">
              <a class="nav-link" href="{{ route('mycart')}}">@lang('My Cart') </a>
            </li>

            <li class="nav-item">
              {!! Form::open(['route' => 'logout' , 'id' => 'logout-form']) !!}
                <a class="nav-link" href="javascript:{}" onclick="document.getElementById('logout-form').submit();" >@lang('Logout') </a>

              {!! Form::close() !!}
            </li>
            @endif
            <li class="nav-item">
              <a class="nav-link" href="#">@lang('Help')</a>
            </li>


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
