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
            <button class="setting_btn text-[14px] p-2 hover:text-blue-400 active" onclick="openStab(event, 'site_details')">Site Details</button>
            <button class="setting_btn text-[14px] p-2 hover:text-blue-400" onclick="openStab(event, 'up_pass')">Password Update</button>
        </div>
        <div id="site_details" class="setting_content ">
            <form action="" class="text-[14px]">
                <div class="grid grid-cols-2 gap-x-6">
                    <div class="form_left flex-1">
                        <label for="">
                            <p>Company Name</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="text">
                        </label>
                        <label for="">
                            <p>App Title</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="text">
                        </label>
                        <label for="">
                            <p>Primary Email</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="email">
                        </label>
                        <label for="">
                            <p>Secondary Email</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="email">
                        </label>
                        <label for="">
                            <p>Primary Phone</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="text">
                        </label>
                        <label for="">
                            <p>Secondary Phone</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="text">
                        </label>
                    </div>
                    <div class="form_right flex-1">
                        <label for="">
                            <p>Currency</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="text">
                        </label>
                        <label for="">
                            <p>Currency Symbol</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="text">
                        </label>
                        <label for="">
                            <p>Default Shipping Charge</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="number">
                        </label>
                        <label for="">
                            <p>Vat (%)</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="number">
                        </label>
                        <label for="">
                            <p>Main Site URL</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="url">
                        </label>
                        <label for="">
                            <p>Site Logo</p>
                            <div
                                class="image_input h-28 w-28 bg-slate-200 mt-2 flex justify-center items-center cursor-pointer">
                                <input class="hidden" type="file" name="" id="brand_img">
                                <span class="plus_icon">+</span>
                                <img class="prev_img hidden z-10" src="../assets/img/brand/anker.png"
                                    alt="">
                            </div>
                        </label>
                    </div>
                </div>
                <label for="">
                    <p>About</p>
                    <textarea class="w-full p-2 border my-2 mb-4 outline-none rounded-md" name="" id=""
                        cols="30" rows="4"></textarea>
                </label>
                <input class="bg-blue-800 px-4 py-2 rounded-md text-white" type="submit" value="Save">
            </form>
        </div>
        <div id="up_pass" class="Setting_content hidden">
            <form action="" class="text-[14px] w-60">
                <h4>Password Update</h4>
                <div class=" pt-5">
                    <div class="form_left flex-1">
                        <label for="">
                            <p>Current Password</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="password">
                        </label>
                        <label for="">
                            <p>New Password</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="password">
                        </label>
                        <label for="">
                            <p>Confirm Password</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="password">
                        </label>
                        <input class="bg-blue-800 px-4 py-2 rounded-md text-white" type="submit"
                            value="Save">


                    </div>

                </div>

            </form>
        </div>


    </div>
</div>
@endsection