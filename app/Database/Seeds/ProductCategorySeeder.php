<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Sepatu Bola',
                'description' => 'Koleksi sepatu bola berbagai merek dan ukuran',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Jersey Klub',
                'description' => 'Jersey asli dan KW berbagai klub bola',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Perlengkapan Gym',
                'description' => 'Alat-alat untuk fitness dan latihan beban',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('product_category')->insertBatch($data);
    }
}