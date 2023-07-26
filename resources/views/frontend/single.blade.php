@extends('frontend.layouts.main')
@push('title')
<title>GENX || {{$pname}}</title>
@endpush
@section('content')
    <!-- single page  -->
    <!-- showing single product section start  -->
    <div class="single_product py-2 bg-themebg">
        <div class="container flex justify-center ">
            <div class="sleft flex-1">
                <div class="pimg">
                    <img class="object-fill w-[600px]" src="{{asset($product[0]['pimg'])}}" alt="{{$product[0]['name']}}">
                </div>
                <div class="other_img flex justify-center h-[200px]">
                    @if ($product[0]['g1'])
                         <div class="other_single h-[60px] w-[60px] mx-2 cursor-pointer border p-2">
                        <img class="object-center max-h-[40px]" src="{{asset($product[0]['g1'])}}" alt="{{$product[0]['name']}}">
                    </div>
                    @endif
                    @if ($product[0]['g2'])
                        <div class="other_single h-[60px] w-[60px] mx-2 cursor-pointer border p-2">
                        <img class="object-center max-h-[40px]" src="{{asset($product[0]['g2'])}}" alt="{{$product[0]['name']}}">
                    </div>
                    @endif
                    @if ($product[0]['g3'])
                         <div class="other_single h-[60px] w-[60px] mx-2 cursor-pointer border p-2">
                        <img class="object-center max-h-[40px]" src="{{asset($product[0]['g3'])}}" alt="{{$product[0]['name']}}">
                    </div>
                    @endif
                    @if ($product[0]['g4'])
                        <div class="other_single h-[60px] w-[60px] mx-2 cursor-pointer border p-2">
                        <img class="object-center max-h-[40px]" src="{{asset($product[0]['g4'])}}" alt="{{$product[0]['name']}}">
                    </div>
                    @endif       
                    
                </div>
            </div>
            <div class="sright flex-1 text-slate-800 p-4">
                <div class="pname text-[25px] pb-3 pt-6">
                    <p>{{$product[0]['name']}}</p>
                </div>
                <div class="brand pb-2">
                    <p class="">Brand : <span class="text-slate-900 font-semibold">{{$brandName}}</span></p>
                </div>
                <div class="rate flex pb-4">
                    <p class="pr-2">Rated : </p>
                    <div class="stars text-yellow-400">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <span class="star_count">(0)</span>
                </div>
                <div class="price pb-2">
                    <h3 class="text-ThemeColor text-[22px] font-semibold"><span>AED </span> <b>{{$product[0]['price']}}</b></h3>
                </div>
                <p class="stock_status text-green-500 pb-4">Stock Available</p>
                <div class="counter pb-4">
                    <button class="single_decrement border-ThemeColor border py-2 px-4 hover:bg-ThemeColor hover:text-white">-</button>
                    <button class="quant_en py-2 px-4">1</button>
                    <button class="single_increment  border-ThemeColor border py-2 px-4 hover:bg-ThemeColor hover:text-white">+</button>
                </div>
                <button class="bg-ThemeColor text-white px-6 py-2 atoMainCart" data-pid="{{$product[0]['pid']}}">Add to Cart</button>
            </div>
        </div>
    </div>
    <!-- showing single product section end -->

    <!-- Description and Review section start  -->
    <div class="bg-themebg">
        <div class="container ">
            <div class="dandr_section overflow-hidden  text-slate-700 ">
                <button class="dr_tab bg-inherit float-left px-3 py-5 hover:bg-slate-400" onclick="dr_view(event, 'pdescription')" id="defaultOpen">Description</button>
                <button class="dr_tab bg-inherit float-left px-3 py-5 hover:bg-slate-400" onclick="dr_view(event, 'review')">Review</button>
        
              </div>
              <hr>
              
              <!-- Tab content -->
              <div id="pdescription" class="dr_content hidden p-5 border border-t-0">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In recusandae, quae iure numquam vero ducimus dolore quaerat veritatis nobis hic unde illum accusantium repellat assumenda, omnis, modi minus sint optio.
              </div>
              
              <div id="review" class="dr_content hidden p-5 border border-t-0">
                0
              </div>
        </div>
    </div>

    <!-- Description and Review section end  -->

    <!-- Related products section start  -->
    <div class="related_section p-5 bg-themebg">
        <div class="container">
            <h3 class="text-[24px] pb-5">Related Products</h3>
            <div class="products ">
                @if (count($related) > 0)
                <div class="grid grid-cols-4 gap-y-5">
                    @foreach ($related as $item)
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
        </div>
    </div>
@endsection