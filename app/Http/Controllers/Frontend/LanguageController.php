<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    //

    public function france(){
        session()->get('language');
        session()->forget('language');
        Session::put('language','france');
        return redirect()->back();
    }

    public function English(){
        session()->get('language');
        session()->forget('language');
        Session::put('language','english');
        return redirect()->back();
    }





}
