<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('assets/style/style.css') }}" type="text/css">
    <script src="{{ asset('assets/js/tailwind.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/img/first-element.png') }}" type="image/x-icon">
    <title>Jouissance</title>
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
                <div class="w-full flex justify-end items-center gap-2 mt-4 lg:mt-0">
                    <a href="{{ route('encyclopaedia') }}" class="flex flex-row justify-end items-center gap-3">
                        <span class="text-sm text-(--primary-color)">بازگشت به دانشنامه</span>
                        <svg class="w-[28px] h-[28px] text-(--primary-color)" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                        </svg>
                    </a>
                </div>
                <div class="w-full mt-5 lg:mt-10 flex flex-col gap-7">
                    <h1 class="text-xl lg:text-5xl text-center font-bold text-(--primary-color)">ژوئیسانس</h1>
                    <div class="relative pb-4 text-center">
                        <span class="text-gray-600">Jouissance</span>
                        <span class="absolute block w-10 h-px bg-(--primary-color)/30 bottom-0 right-1/2 translate-x-1/2"></span>
                    </div>
                </div>
                <div class="w-full flex flex-col-reverse lg:flex-row-reverse items-center gap-8 border-b border-(--primary-color)/50 pb-5 lg:pb-10 mt-5 lg:mt-0">
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('assets/img/man.png') }}" class="w-full" alt="">
                    </div>
                    <div class="w-full lg:w-1/2 flex flex-col items-center lg:items-end gap-4 lg:gap-8">
                        <h2 class="text-xl lg:text-3xl font-bold text-(--primary-color)">تعریف</h2>
                        <p class="text-gray-700 text-justify leading-[2]">
                            ژوئیسانس مفهومی است که لاکان برا توصیف لذتی به کار میبرد که فرا تر از اصل لذت فرویدی قرار دارد؛ لذتی که در قلمرو زبان قانون و نمادین قابل تنظیم نیست. این لذت نه موجبات لذت ، بلکه به عنوان تجربه ای از شبه لذت در لحظه عبور از مرز نمادین فهم میشود: تجربه ای که اغلب با درد فقدان و آشفتگی ناممکن است؛ گره خورده است.
                        </p>
                    </div>
                </div>
                <div class="w-full flex flex-col lg:items-end gap-4 lg:gap-8 mt-5 lg:mt-10">
                    <h2 class="text-xl lg:text-3xl font-bold text-(--primary-color)">
                        پیوند ها
                    </h2>
                    <div class="w-full relative">
                        <img src="{{ asset('assets/img/links.png') }}" class="w-full lg:w-3/4 mx-auto" alt="">
                        <a href="#" class="absolute text-(--secondary-color) top-[39%] right-[40%] lg:top-[40%] lg:right-[44%] font-bold text-sm lg:text-xl p-3 lg:p-5">ژوئیسانس</a>
                        <a href="#" class="absolute text-(--primary-color) top-[6%] right-[18%] lg:top-[7%] lg:right-[27%] text-sm lg:text-xl p-3 lg:p-5">امر واقع</a>
                        <a href="#" class="absolute text-(--primary-color) top-[40%] right-[1%] lg:top-[41%] lg:right-[14%] text-sm lg:text-xl p-3 lg:p-5">نام پدر</a>
                        <a href="#" class="absolute text-(--primary-color) top-[78%] right-[23%] lg:top-[76%] lg:right-[29%] text-xs lg:text-xl p-1 lg:p-3">گره برومه‌ای</a>
                        <a href="#" class="absolute text-(--primary-color) top-[73%] right-[64%] lg:top-[75%] lg:right-[61.5%] text-sm lg:text-xl p-3 lg:p-5">فانتزی</a>
                        <a href="#" class="absolute text-(--primary-color) top-[41%] right-[84%] lg:top-[42%] lg:right-[77%] text-sm lg:text-xl p-3 lg:p-5">ابژه a</a>
                        <a href="#" class="absolute text-(--primary-color) top-[7%] right-[67%] lg:top-[9%] lg:right-[64%] text-sm lg:text-xl p-3 lg:p-5">سینتوم</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden lg:block lg:w-1/4 h-full relative py-10 px-3 lg:py-20 lg:px-8 lg:pb-[458px] 2xl:pb-[575px]">
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