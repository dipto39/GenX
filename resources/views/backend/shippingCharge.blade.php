@extends('backend.layouts.main')
@section('content')
<div class="brands p-4 w-full bg-gray-200 overflow-auto h-full pb-20  ">
    <div class="brand_heading flex justify-between sticky">
        <h3>Shipping Charge</h3>
        <div class="ddd text-gray-700 text-[13px]">
            <span class="ddd_link">
                <a href="">Home</a>
            </span>
            <span class="slash px-2">/</span>
            <span class="ddd_link">
                <a href="">Shipping Charge</a>
            </span>
        </div>
    </div>
    <div class="brand_body">
        <div class="brandtable p-4 pt-4 bg-white mt-5">
            <div class="oth flex justify-between items-center pt-4">
                <a href="{{url('/admin/shipping/add')}}" class="bg-blue-400 text-white p-2 text-[14px] rounded-md cursor-pointer">Add Country</a>
            </div>

            <table class="w-full text-[14px] text-gray-700 bg-white mt-5">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-4">#</th>
                        <th class="p-4">Country</th>
                        <th class="p-4">Shipping Charge</th>
                        <th class="p-4">COD</th>
                        <th class="p-4">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @if (count($shipping) > 0)
                    @php
                    $i=1;
                @endphp
                @foreach ($shipping as $item)
                    <tr class="border-b">
                        <td class="p-4">{{$i}}</td>
                        <td class="p-4">{{$item['cname']}}</td>
                        <td class="p-4">{{$item['sc']}}</td>
                        <td class="p-4">
                            <label class="switch">
                                <input type="checkbox" class="switch_chekbox cod_change" data-attr="{{$item['id']}}" @if ($item['cod'] == 1) 
                                    checked
                                @endif>
                                <span class="slider round"></span>
                            </label>
                        </td>
                        <td class="p-4 flex justify-evenly text-[16px]">
                            <a class="border-blue-500 text-blue-500 px-1" href="{{url('/admin/shipping/edit/'.$item['id'])}}"><i
                                    class="fa-regular fa-pen-to-square"></i></a>
                        </td>
                    </tr>
                    @php
                    $i++;
                @endphp
                @endforeach
                @else
                  <tr><td colspan="8"><h1 class="text-center text-red-500">No Country Found !</h1></td></tr>
             @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection