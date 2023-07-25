@extends('frontend.layouts.main')
@push('title')
<title>GENX || Login</title>
@endpush
@section('content')
           <!-- login section start  -->

    <div id="" class="flex justify-center p-16">
        <form action="{{url('/login')}}" method="post" class=" max-w-[600px]">
            @csrf
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            <div class="login_box">
                <div class="login_box w-full text-slate-800">
                    <h3 class="text-center text-[16px]">Welcome To Genx</h3>
                    <p class="text-center py-2 text-[14px]">Login with email & password</p>
                    @if (session()->has('error'))
                        <p class='text-red-500'>{{session()->get('error')}}</p>
                    @endif
                    <form action="">
                        <label for="email w-100">
                            Email
                            <input class="w-full my-2 p-2 border outline-ThemeColor" type="email"
                                placeholder="example@mail.com" name="email">
                        </label>
                        <label for="email">
                            Password
                            <input class="w-full my-2 p-2 border outline-ThemeColor" type="password" placeholder="******" name="password">

                        </label>
                        <button type="submit" class="w-full my-2 p-2 bg-ThemeColor text-white">Login</button>
                    </form>

                    <p class="text-center text-gray-400 py-2">Don't have account? <a href="{{url('/signup/')}}"
                            class="text-black font-bold">Sign Up</a> </p>
                </div>
            </div>
        </form>
    </div>

    <!-- login section end -->
@endsection