@extends('backend.layouts.main')
@section('content')
<div class="brands p-4 w-full bg-gray-200 overflow-auto h-full pb-20">
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
    <div class="brand_body pt-5">
        <div class="brandtable p-4 pt-4 bg-white ">
            <div class="oth flex justify-between items-center pt-4">
                <h3 class="text-[16px] font-semibold text-gray-600">Brands</h3>
                <a href="{{url('admin/brands/add')}}" class="bg-blue-400 text-white p-2 text-[14px] rounded-md cursor-pointer"
                    >Add Brand</a>
            </div>
          @if (count($brands) > 0)
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
                    @php
                        $i=1;
                    @endphp
                    @foreach ($brands as $item)
                        <tr class="border-b">
                        <td class="p-4">{{$i}}</td>
                        <td class="p-4">{{$item['bname']}}</td>
                        <td class="p-4">
                            <div class="bimg flex justify-center items-center">
                                <img class="h-5 " src="{{ asset($item['bimg']) }}" alt="{{$item['bimg']}}">
                            </div>
                        </td>
                        <td class="p-4">
                            <label class="switch">
                                <input type="checkbox" class="switch_chekbox" data-attr="{{$item['bid']}}">
                                <span class="slider round"></span>
                            </label>
                        </td>
                        <td class="p-4 flex justify-evenly text-[16px]">
                            <a class="border-blue-500 text-blue-500 px-1  " href="{{url('admin/brands/edit/'.$item['bid'])}}"><i
                                    class="fa-regular fa-pen-to-square"></i></a>
                            <a class="border-red-500 text-red-500 px-1  " href="{{url('admin/brands/delete/'.$item['bid'])}}"><i
                                    class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                    @endforeach
                    
                </tbody>
            </table>
            @else
            <h1 class="text-center text-red-500">No Brands Found !</h1>
        @endif
        </div>
        
      
    </div>
</div>
@endsection