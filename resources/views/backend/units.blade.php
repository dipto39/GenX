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
        <div class="brandtable p-4 pt-4 mt-3 bg-white ">
            <div class="oth flex justify-between items-center pt-4">
                <h3 class="text-[16px] font-semibold text-gray-600">Units</h3>
                <a href="{{url('admin/unit/add')}}" class="bg-blue-400 text-white p-2 text-[14px] rounded-md cursor-pointer">Add Unit</a>
            </div>
            @if (count($unit) > 0)
            <table class="w-full text-[14px] text-gray-700 bg-white mt-5">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-4">#</th>
                        <th class="p-4">Name</th>
                        <th class="p-4">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @php
                    $i=1;
                @endphp
                @foreach ($unit as $item)
                    <tr class="border-b">
                        <td class="p-4">{{$i}}</td>
                        <td class="p-4">{{$item['uname']}}</td>
                        <td class="p-4 flex justify-evenly text-[16px]">
                            <a class="border-blue-500 text-blue-500 px-1 border hover:bg-blue-500 hover:text-white"
                                href="{{url('admin/unit/edit/'.$item['id'])}}"><i class="fa-regular fa-pen-to-square"></i></a>
                            <a class="border-red-500 text-red-500 px-1  border hover:bg-red-500 hover:text-white"
                                href="{{url('admin/unit/delete/'.$item['id'])}}"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    @php
                    $i++;
                @endphp
                @endforeach
                </tbody>
            </table>
            @else
            <h1 class="text-center text-red-500">No Unit Found !</h1>
        @endif
        </div>
    </div>
</div>
@endsection