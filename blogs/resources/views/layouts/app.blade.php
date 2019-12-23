<!doctype html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      
        <title>{{ config('app.name', 'Laravel') }} @yield('title')</title>
      
      <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>

      <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

      <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @yield('stylesheets')
        @yield('scripts')
        <style>
          .footer {
            position: auto;
            left: 0;
            bottom: 0;
            width: 100%;
           
            color: black;
            text-align: center;
          }
        </style>
  </head>
  <body>
    @include('inc.navbar')
    <div class="container">  
      @include('inc.messages')
      @yield('content')

      
    
    </div>
    <footer class="footer">
      <hr/>  
      <p>Copyright &copy; 2019, Manita Paudel</p>
    </footer>
  </body>
</html>
