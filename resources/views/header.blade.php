        <div class="w-full flex justify-between items-center">
            @if(!Auth::check())
                    <a href="{{route('login')}}" class=" bg-(--primary-color) flex p-3  rounded-3xl items-center justify-between lg:gap-3 group cursor-pointer">
                        <span class="text-white text-nowrap text-xs  transtion-all duration-300">ورود / ثبت نام </span>
                    </a>
                @endif
                @if(Auth::check())

                    <div class=" profile-menu-container">
                        <div class="flex items-center gap-2 border-r border-(--primary-color) pr-2 cursor-pointer" id="profileButton">
                            <svg class="w-10 h-10 rounded-full shadow-md border-2 border-(--primary-color) fill-(--primary-color)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="mdi-account-circle" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M12,19.2C9.5,19.2 7.29,17.92 6,16C6.03,14 10,12.9 12,12.9C14,12.9 17.97,14 18,16C16.71,17.92 14.5,19.2 12,19.2M12,5A3,3 0 0,1 15,8A3,3 0 0,1 12,11A3,3 0 0,1 9,8A3,3 0 0,1 12,5M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12C22,6.47 17.5,2 12,2Z"></path>
                            </svg>
                            <div class="hidden lg:flex text-right gap-1">
                            @if(Auth::user()->name && Auth::user()->family)
                            <span>
                            {{Auth::user()->name}} 
                            </span>
                            <span>
                                {{Auth::user()->family}}
                            </span>
                            @else
                            کاربرعادی
                            @endif
                            </div>
                            <svg class="size-5 text-(--primary-color) hidden lg:block transition-transform duration-200" id="chevronIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>

                        <div id="dropdownMenu" class="hidden absolute mt-2 w-56 bg-[#E4CAA9] rounded-lg shadow-lg border border-gray-200 py-1 z-50 
                                        left-0 right-auto 
                                        sm:left-auto sm:right-0">

                            <a href="" class="flex items-center gap-3 px-4 py-2 text-gray-700 text-sm hover:bg-blue-50 transition-colors duration-150 cursor-pointer">
                                <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                <span>خانه</span>
                            </a>
                            <div class="border-t border-gray-100 my-1"></div>

                            <a href="" class="flex items-center gap-3 px-4 py-2 text-gray-700 text-sm hover:bg-blue-50 transition-colors duration-150">
                                <svg class="size-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                                    <line x1="8" y1="21" x2="16" y2="21"></line>
                                    <line x1="12" y1="17" x2="12" y2="21"></line>
                                </svg>
                                <span>داشبورد</span>
                            </a>
                            
                            <div class="border-t border-gray-100 my-1"></div>
                            
                            <a href="" class="flex items-center gap-3 px-4 py-2 text-gray-700 text-sm hover:bg-blue-50 transition-colors duration-150">
                                <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <span>پروفایل کاربری</span>
                            </a>
                            <div class="border-t border-gray-100 my-1"></div>

                            <a href="{{ route('User.logOut') }}" class="flex items-center gap-3 px-4 py-2 text-gray-700 text-sm hover:bg-blue-50 transition-colors duration-150">
                                <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                <span>خروج از حساب کاربری</span>
                            </a>
                        </div>
                    </div>

                    
                    <!-- </div> -->
                @endif
            <div class="w-full flex justify-end items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 fill-(--primary-color) lg:hidden cursor-pointer" id="hamburgerMenu" viewBox="0 0 448 512" onclick="mobilemenu('open')">
                    <path d="M0 88C0 74.7 10.7 64 24 64H424c13.3 0 24 10.7 24 24s-10.7 24-24 24H24C10.7 112 0 101.3 0 88zM0 248c0-13.3 10.7-24 24-24H424c13.3 0 24 10.7 24 24s-10.7 24-24 24H24c-13.3 0-24-10.7-24-24zM448 408c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24s10.7-24 24-24H424c13.3 0 24 10.7 24 24z"/>
                </svg>
                <div class="lg:flex w-full justify-end gap-5 items-center hidden">
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
                        <a href="{{route('home')}}" class="w-full flex flex-row items-center px-5 py-2.5 gap-5 rounded-xl transition-all duration-300 hover:bg-white/10 hover:backdrop-blur-xs @if(Route::is('home')) bg-white/10 @endif">
                            <img src="{{ asset('assets/img/side-writing.webp') }}" class="w-1/3" alt="">
                            <span class="text-sm lg:text-xl text-(--secondary-color)">نوشتار‌ها</span>
                        </a>
                        <a href="{{ route('encyclopaedia') }}" class="w-full flex flex-row items-center px-5 py-2.5 gap-5 rounded-xl transition-all duration-300 hover:bg-white/10 hover:backdrop-blur-xs @if(Route::is('encyclopaedia')) bg-white/10 @endif">
                            <img src="{{ asset('assets/img/side-encyclopaedia.webp') }}" class="w-1/3" alt="">
                            <span class="text-sm lg:text-xl text-(--secondary-color)">دانشنامه</span>
                        </a>
                        <a href="{{route('clinic')}}" class="w-full flex flex-row items-center px-5 py-2.5 gap-5 rounded-xl transition-all duration-300 hover:bg-white/10 hover:backdrop-blur-xs @if(Route::is('clinic')) bg-white/10 @endif">
                            <img src="{{ asset('assets/img/side-clinic.webp') }}" class="w-1/3" alt="">
                            <span class="text-sm lg:text-xl text-(--secondary-color)">کلینیک</span>
                        </a>
                        <a href="{{route('message.insert')}}" class="w-full flex flex-row items-center px-5 py-2.5 gap-5 rounded-xl transition-all duration-300 hover:bg-white/10 hover:backdrop-blur-xs @if(Route::is('message.insert')) bg-white/10 @endif">
                            <img src="{{ asset('assets/img/side-clinic.webp') }}" class="w-1/3" alt="">
                            <span class="text-sm lg:text-xl text-(--secondary-color)">داشبورد</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
                
    <script src="{{ asset('assets/js/home.js') }}"></script>
        <script>
        const profileButton = document.getElementById('profileButton');
        const dropdownMenu = document.getElementById('dropdownMenu');
        const chevronIcon = document.getElementById('chevronIcon');

        // باز و بسته کردن منو
        profileButton.addEventListener('click', (e) => {
            e.stopPropagation();
            dropdownMenu.classList.toggle('hidden');

            // تنظیم موقعیت منو بر اساس فضای موجود
            if (!dropdownMenu.classList.contains('hidden')) {
                const rect = profileButton.getBoundingClientRect();
                const menuRect = dropdownMenu.getBoundingClientRect();
                const viewportWidth = window.innerWidth;

                // اگر منو از راست صفحه خارج می‌شود
                if (rect.right + menuRect.width > viewportWidth) {
                    dropdownMenu.style.left = 'auto';
                    dropdownMenu.style.right = '0';
                } else {
                    dropdownMenu.style.left = '0';
                    dropdownMenu.style.right = 'auto';
                }

                // چرخش آیکون chevron
                if (chevronIcon) {
                    // chevronIcon.style.transform = 'rotate(180deg)';
                }
            } else {
                if (chevronIcon) {
                    chevronIcon.style.transform = 'rotate(0deg)';
                }
            }
        });

        // بستن منو با کلیک بیرون
        document.addEventListener('click', (e) => {
            if (!profileButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
                dropdownMenu.classList.add('hidden');
                if (chevronIcon) {
                    chevronIcon.style.transform = 'rotate(0deg)';
                }
            }
        });



        </script>