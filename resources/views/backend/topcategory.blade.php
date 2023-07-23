@extends('backend.layouts.main')
@section('content')
<div class="sliders p-4 w-full bg-gray-200 overflow-auto h-full pb-20 ">
    <div class="about_heading flex justify-between sticky">
        <h3>Top Category</h3>
        <div class="ddd text-gray-700 text-[13px]">
            <span class="ddd_link">
                <a href="">Home</a>
            </span>
            <span class="slash px-2">/</span>
            <span class="ddd_link">
                <a href="">Top Category</a>
            </span>
        </div>
    </div>
    <div class="slider_body">
        <div class="brandtable p-4 pt-4 mt-3 bg-white ">
            <form action="{{url($urll)}}" method="POST" >
                @csrf

                <label for=" w-100">
                   Category 1
                    <select name="category1" id="" class="w-full my-2 p-2 border outline-blue-500">
                        <option value="" disabled selected>Select...</option>
                        @foreach ($categories as $item)
                        <option value="{{$item['id']}}" @isset($topcategory)
                            @if ($item['id'] == $topcategory[0]['c1'])
                                selected
                            @endif
                        @endisset>{{$item['cname']}}</option>
                        @endforeach
                    </select>
                </label>
                @if ($errors->first('category1'))
                <span class="text-red-500">{{ $errors->first('category1') }}</span>
                <br>
                @endif
                <label for=" w-100">
                    Category 2
                     <select name="category2" id="" class="w-full my-2 p-2 border outline-blue-500">
                         <option value="" disabled selected>Select...</option>
                         @foreach ($categories as $item)
                         <option value="{{$item['id']}}" @isset($topcategory)
                             @if ($item['id'] == $topcategory[0]['c2'])
                                 selected
                             @endif
                         @endisset>{{$item['cname']}}</option>
                         @endforeach
                     </select>
                 </label>
                 @if ($errors->first('category2'))
                 <span class="text-red-500">{{ $errors->first('category2') }}</span>
                 <br>
                 @endif
                 <label for=" w-100">
                    Category 3
                     <select name="category3" id="" class="w-full my-2 p-2 border outline-blue-500">
                         <option value="" disabled selected>Select...</option>
                         @foreach ($categories as $item)
                         <option value="{{$item['id']}}" @isset($topcategory)
                             @if ($item['id'] == $topcategory[0]['c3'])
                                 selected
                             @endif
                         @endisset>{{$item['cname']}}</option>
                         @endforeach
                     </select>
                 </label>
                 @if ($errors->first('category2'))
                 <span class="text-red-500">{{ $errors->first('category2') }}</span>
                 <br>
                 @endif

                <button type="submit" class="my-2 p-2 bg-blue-500 text-white my-3">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection