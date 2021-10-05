@include('frontend.layouts.header')

@include('frontend.layouts.menu')

@yield('main')
@include('sweetalert::alert')
@include('frontend.layouts.footer')
