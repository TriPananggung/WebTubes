<?php

namespace App\Models;

use CodeIgniter\Model;

class PesanModel extends Model
{
    protected $table = 'pesan';
    protected $primaryKey = 'id_pengirim';
    protected $allowedFields = ['', 'pengirim', 'pesan'];
    // public function getSiswa($slug = false)
    // {
    //     if ($slug == false) {
    //         return $this->findAll();
    //     }
    //     return $this->where(['slug' => $slug])->first();
    // }
    public function simpan($data)
    {
        return $this->db->table('pesan')->insert($data);
    }
}
