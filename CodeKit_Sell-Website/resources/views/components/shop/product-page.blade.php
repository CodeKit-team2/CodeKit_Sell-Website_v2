<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Shop') }}
        </h2>
    </x-slot>
    <div class="mb:mx-3 sm:mx-6 md:mx-20 xl:mx-auto max-w-screen-xl my-16  w-auto bg-white h-auto border">
        <div class="mx-auto xl:flex xl:flex-wrap">
            <div class="mb:w-full xl:w-1/2">
                {{-- Tên (responsive) --}}
                <p class="py-5 font-bold uppercase text-center xl:hidden">Chuck Classic 70'</p>
                {{-- Ảnh sp --}}
                <img class="" src="{{ URL::to('/assets/img/converse.jpg') }}">
            </div>
            <div class="mb:w-full xl:w-1/2 p-5">
                {{-- Thông tin sản phẩm --}}
                <x-shop.single-prodInfo></x-shop.single-prodInfo>
                {{-- Phần chọn mua của khách --}}
                <x-shop.order></x-shop.order>
            </div>
        </div>
        {{-- Phần gợi ý sản phẩm --}}
        <x-shop.suggest></x-shop.suggest>
    </div>
</x-app-layout>