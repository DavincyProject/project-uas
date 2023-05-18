<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PesanModel;
use App\Models\UserModel;

class Pesan extends BaseController
{
    protected $pesan;

    public function __construct()
    {
        $this->pesan = new PesanModel();
    }

    public function index()
    {
        $data['pesan'] = $this->pesan
            ->join('wisata', 'wisata.id_wisata = pesan.id_wisata')
            ->join('users', 'users.id = pesan.id')
            ->where(['status !=' => 'settlement'])->findAll();
        return view('admin/pesan/index', $data);
    }

    public function settle()
    {
        $data['pesan'] = $this->pesan
            ->join('wisata', 'wisata.id_wisata = pesan.id_wisata')
            ->where(['status' => 'settlement'])->findAll();
        return view('admin/pesan/settle', $data);
    }
}
