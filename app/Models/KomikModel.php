<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
    protected $table      = 'komik';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['judul', 'slug', 'penulis', 'penerbit', 'sampul', 'created_at', 'update_at'];

    public function getKomik($slug = false)
    {
        if($slug == false){
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }

}