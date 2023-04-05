<?php
namespace App\Http\Controllers;
  
 use Illuminate\Http\Request;
  
 class PagesController extends Controller
 {
     public function halamanUtama(){
         return view('index', [
             'title' => 'Rubbish Revive'
         ]);
     }
  
     public function dashboard(){
  
         return view('user.dashboard', [
             'title' => 'Dashboard',
         ]);
     }
 }
  
  