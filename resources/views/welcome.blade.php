<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{ asset('assets/js/tailwind.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<style>
    :root{
        --primary-color:#79726D;
        --hover-primary-color:#79726D;
    }
</style>
<body >
        <div class="absolute top-0 opacity-0 invisible right-1/2 translate-x-1/2 w-3/4 lg:w-1/3 bg-white rounded-lg shadow-md transition-all duration-500 z-99999999"
         id="message">
        <div class="relative">
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="size-4 absolute top-1/2 -translate-y-1/2 right-3 cursor-pointer"
                 onclick="showMessage('close')" viewBox="0 0 384 512">
                <path d="M345 137c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-119 119L73 103c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l119 119L39 375c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l119-119L311 409c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-119-119L345 137z"/>
            </svg>

        </div>
    </div>
<header class="w-full h-dvh ">
      <div class="w-full h-20 fixed top-0 flex justify-center items-center z-5">
            <div
                class="w-11/12 h-full flex justify-between items-center sm:px-4 px-2 sm:py-5 py-1.5 rounded-xl">
                <div class="max-lg:w-1/3 lg:hidden flex justify-start items-center">
                    <div class="flex flex-col gap-[3px] items-center justify-center cursor-pointer">
                        <span class="w-6.5 h-[3px] bg-(--primary-blue) rounded-full"></span>
                        <span class="w-8 h-[3px] bg-(--primary-blue) rounded-full"></span>
                        <span class="w-6.5 h-[3px] bg-(--primary-blue) rounded-full"></span>
                    </div>
                </div>
                <div class="max-lg:w-1/3 flex gap-1.5 items-end justify-center">
                    <span
                        class="text-(--primariy-color) xl:text-[30px] lg:text-[23px] md:text-[21px] text-[13px] lg:leading-4 md:leading-4 leading-3 font-bold">آرام ذهن</span>
                    <img src="{{ asset('assets/img/logo.png') }}" alt="" class="xl:w-8 lg:w-6 sm:w-7 w-5">
                </div>
                <div class="max-lg:hidden lg:flex w-8/12 h-auto flex justify-center rounded-xl mx-auto">
                    <ul
                        class="flex gap-4 lg:gap-6 xl:gap-10 text-(--primariy-color) text-sm lg:text-base justify-end font-bold">
                        <li
                            class="text-white flex justify-center flex-col items-center cursor-pointer py-1 group transition-all duration-300 ">
                            <span>خانه</span>
                            <div
                                class="rounded-md group-hover:w-full w-[0px] bg-(--primariy-color) h-[2px] transition-all duration-300">
                            </div>
                        </li>
                        <li
                            class="hover:text-white flex justify-center flex-col items-center group cursor-pointer py-1 transition-all duration-300">
                            <span>نمونه کارها</span>
                            <div
                                class="rounded-md group-hover:w-full w-[0px] bg-(--primariy-color) h-[2px] transition-all duration-300 flex justify-center items-center">
                                <span></span>
                            </div>
                        </li>
                        <li
                            class="hover:text-white flex justify-center flex-col items-center group cursor-pointer py-1 transition-all duration-300">
                            <span>مشاوره</span>
                            <div
                                class="rounded-md group-hover:w-full w-[0px] bg-(--primariy-color) h-[2px] transition-all duration-300">
                            </div>
                        </li>
                        <li
                            class="hover:text-white flex justify-center flex-col items-center group cursor-pointer py-1 transition-all duration-300">
                            <span>گاه نوشت</span>
                            <div
                                class="rounded-md group-hover:w-full w-[0px] bg-(--primariy-color) h-[2px] transition-all duration-300">
                            </div>
                        </li>
                        <li
                            class="hover:text-white flex justify-center flex-col items-center group cursor-pointer py-1 transition-all duration-300">
                            <span>تماس باما</span>
                            <div
                                class="rounded-md group-hover:w-full w-[0px] bg-(--primariy-color) h-[2px] transition-all duration-300">
                            </div>

                        </li>
                        <li
                            class="hover:text-white flex justify-center flex-col items-center group cursor-pointer py-1 transition-all duration-300">
                            <span>درباره ما</span>
                            <div
                                class="rounded-md group-hover:w-full w-[0px] bg-(--primariy-color) h-[2px] transition-all duration-300">
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="max-lg:w-1/3 flex justify-end items-center">
                    <div class="inline-block text-(--primariy-color) px-2 md:px-4 py-2 md:py-3 rounded-3xl text-xs md:text-sm font-bold cursor-pointer transition-all duration-300 border border-(--primariy-color)">
                        <span>رزرو مشاوره</span>     
                    </div>
                </div>
                <div class="max-lg:w-1/3 flex justify-end items-center mr-3" onclick="openLoginBox()">
                    <div class="inline-block text-(--primariy-color) px-2 md:px-4 py-2 md:py-3 rounded-3xl text-xs md:text-sm font-bold cursor-pointer transition-all duration-300 border border-(--primariy-color)">
                        <span>ورود | ثبت نام</span>     
                    </div>
                </div>
            </div>
        </div>
    <img src="{{ asset('assets/img/8.png') }}" alt="" class="w-full h-full">
</header>


<div id="authenticationDiv" class="fixed w-full h-dvh bg-black/50 backdrop-blur-sm top-0 right-0 flex justify-center items-center transition-all duration-300 opacity-0 invisible z-10">
        <div class="w-3/4 bg-white rounded-sm p-3 transition-all duration-300 delay-100 scale-95">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 cursor-pointer"
                 onclick="closeLoginForm()" viewBox="0 0 384 512">
                <path d="M345 137c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-119 119L73 103c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l119 119L39 375c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l119-119L311 409c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-119-119L345 137z"/>
            </svg>
            <h3 class="text-center text-sm font-bold text-gray-800">ابتدا وارد شوید</h3>
            <form action="{{ route('user.check') }}" class="flex flex-col items-center my-6 gap-3 w-full"
                  method="post" id="loginForm">
                @csrf
                <input type="number"
                       class="placeholder-gray-400 focus:border-1 focus:border-(--primary-color) p-2 md:p-[9px] mb-1 rounded-[7px] border-1 border-[#DBDFE9] focus:outline-none w-full"
                       name="phoneNumber" id="phoneNumber" placeholder="شماره تلفن" required>
                <div class="w-full" id="login">
                    <div class="w-full flex flex-row items-center gap-3">
                        <input type="number"
                               class="w-8/12 p-2 placeholder-gray-400 focus:border-(--primary-color) md:p-[9px] rounded-[7px] border-1 border-[#DBDFE9] outline-none"
                               name="code" placeholder="کد" required id="code">
                        <button type="button"
                                class="w-4/12 text-xs lg:text-base h-full p-2 md:p-[9px] rounded-[7px] bg-(--primary-color) hover:bg-(--hover-primary-color) text-white cursor-pointer"
                                onclick="sendCode()" id="countDown">ارسال کد
                        </button>
                    </div>
                </div>
                <div class="w-full flex flex-row items-center justify-between" id="loginWay">
                    
                    <span class="text-(--primary-color) inline-block max-md:my-1 my-4 max-md:text-sm cursor-pointer"
                          onclick="loginWithPassKey(this)">ورود با رمز عبور</span>
                </div>
                <button onclick="check(event)"
                        class="focus:bg-(--primary-color) hover:bg-(--primary-color) transition-all duration-400 text-center w-full bg-(--primary-color) p-2 md:p-3 rounded-[10px] text-white cursor-pointer">
                    ورود
                </button>
                <div class="w-full text-center">
                            <span class="text-[#4B5675] mt-1 md:mt-5 max-md:text-sm">
                                هنوز عضو نشدی؟
                                <a href="{{ route('signup') }}" class="text-(--primary-color) mr-2">ثبت نام!</a>
                            </span>
                </div>
            </form>
        </div>
    </div>


    <script>
        let authenticationDiv = document.getElementById('authenticationDiv')
        let loginForm = document.getElementById('loginForm')
        let phoneNumber = document.getElementById('phoneNumber')
        let password = document.getElementById('password')
        let cartNumber = document.getElementById('cartNumber')
        let setOrders = document.querySelectorAll('.set')
        let newAddress = document.getElementById('newAddress')
        let setAddressSection = document.getElementById('setAddress')
        let address = document.getElementById('address')
        let sendWay = document.getElementById('sendWay')
        let sections = document.querySelectorAll('.section')
        let countDown = document.getElementById('countDown')
        let flag = "{{ Auth::check() }}";
        let userId = "{{ Auth::id() }}";
        let message = document.getElementById('message')
        let element = document.createElement('div')
        element.classList = "text-sm font-bold flex flex-row items-center justify-center py-3 gap-2 lg:gap-3"
        function openLoginBox(){
            authenticationDiv.classList.remove('invisible')
            authenticationDiv.classList.remove('opacity-0')
        }
            function sendCode() {

        let phoneNumber = document.getElementById('phoneNumber')
        if (phoneNumber.value == "") {
            showMessage('open')
            element.innerHTML = `
                        <span class="text-red-500">!</span>
                        <span>لطفا شماره تلفن را وارد کنید</span>
                    `
            message.children[0].appendChild(element)
            setTimeout(() => {
                showMessage('close')
            }, 2000)
        } else {
            counter()
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            })
            $.ajax({
                url: "{{ route('loginWithActivationCode') }}",
                type: "POST",
                dataType: "json",
                data: {
                    'phoneNumber': phoneNumber.value,
                },
                success: function (data) {
                    if (!data) {
                        showMessage('open')
                        element.innerHTML = `
                                <span>✅</span>
                                <span class="text-shadw-lg">کد ارسال شد</span>
                            `
                        message.children[0].appendChild(element)
                        setTimeout(() => {
                            showMessage('close')
                        }, 2000)
                    } else {
                        showMessage('open')
                        element.innerHTML = `
                                <span class="text-red-500">ابتدا ثبت نام کنید !</span>
                            `
                        message.children[0].appendChild(element)
                        setTimeout(() => {
                            showMessage('close')
                            // location.assign("{{ route('login') }}")
                        }, 2000)
                    }
                },
                error: function () {
                    showMessage('open')
                    element.innerHTML = `
                            <span>❌</span>
                            <span class="text-shadw-lg">خطا در دریافت اطلاعات!</span>
                        `
                    message.children[0].appendChild(element)
                    setTimeout(() => {
                        showMessage('close')
                    }, 2500)
                }
            })
        }
    }

    function counter() {
        let phoneNumber = document.getElementById('phoneNumber')
        countDown.classList.add('cursor-no-drop')
        countDown.classList.remove('cursor-pointer')
        countDown.classList.remove('hover:bg-[#d52b4a]')
        countDown.classList.add('hover:bg-[#d52b4a]/50')
        countDown.classList.remove('bg-(--primary-color)')
        countDown.classList.add('bg-(--primary-color)/50')
        countDown.disabled = true
        countDown.setAttribute('dir', 'ltr')
        let count = 120
        let result = setInterval(() => {
            let minute = Math.floor(count / 60)
            let seconds = count % 60
            count -= 1
            if (count < 0) {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                })
                $.ajax({
                    url: "{{ route('removeActivationCode') }}",
                    type: "POST",
                    dataType: "json",
                    data: {
                        'phoneNumber': phoneNumber.value
                    },
                    success: function (data) {
                        countDown.classList.remove('cursor-no-drop')
                        countDown.classList.add('bg-(--primary-color)')
                        countDown.classList.remove('bg-(--primary-color)/50')
                        countDown.classList.add('cursor-pointer')
                        countDown.removeAttribute('disabled')
                        countDown.removeAttribute('dir')
                        countDown.innerText = "ارسال مجدد"
                    },
                    error: function () {
                        showMessage('open')
                        element.innerHTML = `
                                <span>❌</span>
                                <span class="text-shadw-lg">خطا در دریافت اطلاعات!</span>
                            `
                        message.children[0].appendChild(element)
                        setTimeout(() => {
                            showMessage('close')
                        }, 2500)
                    }
                })
                clearInterval(result)
            }
            countDown.innerText = minute.toString().padStart(2, "0") + " : " + seconds.toString().padStart(2,
                "0");
        }, 1000)
    }

  

        function check(ev) {
        let addCustomer = document.getElementById('addCustomer')
        let password = document.getElementById('password')
        ev.preventDefault()
        if (password) {
            if (phoneNumber.value == "" || password.value == "") {
                showMessage('open')
                element.innerHTML = `
                            <span>لطفا همه فیلد ها را پر کنید</span>
                            <span class="text-red-500">!</span>
                        `
                message.children[0].appendChild(element)
                setTimeout(() => {
                    showMessage('close')
                }, 2000)
            } else {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                })
                $.ajax({
                    url: "{{ route('user.checkFromMenu') }}",
                    type: "POST",
                    dataType: "json",
                    data: {
                        'phoneNumber': phoneNumber.value,
                        'password': password.value,
                        
                    },
                    success: function (data) {
                        if (data == "userNotFound") {
                            showMessage('open')
                            element.innerHTML = `
                                    <span>ابتدا ثبت نام کنید</span>
                                `
                            message.children[0].appendChild(element)
                            setTimeout(() => {
                                showMessage('close')
                                location.assign("{{ route('signup') }}")
                            }, 2000)
                        }
                        if (data == "incorrectPassword") {

                            showMessage('open')
                            element.innerHTML = `
                                <span>رمز عبور نادرست است</span>
                                <span class="text-red-500">!</span>
                                `
                            message.children[0].appendChild(element)
                            setTimeout(() => {
                                showMessage('close')
                            }, 2000)
                        } if (data.id) {
                            showMessage('open')
                            element.innerHTML = `
                                <span> خوش اومدی ${data.name ?? 'کاربر'} ${data.family ?? 'رینگا'} عزیز</span>
                                `
                            if (data.orders.length > 0) {
                                orderLink.children[0].classList.remove('scale-0')
                            }
                            flag = true
                            addCustomer.innerHTML = ""
                            userId = data.id

                            let cartLength = 0
                            data.carts.forEach((cart) => {
                                cartLength += parseInt(cart.quantity)
                            })
                            orderBasket.parentElement.classList.remove('flex')
                            orderBasket.parentElement.classList.add('hidden')
                            if (cartLength != 0) {
                                orderBasket.parentElement.classList.remove('hidden')
                                orderBasket.parentElement.classList.add('flex')
                                orderBasket.children[2].innerText = cartLength
                            }
                            message.children[0].appendChild(element)
                            setTimeout(() => {
                                showMessage('close')
                                closeLoginForm()
                            }, 2000)
                        }
                    },
                    error: function () {
                        showMessage('open')
                        element.innerHTML = `
                        <span>خطا در دریافت اطلاعات</span>
                        <span class="text-red-500">!</span>
                        `
                        message.children[0].appendChild(element)
                        setTimeout(() => {
                            showMessage('close')
                        }, 2000)
                    }
                })
            }
        }
        if (!password) {
            if (phoneNumber.value == "" || code.value == "") {
                showMessage('open')
                element.innerHTML = `
                            <span>لطفا همه فیلد ها را پر کنید</span>
                            <span class="text-red-500">!</span>
                        `
                message.children[0].appendChild(element)
                setTimeout(() => {
                    showMessage('close')
                }, 2000)
            } else {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                })
                $.ajax({
                    url: "{{ route('checkActivationCode') }}",
                    type: "POST",
                    dataType: "json",
                    data: {
                        'phoneNumber': phoneNumber.value,
                        'code': code.value,
                       
                    },
                    success: function (data) {
                        if (!data.checkCode) {
                            showMessage('open')
                            element.innerHTML = `
                                    <span>کد وارد شده نامعتبر !</span>
                                `
                            message.children[0].appendChild(element)
                            setTimeout(() => {
                                showMessage('close')
                            }, 2000)
                        }
                        if (!data.validate) {
                            showMessage('open')
                            element.innerHTML = `
                                    <span>ابتدا ثبت نام کنید</span>
                                `
                            message.children[0].appendChild(element)
                            setTimeout(() => {
                                showMessage('close')
                                location.assign("{{ route('signup') }}")
                            }, 2000)
                        } if(data.validate && data.checkCode) {
                            showMessage('open')
                            element.innerHTML = `
                                    <span> خوش اومدی ${data.validate.name ?? 'کاربر'} ${data.validate.family ?? 'رینگا'} عزیز</span>
                                `
                            if (data.orders.length > 0) {
                                orderLink.children[0].classList.remove('scale-0')
                            }
                            flag = true
                            addCustomer.innerHTML = ""
                            userId = data.validate.id
                            message.children[0].appendChild(element)

                            let cartLength = 0
                            data.validate.carts.forEach((cart) => {
                                cartLength += parseInt(cart.quantity)
                            })
                            orderBasket.children[1].classList.remove('fill-(--primary-color)')
                            orderBasket.children[0].classList.add('hidden')
                            orderBasket.children[1].classList.add('fill-(--secondary-text-color)')
                            if (cartLength != 0) {

                                orderBasket.children[1].classList.add('fill-(--primary-color)')
                                orderBasket.children[0].classList.remove('hidden')
                                orderBasket.children[1].classList.remove('fill-(--secondary-text-color)')
                                orderBasket.children[0].innerHTML = cartLength
                            }
                            setTimeout(() => {
                                showMessage('close')
                                closeLoginForm()
                            }, 2000)
                        }
                    },
                    error: function () {
                        showMessage('open')
                        element.innerHTML = `
                                <span>خطا در دریافت اطلاعات</span>
                                <span class="text-red-500">!</span>
                                `
                        message.children[0].appendChild(element)
                        setTimeout(() => {
                            showMessage('close')
                        }, 2000)
                    }
                })
            }
        }

    }

    function closeLoginForm() {
        setOrders = document.querySelectorAll('.changeButton')
        authenticationDiv.classList.add('invisible')
        authenticationDiv.classList.add('opacity-0')
        authenticationDiv.children[0].classList.add('scale-95')
        setOrders.forEach((button) => {
            button.innerHTML = "<span class='text-2xl text-white'>+</span>"
        })
    }

    
    function loginWithPassKey(el) {
        login.innerHTML = `
                                    <input type="password"
                                        class="placeholder-gray-400 focus:border-1 focus:border-(--primary-color) p-2 md:p-[9px] mb-1 rounded-[7px] border-1 border-[#DBDFE9] focus:outline-none w-full"
                                        name="password" id="password" placeholder="کلمه عبور" required>
                                `
        console.log(el.parentElement)
        el.parentElement.children[0].remove()
        let span = document.createElement('span')
        span.classList = "text-(--primary-color) inline-block max-md:my-1 my-4 max-md:text-sm cursor-pointer"
        span.setAttribute('onclick', 'loginWithActivationCode(this)')
        span.innerText = "ورود با کد فعال ساز"
        loginWay.appendChild(span)
    }

        function showMessage(state) {
        if (state == 'open') {
            message.classList.remove('top-0')
            message.classList.remove('opacity-0')
            message.classList.remove('invisible')
            message.classList.add('top-1/10')
        }
        if (state == 'close') {
            message.classList.remove('top-1/10')
            message.classList.add('top-0')
            message.classList.add('opacity-0')
            message.classList.add('invisible')
        }
    }

    function loginWithActivationCode(el) {
        login.innerHTML = `
                        <div class="w-full flex flex-row items-center gap-3">
                            <input type="number"
                                class="w-8/12 p-2 placeholder-gray-400 focus:border-(--primary-color) md:p-[9px] rounded-[7px] border-1 border-[#DBDFE9] outline-none"
                                name="code" placeholder="کد" required id="code">
                            <button type="button"
                                class="w-4/12 text-xs lg:text-base h-full p-2 md:p-[9px] rounded-[7px] bg-(--primary-color) text-white cursor-pointer"
                                onclick="sendCode()" id="countDown">ارسال کد </button>
                        </div>
                    `
        el.parentElement.children[0].remove()
        let span = document.createElement('span')
        span.classList = "text-(--primary-color) inline-block max-md:my-1 my-4 max-md:text-sm cursor-pointer"
        span.setAttribute('onclick', 'loginWithPassKey(this)')
        span.innerText = "ورود با رمز عبور"
        loginWay.appendChild(span)
    }

       function closeLoginBox() {
        authenticationDiv.classList.add('invisible')
        authenticationDiv.classList.add('opacity-0')
    }

    </script>

</body>
</html>