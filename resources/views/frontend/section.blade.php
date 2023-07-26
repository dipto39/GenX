@extends('frontend.layouts.main')
@push('title')
<title>GENX || Category</title>
@endpush
@section('content')
        <!-- category section start  -->
        <div class="category_page bg-themebg">
            <div class="container flex py-10">
            <div class="cleft text-[15px] text-slate-700 bg-white p-6 rounded-lg">
                <div class="price_range">
                    <h3 class="font-semibold pb-3">Price Range</h3>
                    <div class="flex items-center justify-center">
                        <div class="min_range_input">
                            <input class="px-4 py-2 w-24 border rounded outline-1 outline-ThemeColor" type="number" name="" id="min_range">
                        </div>
                        <span class="text-[40px] text-slate-400 px-3 mb-2">-</span>
                        <div class="max_range_input">
                            <input class="px-4 py-2 w-24 border rounded outline-1 outline-ThemeColor" type="number" name="" id="max_range">
                        </div>
                    </div>
                </div>
                @if (count($brands) > 0)
                <div class="brands">
                    <h3 class="font-semibold py-3">Brands</h3>
                                    
                    <div class="">
                    @foreach ($brands as $item)
                         <div class="single_brand mb-2 flex items-center">
                            <input class="pr-2" type="checkbox" name="brand" value="{{$item['id']}}">
                            <span class="pl-2">{{$item['bname']}}</span>
                        </div>
                    @endforeach
                    </div>
                  </div>   
                @endif

                <div class="Ratings">
                    <h3 class="font-semibold py-3">Ratings</h3>
                    <div class="">
                        <div class="single_rating mb-2 flex items-center">
                            <input class="pr-2" type="checkbox" name="" id=" ">
                            <div class="pl-2 text-yellow-500">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="single_rating mb-2 flex items-center">
                            <input class="pr-2" type="checkbox" name="" id=" ">
                            <div class="pl-2 text-yellow-500">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-regular fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="single_rating mb-2 flex items-center">
                            <input class="pr-2" type="checkbox" name="" id=" ">
                            <div class="pl-2 text-yellow-500">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-regular fa-star"></i></span>
                                <span><i class="fa-regular fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="single_rating mb-2 flex items-center">
                            <input class="pr-2" type="checkbox" name="" id=" ">
                            <div class="pl-2 text-yellow-500">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-regular fa-star"></i></span>
                                <span><i class="fa-regular fa-star"></i></span>
                                <span><i class="fa-regular fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="single_rating mb-2 flex items-center">
                            <input class="pr-2" type="checkbox" name="" id=" ">
                            <div class="pl-2 text-yellow-500">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-regular fa-star"></i></span>
                                <span><i class="fa-regular fa-star"></i></span>
                                <span><i class="fa-regular fa-star"></i></span>
                                <span><i class="fa-regular fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cright">
                <div class="products ">
                    @if (count($products) > 0)
                    <div class="grid grid-cols-3 gap-y-5">
                        @foreach ($products as $item)
                              <div class="pbbox shadow-md relative bg-white">
                            <div class="card p-3 shadow-md">
                                <figure><img
                                        src="{{asset($item['pimg'])}}"
                                        alt="Shoes" /></figure>
                                <div class="card-body">
                                    <div class="ptitle">
                                        <a href="{{url('/product/'.$item['name'])}}">{{$item['name']}}</a>
                                    </div>
                                    <div class="card_star">
                                        <div class="single_star">
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="card-atctions flex justify-between items-center">
                                        <div class="price_box flex text-ThemeColor">
                                            <div class="currency pe-2">
                                                <span>AED</span>
                                            </div>
                                            <div class="price">
                                                <span>{{$item['price']}}</span>
                                            </div>
                                        </div>
                                        <div class="atoCart border text-ThemeColor cursor-pointer" data-pid="{{$item['pid']}}">
                                            <span class="px-2 text-2xl">+</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="view_heart">
                                    <span class="view text-topbar">
                                        <i class="fa-solid fa-eye"></i>
                                    </span>
                                    <span class="atfav text-ThemeColor">
                                        <i class="fa-regular fa-heart"></i>
                                    </span>
                                </div>
                            </div>
    
                        </div>
                        @endforeach
                      
                    </div>
                    @else
                       <div class="">
                        <h1 class="text-center text-red-500">No Product Found !</h1>
                        </div> 
                    @endif

                </div>
                <div class="result_count flex justify-between text-slate-500 text-[14px] p-4 mt-5">
                    <p>Showing 1-{{count($product)}} of {{count($product)}} Products</p>
                    <div class="pagination flex text-[20px]">
                        <div class="prev h-7 w-7 rounded-full border text-ThemeColor opacity-40 hover:opacity-100 border-ThemeColor flex justify-center items-center">
                            <a href=""><i class="fa-solid fa-angle-left"></i></a>
                        </div>
                        <div class="prev mx-3 next prev h-7 w-7 rounded-full border text-ThemeColor border-ThemeColor flex justify-center items-center">
                            <span class="">1</span>
                        </div>
                        <div class="next prev h-7 w-7 rounded-full border text-ThemeColor opacity-40 hover:opacity-100 border-ThemeColor flex justify-center items-center">
                            <a href=""><i class="fa-solid fa-angle-right"></i></a>
                        </div>
                        
                    </div>
                </div>
            </div>
            </div>
          
        </div>
    <!-- category section end -->
@endsection