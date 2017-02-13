<?php

namespace App\Http\Controllers;

class PagesController extends Controller{
    public function getIndex(){
        //process variable data or params
        //talk to the model
        //receive from the model
        //compile or process data from the modelmif nedded
        //pass that data to the correct view
     return view('pages.welcome');
    }
   public function getAbout(){
       $first='Suzit';
       $last='Biswas';
       $fullname=$first." ".$last;
       $email='bsuzit@gmail.com';
       $data=[];
       $data['email']=$email;
       $data['fullname']=$fullname;
    //return view('pages.about')->withFullname($fullname)->withEmail($email);
       return view('pages.about')->withData($data);
   }
   public function getContact(){
       return view('pages.contact');
   }
}