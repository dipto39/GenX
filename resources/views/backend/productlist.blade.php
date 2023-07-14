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
        <dialog id="products_modal" class="modal p-8">
            <form method="dialog" class="modal-box">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                <div class="login_box">
                    <div class=" w-full text-slate-800">
                        <h3 class="text-center text-[16px]">Slider</h3>
                        <p class="text-red-500 hidden">Error Message</p>
                        <form action="">
                            <label for=" ">
                                Title
                                <input class="w-full my-2 p-2 border outline-blue-500" type="text">
                            </label>
                            <label for=" ">
                                Sub Title
                                <textarea class="w-full border" name="" id="" cols="30"
                                    rows="4"></textarea>
                            </label>
                            <label for=" ">
                                Image
                                <div
                                    class="slider_img h-28 w-28 bg-slate-200 mt-2 flex justify-center items-center cursor-pointer">
                                    <input class="hidden" type="file" name="" id="slider_img">
                                    <span class="plus_icon">+</span>
                                    <img class="prev_img hidden z-10"
                                        src="../assets/img/brand/anker.png" alt="">
                                </div>
                            </label>

                            <button type="submit" class="my-2 p-2 bg-blue-500 text-white">Add
                                Sliders</button>
                        </form>
                    </div>
                </div>
            </form>
        </dialog>
        <div class="brandtable p-4 pt-4 mt-3 bg-white ">
            <div class="oth flex justify-between items-center pt-4">
                <h3 class="text-[16px] font-semibold text-gray-600">Section</h3>
                <span class="bg-blue-400 text-white p-2 text-[14px] rounded-md cursor-pointer"
                    onclick="products_modal.showModal()">Add Sliders</span>
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
                    <tr class="border-b">
                        <td class="p-4">
                            <div class="bimg flex justify-center items-center">
                                <img class="h-5 " src="../assets/img/brand/anker.png" alt="">
                            </div>
                        </td>
                        <td class="p-4">Lorem ipsum dolor ...</td>
                        <td class="p-4">
                            D3FD-FADF32-RED44
                        </td>
                        <td class="p-4">
                            MSI
                        </td>
                        <td class="p-4">
                            Laptop
                        </td>
                        <td class="p-4">
                            24324.00
                        </td>
                        <td class="p-4">
                            <label class="switch">
                                <input type="checkbox" class="switch_chekbox">
                                <span class="slider round"></span>
                            </label>
                        </td>
                        <td class="p-4 flex justify-evenly text-[16px]">
                            <a class="border-blue-500 text-blue-500 px-1 border hover:bg-blue-500 hover:text-white"
                                href=""><i class="fa-regular fa-pen-to-square"></i></a>
                            <a class="border-red-500 text-red-500 px-1  border hover:bg-red-500 hover:text-white"
                                href=""><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection