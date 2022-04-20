<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\User_model;
use App\Models\Level_model;

class User extends Controller
{
    public function index()
    {
        $model = new User_model();
        $data['title'] = 'Data User';

        $data['users'] = $model->getUsers(false);

        echo view('header_view', $data);
        echo view('user_view', $data);
        echo view('footer_view', $data);
    }

    public function addUser()
    {
        $model = new Level_model();
        $data['title'] = 'Data User';
        $data['level'] = $model->getLevel(false);

        echo view('header_view', $data);
        return view('add_user_view', $data);
        echo view('footer_view', $data);
    }

    public function tambahuser()
    {
        $model = new User_model();

        if ($this->request->getPost('nama') && $this->request->getPost('id_level')) {
            $datatosend = array(
                'nama_user' => $this->request->getPost('nama'),
                'id_level' => $this->request->getPost('id_level')
            );
            $model->saveUsers($datatosend);
            echo '<script>
                alert("sukses Tambah User");
                window.location="' . base_url('user') . '"
                </script>';
        } else {
            echo '<script>
                alert("Filed is required!");
                window.location="' . base_url('user/addUser') . '"
                </script>';
        }
    }

    public function edit($id)
    {
        $levelmodel = new Level_model();
        $model = new User_model();

        $getUserSpesifict = $model->getAllSpesifictUser($id)->getRowArray();
        if (isset($getUserSpesifict)) {
            $data['title'] = 'User User';

            $data['level'] = $levelmodel->getLevel(false);
            $data['user'] = $getUserSpesifict;

            echo view('header_view', $data);
            return view('edit_user_view', $data);
            echo view('footer_view', $data);
        } else {
            echo '<script>
            alert("ID User ' . $id . ' Tidak ditemukan");
            window.location="' . base_url('user') . '"
            </script>';
        }
    }

    public function update()
    {
        $model = new User_model();
        $id = $this->request->getPost('id_user');
        $datatosend = array(
            'nama_user' => $this->request->getPost('nama'),
            'id_level' => $this->request->getPost('id_level')
        );
        $model->updateUsers($datatosend, $id);

        echo '<script>
                alert("Sukses Edit Data User");
                window.location="' . base_url('user') . '"
            </script>';
    }

    public function destroyUser($id)
    {
        $model = new User_model;
        $getUserSpesifict = $model->getUsers($id)->getRow();
        if (isset($getUserSpesifict)) {
            $model->destroyUser($id);
            echo '<script>
            alert("Hapus Data Users Sukses");
            window.location="' . base_url('user') . '" </script>';
        } else {
            echo '<script>
            alert("Hapus Gagal!, ID Users ' . $id . ' Tidak Ditemukan");
            window.location="' . base_url('user') . '" </script>';
        }
    }
}
