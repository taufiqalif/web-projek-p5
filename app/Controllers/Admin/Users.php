<?php

namespace App\Controllers\Admin;

Use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
}
