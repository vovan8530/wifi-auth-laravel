<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): View
    {
        $settings = Setting::query()->get();
        return view('home', ['settings' => $settings]);
    }



}

