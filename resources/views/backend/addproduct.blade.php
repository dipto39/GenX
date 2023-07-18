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
                                type="text" name="name" >
                                @if ($errors->first('name'))
                                <span class="text-red-500">{{ $errors->first('name') }}</span>
                                <br>
                            @endif
                        </label>
                        <label for="">
                            <p>SKU</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="text" name="sku">
                        </label>
                        <label for="">
                            <p>Model</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="text" name="model">
                        </label>
                    </div>
                    <div class="form_right flex-1">
                        <label for="">
                            <p>Brand</p>
                            <select name="brand" id="" class="w-full p-2 border my-2 mb-4 outline-none rounded-md" required>
                                <option value=""></option>
                            </select>
                            @if ($errors->first('brand'))
                            <span class="text-red-500">{{ $errors->first('brand') }}</span>
                            <br>
                        @endif
                        </label>
                        <label for="">
                            <p>Category</p>
                            <select name="category" id="" class="w-full p-2 border my-2 mb-4 outline-none rounded-md" required>
                                <option value=""></option>
                            </select>
                            @if ($errors->first('category'))
                            <span class="text-red-500">{{ $errors->first('category') }}</span>
                            <br>
                        @endif
                        </label>
                        <label for="">
                            <p>Unit</p>
                            <select name="unit" id="" class="w-full p-2 border my-2 mb-4 outline-none rounded-md">
                                <option value=""></option>
                            </select>
                        </label>
                    </div>
                    </div>
                </div>
                <div class="py-4">
                    <h1 class="py-4 text-lg">Quanity</h1>
                    <div class="grid grid-cols-2 gap-x-6">
                    <div class="form_left flex-1">
                        <label for="">
                            <p> Unit Quantity</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="number" name="unit_quantity" >
                        </label>
                        <label for="">
                            <p>Stock Quantity</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="number" name="stock_quantity" required>
                        </label>
                        @if ($errors->first('stock_quantity'))
                        <span class="text-red-500">{{ $errors->first('stock_quantity') }}</span>
                        <br>
                    @endif
                    </div>
                    <div class="form_right flex-1">
                        <label for="">
                            <p>Stock Alert Quantity</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="number" name="stock_alert_quantity" >
                        </label>
                    </div>
                    </div>
                </div>
                <div class="py-4">
                    <h1 class="py-4 text-lg">Description</h1>
                    <div class="form_left ">
                        <label for="">
                            <p>Short Description</p>
                            <textarea class="w-full p-2 border my-2 mb-4 outline-none rounded-md" name="short_description" id="" cols="30" rows="4"></textarea>
                        </label>
                        <label for="">
                            <p>Description</p>
                            <textarea class="w-full p-2 border my-2 mb-4 outline-none rounded-md" name="description" id="" cols="30" rows="6" required></textarea>
                            @if ($errors->first('description'))
                            <span class="text-red-500">{{ $errors->first('description') }}</span>
                            <br>
                        @endif
                        </label>
                    </div>
                </div>
                <div class="py-4">
                    <h1 class="py-4 text-lg">Price</h1>
                    <div class="grid grid-cols-2 gap-x-6">
                    <div class="form_left flex-1">
                        <label for="">
                            <p>Price</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="number" name="price" required>
                                @if ($errors->first('price'))
                                <span class="text-red-500">{{ $errors->first('price') }}</span>
                                <br>
                            @endif
                        </label>
                        <label for="">
                            <p>Discount</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                type="number" name="stock_quantity">
                        </label>
                    </div>
                    <div class="form_right flex-1">
                        <label for="">
                            <p>Discount Price Start Date</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                            type="date" name="discount_price_start">
                        </label>
                        <label for="">
                            <p>Special Price End Date</p>
                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                            type="date" name="discount_price_end">
                        </label>
                    </div>
                    </div>
                </div>
                <div class="py-4">
                    <h1 class="py-4 text-lg">Status</h1>
                    <div class="">
                        <p class="text-[16px] py-4">Available / Stock available  <label class="switch ml-5">
                            <input type="checkbox" class="switch_chekbox" name="stock_available">
                            <span class="slider round"></span>
                        </label></p>
                        <p class="text-[16px] py-4">Stock Visiblity <label class="switch ml-5">
                            <input type="checkbox" class="switch_chekbox">
                            <span class="slider round"></span>
                        </label></p>
                        <p class="text-[16px] py-4">Status<label class="switch ml-5">
                            <input type="checkbox" class="switch_chekbox">
                            <span class="slider round"></span>
                        </label></p>
                        <p class="text-[16px] py-4">Flash Deal<label class="switch ml-5">
                            <input type="checkbox" class="switch_chekbox">
                            <span class="slider round"></span>
                        </label></p>
                        <p class="text-[16px] py-4">New Arrival <label class="switch ml-5">
                            <input type="checkbox" class="switch_chekbox">
                            <span class="slider round"></span>
                        </label></p>
                    </div>
                    
                </div>
                <div class="py-4">
                    <h1 class="py-4 text-lg">Images</h1>
                    <div class=" flex">
                        <div class=" me-10">
                            <p>Product Image</p>
                            <div class="prev_box h-20 w-20 border border-dashed p-1 cursor-pointer flex justify-center items-center">
                                <img src="" alt="">
                                <input type="file" class="img_input" name="product_image" hidden>
                                <span>+</span>
                            </div>
                            @if ($errors->first('product_image'))
                            <span class="text-red-500">{{ $errors->first('product_image') }}</span>
                            <br>
                        @endif
                        </div>
                        <div class="">
                            <p>Thumb Image</p>
                            <div class="prev_box h-20 w-20 border border-dashed p-1 cursor-pointer flex justify-center items-center">
                                <img src="" alt="">
                                <input type="file" class="img_input" name="thumb_image" hidden>
                                <span>+</span>
                            </div>
                        </div>
                    </div>

                    <div class="gimg py-5">
                        <h2>Gallery Images</h2>
                        <div class=" flex">
                            <div class=" me-5">
                                <div class="prev_box h-20 w-20 border border-dashed p-1 cursor-pointer flex justify-center items-center">
                                    <img src="" alt="">
                                    <input type="file" class="img_input" name="g1" hidden>
                                    <span>+</span>
                                </div>
                            </div>
                            <div class=" me-5">
                                <div class="prev_box h-20 w-20 border border-dashed p-1 cursor-pointer flex justify-center items-center">
                                    <img src="" alt="">
                                    <input type="file" class="img_input" name="g2" hidden>
                                    <span>+</span>
                                </div>
                            </div>
                            <div class=" me-5">
                                <div class="prev_box h-20 w-20 border border-dashed p-1 cursor-pointer flex justify-center items-center">
                                    <img src="" alt="">
                                    <input type="file" class="img_input" name="g3" hidden>
                                    <span>+</span>
                                </div>
                            </div>
                            <div class=" me-5">
                                <div class="prev_box h-20 w-20 border border-dashed p-1 cursor-pointer flex justify-center items-center">
                                    <img src="" alt="">
                                    <input type="file" class="img_input" name="g4" hidden>
                                    <span>+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <input class="bg-blue-800 px-4 py-2 rounded-md text-white" type="submit" value="{{$btn}}">
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