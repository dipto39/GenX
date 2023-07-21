@extends('backend.layouts.main')
@section('content')
<div class="orders p-4 w-full bg-gray-200 overflow-auto h-full pb-20 ">
    <div class="order_heading flex justify-between sticky">
        <h3>Orders</h3>
        <div class="ddd text-gray-700 text-[13px]">
            <span class="ddd_link">
                <a href="">Home</a>
            </span>
            <span class="slash px-2">/</span>
            <span class="ddd_link">
                <a href="">Orders</a>
            </span>
        </div>
    </div>
    <div class="order_body">
        <div class="ordertable p-4 pt-4 mt-3 bg-white ">
            <div class="oth flex justify-between items-center pt-4">
                <h3 class="text-[16px] font-semibold text-gray-600">Orders</h3>
            </div>

            <table class="w-full text-[14px] text-gray-700 bg-white mt-5">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-4">#</th>
                        <th class="p-4">Image</th>
                        <th class="p-4">Title</th>
                        <th class="p-4">Customer</th>
                        <th class="p-4">Shipping Address</th>
                        <th class="p-4">Payment Mathood</th>
                        <th class="p-4">Status</th>
                        <th class="p-4">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @if (count($orders) > 0)
                    @php
                    $i=1;
                @endphp
                @foreach ($orders as $item)
                    <tr class="border-b">
                        <td class="p-4">1</td>
                        <td class="p-4"> 
                            <div class="bimg flex justify-center items-center">
                            <img class="h-5 " src="../assets/img/brand/anker.png" alt="">
                        </div></td>
                        <td class="p-4">
                           Product name.....
                        </td>
                        <td class="p-4">
                           Mr X
                         </td>
                         <td class="p-4">
                          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente, sunt.
                         </td>
                         <td class="p-4">
                           COD
                         </td>
                         <td class="p-4">
                           <p class="text-green-500">Processing</p>
                         </td>
                        <td class="p-4 flex justify-evenly text-[16px]">
                            <a class="border-blue-500 text-blue-500 px-1 border hover:bg-blue-500 hover:text-white"
                                href="{{url('/admin/order/print/{id}')}}"><i class="fa-solid fa-print"></i></a>
                            <a class="border-blue-500 text-blue-500 px-1 border hover:bg-blue-500 hover:text-white"
                                href="{{url('/admin/order/view/{id}')}}"><i class="fa-solid fa-eye"></i></a>
                        </td>
                    </tr>
                    @php
                    $i++;
                @endphp
                @endforeach
                @else
                  <tr><td colspan="8"><h1 class="text-center text-red-500">No products Found !</h1></td></tr>
             @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection