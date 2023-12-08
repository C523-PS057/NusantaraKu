<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Budaya;
use App\Models\Province;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Province::factory(1)->create();
        User::create([
            'name' => 'Muhammad Zahran',
            'email' => 'muhammadzahran02@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('1'),
        ]);
        User::create([
            'name' => 'Agrey Tosira',
            'email' => 'agreytosira@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('1'),
        ]);
        Budaya::create([
            'category_name' => 'Masakan Khas',
        ]);
        Budaya::create([
            'category_name' => 'Alat Musik',
        ]);
        Budaya::create([
            'category_name' => 'Pakaian Adat',
        ]);
        Budaya::create([
            'category_name' => 'Rumah Adat',
        ]);
        Budaya::create([
            'category_name' => 'Tari Tradisional',
        ]);
        Province::create([
            'id' => 1,
            'province_name' => 'Aceh',
            'video_link' => 'https://www.youtube.com/embed/Dxy-fm2ep7A?si=gFxc-tUy_9Y5sIoU',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]);
        Province::create([
            'id' => 2,
            'province_name' => 'Bali',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]);
        Province::create([
            'id' => 3,
            'province_name' => 'Bangka Belitung',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]);
        Province::create([
            'id' => 4,
            'province_name' => 'Banten',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]);
        Province::create([
            'id' => 5,
            'province_name' => 'Bengkulu',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]);
        Province::create([
            'id' => 6,
            'province_name' => 'DKI Jakarta',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]);
        Province::create([
            'id' => 7,
            'province_name' => 'Gorontalo',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]);
        Province::create([
            'id' => 8,
            'province_name' => 'Jambi',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 9,
            'province_name' => 'Jawa Barat',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 10,
            'province_name' => 'Jawa Tengah',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 11,
            'province_name' => 'Jawa Timur',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 12,
            'province_name' => 'Kalimantan Barat',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 13,
            'province_name' => 'Kalimantan Selatan',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 14,
            'province_name' => 'Kalimantan Tengah',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 15,
            'province_name' => 'Kalimantan Timur',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 16,
            'province_name' => 'Kalimantan Utara',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 17,
            'province_name' => 'Kepulauan Riau',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 18,
            'province_name' => 'Lampung',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 19,
            'province_name' => 'Maluku',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 20,
            'province_name' => 'Maluku Utara',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 21,
            'province_name' => 'Nusa Tenggara Timur',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 22,
            'province_name' => 'Nusa Tenggara Barat',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 23,
            'province_name' => 'Papua',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 24,
            'province_name' => 'Papua Barat',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 25,
            'province_name' => 'Papua Barat Daya',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 26,
            'province_name' => 'Papua Pegunungan',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 27,
            'province_name' => 'Papua Selatan',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 28,
            'province_name' => 'Papua Tengah',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 29,
            'province_name' => 'Riau',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 30,
            'province_name' => 'Sulawesi Barat',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 31,
            'province_name' => 'Sulawesi Selatan',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 32,
            'province_name' => 'Sulawesi Tengah',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 33,
            'province_name' => 'Sulawesi Tenggara',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 34,
            'province_name' => 'Sulawesi Utara',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 35,
            'province_name' => 'Sulawesi Barat',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 36,
            'province_name' => 'Sulawesi Selatan',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 37,
            'province_name' => 'Sumatera Utara',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
        Province::create([
            'id' => 38,
            'province_name' => 'Yogyakarta',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]); 
    }
}