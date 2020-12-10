@php
$config = [
    'appName' => config('app.name'),
    'locale' => $locale = app()->getLocale(),
    'locales' => config('app.locales'),
    'githubAuth' => config('services.github.client_id'),
];
@endphp
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>{{ config('app.name') }}</title>
  <link rel="stylesheet" href="{{asset('vendors/font-awesome/css/font-awesome.css')}}">
  <link rel="stylesheet" href="{{ asset('vendors/c3/c3.min.css') }}"/>
  <link rel="stylesheet" href="{{ mix('dist/css/app.css') }}">
  <link rel="stylesheet" href="{{ mix('dist/css/main.css') }}">
</head>
<body  class="theme-blue">
  <div id="app"></div>

  {{-- Global configuration object --}}
  <script>
    window.config = @json($config);
  </script>

  {{-- Load the application scripts --}}
  <script src="{{ asset('vendors/c3/c3.bundle.js') }}"></script>
  <script src="{{ mix('dist/js/app.js') }}"></script>
</body>
</html>
