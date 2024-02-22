<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;

class AppController extends Controller
{
    public function index(): Application|Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        return view('planny', ['tenant' => tenant()]);
    }
}
