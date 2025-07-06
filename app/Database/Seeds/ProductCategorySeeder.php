<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'        => 'Elektronik',
                'description' => 'Barang-barang elektronik rumah tangga',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s')
            ],
            [
                'name'        => 'Pakaian',
                'description' => 'Kategori untuk pakaian pria dan wanita',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s')
            ],
            [
                'name'        => 'Makanan',
                'description' => 'Produk makanan dan minuman',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s')
            ],
        ];

        $this->db->table('product_category')->insertBatch($data);
    }
}
