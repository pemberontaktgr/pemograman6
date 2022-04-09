<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Pelanggan_model;

class Pelanggan extends Controller
{
    public function index()
    {
        $model = new Pelanggan_model;
        $data['title'] = 'Data Pelanggan';
        $data['getPelanggan'] = $model->getPelanggan();
        echo view('header_view', $data);
        echo view('pelanggan_view', $data);
        echo view('footer_view', $data);
    }

    public function pelanggantambah()
    {
        $data['title']     = 'Tambah Data Pelanggan';
        echo view('header_view', $data);
        echo view('pelanggantambah_view', $data);
        echo view('footer_view', $data);
    }

    public function pelangganadd()
    {
        $model = new Pelanggan_model;
        $data = array(
            'nama_pelanggan'    => $this->request->getPost('namapelanggan'),
            'no_telpon'         => $this->request->getPost('notelpon'),
            'status'            => $this->request->getPost('status')
        );
        $model->savePelanggan($data);
        echo '<script>
                alert("Sukses Tambah Data Pelanggan");
                window.location="' . base_url('pelanggan') . '"
            </script>';
    }

    public function pelangganedit($id)
    {
        $model = new Pelanggan_model;
        $getPelanggan = $model->getPelanggan($id)->getRow();
        if (isset($getPelanggan)) {
            $data['pelanggan'] = $getPelanggan;
            $data['title']  = 'Edit Pelanggan' . $getPelanggan->nama_pelanggan;

            echo view('header_view', $data);
            echo view('pelangganedit_view', $data);
            echo view('footer_view', $data);
        } else {

            echo '<script>
                    alert("ID pelanggan ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('pelanggan') . '"
                </script>';
        }
    }

    public function pelangganupdate()
    {
        $model = new Pelanggan_model;
        $id = $this->request->getPost('id_pelanggan');
        $data = array(
            'nama_pelanggan'    => $this->request->getPost('nama_pelanggan'),
            'no_telpon'         => $this->request->getPost('notelpon'),
            'status'            => $this->request->getPost('status')
        );
        $model->editPelanggan($data, $id);
        echo '<script>
                alert("Sukses Edit Data Pelanggan");
                window.location="' . base_url('pelanggan') . '"
            </script>';
    }

    public function pelangganhapus($id)
    {
        $model = new Pelanggan_model;
        $getPelanggan = $model->getPelanggan($id)->getRow();
        if (isset($getPelanggan)) {
            $model->hapusPelanggan($id);
            echo '<script>
                    alert("Hapus Data Pelanggan Sukses");
                    window.location="' . base_url('pelanggan') . '"
                </script>';
        } else {

            echo '<script>
                    alert("Hapus Gagal !, ID pelanggan' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('pelanggan') . '"
                </script>';
        }
    }
}
