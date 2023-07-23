@extends('backend.layouts.main')

@section('content')
<div id="provider_modal" class="modal p-8">
        <div class="login_box">
            <div class="login_box w-full text-slate-800">
                <h3 class="text-center text-[16px]">{{$btn}}</h3>
                <p class="text-red-500 hidden">Error Message</p>
                <form action="{{url($urll)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for=" w-100">
                        Title
                        <input class="w-full my-2 p-2 border outline-blue-500" type="text" name="title" value="@if(isset($svalue)) {{$svalue['title']}} @endif  @if(old('title')) {{old('title')}} @endif">
                    </label>
                    @if ($errors->first('title'))
                    <span class="text-red-500">{{ $errors->first('title') }}</span>
                    <br>
                    @endif
                    <label for=" w-100">
                        Sub Title
                        <input class="w-full my-2 p-2 border outline-blue-500" type="text" name="subtitle" value="@if(isset($svalue)){{$svalue['sub']}}@endif @if(old('subtitle')){{old('subtitle')}}@endif">
                    </label>
                    @if ($errors->first('subtitle'))
                    <span class="text-red-500">{{ $errors->first('subtitle') }}</span>
                    <br>
                    @endif
                    <label for=" w-100">
                       Product
                        <select name="product" id="" class="w-full my-2 p-2 border outline-blue-500">
                            <option value="" disabled selected>Select...</option>
                            @foreach ($products as $item)
                            <option value="{{$item['pid']}}" @isset($svalue)
                                @if ($item['pid'] == $svalue['pid'])
                                    selected
                                @endif
                            @endisset>{{$item['name']}}</option>
                            @endforeach
                        </select>
                    </label>
                    @if ($errors->first('in_UAE'))
                    <span class="text-red-500">{{ $errors->first('in_UAE') }}</span>
                    <br>
                    @endif
                    <label for="">
                        Image
                        <div
                            class="image_input h-28 w-28 bg-slate-200 mt-2 flex justify-center items-center cursor-pointer">
                            <input class="hidden" type="file" name="slider_img" id="prev_input_img">
                            <span class="plus_icon">+</span>
                            <img class="prev_img  z-10"
                                src="@if(isset($svalue)){{asset($svalue['img'])}}@endif" alt="">
                        </div>
                    </label>
                    @if ($errors->first('slider_img'))
                    <span class="text-red-500">{{ $errors->first('slider_img') }}</span>
                    <br>
                    @endif
                    <button type="submit" class="my-2 p-2 bg-blue-500 text-white my-3">{{$btn}}</button>
                </form>
            </div>
        </div>
</div>
@endsection