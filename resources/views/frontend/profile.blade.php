@extends('frontend.layouts.main')
@push('title')
<title>{{session()->get('name')}} || Genx Profile</title>
@endpush
@section('content')
    <!-- profile section start  -->
    <div class="profile_sction bg-themebg py-7">
        <div class="container">
            <div class="block lg:flex">
                <div class="pleft hidden lg:block lg:basis-1/4 p-5 bg-white rounded-none lg:rounded-md absolute lg:relative top-0 h-full lg:h-auto z-50">
                    <div class="pdash">
                        <h3 class="text-slate-500 text-[13px] pb-3 uppercase"> Dashboard</h3>
                        <div class="">
                            <ul>
                                <li class="py-2 relative flex"><a href="" class="flex items-center text-slate-700 hover:text-ThemeColor">
                                    <i class="fa-solid fa-bag-shopping w-7"></i>
                                    <p class="text-[15px]">Order</p>
                                    <span class="order_counter absolute right-0 text-[13px]">0</span>
                                </a></li>
                                <li class="py-2 relative flex"><a href="" class="flex items-center text-slate-700 hover:text-ThemeColor">
                                    <i class="fa-solid fa-heart w-7"></i>
                                    <p class="text-[15px]">Whitelist</p>
                                    <span class="order_counter absolute right-0 text-[13px]">0</span>
                                </a></li>
                                <li class="py-2 relative flex"><a href="" class="flex items-center text-slate-700 hover:text-ThemeColor">
                                    <i class="fa-solid fa-gift w-7"></i>
                                    <p class="text-[15px]">Coupon</p>
                                    <span class="order_counter absolute right-0 text-[13px]">0</span>
                                </a></li>
                            </ul>
                        </div>
                        <div class="py-5">
                        <h3 class="text-slate-500 text-[13px] pb-3 uppercase">Account Settions</h3>
                            <ul>
                                <li class="py-2 relative flex"><a href="{{url('/profile')}}" class="flex items-center text-slate-700 hover:text-ThemeColor ">
                                    <i class="fa-solid fa-user w-7 text-ThemeColor"></i>
                                    <p class="text-[15px] text-ThemeColor">Profile</p>
                                    <span class="order_counter absolute right-0 text-[13px] text-ThemeColor">0</span>
                                </a></li>
                                <li class="py-2 relative flex"><a href="{{url('/address')}}" class="flex items-center text-slate-700 hover:text-ThemeColor">
                                    <i class="fa-solid fa-location-dot w-7"></i>
                                    <p class="text-[15px]">Address</p>
                                    <span class="order_counter absolute right-0 text-[13px]">0</span>
                                </a></li>
                                <li class="py-2 relative flex"><a href="{{url('/logout')}}" class="flex items-center text-slate-700 hover:text-ThemeColor">
                                    <i class="fa-solid fa-right-from-bracket w-7"></i>
                                    <p class="text-[15px]">Logout</p>
                                    <span class="order_counter absolute right-0 text-[13px]">0</span>
                                </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="pright basis-3/4 p-5">
                    <div class="profile_details ">
                        <div class="pright_heading flex justify-between items-center">
                            <div class=" flex items-center">
                                <i class="fa-solid fa-user mr-5 text-lg text-ThemeColor"></i>
                                <h1>My Profile</h1>
                            </div>
                            <button class="outline-none bg-pink-200 text-ThemeColor rounded-md  px-5 py-2">Edit profile</button>
                        </div>
                        <div class="user_details block lg:flex my-7">
                            <div class="basis-3/6 img_name bg-white rounded-lg px-7 py-5 flex items-center relative">
                                <div class="uavatar h-14 w-14 rounded-full">
                                    <img class="h-14 w-14 rounded-full" src="@if($pdata['pp'] == null) @else {{asset($pdata['pp'])}} @endif" alt="">
                                </div>
                                <div class="name ps-4">
                                    <span>{{$pdata['name']}}</span>
                                </div>
                                <span class="text-slate-300 absolute right-4">User</span>
                            </div>
                            <div class="basis-1/6 mx-4 aorders bg-white rounded-lg px-7 py-5 flex flex-col items-center">
                                <span class="text-ThemeColor">0</span>
                                <span class="text-slate-400 text-[14px]">All Orders</span>
                            </div>
                            <div class="basis-1/6 mx-4 aorders bg-white rounded-lg px-7 py-5 flex flex-col items-center">
                                <span class="text-ThemeColor">0</span>
                                <span class="text-slate-400 text-[14px]">All Orders</span>
                            </div>
                            <div class="basis-1/6 mx-4 aorders bg-white rounded-lg px-7 py-5 flex flex-col items-center">
                                <span class="text-ThemeColor">0</span>
                                <span class="text-slate-400 text-[14px]">All Orders</span>
                            </div>
                        </div>
                        <div class="block lg:flex justify-between items-center bg-white rounded-lg p-5">
                            <div class="my-5 lg:my-0 flex flex-col justify-center items-center">
                                <span class="text-slate-400 text-[12px]">Name</span>
                                <p>{{$pdata['name']}}</p>
                            </div>
                            <div class="my-5 lg:my-0 flex flex-col justify-center items-center">
                                <span class="text-slate-400 text-[12px]">Emali</span>
                                <p>{{$pdata['email']}}</p>
                            </div>
                            <div class="my-5 lg:my-0 flex flex-col justify-center items-center">
                                <span class="text-slate-400 text-[12px]">Phone</span>
                                <p>{{$pdata['phn']}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="orders hidden">
                        <div class="order_heading flex items-center py-4">
                            <i class="fa-solid fa-bag-shopping w-7 text-ThemeColor"></i>
                            <h2>My Orders</h2>
                        </div>
                        <table class="w-full text-slate-500 text-center">
                            <thead> 
                                <tr>
                                    <th class="p-2">Order #</th>
                                    <th class="p-2">Date Purchased</th>
                                    <th class="p-2">Status</th>
                                    <th class="p-2">Tootal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b">
                                    <td class="p-2">1</td>
                                    <td class="p-2">12 dec 1982</td>
                                    <td class="p-2">Active</td>
                                    <td class="p-2">500</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="Whitelist hidden">
                        <div class="order_heading flex items-center py-4">
                            <i class="fa-solid fa-heart w-7 text-ThemeColor"></i>
                            <h2>My Whitelist</h2>
                        </div>
                        <table class="w-full text-slate-500 text-center">
                            <thead> 
                                <tr>
                                    <th class="p-2">#</th>
                                    <th class="p-2">Product Title</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b">
                                    <td class="p-2">1</td>
                                    <td class="p-2"><a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="coupon hidden">
                        <div class="order_heading flex items-center py-4">
                            <i class="fa-solid fa-heart w-7 text-ThemeColor"></i>
                            <h2>My Coupon</h2>
                        </div>
                        <table class="w-full text-slate-500 text-center">
                            <thead> 
                                <tr>
                                    <th class="p-2">#</th>
                                    <th class="p-2">Coupon Code</th>
                                    <th class="p-2">Discount</th>
                                    <th class="p-2">Free Shipping</th>
                                    <th class="p-2">Min Spend</th>
                                    <th class="p-2">Valid Unitl</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b">
                                    <td class="p-2">1</td>
                                    <td class="p-2">2020</td>
                                    <td class="p-2">2%</td>
                                    <td class="p-2">No</td>
                                    <td class="p-2">4000</td>
                                    <td class="p-2">30 Nov 2000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="edit_profile hidden">
                        <div class="order_heading flex items-center py-4">
                            <i class="fa-solid fa-user w-7 text-ThemeColor"></i>
                            <h2>Edit Profile</h2>
                        </div>
                        <div class="form bg-white rounded-lg p-5">
                            <form action="">
                                <div class="profile_img h-14 w-14 bg-slate-500 rounded-full relative mb-9">
                                    <img src="./assets/img/user/user.jpeg" alt="" class="h-14 w-14 rounded-full">
                                    <input type="file" id="pp_input" class="hidden">
                                    <i class="fa-solid fa-camera p-2 bg-slate-200 rounded-full absolute top-10 cursor-pointer right-0"></i>
                                </div>
                                <div class="grid grid-cols-2 gap-6 mt">
                                    <div class="form_left flex-1">
                                        <label for="">
                                            <p>Name</p>
                                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                                type="text">
                                        </label>
                                        <label for="">
                                            <p>Email</p>
                                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                                type="email">
                                        </label>
                                        <label for="">
                                            <p>Birth Date</p>
                                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                                type="date">
                                        </label>
                                        
                                    </div>
                                    <div class="form_right flex-1">
                                        <label for="">
                                            <p>Gender</p>
                                            <select name="" id="" class="w-full p-2 border my-2 mb-4 outline-none rounded-md">
                                                <option value="" selected disabled>Select...</option>
                                            </select>
                                        </label>
                                        <label for="">
                                            <p>Phone</p>
                                            <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                                                type="text">
                                        </label>
                                       
                                    </div>
                                    <input class="mt-5 bg-ThemeColor text-white py-2 px-3" type="submit" value="Save Change">
                                </div>
                                
                            </form>
                        </div>
                    </div>
                    <div class="address hidden">
                        <div class="order_heading flex justify-between items-center py-4">
                            <div class="flex items-center">
                                <i class="fa-solid fa-heart w-7 text-ThemeColor"></i>
                                <h2>My Address</h2>
                            </div>
                            <button class="outline-none bg-pink-200 text-ThemeColor rounded-md  px-5 py-2">Add Address</button>
                        </div>
                        <table class="w-full text-slate-500 text-center">
    
                            <tbody>
                                <tr class="border-b bg-white">
                                    <td class="p-2">Name</td>
                                    <td class="p-2">Address</td>
                                    <td class="p-2">phone</td>
                                    <td class="p-4 flex justify-evenly text-[16px]">
                                        <a class="border-blue-500 text-blue-500 px-1 border hover:bg-blue-500 hover:text-white"
                                            href=""><i class="fa-regular fa-pen-to-square"></i></a>
                                        <a class="border-red-500 text-red-500 px-1  border hover:bg-red-500 hover:text-white"
                                            href=""><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- profile section end -->
@endsection