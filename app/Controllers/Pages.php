<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function store()
    {
        return view('pages/store');
    }

    public function perks()
    {
        return view('pages/perks');
    }
}
