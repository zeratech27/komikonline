<?php
// semua controller wajib gunakan data 
namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data= [
            'title' => 'Home Page'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {        
        $data= [
            'title' => 'About'
        ];
        echo view('pages/about', $data);
    }

    public function contact()
    {
        $data= [
            'title' => 'Hubungi Kami',
            'kontak'=> [
                'alamat'=>'BTN Petobo',
                'blok' => 'D320',
                'notelp' => '02323232'
            ]

        ];
        echo view('pages/contact', $data);
    }

}
