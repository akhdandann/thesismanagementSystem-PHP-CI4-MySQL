<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Mahasiswa extends Seeder
{
    public function run()
    {
        //
        $datamhs = [
            'uname' => 'mahasiswa',
            'pass' => password_hash('123456', PASSWORD_DEFAULT),
            'name' => 'Arifuddin Akhdan',
            'emailmhs' => 'bunjubonjour@gmail.com',
        ];
        $this->db->table('mahasiswa')->insert($datamhs);
    }
}
