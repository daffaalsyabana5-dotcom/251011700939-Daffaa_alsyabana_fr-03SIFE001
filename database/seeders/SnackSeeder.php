<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SnackSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('snacks')->insert([
            [
                'name' => 'Kripik Singkong Balado',
                'flavor' => 'Pedas Manis',
                'price' => 15000,
                'weight' => '250 gram',
                'image' => 'keripik.jpg',
                'description' => 'Kripik singkong renyah dengan bumbu balado khas yang gurih, renyah, dan pedas nikmat.'
            ],
            [
                'name' => 'Kue Nastar Premium',
                'flavor' => 'Original Nanas',
                'price' => 50000,
                'weight' => '500 gram',
                'image' => 'nastar.jpg',
                'description' => 'Kue kering nastar berkualitas tinggi dengan selai nanas pilihan yang lumer di mulut.'
            ],
            [
                'name' => 'semprong',
                'flavor' => 'original',
                'price' => 20000,
                'weight' => '250 gram',
                'image' => 'semprong.jpg',
                'description' => 'Semprong khas dengan rasa original yang lezat dan renyah.'
            ],
            [
                'name' => 'kue putri salju',
                'flavor' => 'kue kering putri salju',
                'price' => 30000,
                'weight' => '300 gram',
                'image' => 'kue.jpg',
                'description' => 'Kue kering putri salju yang lembut dan manis, dilapisi gula halus yang menggoda selera.'
            ],
            [
                'name' => 'cokelat mede',
                'flavor' => 'cokelat mede',
                'price' => 40000,
                'weight' => '200 gram',
                'image' => 'cokelat.jpg',
                'description' => 'Cokelat mede premium dengan rasa manis dan gurih, cocok untuk camilan atau oleh-oleh.'    
            ],
            [
                'name' => 'cookies tabur wijen',
                'flavor' => 'cookies tabur wijen',
                'price' => 25000,
                'weight' => '250 gram',
                'image' => 'cookies.jpg',
                'description' => 'Cookies renyah dengan taburan wijen yang memberikan aroma dan rasa    khas, cocok untuk menemani teh atau kopi.'  
            ]
        ]);
    }
}