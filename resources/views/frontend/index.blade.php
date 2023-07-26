@extends('frontend.layouts.main')
@push('title')
<title>GENX || Welcome To GENX</title>
@endpush
@section('content')


    <!-- Carousel section start  -->

    <div class="carousel">
        <div class="container flex ">
            <div class="carousel_left hidden lg:block">
                <div class="categories maincategories shadow-md">
                    @if (count($categories) > 0)
                    @foreach ($categories as $item)
                    <a href="{{ url('/category/'.str_replace(' ','_',$item['cname'])) }}" onmouseover="openCategory(event, '{{ str_replace(' ','_',$item['cname'])}}main')"
                    class="singlecate flex items-center justify-between px-3 py-2 tablink ">
                    <div class="category_icon flex items-center ">
                        <img src="{{asset($item['cimg'])}}" alt="{{$item['cname']}}">
                        <div class="category_name ms-2">
                            <span>{{$item['cname']}}</span>
                        </div>
                    </div>
                    <i class="fa-solid fa-angle-right"></i>
                   </a>
                <div class="tabcontent shadow-md" id="{{ str_replace(' ','_',$item['cname'])}}main">
                   <div class="subcategory ">
                       <div class="subcategory1">
                       @foreach ($Subcategories as $item2)
                        @if ($item2['cid'] == $item['id'])
                             <li><a href="{{url('/subcategory/'.str_replace(' ','_',$item['subcname']))}}">{{$item2['subcname']}}</a></li>
                        @endif
                            
                        @endforeach
                       </div>
                       
                       </div>
                   </div>
               @endforeach
               @endif       

                </div>
            </div>
            <div class="carousel_right">
                @if (count($sliders) > 0)
                        @foreach ($sliders as $item)
                        <div>
                            <div class="single_carousel flex items-center justify-between">
                                <div class="sleft">
                                    <h3>{{$item['title']}}</h3>
                                    <p>{{$item['sub']}}</p>
                                    <a href="{{url('/product/'.$item['pid'])}}" class="rounded-md ">View Products</a>
                                </div>
                                <div class="sright">
                                    <img src="{{$item['img']}}" alt="laptop">
                                </div>
                            </div>
                        </div>
                        @endforeach                
                @endif
              
            </div>
        </div>
    </div>
    <!-- Carousel section end  -->

    <!-- Flash Deals section start  -->
    @if (count($flashProducts) >0)
    <div class="flashSection bg-themebg py-7">
        <div class="container">
            <div class="heading flex justify-between items-center">
                <div class="heading_left">
                    <i class="fa-solid fa-bolt"></i>
                    <span class="heading_name">Flash Deals</span>
                </div>
                <div class="heading_right">
                    <a href="{{url('/section/flash_deals')}}">
                        <span>View all</span>
                        <i class="fa-solid fa-caret-right"></i>
                    </a>
                </div>
            </div>
            <div class="product_slider ">
                <div class="products flash_products relative">
                    @foreach ($flashProducts as $item)
                        <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="{{asset($item['pimg'])}}"
                                    alt="Shoes" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="{{url('/product/'.$item['name'])}}">{{$item['name']}}</a>
                                </div>
                                <div class="card_star">
                                    <div class="single_star text-yellow-500">
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
                                <span class="atfav text-ThemeColor" data-pid="{{$item['pid']}}">
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                            </div>
                        </div>

                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
    @endif
   

    <!-- Flash Deals section end -->

    <!-- Top category section start  -->
    @if (count($topCategory) >0)
    <div class="top_categories bg-themebg py-7">
        <div class="container">
            <div class="heading flex items-center">
                <div class="heading_left">
                    <i class="fa-brands fa-microsoft text-ThemeColor"></i>
                    <span class="heading_name">Top Categories</span>
                </div>
               
            </div>
            <div class="product_slider relative">
                <div class="products top_categories_box">
                    @foreach ($topCategory as $item)
                        <div class="catebox p-4 bg-white rounded">
                        <a href="{{url('/category/'.$item['cname'])}}" class="flex justify-center">
                            <div class="ovarbg p-2 relative">
                                <div class="overlay"></div>
                                <div class="cname absolute">{{$item['cname']}}</div>
                                <div class="cimg">
                                    <img class="object-cover" src="{{asset($item['cimg'])}}" alt="{{$item['cname']}}">
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    

                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- Top category section end -->

    <!-- New Arrivals section start  -->
    @if (count($newArrivals) >0)
    <div class="new_section bg-themebg py-7">
        <div class="container">
            <div class="heading flex justify-between items-center">
                <div class="heading_left">
                    <i class="fa-solid fa-circle-plus text-green-400"></i>
                    <span class="heading_name">New Arrivals</span>
                </div>
                <div class="heading_right">
                    <a href="{{url('/section/new_arrival')}}">
                        <span>View all</span>
                        <i class="fa-solid fa-caret-right"></i>
                    </a>
                </div>
            </div>
            <div class="product_slider">
                <div class=" arrivals_section grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-y-5">
                    @foreach ($newArrivals as $item)
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="{{asset($item['pimg'])}}"
                                    alt="{{$item['name']}}" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="{{url('/product/'.$item['name'])}}">{{$item['name']}}</a>
                                </div>

                                <div class="card-atctions ">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>{{$item['price']}}</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- New Arrivals section end -->

    <!-- Discounts section start  -->
    @if (count($discount) > 0)
    <div class="discount bg-themebg py-7">
        <div class="container">
            <div class="heading flex justify-between items-center">
                <div class="heading_left">
                    <i class="fa-solid fa-gift"></i>
                    <span class="heading_name">Big Discounts</span>
                </div>
                
            </div>
            <div class="product_slider">
                <div class="products discounts_section">
                    @foreach ($discount as $item)
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                src="{{asset($item['pimg'])}}"
                                alt="{{$item['name']}}" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="{{url('/product/'.$item['name'])}}">{{$item['name']}}</a>
                                </div>

                                <div class="card-atctions ">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>{{$item['price']}}</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>    
    @endif
    

    <!-- Discounts section end -->

    <!-- For you sction start  -->
    @if (count($foryou) > 0)
    <div class="foryou bg-themebg py-7">
        <div class="container">
            <div class="heading flex justify-between items-center">
                <div class="heading_left">
                    <span class="heading_name">More For you</span>
                </div>
                <div class="heading_right">
                    <a href="{{url('/section/for_you')}}">
                        <span>View all</span>
                        <i class="fa-solid fa-caret-right"></i>
                    </a>
                </div>
            </div>
            <div class="products ">
                <div class="foryou_section grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-y-5">
                    @foreach ($foryou as $item)
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                src="{{asset($item['pimg'])}}"
                                alt="{{$item['name']}}" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="{{url('/product/'.$item['name'])}}">{{$item['name']}}</a>
                                </div>

                                <div class="card-atctions ">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>{{$item['price']}}</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- For you sction end  -->

    <!-- services section start  -->
    @if (count($services))
         <div class="services bg-themebg py-7">
        <div class="container pb-5 services_boxs grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach ($services as $item)
                <div class="services_box p-8 bg-white rounded">
                <div class="icon">
                   <img class="w-7" src="{{asset($item['img'])}}" alt="img">
                </div>
                <div class="service_name">
                    <span>{{$item['title']}}</span>
                </div>
                <div class="sdis">
                    <p>{{$item['sub']}}</p>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
    @endif
   
    <!-- services section end -->
@endsection