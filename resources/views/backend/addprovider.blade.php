@extends('backend.layouts.main')

@section('content')
<div id="provider_modal" class="modal p-8">
        <div class="login_box">
            <div class="login_box w-full text-slate-800">
                <h3 class="text-center text-[16px]">{{$btn}}</h3>
                <p class="text-red-500 hidden">Error Message</p>
                <form action="{{url($urll)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="email w-100">
                        provider Name
                        <input class="w-full my-2 p-2 border outline-blue-500" type="text" name="provider_name" value="@if(isset($pvalue)) {{$pvalue['pname']}} @endif  @if(old('provider_name')) old('provider_name') @endif">
                    </label>
                    @if ($errors->first('provider_name'))
                    <span class="text-red-500">{{ $errors->first('provider_name') }}</span>
                    <br>
                    @endif
                    <label for="email w-100">
                        Delivery Days in Outside
                        <input class="w-full my-2 p-2 border outline-blue-500" type="nuumber" name="outside" value="@if(isset($pvalue)){{$pvalue['out']}}@endif @if(old('outside')){{old('outside')}}@endif">
                    </label>
                    @if ($errors->first('outside'))
                    <span class="text-red-500">{{ $errors->first('outside') }}</span>
                    <br>
                    @endif
                    <label for="email w-100">
                        Delivery Days in UAE
                        <input class="w-full my-2 p-2 border outline-blue-500" type="nuumber" name="in_UAE" value="@if(isset($pvalue)){{$pvalue['in']}}@endif @if(old('in_UAE')){{old('in_UAE')}}@endif">
                    </label>
                    @if ($errors->first('in_UAE'))
                    <span class="text-red-500">{{ $errors->first('in_UAE') }}</span>
                    <br>
                    @endif
                    <label for="">
                        Image
                        <div
                            class="image_input h-28 w-28 bg-slate-200 mt-2 flex justify-center items-center cursor-pointer">
                            <input class="hidden" type="file" name="provider_img" id="prev_input_img">
                            <span class="plus_icon">+</span>
                            <img class="prev_img  z-10"
                                src="@if(isset($pvalue)){{asset($pvalue['img'])}}@endif" alt="">
                        </div>
                    </label>
                    @if ($errors->first('provider_img'))
                    <span class="text-red-500">{{ $errors->first('provider_img') }}</span>
                    <br>
                    @endif
                    <button type="submit" class="my-2 p-2 bg-blue-500 text-white my-3">{{$btn}}</button>
                </form>
            </div>
        </div>
</div>
@endsection