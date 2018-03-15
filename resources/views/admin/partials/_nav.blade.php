    <header id="header">
    <div class="row">
        <div class="col-sm-4 col-xl-2 header-left">
            <div class="logo float-xs-left">
                <a href="#"><!-- LOGO  --></a>
            </div>
            <button class="left-menu-toggle float-xs-right">
                <i class="icon_menu toggle-icon"></i>
            </button>
            <button class="right-menu-toggle float-xs-right">
                <i class="arrow_carrot-left toggle-icon"></i>
            </button>
        </div>

        <div class="col-sm-8 col-xl-10 header-right ">
            <div class="header-inner-right">

                <div class="float-default chat">
                    <div class="right-icon ">
                        <a href="#" data-plugin="fullscreen">
                            <i class="arrow_expand"></i>
                        </a>
                    </div>
                </div>
                @if (Auth::check())
                <div class="user-dropdown pull-right">
                    <div class="btn-group">
                        <a href="#" class="user-header dropdown-toggle" data-toggle="dropdown"
                           data-animation="slideOutUp" aria-haspopup="true"
                           aria-expanded="false">
                            <img src="http://localhost:8000/css/download.png" width="128" height="32" alt="Profile image"/>
                        </a>
                        <div class="dropdown-menu drop-profile">
                            <div class="userProfile">
                                <!--  <img src="../../../assets/global/image/img_128x128.png" alt="Profile image"/>-->
                                <h5>{{Auth::user()->name}}</h5>
                                <p>{{ Auth::user()->email}} </p>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a class="btn left-spacing link-btn" href="#" role="button">Link</a>
                            <a class="btn left-second-spacing link-btn" href="#" role="button">Link 2</a>
                            {!! Form::open(['route' => 'logout']) !!}
                            {{Form::submit('Logout' , ['class' => 'btn btn-primary float-xs-right right-spacing'])}}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                @else
                 <div class="pull-right" style="margin-top: 5px">
                     <a class="btn btn-primary btn-lg btn-block" href="{{ route ('login') }}" role="button" >Login | Register </a>
                 </div>
                @endif
            </div>
        </div>
    </div>
    </header>


