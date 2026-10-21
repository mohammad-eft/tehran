@extends('newDashbord')
@section('title', 'کلینیک')
@section('content')
<div class="w-full h-dvh relative flex justify-between overflow-hidden">
    <img class="w-full h-full object-cover" src="{{asset('assets/img/file_00000000fe6c81f5a5933e2e025dab7c.webp')}}" alt="">
    <div class="absolute top-30 p-5 w-full flex flex-col justify-between h-full">
        <div class="w-full flex justify-start">
            <div class="flex flex-col gap-5">
                <div class="flex flex-col gap-1">
                    <span class="text-3xl">کلینیک</span>
                    <span>Clinique</span>
                    <div class="w-9 h-[2px] bg-(--primary-color)"></div>
                </div>
                <span>.جایی برای شنیدن، نه برای پاسخ دادن</span>
            </div>
        </div>
        <div class="w-full flex justify-between mb-40">
            <div class="flex flex-col sm:gap-10 gap-5 w-1/2 border-r-2 border-(--primary-color) sm:px-5 px-1">
                <div class="flex flex-col sm:gap-4 gap-2">
                    <div class="flex items-center sm:gap-4 gap-2">
                        <span class="lg:text-3xl sm:text-xl text-sm">راه ارتباطی</span>
                        <div class="w-12 h-[2px] bg-(--primary-color)"></div>
                    </div>
                    <p class="text-(--primary-color) text-end sm:text-base text-xs">
                        برای دریافت اطلاعات بیشتر، هماهنگی و پرسش های خود میتوانید از طریق راه های زیر با ما در ارطباط باشید
                    </p>
                </div>
                <div class="flex flex-col sm:gap-4 gap-2 items-start w-full">
                    <div class="flex items-center sm:gap-10 gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="sm:size-8 size-5 fill-(--primary-color)">
                            <path d="M64 96c-17.7 0-32 14.3-32 32v39.9L227.6 311.3c16.9 12.4 39.9 12.4 56.8 0L480 167.9V128c0-17.7-14.3-32-32-32H64zM32 207.6V384c0 17.7 14.3 32 32 32H448c17.7 0 32-14.3 32-32V207.6L303.3 337.1c-28.2 20.6-66.5 20.6-94.6 0L32 207.6zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/>
                        </svg>
                        <input type="text" class="text-(--primary-color) sm:text-base text-xs w-full" placeholder="امیل">
                    </div>
                    <div class="flex items-center sm:gap-10 gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="sm:size-8 size-5 fill-(--primary-color)">
                            <path d="M375.8 275.2c-16.4-7-35.4-2.4-46.7 11.4l-33.2 40.6c-46-26.7-84.4-65.1-111.1-111.1L225.3 183c13.8-11.3 18.5-30.3 11.4-46.7l-48-112C181.2 6.7 162.3-3.1 143.6 .9l-112 24C13.2 28.8 0 45.1 0 64v0C0 300.7 183.5 494.5 416 510.9c4.5 .3 9.1 .6 13.7 .8c0 0 0 0 0 0c0 0 0 0 .1 0c6.1 .2 12.1 .4 18.3 .4l0 0c18.9 0 35.2-13.2 39.1-31.6l24-112c4-18.7-5.8-37.6-23.4-45.1l-112-48zM447.7 480C218.1 479.8 32 293.7 32 64v0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0c0-3.8 2.6-7 6.3-7.8l112-24c3.7-.8 7.5 1.2 9 4.7l48 112c1.4 3.3 .5 7.1-2.3 9.3l-40.6 33.2c-12.1 9.9-15.3 27.2-7.4 40.8c29.5 50.9 71.9 93.3 122.7 122.7c13.6 7.9 30.9 4.7 40.8-7.4l33.2-40.6c2.3-2.8 6.1-3.7 9.3-2.3l112 48c3.5 1.5 5.5 5.3 4.7 9l-24 112c-.8 3.7-4.1 6.3-7.8 6.3c-.1 0-.2 0-.3 0z"/>
                        </svg>
                        <input type="text" class="text-(--primary-color) sm:text-base text-xs w-full" placeholder="شماره تلفن">
                    </div>
                    <div class="flex items-center sm:gap-10 gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-5 -2 24 24" class="sm:size-8 size-5 fill-(--primary-color)">
                            <path d="M12 7A5 5 0 1 0 2 7c0 1.726 1.66 5.031 5 9.653 3.34-4.622 5-7.927 5-9.653zM7 20C2.333 13.91 0 9.577 0 7a7 7 0 1 1 14 0c0 2.577-2.333 6.91-7 13zm0-9a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"></path>
                        </svg>
                        <input type="text" class="text-(--primary-color) sm:text-base text-xs w-full" placeholder="آدرس">
                    </div>
                </div>
            </div>
            <div class="w-1/2"></div>
        </div>
    </div>
</div>
@endsection