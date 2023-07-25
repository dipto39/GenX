<!DOCTYPE html>
<html lang="en">

@include('frontend.layouts.head')
<body>
    @include('frontend.layouts.topbar',['setting' => $setting =App\Models\setting::all()],['categories' => $categories =App\Models\category::all(),'Subcategories' => $Subcategories =App\Models\Subcategories::all()])
    @yield('content')
    @include('frontend.layouts.footer')
    @include('frontend.layouts.script')

</body>

</html>