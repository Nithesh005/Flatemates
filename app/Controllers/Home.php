<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('tenat_dashboard');
        // return view('owner_dashbord');
    return view('terms&conditions');
    
}
public function tenant_register()
{
return view('tenant_register');
}
}