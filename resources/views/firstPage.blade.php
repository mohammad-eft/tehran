<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/style/style.css') }}" type="text/css">
    <script src="{{ asset('assets/js/tailwind.js') }}"></script>
    <link rel="shortcut icon" href="{{ asset('assets/img/first-element.png') }}" type="image/x-icon">
    <title>Sinthomme</title>
</head>
<body>
    <div class="w-full h-dvh relative">
        <img src="{{ asset('assets/img/first-page-bg.png') }}" class="w-full h-full object-cover" alt="">
        <div class="absolute w-full h-full top-0 right-0 flex flex-col gap-3 lg:gap-5 justify-center items-center">
            <img src="{{ asset('assets/img/first-page-element.png') }}" class="w-1/2 lg:w-1/5" alt="">
            <a href="{{ route('home') }}" class="text-xl font-bold text-(--primary-text-color)">ورود</a>
        </div>
    </div>
</body>
</html>