<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }


    public function load_option($name){
        if ($name=="owner_register") {
            return view('owner_register');
        }
        elseif ($name=="homepage") {
            return view('home');
        }
        elseif ($name=="login") {
            return view('login');
        }
        elseif ($name=="tenant_dashboard") {
            return view('tenant_dashboard');
        }
    }
}