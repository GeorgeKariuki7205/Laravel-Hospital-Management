<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes.headTags')
    <body style="background-color:#d3e4f8;">
    @include('includes.navigation')

    @yield('body')
        
    @include('includes.footer')
    @include('includes.scripts')
    </body>
</html>