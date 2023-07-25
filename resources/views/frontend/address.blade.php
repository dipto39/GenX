@extends('frontend.layouts.main')
@push('title')
<title>{{session()->get('name')}} || Genx Profile</title>
@endpush
@section('content')
{{session()->get('uid')}}
    <!-- profile secton start  -->
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
                                    <i class="fa-solid fa-user w-7 "></i>
                                    <p class="text-[15px] ">Profile</p>
                                    <span class="order_counter absolute right-0 text-[13px] ">0</span>
                                </a></li>
                                <li class="py-2 relative flex"><a href="" class="flex items-center text-slate-700 hover:text-ThemeColor ">
                                    <i class="fa-solid fa-location-dot w-7 text-ThemeColor"></i>
                                    <p class="text-[15px] text-ThemeColor">Location</p>
                                    <span class="order_counter absolute right-0 text-[13px] text-ThemeColor">0</span>
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
                    <div class="address">
                        <div class="order_heading flex justify-between items-center py-4">
                            <div class="flex items-center">
                                <h2>My Address</h2>
                            </div>
                            <a href="{{url('/address/add')}}" class="outline-none bg-pink-200 text-ThemeColor rounded-md  px-5 py-2">Add Address</a>
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
        <!-- profile secton end -->
@endsection