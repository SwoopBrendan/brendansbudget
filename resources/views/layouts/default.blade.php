<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('includes.head')
<body>
<div id="app">
    @include('includes.header')

    @include('includes.flash-message')

    <main class="pt-4">
        @yield('content')
    </main>
</div>
</body>
</html>
