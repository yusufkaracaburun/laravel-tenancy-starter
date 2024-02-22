<?php

namespace App\Http\Controllers;

use Artisan;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AppController extends Controller
{
    public function index(): Application|Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        return view('planny', ['tenant' => tenant()]);
    }
}
