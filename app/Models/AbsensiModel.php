<?php

namespace App\Models;

use CodeIgniter\Model;

class AbsensiModel extends Model
{
    protected $table = 'absensi';
    protected $primaryKey = 'id_absen';
    protected $allowedFields = ['', 'username', 'keterangan', 'surat'];

    // public function getSiswa($slug = false)
    // {
    //     if ($slug == false) {
    //         return $this->findAll();
    //     }
    //     return $this->where(['slug' => $slug])->first();
    // }

    public function simpan($data)
    {
        return $this->db->table('absensi')->insert($data);
    }
}
