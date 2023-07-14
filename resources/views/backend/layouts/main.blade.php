<!DOCTYPE html>
<html lang="en">
@include('backend.layouts.head')
<body>
    <div class="main h-screen flex overflow-hidden">
        @include('backend.layouts.sidebar')
        <div class="content_bar w-full pb-6">
            @include('backend.layouts.heading')
            <div class="content h-full overflow-auto">
                @yield('content')
            </div>
        </div>
    </div>
   
@include('backend.layouts.script')
</body>

</html>