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
        <div class="brandtable p-4 pt-4 mt-3 bg-white ">
            <div class="oth flex justify-between items-center pt-4">
                <h3 class="text-[16px] font-semibold text-gray-600">Coupons</h3>
                <a href="{{url('admin/coupon/add')}}" class="bg-blue-400 text-white p-2 text-[14px] rounded-md cursor-pointer"
                >Add Coupon</a>
            </div>

            <table class="w-full text-[14px] text-gray-700 bg-white mt-5">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-4">#</th>
                        <th class="p-4">Title</th>
                        <th class="p-4">Code</th>
                        <th class="p-4">Value</th>
                        <th class="p-4">Min Spend</th>
                        <th class="p-4">End Date</th>
                        <th class="p-4">Status</th>
                        <th class="p-4">Action</th>
                    </tr>
                </thead>
                @if (count($coupons) > 0)
                <tbody class="text-center">
                    @php
                    $i=1;
                @endphp
                @foreach ($coupons as $item)
                    <tr class="border-b">
                        <td class="p-4">{{$i}}</td>
                        <td class="p-4">{{$item['cn']}}</td>
                        <td class="p-4">
                            {{$item['cd']}}
                        </td>
                        <td class="p-4">
                            {{$item['vl']}} %
                         </td>
                         <td class="p-4">
                            {{$item['ms']}}
                         </td>
                         <td class="p-4">
                            {{$item['ed']}}
                         </td>
                        
                        <td class="p-4">
                            <label class="switch">
                                <input type="checkbox" class="switch_chekbox coupon_status" data-attr="{{$item['id']}}" @if ($item['st'] == 1)
                                    checked
                                @endif>
                                <span class="slider round"></span>
                            </label>
                        </td>
                        <td class="p-4 flex justify-evenly text-[16px]">
                            <a class="border-blue-500 text-blue-500 px-1 border hover:bg-blue-500 hover:text-white"
                                href="{{url('admin/coupon/edit/'.$item['id'])}}"><i class="fa-regular fa-pen-to-square"></i></a>
                            <a class="border-red-500 text-red-500 px-1  border hover:bg-red-500 hover:text-white"
                                href="{{url('admin/coupon/delete/'.$item['id'])}}"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    @php
                    $i++;
                @endphp
                @endforeach
                @else
                <tr><td colspan="8" ><h1 class="text-center text-red-500">No Coupon Found !</h1></td></tr>
             @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection