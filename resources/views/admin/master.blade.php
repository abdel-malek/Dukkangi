<!DOCTYPE html>
<html>
<head>
   @include('admin.partials._head')
   <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->

   <style>
   .footer{
     padding-top:10px;
   }
   .footer .btn-new {
      float: right;
    }
    .main-container{
      min-height: 250px;
      padding: 15px;
      margin-right: auto;
      margin-left: auto;
      padding-left: 15px;
      padding-right: 15px;
    }
    .jsgrid-search-button{
     background-image: url(front-end/images/user_actions/magnifying-glass.svg);   
    }
   </style>
   
</head>
<body>
<div class="wrapper">

    @include ('admin.partials._nav')


    <!-- Left Side Bar -->
    @include ('admin.partials._leftbar')
    <section id="content-wrapper" class="form-elements">
        <!-- START PAGE TITLE -->
        <div class="site-content-title">
            <h2 class="float-xs-left content-title-main" style="margin-top: 50px">
              @yield('title')
            </h2>
           <!-- START BREADCRUMB -->
            <ol class="breadcrumb float-xs-right" style="margin-top: 50px">
                <li class="breadcrumb-item">
                    <span class="fs1" aria-hidden="true" data-icon=""></span>Home
                </li>
                <li class="breadcrumb-item">Components</li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <!-- END BREADCRUMB -->
        </div>
            <!-- END PAGE TITLE -->

            <!-- CONTENT -->
        <input type='hidden' name='_token' value='{{csrf_token()}}' />
        @include('admin.partials._messages')
        <div class='main-container'>
            @yield('grid')
          </div>


    </section>

</div>
{{-- <footer id="footer" style="top:50%;">
    Copyright &copy; 2018, All Rights Reserved.
</footer>  --}}
  @include ('admin.partials._footer')
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
</html>
