<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'nis';
    protected $allowedFields = ['nis', 'nama', 'slug', 'kelas', 'jenis_kelamin', 'no_telp', 'alamat', 'organisasi', 'foto'];

    public function getSiswa($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }

    public function simpan($data)
    {
        return $this->db->table('siswa')->insert($data);
    }
}
