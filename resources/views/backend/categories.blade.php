@extends('backend.layouts.main')
@section('content')
    
<div class="categories p-4 w-full bg-gray-200 overflow-auto h-full pb-20">
    <div class="cate_heading flex justify-between ">
        <h3>Categories</h3>
        <div class="ddd text-gray-700 text-[13px]">
            <span class="ddd_link">
                <a href="">Home</a>
            </span>
            <span class="slash px-2">/</span>
            <span class="ddd_link">
                <a href="">Categories</a>
            </span>
        </div>
    </div>
    <div class="oth flex justify-between items-center pt-4">
        <h3 class="text-[16px] font-semibold text-gray-600">Category Tree</h3>
        <a class="bg-blue-400 text-white p-2 text-[14px] rounded-md" href="">Add Categories</a>
    </div>
    <div class="categories_tree mx-60 py-8 px-2 bg-white">
        <div class="maincata have_sub flex items-center p-4 bg-slate-100 relative">
            <div class="cimg mr-4">
                <img class="h-8" src="../assets/img/product-icon/cable.png" alt="icon">
            </div>
            <h3 class="text-[20px] text-slate-600">Category Name</h3>
            <span class="down_icon"><i class="fa-solid fa-chevron-down"></i></span>
            <span class="trush_icon hidden"><a href=""> <i class="fa-solid fa-trash-can"></i></a></span>
            <span class="edit_icon"><a href=""><i class="fa-regular fa-pen-to-square"></i></a></span>
        </div>
        <div class="subcate bg-slate-200 pl-10 hidden">
            <ul>
                <li class="py-4 pr-5 relative">
                    Name
                    <span class="edit_icon text-[20px]"><a href=""><i
                                class="fa-regular fa-pen-to-square"></i></a></span>
                    <span class="trush_icon float-right"><i class="fa-solid fa-trash-can"></i></span>
                </li>
                <li class="py-4 pr-5 relative">
                    Name
                    <span class="edit_icon text-[20px]"><a href=""><i
                                class="fa-regular fa-pen-to-square"></i></a></span>
                    <span class="trush_icon float-right"><i class="fa-solid fa-trash-can"></i></span>
                </li>
            </ul>
        </div>

    </div>
</div>
@endsection