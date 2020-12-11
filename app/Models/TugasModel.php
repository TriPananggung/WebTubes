<?php

namespace App\Models;

use CodeIgniter\Model;

class TugasModel extends Model
{
    protected $table = 'tugas';
    protected $primaryKey = 'id_tugas';
    protected $allowedFields = ['', 'judul_tugas', 'isi_tugas'];

    // public function getSiswa($slug = false)
    // {
    //     if ($slug == false) {
    //         return $this->findAll();
    //     }
    //     return $this->where(['slug' => $slug])->first();
    // }

    public function simpan($data)
    {
        return $this->db->table('tugas')->insert($data);
    }
}
