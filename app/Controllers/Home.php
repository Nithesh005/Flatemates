<?php

namespace App\Controllers;
use CodeIgniter\Debug\Toolbar\Collectors\BaseCollector;
use CodeIgniter\Email\Email;
use Config\Services;

class Home extends BaseController
{
    public function index()
    {
        // return view('tenat_dashboard');
        // return view('owner_dashbord');
        return view('home');
    }
    public function login()
    {
        
        return view('login');
    }
    public function tenant_register()
    {
        return view('tenant_register');
    }
    public function terms_conditions()
    {
        return view('terms_conditions');
    }
    public function privacy_policy()
    {
        return view('privacy_policy');
    }
    public function owner_dashbord()
    {
        return view('owner_dashbord');
    }
    public function tenat_dashboard()
    {
        return view('tenat_dashboard');
    }
    public function otp_verification()
    {
        return view('otp_verification');
    }
    public function logout()
    {
        $session = Services::session();
        $session->destroy();
        return view('otp_verification');
    }
    public function sendEmail()
    {
        
        $email = new Email();

        $email->setTo('mazzmathan2001@gmail.com');
        $email->setFrom('flatmates09@gmail.com');
        $email->setSubject('Email Subject');
        $email->setMessage('hello bro');

        if ($email->send()) {
            echo 'Email sent successfully.';
            return view('login');
        } else {
            echo $email->printDebugger(['headers']);
        }
    }
}
