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
                        Title
                        <input class="w-full my-2 p-2 border outline-blue-500" type="text" name="title" value="@if(isset($svalue)) {{$svalue['title']}} @endif  @if(old('title')) {{old('title')}} @endif">
                    </label>
                    @if ($errors->first('title'))
                    <span class="text-red-500">{{ $errors->first('title') }}</span>
                    <br>
                    @endif
                    <label for="email w-100">
                       Sub Title
                        <textarea class="w-full my-2 p-2 border outline-blue-500" type="text" name="sub_title">@if(isset($svalue)) {{$svalue['sub']}} @endif  @if(old('sub_title')) {{old('sub_title')}} @endif </textarea>
                    </label>
                    @if ($errors->first('sub_title'))
                    <span class="text-red-500">{{ $errors->first('sub_title') }}</span>
                    <br>
                    @endif
                    <label for="">
                        Icon
                        <div
                            class="image_input prev_box h-28 w-28 bg-slate-200 mt-2 flex justify-center items-center cursor-pointer">
                            <input class="hidden img_input" type="file" name="service_img" id="prev_input_img">
                            <span class="plus_icon ">+</span>
                            <img class="prev_img  z-10"
                                src="@if(isset($svalue)) {{asset($svalue['img'])}} @endif" alt="">
                        </div>
                    </label>
                    @if ($errors->first('service_img'))
                    <span class="text-red-500">{{ $errors->first('service_img') }}</span>
                    <br>
                    @endif
                    <button type="submit" class="my-2 p-2 bg-blue-500 text-white my-3">{{$btn}}</button>
                </form>
            </div>
        </div>
</div>
@endsection