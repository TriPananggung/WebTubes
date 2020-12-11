<?php

namespace App\Controllers;

use App\Models\SiswaModel;
use Config\Validation;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | MejaKelas',
            'tentang' => '#ten',
            'berita' => '#ber',
            'galeri' => '#gal',
            'cssku' => '/css/csstubes.css',
            'jsku' => '/js/tubes.js',
            'beritaData' => $this->beritaModel->getBerita()
        ];
        return view('pages/home', $data);
    }
    public function berita($slug)
    {
        $data = [
            'title' => 'Berita',
            'tentang' => '/pages#ten',
            'berita' => '/pages#ber',
            'galeri' => '/pages#gal',
            'cssku' => '/css/berita.css',
            'jsku' => '/js/tubes.js',
            'beritaData' => $this->beritaModel->getBerita($slug),
            'Semuaber' => $this->beritaModel->getBerita()
        ];
        return view('pages/berita', $data);
    }
    public function login()
    {
        $data = [
            'title' => 'Login',
            'cssku' => '/css/berita.css',
            'jsku' => '/js/tubes.js'
        ];
        return view('pages/login', $data);
    }


    //harusnya admin
    public function detailsiswa($slug)
    {
        $data = [
            'siswa' => $this->siswaModel->getSiswa($slug)
        ];
        return view('Pages/Admin/detailsiswa', $data);
    }

    // public function save()
    // {
    // if (!$this->validate([
    //     'nama' => 'required|is_unique[siswa.nama]'
    // ])) {
    //     $validation = \Config\Services::validation();
    //     dd($Validation);
    //     return redirect()->to('/pages/save');
    // }
    // dd($this->request->getVar());
    //     $slug = url_title($this->request->getVar('nama'), '-', true);
    //     $this->siswaModel->save([
    //         'nis' => $this->request->getVar('nis'),
    //         'nama' => $this->request->getVar('nama'),
    //         'slug' => $slug,
    //         'kelas' => $this->request->getVar('kelas'),
    //         'organisasi' => $this->request->getVar('organisasi'),
    //         'no_telp' => $this->request->getVar('no_telp'),
    //         'alamat' => $this->request->getVar('alamat'),
    //         // 'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
    //         // 'foto' => $this->request->getVar('foto')
    //     ]);
    //     return redirect()->to('/admin/siswaguru');
    // }
    public function save()
    {
        $slug = url_title($this->request->getVar('nama'), '-', true);
        $data = [
            'nis' => $this->request->getPost('nis'),
            'nama' => $this->request->getPost('nama'),
            'slug' => $slug,
            'kelas' => $this->request->getPost('kelas'),
            'organisasi' => $this->request->getPost('organisasi'),
            'no_telp' => $this->request->getPost('no_telp'),
            'alamat' => $this->request->getPost('alamat'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'foto' => $this->request->getVar('foto')
        ];
        $this->siswaModel->simpan($data);
        return redirect()->to('/admin/siswaguru');
    }
    public function savepesan()
    {
        $data = [
            'pengirim' => $this->request->getPost('pengirim'),
            'pesan' => $this->request->getPost('pesan')
        ];
        $this->pesanModel->simpan($data);
        return redirect()->to('/');
    }
    public function saveabsensi()
    {
        $data = [
            'username' => $this->request->getPost('username'),
            'keterangan' => $this->request->getPost('keterangan'),
            'surat' => $this->request->getPost('surat')
        ];
        $this->absensiModel->simpan($data);
        return redirect()->to('/Siswa/absensi');
    }

    public function delete($id)
    {
        $this->siswaModel->delete($id);
        return redirect()->to('/admin/siswaguru');
    }

    public function edit($slug)
    {
        $data = [
            'siswa' => $this->siswaModel->getSiswa($slug)
        ];
        return view('Pages/Admin/edit', $data);
    }





    //--------------------------------------------------------------------

}
