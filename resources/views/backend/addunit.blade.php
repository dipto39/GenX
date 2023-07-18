@extends('backend.layouts.main')

@section('content')
<div class="modal p-8">
            <div class="login_box w-full text-slate-800">
                <h3 class="text-center text-[16px]">{{$btn}}</h3>
                <p class="text-red-500 hidden">Error Message</p>
                <form action="{{url($urll)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="email w-100">
                       Name
                        <input class="w-full my-2 p-2 border outline-blue-500" type="text" name="name" value="@if(isset($value)) {{$value['uname']}} @endif">
                    </label>
                    @if ($errors->first('name'))
                    <span class="text-red-500">{{ $errors->first('name') }}</span>
                    <br>
                    @endif
                    <button type="submit" class="my-2 p-2 bg-blue-500 text-white my-3">{{$btn}}</button>
                </form>
            </div>
</div>
@endsection