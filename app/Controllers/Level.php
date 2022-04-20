<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Level_model;

class Level extends Controller
{
    public function index()
    {
        $model = new Level_model;
        $data['title'] = 'Data Level';
        $data['getLevel'] = $model->getLevel();
        echo view('header_view', $data);
        echo view('level_view', $data);
        echo view('footer_view', $data);
    }
    public function leveltambah()
    {
        $data['title']     = 'Tambah Data Level';
        echo view('header_view', $data);
        echo view('leveltambah_view', $data);
        echo view('footer_view', $data);
    }

    public function leveladd()
    {
        $model = new Level_model;
        $data = array(
            'nama_level' => $this->request->getPost('nama_level')
        );
        $model->saveLevel($data);
        echo '<script>
                alert("Sukses Tambah Data Level");
                window.location="' . base_url('level') . '"
            </script>';
    }

    public function leveledit($id)
    {
        $model = new Level_model;
        $getLevel = $model->getLevel($id)->getRow();
        if (isset($getLevel)) {
            $data['level'] = $getLevel;
            $data['title']  = 'Edit ' . $getLevel->nama_level;

            echo view('header_view', $data);
            echo view('leveledit_view', $data);
            echo view('footer_view', $data);
        } else {

            echo '<script>
                    alert("ID level ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('level') . '"
                </script>';
        }
    }

    public function levelupdate()
    {
        $model = new Level_model;
        $id = $this->request->getPost('id_level');
        $data = array(
            'nama_level' => $this->request->getPost('nama_level')
        );
        $model->editLevel($data, $id);
        echo '<script>
                alert("Sukses Edit Data Level");
                window.location="' . base_url('level') . '"
            </script>';
    }

    public function levelhapus($id)
    {
        $model = new Level_model;
        $getLevel = $model->getLevel($id)->getRow();
        if (isset($getLevel)) {
            $model->hapusLevel($id);
            echo '<script>
                    alert("Hapus Data Level Sukses");
                    window.location="' . base_url('level') . '"
                </script>';
        } else {

            echo '<script>
                    alert("Hapus Gagal !, ID level' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('level') . '"
                </script>';
        }
    }
}
