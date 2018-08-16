<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Show the index page for the settings.
     *
     * @return     \Illuminate\Http\Response
     */
    public function index()
    {
        return view('settings.index');
    }

  
}
