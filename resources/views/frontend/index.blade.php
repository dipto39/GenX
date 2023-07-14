@extends('frontend.layouts.main')

@section('index_container')
     <!-- cart section start  -->
     <div class="cart_sction">
        <div class="cart_sidebar">
            <div class="cart_header p-4 flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none"
                    class="injected-svg" data-src="/assets/images/icons/bag.svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path
                        d="M12 0.75C10.8066 0.75 9.66196 1.22411 8.81805 2.06802C7.97414 2.91193 7.50003 4.05653 7.50003 5.25V6H6.87753C6.24612 5.99934 5.63878 6.24222 5.18194 6.6781C4.72511 7.11398 4.45399 7.70925 4.42503 8.34L3.83253 20.6775C3.81734 21.0093 3.86949 21.3407 3.98582 21.6517C4.10216 21.9628 4.28028 22.2471 4.50944 22.4875C4.7386 22.7278 5.01407 22.9193 5.31923 23.0504C5.62439 23.1814 5.95292 23.2493 6.28503 23.25H17.715C18.0471 23.2493 18.3757 23.1814 18.6808 23.0504C18.986 22.9193 19.2615 22.7278 19.4906 22.4875C19.7198 22.2471 19.8979 21.9628 20.0142 21.6517C20.1306 21.3407 20.1827 21.0093 20.1675 20.6775L19.575 8.34C19.5461 7.70925 19.2749 7.11398 18.8181 6.6781C18.3613 6.24222 17.7539 5.99934 17.1225 6H16.5V5.25C16.5 4.05653 16.0259 2.91193 15.182 2.06802C14.3381 1.22411 13.1935 0.75 12 0.75V0.75ZM9.00003 5.25C9.00003 4.45435 9.3161 3.69129 9.87871 3.12868C10.4413 2.56607 11.2044 2.25 12 2.25C12.7957 2.25 13.5587 2.56607 14.1213 3.12868C14.684 3.69129 15 4.45435 15 5.25V6H9.00003V5.25ZM18.075 8.4075L18.6675 20.7525C18.6722 20.8815 18.6515 21.0102 18.6064 21.1311C18.5614 21.2521 18.493 21.363 18.405 21.4575C18.3153 21.5497 18.208 21.623 18.0895 21.6733C17.971 21.7235 17.8437 21.7496 17.715 21.75H6.28503C6.15635 21.7496 6.02904 21.7235 5.91056 21.6733C5.79208 21.623 5.68481 21.5497 5.59503 21.4575C5.50711 21.363 5.43867 21.2521 5.39363 21.1311C5.34859 21.0102 5.32783 20.8815 5.33253 20.7525L5.92503 8.4075C5.93661 8.16276 6.04204 7.9319 6.21943 7.76289C6.39682 7.59388 6.63252 7.49973 6.87753 7.5H17.1225C17.3675 7.49973 17.6032 7.59388 17.7806 7.76289C17.958 7.9319 18.0635 8.16276 18.075 8.4075V8.4075Z"
                        fill="#4B566B"></path>

                </svg>
                <div class="items">
                    <span>0</span> items
                </div>
            </div>
            <div class="cart_body ">
                <div class="empty_cart text-center">
                    <img src="./assets/icon/shopping-bag.svg" alt="">
                    <p class="d">Your shopping bag is empty. Start shopping</p>
                </div>


            </div>

        </div>
    </div>
    <!-- cart section end -->

    <!-- login section start  -->

    <dialog id="login_modal" class="modal p-16">
        <form method="dialog" class="modal-box">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            <div class="login_box">
                <div class="login_box w-full text-slate-800">
                    <h3 class="text-center text-[16px]">Welcome To Genx</h3>
                    <p class="text-center py-2 text-[14px]">Login with email & password</p>
                    <p class="text-red-500 hidden">There is an error</p>
                    <form action="">
                        <label for="email w-100">
                            Email
                            <input class="w-full my-2 p-2 border outline-ThemeColor" type="email"
                                placeholder="example@mail.com">
                        </label>
                        <label for="email">
                            Password
                            <input class="w-full my-2 p-2 border outline-ThemeColor" type="email" placeholder="******">
                        </label>
                        <button type="submit" class="w-full my-2 p-2 bg-ThemeColor text-white">Login</button>
                    </form>

                    <p class="text-center text-gray-400 py-2">Don't have account? <a href=""
                            class="text-black font-bold">Sign Up</a> </p>
                </div>
            </div>
        </form>
    </dialog>

    <!-- login section end -->

    <!-- topbar section start -->

    <div class="topbar p-2 bg-topbar">
        <div class="container flex justify-between items-center text-white">
            <div class="topbar_left flex">
                <div class="contact_no flex items-center mr-4 hidden lg:block">
                    <span class="icon mr-2"><i class="fa-solid fa-phone"></i></span>
                    <span class="number">+071 04 342 5068</span>
                </div>
                <div class="contact_mail flex items-center hidden lg:block">
                    <span class="icon mr-2"><i class="fa-regular fa-envelope"></i></span>
                    <span class="mail">genx@gmail.com</span>
                </div>
                <div class="logo lg:hidden">
                    <a href=""><img src="./assets/logo/logo.png" alt="genx logo"></a>
                </div>
            </div>
            <div class="topbar_right flex items-center">
                <a href="">Contact Us ?</a>
                <div class="lang mx-5 flex items-center cursor-pointer relative">
                    <div class="lang_icon">
                        <img src="./assets/img/flags/usa.png" alt="flags">
                    </div>
                    <div class="lang_name ms-2 me-1">
                        <span class="font-bold">EN</span>
                    </div>
                    <i class="fa-solid fa-angle-down"></i>
                    <div class="lang_area shadow-lg hidden">
                        <div class="single_lang p-1 bg-white mb-1 flex items-center cursor-pointer">
                            <div class="lang_icon">
                                <img src="./assets/img/flags/usa.png" alt="flags">
                            </div>
                            <div class="lang_name ms-2 me-1">
                                <span class="font-bold">EN</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="currency flex items-center cursor-pointer relative">
                    <div class="currency_icon">
                        <img src="./assets/img/flags/aed.png" alt="flags">
                    </div>
                    <div class="currency_name ms-2 me-1">
                        <span class="font-bold">AED</span>
                    </div>
                    <i class="fa-solid fa-angle-down"></i>
                    <div class="currency_area shadow-lg hidden">
                        <div class="single_currency p-1 bg-white mb-1 flex items-center cursor-pointer">
                            <div class="currency_icon">
                                <img src="./assets/img/flags/aed.png" alt="flags">
                            </div>
                            <div class="currency_name ms-2 me-1">
                                <span class="font-bold">AED</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- topbar section end -->

    <!-- Top navbar section start  -->

    <div class="top_nav sticky top-0 z-50  bg-white px-10 lg:px-0">
        <div class="container flex  items-center py-4 relative">
            <div class="logo me-16 hidden lg:block">
                <a href=""><img src="./assets/logo/logo.png" alt="genx logo"></a>
            </div>
            <div class=" cursor-pointer bg-slate-50 text-gray-500 catebtn hidden ">
                <div class="categoryicon">
                    <svg xmlns="http://www.w3.org/2000/svg" height="25" viewBox="0 0 64 64" width=""
                        class="injected-svg" data-src="/assets/images/icons/categories.svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path
                            d="m29 11v14a4 4 0 0 1 -4 4h-14a4 4 0 0 1 -4-4v-14a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4zm24-4h-14a4 4 0 0 0 -4 4v14a4 4 0 0 0 4 4h14a4 4 0 0 0 4-4v-14a4 4 0 0 0 -4-4zm-28 28h-14a4 4 0 0 0 -4 4v14a4 4 0 0 0 4 4h14a4 4 0 0 0 4-4v-14a4 4 0 0 0 -4-4zm21 0a11 11 0 1 0 11 11 11 11 0 0 0 -11-11z"
                            fill="gray"></path>
                    </svg>
                    <i class=" dropicon text-gray fa-solid fa-sort-down mb-5"></i>
                </div>
                <div class="categories eventcate shadow-md hidden">
                    <div onmouseover="opentab(event, 'electornic')"
                        class="singlecate flex items-center justify-between px-3 py-2 tablink ">
                        <div class="category_icon flex items-center ">
                            <img src="./assets/img/product-icon/ram.png" alt="Electornic component">
                            <div class="category_name ms-2">
                                <span>Electronic</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <div class="tabcontent shadow-md" id="electornic">
                        <div class="subcategory ">
                            <li><a href="">Deel monitor</a></li>
                        </div>
                    </div>
                    <div onmouseover="opentab(event, 'cooling')"
                        class="singlecate flex items-center justify-between px-3 py-2 tablink">
                        <div class="category_icon flex items-center ">
                            <img src="./assets/img/product-icon/fan.png" alt="Electornic component">
                            <div class="category_name ms-2">
                                <span>Fans & Cooling</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <div class="tabcontent shadow-md" id="cooling">
                        <div class="subcategory ">
                            <div class="subcategory1">
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                            </div>
                        </div>
                    </div>
                    <div onmouseover="opentab(event, 'accessories')"
                        class="singlecate flex items-center justify-between px-3 py-2 tablink">
                        <div class="category_icon flex items-center ">
                            <img src="./assets/img/product-icon/computer.png" alt="Electornic component">
                            <div class="category_name ms-2">
                                <span>Computer Accessories</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <div class="tabcontent shadow-md" id="accessories">
                        <div class="subcategory">
                            <div class="subcategory1">
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                            </div>

                            <div class="subcategory2">
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                            </div>

                            <div class="subcategory3">
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                            </div>

                            <div class="subcategory4">
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                            </div>
                        </div>
                    </div>
                    <div class="singlecate flex items-center justify-between px-3 py-2 tablink">
                        <div class="category_icon flex items-center ">
                            <img src="./assets/img/product-icon/hardware.png" alt="Electornic component">
                            <div class="category_name ms-2">
                                <span>Computer Hardware</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <div class="singlecate flex items-center justify-between px-3 py-2 tablink">
                        <div class="category_icon flex items-center ">
                            <img src="./assets/img/product-icon/cable.png" alt="Electornic component">
                            <div class="category_name ms-2">
                                <span>Cables</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <div class="singlecate flex items-center justify-between px-3 py-2 tablink">
                        <div class="category_icon flex items-center ">
                            <img src="./assets/img/product-icon/laptop.png" alt="Electornic component">
                            <div class="category_name ms-2">
                                <span>Laptops</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <div class="singlecate flex items-center justify-between px-3 py-2 tablink">
                        <div class="category_icon flex items-center ">
                            <img src="./assets/img/product-icon/desktop-ram.png" alt="Electornic component">
                            <div class="category_name ms-2">
                                <span>Desktop Memory</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <div class="singlecate flex items-center justify-between px-3 py-2 tablink">
                        <div class="category_icon flex items-center ">
                            <img src="./assets/img/product-icon/mouse.png" alt="Electornic component">
                            <div class="category_name ms-2">
                                <span>Mouse</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <div class="singlecate flex items-center justify-between px-3 py-2 tablink">
                        <div class="category_icon flex items-center ">
                            <img src="./assets/img/product-icon/combo.png" alt="Electornic component">
                            <div class="category_name ms-2">
                                <span>Combo sets</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <div class="singlecate flex items-center justify-between px-3 py-2 tablink">
                        <div class="category_icon flex items-center ">
                            <img src="./assets/img/product-icon/grid.png" alt="Electornic component">
                            <div class="category_name ms-2">
                                <span>all categories</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>

                </div>
            </div>
            <div class="search_box flex-1 mx-16">
                <div class="input-group flex relative text-[14px]">
                    <i class="fa-solid fa-magnifying-glass text-gray-400 absolute top-4 left-5"></i>
                    <input type="text" placeholder="Search…" class="w-full py-3 ps-14 border rounded-3xl outline-ThemeColor" />
                    <button class="hidden lg:hidden absolute right-0 py-3 px-5 text-gray-400 border-l border-gray-300">search</button>
                </div>
            </div>
            <div class="cartAndAcc flex ml-auto ">
                <div class="menuicon text-ThemeColor cursor-pointer text-2xl lg:hidden">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div class="user_img mr-5  hidden lg:block" onclick="login_modal.showModal()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none"
                        class="injected-svg" data-src="/assets/images/icons/user.svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M15.9441 9.62492C15.9441 10.2953 15.6778 10.9383 15.2037 11.4123C14.7297 11.8864 14.0868 12.1527 13.4163 12.1527C12.7459 12.1527 12.103 11.8864 11.6289 11.4123C11.1549 10.9383 10.8886 10.2953 10.8886 9.62492C10.8886 8.95451 11.1549 8.31156 11.6289 7.83751C12.103 7.36346 12.7459 7.09714 13.4163 7.09714C14.0868 7.09714 14.7297 7.36346 15.2037 7.83751C15.6778 8.31156 15.9441 8.95451 15.9441 9.62492ZM13.4163 13.4166C14.422 13.4166 15.3864 13.0171 16.0975 12.306C16.8085 11.595 17.208 10.6305 17.208 9.62492C17.208 8.61931 16.8085 7.65488 16.0975 6.94381C15.3864 6.23273 14.422 5.83325 13.4163 5.83325C12.4107 5.83325 11.4463 6.23273 10.7352 6.94381C10.0242 7.65488 9.62467 8.61931 9.62467 9.62492C9.62467 10.6305 10.0242 11.595 10.7352 12.306C11.4463 13.0171 12.4107 13.4166 13.4163 13.4166ZM20.9997 19.736C20.9997 20.9999 19.7358 20.9999 19.7358 20.9999H7.0969C7.0969 20.9999 5.83301 20.9999 5.83301 19.736C5.83301 18.4721 7.0969 14.6805 13.4163 14.6805C19.7358 14.6805 20.9997 18.4721 20.9997 19.736ZM19.7358 19.731C19.7345 19.4201 19.5411 18.4848 18.6842 17.6279C17.8602 16.8038 16.3094 15.9444 13.4163 15.9444C10.522 15.9444 8.97251 16.8038 8.14845 17.6279C7.29154 18.4848 7.09942 19.4201 7.0969 19.731H19.7358Z"
                            fill="#4B566B"></path>
                    </svg>
                    <img class="hidden" src="./assets/img/user/user.jpeg" alt="User image">
                </div>
                <div class="cart_icon relative hidden lg:block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none"
                        class="injected-svg" data-src="/assets/images/icons/bag.svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path
                            d="M12 0.75C10.8066 0.75 9.66196 1.22411 8.81805 2.06802C7.97414 2.91193 7.50003 4.05653 7.50003 5.25V6H6.87753C6.24612 5.99934 5.63878 6.24222 5.18194 6.6781C4.72511 7.11398 4.45399 7.70925 4.42503 8.34L3.83253 20.6775C3.81734 21.0093 3.86949 21.3407 3.98582 21.6517C4.10216 21.9628 4.28028 22.2471 4.50944 22.4875C4.7386 22.7278 5.01407 22.9193 5.31923 23.0504C5.62439 23.1814 5.95292 23.2493 6.28503 23.25H17.715C18.0471 23.2493 18.3757 23.1814 18.6808 23.0504C18.986 22.9193 19.2615 22.7278 19.4906 22.4875C19.7198 22.2471 19.8979 21.9628 20.0142 21.6517C20.1306 21.3407 20.1827 21.0093 20.1675 20.6775L19.575 8.34C19.5461 7.70925 19.2749 7.11398 18.8181 6.6781C18.3613 6.24222 17.7539 5.99934 17.1225 6H16.5V5.25C16.5 4.05653 16.0259 2.91193 15.182 2.06802C14.3381 1.22411 13.1935 0.75 12 0.75V0.75ZM9.00003 5.25C9.00003 4.45435 9.3161 3.69129 9.87871 3.12868C10.4413 2.56607 11.2044 2.25 12 2.25C12.7957 2.25 13.5587 2.56607 14.1213 3.12868C14.684 3.69129 15 4.45435 15 5.25V6H9.00003V5.25ZM18.075 8.4075L18.6675 20.7525C18.6722 20.8815 18.6515 21.0102 18.6064 21.1311C18.5614 21.2521 18.493 21.363 18.405 21.4575C18.3153 21.5497 18.208 21.623 18.0895 21.6733C17.971 21.7235 17.8437 21.7496 17.715 21.75H6.28503C6.15635 21.7496 6.02904 21.7235 5.91056 21.6733C5.79208 21.623 5.68481 21.5497 5.59503 21.4575C5.50711 21.363 5.43867 21.2521 5.39363 21.1311C5.34859 21.0102 5.32783 20.8815 5.33253 20.7525L5.92503 8.4075C5.93661 8.16276 6.04204 7.9319 6.21943 7.76289C6.39682 7.59388 6.63252 7.49973 6.87753 7.5H17.1225C17.3675 7.49973 17.6032 7.59388 17.7806 7.76289C17.958 7.9319 18.0635 8.16276 18.075 8.4075V8.4075Z"
                            fill="#4B566B"></path>

                    </svg>
                    <span class="cart_item absolute hidden"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Top navbar section end -->

    <!-- Main Navbar seciont start  -->

    <div class="navbar shadow-md py-2 hidden lg:block">
        <div class="container flex items-center justify-between">
            <div class="nav_left flex items-center cursor-pointer py-2 px-4 bg-slate-50">
                <svg xmlns="http://www.w3.org/2000/svg" height="25" viewBox="0 0 64 64" width="" class="injected-svg"
                    data-src="/assets/images/icons/categories.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path
                        d="m29 11v14a4 4 0 0 1 -4 4h-14a4 4 0 0 1 -4-4v-14a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4zm24-4h-14a4 4 0 0 0 -4 4v14a4 4 0 0 0 4 4h14a4 4 0 0 0 4-4v-14a4 4 0 0 0 -4-4zm-28 28h-14a4 4 0 0 0 -4 4v14a4 4 0 0 0 4 4h14a4 4 0 0 0 4-4v-14a4 4 0 0 0 -4-4zm21 0a11 11 0 1 0 11 11 11 11 0 0 0 -11-11z"
                        fill="#2B3445"></path>
                </svg>
                <span class="mx-2 text-gray-500">Categories</span>
                <i class="  text-gray-500 fa-solid fa-chevron-down"></i>
            </div>
            <div class="nav_right">
                <ul class="flex">
                    <li><a href="" class="active">Home</a></li>
                    <li><a href="">Brands</a></li>
                    <li><a href="">Solutions</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Sell on Genx</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Main Navbar seciont end -->

    <!-- mobile navigation bar start  -->

    <div class="moblenav fixed bottom-0 text-lg font-bold py-3 bg-slate-50 lg:hidden">
        <div class="mn_links flex justify-evenly">
            <div class="mn_home">
                <a href="" class="flex flex-col justify-center items-center active">
                    <i class="fa-solid fa-house "></i>
                    <span class="text-[12px]">Home</span>
                </a>
            </div>
            <div class="mn_category">
                <a href="" class="flex flex-col justify-center items-center">
                    <i class="fa-solid fa-list"></i>
                 <span class="text-[12px]">Category</span>
                </a>
               
            </div>
            <div class="mn_cart">
                <a href="" class="flex flex-col justify-center items-center">
                    <i class="fa-solid fa-bag-shopping"></i>
                      <span class="text-[12px]">Cart</span>
                </a>

            </div>
            <div class="mn_login">
                <a href="" class="flex flex-col justify-center items-center">
                    <i class="fa-regular fa-user"></i>
                 <span class="text-[12px]">Login</span>
                </a>
                
            </div>
        </div>
    </div>

    <!-- mobile navigation bar end  -->

    <!-- links for small Device  -->
    <div class="mlinks h-full w-full bg-transparent absolute top-0 hidden">
        <div class="msidebar h-full w-56 bg-white p-4">
            <h4 class="text-gray-500">Menu</h4>
            <ul class="text-gray-700 text-[14px]">
                <li class="py-3"><a href="" class="active  hover:text-ThemeColor" >Home</a></li>
                <li class="py-3"><a href="" class=" hover:text-ThemeColor">Brands</a></li>
                <li class="py-3"><a href="" class=" hover:text-ThemeColor">Solutions</a></li>
                <li class="py-3"><a href="" class=" hover:text-ThemeColor">About Us</a></li>
                <li class="py-3"><a href="" class=" hover:text-ThemeColor">Sell On GenX</a></li>
            </ul>
        </div>
    </div>
    <!-- links for small Device  -->

    <!-- Carousel section start  -->

    <div class="carousel">
        <div class="container flex ">
            <div class="carousel_left hidden lg:block">
                <div class="categories maincategories shadow-md">
                    <div onmouseover="openCategory(event, 'melectornic')"
                        class="singlecate flex items-center justify-between px-3 py-2 tablink ">
                        <div class="category_icon flex items-center ">
                            <img src="./assets/img/product-icon/ram.png" alt="Electornic component">
                            <div class="category_name ms-2">
                                <span>Electronic</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <div class="tabcontent shadow-md" id="melectornic">
                        <div class="subcategory ">
                            <li><a href="">Deel monitor</a></li>
                        </div>
                    </div>
                    <div onmouseover="openCategory(event, 'mcooling')"
                        class="singlecate flex items-center justify-between px-3 py-2 tablink">
                        <div class="category_icon flex items-center ">
                            <img src="./assets/img/product-icon/fan.png" alt="Electornic component">
                            <div class="category_name ms-2">
                                <span>Fans & Cooling</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <div class="tabcontent shadow-md" id="mcooling">
                        <div class="subcategory ">
                            <div class="subcategory1">
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                            </div>
                        </div>
                    </div>
                    <div onmouseover="openCategory(event, 'maccessories')"
                        class="singlecate flex items-center justify-between px-3 py-2 tablink">
                        <div class="category_icon flex items-center ">
                            <img src="./assets/img/product-icon/computer.png" alt="Electornic component">
                            <div class="category_name ms-2">
                                <span>Computer Accessories</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <div class="tabcontent shadow-md" id="maccessories">
                        <div class="subcategory">
                            <div class="subcategory1">
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                            </div>

                            <div class="subcategory2">
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                            </div>

                            <div class="subcategory3">
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                            </div>

                            <div class="subcategory4">
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                                <li><a href="">Deel monitor</a></li>
                            </div>
                        </div>
                    </div>
                    <div class="singlecate flex items-center justify-between px-3 py-2 tablink">
                        <div class="category_icon flex items-center ">
                            <img src="./assets/img/product-icon/hardware.png" alt="Electornic component">
                            <div class="category_name ms-2">
                                <span>Computer Hardware</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <div class="singlecate flex items-center justify-between px-3 py-2 tablink">
                        <div class="category_icon flex items-center ">
                            <img src="./assets/img/product-icon/cable.png" alt="Electornic component">
                            <div class="category_name ms-2">
                                <span>Cables</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <div class="singlecate flex items-center justify-between px-3 py-2 tablink">
                        <div class="category_icon flex items-center ">
                            <img src="./assets/img/product-icon/laptop.png" alt="Electornic component">
                            <div class="category_name ms-2">
                                <span>Laptops</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <div class="singlecate flex items-center justify-between px-3 py-2 tablink">
                        <div class="category_icon flex items-center ">
                            <img src="./assets/img/product-icon/desktop-ram.png" alt="Electornic component">
                            <div class="category_name ms-2">
                                <span>Desktop Memory</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <div class="singlecate flex items-center justify-between px-3 py-2 tablink">
                        <div class="category_icon flex items-center ">
                            <img src="./assets/img/product-icon/mouse.png" alt="Electornic component">
                            <div class="category_name ms-2">
                                <span>Mouse</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <div class="singlecate flex items-center justify-between px-3 py-2 tablink">
                        <div class="category_icon flex items-center ">
                            <img src="./assets/img/product-icon/combo.png" alt="Electornic component">
                            <div class="category_name ms-2">
                                <span>Combo sets</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <div class="singlecate flex items-center justify-between px-3 py-2 tablink">
                        <div class="category_icon flex items-center ">
                            <img src="./assets/img/product-icon/grid.png" alt="Electornic component">
                            <div class="category_name ms-2">
                                <span>all categories</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>

                </div>
            </div>
            <div class="carousel_right">
                <div>
                    <div class="single_carousel flex items-center justify-between">
                        <div class="sleft">
                            <h3>IMAC</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. ducimus quidem minima omnis?
                            </p>
                            <a href="" class="rounded-md ">View Products</a>
                        </div>
                        <div class="sright">
                            <img src="./assets/img/carousel/mact.png" alt="laptop">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="single_carousel flex items-center justify-between">
                        <div class="sleft">
                            <h3>IMAC</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. ducimus quidem minima omnis?
                            </p>
                            <a href="" class="rounded-md ">View Products</a>
                        </div>
                        <div class="sright">

                            <img src="./assets/img/carousel/mact.png" alt="laptop">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="single_carousel flex items-center justify-between">
                        <div class="sleft">
                            <h3>IMAC</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. ducimus quidem minima omnis?
                            </p>
                            <a href="" class="rounded-md ">View Products</a>
                        </div>
                        <div class="sright">

                            <img src="./assets/img/carousel/mact.png" alt="laptop">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Carousel section end  -->

    <!-- Flash Deals section start  -->

    <div class="flashSection bg-themebg py-7">
        <div class="container">
            <div class="heading flex justify-between items-center">
                <div class="heading_left">
                    <i class="fa-solid fa-bolt"></i>
                    <span class="heading_name">Flash Deals</span>
                </div>
                <div class="heading_right">
                    <a href="">
                        <span>View all</span>
                        <i class="fa-solid fa-caret-right"></i>
                    </a>
                </div>
            </div>
            <div class="product_slider ">
                <div class="products flash_products relative">
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="./assets/img/products/1680071431_intel-core-i9-10900k-10th-gen-processor-bulk.jpg-550x550.jpg"
                                    alt="Shoes" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="">Intel Core i9-10900K Box Desktop Processor, 10 Cores up to 5.3 GHz
                                        Unlocked LGA1200 (Intel 400 Series Chipset) 125W | BX8070110900K</a>
                                </div>
                                <div class="card_star">
                                    <div class="single_star text-yellow-500">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                                <div class="card-atctions flex justify-between items-center">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>19958.64</span>
                                        </div>
                                    </div>
                                    <div class="atoCart border text-ThemeColor cursor-pointer" data-pid="1">
                                        <span class="px-2 text-2xl">+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="view_heart">
                                <span class="view text-topbar">
                                    <i class="fa-solid fa-eye"></i>
                                </span>
                                <span class="atfav text-ThemeColor">
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="./assets/img/products/1680071431_intel-core-i9-10900k-10th-gen-processor-bulk.jpg-550x550.jpg"
                                    alt="Shoes" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="">Intel Core i9-10900K Box Desktop Processor, 10 Cores up to 5.3 GHz
                                        Unlocked LGA1200 (Intel 400 Series Chipset) 125W | BX8070110900K</a>
                                </div>
                                <div class="card_star">
                                    <div class="single_star text-yellow-500">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                                <div class="card-atctions flex justify-between items-center">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>19958.64</span>
                                        </div>
                                    </div>
                                    <div class="atoCart border text-ThemeColor cursor-pointer" data-pid="2">
                                        <span class="px-2 text-2xl">+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="view_heart">
                                <span class="view text-topbar">
                                    <i class="fa-solid fa-eye"></i>
                                </span>
                                <span class="atfav text-ThemeColor">
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="./assets/img/products/1680071431_intel-core-i9-10900k-10th-gen-processor-bulk.jpg-550x550.jpg"
                                    alt="Shoes" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="">Intel Core i9-10900K Box Desktop Processor, 10 Cores up to 5.3 GHz
                                        Unlocked LGA1200 (Intel 400 Series Chipset) 125W | BX8070110900K</a>
                                </div>
                                <div class="card_star">
                                    <div class="single_star text-yellow-500">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                                <div class="card-atctions flex justify-between items-center">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>19958.64</span>
                                        </div>
                                    </div>
                                    <div class="atoCart border text-ThemeColor cursor-pointer" data-pid="3">
                                        <span class="px-2 text-2xl">+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="view_heart">
                                <span class="view text-topbar">
                                    <i class="fa-solid fa-eye"></i>
                                </span>
                                <span class="atfav text-ThemeColor">
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="./assets/img/products/1680071431_intel-core-i9-10900k-10th-gen-processor-bulk.jpg-550x550.jpg"
                                    alt="Shoes" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="">Intel Core i9-10900K Box Desktop Processor, 10 Cores up to 5.3 GHz
                                        Unlocked LGA1200 (Intel 400 Series Chipset) 125W | BX8070110900K</a>
                                </div>
                                <div class="card_star">
                                    <div class="single_star text-yellow-500">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                                <div class="card-atctions flex justify-between items-center">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>19958.64</span>
                                        </div>
                                    </div>
                                    <div class="atoCart border text-ThemeColor cursor-pointer" data-pid="4">
                                        <span class="px-2 text-2xl">+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="view_heart">
                                <span class="view text-topbar">
                                    <i class="fa-solid fa-eye"></i>
                                </span>
                                <span class="atfav text-ThemeColor">
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="./assets/img/products/1680071431_intel-core-i9-10900k-10th-gen-processor-bulk.jpg-550x550.jpg"
                                    alt="Shoes" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="">Intel Core i9-10900K Box Desktop Processor, 10 Cores up to 5.3 GHz
                                        Unlocked LGA1200 (Intel 400 Series Chipset) 125W | BX8070110900K</a>
                                </div>
                                <div class="card_star">
                                    <div class="single_star text-yellow-500">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                                <div class="card-atctions flex justify-between items-center">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>19958.64</span>
                                        </div>
                                    </div>
                                    <div class="atoCart border text-ThemeColor cursor-pointer" data-pid="5">
                                        <span class="px-2 text-2xl">+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="view_heart">
                                <span class="view text-topbar">
                                    <i class="fa-solid fa-eye"></i>
                                </span>
                                <span class="atfav text-ThemeColor">
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Flash Deals section end -->

    <!-- Top category section start  -->

    <div class="top_categories bg-themebg py-7">
        <div class="container">
            <div class="heading flex justify-between items-center">
                <div class="heading_left">
                    <i class="fa-brands fa-microsoft text-ThemeColor"></i>
                    <span class="heading_name">Top Categories</span>
                </div>
                <div class="heading_right">
                    <a href="">
                        <span>View all</span>
                        <i class="fa-solid fa-caret-right"></i>
                    </a>
                </div>
            </div>
            <div class="product_slider relative">
                <div class="products top_categories_box">
                    <div class="catebox p-4 bg-white rounded">
                        <a href="" class="flex justify-center">
                            <div class="ovarbg p-2 relative">
                                <div class="overlay"></div>
                                <div class="cname absolute">Dell Monitors</div>
                                <div class="cimg">
                                    <img class="object-cover" src="./assets/img/products/laptop.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="catebox p-4 bg-white rounded">
                        <a href="" class="flex justify-center">
                            <div class="ovarbg p-2 relative">
                                <div class="overlay"></div>
                                <div class="cname absolute">Dell Monitors</div>
                                <div class="cimg">
                                    <img class="object-cover" src="./assets/img/products/laptop.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="catebox p-4 bg-white rounded">
                        <a href="" class="flex justify-center">
                            <div class="ovarbg p-2 relative">
                                <div class="overlay"></div>
                                <div class="cname absolute">Dell Monitors</div>
                                <div class="cimg">
                                    <img class="object-cover" src="./assets/img/products/laptop.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="catebox p-4 bg-white rounded">
                        <a href="" class="flex justify-center">
                            <div class="ovarbg p-2 relative">
                                <div class="overlay"></div>
                                <div class="cname absolute">Dell Monitors</div>
                                <div class="cimg">
                                    <img class="object-cover" src="./assets/img/products/laptop.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top category section end -->

    <!-- New Arrivals section start  -->
    <div class="new_section bg-themebg py-7">
        <div class="container">
            <div class="heading flex justify-between items-center">
                <div class="heading_left">
                    <i class="fa-solid fa-circle-plus text-green-400"></i>
                    <span class="heading_name">New Arrivals</span>
                </div>
                <div class="heading_right">
                    <a href="">
                        <span>View all</span>
                        <i class="fa-solid fa-caret-right"></i>
                    </a>
                </div>
            </div>
            <div class="product_slider">
                <div class=" arrivals_section grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-y-5">
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="./assets/img/products/1680071431_intel-core-i9-10900k-10th-gen-processor-bulk.jpg-550x550.jpg"
                                    alt="Shoes" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="">Intel Core i9-10900K Box Desktop Processor, 10 Cores up to 5.3 GHz
                                        Unlocked LGA1200 (Intel 400 Series Chipset) 125W | BX8070110900K</a>
                                </div>

                                <div class="card-atctions ">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>19958.64</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="./assets/img/products/1680071431_intel-core-i9-10900k-10th-gen-processor-bulk.jpg-550x550.jpg"
                                    alt="Shoes" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="">Intel Core i9-10900K Box Desktop Processor, 10 Cores up to 5.3 GHz
                                        Unlocked LGA1200 (Intel 400 Series Chipset) 125W | BX8070110900K</a>
                                </div>

                                <div class="card-atctions ">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>19958.64</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="./assets/img/products/1680071431_intel-core-i9-10900k-10th-gen-processor-bulk.jpg-550x550.jpg"
                                    alt="Shoes" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="">Intel Core i9-10900K Box Desktop Processor, 10 Cores up to 5.3 GHz
                                        Unlocked LGA1200 (Intel 400 Series Chipset) 125W | BX8070110900K</a>
                                </div>

                                <div class="card-atctions ">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>19958.64</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="./assets/img/products/1680071431_intel-core-i9-10900k-10th-gen-processor-bulk.jpg-550x550.jpg"
                                    alt="Shoes" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="">Intel Core i9-10900K Box Desktop Processor, 10 Cores up to 5.3 GHz
                                        Unlocked LGA1200 (Intel 400 Series Chipset) 125W | BX8070110900K</a>
                                </div>

                                <div class="card-atctions ">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>19958.64</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="./assets/img/products/1680071431_intel-core-i9-10900k-10th-gen-processor-bulk.jpg-550x550.jpg"
                                    alt="Shoes" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="">Intel Core i9-10900K Box Desktop Processor, 10 Cores up to 5.3 GHz
                                        Unlocked LGA1200 (Intel 400 Series Chipset) 125W | BX8070110900K</a>
                                </div>

                                <div class="card-atctions ">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>19958.64</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="./assets/img/products/1680071431_intel-core-i9-10900k-10th-gen-processor-bulk.jpg-550x550.jpg"
                                    alt="Shoes" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="">Intel Core i9-10900K Box Desktop Processor, 10 Cores up to 5.3 GHz
                                        Unlocked LGA1200 (Intel 400 Series Chipset) 125W | BX8070110900K</a>
                                </div>

                                <div class="card-atctions ">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>19958.64</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="./assets/img/products/1680071431_intel-core-i9-10900k-10th-gen-processor-bulk.jpg-550x550.jpg"
                                    alt="Shoes" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="">Intel Core i9-10900K Box Desktop Processor, 10 Cores up to 5.3 GHz
                                        Unlocked LGA1200 (Intel 400 Series Chipset) 125W | BX8070110900K</a>
                                </div>

                                <div class="card-atctions ">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>19958.64</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- New Arrivals section end -->

    <!-- Discounts section start  -->

    <div class="discount bg-themebg py-7">
        <div class="container">
            <div class="heading flex justify-between items-center">
                <div class="heading_left">
                    <i class="fa-solid fa-gift"></i>
                    <span class="heading_name">Big Discounts</span>
                </div>
                <div class="heading_right">
                    <a href="">
                        <span>View all</span>
                        <i class="fa-solid fa-caret-right"></i>
                    </a>
                </div>
            </div>
            <div class="product_slider">
                <div class="products discounts_section">
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="./assets/img/products/1680071431_intel-core-i9-10900k-10th-gen-processor-bulk.jpg-550x550.jpg"
                                    alt="Shoes" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="">Intel Core i9-10900K Box Desktop Processor, 10 Cores up to 5.3 GHz
                                        Unlocked LGA1200 (Intel 400 Series Chipset) 125W | BX8070110900K</a>
                                </div>

                                <div class="card-atctions ">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>19958.64</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="./assets/img/products/1680071431_intel-core-i9-10900k-10th-gen-processor-bulk.jpg-550x550.jpg"
                                    alt="Shoes" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="">Intel Core i9-10900K Box Desktop Processor, 10 Cores up to 5.3 GHz
                                        Unlocked LGA1200 (Intel 400 Series Chipset) 125W | BX8070110900K</a>
                                </div>

                                <div class="card-atctions ">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>19958.64</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="./assets/img/products/1680071431_intel-core-i9-10900k-10th-gen-processor-bulk.jpg-550x550.jpg"
                                    alt="Shoes" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="">Intel Core i9-10900K Box Desktop Processor, 10 Cores up to 5.3 GHz
                                        Unlocked LGA1200 (Intel 400 Series Chipset) 125W | BX8070110900K</a>
                                </div>

                                <div class="card-atctions ">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>19958.64</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="./assets/img/products/1680071431_intel-core-i9-10900k-10th-gen-processor-bulk.jpg-550x550.jpg"
                                    alt="Shoes" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="">Intel Core i9-10900K Box Desktop Processor, 10 Cores up to 5.3 GHz
                                        Unlocked LGA1200 (Intel 400 Series Chipset) 125W | BX8070110900K</a>
                                </div>

                                <div class="card-atctions ">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>19958.64</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="./assets/img/products/1680071431_intel-core-i9-10900k-10th-gen-processor-bulk.jpg-550x550.jpg"
                                    alt="Shoes" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="">Intel Core i9-10900K Box Desktop Processor, 10 Cores up to 5.3 GHz
                                        Unlocked LGA1200 (Intel 400 Series Chipset) 125W | BX8070110900K</a>
                                </div>

                                <div class="card-atctions ">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>19958.64</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="./assets/img/products/1680071431_intel-core-i9-10900k-10th-gen-processor-bulk.jpg-550x550.jpg"
                                    alt="Shoes" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="">Intel Core i9-10900K Box Desktop Processor, 10 Cores up to 5.3 GHz
                                        Unlocked LGA1200 (Intel 400 Series Chipset) 125W | BX8070110900K</a>
                                </div>

                                <div class="card-atctions ">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>19958.64</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="./assets/img/products/1680071431_intel-core-i9-10900k-10th-gen-processor-bulk.jpg-550x550.jpg"
                                    alt="Shoes" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="">Intel Core i9-10900K Box Desktop Processor, 10 Cores up to 5.3 GHz
                                        Unlocked LGA1200 (Intel 400 Series Chipset) 125W | BX8070110900K</a>
                                </div>

                                <div class="card-atctions ">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>19958.64</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Discounts section end -->

    <!-- For you sction start  -->

    <div class="foryou bg-themebg py-7">
        <div class="container">
            <div class="heading flex justify-between items-center">
                <div class="heading_left">
                    <span class="heading_name">More For you</span>
                </div>
                <div class="heading_right">
                    <a href="">
                        <span>View all</span>
                        <i class="fa-solid fa-caret-right"></i>
                    </a>
                </div>
            </div>
            <div class="products ">
                <div class="foryou_section grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-y-5">
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="./assets/img/products/1680071431_intel-core-i9-10900k-10th-gen-processor-bulk.jpg-550x550.jpg"
                                    alt="Shoes" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="">Intel Core i9-10900K Box Desktop Processor, 10 Cores up to 5.3 GHz
                                        Unlocked LGA1200 (Intel 400 Series Chipset) 125W | BX8070110900K</a>
                                </div>
                                <div class="card_star">
                                    <div class="single_star text-yellow-500">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                                <div class="card-atctions flex justify-between items-center">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>19958.64</span>
                                        </div>
                                    </div>
                                    <div class="atoCart border text-ThemeColor cursor-pointer">
                                        <span class="px-2 text-2xl">+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="view_heart">
                                <span class="view text-topbar">
                                    <i class="fa-solid fa-eye"></i>
                                </span>
                                <span class="atfav text-ThemeColor">
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="./assets/img/products/1680071431_intel-core-i9-10900k-10th-gen-processor-bulk.jpg-550x550.jpg"
                                    alt="Shoes" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="">Intel Core i9-10900K Box Desktop Processor, 10 Cores up to 5.3 GHz
                                        Unlocked LGA1200 (Intel 400 Series Chipset) 125W | BX8070110900K</a>
                                </div>
                                <div class="card_star">
                                    <div class="single_star text-yellow-500">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                                <div class="card-atctions flex justify-between items-center">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>19958.64</span>
                                        </div>
                                    </div>
                                    <div class="atoCart border text-ThemeColor cursor-pointer">
                                        <span class="px-2 text-2xl">+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="view_heart">
                                <span class="view text-topbar">
                                    <i class="fa-solid fa-eye"></i>
                                </span>
                                <span class="atfav text-ThemeColor">
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="./assets/img/products/1680071431_intel-core-i9-10900k-10th-gen-processor-bulk.jpg-550x550.jpg"
                                    alt="Shoes" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="">Intel Core i9-10900K Box Desktop Processor, 10 Cores up to 5.3 GHz
                                        Unlocked LGA1200 (Intel 400 Series Chipset) 125W | BX8070110900K</a>
                                </div>
                                <div class="card_star">
                                    <div class="single_star text-yellow-500">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                                <div class="card-atctions flex justify-between items-center">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>19958.64</span>
                                        </div>
                                    </div>
                                    <div class="atoCart border text-ThemeColor cursor-pointer">
                                        <span class="px-2 text-2xl">+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="view_heart">
                                <span class="view text-topbar">
                                    <i class="fa-solid fa-eye"></i>
                                </span>
                                <span class="atfav text-ThemeColor">
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="./assets/img/products/1680071431_intel-core-i9-10900k-10th-gen-processor-bulk.jpg-550x550.jpg"
                                    alt="Shoes" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="">Intel Core i9-10900K Box Desktop Processor, 10 Cores up to 5.3 GHz
                                        Unlocked LGA1200 (Intel 400 Series Chipset) 125W | BX8070110900K</a>
                                </div>
                                <div class="card_star">
                                    <div class="single_star text-yellow-500">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                                <div class="card-atctions flex justify-between items-center">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>19958.64</span>
                                        </div>
                                    </div>
                                    <div class="atoCart border text-ThemeColor cursor-pointer">
                                        <span class="px-2 text-2xl">+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="view_heart">
                                <span class="view text-topbar">
                                    <i class="fa-solid fa-eye"></i>
                                </span>
                                <span class="atfav text-ThemeColor">
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="./assets/img/products/1680071431_intel-core-i9-10900k-10th-gen-processor-bulk.jpg-550x550.jpg"
                                    alt="Shoes" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="">Intel Core i9-10900K Box Desktop Processor, 10 Cores up to 5.3 GHz
                                        Unlocked LGA1200 (Intel 400 Series Chipset) 125W | BX8070110900K</a>
                                </div>
                                <div class="card_star">
                                    <div class="single_star text-yellow-500">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                                <div class="card-atctions flex justify-between items-center">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>19958.64</span>
                                        </div>
                                    </div>
                                    <div class="atoCart border text-ThemeColor cursor-pointer">
                                        <span class="px-2 text-2xl">+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="view_heart">
                                <span class="view text-topbar">
                                    <i class="fa-solid fa-eye"></i>
                                </span>
                                <span class="atfav text-ThemeColor">
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="./assets/img/products/1680071431_intel-core-i9-10900k-10th-gen-processor-bulk.jpg-550x550.jpg"
                                    alt="Shoes" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="">Intel Core i9-10900K Box Desktop Processor, 10 Cores up to 5.3 GHz
                                        Unlocked LGA1200 (Intel 400 Series Chipset) 125W | BX8070110900K</a>
                                </div>
                                <div class="card_star">
                                    <div class="single_star text-yellow-500">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                                <div class="card-atctions flex justify-between items-center">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>19958.64</span>
                                        </div>
                                    </div>
                                    <div class="atoCart border text-ThemeColor cursor-pointer">
                                        <span class="px-2 text-2xl">+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="view_heart">
                                <span class="view text-topbar">
                                    <i class="fa-solid fa-eye"></i>
                                </span>
                                <span class="atfav text-ThemeColor">
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="./assets/img/products/1680071431_intel-core-i9-10900k-10th-gen-processor-bulk.jpg-550x550.jpg"
                                    alt="Shoes" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="">Intel Core i9-10900K Box Desktop Processor, 10 Cores up to 5.3 GHz
                                        Unlocked LGA1200 (Intel 400 Series Chipset) 125W | BX8070110900K</a>
                                </div>
                                <div class="card_star">
                                    <div class="single_star text-yellow-500">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                                <div class="card-atctions flex justify-between items-center">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>19958.64</span>
                                        </div>
                                    </div>
                                    <div class="atoCart border text-ThemeColor cursor-pointer">
                                        <span class="px-2 text-2xl">+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="view_heart">
                                <span class="view text-topbar">
                                    <i class="fa-solid fa-eye"></i>
                                </span>
                                <span class="atfav text-ThemeColor">
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="./assets/img/products/1680071431_intel-core-i9-10900k-10th-gen-processor-bulk.jpg-550x550.jpg"
                                    alt="Shoes" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="">Intel Core i9-10900K Box Desktop Processor, 10 Cores up to 5.3 GHz
                                        Unlocked LGA1200 (Intel 400 Series Chipset) 125W | BX8070110900K</a>
                                </div>
                                <div class="card_star">
                                    <div class="single_star text-yellow-500">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                                <div class="card-atctions flex justify-between items-center">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>19958.64</span>
                                        </div>
                                    </div>
                                    <div class="atoCart border text-ThemeColor cursor-pointer">
                                        <span class="px-2 text-2xl">+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="view_heart">
                                <span class="view text-topbar">
                                    <i class="fa-solid fa-eye"></i>
                                </span>
                                <span class="atfav text-ThemeColor">
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="pbbox relative bg-white">
                        <div class="card p-3 shadow-md">
                            <figure><img
                                    src="./assets/img/products/1680071431_intel-core-i9-10900k-10th-gen-processor-bulk.jpg-550x550.jpg"
                                    alt="Shoes" /></figure>
                            <div class="card-body">
                                <div class="ptitle">
                                    <a href="">Intel Core i9-10900K Box Desktop Processor, 10 Cores up to 5.3 GHz
                                        Unlocked LGA1200 (Intel 400 Series Chipset) 125W | BX8070110900K</a>
                                </div>
                                <div class="card_star">
                                    <div class="single_star text-yellow-500">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                                <div class="card-atctions flex justify-between items-center">
                                    <div class="price_box flex text-ThemeColor">
                                        <div class="currency pe-2">
                                            <span>AED</span>
                                        </div>
                                        <div class="price">
                                            <span>19958.64</span>
                                        </div>
                                    </div>
                                    <div class="atoCart border text-ThemeColor cursor-pointer">
                                        <span class="px-2 text-2xl">+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="view_heart">
                                <span class="view text-topbar">
                                    <i class="fa-solid fa-eye"></i>
                                </span>
                                <span class="atfav text-ThemeColor">
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- For you sction end  -->

    <!-- services section start  -->
    <div class="services bg-themebg py-7">
        <div class="container pb-5 services_boxs grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
            <div class="services_box p-8 bg-white rounded">
                <div class="icon">
                    <i class="fa-solid fa-truck-fast"></i>

                </div>
                <div class="service_name">
                    <span>Worldwide Delivery</span>
                </div>
                <div class="sdis">
                    <p>We offer competitive prices on our 100 million plus product any range.</p>
                </div>
            </div>
            <div class="services_box p-8 bg-white rounded">
                <div class="icon">
                    <i class="fa-solid fa-truck-fast"></i>

                </div>
                <div class="service_name">
                    <span>Worldwide Delivery</span>
                </div>
                <div class="sdis">
                    <p>We offer competitive prices on our 100 million plus product any range.</p>
                </div>
            </div>
            <div class="services_box p-8 bg-white rounded">
                <div class="icon">
                    <i class="fa-solid fa-truck-fast"></i>

                </div>
                <div class="service_name">
                    <span>Worldwide Delivery</span>
                </div>
                <div class="sdis">
                    <p>We offer competitive prices on our 100 million plus product any range.</p>
                </div>
            </div>
            <div class="services_box p-8 bg-white rounded">
                <div class="icon">
                    <i class="fa-solid fa-truck-fast"></i>

                </div>
                <div class="service_name">
                    <span>Worldwide Delivery</span>
                </div>
                <div class="sdis">
                    <p>We offer competitive prices on our 100 million plus product any range.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- services section end -->
@endsection