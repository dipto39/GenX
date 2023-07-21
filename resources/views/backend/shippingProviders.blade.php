@extends('backend.layouts.main')
@section('content')
<div class="brands p-4 w-full bg-gray-200 overflow-auto h-full pb-20 hidden">
    <div class="brand_heading flex justify-between sticky">
        <h3>Brand</h3>
        <div class="ddd text-gray-700 text-[13px]">
            <span class="ddd_link">
                <a href="">Home</a>
            </span>
            <span class="slash px-2">/</span>
            <span class="ddd_link">
                <a href="">Brand</a>
            </span>
        </div>
    </div>
    <div class="brand_body">
        <!-- brand modal section  -->
        <dialog id="brand_modal" class="modal p-8">
            <form method="dialog" class="modal-box">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                <div class="login_box">
                    <div class="login_box w-full text-slate-800">
                        <h3 class="text-center text-[16px]">Add Brand</h3>
                        <p class="text-red-500 hidden">Error Message</p>
                        <form action="">
                            <label for="email w-100">
                                Name
                                <input class="w-full my-2 p-2 border outline-blue-500" type="text">
                            </label>
                            <label for="">
                                Logo
                                <div
                                    class="image_input h-28 w-28 bg-slate-200 mt-2 flex justify-center items-center cursor-pointer">
                                    <input class="hidden" type="file" name="" id="brand_img">
                                    <span class="plus_icon">+</span>
                                    <img class="prev_img hidden z-10"
                                        src="../assets/img/brand/anker.png" alt="">
                                </div>
                            </label>

                            <button type="submit" class="my-2 p-2 bg-blue-500 text-white">Add
                                Brand</button>
                        </form>
                    </div>
                </div>
            </form>
        </dialog>
        <div class="brandtable p-4 pt-4 bg-white ">
            <div class="oth flex justify-between items-center pt-4">
                <h3 class="text-[16px] font-semibold text-gray-600">Brands</h3>
                <span class="bg-blue-400 text-white p-2 text-[14px] rounded-md cursor-pointer"
                    onclick="brand_modal.showModal()">Add Brand</span>
            </div>

            <table class="w-full text-[14px] text-gray-700 bg-white mt-5">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-4">#</th>
                        <th class="p-4">Title</th>
                        <th class="p-4">Image</th>
                        <th class="p-4">Status</th>
                        <th class="p-4">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr class="border-b">
                        <td class="p-4">1</td>
                        <td class="p-4">Apple</td>
                        <td class="p-4">
                            <div class="bimg flex justify-center items-center">
                                <img class="h-5 " src="../assets/img/brand/anker.png" alt="">
                            </div>
                        </td>
                        <td class="p-4">
                            <label class="switch">
                                <input type="checkbox" class="switch_chekbox">
                                <span class="slider round"></span>
                            </label>
                        </td>
                        <td class="p-4 flex justify-evenly text-[16px]">
                            <a class="border-blue-500 text-blue-500 px-1  " href=""><i
                                    class="fa-regular fa-pen-to-square"></i></a>
                            <a class="border-red-500 text-red-500 px-1  " href=""><i
                                    class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection