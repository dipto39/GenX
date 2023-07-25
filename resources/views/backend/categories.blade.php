@extends('backend.layouts.main')
@section('content')

    <div class="categories p-4 w-full bg-gray-200 overflow-auto h-full pb-20">
        <div class="cate_heading flex justify-between ">
            <h3>Categories</h3>
            <div class="ddd text-gray-700 text-[13px]">
                <span class="ddd_link">
                    <a href="">Home</a>
                </span>
                <span class="slash px-2">/</span>
                <span class="ddd_link">
                    <a href="">Categories</a>
                </span>
            </div>
        </div>
        <div class="oth flex justify-between items-center p-4">
            <h3 class="text-[16px] font-semibold text-gray-600">Category Tree</h3>
            <a class="bg-blue-400 text-white p-2 text-[14px] rounded-md" href="{{url('admin/categories/add')}}">Add Category</a>
            <a class="bg-blue-400 text-white p-2 text-[14px] rounded-md" href="{{url('admin/subcategories/add')}}">Add Sub Category</a>
        </div>
        <div class="categories_tree mx-60 py-8 px-2 bg-white">
            @if (count($categories) > 0)
                @foreach ($categories as $item)
                    <div
                        class="maincata @foreach ($subcategories as $item2) @if ($item['id'] == $item2['cid'])  have_sub  @break @endif @endforeach flex items-center p-4 bg-slate-100 relative">
                        <div class="cimg mr-4">
                            <img class="h-8" src="{{ asset($item['cimg']) }}" alt="icon">
                        </div>
                        <h3 class="text-[20px] text-slate-600">{{ $item['cname'] }}</h3>
                        <span
                            class="down_icon @foreach ($subcategories as $item2) @if (!$item['id'] === $item2['cid']) hidden  @endif @endforeach"> <i
                                class="fa-solid fa-chevron-down"></i></span>
                        <span
                            class="trush_icon @foreach ($subcategories as $item2) @if ($item['id'] === $item2['cid']) hidden  @break @endif @endforeach"><a
                                href="{{url('/admin/categories/delete/'.$item['id'])}}"> <i class="fa-solid fa-trash-can"></i></a></span>
                        <span class="edit_icon"><a href="{{url('admin/categories/edit/'.$item['id'])}}"><i class="fa-regular fa-pen-to-square"></i></a></span>
                    </div>
                    <div class="subcate bg-slate-200 pl-10 hidden">
                        <ul>
                            @foreach ($subcategories as $item2)
                                @if ($item['id'] === $item2['cid'])
                                    <li class="py-4 pr-5 relative">
                                        {{ $item2['subcname'] }}
                                        <span class="edit_icon text-[20px]"><a href="{{url('admin/subcategories/edit/'.$item2['sid'])}}"><i
                                                    class="fa-regular fa-pen-to-square"></i></a></span>
                                        <span class="trush_icon float-right"><a href="{{url('/admin/subcategories/delete/'.$item2['sid'])}}"><i class="fa-solid fa-trash-can"></i></a></span>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            @else
                <h1 class="text-red-500 text-center">No Categories found</h1>
            @endif


        </div>
    </div>
@endsection
