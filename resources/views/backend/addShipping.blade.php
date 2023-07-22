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
                    Country Name
                    <input class="w-full my-2 p-2 border outline-blue-500" type="text" name="name" value="@if(isset($svalue)) {{$svalue['cname']}} @endif  @if(old('name')) {{old('name')}} @endif">
                </label>
                @if ($errors->first('brand_name'))
                <span class="text-red-500">{{ $errors->first('brand_name') }}</span>
                <br>
                @endif

                <label for="email w-100">
                    Shipping Charge
                    <input class="w-full my-2 p-2 border outline-blue-500" type="number" name="shipping_charge" value="@if(isset($svalue)){{$svalue['sc']}}@endif">
                </label>
                @if ($errors->first('shipping_charge'))
                <span class="text-red-500">{{ $errors->first('shipping_charge') }}</span>
                <br>
                @endif
                <label class="switch my-5">
                    <input type="checkbox" class="switch_chekbox" name="cod" @if(isset($svalue))@if ($svalue['cod'])
                   checked
                    @endif @endif>
                    <span class="slider round"></span>
                </label>
                @if ($errors->first('brand_name'))
                <span class="text-red-500">{{ $errors->first('brand_name') }}</span>
                <br>
                @endif
                <br>
                <button type="submit" class="my-2 p-2 bg-blue-500 text-white my-3">{{$btn}}</button>
            </form>
        </div>
    </div>
</div>
@endsection