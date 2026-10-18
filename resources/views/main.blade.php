@extends('newDashbord')
@section('title', 'خانه')
@section('content')
    <div class="2xl:container mx-auto w-full flex flex-row">
        <div class="w-full h-full relative pb-20">
            <img src="{{ asset('assets/img/main-bg.webp') }}" class="absolute top-0 right-0 w-full h-full object-cover" alt="">
            <div class="relative mt-10">
                <div class="w-full flex flex-col justify-center items-center mt-3 gap-3">
                    <img src="{{ asset('assets/img/main-element.webp') }}" class="max-w-20 lg:max-w-40" alt="">
                    <div class="flex jstify-center items-center gap-3 lg:gap-6 relative">
                        <span class="text-xl lg:text-3xl text-(--primary-color)">روانکاوی</span>
                        <span class="text-xl lg:text-3xl text-(--primary-color)">|</span>
                        <span class="text-xl lg:text-3xl text-(--primary-color)">نشان گره</span>
                        <span class="absolute block w-10 h-0.5 bg-(--primary-color) right-1/2 translate-x-7/12 -bottom-5"></span>
                    </div>
                </div>
                <div class="w-full px-8 grid grid-cols-1 lg:grid-cols-3 gap-5 mt-16">
                    <div class="w-full p-4 lg:p-8 border-1 border-(--primary-color)/50 flex flex-row items-center gap-4 lg:block rounded-xl">
                        <div>
                            <div class="relative mb-3 pb-3 lg:pb-5 lg:mb-5">
                                <h2 class="lg:text-center text-lg lg:text-2xl text-(--primary-color)">کلینیک</h2>
                                <span class="absolute block w-8 h-px bg-(--primary-color) lg:right-1/2 right-0 lg:translate-x-1/2 bottom-0"></span>
                            </div>
                            <p class="w-full text-sm lg:text-base leading-[2] lg:text-center text-(--primary-color) mb-3 lg:mb-5">
                                درباره عمل تحلیلی، تجربه ها و پرسش های کلینیکی
                            </p>
                            <a href="#" class="w-2/3 lg:hidden flex flex-row gap-3 items-center group">
                                <svg class="w-[30px] h-[30px] text-(--primary-color) transition-all duration-300 group-hover:translate-x-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                                </svg>
                                <span class="text-sm text-(--primary-color)">ورود به بخش</span>
                            </a>
                        </div>
                        <img src="{{ asset('assets/img/main-clinic.webp') }}" class="w-1/3 lg:w-3/4 mx-auto mb-3 lg:mb-5" alt="">
                        <a href="#" class="w-full hidden lg:flex flex-row justify-between items-center group">
                            <svg class="w-[46px] h-[46px] text-(--primary-color) transition-all duration-300 group-hover:translate-x-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                            </svg>
                            <span class="text-(--primary-color)">ورود به بخش</span>
                        </a>
                    </div>
                    <div class="w-full p-4 lg:p-8 border-1 border-(--primary-color)/50 flex flex-row items-center gap-4 lg:block rounded-xl">
                        <div>
                            <div class="relative mb-3 pb-3 lg:pb-5 lg:mb-5">
                                <h2 class="lg:text-center text-lg lg:text-2xl text-(--primary-color)">دانشنامه</h2>
                                <span class="absolute block w-8 h-px bg-(--primary-color) lg:right-1/2 right-0 lg:translate-x-1/2 bottom-0"></span>
                            </div>
                            <p class="w-full text-sm lg:text-base leading-[2] lg:text-center text-(--primary-color) mb-3 lg:mb-5">
                                مفاهیم، اصطلاحات و ارجاعات روانکاوی لکانی
                            </p>
                            <a href="{{ route('encyclopaedia') }}" class="w-2/3 lg:hidden flex flex-row gap-3 items-center group">
                                <svg class="w-[30px] h-[30px] text-(--primary-color) transition-all duration-300 group-hover:translate-x-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                                </svg>
                                <span class="text-sm text-(--primary-color)">ورود به بخش</span>
                            </a>
                        </div>
                        <img src="{{ asset('assets/img/main-encyclopaedia.webp') }}" class="w-1/3 lg:w-3/4 mx-auto mb-3 lg:mb-5" alt="">
                        <a href="{{ route('encyclopaedia') }}" class="w-full hidden lg:flex flex-row justify-between items-center group">
                            <svg class="w-[46px] h-[46px] text-(--primary-color) transition-all duration-300 group-hover:translate-x-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                            </svg>
                            <span class="text-(--primary-color)">ورود به بخش</span>
                        </a>
                    </div>
                    <div class="w-full p-4 lg:p-8 border-1 border-(--primary-color)/50 flex flex-row items-center gap-4 lg:block rounded-xl">
                        <div>
                            <div class="relative mb-3 pb-3 lg:pb-5 lg:mb-5">
                                <h2 class="lg:text-center text-lg lg:text-2xl text-(--primary-color)">نوشتار ها</h2>
                                <span class="absolute block w-8 h-px bg-(--primary-color) lg:right-1/2 right-0 lg:translate-x-1/2 bottom-0"></span>
                            </div>
                            <p class="w-full text-sm lg:text-base leading-[2] lg:text-center text-(--primary-color) mb-3 lg:mb-5">
                                مقالات، ترجمه‌ها، و متون تحلیلی در باب روانکاوی لکانی
                            </p>
                            <a href="#" class="w-2/3 lg:hidden flex flex-row gap-3 items-center group">
                                <svg class="w-[30px] h-[30px] text-(--primary-color) transition-all duration-300 group-hover:translate-x-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                                </svg>
                                <span class="text-sm text-(--primary-color)">ورود به بخش</span>
                            </a>
                        </div>
                        <img src="{{ asset('assets/img/main-writing.png') }}" class="w-1/3 lg:w-3/4 mx-auto mb-3 lg:mb-5" alt="">
                        <a href="#" class="w-full hidden lg:flex flex-row justify-between items-center group">
                            <svg class="w-[46px] h-[46px] text-(--primary-color) transition-all duration-300 group-hover:translate-x-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                            </svg>
                            <span class="text-(--primary-color)">ورود به بخش</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full h-dvh fixed top-0 right-0 bg-black/50 lg:hidden transition-all duration-300 invisible opacity-0" id="sideMenu">
            <div class="w-2/3 h-full relative py-10 px-3 transition-all duration-300 translate-x-full">
                <img src="{{ asset('assets/img/side-bg.webp') }}" class="absolute top-0 right-0 w-full h-full object-cover" alt="">
                <div class="relative">
                    <a href="#" class="w-full flex flex-row justify-center items-center gap-5">
                        <img src="{{ asset('assets/img/logo-light.webp') }}" class="w-10 lg:w-20" alt="">
                        <h3 class="flex justify-end items-center">
                            <span class="text-(--thirst-color) tracking-[4px] font-light text-xl">me</span>
                            <span class="text-(--secondary-color) tracking-[4px] font-light text-xl">sinthtom</span>
                        </h3>
                    </a>
                    <div class="w-full flex justify-center items-center gap-3 lg:pr-10">
                        <span class="lg:text-lg text-(--secondary-color)">روانکاوی</span>
                        <span class="lg:text-lg text-(--secondary-color)">|</span>
                        <span class="lg:text-lg text-(--secondary-color)">نشان گره</span>
                    </div>
                    <div class="my-8 w-full h-px bg-(--secondary-color)/20"></div>
                    <div class="w-full flex flex-col gap-2">
                        <a href="#" class="w-full flex flex-row items-center px-5 py-2.5 gap-5 rounded-xl transition-all duration-300 hover:bg-white/10 hover:backdrop-blur-xs bg-white/10">
                            <img src="{{ asset('assets/img/side-writing.webp') }}" class="w-1/3" alt="">
                            <span class="text-sm lg:text-xl text-(--secondary-color)">نوشتار‌ها</span>
                        </a>
                        <a href="{{ route('encyclopaedia') }}" class="w-full flex flex-row items-center px-5 py-2.5 gap-5 rounded-xl transition-all duration-300 hover:bg-white/10 hover:backdrop-blur-xs">
                            <img src="{{ asset('assets/img/side-encyclopaedia.webp') }}" class="w-1/3" alt="">
                            <span class="text-sm lg:text-xl text-(--secondary-color)">دانشنامه</span>
                        </a>
                        <a href="#" class="w-full flex flex-row items-center px-5 py-2.5 gap-5 rounded-xl transition-all duration-300 hover:bg-white/10 hover:backdrop-blur-xs">
                            <img src="{{ asset('assets/img/side-clinic.webp') }}" class="w-1/3" alt="">
                            <span class="text-sm lg:text-xl text-(--secondary-color)">کلینیک</span>
                        </a>
                    </div>
                    <div class="mt-20 w-full lg:w-2/3 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 fill-white/20" viewBox="0 0 448 512">
                            <path d="M448 296c0 66.3-53.7 120-120 120h-8c-17.7 0-32-14.3-32-32s14.3-32 32-32h8c30.9 0 56-25.1 56-56v-8H320c-35.3 0-64-28.7-64-64V160c0-35.3 28.7-64 64-64h64c35.3 0 64 28.7 64 64v32 32 72zm-256 0c0 66.3-53.7 120-120 120H64c-17.7 0-32-14.3-32-32s14.3-32 32-32h8c30.9 0 56-25.1 56-56v-8H64c-35.3 0-64-28.7-64-64V160c0-35.3 28.7-64 64-64h64c35.3 0 64 28.7 64 64v32 32 72z"/>
                        </svg>
                        <p class="text-sm text-(--secondary-color) leading-[2]">
                            سبتوم گوهی است
                            که با یکتابی از لذت‌مندی‌های
                            همه را باهم گره می‌دارد:
                            بی‌آن‌که یکی در آن حل شود.
                            <br><br>
                            -ژان لاکان : سمینار XXlll
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('assets/js/home.js') }}"></script>
    @endsection