@extends('backend.layouts.main')
@section('content')
<div class=" p-4 w-full bg-gray-200 overflow-auto h-full pb-20">
    <div class="setting_body p-4 bg-white text-slate-600 ">
        <div class="tab_btns border-b my-5 text-[20px]">
           <h2 class="py-3">{{$btn}}</h2>
        </div>
        <div id="site_details" class="setting_content ">
            <form action="{{url($urll)}}" class="text-[14px]" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="py-4">
                    <h1 class="py-4 text-lg">General Section</h1>
                    <div class="grid grid-cols-2 gap-x-6">
                    <div class="form_left flex-1">
                        <label for="">
                            <p> Name</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="text" name="name" value="{{isset($value) ? $value['cn'] : old('name') }}">
                                @if ($errors->first('name'))
                                <span class="text-red-500">{{ $errors->first('name') }}</span>
                                <br>
                            @endif
                        </label>
                        <label for="">
                            <p>Code</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="text" name="code" value="{{isset($value) ? $value['cd'] : old('code') }}">
                                @if ($errors->first('code'))
                                <span class="text-red-500">{{ $errors->first('code') }}</span>
                                <br>
                            @endif
                        </label>
                        <label for="">
                            <p>value</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="number" name="value"  value="{{isset($value) ? $value['vl'] : old('value') }}">
                                @if ($errors->first('value'))
                                <span class="text-red-500">{{ $errors->first('value') }}</span>
                                <br>
                            @endif
                        </label>
                         <p class="text-[16px] py-4">Free Shipping<label class="switch ml-5">
                        <input type="checkbox" class="switch_chekbox" name="free_shipping" checked="@if (isset($value)) @if($value['fs'] == 1) checked @endif @endif"/>
                        <span class="slider round"></span>
                    </label></p>
                    </div>
                    <div class="form_right flex-1">
                        <label for="">
                            <p>Usage lImit Per Coupon</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="number" name="ulpc" value="{{isset($value) ? $value['ul'] : old('ulpc') }}">
                                @if ($errors->first('ulpc'))
                                <span class="text-red-500">{{ $errors->first('ulpc') }}</span>
                                <br>
                            @endif
                        </label>
                        <label for="">
                            <p>Usage lImit Per Customer</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="number" name="ulpcu" value="{{isset($value) ? $value['ul'] : old('ulpcu') }}">
                                @if ($errors->first('ulpcu'))
                                <span class="text-red-500">{{ $errors->first('ulpcu') }}</span>
                                <br>
                            @endif
                        </label>
                        <label for="">
                            <p>Min Spend</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="number" name="min_spend" value="{{isset($value) ? $value['ms'] : old('min_spend') }}">
                                @if ($errors->first('min_spend'))
                                <span class="text-red-500">{{ $errors->first('min_spend') }}</span>
                                <br>
                            @endif
                        </label>
                        <label for="">
                            <p>Start Date</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="date" name="start_date" value="{{isset($value) ? $value['sd'] : old('start_date') }}">
                                @if ($errors->first('start_date'))
                                <span class="text-red-500">{{ $errors->first('start_date') }}</span>
                                <br>
                            @endif
                        </label>
                        <label for="">
                            <p>End Date</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="date" name="end_date" value="{{isset($value) ? $value['ed'] : old('end_date') }}">
                                @if ($errors->first('end_date'))
                                <span class="text-red-500">{{ $errors->first('end_date') }}</span>
                                <br>
                            @endif
                        </label>
                    </div>
                    </div>
                </div>
                <input class="bg-blue-800 px-4 py-2 rounded-md text-white" type="submit" value="{{$btn}}">
            </form>
        </div>

    </div>
</div>    
@endsection