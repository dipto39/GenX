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
                        <select name="" id=""
                            class="mx-2 outline-none cursor-pointer p-3 px-6 text-[12px] text-gray-500">
                            <option value="" selected disabled>Select Vendor</option>
                        </select>
                    </label>
                    <label for="">
                        <select name="" id=""
                            class="mx-2 outline-none cursor-pointer p-3 px-6 text-[12px] text-gray-500">
                            <option value="" selected disabled>Select Vendor</option>
                        </select>
                    </label>
                    <label for="">
                        <select name="" id=""
                            class="mx-2 outline-none cursor-pointer p-3 px-6 text-[12px] text-gray-500">
                            <option value="" selected disabled>Select Vendor</option>
                        </select>
                    </label>
                    <label for="">
                        <select name="" id=""
                            class="mx-2 outline-none cursor-pointer p-3 px-6 text-[12px] text-gray-500">
                            <option value="" selected disabled>Select Vendor</option>
                        </select>
                    </label>
                </div>
                <div class="search">
                    <div class="input-group flex relative">
                        <i class="fa-solid fa-magnifying-glass absolute top-3 left-3 text-gray-500"></i>
                        <input type="text" placeholder="Search…" class="border p-2 ps-11 rounded-md" />
                    </div>
                </div>
            </div>
            @if (count($products) > 0)
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
                <tbody class="text-center">
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
                            {{$item['bname']}}
                        </td>
                        <td class="p-4">
                            {{$item['cname']}}
                        </td>
                        <td class="p-4">
                            {{$item['price']}}
                        </td>
                        <td class="p-4">
                            <label class="switch">
                                <input type="checkbox" class="switch_chekbox" @if ($item['status'] == 1)
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
                </tbody>
            </table>
            @else
            <h1 class="text-center text-red-500">No products Found !</h1>
        @endif
        </div>
    </div>
</div>
@endsection