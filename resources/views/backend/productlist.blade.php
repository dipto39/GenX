@extends('backend.layouts.main')
@section('content')
<div class="product_list p-4 w-full bg-gray-200 overflow-auto h-full pb-20 ">
    <div class="about_heading flex justify-between sticky">
        <h3>Products</h3>
        <div class="ddd text-gray-700 text-[13px]">
            <span class="ddd_link">
                <a href="">Home</a>
            </span>
            <span class="slash px-2">/</span>
            <span class="ddd_link">
                <a href="">Products</a>
            </span>
        </div>
    </div>
    <div class="product_list_body">
        <div class="brandtable p-4 pt-4 mt-3 bg-white ">
            <div class="oth flex justify-between items-center pt-4">
                <h3 class="text-[16px] font-semibold text-gray-600">Section</h3>
                <a href="{{url('admin/product/add')}}" class="bg-blue-400 text-white p-2 text-[14px] rounded-md cursor-pointer">Add Product</a>
            </div>
            <div class="products_filter flex justify-between items-center py-4">
                <div class="filter">
                    <label for="">
                        <select name="vendor" id=""
                            class="mx-2 outline-none cursor-pointer p-3 px-6 text-[12px] text-gray-500 bg-white border">
                            <option value="" selected disabled>Select Vendor</option>
                        </select>
                    </label>
                    <label for="" class="relative"> 
                        <span class="absolute text-bold cursor-pointer z-50 text-[12px] unselect_all hidden" style="top: 40%;right:20%;transform:translate(-50%,-20%)">X</span>
                        <select name="" id="select_f"
                        class="mx-2 outline-none cursor-pointer p-3 px-6 text-[12px] text-gray-500 bg-white border filter_input ">
                       
                        <option value="" selected disabled>Select section</option>
                        <option value="1">Flash Deals </option>
                        <option value="2">New Arrival</option>
                    </select>
                    </label>
                    <label for="" class="relative">
                        <span class="absolute text-bold cursor-pointer z-50 text-[12px] unselect_all hidden" style="top: 40%;right:20%;transform:translate(-50%,-20%)">X</span>
                        <select name="" id="select_category"
                            class="mx-2 outline-none cursor-pointer p-3 px-6 text-[12px] text-gray-500 bg-white border filter_input">
                            <option value="" selected disabled>Select Category</option>
                            @if (count($category) > 0)
                            @foreach ($category as $item)
                            <option value="{{$item['id']}}">{{$item['cname']}}</option>
                            @endforeach
                            @endif
                           
                        </select>
                    </label>
                    <label for="" class="relative">
                        <span class="absolute text-bold cursor-pointer z-50 text-[12px] unselect_all hidden" style="top: 40%;right:20%;transform:translate(-50%,-20%)">X</span>
                        <select name="" id="select_brand"
                            class="mx-2 outline-none cursor-pointer p-3 px-6 text-[12px] text-gray-500 bg-white border filter_input">
                            <option value="" selected disabled>Select Brand</option>
                            @if (count($brands) > 0)
                            @foreach ($brands as $item)
                            <option value="{{$item['bid']}}">{{$item['bname']}}</option>
                            @endforeach
                            @endif
                        </select>
                    </label>
                </div>
                <div class="search">
                    <div class="input-group flex relative">
                        <span class="absolute text-bold cursor-pointer z-50 text-[12px] unselect_all hidden" style="top: 40%;right:20%;transform:translate(-50%,-20%)">X</span>
                        <i class="fa-solid fa-magnifying-glass absolute top-3 left-3 text-gray-500"></i>
                        <input type="search" id="search_product" placeholder="Search…" class="border p-2 ps-11 rounded-md filter_input" />
                    </div>
                </div>
            </div>
           
            <table class="w-full text-[14px] text-gray-700 bg-white mt-5">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-4">Image</th>
                        <th class="p-4">Name</th>
                        <th class="p-4">SKU</th>
                        <th class="p-4">Brand</th>
                        <th class="p-4">Category</th>
                        <th class="p-4">Price</th>
                        <th class="p-4">status</th>
                        <th class="p-4">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center ptbody">
                     @if (count($products) > 0)
                    @php
                    $i=1;
                @endphp
                @foreach ($products as $item)
                    <tr class="border-b">
                        <td class="p-4">
                            <div class="bimg flex justify-center items-center">
                                <img class="h-5 " src="{{asset($item['pimg'])}}" alt="">
                            </div>
                        </td>
                        <td class="p-4">@php
                            echo substr($item['name'],0,10)
                        @endphp</td>
                        <td class="p-4">
                            {{$item['sku']}}
                        </td>
                        <td class="p-4">
                            @foreach ($brands as $item2)
                            @if ($item2['bid'] == $item['brand'])
                                {{$item2['bname']}}                                
                            @endif
                            @endforeach
            
                        </td>
                        <td class="p-4">
                            @if (is_numeric($item['ct']))
                                @foreach ($category as $item2)
                            @if ($item2['id'] == $item['ct'])
                                {{$item2['cname']}}                                
                            @endif
                            @endforeach
                            @else
                            @php
                                $sid=substr($item['ct'],2)
                            @endphp
                            @foreach ($subcategory as $item2)
                            @if ($item2['sid'] == $sid)
                                {{$item2['subcname']}}                                
                            @endif
                            @endforeach
                            @endif
                            
                        </td>
                        <td class="p-4">
                            {{$item['price']}}
                        </td>
                        <td class="p-4">
                            <label class="switch">
                                <input type="checkbox" class="switch_chekbox product_status" data-attr="{{$item['pid']}}" @if ($item['status'] == 1)
                                    checked
                                @endif>
                                <span class="slider round"></span>
                            </label>
                        </td>
                        <td class="p-4 flex justify-evenly text-[16px]">
                            <a class="border-blue-500 text-blue-500 px-1 border hover:bg-blue-500 hover:text-white"
                                href="{{url('admin/product/edit/'.$item['pid'])}}"><i class="fa-regular fa-pen-to-square"></i></a>
                            <a class="border-red-500 text-red-500 px-1  border hover:bg-red-500 hover:text-white"
                                href="{{url('admin/product/delete/'.$item['pid'])}}"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    @php
                    $i++;
                @endphp
                @endforeach
                @else
                  <h1 class="text-center text-red-500">No products Found !</h1>
             @endif
                </tbody>
            </table>
            
        </div>
    </div>
</div>
@endsection