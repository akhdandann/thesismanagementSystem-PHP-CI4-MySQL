<?php

namespace App\Models;

use CodeIgniter\Model;

class BerkasModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'berkas';
    protected $primaryKey = 'id_berkas';
    protected $returnType = 'object';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_berkas', 'berkas', 'keterangan', 'judul', 'topik'];
}
