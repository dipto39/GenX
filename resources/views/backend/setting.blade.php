@extends('backend.layouts.main')
@section('content')
    
<div class="setting p-4 w-full bg-gray-200 overflow-auto h-full pb-20 ">
    <div class="setting_heading flex justify-between mb-7 ">
        <h3>Setting</h3>
        <div class="ddd text-gray-700 text-[13px]">
            <span class="ddd_link">
                <a href="">Home</a>
            </span>
            <span class="slash px-2">/</span>
            <span class="ddd_link">
                <a href="">Setting</a>
            </span>
        </div>
    </div>
    <div class="setting_body p-4 bg-white text-slate-600 ">
        <div class="tab_btns border-b my-5 text-[10]">
            <button class="setting_btn text-[14px] p-2 hover:text-blue-400 active" onclick="openStab(event, 'site_details')" id="defaultOpen">Site Details</button>
            <button class="setting_btn text-[14px] p-2 hover:text-blue-400" onclick="openStab(event, 'up_pass')">Password Update</button>
        </div>
        <div id="site_details" class="setting_content">
            <form action="@if($urll == ""){{url('admin/setting/add')}}@else{{$urll}}@endif" method="POST" class="text-[14px]" enctype="multipart/form-data"> 
                @csrf
                <div class="grid grid-cols-2 gap-x-6">
                    <div class="form_left flex-1">
                        <label for="">
                            <p>Company Name</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="text" name="name" value="@if($urll == "")@else {{$setting[0]['cn']}}@endif">
                        </label>
                        @if ($errors->first('name'))
            <span class="text-red-500">{{ $errors->first('name') }}</span>
            <br> @endif
                        <label for="">
                            <p>App Title</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="text" name="title"  value="@if($urll == "")@else{{$setting[0]['title']}}@endif">
                        </label>
                        @if ($errors->first('title'))
            <span class="text-red-500">{{ $errors->first('title') }}</span>
            <br> @endif
                        <label for="">
                            <p>Primary Email</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="email" name="primary_email" value="@if($urll == "")@else{{$setting[0]['pe']}}@endif">
                        </label>
                        @if ($errors->first('primary_email'))
            <span class="text-red-500">{{ $errors->first('primary_email') }}</span>
            <br> @endif
                        <label for="">
                            <p>Secondary Email</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="email" name="secondary_email" value="@if($urll == "")@else{{$setting[0]['se']}}@endif">
                        </label>
                        <label for="">
                            <p>Primary Phone</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="text" name="primary_phone" value="@if($urll == "")@else{{$setting[0]['pp']}}@endif">
                        </label>
                        @if ($errors->first('primary_phone'))
            <span class="text-red-500">{{ $errors->first('primary_phone') }}</span>
            <br> @endif
                        <label for="">
                            <p>Secondary Phone</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="text" name="secondary_phone" value="@if($urll == "")@else{{$setting[0]['sp']}}@endif">
                        </label>
                        
                    </div>
                    <div class="form_right flex-1">
                        <label for="">
                            <p>Currency</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="text" name="currency" value="@if($urll == "")@else{{$setting[0]['cu']}}@endif">
                        </label>
                        @if ($errors->first('currency'))
            <span class="text-red-500">{{ $errors->first('currency') }}</span>
            <br> @endif
                        <label for="">
                            <p>Currency Symbol</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="text" name="symbol" value="@if($urll == "")@else{{$setting[0]['cs']}}@endif">
                        </label>
                        @if ($errors->first('symbol'))
            <span class="text-red-500">{{ $errors->first('symbol') }}</span>
            <br> @endif
                        <label for="">
                            <p>Default Shipping Charge</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="number" name="charge" value="@if($urll == "")@else{{$setting[0]['sc']}}@endif">
                        </label>
                        @if ($errors->first('charge'))
            <span class="text-red-500">{{ $errors->first('charge') }}</span>
            <br> @endif
                        <label for="">
                            <p>Vat (%)</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="number" name="vat" value="@if($urll == "")@else{{$setting[0]['vat']}}@endif">
                        </label>
                        @if ($errors->first('vat'))
            <span class="text-red-500">{{ $errors->first('vat') }}</span>
            <br> @endif
                        <label for="">
                            <p>Main Site URL</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="url" name="site_url" value="@if($urll == "")@else{{$setting[0]['su']}}@endif">
                        </label>
                        @if ($errors->first('Site_url'))
            <span class="text-red-500">{{ $errors->first('Site_url') }}</span>
            <br> @endif
                        <label for="">
                            <p>Site Logo</p>
                            <div
                                class="image_input h-28 w-28 bg-slate-200 mt-2 flex justify-center items-center cursor-pointer">
                                <input class="hidden" type="file" name="logo" id="prev_input_img">
                                <span class="plus_icon">+</span>
                                <img class="prev_img  z-10" src="@if($urll == "")@else{{asset($setting[0]['logo'])}}@endif"
                                    alt="">
                            </div>

                        </label>
                        @if ($errors->first('log'))
            <span class="text-red-500">{{ $errors->first('log') }}</span>
            <br> @endif
                    </div>
                </div>
                <input class="bg-blue-800 px-4 py-2 rounded-md text-white" type="submit" value="Save">
            </form>
        </div>
        <div id="up_pass" class="Setting_content" style="display: none">
            <form action="{{url('admin/updatepass/'.$addpass[0]['id'])}}" class="text-[14px] w-60" method="POST">
                <h4>Password Update</h4>
               @if(Session::has('error'))
                    <p class="alert text-red-500">{{ Session::get('error') }}</p>
                    @endif
                <div class=" pt-5">
                    @csrf
                    <div class="form_left flex-1">
                        <label for="">
                            <p>Current Password</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="password" name="opass">
                                @if ($errors->first('opass'))
                                <span class="text-red-500">{{ $errors->first('opass') }}</span>
                                <br> @endif
                        </label>
                        <label for="">
                            <p>New Password</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="password" name="npass">
                                @if ($errors->first('npass'))
                                <span class="text-red-500">{{ $errors->first('npass') }}</span>
                                <br> @endif
                        </label>
                        <label for="">
                            <p>Confirm Password</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="password" name="conpass">
                                @if ($errors->first('conpass'))
                                <span class="text-red-500">{{ $errors->first('conpass') }}</span>
                                <br> @endif
                        </label>
                        <input class="bg-blue-800 px-4 py-2 rounded-md text-white" type="submit"
                            value="Save">


                    </div>

                </div>

            </form>
        </div>


    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        // document.getElementById("defaultOpen").click();
});
</script>
@endsection