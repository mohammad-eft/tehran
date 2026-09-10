<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/style/style.css') }}" type="text/css">
    <script src="{{ asset('assets/js/tailwind.js') }}"></script>
    <link rel="shortcut icon" href="{{ asset('assets/img/first-element.png') }}" type="image/x-icon">
    <title>Sinthomme</title>
</head>
<body>
    <div class="2xl:container mx-auto w-full flex flex-row">
        <div class="w-2/3 lg:w-3/4 h-full relative pb-20">
            <img src="{{ asset('assets/img/main-bg.png') }}" class="absolute top-0 right-0 w-full h-full object-cover" alt="">
            <div class="relative">
                <div class="w-full py-5 lg:px-8 px-4 flex items-center gap-4 lg:gap-8">
                    <div class="size-10 rounded-full bg-(--primary-color) flex justify-center items-center">
                        <a href="#" class="text-(--secondary-color)">س</a>
                    </div>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 fill-(--primary-color)" viewBox="0 0 448 512">
                            <path d="M208 16c0-8.8 7.2-16 16-16s16 7.2 16 16V32.8c80.9 8 144 76.2 144 159.2v29.1c0 43.7 17.4 85.6 48.3 116.6l2.8 2.8c8.3 8.3 13 19.6 13 31.3c0 24.5-19.8 44.3-44.3 44.3H44.3C19.8 416 0 396.2 0 371.7c0-11.7 4.7-23 13-31.3l2.8-2.8C46.6 306.7 64 264.8 64 221.1V192c0-83 63.1-151.2 144-159.2V16zm16 48C153.3 64 96 121.3 96 192v29.1c0 52.2-20.7 102.3-57.7 139.2L35.6 363c-2.3 2.3-3.6 5.4-3.6 8.7c0 6.8 5.5 12.3 12.3 12.3H403.7c6.8 0 12.3-5.5 12.3-12.3c0-3.3-1.3-6.4-3.6-8.7l-2.8-2.8c-36.9-36.9-57.7-87-57.7-139.2V192c0-70.7-57.3-128-128-128zM193.8 458.7c4.4 12.4 16.3 21.3 30.2 21.3s25.8-8.9 30.2-21.3c2.9-8.3 12.1-12.7 20.4-9.8s12.7 12.1 9.8 20.4C275.6 494.2 251.9 512 224 512s-51.6-17.8-60.4-42.7c-2.9-8.3 1.4-17.5 9.8-20.4s17.5 1.4 20.4 9.8z"/>
                        </svg>
                    </a>
                    <a href="#">
                        <svg class="w-7 h-7 text-(--primary-color)" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                        </svg>
                    </a>
                </div>
                <div class="w-full flex flex-col justify-center items-center mt-3 gap-3">
                    <img src="{{ asset('assets/img/main-element.png') }}" class="max-w-20 lg:max-w-40" alt="">
                    <div class="flex jstify-center items-center gap-3 lg:gap-6 relative">
                        <span class="text-xl lg:text-3xl text-(--primary-color)">روانکاوی</span>
                        <span class="text-xl lg:text-3xl text-(--primary-color)">|</span>
                        <span class="text-xl lg:text-3xl text-(--primary-color)">نشان گره</span>
                        <span class="absolute block w-10 h-0.5 bg-(--primary-color) right-1/2 translate-x-7/12 -bottom-5"></span>
                    </div>
                </div>
                <div class="w-full px-8 grid grid-cols-1 lg:grid-cols-3 gap-5 mt-16">
                    <div class=" w-full p-4 lg:p-8 border-1 border-(--primary-color)/50 rounded-xl">
                        <div class="relative mb-3 pb-3 lg:pb-5 lg:mb-5">
                            <h2 class="text-center text-lg lg:text-2xl text-(--primary-color)">کلینیک</h2>
                            <span class="absolute block w-8 h-px bg-(--primary-color) right-1/2 translate-x-1/2 bottom-0"></span>
                        </div>
                        <p class="w-full text-sm lg:text-base leading-[2] text-center text-(--primary-color) mb-3 lg:mb-5">
                            درباره عمل تحلیلی، تجربه ها و پرسش های کلینیکی
                        </p>
                        <img src="{{ asset('assets/img/main-clinic.png') }}" class="w-3/4 mx-auto mb-3 lg:mb-5" alt="">
                        <a href="#" class="w-full flex flex-row justify-between items-center group">
                            <svg class="w-[46px] h-[46px] text-(--primary-color) transition-all duration-300 group-hover:translate-x-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                            </svg>
                            <span class="text-(--primary-color)">ورود به بخش</span>
                        </a>
                    </div>
                    <div class="w-full p-4 lg:p-8 border-1 border-(--primary-color)/50 rounded-xl">
                        <div class="relative mb-3 pb-3 lg:pb-5 lg:mb-5">
                            <h2 class="text-center text-lg lg:text-2xl text-(--primary-color)">دانشنامه</h2>
                            <span class="absolute block w-8 h-px bg-(--primary-color) right-1/2 translate-x-1/2 bottom-0"></span>
                        </div>
                        <p class="w-full text-sm lg:text-base leading-[2] text-center text-(--primary-color) mb-3 lg:mb-5">
                            مفاهیم، اصطلاحات و ارجاعات روانکاوی لکانی
                        </p>
                        <img src="{{ asset('assets/img/main-encyclopaedia.png') }}" class="w-3/4 mx-auto mb-3 lg:mb-5" alt="">
                        <a href="#" class="w-full flex flex-row justify-between items-center group">
                            <svg class="w-[46px] h-[46px] text-(--primary-color) transition-all duration-300 group-hover:translate-x-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                            </svg>
                            <span class="text-(--primary-color)">ورود به بخش</span>
                        </a>
                    </div>
                    <div class="w-full p-4 lg:p-8 border-1 border-(--primary-color)/50 rounded-xl">
                        <div class="relative mb-3 pb-3 lg:pb-5 lg:mb-5">
                            <h2 class="text-center text-lg lg:text-2xl text-(--primary-color)">نوشتار ها</h2>
                            <span class="absolute block w-8 h-px bg-(--primary-color) right-1/2 translate-x-1/2 bottom-0"></span>
                        </div>
                        <p class="w-full text-sm lg:text-base leading-[2] text-center text-(--primary-color) mb-3 lg:mb-5">
                            مقالات، ترجمه‌ها، و متون تحلیلی در باب روانکاوی لکانی
                        </p>
                        <img src="{{ asset('assets/img/main-writing.png') }}" class="w-3/4 mx-auto mb-3 lg:mb-5" alt="">
                        <a href="#" class="w-full flex flex-row justify-between items-center group">
                            <svg class="w-[46px] h-[46px] text-(--primary-color) transition-all duration-300 group-hover:translate-x-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                            </svg>
                            <span class="text-(--primary-color)">ورود به بخش</span>
                        </a>
                    </div>

                   
                </div>
            </div>
        </div>
        <div class="w-1/3 lg:w-1/4 h-full relative py-10 px-3 lg:py-20 lg:px-8">
            <img src="{{ asset('assets/img/side-bg.png') }}" class="absolute top-0 right-0 w-full h-full object-cover" alt="">
            <div class="relative">
                <a href="#" class="w-full flex flex-row justify-center lg:justify-between items-center gap-2">
                    <img src="{{ asset('assets/img/logo-light.png') }}" class="w-10 lg:w-20" alt="">
                    <h3 class="lg:flex justify-end items-center hidden">
                        <span class="text-(--thirst-color) tracking-[4px] font-light text-3xl">me</span>
                        <span class="text-(--secondary-color) tracking-[4px] font-light text-3xl">sinthtom</span>
                    </h3>
                </a>
                <div class="w-full hidden lg:flex justify-center items-center gap-3 lg:pr-10">
                    <span class="lg:text-lg text-(--secondary-color)">روانکاوی</span>
                    <span class="lg:text-lg text-(--secondary-color)">|</span>
                    <span class="lg:text-lg text-(--secondary-color)">نشان گره</span>
                </div>
                <div class="my-8 w-full h-px bg-(--secondary-color)/20"></div>
                <div class="w-full flex flex-col gap-2">
                    <a href="#" class="w-full flex flex-row justify-center lg:justify-end items-center px-5 py-2.5 gap-5 rounded-xl transition-all duration-300 hover:bg-white/10 hover:backdrop-blur-xs bg-white/10">
                        <span class="text-sm lg:text-xl text-(--secondary-color)">نوشتار‌ها</span>
                        <img src="{{ asset('assets/img/side-writing.png') }}" class="hidden lg:block w-1/3" alt="">
                    </a>
                    <a href="#" class="w-full flex flex-row justify-center lg:justify-end items-center px-5 py-2.5 gap-5 rounded-xl transition-all duration-300 hover:bg-white/10 hover:backdrop-blur-xs">
                        <span class="text-sm lg:text-xl text-(--secondary-color)">دانشنامه</span>
                        <img src="{{ asset('assets/img/side-encyclopaedia.png') }}" class="hidden lg:block w-1/3" alt="">
                    </a>
                    <a href="#" class="w-full flex flex-row justify-center lg:justify-end items-center px-5 py-2.5 gap-5 rounded-xl transition-all duration-300 hover:bg-white/10 hover:backdrop-blur-xs">
                        <span class="text-sm lg:text-xl text-(--secondary-color)">کلینیک</span>
                        <img src="{{ asset('assets/img/side-clinic.png') }}" class="hidden lg:block w-1/3" alt="">
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
</body>
</html>