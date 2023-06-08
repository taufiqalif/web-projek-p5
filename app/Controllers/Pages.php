<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        // return view('pages/index');
        $data = [
          'title' => 'Projek P5'
        ];

        return view('pages/index',$data);

    }

    public function about()
    {
      $data = [
        'title' => 'Projek P5 | About'
      ];
      return view('pages/about' , $data);
    }

    public function projek()
    {
      $data = [
        'title' => 'Projek P5 | Projek'
      ];
      return view('pages/projek' , $data);
    }

    public function profil()
    {
      $data = [
        'title' => 'Projek P5 | Profil'
      ];
      return view('pages/profil' , $data);
    }
}
