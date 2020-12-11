<?php

namespace App\Controllers\admin;


use App\Controllers\BaseController;

class users extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin'
        ];
        return view('Pages/admin/halaman', $data);
    }
    public function halaman()
    {
        return view('pages/admin/halaman');
    }
    public function siswaguru()
    {
        // $siswa = $this->siswaModel->findAll();
        $guru = $this->guruModel->findAll();

        $data = [
            'title' => 'Admin',
            'siswa' => $this->siswaModel->getSiswa(),
            'guru' => $guru,
            'cssku' => 'indexcss.css'
        ];
        return view('Pages/admin/siswaguru', $data);
    }
    public function pesan()
    {
        $pesan = $this->pesanModel->findAll();
        $data = [
            'pesan' => $pesan
        ];
        return view('Pages/admin/pesan', $data);
    }


    public function create()
    {
        $data = [
            'title' => 'Tambah Data Siswa'
        ];
        return view('Pages/admin/create');
    }






    //--------------------------------------------------------------------

}
