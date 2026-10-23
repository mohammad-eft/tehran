@extends('newDashbord')
@section('title', 'خانه')
@section('content')
    <div class="2xl:container mx-auto w-full h-full flex flex-row">
        <div class="w-full h-full relative pb-20">
            <img src="{{ asset('assets/img/main-bg.webp') }}" class="absolute top-0 right-0 w-full h-full object-cover" alt="">
            <div class="relative mt-10 flex flex-col gap-10">
                <div class="w-full flex flex-col justify-center items-center mt-2 gap-3">
                    <img src="{{ asset('assets/img/main-element.webp') }}" class="max-w-20 lg:max-w-40" alt="">
                    <div class="flex jstify-center items-center gap-3 lg:gap-6 relative">
                        <span class="text-xl lg:text-3xl text-(--primary-color)">روانکاوی</span>
                        <span class="text-xl lg:text-3xl text-(--primary-color)">|</span>
                        <span class="text-xl lg:text-3xl text-(--primary-color)">نشان گره</span>
                        <span class="absolute block w-10 h-0.5 bg-(--primary-color) right-1/2 translate-x-7/12 -bottom-5"></span>
                    </div>
                </div>
                <div class="w-full px-8 grid grid-cols-1 lg:grid-cols-3 gap-5 mt-10">
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
                <div class="w-full flex justify-center px-8">
                    <div class="lg:w-5/12 w-full p-4 lg:p-8 border-1 border-(--primary-color)/50 flex flex-row items-center gap-4 lg:block rounded-xl">
                        <div class="w-full flex flex-col items-center justify-center">
                            <div class="relative mb-3 pb-3 lg:pb-5 lg:mb-5">
                                <h2 class="text-center text-lg lg:text-2xl text-(--primary-color)">پنل کار بری</h2>
                                <span class="absolute block w-8 h-px bg-(--primary-color) right-1/2 right-0 translate-x-1/2 bottom-0"></span>
                            </div>
                            <p class="w-full text-sm lg:text-base leading-[2] text-center text-(--primary-color) mb-3 lg:mb-5">
                                گفت و کو وحل مشکلات با پزشک متخصص
                            </p>
                            <a href="" class="w-full lg:hidden flex flex-row gap-3 items-center justify-center group">
                                <svg class="w-[30px] h-[30px] text-(--primary-color) transition-all duration-300 group-hover:translate-x-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                                </svg>
                                <span class="text-sm text-(--primary-color)">ورود به بخش</span>
                            </a>
                        </div>
                        <a href="{{route('message.insert')}}" class="w-full hidden lg:flex flex-row justify-center items-center group">
                            <svg class="w-[46px] h-[46px] text-(--primary-color) transition-all duration-300 group-hover:translate-x-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                            </svg>
                            <span class="text-(--primary-color)">ورود به بخش</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @endsection