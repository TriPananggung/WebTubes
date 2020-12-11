<?php

namespace App\Controllers;

class siswa extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Profil'
        ];
        return view('pages/siswa/profil', $data);
    }
    public function beranda()
    {
        $data = [
            'title' => 'Beranda'
        ];
        return view('pages/siswa/beranda', $data);
    }
    public function matapelajaran()
    {
        $data = [
            'title' => 'Mata Pelajaran'
        ];
        return view('pages/siswa/matapelajaran', $data);
    }
    public function absensi()
    {
        $data = [
            'title' => 'Absensi'
        ];
        return view('pages/siswa/absensi', $data);
    }
    
    public function datanilai()
    {
        $data = [
            'title' => 'Data Nilai'
        ];
        return view('pages/siswa/datanilai', $data);
    }
    public function templatesiswa()
    {
        return view('pages/siswa/templatesiswa');
    }
    public function notifikasi()
    {
        $data = [
            'title' => 'Notifikasi'
        ];
        return view('pages/siswa/notifikasi', $data);
    }
    public function faq()
    {
        $data = [
            'title' => 'FAQ'
        ];
        return view('Pages/Siswa/faq', $data);
    }
    public function mapeltampil()
    {
        $data = [
            'title' => 'Matapelajaran'
        ];
        return view('Pages/Siswa/mapeltampil', $data);
    }
    public function datanilaimapel()
    {
        $data = [
            'title' => 'datanilai'
        ];
        return view('Pages/Siswa/datanilaimapel', $data);
    }
    public function berandatampil()
    {
        $data = [
            'title' => 'tampil'
        ];
        return view('Pages/Siswa/berandatampil', $data);
    }
    public function datanilaimasuk()
    {
        $data = [
            'title' => 'Data'
        ];
        return view('Pages/Siswa/datanilaimasuk', $data);
    }

    //--------------------------------------------------------------------

}
