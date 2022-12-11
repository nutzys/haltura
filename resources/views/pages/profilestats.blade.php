@extends('layout')

@section('content')
<div class="w-full h-full bg-cover bg-center overflow-hidden" style="background-image: url('/img/picture3.jpg');">
    <div class="w-full h-full backdrop-blur-sm backdrop-brightness-50">
        <div class="w-full h-20 bg-gradient-to-b from-black">
            <nav class="w-full h-full">
                <div class="w-fit h-full flex flex-col justify-center pl-6">
                    <a href="/" class="text-white text-4xl font-extrabold">Tava<span class="text-yellow-400 underline">Haltūra</span></a>
                </div>
            </nav>
        </div>
        <div class="w-full h-full flex justify-center p-8">
            <div class="h-full w-4/5 bg-white p-4 flex">
                <div class="w-1/5 h-full bg-gray-400 flex flex-col">
                    <div class="h-40 w-full bg-slate-700"></div>
                    <div class="flex flex-col space-y-10 items-center w-full h-full text-lg">
                        <a href="" class="hover:underline">Profils</a>
                        <a href="" class="hover:underline">Statistika</a>
                        <a href="" class="hover:underline">Pieteikumi</a>
                        <a href="" class="hover:underline">Mani pieteikumi</a>
                    </div>
                </div>
                <div class="w-full h-full bg-slate-500">

                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
