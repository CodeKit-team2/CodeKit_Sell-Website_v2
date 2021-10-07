<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Shop') }}
        </h2>
    </x-slot>
    <p class="mx-auto w-10 my-8 text-yellow-600 font-bold text-xl"> Clothes </p>
    <div class="mb:mx-3 sm:mx-6 md:mx-20 xl:mx-auto max-w-screen-xl my-8 flex flex-wrap w-auto bg-white h-auto">
        {{-- render ra bao nhiêu sản phẩm tùy ý, dùng vòng lặp để render theo db, ở đây lấy 4 cái làm mẫu --}}
        @foreach ($id as $v)
        {{-- <x-shop.product-card>
        </x-shop.product-card> --}}

        {{-- Nhập component vào code --}}
            <div class="mb:w-1/2 sm:w-1/3 md:w-1/4 border-l border hover:border-indigo-600">
                <p class="p-5 font-bold uppercase ">{{$v->p_name}}</p>
                <a href="{{route('product',$v->p_id)}}">
                <img class="" src="{{ URL::to('/assets/img/converse.jpg') }}">
                </a>
                <div class="flex justify-between">
                    <p class="p-5 font-bold text-indigo-600">{{$v->p_prices}}</p>
                    <div class="p-5">
                        <x-icons.cart></x-icons.cart>
                    </div>            
                </div>
            </div>
        @endforeach

    </div>
</x-app-layout>