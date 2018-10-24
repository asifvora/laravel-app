<!DOCTYPE html>
<html class="no-js" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravel ReactJS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <noscript>
        You need to enable JavaScript to run this app.
        Here are the <a href="https://www.enable-javascript.com/" target="_blank">
        instructions how to enable JavaScript in your web browser</a>.
    </noscript>
    <main id="appMain" class="main-section">
        <div id="demo-app"></div>
        <script src="{{ mix('js/app.js')}}"></script>
    </main>
    <!-- Scripts -->
    <script>
      if ('serviceWorker' in navigator) {
        window.addEventListener('load', function() {
          navigator.serviceWorker.register("{{ asset('service-worker.js') }}").then(function(registration) {
            console.log('Service Worker registration successful', registration.scope);
          }, function(err) {
            console.log('Service Worker registration failed', err);
          }).catch(function(err) {
            console.log(err);
          });
        });
      } else {
        console.log('Service Worker is not supported by browser.');
      }
    </script>
</body>
</html>
