<!DOCTYPE html>
<html lang="en">

@include('frontend.layouts.head')

<body>
    @include('frontend.layouts.topbar')
    @yield('content')
    @include('frontend.layouts.footer')
    @include('frontend.layouts.script')

</body>

</html>