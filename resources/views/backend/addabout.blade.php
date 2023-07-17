@extends('backend.layouts.main')

@section('content')
<div class="modal p-8">
            <div class="login_box w-full text-slate-800">
                <h3 class="text-center text-[16px]">{{$btn}}</h3>
                <p class="text-red-500 hidden">Error Message</p>
                <form action="{{url($urll)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="email w-100">
                       Title
                        <input class="w-full my-2 p-2 border outline-blue-500" type="text" name="title" value="@if(isset($value)) {{$value['title']}} @endif">
                    </label>
                    @if ($errors->first('title'))
                    <span class="text-red-500">{{ $errors->first('title') }}</span>
                    <br>
                    @endif
                    <label for="">
                        Description
                        <textarea class="w-full border" name="description" id="" cols="30"
                            rows="10">@if(isset($value)) {{$value['des']}} @endif </textarea>
                    </label>
                    @if ($errors->first('description'))
                    <span class="text-red-500">{{ $errors->first('description') }}</span>
                    <br>
                    @endif
                    <button type="submit" class="my-2 p-2 bg-blue-500 text-white my-3">{{$btn}}</button>
                </form>
            </div>
</div>
@endsection