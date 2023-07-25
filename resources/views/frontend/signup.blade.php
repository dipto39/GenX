@extends('frontend.layouts.main')
@push('title')
<title>GENX || Sign-In</title>
@endpush
@section('content')
           <!-- login section start  -->

    <div class="flex justify-center p-16">
        <div class="signup_section flex justify-center items-center text-gray-700">
            <div class="signup_box max-w-[400px] py-5">
                <h3 class="text-center text-[16px]">Welcome To Genx</h3>
                    <p class="text-center py-2 text-[14px]">Login with email & password</p>
                    <p class="text-red-500 hidden">There is an error</p>
    
                    <form action="{{url('/signup')}}" method="POST">
                        @csrf
                        <label for="email w-100">
                            Full Name
                            <input class="w-full my-2 p-2 border outline-ThemeColor" type="text" name="Full_name" placeholder="John Deo" value="@if(old('Full_name')) {{old('Full_name')}} @endif">
                            @if ($errors->first('Full_name'))
                    <span class="text-red-500">{{ $errors->first('Full_name') }}</span>
                    <br>
                    @endif
                        </label>
                        <label for="email w-100">
                            Email
                            <input class="w-full my-2 p-2 border outline-ThemeColor" type="email" placeholder="example@mail.com" name="email"  value="@if(old('email')) {{old('email')}} @endif">
                            @if ($errors->first('email'))
                    <span class="text-red-500">{{ $errors->first('email') }}</span>
                    <br>
                    @endif
                        </label>
                        <label for="email w-100">
                            Password
                            <input class="w-full my-2 p-2 border outline-ThemeColor" type="password" placeholder="********" name="password"  >
                            @if ($errors->first('password'))
                            <span class="text-red-500">{{ $errors->first('password') }}</span>
                            <br>
                            @endif
                        </label>
                        <label for="pass">
                            Confirm Password
                            <input class="w-full my-2 p-2 border outline-ThemeColor" type="password" placeholder="******" name="Confirm_password" >
                            @if ($errors->first('Confirm_password'))
                            <span class="text-red-500">{{ $errors->first('Confirm_password') }}</span>
                            <br>
                            @endif
                        </label>
                        <label for="pass" class="relative">
                            
                            OTP
                            <button class="absolute right-0 text-red-500">Send OTP</button>
                            <input class="w-full my-2 p-2 border outline-ThemeColor" type="number" placeholder="123456">
                        </label>
                        <button type="submit" class="w-full my-2 p-2 bg-ThemeColor text-white" >Create Account</button>
                    </form>
            </div>
        </div>
    </div>

    <!-- login section end -->
@endsection