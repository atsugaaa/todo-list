<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head>
    <title>ToDo | @yield('title', '')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-50">
    @yield('content') 
</body>
  @vite('resources/js/app.js')
  @yield('script')
</html>