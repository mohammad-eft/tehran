@extends('newDashbord')
@section('title', 'خانه')
@section('content')
    <div class="w-full h-full relative">
        <img class="w-full lg:h-full h-dvh object-cover absolute -z-1" src="{{ asset('assets/img/main-bg.webp') }}" alt="">
        <div class="w-full lg:h-full h-dvh flex flex-col gap-10 overflow-hidden overflow-y-auto pt-20 pb-35">
            @foreach($message as $mess)
            <div class="w-full flex gap-2 @if($mess->isAdmin==1) justify-start @else justify-end @endif px-5">
                <div class="size-15 bg-(--primary-color) rounded-full @if($mess->isAdmin==1) flex @else hidden @endif items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-6 fill-[#F4E1D1]">
                        <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                    </svg>
                </div>
                <div class="sm:w-130 w-60 border-2 border-(--primary-color) px-3 py-4 rounded-3xl flex flex-col gap-2  @if($mess->isAdmin==1) bg-[#F4E1D1] @else bg-[#F9EFE4] @endif shadow-xl">
                    <div class="w-full flex flex-col justify-end px-7 sm:text-lg text-xs gap-3">
                        <p class="w-full text-end sm:text-base text-xs border-b-1 border-(--primary-color)">{{$mess->message}}</p>
                        <span class="text-end">@if($mess->isAdmin==1) {{Auth::user()->name}} {{Auth::user()->family}} @else @if(isset($user)) {{$user->name}} @if($user->name) {{$user->name}}{{$user->family}} @else کاربرعادی @endif @else کاربرعادی @endif @endif</span>
                    </div>
                </div>
                <div class="size-15 bg-[#F4E1D1] rounded-full @if($mess->isAdmin==1) hidden @else flex @endif items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-6 fill-(--primary-color)">
                        <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                    </svg>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <form action="{{route('message.store')}}" class="lg:w-3/4 w-full flex justify-center right-0 fixed bottom-0 p-5">
                @csrf
                <input type="hidden" name="id" @if(isset($user)) value="{{$user->id}}" @else value="{{Auth::id()}}" @endif>
                <div class="w-full border-2 border-(--primary-color) px-3 py-3 rounded-4xl flex items-center gap-2 bg-[#E4CAA9] shadow-xl relative">
                    <div class="w-full flex justify-between items-center bg-[#FBEEDC] rounded-full border-2 border-(--primary-color) px-3">
                        <div  class="flex items-center justify-center sm:gap-3 gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" class="sm:size-6 size-4 fill-(--primary-color)">
                                <path d="M20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12M22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12M10,9.5C10,10.3 9.3,11 8.5,11C7.7,11 7,10.3 7,9.5C7,8.7 7.7,8 8.5,8C9.3,8 10,8.7 10,9.5M17,9.5C17,10.3 16.3,11 15.5,11C14.7,11 14,10.3 14,9.5C14,8.7 14.7,8 15.5,8C16.3,8 17,8.7 17,9.5M12,17.23C10.25,17.23 8.71,16.5 7.81,15.42L9.23,14C9.68,14.72 10.75,15.23 12,15.23C13.25,15.23 14.32,14.72 14.77,14L16.19,15.42C15.29,16.5 13.75,17.23 12,17.23Z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="sm:size-6 size-4 fill-(--primary-color)">
                                <path d="M380.7 67.3c-29.1-29.1-76.3-29.1-105.4 0l-192 192c-46.8 46.8-46.8 122.6 0 169.4s122.6 46.8 169.4 0l152-152c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6l-152 152c-59.3 59.3-155.4 59.3-214.6 0S1.4 296 60.7 236.7l192-192c41.6-41.6 109-41.6 150.6 0s41.6 109 0 150.6L219.5 379.1c-28.2 28.2-74.6 25.6-99.6-5.5c-21.3-26.6-19.2-65 4.9-89.1L276.7 132.7c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6L147.5 307.1c-12.6 12.6-13.7 32.6-2.6 46.5c13 16.2 37.2 17.6 51.9 2.9L380.7 172.7c29.1-29.1 29.1-76.3 0-105.4z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="sm:size-6 size-4 fill-(--primary-color)">
                                <path d="M64 64C46.3 64 32 78.3 32 96V329.4l67.7-67.7c15.6-15.6 40.9-15.6 56.6 0L224 329.4 355.7 197.7c15.6-15.6 40.9-15.6 56.6 0L480 265.4V96c0-17.7-14.3-32-32-32H64zM32 374.6V416c0 17.7 14.3 32 32 32h41.4l96-96-67.7-67.7c-3.1-3.1-8.2-3.1-11.3 0L32 374.6zM389.7 220.3c-3.1-3.1-8.2-3.1-11.3 0L150.6 448H448c17.7 0 32-14.3 32-32V310.6l-90.3-90.3zM0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zm160 48a16 16 0 1 0 -32 0 16 16 0 1 0 32 0zm-64 0a48 48 0 1 1 96 0 48 48 0 1 1 -96 0z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="sm:size-6 size-4 fill-(--primary-color)">
                                <path d="M256 96V256c0 35.3-28.7 64-64 64s-64-28.7-64-64V96c0-35.3 28.7-64 64-64s64 28.7 64 64zM96 96V256c0 53 43 96 96 96s96-43 96-96V96c0-53-43-96-96-96S96 43 96 96zM64 208c0-8.8-7.2-16-16-16s-16 7.2-16 16v48c0 83 63.1 151.2 144 159.2V480H112c-8.8 0-16 7.2-16 16s7.2 16 16 16h80 80c8.8 0 16-7.2 16-16s-7.2-16-16-16H208V415.2c80.9-8 144-76.2 144-159.2V208c0-8.8-7.2-16-16-16s-16 7.2-16 16v48c0 70.7-57.3 128-128 128s-128-57.3-128-128V208z"/>
                            </svg>
                        </div>
                        <textarea class="w-8/12 outline-none p-2" name="message" placeholder="متن پیام" dir="rtl" required></textarea>
                    </div>
                    <div class="w-1/12 flex justify-end">
                        <button class="w-15 h-15 rounded-full bg-[#E4CAA9] shadow-md shadow-[#E4CAA9] flex items-center justify-center cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="fill-(--primary-color) size-12">
                                <path d="M248,8C111.033,8,0,119.033,0,256S111.033,504,248,504,496,392.967,496,256,384.967,8,248,8ZM362.952,176.66c-3.732,39.215-19.881,134.378-28.1,178.3-3.476,18.584-10.322,24.816-16.948,25.425-14.4,1.326-25.338-9.517-39.287-18.661-21.827-14.308-34.158-23.215-55.346-37.177-24.485-16.135-8.612-25,5.342-39.5,3.652-3.793,67.107-61.51,68.335-66.746.153-.655.3-3.1-1.154-4.384s-3.59-.849-5.135-.5q-3.283.746-104.608,69.142-14.845,10.194-26.894,9.934c-8.855-.191-25.888-5.006-38.551-9.123-15.531-5.048-27.875-7.717-26.8-16.291q.84-6.7,18.45-13.7,108.446-47.248,144.628-62.3c68.872-28.647,83.183-33.623,92.511-33.789,2.052-.034,6.639.474,9.61,2.885a10.452,10.452,0,0,1,3.53,6.716A43.765,43.765,0,0,1,362.952,176.66Z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
@endsection