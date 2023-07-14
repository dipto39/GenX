<div class="sidebar w-80 bg-[#2A3042] p-4">
    <div class="logo flex justify-center items-center">
        <img class="w-20 max-h-20" src="../assets/logo/logo.png" alt="logo">
    </div>
    <div class="sidebar_links text-slate-500 pt-4 overflow-scroll h-full pb-10">
        <h4 class="text-[12px] pb-2">MENU</h4>
        <div class="links text-[13px] ">
            <ul>
                <li>
                    <a href="{{url('/admin/dashboard')}}" class="{{ request()->is('admin/dashboard*') ? 'active' : '' }} flex items-center px-1 py-3 hover:text-white transition-all">
                        <span class="text-[17px] w-9"><i class="fa-solid fa-chart-line"></i></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/admin/categories')}}" class="{{ request()->is('admin/categories*') ? 'active' : '' }} flex items-center px-1 py-3 hover:text-white transition-all">
                        <span class="text-[17px] w-9"><i class="fa-solid fa-bars"></i></span>
                        <span>Categories</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/admin/brands')}}" class="{{ request()->is('admin/brands*') ? 'active' : '' }} flex items-center px-1 py-3 hover:text-white transition-all">
                        <span class="text-[17px] w-9"><i class="fa-solid fa-layer-group"></i></span>
                        <span>Brands</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/admin/about')}}" class="{{ request()->is('admin/about*') ? 'active' : '' }} flex items-center px-1 py-3 hover:text-white transition-all">
                        <span class="text-[17px] w-9"><i class="fa-regular fa-address-card"></i></span>
                        <span>About Us</span>
                    </a>
                </li>
                <li>
                    <a href=""
                        class="flex items-center px-1 py-3 hover:text-white transition-all relative have_sublinks">
                        <span class="text-[17px] w-9"><i class="fa-solid fa-house"></i></span>
                        <span>Main Page</span>
                        <span class="downarrow"><i class="fa-solid fa-angle-down"></i></span>
                    </a>
                    <ul class="sub_links ml-10 hidden">
                        <li class="text-[12px] py-2"><a class="{{ request()->is('admin/sliders*') ? 'active' : '' }} hover:text-white" href="{{url('/admin/sliders')}}">Sliders</a></li>
                        <li class="text-[12px] py-2"><a class=" hover:text-white" href="">Feature Brands</a>
                        </li>
                        <li class="text-[12px] py-2"><a class=" hover:text-white" href="">Categories</a></li>
                        <li class="text-[12px] py-2"><a class=" hover:text-white" href="">Services</a></li>
                        <li class="text-[12px] py-2"><a class=" hover:text-white" href="">Banner</a></li>
                    </ul>
                </li>
                <li>
                    <a href=""
                        class="flex items-center px-1 py-3 hover:text-white transition-all relative have_sublinks">
                        <span class="text-[17px] w-9"><i class="fa-solid fa-display"></i></span>
                        <span>Products</span>
                        <span class="downarrow"><i class="fa-solid fa-angle-down"></i></span>
                    </a>
                    <ul class="sub_links ml-10 hidden">
                        <li class="text-[12px] py-2"><a class="{{ request()->is('admin/products*') ? 'active' : '' }} hover:text-white" href="{{url('/admin/products')}}">Product List</a></li>
                        <li class="text-[12px] py-2"><a class="{{url('/admin/units')}} hover:text-white" href="">Units</a></li>
                        <li class="text-[12px] py-2"><a class="{{url('/admin/attributes')}} hover:text-white" href="">Attributes</a></li>
                        <li class="text-[12px] py-2"><a class="{{url('/admin/tags')}} hover:text-white" href="">Tags</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('/admin/coupons')}}" class="{{ request()->is('admin/coupons*') ? 'active' : '' }} flex items-center px-1 py-3 hover:text-white transition-all">
                        <span class="text-[17px] w-9"><i class="fa-solid fa-tags"></i></span>
                        <span>Coupone</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/admin/orders')}}" class="{{ request()->is('admin/orders*') ? 'active' : '' }} flex items-center px-1 py-3 hover:text-white transition-all">
                        <span class="text-[17px] w-9"><i class="fa-solid fa-cart-shopping"></i></span>
                        <span>Order</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('/admin/users')}}" class="{{ request()->is('admin/users*') ? 'active' : '' }} flex items-center px-1 py-3 hover:text-white transition-all">
                        <span class="text-[17px] w-9"><i class="fa-solid fa-id-card"></i></span>
                        <span>All Users</span>
                    </a>
                </li>
                <li>
                    <a href=""
                        class="{{ request()->is('admin/shipping*') ? 'active' : '' }} flex items-center px-1 py-3 hover:text-white transition-all  relative have_sublinks">
                        <span class="text-[17px] w-9"><i class="fa-solid fa-truck-fast"></i></span>
                        <span>Shipping</span>
                        <span class="downarrow"><i class="fa-solid fa-angle-down"></i></span>
                    </a>
                    <ul class="sub_links ml-10 hidden">
                        <li class="text-[12px] py-2"><a class="{{url('/admin/shipping/charge')}} hover:text-white" href="">Shipping Charge</a>
                        </li>
                        <li class="text-[12px] py-2"><a class="{{url('/admin/shipping/providers')}} hover:text-white" href="">Shipping Providers</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href=""
                        class="flex items-center px-1 py-3 hover:text-white transition-all relative have_sublinks">
                        <span class="text-[17px] w-9"><i class="fa-solid fa-shop"></i></span>
                        <span>Vendors</span>
                        <span class="downarrow"><i class="fa-solid fa-angle-down"></i></span>
                    </a>
                    <ul class="sub_links ml-10 hidden">
                        <li class="text-[12px] py-2"><a class=" hover:text-white" href="">Vendors Overview</a>
                        </li>
                        <li class="text-[12px] py-2"><a class=" hover:text-white" href="">Vendor List</a></li>

                    </ul>
                </li>
                <li>
                    <a href=""
                        class="flex items-center px-1 py-3 hover:text-white transition-all relative have_sublinks">
                        <span class="text-[17px] w-9"><i class="fa-solid fa-user"></i></span>
                        <span>General Account</span>
                        <span class="downarrow"><i class="fa-solid fa-angle-down"></i></span>
                    </a>
                    <ul class="sub_links ml-10 hidden">
                        <li class="text-[12px] py-2"><a class=" hover:text-white" href="">Account Overview</a>
                        </li>
                        <li class="text-[12px] py-2"><a class=" hover:text-white" href="">Order Products</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('/admin/setting')}}" class="{{ request()->is('admin/setting*') ? 'active' : '' }} flex items-center px-1 py-3 hover:text-white transition-all">
                        <span class="text-[17px] w-9"><i class="fa-solid fa-gear"></i></span>
                        <span>Setting</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>