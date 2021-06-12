<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
   public function home()
   {
       # code...
       $title = 'GCUL Welfare Society';
       return view('pages.home', compact('title'));


   }

   public function about()
   {
       # code...
       $title = 'About Us - GCUL Welfare Society';
       return view('pages.about', compact('title'));

   }


   public function mission()
   {
       # code...
       $title = 'Our Mission - GCUL Welfare Society';
       return view('pages.mission', compact('title'));

   }

   public function join()
   {
       # code...
       $title = 'Join Us - GCUL Welfare Society';
       return view('pages.join', compact('title'));

   }

   public function donate()
   {
       # code...
       $title = 'Donate Us - GCUL Welfare Society';
       return view('pages.donate', compact('title'));

   }


}
