    <!-- footer section start  -->
    <div class="footer bg-topbar">
        <div class="container footer_boxes grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 p-4">
            <div class="footer_box ">
                <div class="logo">
                    <img src="@isset($setting)
                    {{asset($setting[0]['logo'])}}
                @endisset" alt="logo">
                </div>
                <div class="address">
                    <p>Le Solarium Tower 511 - Dubai Silicon Oasis, Dubai , United Arab Emirates. Phone: 04 342 5068,
                        Email: info@genx.ae</p>
                </div>
                <div class="apps">
                    <div class="google_play">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" class="injected-svg" data-src="/assets/images/icons/play-store.svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g clip-path="url(#clip0-1132)">
                                    <path
                                        d="M17.9236 8.23227C15.1356 6.67287 10.6607 4.16885 3.71978 0.282486C3.25183 -0.0265614 2.71342 -0.0670615 2.24823 0.090392L14.1569 11.999L17.9236 8.23227Z"
                                        fill="#32BBFF"></path>
                                    <path
                                        d="M2.24824 0.090332C2.16105 0.119863 2.07621 0.155488 1.99507 0.19852C1.48137 0.476395 1.10388 1.0111 1.10388 1.68737V22.3105C1.10388 22.9868 1.48132 23.5215 1.99507 23.7993C2.07607 23.8423 2.16087 23.8781 2.24796 23.9078L14.1568 11.999L2.24824 0.090332Z"
                                        fill="#32BBFF"></path>
                                    <path
                                        d="M14.1569 11.999L2.24799 23.9079C2.71331 24.0665 3.25172 24.0291 3.71982 23.7155C10.451 19.9463 14.8754 17.472 17.6957 15.8993C17.7742 15.8552 17.8512 15.8121 17.9272 15.7694L14.1569 11.999Z"
                                        fill="#32BBFF"></path>
                                    <path
                                        d="M1.10388 11.999V22.3106C1.10388 22.9869 1.48132 23.5216 1.99507 23.7994C2.07607 23.8424 2.16087 23.8782 2.24796 23.9079L14.1568 11.999H1.10388Z"
                                        fill="#2C9FD9"></path>
                                    <path
                                        d="M3.71978 0.282559C3.16407 -0.0843794 2.50876 -0.0739263 1.99506 0.198699L13.9761 12.1798L17.9235 8.23234C15.1356 6.67295 10.6607 4.16893 3.71978 0.282559Z"
                                        fill="#29CC5E"></path>
                                    <path
                                        d="M13.9762 11.8184L1.99506 23.7994C2.50881 24.072 3.16407 24.0877 3.71978 23.7155C10.4509 19.9463 14.8754 17.472 17.6957 15.8993C17.7742 15.8552 17.8511 15.8121 17.9271 15.7694L13.9762 11.8184Z"
                                        fill="#D93F21"></path>
                                    <path
                                        d="M22.8961 11.9989C22.8961 11.4275 22.6078 10.8509 22.0363 10.5311C22.0363 10.5311 20.9676 9.93479 17.6919 8.10254L13.7955 11.9989L17.6957 15.8992C20.9355 14.0801 22.0363 13.4667 22.0363 13.4667C22.6078 13.147 22.8961 12.5703 22.8961 11.9989Z"
                                        fill="#FFD500"></path>
                                    <path
                                        d="M22.0363 13.4669C22.6078 13.1471 22.8961 12.5704 22.8961 11.999H13.7955L17.6957 15.8993C20.9355 14.0802 22.0363 13.4669 22.0363 13.4669Z"
                                        fill="#FFAA00"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0-1132">
                                        <rect width="24" height="24" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="dname">
                            <p>Get it on</p>
                            <h4>Google Play</h4>
                        </div>
                    </div>
                    <div class="app_store">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" class="injected-svg" data-src="/assets/images/icons/app-store.svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path
                                    d="M19.0781 24H4.92188C2.20795 24 0 21.792 0 19.0781V4.92188C0 2.20795 2.20795 0 4.92188 0H19.0781C21.792 0 24 2.20795 24 4.92188V19.0781C24 21.792 21.792 24 19.0781 24Z"
                                    fill="#00C3FF"></path>
                                <path
                                    d="M19.0781 0H12V24H19.0781C21.792 24 24 21.792 24 19.0781V4.92188C24 2.20795 21.792 0 19.0781 0Z"
                                    fill="#00AAF0"></path>
                                <path
                                    d="M7.38978 18.4929C7.17299 18.8684 6.77825 19.0785 6.37292 19.0786C6.17422 19.0786 5.97303 19.0281 5.78895 18.9218C5.22936 18.5988 5.03694 17.8807 5.36 17.3211L5.59049 16.9219H8.29681L7.38978 18.4929Z"
                                    fill="white"></path>
                                <path
                                    d="M5.17969 15.984C4.53352 15.984 4.00781 15.4583 4.00781 14.8122C4.00781 14.166 4.53352 13.6403 5.17969 13.6403H7.48491L10.6468 8.1637L9.78989 6.67945C9.46683 6.11985 9.6592 5.40173 10.2188 5.07862H10.2188C10.7784 4.75556 11.4966 4.94803 11.8196 5.50757L12 5.81999L12.1804 5.50762C12.5036 4.94798 13.2217 4.7556 13.7812 5.07867C14.0522 5.23518 14.2462 5.48788 14.3272 5.79023C14.4082 6.09257 14.3666 6.40842 14.2101 6.67949L10.1912 13.6403H12.7262L14.0794 15.984H5.17969Z"
                                    fill="white"></path>
                                <path
                                    d="M18.8203 15.9844H17.8682L18.6399 17.3211C18.963 17.8806 18.7706 18.5988 18.2111 18.9219C18.0304 19.0261 17.83 19.0794 17.6269 19.0794C17.5251 19.0794 17.4228 19.066 17.3217 19.039C17.0194 18.9579 16.7667 18.764 16.6101 18.4929L12.5412 11.4453L13.8943 9.10156L16.5151 13.6407H18.8203C19.4665 13.6407 19.9922 14.1664 19.9922 14.8126C19.9922 15.4587 19.4665 15.9844 18.8203 15.9844Z"
                                    fill="#F2F2F2"></path>
                                <path d="M12 13.6406V15.9844H14.0794L12.7262 13.6406H12Z" fill="#F2F2F2">
                                </path>
                                <path
                                    d="M14.3272 5.7907C14.2461 5.48836 14.0522 5.23561 13.7812 5.07914C13.2217 4.75608 12.5035 4.9484 12.1804 5.50809L12 5.82047V10.508L14.2101 6.67996C14.3666 6.40889 14.4082 6.09309 14.3272 5.7907Z"
                                    fill="#F2F2F2"></path>
                            </svg>
                        </div>
                        <div class="dname">
                            <p>Download on</p>
                            <h4>App Store</h4>
                        </div>
                    </div>

                </div>
            </div>
            <div class="footer_box ">
                <h3>About Us</h3>
                <div class="links">
                    <li><a href="">Why Us</a></li>
                    <li><a href="">Privacy Policy</a></li>
                    <li><a href="">Terms & Conditions</a></li>
                    <li><a href="">Help & FAQ</a></li>
                    <li><a href="">Return Policy</a></li>
                </div>
            </div>
            <div class="footer_box ">
                <h3>Have a look</h3>
                <div class="links">
                    <li><a href="">Category</a></li>
                    <li><a href="">Brand</a></li>
                    <li><a href="">Solution</a></li>
                    <li><a href="">Sell on Genx</a></li>
                </div>
            </div>
            <div class="footer_box ">
                <h3>Contact Us</h3>
                <div class="address">
                    <p>Le Solarium Tower 511 - Dubai Silicon Oasis, Dubai , United Arab Emirates. Phone: 04 342 5068,
                        Email: info@genx.ae</p>
                </div>
                <div class="links">
                    <li><a href="">Email: genx@gmail.com</a></li>
                    <li><a href="">Phone: +971 04 342 5068</a></li>
                </div>
                <div class="social_icon">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-linkedin-in"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section end  -->