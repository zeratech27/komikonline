<?php
// semua controller wajib gunakan data 
namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    protected $kmodel;
    public function __construct()
    {
        $this->kmodel= new KomikModel();
    }


    public function index()
    {
        $komik= $this->kmodel->getKomik();
        $data= [
            'title' => 'Daftar Komik',
            'komik' => $komik 
        ];
        return view('komik/index', $data);
    }

    public function detail($slug)
    {
        $komik= 
        $data= [
            'title' => 'Detail Komik',
            'komik' => $this->kmodel->getKomik($slug) 
        ];

        return view('/komik/detail', $data);
    }
}