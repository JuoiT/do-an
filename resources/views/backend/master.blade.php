@include('backend.layouts.header')

@include('backend.layouts.menu')

@yield('main')
@if (Session::get('success'))
    @section('script')
        <script>
            text = `<strong class="waves-effect waves-light green-text gradient-shadow">{{Session::get('success')}}</strong>`;
            toast(text);
        </script>
    @endsection
@endif

@if (Session::get('error'))
    @section('script')
        <script>
            text = `<strong class="waves-effect waves-light green-text gradient-shadow">{{Session::get('error')}}</strong>`;
            toast(text);
        </script>
    @endsection
@endif


@include('backend.layouts.footer')
