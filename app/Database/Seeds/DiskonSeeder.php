<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DiskonSeeder extends Seeder
{
    public function run()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('diskon');

        $startDate = new \DateTime('2025-06-25');
        $createdAt = date('Y-m-d H:i:s', strtotime('2025-06-25 06:01:35'));

        for ($i = 0; $i < 10; $i++) {
            $tanggal = $startDate->format('Y-m-d');
            $nominal = rand(100000, 500000); // nilai acak contoh

            $builder->insert([
                'tanggal'    => $tanggal,
                'nominal'    => $nominal,
                'created_at' => $createdAt,
                'updated_at' => null,
            ]);

            $startDate->modify('+1 day');
        }
    }
}