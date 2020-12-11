<?php

namespace App\Controllers;

class Guru extends BaseController
{
    public function index()
    {
        return view('pages/guru/index');
    }
    public function matkul()
    {
        $data = [
            'title' => 'Matakuliah'
        ];
        return view('pages/guru/matkul1', $data);
    }
    public function tugas()
    {
        $tugas = $this->tugasModel->findAll();

        $data = [
            'title' => 'Tugas',
            'tugas' => $tugas
        ];
        return view('pages/guru/tugas', $data);
    }
    public function anggota()
    {
        $data = [
            'title' => 'Anggota Kelas'
        ];
        return view('pages/guru/anggota', $data);
    }
    public function nilai()
    {
        $data = [
            'title' => 'Nilai'
        ];
        return view('pages/guru/nilai', $data);
    }
    public function presensi()
    {
        $data = [
            'title' => 'Presensi'
        ];
        return view('pages/guru/presensi', $data);
    }

    //--------------------------------------------------------------------

}
