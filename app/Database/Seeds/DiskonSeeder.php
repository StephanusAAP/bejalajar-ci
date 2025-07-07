<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DiskonSeeder extends Seeder
{
    public function run()
    {
        $today = date('Y-m-d');
        $now   = date('Y-m-d H:i:s');

        $data = [
            [
                'id' => null,
                'tanggal' => $today,
                'nominal' => 10000,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => null,
                'tanggal' => '2025-07-08',
                'nominal' => 20000,
                'created_at' => '2025-07-08 10:00:00',
                'updated_at' => '2025-07-08 10:00:00'
            ],
            [
                'id' => null,
                'tanggal' => '2025-07-09',
                'nominal' => 3000,
                'created_at' => '2025-07-08 09:30:00',
                'updated_at' => '2025-07-08 09:30:00'
            ],
            [
                'id' => null,
                'tanggal' => '2025-07-10',
                'nominal' => 40000,
                'created_at' => '2025-07-10 14:45:00',
                'updated_at' => '2025-07-10 14:45:00'
            ],
            [
                'id' => null,
                'tanggal' => '2025-07-11',
                'nominal' => 50000,
                'created_at' => '2025-07-11 16:00:00',
                'updated_at' => '2025-07-11 16:00:00'
            ],
            [
                'id' => null,
                'tanggal' => '2025-07-12',
                'nominal' => 15000,
                'created_at' => '2025-07-12 11:15:00',
                'updated_at' => '2025-07-12 11:15:00'
            ],
            [
                'id' => null,
                'tanggal' => '2025-07-13',
                'nominal' => 22000,
                'created_at' => '2025-07-13 09:20:00',
                'updated_at' => '2025-07-13 09:20:00'
            ],
            [
                'id' => null,
                'tanggal' => '2025-07-14',
                'nominal' => 18000,
                'created_at' => '2025-07-14 12:00:00',
                'updated_at' => '2025-07-14 12:00:00'
            ],
            [
                'id' => null,
                'tanggal' => '2025-07-15',
                'nominal' => 27000,
                'created_at' => '2025-07-15 13:30:00',
                'updated_at' => '2025-07-15 13:30:00'
            ],
            [
                'id' => null,
                'tanggal' => '2025-07-16',
                'nominal' => 33000,
                'created_at' => '2025-07-16 17:45:00',
                'updated_at' => '2025-07-16 17:45:00'
            ]
        ];

        $this->db->table('diskon')->insertBatch($data);
    }
}
