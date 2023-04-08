@extends('layouts.app')


@section('body')
class="bg-[#D6EEF5]"
@endsection

@section('content')


<div>
    <h1 class="block text-center font-bold text-5xl lg:text-5xl m-5 pt-24 text-[#737373]">Welcome <span
            class="underline"> {{ Auth::user()->name }}</span>!</h1>
    <div class="flex flex-wrap justify-center m-13 p-40">
        <div class="justify-center p-5">
            <div class="relative flex mb-6 shadow-lg rounded-lg bg-white border border-black">
                <div class="">
                    <div class="relative w-full m-auto pl-15 pr-15">
                        <a href="/ongoing"
                            class="justify-center pt-2 text-base text-black flex group-hover:text-primary "><img
                                src="{{ asset('image/Pickup trash.png') }}" class="w-32"></img></a>
                        <p class="text-center m-auto p-1 text-xs">Layanan Menjemput Sampah ke Rumah Anda.</p>
                        <div class="flex justify-center pb-2">
                            <button
                                class="bg-[#737373] hover:bg-[#6A6A6A] text-white font-semibold text-xs py-1 px-20 rounded-md">
                                <a href="/pickup">
                                    GO >
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="justify-center p-5">
            <div class="relative flex mb-6 shadow-lg rounded-lg bg-white border border-black">
                <div class="">
                    <div class="relative w-full m-auto pl-15 pr-15">
                        <a href="/ongoing"
                            class="justify-center pt-2 text-base text-black flex group-hover:text-primary "><img
                                src="{{ asset('image/Jadwal Pickup.png') }}" class="w-32"></img></a>
                        <p class="text-center m-auto p-1 text-xs">Informasi Tentang Jadwal Penjemputan Sampah.</p>
                        <div class="flex justify-center pb-2">
                            <button
                                class="bg-[#737373] hover:bg-[#6A6A6A] text-white font-semibold text-xs py-1 px-20 rounded-md">
                                <a href="/jadwal">
                                    GO >
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="justify-center p-5">
            <div class="relative flex mb-6 shadow-lg rounded-lg bg-white border border-black">
                <div class="">
                    <div class="relative w-full m-auto pl-15 pr-15">
                        <a href="/ongoing" class="justify-center pt-2 text-base text-black flex group-hover:text-primary "><img
                                src="{{ asset('image/exchange.png') }}" class="w-32"></img></a>
                        <p class="text-center m-auto p-1 text-xs">Informasi Tentang Jadwal Penjemputan Sampah.</p>
                        <div class="flex justify-center pb-2">
                            <button
                                class="bg-[#737373] hover:bg-[#6A6A6A] text-white font-semibold text-xs py-1 px-20 rounded-md">
                                <a href="/jadwal">
                                    GO >
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
