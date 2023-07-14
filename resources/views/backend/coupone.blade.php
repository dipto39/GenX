@extends('backend.layouts.main')
@section('content')
<div class="coupons p-4 w-full bg-gray-200 overflow-auto h-full pb-20">
    <div class="coupons_heading flex justify-between sticky">
        <h3>Coupons</h3>
        <div class="ddd text-gray-700 text-[13px]">
            <span class="ddd_link">
                <a href="">Home</a>
            </span>
            <span class="slash px-2">/</span>
            <span class="ddd_link">
                <a href="">Coupons</a>
            </span>
        </div>
    </div>
    <div class="coupons_body">
        <dialog id="coupons_modal" class="modal p-8">
            <form method="dialog" class="text-[14px] modal-box w-96">
                <div class="flex justify-between items-center p-4 mb-4 border-b">
                    <h3 class="text-[16px]">Coupons</h3>
                    <button class="btn btn-sm btn-circle btn-ghost">✕</button>
                </div>
                    <div class="grid grid-cols-2 gap-x-6">
                        <div class="form_left flex-1">
                            <label for="">
                                <p>Company Name</p>
                                <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                    type="text">
                            </label>
                            <label for="">
                                <p>App Title</p>
                                <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                    type="text">
                            </label>
                            <label for="">
                                <p>Primary Email</p>
                                <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                    type="email">
                            </label>
                            <label for="">
                                <p>Secondary Email</p>
                                <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                    type="email">
                            </label>
                            <label for="">
                                <p>Primary Phone</p>
                                <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                    type="text">
                            </label>
                            <label for="">
                                <p>Secondary Phone</p>
                                <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                    type="text">
                            </label>
                        </div>
                        <div class="form_right flex-1">
                            <label for="">
                                <p>Currency</p>
                                <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                    type="text">
                            </label>
                            <label for="">
                                <p>Currency Symbol</p>
                                <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                    type="text">
                            </label>
                            <label for="">
                                <p>Default Shipping Charge</p>
                                <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                    type="number">
                            </label>
                            <label for="">
                                <p>Vat (%)</p>
                                <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                    type="number">
                            </label>
                            <label for="">
                                <p>Main Site URL</p>
                                <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                    type="url">
                            </label>
                            <label for="">
                                <p>Site Logo</p>
                                <div
                                    class="image_input h-28 w-28 bg-slate-200 mt-2 flex justify-center items-center cursor-pointer">
                                    <input class="hidden" type="file" name="" id="brand_img">
                                    <span class="plus_icon">+</span>
                                    <img class="prev_img hidden z-10" src="../assets/img/brand/anker.png"
                                        alt="">
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <input class="bg-blue-800 px-4 py-2 rounded-md text-white" type="submit" value="Save">
                </form>
            </form>
        </dialog>
        <div class="brandtable p-4 pt-4 mt-3 bg-white ">
            <div class="oth flex justify-between items-center pt-4">
                <h3 class="text-[16px] font-semibold text-gray-600">Coupons</h3>
                <span class="bg-blue-400 text-white p-2 text-[14px] rounded-md cursor-pointer"
                    onclick="coupons_modal.showModal()">Add Coupons</span>
            </div>

            <table class="w-full text-[14px] text-gray-700 bg-white mt-5">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-4">#</th>
                        <th class="p-4">Title</th>
                        <th class="p-4">Code</th>
                        <th class="p-4">Value</th>
                        <th class="p-4">Shipping</th>
                        <th class="p-4">Min Spend</th>
                        <th class="p-4">End Date</th>
                        <th class="p-4">Status</th>
                        <th class="p-4">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr class="border-b">
                        <td class="p-4">1</td>
                        <td class="p-4">NewYear</td>
                        <td class="p-4">
                           2024
                        </td>
                        <td class="p-4">
                            100.00 %
                         </td>
                         <td class="p-4">
                           <span class="text-green-500">Free</span>
                         </td>
                         <td class="p-4">
                            1.00
                         </td>
                         <td class="p-4">
                           2023-07-10
                         </td>
                        
                        <td class="p-4">
                           <p class="text-green-500">Active</p>
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