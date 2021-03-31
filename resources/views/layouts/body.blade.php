<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @yield('title')
    @include('layouts.head')
</head>

<body>
    <div class="se-pre-con"></div>
    @if (Route::currentRouteName()!='login')
    @include('layouts.menu')
    @endif
    @yield('content')
    @if (Route::currentRouteName()!='login')
    @include('layouts.footer')
    @endif
    @include('layouts.script')
</body>

</html>