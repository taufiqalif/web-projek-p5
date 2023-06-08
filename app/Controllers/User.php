<?php

namespace App\Controllers;

class User extends BaseController
{
  public function login()
    {
        // return view('pages/index');
        $data = [
          'title' => 'Selamat Datang'
        ];

        return view('user/login',$data);

    }

}