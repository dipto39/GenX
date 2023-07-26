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
                        <form action="{{url('/checkout')}}" method="post" class="text-[14px]">
                            @csrf
                                <div class="grid grid-cols-2 gap-x-6">
                                    <div class="form_left flex-1">
                                        <label for="">
                                            <p>Name</p>
                                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                                type="text" name="name" value="{{isset($address) ? $address['name'] : old('name') }}">
                                                @if ($errors->first('name'))
                                                <span class="text-red-500">{{ $errors->first('name') }}</span>
                                                <br>
                                            @endif
                                        </label>
                                        <label for="">
                                            <p>Phone</p>
                                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                                type="text" name="phone" value="{{isset($address) ? $address['phone'] : old('phone') }}">
                                                @if ($errors->first('phone'))
                                                <span class="text-red-500">{{ $errors->first('phone') }}</span>
                                                <br>
                                            @endif
                                        </label>
                                        <label for="">
                                            <p>Address</p>
                                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                                type="text" name="address" value="{{isset($address) ? $address['name'] : old('address') }}">
                                                @if ($errors->first('address'))
                                                <span class="text-red-500">{{ $errors->first('address') }}</span>
                                                <br>
                                            @endif
                                        </label>
                                        <label for="">
                                            <p>Zip Code</p>
                                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                                type="number" name="zip_code" value="{{isset($address) ? $address['zip'] : old('zip_code') }}">
                                                @if ($errors->first('zip_code'))
                                                <span class="text-red-500">{{ $errors->first('zip_code') }}</span>
                                                <br>
                                            @endif
                                        </label>
                                        
                                    </div>
                                    <div class="form_right flex-1">
                                        <label for="">
                                            <p>Country</p>
                                          <select class="w-full p-2 border my-2 mb-4 outline-none rounded-md shipped_country" name="country" id="">
                                                <option value="" disabled selected>Select Countery</option>
                                                @if ($shipping)
                                                    @foreach ($shipping as $item)
                                                        <option value="{{$item['id']}}">{{$item['cname']}}</option>
                                                    @endforeach
                                                @endif
                                          </select>
                                          @if ($errors->first('country'))
                                                <span class="text-red-500">{{ $errors->first('country') }}</span>
                                                <br>
                                            @endif
                                        </label>
                                        <label for="">
                                            <p>State</p>
                                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                                type="text" name="state" value="{{isset($address) ? $address['zip'] : old('state') }}">
                                                @if ($errors->first('state'))
                                                <span class="text-red-500">{{ $errors->first('state') }}</span>
                                                <br>
                                            @endif
                                        </label>
                                        <label for="">
                                            <p>City</p>
                                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                                type="text" name="city" value="{{isset($address) ? $address['city'] : old('city') }}">
                                                @if ($errors->first('city'))
                                                <span class="text-red-500">{{ $errors->first('city') }}</span>
                                                <br>
                                            @endif
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
                                      @if ($errors->first('provider'))
                                                <span class="text-red-500">{{ $errors->first('provider') }}</span>
                                                <br>
                                            @endif
                                    </label>
                                    <label for="">
                                        <p>Preferable Date</p>
                                        <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                        type="date" name="preferable_date" value="{{old('preferable_date')}}">
                                    </label>
                                    <label for="">
                                        <p>Preferable Time</p>
                                        <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                        type="time" name="preferable_time" value="{{old('preferable_time')}}">
                                    </label>
                                </div>
                                
                                <button class="bg-ThemeColor px-4 py-2 rounded-md text-white ptop">Proced to Payment</button>
                                <div class="payment_option hidden">
                                    <div class="">
                                        <h3 class="text-lg py-6">Payment Methood</h3>
                                    </div>
                                    @if ($errors->first('paym'))
                                            <span class="text-red-500">{{ $errors->first('paym') }}</span>
                                            <br>
                                        @endif
                                    <div class="payment_method_section">
                                            <div class="flex items-center">
                                                <input name="paym" type="radio" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checked-checkbox" class="ml-5 text-sm font-medium text-gray-900 dark:text-gray-700">COD</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input name="paym" type="radio" value="2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checked-checkbox" class="ml-5 text-sm font-medium text-gray-900 dark:text-gray-700">Stripe</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input name="paym" type="radio" value="3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checked-checkbox" class="ml-5 text-sm font-medium text-gray-900 dark:text-gray-700">Paypal</label>
                                            </div>
                                            <input class="bg-ThemeColor px-4 py-2 mt-5 rounded-md text-white" type="submit" value="Process with COD">
                                    </div>
                                    
                                </div> 
                                
                        </form>
                    </div>
                    </div>
                    <div class="basis-1/5 dynamic_subtotal">
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