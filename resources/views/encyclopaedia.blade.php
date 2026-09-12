<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('assets/style/style.css') }}" type="text/css">
    <script src="{{ asset('assets/js/tailwind.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/img/first-element.png') }}" type="image/x-icon">
    <title>encyclopaedia</title>
</head>
<body>
   <div class="2xl:container mx-auto w-full flex flex-row">
        <div class="w-full lg:w-3/4 h-full relative pb-14">
            <img src="{{ asset('assets/img/main-bg.png') }}" class="absolute top-0 right-0 w-full h-full object-cover" alt="">
            <div class="relative py-5 lg:px-8 px-4">
                <div class="w-full lg:block flex justify-between items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 fill-(--primary-color) lg:hidden" id="hamburgerMenu" viewBox="0 0 448 512">
                        <path d="M0 88C0 74.7 10.7 64 24 64H424c13.3 0 24 10.7 24 24s-10.7 24-24 24H24C10.7 112 0 101.3 0 88zM0 248c0-13.3 10.7-24 24-24H424c13.3 0 24 10.7 24 24s-10.7 24-24 24H24c-13.3 0-24-10.7-24-24zM448 408c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24s10.7-24 24-24H424c13.3 0 24 10.7 24 24z"/>
                    </svg>
                    <div class="flex flex-row-reverse lg:flex-row items-center gap-4 lg:gap-8">
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
                </div>
                <div class="w-full flex justify-end items-center gap-2">
                    <a href="#" class="text-xs text-(--primary-color)">خانه</a>
                    <span class="text-xs text-(--primary-color)">/</span>
                    <a href="#" class="text-xs text-(--primary-color)">دانشنامه</a>
                    <span class="text-xs text-(--primary-color)">/</span>
                    <a href="#" class="text-xs text-(--primary-color)">مفاهیم</a>
                </div>
                <div class="w-full flex flex-row justify-between mt-10">
                    <div class="w-1/2">
                        <div class="w-11/12 rounded-full border border-(--primary-color)/20 relative flex justify-between py-2 px-3 items-center bg-(--secondary-color)">
                            <img src="{{ asset('assets/img/logo01.png') }}" class="w-8" alt="">
                            <input type="text" class="outline-none w-10/12 text-sm text-(--primary-color) in-fa pr-5" placeholder="چه چیزی را جست و جو می‌کنید؟" name="" id="">
                            <svg class="w-[25px] h-[25px] text-(--primary-color)" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="flex flex-col items-end gap-4">
                        <h2 class="text-end text-5xl font-bold text-(--primary-color)">دانشنامه</h2>
                        <span class="text-sm text-(--primary-color)">
                            هر مفهوم، گرهی‌ست در شبکه‌ای از مفاهیم.
                        </span>
                    </div>
                </div>
                <div class="w-full mt-10 flex flex-row">
                    <div class="w-1/3 px-5 border-l border-(--primary-color)/50">
                        <div>
                            <h3 class="text-end text-(--primary-color) text-3xl font-bold">سینتوم</h3>
                            <div class="mt-3 mb-5 text-end">
                                <span class="text-sm text-(--primary-color) tracking-[2px] pb-2 border-b border-(--primary-color)/30">Sinthome</span>
                            </div>
                            <p class="text-sm text-(--primary-color) text-end leading-[2]">
                                سینتوم به عنوان راهی برای مواجهه با لذت، ناممکن را در بافت نمادین جذب می‌کند و به آن شکل قابل تحمل می‌بخشد.
                            </p>
                        </div>
                        <div class="mt-10">
                            <div class="w-full flex flex-row items-center justify-end gap-3">
                                <span class="text-(--primary-color) text-sm">پیوند ها</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-(--primary-color) -rotate-45" viewBox="0 0 576 512">
                                    <path d="M0 256C0 167.6 71.6 96 160 96h72c13.3 0 24 10.7 24 24s-10.7 24-24 24H160C98.1 144 48 194.1 48 256s50.1 112 112 112h72c13.3 0 24 10.7 24 24s-10.7 24-24 24H160C71.6 416 0 344.4 0 256zm576 0c0 88.4-71.6 160-160 160H344c-13.3 0-24-10.7-24-24s10.7-24 24-24h72c61.9 0 112-50.1 112-112s-50.1-112-112-112H344c-13.3 0-24-10.7-24-24s10.7-24 24-24h72c88.4 0 160 71.6 160 160zM184 232H392c13.3 0 24 10.7 24 24s-10.7 24-24 24H184c-13.3 0-24-10.7-24-24s10.7-24 24-24z"/>
                                </svg>
                            </div>
                            <ul class="flex flex-col gap-3 mt-5">
                                <li>
                                    <a href="#" class="w-full flex flex-row justify-end items-center gap-3">
                                        <span class="text-sm text-(--primary-color)">ژونیسانس</span>
                                        <span class="block size-2 rounded-full border border-(--primary-color)/40"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="w-full flex flex-row justify-end items-center gap-3">
                                        <span class="text-sm text-(--primary-color)">جویس</span>
                                        <span class="block size-2 rounded-full border border-(--primary-color)/40"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="w-full flex flex-row justify-end items-center gap-3">
                                        <span class="text-sm text-(--primary-color)">گروه برومه‌ای</span>
                                        <span class="block size-2 rounded-full border border-(--primary-color)/40"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="w-full flex flex-row justify-end items-center gap-3">
                                        <span class="text-sm text-(--primary-color)">امر واقع</span>
                                        <span class="block size-2 rounded-full border border-(--primary-color)/40"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="w-full flex flex-row justify-end items-center gap-3">
                                        <span class="text-sm text-(--primary-color)">سمینار XXlll</span>
                                        <span class="block size-2 rounded-full border border-(--primary-color)/40"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-10">
                            <div class="flex flex-row justify-end items-center gap-4">
                                <span class="text-(--primary-color) text-sm">رد این مفهوم</span>
                                <div class="size-6 relative">
                                    <div class="block w-full absolute h-px bg-(--primary-color) right-0 top-1/2 -translate-y-1/2">
                                        <div class="size-full relative">
                                            <div class="size-1.5 border border-(--primary-color)/60 rounded-full absolute top-1/2 -translate-y-1/2 right-0 translate-x-full"></div>
                                        </div>
                                    </div>
                                    <div class="block w-px absolute h-1/2 bg-(--primary-color) right-1/3 top-1/2 -translate-y-1/2 translate-x-1/2">
                                        <div class="size-full relative">
                                            <div class="size-1.5 border border-(--primary-color)/60 rounded-full absolute top-0 -translate-y-full right-1/2 translate-x-1/2"></div>
                                            <div class="size-1.5 border border-(--primary-color)/60 rounded-full absolute bottom-0 translate-y-full right-1/2 translate-x-1/2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex flex-row-reverse">
                                <div class="w-10/12 flex flex-row-reverse gap-1.5 flex-wrap items-center mt-4">
                                    <span class="text-sm text-(--primary-color)">سمینار XXlll</span>
                                    <svg class="w-[18px] h-[18px] text-(--primary-color)" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                                    </svg>
                                    <span class="text-sm text-(--primary-color)">لاکان</span>
                                    <svg class="w-[18px] h-[18px] text-(--primary-color)" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                                    </svg>
                                    <span class="text-sm text-(--primary-color)">فروید</span>
                                    <svg class="w-[18px] h-[18px] text-(--primary-color)" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                                    </svg>
                                    <span class="text-sm text-(--primary-color)">سینتوم</span>
                                    <svg class="w-[18px] h-[18px] text-(--primary-color)" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                                    </svg>
                                    <span class="text-sm text-(--primary-color)">جویس</span>
                                </div>
                            </div>
                            <div class="mt-10">
                                <a href="#" class="flex flex-row-reverse items-center gap-3">
                                    <svg class="w-[21px] h-[21px] text-(--primary-color)" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                                    </svg>
                                    <span class="text-sm text-(--primary-color)">مشاهده همه پیوند ها</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-2/3">
                        <div class="w-full pr-8">
                            <ul class="w-full flex flex-row-reverse items-center border-b border-(--primary-color)/30">
                                <li class="pb-2 relative after:absolute after:content-[''] after:w-px after:h-1/2 after:right-0 after:top-1/2 after:-translate-y-1/2 after:bg-(--primary-color)/40">
                                    <a href="#" class="block px-5 text-sm text-center py-1 text-(--primary-color)">
                                        واژگان
                                    </a>
                                </li>
                                <li class="pb-2 relative after:absolute after:content-[''] after:w-px after:h-1/2 after:right-0 after:top-1/2 after:-translate-y-1/2 after:bg-(--primary-color)/40">
                                    <a href="#" class="block px-5 text-sm text-center py-1 text-(--primary-color)">
                                        آثار و متون
                                    </a>
                                </li>
                                <li class="pb-2 relative after:absolute after:content-[''] after:w-px after:h-1/2 after:right-0 after:top-1/2 after:-translate-y-1/2 after:bg-(--primary-color)/40">
                                    <a href="#" class="block px-5 text-sm text-center py-1 text-(--primary-color)">
                                        نام‌ها
                                    </a>
                                </li>
                                <li class="pb-2 border-b-2 border-(--primary-color)">
                                    <a href="#" class="block px-5 text-sm text-center py-1 text-(--primary-color) font-bold">
                                        مفاهیم
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="pr-8 mt-5 relative">
                            <img src="{{ asset('assets/img/encyclopaedia-page.png') }}" class="w-full" alt="">
                            <a href="#" class="absolute text-sm text-(--primary-color) font-bold top-[6%] right-[48%]">ژونیسانس</a>
                            <a href="#" class="absolute text-sm text-(--primary-color) font-bold top-[18%] right-[22%]">دال</a>
                            <a href="#" class="absolute text-sm text-(--primary-color) font-bold top-[43%] right-[9%]">نام پدر</a>
                            <a href="#" class="absolute text-sm text-(--primary-color) font-bold top-[68%] right-[16%]">میل</a>
                            <a href="#" class="absolute text-sm text-(--primary-color) font-bold top-[89%] right-[28%]">فانتزی</a>
                            <a href="#" class="absolute text-sm text-(--primary-color) font-bold top-[90%] right-[56%]">ایژه a</a>
                            <a href="#" class="absolute text-sm text-(--primary-color) font-bold top-[79%] right-[81%]">دیگری</a>
                            <a href="#" class="absolute text-sm text-(--primary-color) font-bold top-[49%] right-[87%]">امر نمادین</a>
                            <a href="#" class="absolute text-sm text-(--primary-color) font-bold top-[17%] right-[78%]">امر واقع</a>
                            <a href="#" class="absolute text-sm text-(--secondary-color) font-bold top-[39%] right-[79%]">لاکان</a>
                            
                            
                            <a href="#" class="absolute text-sm text-(--primary-color)/70 top-[15%] right-[32%]">جویس</a>
                            <a href="#" class="absolute text-sm text-(--primary-color) top-[15%] right-[63%]">سمینار Xlll</a>
                            <a href="#" class="absolute text-sm text-(--primary-color) top-[75%] bg-(--secondary-color) right-[60%]">گره برومه‌ای</a>
                            <a href="#" class="absolute text-(--primary-color) top-[65%] bg-(--secondary-color) font-bold right-[48%] rounded-full text-lg">سینتوم</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden lg:block lg:w-1/4 h-full relative py-10 px-3 lg:py-20 lg:px-8">
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
                    <a href="#" class="w-full flex flex-row justify-center lg:justify-end items-center px-5 py-2.5 gap-5 rounded-xl transition-all duration-300 hover:bg-white/10 hover:backdrop-blur-xs">
                        <span class="text-sm lg:text-xl text-(--secondary-color)">نوشتار‌ها</span>
                        <img src="{{ asset('assets/img/side-writing.png') }}" class="hidden lg:block w-1/3" alt="">
                    </a>
                    <a href="#" class="w-full flex flex-row justify-center lg:justify-end items-center px-5 py-2.5 gap-5 rounded-xl transition-all duration-300 hover:bg-white/10 hover:backdrop-blur-xs bg-white/10">
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

        <div class="w-full h-dvh fixed top-0 right-0 bg-black/50 lg:hidden transition-all duration-300 invisible opacity-0" id="sideMenu">
            <div class="w-2/3 h-full relative py-10 px-3 transition-all duration-300 translate-x-full">
                <img src="{{ asset('assets/img/side-bg.png') }}" class="absolute top-0 right-0 w-full h-full object-cover" alt="">
                <div class="relative">
                    <a href="#" class="w-full flex flex-row justify-center items-center gap-5">
                        <img src="{{ asset('assets/img/logo-light.png') }}" class="w-10 lg:w-20" alt="">
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
                        <a href="#" class="w-full flex flex-row items-center px-5 py-2.5 gap-5 rounded-xl transition-all duration-300 hover:bg-white/10 hover:backdrop-blur-xs">
                            <img src="{{ asset('assets/img/side-writing.png') }}" class="w-1/3" alt="">
                            <span class="text-sm lg:text-xl text-(--secondary-color)">نوشتار‌ها</span>
                        </a>
                        <a href="#" class="w-full flex flex-row items-center px-5 py-2.5 gap-5 rounded-xl transition-all duration-300 hover:bg-white/10 hover:backdrop-blur-xs bg-white/10">
                            <img src="{{ asset('assets/img/side-encyclopaedia.png') }}" class="w-1/3" alt="">
                            <span class="text-sm lg:text-xl text-(--secondary-color)">دانشنامه</span>
                        </a>
                        <a href="#" class="w-full flex flex-row items-center px-5 py-2.5 gap-5 rounded-xl transition-all duration-300 hover:bg-white/10 hover:backdrop-blur-xs">
                            <img src="{{ asset('assets/img/side-clinic.png') }}" class="w-1/3" alt="">
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
</body>
</html>