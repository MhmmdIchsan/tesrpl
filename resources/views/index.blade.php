 
@extends('layouts.app')
 
 
 @section('body')
     class="background-image: asset('image/background.png')"
  
 @endsection
  
  
 @section('content')
  
 <section id="home" class="pt-36 ">
     <div class="container content-center')">
         <div class="flex flex-wrap ">
             <div class="w-full self-center px-4 text-center ">
                <img src="{{ asset('image/logo.png') }}" alt="logo" class="w-1/4 h-359 w-459 mx-auto">
                 <h1 class="block font-bold text-slate-800 text-5xl mt-1 lg:text-5xl underline text-[#9ADCF1]">Rubbish Revive</h1>
                 <span class="block font-normal text-slate-600 text-5xl mt-1 lg:text-5xl text-[#9ADCF1]"> We are here to help you</span>  

             </div>
             
         </div>
     </div>
 </section>
  
 <!-- End Hero Section -->
  
  
  
 @endsection
  
  