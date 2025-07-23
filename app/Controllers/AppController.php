<?php

namespace App\Controllers;

class AppController extends BaseController
{
    public function index(): string
    {   
        $data['saldo'] = 15000000; // Example saldo value
        $data['title'] = 'Dashboard';
        return view('dashboard', $data);
    }
}
