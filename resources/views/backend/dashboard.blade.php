@extends('backend.layouts.main')

@section('content')
<div class="dasboard p-4 w-full bg-gray-200 overflow-auto h-full pb-20 ">
    <div class="dash_heading flex justify-between sticky">
        <h3>DASHBOARD</h3>
        <div class="ddd text-gray-700 text-[13px]">
            <span class="ddd_link">
                <a href="">Home</a>
            </span>
            <span class="slash px-2">/</span>
            <span class="ddd_link">
                <a href="">Dashboard</a>
            </span>
        </div>
    </div>
    <div class="dsummary py-6 grid grid-cols-4 gap-5">
        <div
            class="summary_item bg-white rounded-lg flex justify-between items-center p-4 text-gray-600">
            <div class="summary_name flex flex-col justify-between">
                <h5 class="text-[14px]">Orders</h5>
                <span class="text-lg">99</span>
            </div>
            <div
                class="summary_icon bg-blue-500 flex justify-center items-center h-16 w-16 rounded-full text-white">
                <i class="fa-solid fa-folder-tree"></i>
            </div>
        </div>
        <div
            class="summary_item bg-white rounded-lg flex justify-between items-center p-4 text-gray-600">
            <div class="summary_name flex flex-col justify-between">
                <h5 class="text-[14px]">Processing Order</h5>
                <span class="text-lg">99</span>
            </div>
            <div
                class="summary_icon bg-blue-500 flex justify-center items-center h-16 w-16 rounded-full text-white">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
        </div>
        <div
            class="summary_item bg-white rounded-lg flex justify-between items-center p-4 text-gray-600">
            <div class="summary_name flex flex-col justify-between">
                <h5 class="text-[14px]">Total Sell</h5>
                <span class="text-lg"><span>AED </span> 99</span>
            </div>
            <div
                class="summary_icon bg-blue-500 flex justify-center items-center h-16 w-16 rounded-full text-white">
                <i class="fa-solid fa-dollar-sign"></i>
            </div>
        </div>
        <div
            class="summary_item bg-white rounded-lg flex justify-between items-center p-4 text-gray-600">
            <div class="summary_name flex flex-col justify-between">
                <h5 class="text-[14px]">This Month's Sell</h5>
                <span class="text-lg"> <span>AED </span>99</span>
            </div>
            <div
                class="summary_icon bg-blue-500 flex justify-center items-center h-16 w-16 rounded-full text-white">
                <i class="fa-solid fa-dollar-sign"></i>
            </div>
        </div>
        <div
            class="summary_item bg-white rounded-lg flex justify-between items-center p-4 text-gray-600">
            <div class="summary_name flex flex-col justify-between">
                <h5 class="text-[14px]">Tootal Products</h5>
                <span class="text-lg">99</span>
            </div>
            <div
                class="summary_icon bg-blue-500 flex justify-center items-center h-16 w-16 rounded-full text-white">
                <i class="fa-solid fa-desktop"></i>
            </div>
        </div>
        <div
            class="summary_item bg-white rounded-lg flex justify-between items-center p-4 text-gray-600">
            <div class="summary_name flex flex-col justify-between">
                <h5 class="text-[14px]">Tootal Coustomers</h5>
                <span class="text-lg">99</span>
            </div>
            <div
                class="summary_icon bg-blue-500 flex justify-center items-center h-16 w-16 rounded-full text-white">
                <i class="fa-solid fa-users"></i>
            </div>
        </div>
        <div
            class="summary_item bg-white rounded-lg flex justify-between items-center p-4 text-gray-600">
            <div class="summary_name flex flex-col justify-between">
                <h5 class="text-[14px]">Shipped Orders</h5>
                <span class="text-lg">99</span>
            </div>
            <div
                class="summary_icon bg-blue-500 flex justify-center items-center h-16 w-16 rounded-full text-white">
                <i class="fa-solid fa-truck"></i>
            </div>
        </div>
        <div
            class="summary_item bg-white rounded-lg flex justify-between items-center p-4 text-gray-600">
            <div class="summary_name flex flex-col justify-between">
                <h5 class="text-[14px]">Tootal Pakaging Cost</h5>
                <span class="text-lg">99</span>
            </div>
            <div
                class="summary_icon bg-blue-500 flex justify-center items-center h-16 w-16 rounded-full text-white">
                <i class="fa-solid fa-money-check-dollar"></i>
            </div>
        </div>
    </div>
    <div class="orderList flex flex-row">
        <div class="basis-2/3 order_list p-4 py-3  bg-white mr-5">
            <div class="oth flex justify-between items-center">
                <h3 class="text-[14px] font-semibold text-gray-600">Latest Order</h3>
                <a class="bg-blue-400 text-white p-1 text-[11px] rounded-md" href="">View All</a>
            </div>
            <div class="order_table w-full pt-4">
                <table class="w-full text-slate-600 text-[14px] text-start">
                    <thead class="w-full">
                        <tr class="bg-slate-200] text-start bg-slate-200">
                            <th class="p-3">Order ID</th>
                            <th class="p-3">Date</th>
                            <th class="p-3">Total</th>
                            <th class="p-3">Order Status</th>
                            <th class="p-3">Payment Methood</th>
                            <th class="p-3">View Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center border-b">
                            <td class="p-3 font-semibold">GX-122445</td>
                            <td class="p-3">10th Jul 2023</td>
                            <td class="p-3">4332.3</td>
                            <td class="p-3"><a class="p-1 bg-blue-400 text-white rounded-xl"
                                    href="">Processing</a></td>
                            <td class="p-3">cod</td>
                            <td class="p-3"><a class="p-1 text-[10px] bg-blue-400 text-white rounded-xl"
                                    href="">View Details</a></td>
                        </tr>
                        <tr class="text-center border-b">
                            <td class="p-3 font-semibold">GX-122445</td>
                            <td class="p-3">10th Jul 2023</td>
                            <td class="p-3">4332.3</td>
                            <td class="p-3"><a class="p-1 bg-blue-400 text-white rounded-xl"
                                    href="">Processing</a></td>
                            <td class="p-3">cod</td>
                            <td class="p-3"><a class="p-1 text-[10px] bg-blue-400 text-white rounded-xl"
                                    href="">View Details</a></td>
                        </tr>
                        <tr class="text-center border-b">
                            <td class="p-3 font-semibold">GX-122445</td>
                            <td class="p-3">10th Jul 2023</td>
                            <td class="p-3">4332.3</td>
                            <td class="p-3"><a class="p-1 bg-blue-400 text-white rounded-xl"
                                    href="">Processing</a></td>
                            <td class="p-3">cod</td>
                            <td class="p-3"><a class="p-1 text-[10px] bg-blue-400 text-white rounded-xl"
                                    href="">View Details</a></td>
                        </tr>
                        <tr class="text-center border-b">
                            <td class="p-3 font-semibold">GX-122445</td>
                            <td class="p-3">10th Jul 2023</td>
                            <td class="p-3">4332.3</td>
                            <td class="p-3"><a class="p-1 bg-blue-400 text-white rounded-xl"
                                    href="">Processing</a></td>
                            <td class="p-3">cod</td>
                            <td class="p-3"><a class="p-1 text-[10px] bg-blue-400 text-white rounded-xl"
                                    href="">View Details</a></td>
                        </tr>
                        <tr class="text-center border-b">
                            <td class="p-3 font-semibold">GX-122445</td>
                            <td class="p-3">10th Jul 2023</td>
                            <td class="p-3">4332.3</td>
                            <td class="p-3"><a class="p-1 bg-blue-400 text-white rounded-xl"
                                    href="">Processing</a></td>
                            <td class="p-3">cod</td>
                            <td class="p-3"><a class="p-1 text-[10px] bg-blue-400 text-white rounded-xl"
                                    href="">View Details</a></td>
                        </tr>
                        <tr class="text-center border-b">
                            <td class="p-3 font-semibold">GX-122445</td>
                            <td class="p-3">10th Jul 2023</td>
                            <td class="p-3">4332.3</td>
                            <td class="p-3"><a class="p-1 bg-blue-400 text-white rounded-xl"
                                    href="">Processing</a></td>
                            <td class="p-3">cod</td>
                            <td class="p-3"><a class="p-1 text-[10px] bg-blue-400 text-white rounded-xl"
                                    href="">View Details</a></td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
        <div class="basis-1/3 new_member bg-white p-3">
            <div class="nmh flex justify-between items-center">
                <h3 class="text-[14px] font-semibold text-slate-600">New Members</h3>
                <a class="bg-blue-400 p-1 text-white text-[12px] rounded-md" href="">All Member</a>
            </div>
            <div class="user_section">
                <div class="single_menber flex items-center p-4 border-b">
                    <div class="member_img h-14 w-14 rounded-full mr-4">
                        <img class="h-14 w-14 rounded-full" src="../assets/img/user/user.jpeg"
                            alt="user">
                    </div>
                    <div class="mdetails text-gray-600 flex justify-between flex-col">
                        <span>Indrajit Das</span>
                        <span class="text-[11px] ">2 years ago</span>
                    </div>
                </div>
                <div class="single_menber flex items-center p-4 border-b">
                    <div class="member_img h-14 w-14 rounded-full mr-4">
                        <img class="h-14 w-14 rounded-full" src="../assets/img/user/user.jpeg"
                            alt="user">
                    </div>
                    <div class="mdetails text-gray-600 flex justify-between flex-col">
                        <span>Indrajit Das</span>
                        <span class="text-[11px] ">2 years ago</span>
                    </div>
                </div>
                <div class="single_menber flex items-center p-4 border-b">
                    <div class="member_img h-14 w-14 rounded-full mr-4">
                        <img class="h-14 w-14 rounded-full" src="../assets/img/user/user.jpeg"
                            alt="user">
                    </div>
                    <div class="mdetails text-gray-600 flex justify-between flex-col">
                        <span>Indrajit Das</span>
                        <span class="text-[11px] ">2 years ago</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection