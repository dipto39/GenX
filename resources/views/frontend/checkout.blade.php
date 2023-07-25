@extends('frontend.layouts.main')
@push('title')
<title>Cart || GENX</title>
@endpush
@section('content')
              <!-- Checkout section start  -->
    <div class="cart_setion py-7 bg-themebg ">
        <div class="container ">
            <div class="">
                <div class="flex justify-center items-center py-5">
                    <button class="bg-ThemeColor text-white font-semibold py-2 px-5 rounded-3xl"> 1. Cart</button>
                <span class="w-10 bg-ThemeColor h-1"></span>
                <button class="bg-ThemeColor text-white font-semibold py-2 px-5 rounded-3xl relative">1. Details</button>
                <span class="w-10 bg-pink-200 h-1"></span>
                <button class="bg-pink-200 text-ThemeColor font-semibold py-2 px-5 rounded-3xl relative">1. Payment</button>
                </div>
                <div class="py-4 flex">
                    <div class="basis-4/5 me-4 p-5 bg-white rounded-md">
                    <div class="flex justify-between items-center">
                        <h3>Shipping Address</h3>
                    </div>
                    <div class="">
                        <form method="post" class="text-[14px]">
                                <div class="grid grid-cols-2 gap-x-6">
                                    <div class="form_left flex-1">
                                        <label for="">
                                            <p>Name</p>
                                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                                type="text">
                                        </label>
                                        <label for="">
                                            <p>Phone</p>
                                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                                type="text" name="phone">
                                        </label>
                                        <label for="">
                                            <p>Address</p>
                                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                                type="text" name="address">
                                        </label>
                                        <label for="">
                                            <p>Zip Code</p>
                                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                                type="number">
                                        </label>
                                        
                                    </div>
                                    <div class="form_right flex-1">
                                        <label for="">
                                            <p>Country</p>
                                          <select class="w-full p-2 border my-2 mb-4 outline-none rounded-md" name="country" id="">
                                                <option value="" disabled selected>Select Countery</option>
                                                @if ($shipping)
                                                    @foreach ($shipping as $item)
                                                        <option value="{{$item['id']}}">{{$item['cname']}}</option>
                                                    @endforeach
                                                @endif
                                          </select>
                                        </label>
                                        <label for="">
                                            <p>State</p>
                                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                                type="text">
                                        </label>
                                        <label for="">
                                            <p>City</p>
                                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                                type="text">
                                        </label>

                                    </div>
                                    <label for="">
                                        <p>Shipping Provider</p>
                                        <select class="w-full p-2 border my-2 mb-4 outline-none rounded-md" name="provider" id="">
                                            <option value="" disabled selected>Select Provier</option>
                                            @if ($providers)
                                                @foreach ($providers as $item)
                                                    <option value="{{$item['id']}}">{{$item['pname']}}</option>
                                                @endforeach
                                            @endif
                                      </select>
                                    </label>
                                    <label for="">
                                        <p>Preferable Date</p>
                                        <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                        type="date">
                                    </label>
                                    <label for="">
                                        <p>Preferable Time</p>
                                        <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                        type="time">
                                    </label>
                                </div>
                                
                                <input class="bg-ThemeColor px-4 py-2 rounded-md text-white" type="submit" value="Proced to Payment">
                         
                        </form>
                    </div>
                    </div>
                    <div class="basis-1/5">
                        <div class="rounded-md bg-white p-4 ">
                            <div class=" flex justify-between py-2">
                                <p class="text-slate-300">Subtotal : </p>
                                <h1>
                                    {{$subtotal}}
                                </h1>
                            </div>
                            <div class=" flex justify-between py-2">
                                <p class="text-slate-300">Shipping : </p>
                                <h1>0</h1>
                            </div>
                            <div class=" flex justify-between py-2">
                                <p class="text-slate-300">Tax : </p>
                                <h1>{{$taxval}}</h1>
                            </div>
                            <div class=" flex justify-between py-2">
                                <p class="text-slate-300">Discount : </p>
                                <h1>0</h1>
                            </div>
                            <h1 class="text-3xl float-right py-4">AED {{$subtotal+$taxval}}</h1>
                            <label for="">
                                <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                    type="text">
                            </label>
                            <button class="bg-ThemeColor text-white w-full py-2">Apply Voucher</button>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout section end  -->
@endsection