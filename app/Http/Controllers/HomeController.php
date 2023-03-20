<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
//    // -----------------------------------------------------
//    // 01
//        public function login(Request $request){
//        return $request->input();}
//        // end 01
//    // -----------------------------------------------------


     // --------------------------------------------------------
    // 02
    public function login(Request $request){
        if (session()->has('name')){
            redirect('/profiles');
        }
        $sessionData = $request->input();
        $request->session()->put('name' , $sessionData['name']);
        return redirect('/profiles');
    }
    // --------------------------------------------------------

}
