@extends('frontend.layouts.main')

@section('content')
        <!-- Brand section start  -->
        <div class="brand_section bg-themebg">
            <div class="container">
                <div class="brand grid grid-cols-4 gap-6 py-6">
                    <div class="single_brand p-3 bg-white rounded-lg">
                        <a href="">
                            <div class="bimg max-h-72 flex justify-center items-center bg-slate-200 p-4">
                                <img class="object-fit h-32 w-32" src="./assets/img/brand/xiaomi.png" alt="">
                            </div>
                            <div class="bname py-2 text-slate-800">
                                <span>Xiaomi</span>
                            </div>
                        </a>
                    </div>
                    <div class="single_brand p-3 bg-white rounded-lg">
                        <a href="">
                            <div class="bimg max-h-72 flex justify-center items-center bg-slate-200 p-4">
                                <img class="object-fit h-32 " src="./assets/img/brand/anker.png" alt="">
                            </div>
                            <div class="bname py-2 text-slate-800">
                                <span>Xiaomi</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Brand section end -->
@endsection