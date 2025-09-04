<?php

namespace App\Controllers;

class Test_page extends BaseController
{
    public function index(): string
    {
        return view('Index');
    }
}
