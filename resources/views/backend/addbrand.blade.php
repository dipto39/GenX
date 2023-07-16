@extends('backend.layouts.main')

@section('content')
<div id="brand_modal" class="modal p-8">
        <div class="login_box">
            <div class="login_box w-full text-slate-800">
                <h3 class="text-center text-[16px]">{{$btn}}</h3>
                <p class="text-red-500 hidden">Error Message</p>
                <form action="{{url($urll)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="email w-100">
                        Brand Name
                        <input class="w-full my-2 p-2 border outline-blue-500" type="text" name="brand_name" value="@if(isset($bvalue)) {{$cvalue[0]['bname']}} @endif  @if(old('brand_name')) old('brand_name') @endif">
                    </label>
                    @if ($errors->first('brand_name'))
                    <span class="text-red-500">{{ $errors->first('brand_name') }}</span>
                    <br>
                    @endif
                    <label for="">
                        Logo
                        <div
                            class="image_input h-28 w-28 bg-slate-200 mt-2 flex justify-center items-center cursor-pointer">
                            <input class="hidden" type="file" name="brand_img" id="brand_img">
                            <span class="plus_icon">+</span>
                            <img class="prev_img hidden z-10"
                                src="." alt="">
                        </div>
                    </label>
                    @if ($errors->first('brand_name'))
                    <span class="text-red-500">{{ $errors->first('brand_name') }}</span>
                    <br>
                    @endif
                    <button type="submit" class="my-2 p-2 bg-blue-500 text-white my-3">{{$btn}}</button>
                </form>
            </div>
        </div>
</div>
@endsection