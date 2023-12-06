<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'CodeIgniter 3 for Dummies',
                'author' => 'CI Community',
                'year' => '2023',
            ],
            [
                'title' => 'CodeIgniter 4 for Dummies',
                'author' => 'CI Community',
                'year' => '2023',
            ],

            [
                'title' => 'CodeIgniter 5 for Dummies',
                'author' => 'CI Community',
                'year' => '2023',
            ],

            [
                'title' => 'CodeIgniter 6 for Dummies',
                'author' => 'CI Community',
                'year' => '2023',
            ],

            [
                'title' => 'CodeIgniter 7 for Dummies',
                'author' => 'CI Community',
                'year' => '2023',
            ],
            
        ];
        $this->db->table('tblbooks')->insertBatch($data);
    }
}
