<?php

namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model
{
    protected $table = 'user';

    // Function Save users
    public function getUsers($id = false)
    {
        if ($id === false) {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->join('level', 'user.id_level = level.id_level');
            return  $builder->get()->getResultArray();
        } else {
            return $this->getWhere(['id_user' => $id]);
        }
    }

    public function getAllSpesifictUser($id)
    {
        $builder = $this->db->table($this->table);
        $builder->select('*');
        $builder->join('level', 'user.id_level = level.id_level');
        return  $builder->getWhere(['id_user' => $id]);
    }

    // Function Save users
    public function saveUsers($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    // Function Updaye users
    public function updateUsers($data, $id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_user', $id);
        return $builder->update($data);
    }

    // Function Hapus users
    public function destroyUser($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id_user' => $id]);
    }
}
