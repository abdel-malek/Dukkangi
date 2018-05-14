    <meta charset="utf-8">
    <meta name="description" content="bootstrap default admin template">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href={{URL::asset('css/bootstrap.min.css')}} />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href={{URL::asset('css/elegant.min.css')}} />

<style >
    .nav .open>a, .nav .open>a:focus, .nav .open>a:hover{
        background-color: #333;
    }
</style>
    <link rel="stylesheet" href={{URL::asset('css/color-default.min.css')}} />
    <link rel="stylesheet" href={{URL::asset('css/perfect-scrollbar.min.css')}} />
    <!-- START TEMPLATE GLOBAL CSS -->
    <link rel="stylesheet" href={{URL::asset('css/components.min.css')}} />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css"/>

    <link rel="stylesheet" href={{URL::asset('css/font-awesome.min.css')}} />

    <link rel="stylesheet" href={{URL::asset('css/jsgrid-theme.min.css')}} />

    {{-- Select2  --}}
    <link rel="stylesheet" href={{URL::asset('css/select2.min.css')}} />
    <script type="text/javascript" src={{ URL::asset('js/select2.min.js') }}></script>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
      
    <!-- END TEMPLATE GLOBAL CSS -->
    <!-- START LAYOUT CSS -->
    <link rel="stylesheet" href={{URL::asset('css/layout.css')}} />

    <link rel="stylesheet" href={{URL::asset('css/util.css')}} />
    @yield('stylesheet')
    <!-- END LAYOUT CSS -->
    <title>Dukkangi Admin</title>
