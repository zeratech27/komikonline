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
        // jika komik nda ada maka
        if(empty($data['komik'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul Komik ('.$slug.') tidak ditemukan');
        }

        return view('/komik/detail', $data);
    }

    public function create()
    {
        $data= [
            'title' =>  'Form tambah Komik'
        ];
        return view('komik/create', $data);
    }

    public function save()
    {
        // validasi
        $sluj= url_title($this->request->getVar('judul'), '-', true);
        $this->kmodel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $sluj,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('komik');


    }
}