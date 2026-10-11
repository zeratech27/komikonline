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
        // session();
        $data= [
            'title' =>  'Form tambah Komik',
        ];
        return view('komik/create', $data);
    }

    public function save()

    {   
        $judul=  $this->request->getVar('judul');

       $rule= [
        'judul' => 'required|is_unique[komik.judul]',
        'penulis' => 'required',
        'penerbit' => 'required',
       ];

       $errors= [
        'judul' => [
            'required' => 'Judul harus di isi!',
            'is_unique' => 'Judul sudah Ada!'
        ],
        'penulis'=> [
            'required' => 'Penulis harus di isi!'
        ],
         'penerbit'=> [
            'required' => 'Penerbit harus di isi!'
        ]
       ];

       if(!$this->validate($rule, $errors)) {
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());

       }

        $sluj= url_title($this->request->getVar('judul'), '-', true);
        $this->kmodel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $sluj,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul'),
        ]);

       return redirect()->to('komik')->with('pesan', 'Data Tersimpan!');   
    }

    public function hapus($id)
    {
        $this->kmodel->delete($id);
        return redirect()->to('komik')->with('hapus', 'Data TERHAPUS!');

    }

    public function edit($slug)
    {
            $data= [
            'title' =>  'Form Edit Komik',
            'komik' => $this->kmodel->getKomik($slug)
        ];
        return view('komik/edit', $data);
    }
    
}