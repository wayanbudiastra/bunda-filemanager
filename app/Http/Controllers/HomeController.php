<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {

        if (strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape')) {
            $browser = 'Netscape';
        } else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox')) {
            $browser = 'Firefox';
        } else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome')) {
            $browser = 'Chrome';
        } else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera')) {
            $browser = 'Opera';
        } else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE')) {
            $browser = 'Internet Explorer';
        } else $browser = 'Other';


        if ($browser == 'Firefox') {
            return view('browser');
        } else {
            return view('login');
        }
    }
}