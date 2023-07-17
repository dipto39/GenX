@extends('backend.layouts.main')
@section('content')
<h1 class="text-center py-7">{{$btn}}</h1>
<div class="p-8">
    <form action="{{url($urll)}}" method="POST"  enctype="multipart/form-data">
        @csrf
        @if (isset($categories))
        <label for=" w-100">
            Category
            <select name="cate" id="" class="w-full my-2 p-2 border outline-blue-500">
                @foreach ($categories as $item)
                <option value="{{$item['id']}}">{{$item['cname']}}</option>
                @endforeach
            </select>
            @if ($errors->first('cname'))
            <span class="text-red-500">{{ $errors->first('cname') }}</span>
            <br>
        @endif
        @endif
        
        <label for=" w-100">
            Name
            <input class="w-full my-2 p-2 border outline-blue-500" type="text" name="cname" value="@if(isset($cvalue)) {{$cvalue[0]['cname']}} @endif @if(isset($scvalue)) {{$scvalue[0]['subcname']}} @endif" >
            @if ($errors->first('cname'))
            <span class="text-red-500">{{ $errors->first('cname') }}</span>
            <br>
        @endif
        </label>
        @if ($c_or_s == 'c')
        <label for="">
            Category Img
            <div
                class="image_input h-28 w-28 bg-slate-200 mt-2 flex justify-center items-center cursor-pointer">
                <input class="hidden" type="file" name="cimg" id="prev_input_img" value="@if(isset($cvalue)) {{$cvalue[0]['cimg']}} @endif" >
                <span class="plus_icon">+</span>
                <img class="prev_img  z-10"
                    src="@if(isset($cvalue)) {{$cvalue[0]['cimg']}} @endif" alt="">
            </div>
            @if ($errors->first('cimg'))
            <span class="text-red-500">{{ $errors->first('cimg') }}</span>
            <br>
        @endif
        </label>
        @else

        @endif
   
        <button type="submit" class="my-2 p-2 bg-blue-500 text-white">{{$btn}}</button>
    </form>
</div>
@endsection