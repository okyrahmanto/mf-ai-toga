<?php

namespace App\Controllers;

class Front extends BaseController
{
    public function index()
    {
        return redirect()->to('/auth/login')->withCookies();
        //return view('frontend/front');
    }

}
