<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GenX | Onilne Shopping</title>
    <link rel="shortcut icon" href="{{asset('assets/logo/logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('backend_assets/css/style.css')}}">
</head>
<body>
   <div class="main min-h-screen flex justify-center items-center bg-slate-100">
    <div class="rounded-lg max-w-[500px]">
        <div class="headding relative p-4 bg-[#D4DBF9]">
            <p class="text-[17px] text-blue-500">Welcome Back !</p>
            <p class="pb-3 pt-2 text-[13px] text-blue-500">Sign in to continue to GenX.</p>
            <div class="logo absolute rounded-full bottom-[-40px]  bg-slate-200 h-16 w-16 flex justify-center items-center">
                <img class="h-10 w-16 rounded-full" src="{{asset('assets/logo/logo.png')}}" alt="">
            </div>
        </div>
        <form class="bg-white pt-20 text-[14px] px-4 pb-5" action="{{url('/admin/login')}}" method="POST">
            @if (session()->has('error'))
            <h2 class="text-center text-red-500">Email Or Password Not Match</h2>
        @endif
            @csrf
            <label for="">
                <span class="">Email</span>
                <input class="my-4 w-full p-3 outline-none border" type="email" placeholder="Enter Email" name="email">
                @if ($errors->first('email'))
                <span class="text-red-500">{{ $errors->first('email') }}</span>
                <br>
            @endif
            </label>
            <label for="">
                <span class="">Password</span>
                <input class="my-4 w-full p-3 outline-none border-[1px]" type="password" placeholder="Enter Password" name="password">
                @if ($errors->first('pass'))
                <span class="text-red-500">{{ $errors->first('pass') }}</span>
                <br>
            @endif
            </label>
            <label  for="">
                <input class="my-3" type="checkbox">
                <span >Remember me</span>
            </label>
            <label for="">
                <input class="cursor-pointer hover:bg-blue-400 w-full p-3 bg-blue-500 text-white" type="submit" value="Log In">
            </label>
        </form>
    </div>
   </div>
</body>
</html>