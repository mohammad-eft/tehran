@extends('newDashbord')
@section('title', 'ورود')
@section('content')
<div class="w-full lg:h-full h-dvh flex justify-center">
    <div class="absolute w-50rounded-xl text-center bg-red-500 top-2 transition-all duration-500" id="message"></div>
    <img class="absolute -z-1 top-0 w-full h-full" src="{{ asset('assets/img/main-bg.webp') }}" alt="">
    <form action="{{ route('User.LoginUser') }}" method="POST" id="logInForm" class="lg:w-4/10 sm:w-6/12 w-9/10  mx-auto flex flex-col gap-3 p-5 items-center rounded-2xl mt-60">
        @csrf
        <h1 class=" text-xl text-center">ورود</h1>
        <input class="text-end p-2 w-full border-b-1 border-brown-400" name="phoneNumber" type="text" placeholder="شماره تلفن" id="phoneNumber">
        <div id="phoneNumberSection"></div>
        <input class="p-2 text-end w-full hidden border-b-1 border-brown-400" name="password" type="text" placeholder="رمز عبور" id="password">
        <div id="passwordSection"></div>
    
        <div class="w-full flex gap-2 justify-between" id="codeBox">
            <button type="button" onclick="sendCode(this)"
            class="w-4/12 text-xs lg:text-base h-full p-2 md:p-[9px] rounded-[7px] bg-[#443514] text-white cursor-pointer" id="countDown">ارسال کد</button>
            <input class="w-6/10 p-2 text-end border-b-1 border-brown-400" name="code" type="text" placeholder="کد" id="code">
        </div>
    
        <div class="flex gap-5 justify-between">
            <div class="cursor-pointer hover:text-[#836a37]" onclick="loginWithPass(this)">ورود با پسورد</div>
            <div><a href="" class="hover:text-[#836a37]">فراموش کردن رمز عبور</a></div>
        </div>
        
        <button type="button" class="w-full bg-[#836a37] p-2 hover:bg-[#9e7b34] transition-all duration-300" onclick="loginCode(event)" id="submitBtn">ورود</button>
        <div class="w-full flex justify-center items-center">
            <a href="{{route('signup')}}">ثبت نام؟</a>
        </div>
    </form>    
</div>
    <script>
        let link = "{{ url('/') }}/";
        let phoneNumber = document.getElementById("phoneNumber");
        let password = document.getElementById("password");
        let codeBox = document.getElementById("codeBox");
        let code = document.getElementById("code");
        let logInForm = document.getElementById("logInForm");
        let message=document.getElementById('message');
        let submitBtn = document.getElementById("submitBtn");
        
        
        function loginWithPass(el) {
            submitBtn.setAttribute("onclick", "loginPass(event)");
            el.setAttribute("onclick", "loginWithCode(this)");
            el.innerText = "ورود با کد";
            codeBox.classList.remove("block");
            codeBox.classList.add("hidden");
            password.classList.remove("hidden");
            password.classList.add("block");
        }

        function loginWithCode(el) {
            el.setAttribute("onclick", "loginWithPass(this)");
            el.innerText = "ورود با پسورد";
            submitBtn.setAttribute("onclick", "loginCode(event)");
            password.classList.remove("block");
            password.classList.add("hidden");
            codeBox.classList.remove("hidden");
            codeBox.classList.add("block");
        }

        function loginCode(e) {
            e.preventDefault();
            if (phoneNumber.value == "" || code.value == "") {
                alert("پرکردن همه فیلد ها الزامیست");
            } else {
                $.ajax({
                    url: link + "api/loginCode",
                    type: "POST",
                    dataType: "json",
                    data: { "phoneNumber": phoneNumber.value, "code": code.value },
                    success: function (persent) {
                        if (persent) {
                            logInForm.submit();
                        }
                        if (!persent) {
                            alert("کد وارد شده یکسان نیست")
                        }
                    }
                });
            }
        }

        function loginPass(e) {
            e.preventDefault();
            if (phoneNumber.value == "" || password.value == "") {
                alert("همه فیلد ها الزامیست");
            } else {
                $.ajax({
                    url: link + "api/loginPass",
                    type: "POST",
                    dataType: "json",
                    data: { "phoneNumber": phoneNumber.value, "password": password.value },
                    success: function (persent) {
                        console.log(persent)
                        if (!persent.type) {
                            message.classList.remove('top-2')
                            message.classList.add('top-10')
                            message.classList.add('py-3')
                            message.innerText='این کاربر ثبت نام نکرده'
                        }
                        if (persent.type) {
                            logInForm.submit();
                        }
                    }
                });
            }
        }

        function sendCode(el) {
            counter()
            if (phoneNumber.value == "") {
                alert("شماره موبایل الزامیست")
            } else {
                $.ajax({
                    url: link + "api/sendLoginCode",
                    type: "POST",
                    dataType: "json",
                    data: { "phoneNumber": phoneNumber.value },
                    success: function (response) {
                        if (!response) {
                            alert("این کاربر موجود نمیباشد لطفا ثبت نام کنید")
                        }
                    }
                });
            }
        }

        function counter() {
            let phoneNumber = document.getElementById('phoneNumber')
            countDown.classList.add('cursor-no-drop')
            countDown.classList.remove('cursor-pointer')
            countDown.classList.remove('bg-[#443514]')
            countDown.classList.add('bg-[#443514]/50')
            countDown.setAttribute('disabled', true)
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
                        success: function(data) {
                            console.log(data)
                            countDown.classList.remove('cursor-no-drop')
                            countDown.classList.add('bg-(--primary-color)')
                            countDown.classList.remove('bg-(--primary-color)/50')
                            countDown.classList.add('cursor-pointer')
                            countDown.classList.add('hover:bg-(--hover-primary-color)')
                            countDown.classList.remove('hover:bg-(--hover-primary-color)/50')
                            countDown.removeAttribute('disabled')
                            countDown.removeAttribute('dir')
                            countDown.innerText = "ارسال مجدد"
                        },
                        error: function() {
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


        // function login() {
        //     let phoneNumber = document.getElementById("phoneNumber");
        //     let password = document.getElementById("password");
        //     $.ajax({
        //         url:
        //         type: "POST",
        //         dataType: "json",
        //         data: { "phoneNumber": phoneNumber.value, "password": password.value, "_token": "{{ csrf_token() }}" },
        //         success: function (datas) {
        //             if (datas == "home") {
        //                 window.location.href = "http://localhost/Laravel/Allprojects/public/";
        //             }
        //             if (datas.status == "no") {
        //                 if (datas.type == "pass") {
        //                     alert(datas.messege)
        //                 }
        //                 if (datas.type == "noUser") {
        //                     alert(datas.message)
        //                 }
        //             }
        //         },
        //         error: function (xhr) {
        //             let phone = document.getElementById("phoneNumberSection");
        //             let pass = document.getElementById("passwordSection");
        //             if (xhr.responseJSON.errors.phoneNumber) {
        //                 phone.innerHTML = "";
        //                 let element = document.createElement("p");
        //                 element.classList.add("text-[red]")
        //                 element.textContent = xhr.responseJSON.errors.phoneNumber[0]
        //                 phone.appendChild(element);
        //             }
        //             if (xhr.responseJSON.errors.password) {
        //                 pass.innerHTML = "";
        //                 let element = document.createElement("p");
        //                 element.classList.add("text-[red]")
        //                 element.textContent = xhr.responseJSON.errors.password[0]
        //                 pass.appendChild(element);
        //             }
        //         }
        //     });
        // }

    </script>

@endsection