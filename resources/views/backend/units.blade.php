@extends('backend.layouts.main')
@section('content')
<div class="uites p-4 w-full bg-gray-200 overflow-auto h-full pb-20 ">
    <div class="about_heading flex justify-between sticky">
        <h3>Unit</h3>
        <div class="ddd text-gray-700 text-[13px]">
            <span class="ddd_link">
                <a href="">Home</a>
            </span>
            <span class="slash px-2">/</span>
            <span class="ddd_link">
                <a href="">Unit</a>
            </span>
        </div>
    </div>
    <div class="unit_body">
        <dialog id="unit_modal" class="modal p-8">
            <form method="dialog" class="modal-box">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                <div class="login_box">
                    <div class=" w-full text-slate-800">
                        <h3 class="text-center text-[16px]">Unit</h3>
                        <p class="text-red-500 hidden">Error Message</p>
                        <form action="">
                            <label for=" ">
                                Name
                                <input class="w-full my-2 p-2 border outline-blue-500" type="text">
                            </label>


                            <button type="submit" class="my-2 p-2 bg-blue-500 text-white">Add
                                Unit</button>
                        </form>
                    </div>
                </div>
            </form>
        </dialog>
        <div class="brandtable p-4 pt-4 mt-3 bg-white ">
            <div class="oth flex justify-between items-center pt-4">
                <h3 class="text-[16px] font-semibold text-gray-600">Units</h3>
                <span class="bg-blue-400 text-white p-2 text-[14px] rounded-md cursor-pointer"
                    onclick="unit_modal.showModal()">Add Unit</span>
            </div>

            <table class="w-full text-[14px] text-gray-700 bg-white mt-5">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-4">#</th>
                        <th class="p-4">Name</th>
                        <th class="p-4">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr class="border-b">
                        <td class="p-4">1</td>
                        <td class="p-4">Kg</td>
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