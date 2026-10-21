<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/style/style.css') }}" type="text/css">
    <script src="{{ asset('assets/js/tailwind.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <title>Document</title>
</head>
<body>
    <div class="w-full flex">
        <div class="hidden lg:block lg:w-1/4 py-5 h-dvh px-3 lg:px-8 sticky top-0 left-0">
            <img src="{{ asset('assets/img/side-bg.webp') }}" class="absolute top-0 right-0 w-full h-full object-cover" alt="">
            <div class="relative">
                <div class="fixed top-0 lg:flex flex-col lg:w-1/5 hidden">
                    <a href="#" class="w-full flex flex-row justify-center lg:justify-between items-center gap-2">
                        <img src="{{ asset('assets/img/logo-light.webp') }}" class="w-10 lg:w-20" alt="">
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
                        <a href="{{route('home')}}" class="w-full flex flex-row justify-center lg:justify-end items-center px-5 py-2.5 gap-5 rounded-xl transition-all duration-300 hover:bg-white/10 hover:backdrop-blur-xs @if(Route::is('home')) bg-white/10 @endif">
                            <span class="text-sm lg:text-xl text-(--secondary-color)">نوشتار‌ها</span>
                            <img src="{{ asset('assets/img/side-writing.webp') }}" class="hidden lg:block w-1/3" alt="">
                        </a>
                        <a href="{{ route('encyclopaedia') }}" class="w-full flex flex-row justify-center lg:justify-end items-center px-5 py-2.5 gap-5 rounded-xl transition-all duration-300 hover:bg-white/10 hover:backdrop-blur-xs @if(Route::is('encyclopaedia')) bg-white/10 @endif">
                            <span class="text-sm lg:text-xl text-(--secondary-color)">دانشنامه</span>
                            <img src="{{ asset('assets/img/side-encyclopaedia.webp') }}" class="hidden lg:block w-1/3" alt="">
                        </a>
                        <a href="{{route('clinic')}}" class="w-full flex flex-row justify-center lg:justify-end items-center px-5 py-2.5 gap-5 rounded-xl transition-all duration-300 hover:bg-white/10 hover:backdrop-blur-xs @if(Route::is('clinic')) bg-white/10 @endif">
                            <span class="text-sm lg:text-xl text-(--secondary-color)">کلینیک</span>
                            <img src="{{ asset('assets/img/side-clinic.webp') }}" class="hidden lg:block w-1/3" alt="">
                        </a>
                        <a href="{{route('message.insert')}}" class="w-full flex flex-row justify-center lg:justify-end items-center px-5 py-2.5 gap-5 rounded-xl transition-all duration-300 hover:bg-white/10 hover:backdrop-blur-xs @if(Route::is('message.insert')) bg-white/10 @endif">
                            <span class="text-sm lg:text-xl text-(--secondary-color)">پنل کاربری</span>
                            <img src="{{ asset('assets/img/side-clinic.webp') }}" class="hidden lg:block w-1/3" alt="">
                        </a>
                        @can('Can' , ['admin'])
                        <a href="{{route('User.list')}}" class="w-full flex flex-row justify-center lg:justify-end items-center px-5 py-2.5 gap-5 rounded-xl transition-all duration-300 hover:bg-white/10 hover:backdrop-blur-xs @if(Route::is('User.list')) bg-white/10 @endif">
                            <span class="text-sm lg:text-xl text-(--secondary-color)">کاربران</span>
                            <img src="" class="hidden lg:block w-1/3" alt="">
                        </a>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:w-3/4 w-full relative">
            <div class="absolute top-0 w-full flex justify-start p-5 z-3">
                @include('header')
            </div>
        @yield('content')
        </div>
    </div>
</body>
</html>