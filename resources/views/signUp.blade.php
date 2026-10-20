@extends('newDashbord')
@section('title', 'ثبت نام')
@section('content')
<div class="w-full lg:h-full h-dvh flex justify-center">
    <img class="absolute -z-1 top-0 w-full h-full" src="{{ asset('assets/img/main-bg.webp') }}" alt="">
    <form action="{{ route('User.createSignup') }}" method="POST" id="signupForm"class="lg:w-4/10 sm:w-6/12 w-9/10  mx-auto flex flex-col gap-3 p-5 items-center rounded-2xl mt-20">
        @csrf
        <img src="{{ asset('assets/img/logo-light.webp') }}" class="w-20 lg:w-30" alt="">        
        @if(session('message'))
            <script>
                link = "{{ url('/') }}/";
                alert(@json(session('message')));
                location.assign(link + 'login')
            </script>
        @endif
        <h1 class="text-xl">ثبت نام</h1>
        <input class="text-end p-2 w-full border-b-1 border-brown-400" name="phoneNumber" type="text" placeholder="شماره تلفن"id="phoneNumber" value="{{ old('phoneNumber') }}">
        <div id="phoneNumberSection"></div>
        <input class="text-end p-2 w-full border-b-1 border-brown-400" name="password" type="text" placeholder="رمز عبور" id="password" value="{{ old('password') }}">
        <div id="passwordSection"></div>
        <div class="w-full flex gap-2 justify-between">
            <button type="button" onclick="sendCode(this)" class="bg-[#443514] w-3/10 text-center text-white flex items-center rounded-lg justify-center px-2">ارسال کد</button>
            <input class="w-6/10 p-2 text-end border-b-1 border-brown-400" name="code" type="text" placeholder="کد" id="code">
        </div>
        <button class="w-full bg-[#836a37] p-2 hover:bg-[#9e7b34] transition-all duration-300" onclick="signUp(event)">ثبت نام</button>
        <div class="w-full flex justify-center items-center">
            <a href="{{route('login')}}">ورود</a>
        </div>
    </form>
</div>

    <script>
        let phoneNumber = document.getElementById("phoneNumber");
        let password = document.getElementById("password");
        let code = document.getElementById("code");
        let signupForm = document.getElementById("signupForm");
        let link = "{{ url('/') }}/";

        function sendCode(el) {
            if (phoneNumber.value == "") {
                alert("پرکردن همه فیلد ها الزامیست");
            } else {
                $.ajax({
                    url: link + 'api/sendCode',
                    type: "POST",
                    dataType: "json",
                    data: { "phoneNumber": phoneNumber.value },
                    success: function (response) {
                        if (!response) {
                            alert("این کاربر قبلا ثبت نام کرده است")
                            location.assign(link + 'login')
                        }
                    },
                    error: function () {
                        alert("error")
                    }
                });
            }
        }

        function signUp(e) {
            e.preventDefault()
            if (phoneNumber.value == "" || password.value == "" || code.value == "") {
                alert("پرکردن همه ی فیلد ها الزامی است");
            } else {
                $.ajax({
                    url: link + "api/CheckActivationCode",
                    type: "POST",
                    dataType: "json",
                    data: { "phoneNumber": phoneNumber.value, "password": password.value, "code": code.value },
                    success: function (response) {
                        if (response) {
                            signupForm.submit();
                        }
                        if (!response) {
                            alert("کد وارد شده اشتباه است");
                        }
                    }
                });
            }
        }

        // function signUp() {
        //     let phoneNumber = document.getElementById("phoneNumber");
        //     let password = document.getElementById("password");
        //     $.ajax({
        //         url: "{{ route('User.createSignup') }}",
        //         type: "POST",
        //         dataType: "json",
        //         data: { "phoneNumber": phoneNumber.value, "password": password.value, "_token": "{{ csrf_token() }}" },
        //         success: function (datas) {
        //             if (datas == "home") {
        //                 window.location.href = "http://localhost/Laravel/Allprojects/public/";
        //             }
        //             if (datas == "no") {
        //                 alert("این یوزر قبلا ثبت نام کرده");
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
