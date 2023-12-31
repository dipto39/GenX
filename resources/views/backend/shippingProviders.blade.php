@extends('backend.layouts.main')
@section('content')
<div class="brands p-4 w-full bg-gray-200 overflow-auto h-full pb-20  ">
    <div class="brand_heading flex justify-between sticky">
        <h3>Shipping Providers</h3>
        <div class="ddd text-gray-700 text-[13px]">
            <span class="ddd_link">
                <a href="">Home</a>
            </span>
            <span class="slash px-2">/</span>
            <span class="ddd_link">
                <a href="">Shipping Providers</a>
            </span>
        </div>
    </div>
    <div class="brand_body">
        <div class="brandtable p-4 pt-4 bg-white mt-5">
            <div class="oth flex justify-between items-center pt-4">
                <a href="{{url('/admin/provider/add')}}" class="bg-blue-400 text-white p-2 text-[14px] rounded-md cursor-pointer">Add Provider</a>
            </div>

            <table class="w-full text-[14px] text-gray-700 bg-white mt-5">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-4">#</th>
                        <th class="p-4">Name</th>
                        <th class="p-4">Img</th>
                        <th class="p-4">Delivery Days in Outside</th>
                        <th class="p-4">Delivery Days in UAE</th>
                        <th class="p-4">Status</th>
                        <th class="p-4">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @if (count($providers) > 0)
                    @php
                    $i=1;
                @endphp
                @foreach ($providers as $item)
                    <tr class="border-b">
                        <td class="p-4">{{$i}}</td>
                        <td class="p-4">{{$item['pname']}}</td>
                        <td class="p-4">
                            <div class="bimg flex justify-center items-center">
                                <img class="h-5 " src="{{ asset($item['img']) }}" alt="{{$item['img']}}">
                            </div>
                        </td>
                        <td class="p-4">{{$item['out']}}</td>
                        <td class="p-4">{{$item['in']}}</td>
                        <td class="p-4">
                            <label class="switch">
                                <input type="checkbox" class="switch_chekbox provider_change" data-attr="{{$item['id']}}" @if ($item['status'] == 1) 
                                    checked
                                @endif>
                                <span class="slider round"></span>
                            </label>
                        </td>
                        <td class="p-4 flex justify-evenly text-[16px]">
                            <a class="border-blue-500 text-blue-500 px-1" href="{{url('/admin/provider/edit/'.$item['id'])}}"><i
                                    class="fa-regular fa-pen-to-square"></i></a>
                        </td>
                    </tr>
                    @php
                    $i++;
                @endphp
                @endforeach
                @else
                  <tr><td colspan="8"><h1 class="text-center text-red-500">No Provider Found !</h1></td></tr>
             @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection