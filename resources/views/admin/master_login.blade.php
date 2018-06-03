<!DOCTYPE html>
<html>
<head>
   @include('admin.partials._head')
   <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

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
    .header-left,
    .right-icon {
      display: none;
    }
   </style>

</head>
<body>
<div class="wrapper nav-menu-icon nav-menu-clicked">

    @include ('admin.partials._nav')

    <!-- Left Side Bar -->
    {{-- @include ('admin.partials._leftbar') --}}
    <section id="content-wrapper" class="form-elements">

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
