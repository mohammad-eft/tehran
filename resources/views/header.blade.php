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
                            
                            <div class="border-t border-gray-100 my-1"></div>
                            
                            <a href="{{ route('User.edit', Auth::id()) }}" class="flex items-center gap-3 px-4 py-2 text-gray-700 text-sm hover:bg-blue-50 transition-colors duration-150">
                                <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <span> تکمیل پروفایل</span>
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
                            <span class="text-sm lg:text-xl text-(--secondary-color)">پنل کار بری</span>
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