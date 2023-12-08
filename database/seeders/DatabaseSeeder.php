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

        $gambarDefaultPath = public_path('img/user-profile-default.svg');
        User::create([
            'name' => 'Muhamad Zahran Yudha',
            'email' => 'muhammadzahran02@gmail.com',
            'email_verified_at' => now(),
            'role' => 'admin',
            'password' => bcrypt('1'),
            'gambar' => Storage::putFile('/public/images', $gambarDefaultPath),
        ]);
        User::create([
            'name' => 'Agrey Tosira',
            'email' => 'agreytosira@gmail.com',
            'email_verified_at' => now(),
            'role' => 'admin',
            'gambar' => Storage::putFile('/public/images', $gambarDefaultPath),
            'password' => bcrypt('1'),
        ]);
        Budaya::create([
            'id' => 1,
            'category_name' => 'Masakan Khas',
        ]);
        Budaya::create([
            'id' => 2,
            'category_name' => 'Alat Musik',
        ]);
        Budaya::create([
            'id' => 3,
            'category_name' => 'Pakaian Adat',
        ]);
        Budaya::create([
            'id' => 4,
            'category_name' => 'Rumah Adat',
        ]);
        Budaya::create([
            'id' => 5,
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
            'video_link' => 'https://www.youtube.com/embed/I0yMwO8RbHg?si=nz0Ut7ci03Wl0IhI',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]);
        Province::create([
            'id' => 3,
            'province_name' => 'Bangka Belitung',
            'video_link' => 'https://www.youtube.com/embed/RHijwy_4FrQ?si=hdDUoqQ0Prql9lOs',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]);
        Province::create([
            'id' => 4,
            'province_name' => 'Banten',
            'video_link' => 'https://www.youtube.com/embed/l73jj4HHT_w?si=R5eH88LfYhyvIjwb',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]);
        Province::create([
            'id' => 5,
            'province_name' => 'Bengkulu',
            'video_link' => 'https://www.youtube.com/embed/MihlQxipfFc?si=CDPxbFqCeJPjRiy-',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]);
        Province::create([
            'id' => 6,
            'province_name' => 'DKI Jakarta',
            'video_link' => 'https://www.youtube.com/embed/xOT4ypSOZnQ?si=PxC2KXZQ8eHWKsjv',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]);
        Province::create([
            'id' => 7,
            'province_name' => 'Gorontalo',
            'video_link' => 'https://www.youtube.com/embed/P5roVPbvea0?si=mS4mp99QKPN1w_lp',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]);
        Province::create([
            'id' => 8,
            'province_name' => 'Jambi',
            'video_link' => 'https://www.youtube.com/embed/scu0Je0_OnQ?si=htjQxfQA3dbb3Htk',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]);
        Province::create([
            'id' => 9,
            'province_name' => 'Jawa Barat',
            'video_link' => 'https://www.youtube.com/embed/SuBRa8wotrM?si=ngNTVCY9I8UOvYwG',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]);
        Province::create([
            'id' => 10,
            'province_name' => 'Jawa Tengah',
            'video_link' => 'https://www.youtube.com/embed/mzjjFKli9Gg?si=AFvn3eXJ_VQwWdhe',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]);
        Province::create([
            'id' => 11,
            'province_name' => 'Jawa Timur',
            'video_link' => 'https://www.youtube.com/embed/6XhIZdbzfgI?si=JvQXwyK4AwmTjP9Y',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]);
        Province::create([
            'id' => 12,
            'province_name' => 'Kalimantan Barat',
            'video_link' => 'https://www.youtube.com/embed/sV_a_D32X5s?si=X9Dutltq8kftHIuG',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]);
        Province::create([
            'id' => 13,
            'province_name' => 'Kalimantan Selatan',
            'video_link' => 'https://www.youtube.com/embed/wfy8oJHDDdY?si=UfVd0f0VIZmKoKQd',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]);
        Province::create([
            'id' => 14,
            'province_name' => 'Kalimantan Tengah',
            'video_link' => 'https://www.youtube.com/embed/tmd90h2UFNQ?si=LFv1jckjCObCaD7a',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]);
        Province::create([
            'id' => 15,
            'province_name' => 'Kalimantan Timur',
            'video_link' => 'https://www.youtube.com/embed/pBELxlrfqPY?si=Zu4Zf74PfR1fw-Ur',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]);
        Province::create([
            'id' => 16,
            'province_name' => 'Kalimantan Utara',
            'video_link' => 'https://www.youtube.com/embed/YgB2yLdC6mg?si=yqBVXCFaoaJq4Qz6',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]);
        Province::create([
            'id' => 17,
            'province_name' => 'Kepulauan Riau',
            'video_link' => 'https://www.youtube.com/embed/ppQEGUJtmws?si=N6duj3Bp73F1EjRz',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]);
        Province::create([
            'id' => 18,
            'province_name' => 'Lampung',
            'video_link' => 'https://www.youtube.com/embed/1pwCYEzUPH0?si=zvp-7GTGc7kec_lC',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]);
        Province::create([
            'id' => 19,
            'province_name' => 'Maluku',
            'video_link' => 'https://www.youtube.com/embed/-WpmUWOhkK4?si=BzOfTllVcZxakT3g',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]);
        Province::create([
            'id' => 20,
            'province_name' => 'Maluku Utara',
            'video_link' => 'https://www.youtube.com/embed/JlBDaQ_Ovis?si=SVtDtyfS2SSlZo9K',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]);
        Province::create([
            'id' => 21,
            'province_name' => 'Nusa Tenggara Timur',
            'video_link' => 'https://www.youtube.com/embed/wIIZYR3EL0I?si=o-VrERsfeF2dKXqo',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]);
        Province::create([
            'id' => 22,
            'province_name' => 'Nusa Tenggara Barat',
            'video_link' => 'https://www.youtube.com/embed/zp6-JQ5olA4?si=uKNZPzXxlcUfAzDF',
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
            'province_name' => 'Sumatera Barat',
            'video_link' => '#',
            'deskripsi' => 'kosong',
            'sejarah' => 'kosong'
        ]);
        Province::create([
            'id' => 36,
            'province_name' => 'Sumatera Selatan',
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