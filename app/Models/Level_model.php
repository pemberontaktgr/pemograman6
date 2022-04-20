<?php

namespace App\Models;

use CodeIgniter\Model;

class Level_model extends Model
{
    protected $table = 'level';
    public function getLevel($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_level' => $id]);
        }
    }

    // Function Save Level
    public function saveLevel($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    // Function Edit Level
    public function editLevel($data, $id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_level', $id);
        return $builder->update($data);
    }
    // Function Hapus Level
    public function hapusLevel($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id_level' => $id]);
    }
}
