<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = "mahasiswa";
    protected $primaryKey = "emailmhs";
    protected $allowedFields = ['uname', 'pass', 'nama', 'token'];

    public function getData($parameter)
    {
        $builder = $this->table($this->table);
        $builder->where('uname=', $parameter);
        $builder->orWhere('emailmhs=', $parameter);
        $query = $builder->get();
        return $query->getRowArray();
    }

    public function updateData($datamhs)
    {
        $builder = $this->table($this->table);
        if ($builder->save($datamhs)) {
            return true;
        } else {
            return false;
        }
    }
}
