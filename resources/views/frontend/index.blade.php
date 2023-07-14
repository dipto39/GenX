@extends('frontend.layouts.main')

@section('content')


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