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
    <form action="{{ route('User.createSignup') }}" method="POST" id="signupForm"
        class="w-3/10 mx-auto flex flex-col gap-5 border-green-400 border-2 rounded-3xl p-6 my-10">
        @csrf
        @if(session('message'))
            <script>
                link = "{{ url('/') }}/";
                alert(@json(session('message')));
                location.assign(link + 'login')
            </script>
        @endif
        <h1 class="text-white text-xl">signUp</h1>
        <input class="border-red-400 border-2 p-2 rounded-full" name="phoneNumber" type="text" placeholder="phoneNumber"
            id="phoneNumber" value="{{ old("phoneNumber") }}">
        <div id="phoneNumberSection"></div>
        <!-- @error("phoneNumber")
            <div class="text-red-500">{{ $message }}</div>
        @enderror -->
        <input class="border-red-400 border-2 p-2 rounded-full" name="password" type="text" placeholder="password"
            id="password" value="{{ old("password") }}">
        <div id="passwordSection"></div>

        <div class="w-full flex gap-2 justify-between">
            <input class="w-8/10 border-red-400 border-2 p-2 rounded-full" name="code" type="text" placeholder="code"
                id="code">
            <button type="button" onclick="sendCode(this)"
                class="bg-[orange] w-2/10 text-center text-white flex items-center rounded-lg justify-center">ارسال
                کد</button>
        </div>
        <!-- @error("password")
            <div class="text-red-400">{{ $message }}</div>
        @enderror -->
        <button class="border-blue-400 border-2 p-2" onclick="signUp(event)">send</button>
    </form>

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
</body>

</html>