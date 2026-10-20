@extends('newDashbord')
@section('title', 'ویرایش کاربر')
@section('content')
<div class="2xl:container mx-auto w-full lg:h-full h-dvh flex flex-row">
    <div class="w-full h-full relative flex justify-center pb-20">
        <img src="{{ asset('assets/img/main-bg.webp') }}" class="absolute top-0 right-0 w-full h-full object-cover" alt="">
        <div class="w-10/12 mx-auto absolute z-2 mt-20" dir="rtl">
            <div class="pb-5 w-full flex justify-center items-center">
                <h1 class="text-xl text-center font-bold lg:text-start">کاربر {{ $user->name }} {{ $user->family }}</h1>
            </div>
            <div class="pt-3 mt-4 lg:mt-8">

                <form action="{{ route('User.update') }}" method="post"
                    class="shadow__profaill__list_products rounded-lg pb-4 " enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <div class="border-b border-white">
                        <h2 class="text-xl mr-5 text-center lg:text-right py-4">جزییات پروفایل</h2>
                    </div>
                    <div class="p-5 px-6">
                        <div class="w-full">
                            <div class="tsble">
                                <div class="flex flex-col lg:flex-row">
                                    <div class="w-full lg:w-2/12 text-sm py-4">نام کامل</div>
                                    <div class="w-full lg:w-10/12 text-sm py-4 flex flex-col lg:flex-row gap-4">
                                        <input
                                            class="w-full lg:w-1/2 p-4 rounded-lg focus:border-none focus:outline-none focus:bg-[#F1F1F4] bg-[#F9F9F9] "
                                            type="text" value="{{ $user->name }}" name="name" placeholder="نام"
                                            >
                                        <input
                                            class="w-full lg:w-1/2 p-4 rounded-lg focus:border-none focus:outline-none focus:bg-[#F1F1F4] bg-[#F9F9F9] "
                                            type="text" value="{{ $user->family }}" name="family"
                                            placeholder="نام خانوادگی" >
                                    </div>
                                </div>
                                <div class="flex flex-col lg:flex-row">
                                    <div class="w-full lg:w-2/12 text-sm py-4">شماره تلفن</div>
                                    <div class="w-full lg:w-10/12 text-sm">
                                        <input
                                            class="w-full lg:w-1/2 p-4 rounded-lg focus:border-none focus:outline-none focus:bg-[#F1F1F4] bg-[#F9F9F9]"
                                            type="number" name="phoneNumber" value="{{ $user->phoneNumber }}"
                                            placeholder="شماره تلفن" required>
                                    </div>
                                </div>
                                
                                <div class="flex flex-col lg:flex-row">
                                    <div class="w-full lg:w-2/12 text-sm py-4">رمز عبور</div>
                                    <div class="w-full lg:w-10/12 text-sm py-4">
                                        <input
                                            class="w-full p-4 rounded-lg focus:border-none focus:outline-none focus:bg-[#F1F1F4] bg-[#F9F9F9]"
                                            type="password" name="password" placeholder="رمز عبور">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-10  flex justify-end pl-6 gap-2">
                        <button class="px-4 py-2 bg-[#F1F1F4] rounded-[7px] cursor-pointer" type="reset">لغو</button>
                        <button class="px-4 py-2 bg-(--primary-color) rounded-[7px] text-white cursor-pointer" type="submit">ذخیره
                            تغییرات</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection