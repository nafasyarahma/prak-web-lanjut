<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'npm' => '2017051023',
                'nama'    => 'Nafasya Rahma Safitra',
                'alamat' => 'Pringsewu',
                'created_at'    => Time::now()
            ],
            [
                'npm' => '2017051013',
                'nama'    => 'Nur Setiowati',
                'alamat' => 'Tanggamus',
                'created_at'    => Time::now()
            ],
            [
                'npm' => '2017051015',
                'nama'    => 'Safiira Rahmah Linisa',
                'alamat' => 'Lampung Tengah',
                'created_at'    => Time::now()
            ]
        ];

        foreach($data_mahasiswa as $data){
            $this->db->table('mahasiswa')->insert($data);
        }
       
    }
}
