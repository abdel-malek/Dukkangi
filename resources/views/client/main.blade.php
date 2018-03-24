<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>Dukkangi</title>
    
      @include('client.partials._head')


  </head>
  <body>
    @include('client.partials._navbar')


      @yield('main_section')


  @include('client.partials._footer')

    
  </body>

</html>
