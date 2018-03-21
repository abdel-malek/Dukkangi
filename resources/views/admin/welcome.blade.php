<!DOCTYPE html>
<html>
<head>
   @include('admin.partials._head')
</head>
<body>
<div class="wrapper">

    @include ('admin.partials._nav')


    <!-- Left Side Bar --> 
    @include ('admin.partials._leftbar')
    <section id="content-wrapper" class="form-elements">
        <!-- START PAGE TITLE -->
        <div class="site-content-title">
            <h2 class="float-xs-left content-title-main" style="margin-top: 50px">Dashboard</h2> 
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
            @yield('grid')


    </section>

</div>


</body>

@include ('admin.partials._footer')
</html>