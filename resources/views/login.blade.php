<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{ asset('assets/js/tailwind.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
</head>

<body class="bg-gray-500">
    <form action="{{ route('User.LoginUser') }}" method="POST" id="logInForm"
        class="w-3/10 mx-auto flex flex-col gap-5 border-green-400 border-2 rounded-3xl p-6 my-10">
        @csrf
        <h1 class="text-white text-xl">login</h1>
        <input class="border-red-400 border-2 p-2 rounded-full" name="phoneNumber" type="text" placeholder="phoneNumber"
            id="phoneNumber">
        <div id="phoneNumberSection"></div>

        <input class="border-red-400 border-2 p-2 rounded-full hidden" name="password" type="text"
            placeholder="password" id="password">
        <div id="passwordSection"></div>

        <div class="w-full flex gap-2 justify-between" id="codeBox">
            <input class="w-8/10 border-red-400 border-2 p-2 rounded-full" name="code" type="text" placeholder="code"
                id="code">
            <button type="button" onclick="sendCode(this)"
                class="bg-[orange] w-2/10 text-center text-white flex items-center rounded-lg justify-center">ارسال
                کد</button>
        </div>

        <div class="flex gap-5 justify-between">
            <div class="cursor-pointer hover:text-blue-500" onclick="loginWithPass(this)">ورود با پسورد</div>
            <div><a href="" class="hover:text-blue-500">فراموش کردن رمز عبور</a></div>
        </div>

        <button type="button" class="border-blue-400 border-2 p-2" onclick="loginCode(event)"
            id="submitBtn">send</button>
    </form>

    <script>
        let link = "{{ url('/') }}/";
        let phoneNumber = document.getElementById("phoneNumber");
        let password = document.getElementById("password");
        let codeBox = document.getElementById("codeBox");
        let code = document.getElementById("code");
        let logInForm = document.getElementById("logInForm");

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
                            alert(message.alert);
                        }
                        if (persent.type) {
                            logInForm.submit();
                        }
                    }
                });
            }
        }

        function sendCode(el) {
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

</body>

</html>