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

        // \App\Models\Province::factory(1)->create();
        User::create([
            'name' => 'Muhammad Zahran',
            'email' => 'muhammadzahran02@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('1'),
        ]);
        Budaya::create([
            'category_name' => 'Masakan',
        ]);
        Budaya::create([
            'category_name' => 'Musik',
        ]);
        Budaya::create([
            'category_name' => 'Pakaian',
        ]);
        Budaya::create([
            'category_name' => 'Rumah Adat',
        ]);
        Budaya::create([
            'category_name' => 'Tarian',
        ]);
        Province::create([
            'province_name' => 'Aceh',
            'video_link' => 'https://www.youtube.com/embed/Dxy-fm2ep7A?si=gFxc-tUy_9Y5sIoU',
            'deskripsi' => 'Aceh (Jawi: اچيه دارالسلام) adalah sebuah provinsi di Indonesia yang ibu kotanya berada di Banda Aceh. Aceh merupakan salah satu provinsi di Indonesia yang diberi status sebagai daerah istimewa dan juga diberi kewenangan otonomi khusus. Aceh terletak di ujung utara pulau Sumatra dan merupakan provinsi paling barat di Indonesia. Menurut hasil sensus Badan Pusat Statistik tahun 2021, jumlah penduduk provinsi ini sekitar 5.333.733 jiwa.[13] Letaknya dekat dengan Kepulauan Andaman dan Nikobar di India dan terpisahkan oleh Laut Andaman. Aceh berbatasan dengan Teluk Benggala dan Laut Andaman di sebelah utara, Samudra Hindia di sebelah barat, Selat Malaka di sebelah timur, dan Sumatera Utara di sebelah tenggara dan selatan.

            Aceh dianggap sebagai tempat dimulainya penyebaran Islam di Indonesia dan memainkan peran penting dalam penyebaran Islam di Asia Tenggara. Pada awal tahun 710–1522 M, Kesultanan Samudera Pasai adalah status Wilayah protektorat Kesultanan Utsmaniyah (1569–1903) lalu menjadi Kesultanan Aceh saat itu adalah negara terkaya, terkuat, dan termakmur di kawasan Selat Malakas',

            'sejarah' => 'Aceh telah dihuni manusia sejak zaman Mesolitikum. Hal ini dibuktikan dengan keberadaan situs Bukit Kerang yang diklaim sebagai peninggalan zaman tersebut di kabupaten Aceh Tamiang. Selain itu, pada Situs Desa Pangkalan juga telah dilakukan ekskavasi serta berhasil ditemukan artefak peninggalan dari zaman Mesolitikum berupa kapak Sumatralith, fragmen gigi manusia, tulang badak, dan beberapa peralatan sederhana lainnya.

            Selain di kabupaten Aceh Tamiang, peninggalan kehidupan prasejarah di Aceh juga ditemukan di dataran tinggi Gayo tepatnya di Ceruk Mendale dan Ceruk Ujung Karang yang terdapat disekitar Danau Laut Tawar. Penemuan situs prasejarah ini mengungkapkan bukti adanya hunian manusia prasejarah yang telah berlangsung di sini pada sekitar 7.400 hingga 5.000 tahun yang lalu.'
        ]);
    }
}
