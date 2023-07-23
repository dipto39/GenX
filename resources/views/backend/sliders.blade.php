@extends('backend.layouts.main')
@section('content')
<div class="sliders p-4 w-full bg-gray-200 overflow-auto h-full pb-20 ">
    <div class="about_heading flex justify-between sticky">
        <h3>Sliders</h3>
        <div class="ddd text-gray-700 text-[13px]">
            <span class="ddd_link">
                <a href="">Home</a>
            </span>
            <span class="slash px-2">/</span>
            <span class="ddd_link">
                <a href="">Sliders</a>
            </span>
        </div>
    </div>
    <div class="slider_body">
        <div class="brandtable p-4 pt-4 mt-3 bg-white ">
            <div class="oth flex justify-between items-center pt-4">
                <h3 class="text-[16px] font-semibold text-gray-600">Sliders</h3>
                <a href="{{url('/admin/slider/add')}}" class="bg-blue-400 text-white p-2 text-[14px] rounded-md cursor-pointer">Add Slider</a>
            </div>

            <table class="w-full text-[14px] text-gray-700 bg-white mt-5">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-4">#</th>
                        <th class="p-4">Title</th>
                        <th class="p-4">Subtitle</th>
                        <th class="p-4">Image</th>
                        <th class="p-4">Status</th>
                        <th class="p-4">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @if (count($sliders) > 0)
                    @php
                    $i=1;
                @endphp
                @foreach ($sliders as $item)
                    <tr class="border-b">
                        <td class="p-4">{{$i}}</td>
                        <td class="p-4">{{$item['title']}}</td>
                        <td class="p-4">
                            {{$item['sub']}}
                        </td>
                        <td class="p-4">
                            <div class="bimg flex justify-center items-center">
                                <img class="h-5 " src="{{asset($item['img'])}}" alt="{{$item['img']}}">
                            </div>
                        </td>
                        <td class="p-4">
                            <label class="switch">
                                <input type="checkbox" class="switch_chekbox slider_change" data-attr="{{$item['id']}}" @if ($item['status'] == 1) 
                                    checked
                                @endif>
                                <span class="slider round"></span>
                            </label>
                        </td>
                        <td class="p-4 flex justify-evenly text-[16px]">
                            <a class="border-blue-500 text-blue-500 px-1 border hover:bg-blue-500 hover:text-white"
                                href="{{url('/admin/slider/edit/'.$item['id'])}}"><i class="fa-regular fa-pen-to-square"></i></a>
                            <a class="border-red-500 text-red-500 px-1  border hover:bg-red-500 hover:text-white"
                                href="{{url('/admin/slider/delete/'.$item['id'])}}"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    @php
                    $i++;
                @endphp
                @endforeach
                @else
                  <tr><td colspan="8"><h1 class="text-center text-red-500">No Slider Found !</h1></td></tr>
             @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection