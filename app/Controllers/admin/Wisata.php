<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\WisataModel;

class Wisata extends BaseController
{

    protected $wisata;
    public function __construct()
    {
        session();
        $this->wisata = new WisataModel();
    }

    public function index()
    {
        if (session()->get('logged_in') == true) {
            $data['wisata'] = $this->wisata->findAll();
            return view('admin/wisata/index', $data);
        } else {
            return redirect()->to('admin/login');
        }
    }

    public function add()
    {
        return view('admin/wisata/add');
    }

    public function save()
    {
        $rules = [
            'nama' => 'required',
            'des' => 'required',
            'harga' => 'required',
            'foto' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]'
        ];

        $pesan = [
            'nama' => ['required' => 'Nama wisata tidak boleh kosong'],
            'des' => ['required' => 'Deskripsi wisata tidak boleh kosong'],
            'harga' => ['required' => 'Harga wisata tidak boleh kosong'],
            'foto' => [
                'mime_in' => 'Format file tidak sesuai',
                'uploaded' => 'File Belum Diupload',
            ]
        ];

        if (!$this->validate($rules, $pesan)) {
            $data['validation'] = $this->validator;
            return view('admin/wisata/add', $data);
        }


        $nama = $this->request->getVar('nama');
        $des = $this->request->getVar('des');
        $harga = $this->request->getVar('harga');
        $foto = $this->request->getFile('foto');
        $foto->move(WRITEPATH . '../public/foto');

        $data = [
            'nama_wisata' => $nama,
            'deskripsi' => $des,
            'harga' => $harga,
            'foto' => $foto->getClientName(),
        ];
        $this->wisata->save($data);

        return redirect()->to('admin/wisata');
    }

    public function edit($id)
    {
        $data['cari'] = $this->wisata->where(['id_wisata' => $id])->first();
        return view('admin/wisata/edit', $data);
    }

    public function update()
    {
        //mengambil data dari tabel 
        $id = $this->request->getVar('kode');
        $nama = $this->request->getVar('nama');
        $des = $this->request->getVar('des');
        $harga = $this->request->getVar('harga');
        $foto = $this->request->getFile('foto');
        $foto->move(WRITEPATH . '../public/foto');

        //dikirimkan kembali ke dalam view admin/wisata untuk ditampilkan
        $data = [
            'id_wisata' => $id,
            'nama_wisata' => $nama,
            'deskripsi' => $des,
            'harga' => $harga,
            'foto' => $foto->getClientName(),
        ];
        $this->wisata->save($data);

        return redirect()->to('admin/wisata');
    }

    public function delete($id)
    {
        // Mengambil data wisata yang akan dihapus
        $wisata = $this->wisata->find($id);

        // Menghapus foto di dalam folder public/foto sesuai dengan id
        if (!empty($wisata->foto)) {
            unlink(WRITEPATH . '../public/foto/' . $wisata->foto);
        }

        $this->wisata->delete($id);
        return redirect()->to('admin/wisata');
    }
}
