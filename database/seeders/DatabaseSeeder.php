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
            'password' => bcrypt('12345678'),
            'gambar' => Storage::putFile('/public/images', $gambarDefaultPath),
        ]);
        User::create([
            'name' => 'Agrey Tosira',
            'email' => 'agreytosira@gmail.com',
            'email_verified_at' => now(),
            'role' => 'admin',
            'gambar' => Storage::putFile('/public/images', $gambarDefaultPath),
            'password' => bcrypt('12345678'),
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
            'deskripsi' => 'Aceh (Jawi: اچيه دارالسلام) adalah sebuah provinsi di Indonesia yang ibu kotanya berada di Banda Aceh. Aceh merupakan salah satu provinsi di Indonesia yang diberi status sebagai daerah istimewa dan juga diberi kewenangan otonomi khusus. Aceh terletak di ujung utara pulau Sumatra dan merupakan provinsi paling barat di Indonesia. Menurut hasil sensus Badan Pusat Statistik tahun 2021, jumlah penduduk provinsi ini sekitar 5.333.733 jiwa. Letaknya dekat dengan Kepulauan Andaman dan Nikobar di India dan terpisahkan oleh Laut Andaman. Aceh berbatasan dengan Teluk Benggala dan Laut Andaman di sebelah utara, Samudra Hindia di sebelah barat, Selat Malaka di sebelah timur, dan Sumatera Utara di sebelah tenggara dan selatan.',

            'sejarah' => 'Aceh pertama dikenal dengan nama Aceh Darussalam (1511–1945). Provinsi ini dibentuk pada 1956 dengan nama Aceh sebelum diubah menjadi Daerah Istimewa Aceh (1959–2001), Nanggroe Aceh Darussalam (2001–2009), dan kembali ke Aceh sejak 2009. Sebelumnya, nama Aceh biasa ditulis Acheh, Atjeh, dan Achin.
            Aceh telah dihuni manusia sejak zaman Mesolitikum. Hal ini dibuktikan dengan keberadaan situs Bukit Kerang yang diklaim sebagai peninggalan zaman tersebut di kabupaten Aceh Tamiang. Selain itu, pada Situs Desa Pangkalan juga telah dilakukan ekskavasi serta berhasil ditemukan artefak peninggalan dari zaman Mesolitikum berupa kapak Sumatralith, fragmen gigi manusia, tulang badak, dan beberapa peralatan sederhana lainnya.'
        ]);
        Province::create([
            'id' => 2,
            'province_name' => 'Bali',
            'video_link' => 'https://www.youtube.com/embed/I0yMwO8RbHg?si=nz0Ut7ci03Wl0IhI',
            'deskripsi' => 'Bali (juga dikenal sebagai Kepulauan Bali, Bali: ᬩᬮᬶ) adalah sebuah wilayah provinsi yang terletak di Indonesia. Ibu kotanya adalah Denpasar. Provinsi Bali terletak di bagian barat Kepulauan Nusa Tenggara. Di awal kemerdekaan Indonesia, pulau ini termasuk dalam Provinsi Sunda Kecil yang beribu kota di Singaraja, dan kini terbagi menjadi 3 provinsi, yakni Bali, Nusa Tenggara Barat, dan Nusa Tenggara Timur . Pada tahun 2020, penduduk provinsi Bali berjumlah 4.317.404 jiwa, dengan kepadatan 747 jiwa/km2.',

            'sejarah' => 'Jepang menduduki Bali selama Perang Dunia II dan saat itu seorang perwira militer bernama I Gusti Ngurah Rai membentuk pasukan Bali pejuang kemerdekaan. Menyusul menyerahnya Jepang di Pasifik pada bulan Agustus 1945, Belanda segera kembali ke Indonesia (termasuk Bali) untuk menegakkan kembali pemerintahan kolonialnya layaknya keadaan sebelum perang. Hal ini ditentang oleh pasukan perlawanan Bali yang saat itu menggunakan senjata Jepang.

            Pada 20 November 1946, pecahlah pertempuran Puputan Margarana yang terjadi di Uma Kaang, Desa Marga, Kabupaten Tabanan, Bali. Kolonel I Gusti Ngurah Rai yang berusia 29 tahun, memimpin tentaranya dari wilayah timur Bali untuk melakukan serangan sampai mati pada pasukan Belanda yang bersenjata lengkap. Seluruh anggota batalion Bali tersebut tewas dan menjadikannya sebagai perlawanan militer Bali yang terakhir.

            Pada tahun 1946, Belanda menjadikan Bali sebagai salah satu dari 13 wilayah bagian dari Negara Indonesia Timur yang baru diproklamasikan, yaitu sebagai salah satu negara saingan bagi Republik Indonesia yang diproklamasikan dan dikepalai oleh Sukarno dan Hatta. Bali kemudian juga dimasukkan ke dalam Republik Indonesia Serikat ketika Belanda mengakui kemerdekaan Indonesia pada 29 Desember 1949. Tahun 1950, secara resmi Bali meninggalkan perserikatannya dengan Belanda dan secara hukum menjadi sebuah provinsi dari Republik Indonesia.'
        ]);
        Province::create([
            'id' => 3,
            'province_name' => 'Bangka Belitung',
            'video_link' => 'https://www.youtube.com/embed/RHijwy_4FrQ?si=hdDUoqQ0Prql9lOs',
            'deskripsi' => 'Kepulauan Bangka Belitung adalah sebuah provinsi di Indonesia yang terdiri dari dua pulau utama yaitu Pulau Bangka dan Pulau Belitung serta ratusan pulau-pulau kecil, total pulau yang telah bernama berjumlah 470 buah dan yang berpenghuni hanya 50 pulau. Bangka Belitung terletak di bagian timur Pulau Sumatra, dekat dengan Provinsi Sumatera Selatan. Bangka Belitung dikenal sebagai daerah penghasil timah, memiliki pantai yang indah dan kerukunan antar etnis. Ibu kota provinsi ini ialah Pangkalpinang. Pemerintahan provinsi ini disahkan pada tanggal 9 Februari 2001. Setelah dilantiknya Pj. Gubernur yakni H. Amur Muchasim, SH (mantan Sekjen Depdagri) yang menandai dimulainya aktivitas roda pemerintahan provinsi.',

            'sejarah' => 'Wilayah Provinsi Kepulauan Bangka Belitung, terutama Pulau Bangka berganti-ganti menjadi daerah taklukan Kerajaan Sriwijaya dan Majapahit. Setelah kapitulasi dengan Belanda, Kepulauan Bangka Belitung menjadi jajahan Inggris sebagai "Duke of Island". 20 Mei 1812 kekuasaan Inggris berakhir setelah konvensi London 13 Agustus 1824, terjadi peralihan kekuasaan daerah jajahan Kepulauan Bangka Belitung antara MH. Court (Inggris) dengan K. Hcyes (Belanda) di Muntok pada 10 Desember 1816.

            Kekuasaan Belanda mendapat perlawanan Depati Barin dan putranya Depati Amir yang dikenal sebagai perang Depati Amir (1849–1851). Kekalahan perang Depati Amir menyebabkan Depati Amir diasingkan ke Desa Air Mata Kupang NTT. Atas dasar stbl. 565, tanggal 2 Desember 1933 pada tanggal 11 Maret 1933 dibentuk Resindetail Bangka Belitung Onderhoregenheden yang dipimpin seorang residen Bangka Belitung dengan 6 Onderafdehify yang dipimpin oleh Ast. Residen.

            Di Pulau Bangka terdapat 5 Onderafdehify yang akhirnya menjadi 5 keresidenan sedang di Pulau Belitung terdapat 1 keresidenan. Di zaman Jepang, Keresidenan Bangka Belitung diperintah oleh pemerintahan Militer Jepang yang disebut Bangka Beliton Ginseibu. Setelah Proklamasi kemerdekaan Republik Indonesia, oleh Belanda dibentuk Dewan Bangka Sementara pada 10 Desember 1946 (stbl.1946 No.38) yang selanjutnya resmi menjadi Dewan Bangka yang diketuai oleh Musarif Datuk Bandaharo Leo yang dilantik oleh Belanda pada 11 November 1947. Dewan Bangka merupakan Lembaga Pemerintahan Otonomi Tinggi.'
        ]);
        Province::create([
            'id' => 4,
            'province_name' => 'Banten',
            'video_link' => 'https://www.youtube.com/embed/l73jj4HHT_w?si=R5eH88LfYhyvIjwb',
            'deskripsi' => 'Banten adalah sebuah provinsi di Pulau Jawa, Indonesia. Provinsi ini beribu kota di Kota Serang. Provinsi ini merupakan provinsi yang paling barat di Pulau Jawa. Provinsi ini sebelumnya pernah menjadi bagian dari Provinsi Jawa Barat, tetapi provinsi ini menjadi wilayah pemekaran sejak tahun 2000, dengan keputusan Undang-Undang Nomor 23 Tahun 2000. Suku aslinya adalah suku Sunda Banten yang berada di wilayah Kabupaten Serang bagian selatan, Kabupaten Pandeglang, Kabupaten Lebak, serta sebagian besar Kabupaten Tangerang, dan komunitas masyarakat adat yakni suku Badui yang mendiami wilayah Gunung Kendeng dan Leuwidamar di Kabupaten Lebak.',

            'sejarah' => 'Banten atau dahulu dikenal dengan nama Bantam pada masa lalu merupakan sebuah daerah dengan kota pelabuhan yang sangat ramai, serta dengan masyarakat yang terbuka dan makmur. Banten pada abad ke-5 merupakan bagian dari Kerajaan Tarumanagara. Salah satu prasasti peninggalan Kerajaan Tarumanagara adalah Prasasti Cidanghiyang atau prasasti Lebak, yang ditemukan di Kampung Lebak di tepi Ci Danghiyang, Kecamatan Munjul, Pandeglang, Banten. Prasasti ini baru ditemukan tahun 1947, dan berisi 2 baris kalimat berbentuk puisi dengan huruf Pallawa dan bahasa Sanskerta. Isi prasasti tersebut mengagungkan keberanian Raja Purnawarman. Setelah runtuhnya Kerajaan Tarumanagara (menurut beberapa sejarawan ini akibat serangan Kerajaan Sriwijaya), kekuasaan di bagian barat Pulau Jawa dari Ujung Kulon sampai Ci Sarayu dan Ci Pamali dilanjutkan oleh Kerajaan Sunda. Seperti dinyatakan oleh Tome Pires, penjelajah Portugis pada tahun 1513, Bantam menjadi salah satu pelabuhan penting dari Kerajaan Sunda. Menurut sumber Portugis tersebut, Bantam adalah salah satu pelabuhan kerajaan itu selain pelabuhan Pontang, Cigede, Tamgara (Tangerang), Kalapa, dan Cimanuk.'
        ]);
        Province::create([
            'id' => 5,
            'province_name' => 'Bengkulu',
            'video_link' => 'https://www.youtube.com/embed/MihlQxipfFc?si=CDPxbFqCeJPjRiy-',
            'deskripsi' => 'Bengkulu adalah sebuah wilayah provinsi yang berada di Pulau Sumatra, Indonesia. Ibu kota provinsi Bengkulu terletak di kota Bengkulu. Provinsi ini terletak di bagian Barat Daya Pulau Sumatra dan pantai barat di bagian Selatan Pulau Sumatra yang berbatasan langsung dengan provinsi Sumatera Barat, Jambi, Sumatera Selatan dan Lampung di wilayah sekitarnya. Pada tahun 2020, jumlah penduduk provinsi ini sebanyak 2.091.314 jiwa, dengan kepadatan 105 jiwa/km².',

            'sejarah' => 'Di wilayah Bengkulu pernah berdiri kerajaan-kerajaan yang berdasarkan etnis seperti Kerajaan Sungai Serut, Kerajaan Selebar, Kerajaan Pat Petulai, Kerajaan Balai Buntar, Kerajaan Sungai Lemau, Kerajaan Sekiris, Kerajaan Gedung Agung, dan Kerajaan Marau Riang. Di bawah Kesultanan Banten, mereka menjadi vazal. Sebagian wilayah Bengkulu, juga pernah berada di bawah kekuasaan Kerajaan Inderapura semenjak abad ke-17.

            British East India Company (EIC) sejak 1685 mendirikan pusat perdagangan lada. Bencoolen/Coolen yang berasal dari bahasa Inggris Cut Land yang berarti tanah patah wilayah ini adalah wilayah patahan gempa bumi yang paling aktif di dunia dan kemudian gudang penyimpanan di tempat yang sekarang menjadi Kota Bengkulu. Saat itu, ekspedisi EIC dipimpin oleh Ralph Ord dan William Cowley untuk mencari pengganti pusat perdagangan lada setelah Pelabuhan Banten jatuh ke tangan VOC, dan EIC dilarang berdagang di sana. Traktat dengan Kerajaan Selebar pada tanggal 12 Juli 1685 mengizinkan Inggris untuk mendirikan benteng dan berbagai gedung perdagangan. Benteng York didirikan tahun 1685 di sekitar muara Sungai Serut.'
        ]);
        Province::create([
            'id' => 6,
            'province_name' => 'DKI Jakarta',
            'video_link' => 'https://www.youtube.com/embed/xOT4ypSOZnQ?si=PxC2KXZQ8eHWKsjv',
            'deskripsi' => 'Jakarta, secara resmi bernama Daerah Khusus Ibukota Jakarta atau DKI Jakarta adalah ibu kota Indonesia dan sekaligus daerah otonom setingkat provinsi. Jakarta memiliki lima kota administrasi dan satu kabupaten administrasi. Sementara menurut pengertian secara umum, Jakarta merupakan kota metropolitan. Jakarta terletak di pesisir bagian barat laut Pulau Jawa. Dahulu pernah dikenal sebagai Sunda Kelapa, Jayakarta, dan Batavia. Jakarta juga mempunyai julukan The Big Durian karena dianggap kota yang sebanding dengan New York City (Big Apple).

            Jakarta memiliki luas sekitar 664,01 km² (lautan: 6.977,5 km²), dengan penduduk berjumlah 11.240.000 jiwa pada tahun 2023. sSebagai pusat bisnis, politik, dan kebudayaan, Jakarta merupakan tempat berdirinya kantor-kantor pusat BUMN, perusahaan swasta, dan perusahaan asing. Kota ini juga menjadi tempat kedudukan lembaga-lembaga pemerintahan dan kantor sekretariat ASEAN. Jakarta dilayani oleh dua bandar udara, yaitu Bandara Soekarno–Hatta dan Bandara Halim Perdanakusuma, serta tiga pelabuhan laut, yaitu Tanjung Priok, Sunda Kelapa, dan Ancol.',

            'sejarah' => 'Jakarta pertama kali dikenal sebagai salah satu pelabuhan Kerajaan Sunda yang bernama Sunda Kalapa, berlokasi di muara Sungai Ciliwung. Ibu kota Kerajaan Sunda yang dikenal sebagai Dayeuh Pakuan Padjadjaran atau Pajajaran (sekarang Bogor) dapat ditempuh dari pelabuhan Sunda Kelapa selama dua hari perjalanan.

            Menurut sumber Portugis, Sunda Kalapa merupakan salah satu pelabuhan yang dimiliki Kerajaan Sunda selain pelabuhan Banten, Pontang, Cigede, Tamgara dan Cimanuk. Sunda Kelapa yang dalam teks ini disebut Kalapa dianggap pelabuhan yang terpenting karena dapat ditempuh dari ibu kota kerajaan yang disebut dengan nama Dayo (dalam bahasa Sunda modern: dayeuh yang berarti "ibu kota") dalam tempo dua hari.

            Kerajaan Sunda sendiri merupakan kelanjutan dari Kerajaan Tarumanagara pada abad ke-5 sehingga pelabuhan ini diperkirakan telah ada sejak abad ke-5 dan diperkirakan merupakan ibu kota Tarumanagara yang disebut Sundapura (bahasa Sanskerta yang berarti "Kota Sunda".'
        ]);
        Province::create([
            'id' => 7,
            'province_name' => 'Gorontalo',
            'video_link' => 'https://www.youtube.com/embed/P5roVPbvea0?si=mS4mp99QKPN1w_lp',
            'deskripsi' => 'Gorontalo ( Jawi: ڬورونتالو) adalah sebuah provinsi di Indonesia yang terletak di bagian utara Pulau Sulawesi. Provinsi Gorontalo kemudian lahir pada tanggal 5 Desember 2000 berdasarkan Undang-Undang Nomor 38 tahun 2000.
            Kota Gorontalo kemudian ditetapkan sebagai ibu kota Provinsi Gorontalo, sekaligus menjadi pusat pemerintahan, pusat ekonomi dan perdagangan terbesar di Kawasan Teluk Tomini. Adapun jumlah penduduk Provinsi Gorontalo sebanyak 1.171.681 jiwa (Sensus BPS, 2020), dengan laju pertumbuhan penduduk sebesar 1.16% setiap tahunnya.
            Mayoritas penduduk di daerah ini merupakan Suku Gorontalo, sekaligus menjadi suku dengan populasi terbanyak di wilayah semenanjung utara Pulau Sulawesi, diikuti oleh Suku Minahasa di urutan kedua. Suku Gorontalo juga merupakan suku pengembara yang populasinya banyak dijumpai di Sulawesi Utara, Sulawesi Tengah, Sulawesi Selatan, Kalimantan Timur, Jawa dan Papua.',

            'sejarah' => 'Berdasarkan penelitian Badan Arkeologi Manado, Sulawesi Utara, ditemukan bahwa Gorontalo memiliki situs peradaban masa prasejarah yang berada di wilayah selatan Gorontalo. Tempat penelitian tersebut kemudian diberi nama "Situs Oluhuta", yang merupakan sebuah situs prasejarah dengan perkiraan usia lebih dari 2000 tahun.
            Adapun penelitian lebih lanjut masih terus berlangsung untuk mengetahui usia peninggalan benda-benda masa prasejarah yang ada serta beberapa makam prasejarah yang berada di dalamnya.'
        ]);
        Province::create([
            'id' => 8,
            'province_name' => 'Jambi',
            'video_link' => 'https://www.youtube.com/embed/scu0Je0_OnQ?si=htjQxfQA3dbb3Htk',
            'deskripsi' => 'Jambi (Jawi: جمبي) adalah sebuah provinsi di Indonesia yang terletak di pesisir timur, di bagian tengah pulau Sumatra, ibu kotanya berada di kota Jambi. Provinsi dengan luas wilayah 50.160,05 km2 ini, pada pertengahan tahun 2023 memiliki jumlah penduduk 3.726.004 jiwa. Provinsi Jambi adalah nama provinsi di Indonesia yang ibu kotanya memiliki nama sama dengan provinsi selain Bengkulu, Daerah Khusus Ibukota Jakarta, Daerah Istimewa Yogyakarta, dan Gorontalo.',
            'sejarah' => 'Provinsi Jambi secara geografis berada di pesisir timur persis di tengah Pulau Sumatra, ibu kotanya berada di kota Jambi. Provinsi Jambi adalah nama provinsi di Indonesia yang ibu kotanya memiliki nama sama dengan provinsi, selain Bengkulu, Daerah Khusus Ibukota Jakarta, Daerah Istimewa Yogyakarta, dan Gorontalo.

            Jambi merupakan wilayah yang terkenal dalam literatur kuno. Nama negeri ini sering disebut dalam prasasti-prasasti dan juga berita-berita Tiongkok. Ini merupakan bukti bahwa, orang Cina telah lama memiliki hubungan dengan Jambi, yang mereka sebut dengan nama Chan-pei. Diperkirakan, telah berdiri tiga kerajaan Melayu Kuno di Jambi, yaitu Kerajaan Koying (abad ke-3 M), Tupo (abad ke-3 M) dan Kerajaan Kandali/ Kantoli (abad ke-5). Seiring perkembangan sejarah, kerajaan-kerajaan ini lenyap tanpa banyak meninggalkan jejak sejarah.'
        ]);
        Province::create([
            'id' => 9,
            'province_name' => 'Jawa Barat',
            'video_link' => 'https://www.youtube.com/embed/SuBRa8wotrM?si=ngNTVCY9I8UOvYwG',
            'deskripsi' => 'Jawa Barat adalah sebuah provinsi di Indonesia yang terletak di bagian barat pulau Jawa, dengan ibu kota provinsi di Kota Bandung. Jawa Barat berbatasan dengan provinsi Banten dan wilayah ibu kota Jakarta di sebelah barat, Laut Jawa di utara, Provinsi Jawa Tengah di timur, dan Samudera Hindia di sebelah selatan.',
            'sejarah' => 'Temuan arkeologi di Anyer menunjukkan adanya budaya logam perunggu dan besi sebelum milenium pertama. Gerabah tanah liat prasejarah zaman buni (Bekasi kuno) bisa ditemukan merentang dari Anyer sampai Cirebon.[butuh rujukan]

            Wilayah Jawa Barat pada abad ke-5 merupakan bagian dari Kerajaan Tarumanagara. Prasasti peninggalan Kerajaan Tarumanagara banyak tersebar di Jawa Barat. Ada tujuh prasasti yang ditulis dalam aksara Wengi (yang digunkan dalam masa Palawa India) dan bahasa Sansakerta yang sebagian besar menceritakan para raja Tarumanagara.

            Setelah runtuhnya kerajaan Tarumanagara, kekuasaan di bagian barat Pulau Jawa dari Ujung Kulon sampai Kali Serayu dilanjutkan oleh Kerajaan Sunda[butuh rujukan]. Salah satu prasasti dari zaman Kerajaan Sunda adalah prasasti Kebon Kopi II yang berasal dari tahun 932. Kerajaan Sunda beribu kota di Pakuan Pajajaran (sekarang kota Bogor).'
        ]);
        Province::create([
            'id' => 10,
            'province_name' => 'Jawa Tengah',
            'video_link' => 'https://www.youtube.com/embed/mzjjFKli9Gg?si=AFvn3eXJ_VQwWdhe',
            'deskripsi' => 'Jawa Tengah (disingkat Jateng, Jawa: ꦗꦮꦶ​ꦩꦢꦾ, Pegon: جاوي مـديا, translit. Jawi Madya) adalah sebuah wilayah provinsi di Indonesia yang terletak di bagian tengah Pulau Jawa. Ibu kota dari Provinsi Jawa Tengah adalah Kota Semarang. Provinsi ini berbatasan dengan Provinsi Jawa Barat di sebelah barat, Samudra Hindia beserta Daerah Istimewa Yogyakarta di sebelah selatan, Provinsi Jawa Timur di sebelah timur, dan Laut Jawa di sebelah utara. Luas wilayahnya 32.800,69 km², atau sekitar 28,94% dari luas pulau Jawa. Provinsi Jawa Tengah juga meliputi Pulau Nusakambangan di sebelah selatan (dekat dengan perbatasan Jawa Barat), serta Kepulauan Karimun Jawa di Laut Jawa. Penduduk Jawa Tengah berdasarkan Badan Pusat Statistik tahun 2021 berjumlah 36.516.035 jiwa dengan kepadatan 1.113,00 jiwa/km².',

            'sejarah' => 'Jawa Tengah sebagai provinsi dibentuk sejak zaman Hindia Belanda. Hingga tahun 1905, Jawa Tengah terdiri atas 5 wilayah (gewesten), yakni Semarang, Pati, Kedu, Banyumas, dan Pekalongan. Surakarta masih merupakan daerah swapraja kerajaan (vorstenland) yang berdiri sendiri dan terdiri dari dua wilayah, Kasunanan Surakarta dan Mangkunegaran, sebagaimana Yogyakarta. Masing-masing gewest terdiri atas kabupaten-kabupaten. Waktu itu Pati Gewest juga meliputi Regentschap Tuban dan Bojonegoro.

            Setelah diberlakukannya Decentralisatie Besluit tahun 1905, gewesten diberi otonomi dan dibentuk dewan daerah. Selain itu juga dibentuk gemeente (kotapraja) yang otonom, yaitu Pekalongan, Tegal, Semarang, Salatiga, dan Magelang.

            Sejak tahun 1930, provinsi ditetapkan sebagai daerah otonom yang juga memiliki Dewan Provinsi (Provinciale Raad). Provinsi terdiri atas beberapa karesidenan (residentie), yang meliputi beberapa kabupaten (regentschap), dan dibagi lagi dalam beberapa kawedanan (district). Provinsi Jawa Tengah terdiri atas 5 karesidenan, yaitu Pekalongan, Pati, Semarang, Banyumas, dan Kedu.'
        ]);
        Province::create([
            'id' => 11,
            'province_name' => 'Jawa Timur',
            'video_link' => 'https://www.youtube.com/embed/6XhIZdbzfgI?si=JvQXwyK4AwmTjP9Y',
            'deskripsi' => 'Jawa Timur (disingkat Jatim, Jawa: ꦙꦮꦶꦮꦺꦠꦤ꧀, Pegon: جاوي وَيتان, translit. Jawi Wétan, Madura: Jhâbâ Tèmor) adalah sebuah wilayah provinsi yang terletak di bagian timur Pulau Jawa, Indonesia. Ibu kotanya adalah Kota Surabaya. Luas wilayahnya yakni 48.033 km², dengan jumlah penduduk sebanyak 41.149.974 jiwa (tahun 2022) dan kepadatan penduduk 857 jiwa/km2. Hampir seperempat dari jumlah penduduk Jawa Timur bermukim di wilayah metropolitan Surabaya.',

            'sejarah' => 'Prasasti Dinoyo yang ditemukan di dekat Kota Malang adalah sumber tertulis tertua di Jawa Timur, yakni bertahun 760. Pada tahun 929, Mpu Sindok memindahkan pusat Kerajaan Mataram dari Jawa Tengah ke Jawa Timur yakni di "Bumi Anjuk Ladang", yang sekarang menjadi Kabupaten Nganjuk serta mendirikan Wangsa Isyana yang kelak berkembang menjadi Kerajaan Medang, dan sebagai suksesornya adalah Kerajaan Kahuripan, Kerajaan Janggala, dan Kerajaan Kadiri. Pada masa Kerajaan Singosari, Raja Kertanagara melakukan ekspansi hingga ke Melayu, yang disebut juga Ekspedisi Pamalayu. Pada era Kerajaan Majapahit, Raja Hayam Wuruk dan Patih Gajah Mada berhasil memperluas wilayahnya hingga mencapai Malaka dan Kepulauan Filipina.

            Bukti awal masuknya Islam ke Jawa Timur adalah adanya makam nisan di Gresik makam Fatimah binti maimun bin hibatullah dan makam Islam Syekh Jumadil Kubro pada kompleks Makam Troloyo Mojokerto . Makam Fatimah binti Maimun bin Hibatullah yang meninggal tahun 495 Hijriah / 1102 Masehi di Desa Leran, Kecamatan Manyar, Gresik. Namun Saat Itu Belum menyebar secara luas karena pada masa itu masih berdiri Kerajaan Medang Kahuripan yang Dipimpin Airlangga yang beragama Hindu ,sehingga rakyat mayoritas masih beragama Hindu.

            Selain itu, juga ditemukan Candi Jedong di daerah Wagir, Malang, Jawa Timur yang diyakini lebih tua dari Prasasti Dinoyo, yakni sekitar abad ke-6 Masehi.'
        ]);
        Province::create([
            'id' => 12,
            'province_name' => 'Kalimantan Barat',
            'video_link' => 'https://www.youtube.com/embed/sV_a_D32X5s?si=X9Dutltq8kftHIuG',
            'deskripsi' => 'Kalimantan Barat (disingkat Kalbar) adalah sebuah provinsi di Indonesia, yang berada di pulau Kalimantan, dengan ibu kota atau pusat pemerintahan berada di kota Pontianak. Luas wilayah provinsi Kalimantan Barat adalah 147.307,00 km² (7,53% luas Indonesia). Kalimantan Barat merupakan provinsi terluas keempat di Indonesia setelah Papua, Kalimantan Timur dan Kalimantan Tengah. Pada tahun 2020, penduduk Kalimantan Barat berjumlah 5.414.390 jiwa, dengan kepadatan 37 jiwa/km2, dan pada pertengahan tahun 2023 berjumlah 5.525.789 jiwa.',
            'sejarah' => 'Bakulapura atau Tanjungpura merupakan taklukan Kerajaan Singhasari. Wilayah kekuasaan Tanjungpura membentang dari Tanjung Dato sampai Tanjung Sambar. Pulau Kalimantan kuno terbagi menjadi 3 wilayah negara kerajaan induk: Borneo (Brunei), Sukadana (Tanjungpura) dan Banjarmasin (Bumi Kencana). Tanjung Dato adalah perbatasan wilayah mandala Borneo (Brunei) dengan wilayah mandala Sukadana (Tanjungpura), sedangkan Tanjung Sambar batas wilayah mandala Sukadana/Tanjungpura dengan wilayah mandala Banjarmasin (daerah Kotawaringin). Daerah aliran Sungai Jelai, di Kotawaringin di bawah kekuasaan Banjarmasin, sedangkan sungai Kendawangan di bawah kekuasaan Sukadana. Perbatasan di pedalaman, perhuluan daerah aliran sungai Pinoh (Lawai) termasuk dalam wilayah Kerajaan Kotawaringin (bawahan Banjarmasin).

            Daerah-daerah di Kalbar yang terkenal pada zaman dahulu diantaranya Tanjungpura dan Batang Lawai. Loue (Lawai) oleh Tomé Pires digambarkan daerah yang banyak intan, jarak dari Tanjompure empat hari pelayaran. Tanjungpura maupun Lawai masing-masing dipimpin seorang Patee (Patih). Patih-patih ini tunduk kepada Patee Unus, penguasa Demak. Kesultanan Demak juga telah berjasa membantu raja Banjar Pangeran Samudera berperang melawan pamannya Pangeran Tumenggung penguasa Kerajaan Negara Daha terakhir untuk memperebutkan hegemoni atas wilayah Kalimantan Selatan.'
        ]);
        Province::create([
            'id' => 13,
            'province_name' => 'Kalimantan Selatan',
            'video_link' => 'https://www.youtube.com/embed/wfy8oJHDDdY?si=UfVd0f0VIZmKoKQd',
            'deskripsi' => 'Kalimantan Selatan (disingkat Kalsel) adalah salah satu provinsi yang berada di pulau Kalimantan, Indonesia. Sejak 16 Maret 2022, ibu kota provinsi Kalimantan Selatan dipindah ke Kota Banjarbaru menggantikan Kota Banjarmasin. Provinsi ini merupakan rumah bagi etnis Banjar dan memiliki luas 38.744,00 km² dengan populasi pada tahun 2023 berjumlah 4.205.816 jiwa, dan wilayah administrasi terbagi menjadi 11 kabupaten dan 2 kota.',

            'sejarah' => 'Kawasan Kalimantan Selatan pada masa lalu merupakan bagian dari 3 kerajaan besar yang pernah secara berturut-turut memiliki wilayah di daerah ini, yakni Kerajaan Negara Dipa, diteruskan oleh Kerajaan Negara Daha dan diteruskan oleh Kesultanan Banjar. Setelah Proklamasi Kemerdekaan Indonesia, Kalimantan dijadikan provinsi tersendiri dengan gubernur pertama Gubernur Ir. Pangeran Muhammad Noor yang menjabat sampai dibuatnya Perjanjian Linggarjati.'
        ]);
        Province::create([
            'id' => 14,
            'province_name' => 'Kalimantan Tengah',
            'video_link' => 'https://www.youtube.com/embed/tmd90h2UFNQ?si=LFv1jckjCObCaD7a',
            'deskripsi' => 'Kalimantan Tengah (disingkat Kalteng) adalah salah satu provinsi di Indonesia yang terletak di pulau Kalimantan. Ibu kotanya adalah Kota Palangka Raya. Berdasarkan sensus tahun 2010, provinsi ini memiliki populasi 2.202.599 jiwa, yang terdiri atas 1.147.878 laki-laki dan 1.054.721 perempuan. Data BPS Kalimantan Tengah tahun 2023 menunjukkan penduduk provinsi ini tahun 2023 bertambah menjadi 2.741.100 (Laki-laki 1.420.900 jiwa dan perempuan 1.320.200 jiwa). Kalimantan Tengah mempunyai 13 kabupaten dan 1 kota.',

            'sejarah' => 'Menurut legenda suku Dayak yang berasal dari Panaturan Tetek Tatum yang ditulis oleh Tjilik Riwut mengisahkan orang pertama yang menempati bumi atau menginjakan kakinya di Kalimantan adalah Raja Bunu. Pada abad ke-14 Maharaja Supayaryanata, gubernur Majapahit memerintah di Kerajaan Negara Dipa (Amuntai) yang berpusat di Candi Agung dengan wilayah mandalanya dari Tanjung Silat sampai Tanjung Puting dengan daerah-daerah yang disebut Sakai, yaitu daerah batang sungai Barito, Tabalong, Balangan, Pitap, Alai, Amandit, Labuan Amas, Biaju Kecil (Kapuas-Murung), Biaju Besar (Kahayan), Sebangau, Mendawai, Katingan, Sampit dan Pembuang dengan kepala-kepala daerahnya masing-masing yang disebut Mantri Sakai (Kepala Distrik), sedangkan wilayah Kotawaringin pada masa itu merupakan kerajaan tersendiri. Kerajaan Negara Dipa dilanjutkan oleh Kerajaan Negara Daha dengan raja pertamanya Miharaja Sari Babunangan Unro miharaja= maharaja. Raja tersebut telah mengantar salah seorang puteranya yang bernama Raden Sira Panji Kesuma alias Uria Gadung (Uria= Aria) untuk memegang kekuasaan wilayah Tanah Dusun [atau Barito Raya] yang berkedudukan di JAAR – SANGGARWASI.'
        ]);
        Province::create([
            'id' => 15,
            'province_name' => 'Kalimantan Timur',
            'video_link' => 'https://www.youtube.com/embed/pBELxlrfqPY?si=Zu4Zf74PfR1fw-Ur',
            'deskripsi' => 'Kalimantan Timur (disingkat Kaltim) adalah sebuah provinsi Indonesia di pulau Kalimantan bagian ujung timur yang berbatasan dengan Sarawak (Malaysia Timur), Kalimantan Utara, Kalimantan Tengah, Kalimantan Selatan, Kalimantan Barat, dan Sulawesi. Luas total Kaltim adalah 127.346,92 km² dan populasi sebesar 3.941.766 jiwa (2020). Kalimantan Timur merupakan wilayah dengan kepadatan penduduk terendah ke empat di Indonesia. Ibu kotanya adalah Kota Samarinda.

            Provinsi Kalimantan Timur sebelum dimekarkan menjadi Kalimantan Utara merupakan provinsi terluas kedua di Indonesia setelah Papua, dengan luas 194.489 km persegi yang hampir sama dengan Pulau Jawa atau sekitar 6,8% dari total luas wilayah Indonesia.',

            'sejarah' => 'Wilayah Kalimantan Timur dahulu mayoritas adalah hutan hujan tropis. Terdapat beberapa kerajaan yang berada di Kalimantan Timur, diantaranya adalah Kerajaan Kutai (beragama Hindu), Kesultanan Kutai Kartanegara ing Martadipura, Kesultanan Pasir dan Kesultanan Berau. Di pusat-pusat kerajaan tersebut berkembang bahasa serumpun yang memiliki benang merah dari leluhur bahasa yang sama yaitu rumpun bahasa Melayik.

            Wilayah Kalimantan Timur meliputi Paser, Kutai, Berau dan juga Karasikan (Buranun/pra-Kesultanan Sulu) diklaim sebagai wilayah taklukan Maharaja Suryanata, gubernur Majapahit di Negara Dipa (yang berkedudukan di Candi Agung di Amuntai) hingga tahun 1620 pada masa Kesultanan Banjar. Bahkan sebelum adanya bala bantuan dari Kesultanan Demak, Kesultanan Banjar sudah melebarkan pengaruhnya ke Paser, Kutai, dan Berau. Perjanjian yang ditanda tangani antara Pieter Pietarsz (utusan VOC) dengan Aji Pangeran Sinum Panji Mendapa ing Martapura, Raja Kutai Kartanegara dalam tahun 1635 memuat antara lain bahwa perdagangan bebas hanya dibolehkan antara Kerajaan Kutai dengan orang-orang Banjar dan Belanda saja.'
        ]);
        Province::create([
            'id' => 16,
            'province_name' => 'Kalimantan Utara',
            'video_link' => 'https://www.youtube.com/embed/YgB2yLdC6mg?si=yqBVXCFaoaJq4Qz6',
            'deskripsi' => 'Kalimantan Utara (disingkat Kaltara) adalah sebuah provinsi di Indonesia yang terletak di bagian utara Pulau Kalimantan. Provinsi ini berbatasan langsung dengan negara tetangga Malaysia, yaitu negara bagian Sabah dan Sarawak. Pusat pemerintahan Kalimantan Utara saat ini berada di Tanjung Selor, bersama dengan pusat pemerintahan Kabupaten Bulungan. Pada pertengahan tahun 2023, jumlah penduduk kalimantan Utara sebanyak 734.713 orang.

            Sebelum pemekaran provinsi Papua Pegunungan, Papua Selatan, Papua Tengah dan Papua Barat Daya, Kalimantan Utara menjadi provinsi termuda di Indonesia, yang disahkan menjadi provinsi dalam rapat paripurna DPR pada tanggal 25 Oktober 2012 berdasarkan Undang-undang Nomor 20 Tahun 2012.',
            'sejarah' => 'Dalam sejarahnya negeri-negeri di bagian utara pulau Kalimantan, yang meliputi Sarawak, Sabah, Brunei. Sejak masa Hindu hingga masa sebelum terbentuknya Kesultanan Bulungan, daerah yang sekarang menjadi wilayah provinsi Kalimantan Utara hingga daerah Kinabatangan di Sabah bagian Timur merupakan wilayah mandala negara Berau yang dinamakan Nagri Marancang. Namun belakangan sebagian utara Nagri Marancang (alias Sabah bagian Timur) terlepas dari Berau karena diklaim sebagai wilayah mandala Brunei, kemudian oleh Brunei dihadiahkan kepada Kesultanan Sulu dan Suku Suluk mulai bermukim di sebagian wilayah tersebut. Kemudian Inggris menguasai sebelah utara Nagri Marancang dan Belanda menguasai sebelah selatan Nagri Marancang (sekarang provinsi Kaltara).'
        ]);
        Province::create([
            'id' => 17,
            'province_name' => 'Kepulauan Riau',
            'video_link' => 'https://www.youtube.com/embed/ppQEGUJtmws?si=N6duj3Bp73F1EjRz',
            'deskripsi' => 'Kepulauan Riau (disingkat Kepri) adalah sebuah wilayah provinsi yang terletak di Indonesia. Provinsi ini beribu kota di Kota Tanjungpinang. Provinsi ini berbatasan langsung dengan Vietnam, Kamboja, dan Laut Tiongkok Selatan di sebelah utara Laut Natuna Utara; Provinsi Kalimantan Barat dan Sarawak (Malaysia) di sebelah timur; Provinsi Kepulauan Bangka Belitung dan Jambi di selatan; negara Singapura, tiga negara bagian Malaysia Barat (Terengganu, Pahang, dan Johor) dan Provinsi Riau di sebelah barat.

            Provinsi ini termasuk provinsi berbentuk kepulauan di Indonesia. Tahun 2020, penduduk Kepulauan Riau berjumlah 2.064.564 jiwa, dengan kepadatan 252 jiwa/km2, dan 58% penduduknya berada di Kota Batam. Dan pada pertengahan tahun 2023, penduduk Kepulauan Riau sebanyak 2.150.329 jiwa.',

            'sejarah' => 'Masa Islam di Kepulauan Riau berkembang dengan berdirinya Kesultanan Johor, Sejarah Johor dimulai pada masa pemerintahan Kesultanan Malaka. Sebelumnya daerah Johor Dan Riau merupakan bagian dari Kesultanan Malaka, kemudian Malaka jatuh akibat penaklukan Portugis pada tahun 1511. Berdasarkan Sulalatus Salatin, setelah wafatnya Sultan Malaka, Mahmud Syah tahun 1528 di Kampar, Sultan Alauddin Syah, salah seorang putra raja Malaka, menjadikan Johor sebagai pusat pemerintahannya dan kemudian dikenal sebagai Kesultanan Johor

            Sebagai pewaris Malaka, Sultan Johor mewarisi wilayah Johor, Pahang, Selangor, Riau sebagai wilayah kedaulatannya. Pengaruh perjanjian London tahun 1824 bekas wilayah Kesultanan Johor dibagi dua atas wilayah jajahan Inggris dan Belanda. Bagian Belanda menjadi Kesultanan Riau Lingga Setelah kemerdekaan Indonesia dan Malaysia, Johor kemudian menjadi salah satu negara bagian Malaysia pada tahun 1963. Dan Kepulauan Riau menjadi Provinsi Riau digabung dengan Wilayah Bekas Kesultanan Siak Sri inderapura.'
        ]);
        Province::create([
            'id' => 18,
            'province_name' => 'Lampung',
            'video_link' => 'https://www.youtube.com/embed/1pwCYEzUPH0?si=zvp-7GTGc7kec_lC',
            'deskripsi' => 'Lampung (aksara Lampung: ), adalah sebuah provinsi di bagian ujung selatan Pulau Sumatra, Indonesia. Ibu kota dan pusat pemerintahannya berada di Kota Bandar Lampung. Provinsi ini memiliki dua kota, yaitu Bandar Lampung dan Metro, serta 13 kabupaten. Posisi provinsi Lampung secara geografis di sebelah barat berbatasan dengan Samudra Hindia, di sebelah timur dengan Laut Jawa, di sebelah utara berbatasan dengan provinsi Sumatera Selatan dan Bengkulu, serta di sebelah selatan berbatasan dengan Selat Sunda.

            Provinsi Lampung memiliki pelabuhan utama bernama Pelabuhan Internasional Panjang dan Pelabuhan Penyebrangan Bakauheni, bandar udara utama yakni Bandara Internasional Radin Inten II terletak 28 km dari ibu kota provinsi, serta stasiun kereta api besar Tanjung Karang yang terletak di pusat ibu kota provinsi. Pada tahun 2022, penduduk Provinsi Lampung berjumlah 9,176,546 jiwa, dengan kepadatan 270 jiwa/km2.',
            'sejarah' => 'Pada abad ke- 7 tahun 671 Masehi zaman pra-sejarah Lampung di Sumatra, Sriwijaya menguasai sebagian besar Asia Tenggara hingga abad ke-11 Masehi, di abad ke-13 tahun 1289 Masehi penyebaran Islam awal bermula dari Batu Brak di tengkuk gunung pesagi daerah hanibung yang ditandai dengan adanya peninggalan pra-sejarah hingga zaman sejarah yakni Dolmen dan Megalitikum tertua di tanah Lampung, lokasi ini secara administratif berada di wilayah Kabupaten Lampung Barat yang beribu kota di Liwa. Pada abad ke-16 Masehi Penyebaran Islam juga masuk dari Banten ke Tolang Pohwang, secara administratif berada di daerah Kabupaten Tulang Bawang Provinsi Lampung.

            Provinsi Lampung lahir pada tanggal 18 Maret 1964 dengan ditetapkannya Peraturan Pemerintah Nomor 3/1964 yang kemudian menjadi Undang-Undang Nomor 14 tahun 1964. Sebelum itu Provinsi Lampung merupakan keresidenan yang tergabung dengan Provinsi Sumatera Selatan.'
        ]);
        Province::create([
            'id' => 19,
            'province_name' => 'Maluku',
            'video_link' => 'https://www.youtube.com/embed/-WpmUWOhkK4?si=BzOfTllVcZxakT3g',
            'deskripsi' => 'Maluku adalah sebuah provinsi yang meliputi bagian selatan Kepulauan Maluku, Indonesia. Provinsi ini berbatasan dengan Laut Seram di Utara, Samudra Hindia dan Laut Arafura di Selatan, Papua di Timur, dan Sulawesi di Barat. Ibu kota dan kota terbesarnya ialah kota Ambon. Provinsi Maluku berada di urutan ke-28 provinsi menurut jumlah penduduk di Indonesia, pada pertengahan tahun 2023, populasi provinsi Maluku berjumlah 1.900.914 jiwa.

            Sebelum masa penjajahan, Maluku menjadi poros perdagangan rempah dunia dengan cengkih dan pala sebagai barang dagangan utama. Hal ini membuat Maluku dijuluki sebagai "Kepulauan Rempah" hingga hari ini. Rakyat Maluku berdagang dengan para pedagang dari berbagai daerah di Nusantara maupun mancanegara seperti pedagang-pedagang Tionghoa, Arab, dan Eropa. Kekayaan rempah ini pun menjadi daya tarik bangsa-bangsa Eropa yang pada akhirnya menguasai Maluku, dimulai oleh Portugis dan terakhir Belanda.',
            'sejarah' => 'Kepulauan Maluku mulai terbentuk antara 150 hingga satu juta tahun yang lalu, antara zaman Kehidupan Tengah dan zaman Es. Kepulauan Maluku tergabung dalam rangkaian Dangkalan Sahul yang terhubung dengan Australia. Kepulauan Maluku pertama kali diduduki sekitar 30.000 tahun yang lalu oleh bangsa Austronesia-Melanesia yang terdiri dari Negrito dan Wedda, kemudian dilanjutkan oleh kedatangan bangsa Melayu Tua, Melayu Muda, kemudian Mongoloid, mengingat letak Maluku sebagai daerah lintas perpindahan penduduk Asia Tenggara ke Melanesia dan Mikronesia. Meskipun demikian, Austronesia-Melanesia dan kebudayaannya tetap menjadi yang terbesar di Maluku. Pulau Seram sebagai nusa ina (pulau ibu) memegang kunci sebagai pusat penyebaran penduduk ke seluruh penjuru Kepulauan Maluku.'
        ]);
        Province::create([
            'id' => 20,
            'province_name' => 'Maluku Utara',
            'video_link' => 'https://www.youtube.com/embed/JlBDaQ_Ovis?si=SVtDtyfS2SSlZo9K',
            'deskripsi' => 'Maluku Utara (disingkat Malut) merupakan provinsi bagian Timur Indonesia yang resmi terbentuk pada 4 Oktober 1999 yang sebelumnya menjadi kabupaten dari provinsi Maluku bersama dengan Halmahera Tengah, berdasarkan UU RI Nomor 46 Tahun 1999 dan UU RI Nomor Tahun 2003. Jumlah penduduk Maluku Utara pada tahun 2021 mencapai 1.316.973 jiwa, dengan kepadatan penduduk sebanyak 41 jiwa/km2.

            Saat awal pendirian Provinsi Maluku Utara, ibu kota ditempatkan di Kota Ternate berlokasi di kaki Gunung Gamalama dalam kurun waktu kurang lebih 11 tahun, hingga pada 4 Agustus 2010 setelah adanya masa transisi dan persiapan pembangunan, Maluku Utara memindahkan ibukota ke Sofifi.',
            'sejarah' => 'Daerah ini pada mulanya adalah bekas wilayah empat kerajaan Islam terbesar di bagian timur Nusantara yang dikenal dengan sebutan Kesultanan Moloku Kie Raha (Kesultanan Empat Gunung di Maluku), sultan Ternate ke-7 Kolano Cili Aiya atau disebut juga Kolano Sida Arif Malamo (1322-1331) mengundang raja–raja Maluku yang lain untuk berdamai dan bermusyawarah membentuk persekutuan. Persekutuan ini kemudian dikenal sebagai Persekutan Moti atau Motir Verbond. Butir penting dari pertemuan ini selain terjalinnya persekutuan adalah penyeragaman bentuk kelembagaan kerajaan di Maluku. Oleh karena pertemuan ini dihadiri 4 raja Maluku yang terkuat maka disebut juga sebagai persekutuan Moloku Kie Raha. Walau ada Kerajaan Loloda yang tidak dianggap setingkat dengan kerajaan lainnya. Keempat kerajaan tersebut adalah:
                -Kesultanan Bacan
                -Kesultanan Jailolo
                -Kesultanan Tidore
                -Kesultanan Ternate'
        ]);
        Province::create([
            'id' => 21,
            'province_name' => 'Nusa Tenggara Timur',
            'video_link' => 'https://www.youtube.com/embed/wIIZYR3EL0I?si=o-VrERsfeF2dKXqo',
            'deskripsi' => 'Nusa Tenggara Timur (disingkat NTT) adalah sebuah provinsi di Indonesia yang meliputi bagian timur Kepulauan Nusa Tenggara. Provinsi ini memiliki ibu kota di Kota Kupang dan memiliki 22 kabupaten/kota. Provinsi ini berada di Kepulauan Sunda Kecil. Tahun 2022, penduduk provinsi ini berjumlah 5.446.285 jiwa, dengan kepadatan 114 jiwa/km2.

            Setelah pemekaran, Nusa Tenggara Timur adalah sebuah provinsi Indonesia yang terletak di bagian tenggara Indonesia. Provinsi ini terdiri dari beberapa pulau, antara lain pulau Flores, pulau Sumba, pulau Timor, pulau Alor, pulau Lembata, pulau Rote, pulau Sabu, pulau Adonara, pulau Solor, pulau Ende, pulau Komodo dan pulau Palue.

            Provinsi ini terdiri dari 1.192 pulau, tiga pulau utama di Nusa Tenggara Timur adalah Pulau Flores, Pulau Sumba dan Pulau Timor (bagian barat).',

            'sejarah' => 'Bentangan kepulauan yang terletak antara 80-120 Lintang Selatan dan 1180 – 1250 Bujur Timur, merupakan bagian dari NKRI; mempunyai makna tersendiri pada hidup dan kehidupan banyak orang. Gugusan pulau-pulau tersebut disapa dengan berbagai sebutan, antara lain, "Sunda Kecil, Nusa Tenggara, Nusa Tenggara Timur", dan juga "Flobamora". Sebutan tersebut juga bisa bermakna ada aneka suku dan sub-suku di/pada wilayah tersebut, namun mempunyai satu tanda kesamaan yaitu sama-sama menyatukan diri sebagai anak-anak Flobamor atau pun NTT.

            Jauh sebelum nama NTT tersebar, gugusan pulau-pulau di selatan Nusantara tersebut telah menjadi perhatian dunia. Harumnya aroma cendana dari Timor telah menerobos sampai Timur Tengah, Tiongkok, dan Eropa, dan berbagai penjuru bumi. Kekuatan aroma cendana tersebut menjadikan para pedagang dari Malaka, Gujarat, Jawa dan Makasar, Cina melakukan pelayaran niaga untuk mencapai wilayah sumber cendana. Dan mereka melakukan kontak dagang secara langsung dengan raja-raja di Timor dan pulau-pulau sekitarnya, sang pemilik wilayah dan pemimpin rakyat.

            Catatan sejarah dari Tiongkok, "manuskrip Dao Zhi", sejak tahun 1350 dinasti Sung sudah mengenal Timor dan pulau-pulau sekitar, dan salah satu pelabuhan terkenal di Timor adalah "Batumiao-Batumean Fatumean Tun Am", yang ramai dikunjungi kapal dari Makasar, Malaka, Jawa, Tiongkok dan kemudian Eropa seperti Spanyol, Inggris, Portugis, Belanda. Negarakertagama (1365) mencatat bahwa Timor yang terkenal dengan hasil cendananya merupakan wilayah Majapahit, namum mempunyai raja-raja yang otonom dan mandiri.'
        ]);
        Province::create([
            'id' => 22,
            'province_name' => 'Nusa Tenggara Barat',
            'video_link' => 'https://www.youtube.com/embed/zp6-JQ5olA4?si=uKNZPzXxlcUfAzDF',
            'deskripsi' => 'Nusa Tenggara Barat (disingkat NTB) ialah sebuah provinsi di Indonesia yang berada di bagian tengah Kepulauan Nusa Tenggara di antara provinsi Bali di sebelah barat dan provinsi Nusa Tenggara Timur di sebelah Timur. Pusat pemerintahan dan ibu kota provinsi ini berada di Kota Mataram. Nusa Tenggara Barat memiliki 8 Kabupaten dan 2 Kota, termasuk kota Mataram. Pada pertengahan tahun 2023, penduduk Nusa Tenggara Barat berjumlah 5.576.992 jiwa, dengan kepadatan 264 jiwa/km2.

            Pada awal kemerdekaan Indonesia, wilayah ini termasuk dalam wilayah Provinsi Sunda Kecil yang beribu kota di Singaraja. Kemudian, wilayah Provinsi Sunda Kecil dibagi menjadi 3 provinsi: Bali, Nusa Tenggara Barat, dan Nusa Tenggara Timur. Dua pulau terbesar di provinsi ini adalah Lombok yang terletak di barat dan Sumbawa yang terletak di timur.

            Sebagian besar dari penduduk pulau Lombok berasal dari suku Sasak, sementara suku Bima (suku Mbojo) dan suku Sumbawa merupakan kelompok etnis terbanyak di pulau Sumbawa.',

            'sejarah' => 'Keberadaan status provinsi, bagi NTB tidak datang dengan sendirinya. Perjuangan menuntut terbentuknya Provinsi NTB berlangsung dalam rentang waktu yang cukup lama. Provinsi NTB, sebelumnya sempat menjadi bagian dari Negara Indonesia Timur dalam konsepsi Negara Republik Indonesia Serikat,dan menjadi bagian dari Provinsi Sunda kecil setelah pengakuan kedaulatan Republik Indonesia.

            Seiring dinamika zaman dan setelah mengalami beberapa kali proses perubahan sistem ketatanegaraan pasca diproklamasikannya Kemerdekaan Republik Indonesia, barulah terbentuk Provinsi NTB. NTB, secara resmi mendapatkan status sebagai provinsi sebagaimana adanya sekarang, sejak tahun 1958, berawal dari ditetapkannya Undang-undang Nomor 64 Tahun 1958 Tanggal 14 Agustus 1958 tentang Pembentukan Daerah-daerah Swatantra Tingkat I Bali, NTB dan NTT, dan yang dipercayakan menja di Gubernur pertamanya adalah AR. Moh. Ruslan Djakraningrat.

            Walaupun secara yuridis formal Daerah Tingkat I NTB yang meliputi 6 Daerah Tingkat II dibentuk pada tanggal 14 Agustus 1958, namun penyelenggaraan pemerintahan berjalan berdasarkan Undang- undang Negara Indonesia Timur Nomor 44 Tahun 1950, dan Undang-undang Nomor 1 Tahun 1957 tentang Pokok-pokok Pemerintahan Daerah. Keadaan yang tumpang tindih ini berlangsung hingga tanggal 17 Desember 1958, ketika Pemerintah Daerah Lombok dan Sumbawa dilikuidasi. Hari likuidasi inilah yang menandai resmi terbentuknya Provinsi NTB. Zaman terus berganti, konsolidasi kekuasaan dan pemerintahan pun terus terjadi.'
        ]);
        Province::create([
            'id' => 23,
            'province_name' => 'Papua',
            'video_link' => '#',
            'deskripsi' => 'Papua, adalah provinsi yang terletak di pesisir utara Papua Indonesia. Provinsi Papua sebelumnya bernama Irian Barat (1956 - 1973) dan Irian Jaya (1973 - 2000) yang mencakup seluruh Tanah Papua bekas Keresidenan Nugini Barat. Ibu kota Papua berada di Kota Jayapura, yang berbatasan langsung dengan negara Papua Nugini. Pada tanggal 30 Juni 2022, wilayah provinsi Papua mengalami pemekaran, yang membentuk provinsi baru yakni provinsi Papua Tengah, Papua Pegunungan, serta Papua Selatan. Setelah pemekaran provinsi baru, pada pertengahan tahun 2023, jumlah penduduk provinsi Papua sebanyak 1.077.141 jiwa.',

            'sejarah' => 'Papua berada di wilayah paling timur negara Indonesia. Ia merupakan pulau terbesar kedua setelah Pulau Greenland di Denmark. Luasnya mencapai 890.000 km2 (ini jika digabung dengan Papua New Guinea).
            Pada sekitar tahun 200 M, ahli geografi bernama Klaudius Ptolemaeus (Ptolamy) menyebut pulau Papua dengan nama Labadios. Sampai saat ini tak ada yang tahu, kenapa pulau Papua diberi nama Labadios. Sekitar akhir tahun 500 M, oleh bangsa Tiongkok diberi nama Tungki. Hal ini dapat diketahui setelah mereka menemukan sebuah catatan harian seorang pedagang Tiongkok, Ghau Yu Kuan yang menggambarkan bahwa asal rempah-rempah yang mereka peroleh berasal dari Tungki, nama yang digunakan oleh para pedagang Tiongkok saat itu untuk Papua.
            Selanjutnya, pada akhir tahun 600 M, Kerajaan Sriwijaya menyebut nama Papua dengan menggunakan nama Janggi. Dalam buku Kertagama 1365 yang dikarang Pujangga Mpu Prapanca “Tungki” atau “Janggi” sesungguhnya adalah salah eja diperoleh dari pihak ketiga yaitu Pedagang Tiongkok Chun Tjok Kwan yang dalam perjalanan dagangnya sempat menyinggahi beberapa tempat di Tidore dan Papua.'
        ]);
        Province::create([
            'id' => 24,
            'province_name' => 'Papua Barat',
            'video_link' => '#',
            'deskripsi' => 'Papua Barat (disingkat Pabar; dahulu Irian Jaya Barat) adalah sebuah provinsi Indonesia yang terletak di barat laut Provinsi Papua Tengah dan sebelah timur Provinsi Papua Barat Daya. Wilayah Papua Barat mencakup Semenanjung Bomberai dan Wandamen. Ibu kota provinsi ini terletak di Manokwari. Provinsi ini dimekarkan dari Provinsi Papua melalui Undang-Undang Nomor 45 Tahun 1999.

            Pada awalnya pembentukan provinsi ini mendapatkan penolakan dari masyarakat sehingga implementasi dari pemekaran ini baru dilaksanakan melalui Instruksi Presiden Nomor 1 Tahun 2003. Walaupun pada 11 November 2004 Mahkamah Konstitusi menyatakan bahwa dasar hukum pembentukan Provinsi Irian Jaya Barat sudah tidak memiliki kekuatan hukum yang mengikat, namun keberadaan provinsi ini dinyatakan tetap sah.

            Berdasarkan Peraturan Pemerintah Nomor 24 Tahun 2007, nama Irian Jaya Barat diubah menjadi Papua Barat. Papua Barat sebagai pemekaran dari Provinsi Papua merupakan provinsi yang memiliki status otonomi khusus.

            Pada rapat paripurna tanggal 17 November 2022, Undang-undang pemekaran Provinsi Papua Barat Daya dari Papua Barat disahkan oleh DPR RI.',
            'sejarah' => 'Perkembangan asal usul nama pulau Papua memiliki perjalanan yang panjang seiring dengan sejarah interaksi antara bangsa asing dengan masyarakat Papua, termasuk pula dengan bahasa-bahasa lokal dalam memaknai nama Papua.

            Menurut bahasa Tidore kata Papo Ua artinya "tidak bergabung", "tidak bersatu", atau "tidak bergandengan". Maksudnya wilayah Papua itu jauh sehingga tidak masuk dalam daerah induk Kesultanan Tidore walau wilayah-wilayah tersebut tetap tunduk dan berada dibawah persekutuan dagang Tidore bernama Uli Siwa. Dalam pembagiannya wilayah di Papua dibagi menjadi Korano Ngaruha atau Kepulauan Raja Ampat, Papoua Gam Sio (Papua sembilan negeri), dan Mafor Soa Raha (Mafor Empat Soa). Teori lain nama Papua berasal dari bahasa Melayu papuwah, artinya "rambut keriting". Akan tetapi kata ini baru masuk pada kamus bahasa melayu tahun 1812 ciptaan William Marsden yang tidak ditemukan dalam kamus yang lebih awal, sedangkan catatan abad ke-16 Portugis dan Spanyol, kata Papua sudah dipakai dan hanya merujuk kepada penduduk Kepulauan Raja Ampat dan Semenanjung Kepala Burung. Berdasarkan teori lain ini menurut F.C. Kamma nama ini bisa saja berasal dari Bahasa Biak Sup i Babwa yang digunakan untuk menyebut Kepulauan Raja Ampat berarti tanah di-bawah (matahari terbenam), yang kemudian menjadi Papwa lalu Papua.'
        ]);
        Province::create([
            'id' => 25,
            'province_name' => 'Papua Barat Daya',
            'video_link' => 'https://www.youtube.com/embed/GNkIhkJW92Q?si=1eAxwqUS021B8GCn',
            'deskripsi' => 'Papua Barat Daya (disingkat PBD) adalah sebuah provinsi di Indonesia, dan merupakan pemekaran dari Papua Barat. Nama provinsi ini dianggap misnomer karena terletak di bagian barat laut Pulau Papua. Wilayah yang termasuk dalam provinsi ini meliputi kawasan Sorong Raya yang terdiri dari Kota Sorong, Kabupaten Sorong, Kabupaten Sorong Selatan, Kabupaten Maybrat, Kabupaten Tambrauw, dan Kabupaten Raja Ampat. Papua Barat Daya adalah provinsi ke-38 di Indonesia.

            Papua Barat Daya terletak di ujung barat laut Semenanjung Doberai atau Semenanjung Kepala Burung. Ujung paling barat provinsi ini merupakan Kawasan Konservasi Perairan Daerah Kabupaten Raja Ampat yang keindahannya sudah mendunia dan memiliki keanekaragaman biota laut yang tinggi seperti terumbu karang, penyu raksasa, pari manta hingga hiu paus sehingga disebut surganya penyelam. Kepulauan Raja Ampat terdiri dari berbagai pulau seperti Batanta, Misool, Salawati, dan Waigeo.',

            'sejarah' => 'Kepulauan Raja Ampat di Papua Barat Daya adalah wilayah yang dikenal sejak zaman dahulu karena memiliki pemerintahan tradisional yang dipimpin oleh Jaja (tuan tanah). Lalu pemerintahan ini berkembang menjadi kerajaan tradisional dengan migrasi para Fun (raja) suku Maya dari Pulau Waigeo yang juga bersamaan dengan migrasi suku Biak di kepulauan ini. Pemerintahan tradisional di wilayah ini juga kemudian terpengaruhi oleh Kesultanan Bacan dan Kesultanan Tidore melalui hubungannya dengan Gurabesi (asal Biak) guna perluasan wilayah kesultanan Tidore dan pengadopsian sistem pemerintahan kolano (kerajaan) dan ditandai dengan diangkatnya empat orang raja yang disebut Kalano Muraha atau Kolano Ngaruha yang dalam bahasa Melayu berarti "Raja Ampat".

            Keempat raja diangkat untuk membantu penarikan upeti dan hubungan dagang berbagai wilayah di pesisir Tanah Besar dengan Kesultanan Tidore. Berdasarkan cerita masyarakat yang dicatat Mansoben, Fun Giwar menjadi leluhur raja di Waigeo, Fun Malaban menjadi leluhur raja di Salawati, Fun Bis menjadi leluhur raja di Lilinta (Misool). Selanjutnya Tuimadahe diangkat menjadi raja di Waigama (Misool) yang keturunannya bersatu dengan keturunan Jaja setempat asal suku Matbat. Sedangkan Fun Mo seorang suku Moi dari Sungai Malyat (terletak di sebelah selatan Kota Sorong) menjadi leluhur raja di Sailolof yang kemudian menikah dengan anak perempuan Raja Waigeo. Menurut masyarakat lokal, Waigama bukan merupakan salah satu dari Raja Ampat, sedangkan menurut Kesultanan Tidore, Sailolof bukan merupakan salah satu dari empat kerajaan yang dimaksud.'
        ]);
        Province::create([
            'id' => 26,
            'province_name' => 'Papua Pegunungan',
            'video_link' => 'https://www.youtube.com/embed/ujIoFrvbsJU?si=9k-B20LiVm3XKsZN',
            'deskripsi' => 'Papua Pegunungan adalah sebuah provinsi di Indonesia dengan ibu kota yang berkedudukan di Kabupaten Jayawijaya, tepatnya di perbatasan Distrik Walesi dan Wouma. Papua Pegunungan dimekarkan dari provinsi Papua bersama dua provinsi lainnya yakni Papua Selatan dan Papua Tengah pada 30 Juni 2022 berdasarkan Undang-Undang Nomor 16 Tahun 2022. Sebelumnya nama usulan provinsi ini bernama "Provinsi Papua Pegunungan Tengah". Papua Pegunungan adalah satu-satunya provinsi di Indonesia yang tidak memiliki garis pantai (terkurung daratan).

            Provinsi Papua Pegunungan berlokasi di Pegunungan Jayawijaya bagian timur. Pegunungan ini merupakan jajaran pegunungan tertinggi di Indonesia dengan puncak seperti Puncak Mandala dan Puncak Trikora. Provinsi ini termasuk dalam wilayah adat La Pago dengan berbagai macam suku yang tinggal di lembah yang diapit gunung-gunung tinggi, mereka menanam ubi dan beternak babi. Salah satu lembahnya adalah Lembah Baliem yang terkenal dengan festival tradisionalnya. Lembah Baliem juga merupakan lokasi Kota Wamena sebagai ibu kota provinsi ini.',

            'sejarah' => 'Pelaut seperti Jan Carstenszoon pada abad ke-17 telah mencatat adanya pegunungan tinggi yang tertutup salju di tengah pulau Papua padahal letaknya di khatulistiwa. Bangsa Eropa menyebut kawasan ini dengan terra incognita yang berarti daerah misterius yang belum terpetakan. Kontak pertama suku pedalaman Provinsi Papua Pegunungan dengan dunia luar terjadi pertama kali oleh ekspedisi yang dipimpin Hendrikus Albertus Lorentz tahun 1909 untuk mencari jalur mencapai Puncak Wilhelmina (sekarang disebut Puncak Trikora) yang terjal dan tertutup salju. Anggota ekspedisi tersebut beristirahat dan melihat prosesi adat di perkampungan suku Pesechem atau Pesegem. Namanya kemudian diabadikan dalam nama Taman Nasional Lorentz. Setelah ekspedisi tersebut, dilakukan banyak ekspedisi lain oleh de Bruyn, Franssen Herderschee, Karel Doorman, dan lain-lain. Ekspedisi oleh van Overeem dan Kremer tahun 1920 berhasil menemukan Lembah Swart (sekarang Lembah Toli di wilayah Tolikara) beserta suku Dani yang tinggal disana. Ekspedisi ini kemudian menemukan Danau Habema dan berhasil mencapai Puncak Wilhelmina dari sisi utara. Lembah Baliem yang dihuni suku Dani ditemukan secara tidak sengaja dari pesawat terbang oleh ekspedisi yang dipimpin Richard Archbold dari Museum Sejarah Alam Amerika di tahun 1938. Ekspedisi ini diperkuat oleh puluhan tentara Belanda beserta orang-orang Dayak sebagai pemikul barang. Bangsa Belanda menyebut Lembah Baliem dengan Groote Vallei atau "Lembah Besar".'
        ]);
        Province::create([
            'id' => 27,
            'province_name' => 'Papua Selatan',
            'video_link' => 'https://www.youtube.com/embed/ujIoFrvbsJU?si=9k-B20LiVm3XKsZN',
            'deskripsi' => 'Papua Selatan adalah salah satu provinsi di Indonesia yang telah dimekarkan dari provinsi Papua pada 2022. Ibu kota provinsi ini berada di Kabupaten Merauke, tepatnya di Kota Terpadu Mandiri (KTM) Salor yang terletak di Distrik Kurik sekitar 60 km dari Kota Merauke.

            Provinsi ini dimekarkan dari provinsi Papua bersama dengan dua provinsi lainnya, yakni Papua Pegunungan dan Papua Tengah berdasarkan UU Nomor 14 Tahun 2022, yang ditandatangani presiden Indonesia, Joko Widodo, tanggal 25 Juli 2022.Papua Selatan merupakan provinsi dengan jumlah penduduk paling sedikit di Indonesia.

            Papua Selatan telah diperjuangkan untuk menjadi provinsi tersendiri sejak tahun 2002 dan kembali diajukan menjadi provinsi pada tahun 2020. Pemekaran Provinsi Papua Selatan awalnya direncanakan akan terdiri atas lima kabupaten, yakni Kabupaten Asmat, Kabupaten Boven Digoel, Kabupaten Mappi, Kabupaten Pegunungan Bintang, dan Kabupaten Merauke. Atas dasar pertimbangan letak wilayah, Kabupaten Pegunungan Bintang kemudian memilih undur diri.',

            'sejarah' => 'Sebelum datangnya bangsa Eropa, wilayah rawa-rawa Papua Selatan dihuni oleh berbagai suku seperti Asmat, Marind, dan Wambon yang masih menjaga tradisinya. Suku Marind atau disebut juga Malind dulunya hidup berkelompok di sepanjang sungai-sungai di wilayah Merauke dan hidup dengan berburu, meramu, dan berkebun. Selain itu orang Marind juga dikenal sebagai suku pengayau atau pemburu kepala (headhunting). Orang Marind menggunakan perahu mengarungi sungai dan pantai menuju kampung yang jauh dan memenggal kepala penghuninya. Orang Marind kemudian membawa kepala korbannya untuk diawetkan dan dirayakan. Pada abad ke-19, bangsa Eropa mulai melakukan penjajahan di Pulau Papua. Pulau Papua dibelah dengan garis lurus, bagian barat masuk ke wilayah Nugini Belanda dan bagian timur masuk wilayah Inggris. Suku Malind sering melewati perbatasan tersebut untuk pergi mengayau. Sehingga pada tahun 1902, Belanda mendirikan pos militer di ujung timur Papua Selatan untuk memperkuat perbatasan dan menghilangkan tradisi tersebut. Pos ini berada di sungai Maro sehingga kemudian daerahnya sekitarnya diberi nama Merauke. Belanda juga menempatkan misi Katolik di pos ini untuk menyebarkan agamanya serta membantu menghapuskan tradisi pengayauan. Pos ini lama kelamaan semakin ramai sehingga menjadi sebuah kota. Kemudian Merauke dijadikan ibu kota dari Afdeeling Zuid Nieuw Guinea atau Provinsi Nugini Selatan. Pada masa penjajahan Belanda juga, Orang Jawa didatangkan ke Merauke untuk membuka lahan persawahan.'
        ]);
        Province::create([
            'id' => 28,
            'province_name' => 'Papua Tengah',
            'video_link' => 'https://www.youtube.com/embed/ujIoFrvbsJU?si=9k-B20LiVm3XKsZN',
            'deskripsi' => 'Papua Tengah adalah sebuah provinsi di Indonesia bagian timur yang telah dimekarkan dari provinsi Papua pada tahun 2022. Ibu kota provinsi ini berada di Kabupaten Nabire. Papua Tengah dimekarkan dari Provinsi Papua bersama dua provinsi lainnya yakni Papua Pegunungan dan Papua Selatan pada 30 Juni 2022 berdasarkan Undang-Undang Nomor 15 Tahun 2022. Cakupan wilayah Papua Tengah kira-kira sesuai dengan wilayah adat Mee Pago dan Saireri.

            Kabupaten Nabire di bagian utara Papua Tengah merupakan dataran rendah berbatasan langsung dengan Taman Nasional Teluk Cenderawasih yang memiliki potensi pariwisata bahari seperti terumbu karang, pulau-pulau berpasir putih dan hiu paus. Bagian tengah Papua Tengah terdapat kawasan Danau Paniai dan Pegunungan Jayawijaya. Di provinsi ini terdapat gunung tertinggi di Indonesia yaitu Puncak Jaya yang terdapat gletser abadi serta tambang emas Grasberg yang dioperasikan oleh Freeport Indonesia. Bagian selatan Papua Tengah adalah Kabupaten Mimika dengan ibu kotanya di Timika, yang merupakan salah satu kota besar di Pulau Papua. Sedangkan topografi Mimika berupa rawa-rawa, sungai, dan pantai.',

            'sejarah' => 'Daerah barat Mimika sejak abad-18 menjadi jangkauan terjauh pengaruh "Uli Siwa" Kesultanan Tidore di pesisir barat selatan Pulau Papua. Wilayah ini dipengaruhi oleh tiga kelompok besar, Suku Koiwai, Suku Kamoro, dan Suku Asmat. Hubungan perdagangan akan budak, peralatan besi, kain, dan ornamen tubuh yang terbentuk menanamkan banyak pengaruh terhadap penduduk lokal dengan ditandainya penggunaan gelar asal Maluku (raja, mayor, kapitan, dan orang tua) dan juga kebudayaan Islamis masyarakat seperti penggunaan topi berbentuk turban dan kebiasaan tidak makan babi hingga pada tahun 1950-an.

            Pusat perdagangan di wilayah ini berpusat di Kipia yang dipimpin oleh seorang yang mendapat gelar raja dari Kerajaan Namatota (Koiwai) bernama Naowa. Kipia memimpin konfederasi kampung Kamoro bernama Tarya We, bersama Poraoka, Maparpe, Wumuka, Umar dan Aindua. Mereka bekerja sama karena wilayahnya yang kurang akan Sagu dan mengintimidasi wilayah yang lebih subur disebelah timur dengan kano dan minaki (senjata api) yang diterima dari perdagangan. Sedangkan di timur terjadi perang besar bernama Perang Tipuka dimana kampung Tipuka dihancurkan oleh Koperapoka dibantu koalisi Mware, Pigapu, Hiripau dan Miyoko yang diperkirakan atas balas dendam karena Tipuka menculik warga untuk didagangkan. Hubungan perdagangan dan pengaruh dari Maluku ini lambat laun hilang dengan semakin kuatnya kolonialisme Belanda, dan masuknya misionaris Katolik serta pedagang asal Tiongkok.'
        ]);
        Province::create([
            'id' => 29,
            'province_name' => 'Riau',
            'video_link' => 'https://www.youtube.com/embed/-25jzPDI7is?si=oA8c1LM0aZymbK2y',
            'deskripsi' => 'Riau (Jawi: رياو) adalah sebuah provinsi di Indonesia yang terletak di pantai timur pulau Sumatera bagian tengah. Wilayah pesisirnya berbatasan dengan Selat Malaka. Hingga tahun 2004, provinsi ini juga meliputi Kepulauan Riau, sekelompok besar pulau-pulau kecil (pulau-pulau utamanya antara lain Pulau Batam dan Pulau Bintan) yang terletak di sebelah Timur Sumatra dan sebelah Selatan Singapura. Kepulauan ini dimekarkan menjadi provinsi tersendiri pada Juli 2004. Ibu kota dan kota terbesar di provinsi Riau adalah Pekanbaru, dan kota besar lainnya setelah Pekanbaru adalah kota Dumai. Berdasarkan hasil Badan Pusat Statistik Riau tahun 2022, penduduk provinsi Riau berjumlah 6.493.603 jiwa, dengan kepadatan penduduk 75 jiwa/km².',
            'sejarah' => 'Riau diduga telah dihuni sejak masa antara 10.000-40.000 SM. Kesimpulan ini diambil setelah penemuan alat-alat dari zaman Pleistosin di daerah aliran sungai Sungai Sengingi di Kabupaten Kuantan Singingi pada bulan Agustus 2009. Alat batu yang ditemukan antara lain kapak penetak, perimbas, serut, serpih dan batu inti yang merupakan bahan dasar pembuatan alat serut dan serpih. Tim peneliti juga menemukan beberapa fosil kayu yang diprakirakan berusia lebih tua dari alat-alat batu itu. Diduga manusia pengguna alat-alat yang ditemukan di Riau adalah pithecanthropus erectus seperti yang pernah ditemukan di Sangiran, Jawa Tengah. Penemuan bukti ini membuktikan ada kehidupan lebih tua di Riau yang selama ini selalu mengacu pada penemuan Candi Muara Takus di Kampar sebagai titik awalnya.'
        ]);
        Province::create([
            'id' => 30,
            'province_name' => 'Sulawesi Barat',
            'video_link' => 'https://www.youtube.com/embed/bfTX6WHmbto?si=7LBjRMOATWtlGb_e',
            'deskripsi' => 'Sulawesi Barat (disingkat Sulbar, Lontara: ᨔᨘᨒᨓᨙᨔᨗ ᨅᨑ) adalah sebuah provinsi yang terletak di bagian barat Pulau Sulawesi, Indonesia. Daerah ini pernah menjadi bagian dari provinsi Sulawesi Selatan hingga pemekaran provinsi pada 2004. Ibu kota provinsi Sulawesi Barat adalah Kabupaten Mamuju. Pada pertengahan tahun 2023, jumlah penduduk Sulawesi Barat sebanyak 1.457.481 prang.

            Pembentukan provinsi Sulawesi Barat merupakan hasil pemekaran dari provinsi Sulawesi Selatan yang didasarkan pada Undang-Undang Nomor 26 Tahun 2004 yang disahkan dalam rapat Paripurna antara Pemerintah dan DPR RI, dan diresmikan oleh Menteri Dalam Negeri atas nama Presiden Republik Indonesia pada tanggal 16 Oktober 2004. Sulawesi Barat memiliki daratan dengan luas 16.937, 16 km2 dan lautan dengan luas 20.342 km2 serta pesisir pantai sepanjang 677 km. Jumlah kecamatan di Sulawesi barat sebanyak 69 dengan jumlah desa/kelurahan sebanyak 649.',

            'sejarah' => 'Sebelum datangnya Belanda, suku Mandar di Sulawesi Barat terdiri dari berbagai kerajaan. Pada Abad ke-16, Raja Tomepayung dari Kerajaan Balanipa memprakarsai penyatuan kerajaan-kerajaan tersebut menjadi konfederasi sehingga dapat meningkatkan kesejahteraan dan ketertiban bersama dengan mengontrol perdagangan di pesisir barat Sulawesi. Kerajaan Balanipa, Kerajaan Binuang, Sendana, Tapalang, Banggae, Pamboang, dan Mamuju, bersatu membentuk persekutuan Pitu Babana Binanga (tujuh kerajaan pesisir) melalui Assitalliang Tammajarra atau Perjanjian Tammajarra. Balanipa berstatus sebagai ayah atau ketua, Sendana sebagai ibu atau wakil ketua dan kerajaan lain sebagai anak atau anggota. Kerajaan Mandar pesisir melakukan perluasan ke utara yang merupakan wilayah Suku Kaili. Tidak hanya di pesisir, kerajaan-kerajaan di pedalaman juga membentuk persekutuan Pitu Ulunna Salu (tujuh kerajaan hulu) yang terdiri dari Tabulahan, Rantebulahan, Aralle, Mambi, Matangnga, Tabang, dan Bambang. Kedua persekutuan tersebut sering terlibat konflik seperti Perang Lahakang, Sungkiq, dan Damadamaq. Sehingga Raja Tomepayung dari Balanipa sebagai perwakilan Pitu Babana Binanga bertemu dengan Raja Londong Dahata dari Rantebulahan sebagai perwakilan Pitu Ulunna Salu membuat perjanjian allamungan batu di Luyo Balanipa untuk menyatukan wilayah Mandar baik di pesisir maupun di pedalaman. Mandar menjadi kerajaan maritim yang kuat dan disegani.'
        ]);
        Province::create([
            'id' => 31,
            'province_name' => 'Sulawesi Selatan',
            'video_link' => 'https://www.youtube.com/embed/4VPFNfOsv2s?si=0_edbN0ub3cT8Wgq',
            'deskripsi' => 'Sulawesi Selatan (disingkat Sulsel, Lontara: ᨔᨘᨒᨓᨙᨔᨗ ᨔᨛᨒᨈ ) adalah sebuah provinsi di semenanjung selatan Sulawesi. Kepulauan Selayar di selatan Sulawesi juga merupakan bagian dari provinsi tersebut. Ibu kota provinsi ini berada di Kota Makassar. Provinsi ini berbatasan dengan Sulawesi Tengah dan Sulawesi Barat di utara, Teluk Bone dan Sulawesi Tenggara di timur, Selat Makassar di barat, dan Laut Flores di selatan.

            Sensus 2010 memperkirakan jumlah penduduk sebanyak 8.032.551 jiwa yang menjadikan Sulawesi Selatan sebagai provinsi terpadat di pulau itu (46% dari populasi Sulawesi ada di Sulawesi Selatan), dan provinsi terpadat keenam di Indonesia. Pada Sensus 2020 ini telah meningkat menjadi 9.073.509. Suku bangsa utama di Sulawesi Selatan adalah suku Bugis, Makassar, Toraja, dan Mandar. Perekonomian provinsi ini didasarkan pada pertanian, perikanan, dan pertambangan emas , magnesium , besi dan logam lainnya. pinisi adalah sebuah kapal layar tradisional Indonesia bertiang dua, masih digunakan secara luas oleh orang Bugis dan Makassar, sebagian besar untuk tujuan transportasi, kargo, dan penangkapan ikan antar pulau di kepulauan Indonesia.',

            'sejarah' => 'Sekitar 30.000 tahun silam pulau ini telah dihuni oleh manusia. Penemuan tertua ditemukan di gua-gua dekat bukit kapur dekat Maros, sekitar 30 km sebelah timur laut dan Makassar sebagai ibu kota Provinsi Sulawesi Selatan. Kemungkinan lapisan budaya yang tua berupa alat batu Pebble dan flake telah dikumpulkan dari teras sungai di lembah Walanae, di antara Soppeng dan Sengkang, termasuk tulang-tulang babi raksasa dan gajah-gajah yang telah punah.

            Selama masa kemasan perdagangan rempah-rempah, pada abad ke-15 sampai ke-19, Sulawesi Selatan berperan sebagai pintu gerbang ke kepulauan Maluku, tanah penghasil rempah. Kerajaan Gowa dan Bone yang perkasa memainkan peranan penting di dalam sejarah Kawasan Timur Indonesia di masa Ialu.

            Pada sekitar abad ke-14 di Sulawesi Selatan terdapat sejumlah kerajaan kecil, dua kerajaan yang menonjol ketika itu adalah Kerajaan Gowa yang berada di sekitar Makassar dan Kerajaan Bugis yang berada di Bone. Pada tahun 1530, Kerajaan Gowa mulai mengembangkan diri, dan pada pertengahan abad ke-16 Gowa menjadi pusat perdagangan terpenting di wilayah timur Indonesia. Pada tahun 1605, Raja Gowa memeluk Agama Islam serta menjadikan Gowa sebagai Kerajaan Islam, dan antara tahun 1608 dan 1611, Kerajaan Gowa menyerang dan menaklukkan Kerajaan Bone sehingga Islam dapat tersebar ke seluruh wilayah Makassar dan Bugis.'
        ]);
        Province::create([
            'id' => 32,
            'province_name' => 'Sulawesi Tengah',
            'video_link' => 'https://www.youtube.com/embed/SME_4IM3V7M?si=hzsFjYo9hVwTXA8N',
            'deskripsi' => 'Sulawesi Tengah (disingkat Sulteng) adalah sebuah provinsi di bagian tengah Pulau Sulawesi, Indonesia. Ibu kota provinsi ini adalah Kota Palu. Luas wilayahnya 61.841,29 km², dan jumlah penduduk sebanyak 3.021.879 jiwa (2021). Sulawesi Tengah memiliki wilayah terluas di antara semua provinsi di Pulau Sulawesi, dan memiliki jumlah penduduk terbanyak kedua di Pulau Sulawesi setelah provinsi Sulawesi Selatan.',
            'sejarah' => 'Wilayah sepanjang pesisir barat Sulawesi Tengah, dari Kaili hingga Tolitoli, ditaklukkan oleh Kerajaan Gowa sekitar pertengahan abad ke-16 di bawah kepemimpinan Raja Tunipalangga. Wilayah di sekitar Teluk Palu merupakan pusat dan rute perdagangan yang penting, produsen minyak kelapa, dan "pintu masuk" ke pedalaman Sulawesi Tengah. Di sisi lain, daerah Teluk Tomini sebagian besar berada di bawah kekuasaan Kerajaan Parigi. Pada tahun 1824, perwakilan Kerajaan Banawa dan Kerajaan Palu menandatangani Korte Verklaring (Perjanjian Pendek) dengan pemerintah kolonial. Kapal-kapal Belanda mulai sering berlayar di bagian selatan Teluk Tomini setelah tahun 1830.'
        ]);
        Province::create([
            'id' => 33,
            'province_name' => 'Sulawesi Tenggara',
            'video_link' => 'https://www.youtube.com/embed/tJL6XHkrZrk?si=KcwUQvdTks6VlG34',
            'deskripsi' => 'Sulawesi Tenggara (disingkat Sultra) adalah sebuah provinsi di Indonesia yang terletak bagian tenggara pulau Sulawesi dengan ibu kota Kendari. Sulawesi Tenggara awalnya merupakan nama salah satu kabupaten di provinsi Sulawesi Selatan dan Tenggara Sulselra dengan Bau-Bau sebagai ibu kota kabupaten. Sulawesi Tenggara ditetapkan sebagai Daerah Otonom berdasarkan Perpu No. 2 tahun 1964 Juncto UU No.13 Tahun 1964.

            Provinsi Sulawesi Tenggara terletak di Jazirah Tenggara Pulau Sulawesi, secara geografis terletak di bagian selatan garis khatulistiwa di antara 02°45 – 06°15 Lintang Selatan dan 120°45 – 124°30 Bujur Timur serta mempunyai wilayah daratan seluas 38.140 km² (3.814.000 ha) dan perairan (laut) seluas 110.000 km² (11.000.000 ha). Pada pertengahan tahun 2023, jumlah penduduk Sulawesi Tenggara sebanyak 2.726.590 orang.',

            'sejarah' => 'Sulawesi Tenggara pada masa pemerintahan Negara Kesultanan – Kerajaan Nusantara hingga terbentuknya Kabupaten Sulawesi Tenggara pada tahun 1952, sebelumnya merupakan Afdeling. Onderafdeling ini kemudian dikenal dengan sebutan Onderafdeling Boeton Laiwoi dengan pusat Pemerintahannya di Bau-Bau. Onderafdeling Boeton Laiwui tersebut terdiri dari: Afdeling Boeton, Afdeling Muna, dan Afdeling Laiwui.

            Onderafdeling secara konsepsional merupakan suatu wilayah administratif setingkat kawedanan yang diperintah oleh seorang (wedana bangsa Belanda) yang disebut Kontroleur (istilah ini kemudian disebut Patih) pada masa pemerintahan kolonial Hindia Belanda. Sebuah onderafdeling terdiri atas beberapa landschap yang dikepalai oleh seorang hoofd dan beberapa distrik (kedemangan) yang dikepalai oleh seorang districthoofd atau kepala distrik setingkat asisten wedana.'
        ]);
        Province::create([
            'id' => 34,
            'province_name' => 'Sulawesi Utara',
            'video_link' => 'https://www.youtube.com/embed/bsmRpzs1Yu4?si=-S6SGpJT1Qb7ILgj',
            'deskripsi' => 'Sulawesi Utara (disingkat Sulut) adalah salah satu provinsi yang terletak di ujung utara Pulau Sulawesi, Indonesia, dengan ibu kota terletak di kota Manado. Sulawesi Utara atau Sulut berbatasan dengan Laut Maluku dan Samudra Pasifik di sebelah timur, Laut Maluku dan Teluk Tomini di sebelah selatan, Laut Sulawesi dan Provinsi Gorontalo di sebelah barat, dan Provinsi Davao Occidental di sebelah utara. Penduduk Sulawesi Utara pada pertengahan tahun 2023 berjumlah 2.676.012 jiwa, dan luas wilayahnya adalah 13.892,47 km2.

            Sulawesi Utara memiliki kepulauan dengan jumlah pulau sebanyak 287 pulau dengan 59 di antaranya berpenghuni. Wilayah administratif Sulawesi Utara terbagi menjadi 4 kota dan 11 kabupaten dengan 1.664 desa/kelurahan. Sulawesi Utara terbagi menjadi dua zona yaitu zona selatan yang berupa dataran rendah dan dataran tinggi serta zona utara yang meliputi kepulauan. Zona ekonomi eksklusif Sulawesi Utara mencapai 190.000 km2 dengan pesisir pantai sepanjang 2.395,99 km dan luas hutan mencapai 701. 885 hektare. Wilayah Sulawesi Utara juga memiliki banyak gunung berapi, dikarenakan letaknya yang berada di tepian Lempeng Sunda.',

            'sejarah' => 'Temuan benda purbakala di Sulawesi Utara di antaranya gua-gua purba di Talaud, Minahasa, Bolaang Mongondow. Kubur batu Waruga yang bertebaran di Minahasa. Pada saat terjadi pengesekan (zaman glacial) di muka bumi pada masa Plestosin, pernah terjadi migrasi fauna dari daratan Asia ke Selatan melalui Filipina dan Sulawesi Utara.

            Oleh sebab itu di Filipina dan di Sulawesi Utara terdapat peninggalan fosil-fosil binatang purba seperti gajah purba (stegodon) dan fosil hewan lainnya. Di Desa Pintareng di Tabukan Selatan di Pulau Sangihe, telah ditemukan adanya fosil-fosil gading dan geraham gajah purba tersebut. Menurut para ahli dari Museum Geologi Bandung dan dari Pusat penelitian Arkeologi Nasional Jakarta, fosil-fosil tersebut dinyatakan sebagai bagian dari fosil Stegodon yang pernah hidup di Kepulauan Nusantara pada masa Plestosin sekitar 2 juta tahun lalu.'
        ]);
        Province::create([
            'id' => 35,
            'province_name' => 'Sumatera Barat',
            'video_link' => 'https://www.youtube.com/embed/_ywqYhtZk-o?si=USG4PP7c3k_YIHtB',
            'deskripsi' => 'Sumatera Barat (disingkat Sumbar)[8] adalah sebuah provinsi di Indonesia yang terletak di Pulau Sumatra dengan ibu kota Padang. Provinsi Sumatera Barat terletak sepanjang pesisir barat Sumatra bagian tengah, dataran tinggi Bukit Barisan di sebelah timur, dan sejumlah pulau di lepas pantainya seperti Kepulauan Mentawai. Dari utara ke selatan, provinsi dengan wilayah seluas 42.012,89 km² ini berbatasan dengan empat provinsi, yakni Sumatera Utara, Riau, Jambi, dan Bengkulu.

            Sumatera Barat adalah rumah bagi etnis Minangkabau, walaupun wilayah adat Minangkabau sendiri lebih luas dari wilayah administratif Provinsi Sumatera Barat saat ini. Pada tahun 2023, provinsi ini memiliki penduduk sebanyak 5.640.629 jiwa dengan mayoritas beragama Islam. Sumatera Barat terdiri dari 12 kabupaten dan 7 kota dengan pembagian wilayah administratif sesudah kecamatan di seluruh kabupaten (kecuali Kabupaten Kepulauan Mentawai) dinamakan sebagai nagari.',

            'sejarah' => 'Nama Provinsi Sumatera Barat bermula pada zaman Vereenigde Oostindische Compagnie (VOC), di mana sebutan wilayah untuk kawasan pesisir barat Sumatra adalah Hoofdcomptoir van Sumatras westkust. Kemudian dengan semakin menguatnya pengaruh politik dan ekonomi VOC, sampai abad ke 18 wilayah administratif ini telah mencangkup kawasan pantai barat Sumatra mulai dari Barus sampai Inderapura.

            Seiring dengan kejatuhan Kerajaan Pagaruyung, dan keterlibatan Belanda dalam Perang Padri, pemerintah Hindia Belanda mulai menjadikan kawasan pedalaman Minangkabau sebagai bagian dari Pax Nederlandica, kawasan yang berada dalam pengawasan Belanda, dan wilayah Minangkabau ini dibagi atas Residentie Padangsche Benedenlanden dan Residentie Padangsche Bovenlanden.'
        ]);
        Province::create([
            'id' => 36,
            'province_name' => 'Sumatera Selatan',
            'video_link' => 'https://www.youtube.com/embed/-KzNpvyeGMw?si=J2gq-_O22fWbYqxT',
            'deskripsi' => 'Sumatra Selatan adalah provinsi di Indonesia yang terletak di bagian Selatan pulau Sumatera. Ibu kota Sumatera Selatan berada di kota Palembang, dan pada tahun 2021 penduduk provinsi ini berjumlah 8.550.849 jiwa. Secara geografis, Sumatera Selatan berbatasan dengan provinsi Jambi di utara, provinsi Kepulauan Bangka-Belitung di timur, provinsi Lampung di selatan dan Provinsi Bengkulu di barat. Provinsi ini kaya akan sumber daya alam, seperti minyak bumi, gas alam dan batu bara. Selain itu, ibu kota provinsi Sumatera Selatan, Palembang, telah terkenal sejak dahulu karena menjadi pusat Kedatuan Sriwijaya.',

            'sejarah' => 'Provinsi Sumatera Selatan dikenal juga dengan sebutan "Bumi Sriwijaya". Pada abad ke-7 hingga abad ke-12 Masehi wilayah ini merupakan pusat Kedatuan Sriwijaya yang juga terkenal dengan kerajaan maritim terbesar dan terkuat di Nusantara. Gaung dan pengaruhnya bahkan sampai ke Madagaskar di Benua Afrika.

            Sejak abad ke-13 sampai abad ke-14, wilayah ini berada di bawah kekuasaan Majapahit. Selanjutnya wilayah ini pernah menjadi daerah tak bertuan dan bersarangnya bajak laut dari Mancanegara terutama dari negeri Tiongkok. Pada awal abad ke-15 berdirilah Kesultanan Palembang yang berkuasa sampai datangnya Kolonialisme Barat, lalu disusul oleh Jepang. Ketika masih berjaya, Kedatuan Sriwijaya juga menjadikan Palembang sebagai Kota Kerajaan.

            Menurut Prasasti Kedukan Bukit yang ditemukan pada 1926 menyebutkan, pemukiman yang bernama Sriwijaya itu didirikan pada tanggal 17 Juni 683 Masehi. Tanggal tersebut kemudian menjadi hari jadi Kota Palembang yang diperingati setiap tahunnya.'
        ]);
        Province::create([
            'id' => 37,
            'province_name' => 'Sumatera Utara',
            'video_link' => 'https://www.youtube.com/embed/ELEGkJKzJjY?si=74tmhfyg15JNDVIY',
            'deskripsi' => 'Sumatera Utara atau Sumatra Utara adalah sebuah provinsi di Indonesia yang terletak di bagian utara Pulau Sumatra. Provinsi ini beribu kota di Kota Medan, dengan luas wilayah 72.981,23 km2. Sumatera Utara merupakan provinsi dengan jumlah penduduk terbesar keempat di Indonesia, setelah provinsi Jawa Barat, Jawa Timur, dan Jawa Tengah, dan terbanyak di Pulau Sumatra. Pada 31 Desember 2022 penduduk Sumatera Utara berjumlah 15.372.437 jiwa, dengan kepadatan penduduk 210 jiwa/km2.',

            'sejarah' => 'Pada zaman pemerintahan Belanda, Sumatera Utara merupakan suatu pemerintahan yang bernama Gouvernement van Sumatra dengan wilayah meliputi seluruh pulau Sumatra yang dipimpin oleh seorang gubernur yang berkedudukan di Kota Medan. Kemudian pada tahun 1948, berdasarkan Undang-undang Republik Indonesia No. 10 Tahun 1948, Provinsi Sumatera dibagi menjadi tiga provinsi berbeda yaitu: Sumatera Utara, Sumatera Tengah, dan Sumatera Selatan. Provinsi Sumatera Utara sendiri merupakan penggabungan dari tiga daerah administratif yang disebut keresidenan yaitu: Keresidenan Aceh, Keresidenan Sumatera Timur, dan Keresidenan Tapanuli.

            Dengan diterbitkannya Undang-Undang Republik Indonesia (R.I.) No. 10 Tahun 1948 pada tanggal 15 April 1948, ditetapkan bahwa Sumatera dibagi menjadi tiga provinsi yang masing-masing berhak mengatur dan mengurus rumah tangganya sendiri yaitu: Provinsi Sumatera Utara, Provinsi Sumatera Tengah, dan Provinsi Sumatera Selatan. Tanggal 15 April 1948 selanjutnya ditetapkan sebagai hari jadi Provinsi Sumatera Utara.'
        ]);
        Province::create([
            'id' => 38,
            'province_name' => 'Daerah Istimewa Yogyakarta',
            'video_link' => 'https://www.youtube.com/embed/NUq-bF-zld4?si=-gHtNqfvlBk2YOGZ',
            'deskripsi' => 'Daerah Istimewa Yogyakarta (disingkat DIY, Jawa: ꦝꦌꦫꦃꦆꦱ꧀ꦠꦶꦩꦺꦮꦪꦺꦴꦒꦾꦏꦂꦠ, pengucapan bahasa Jawa: [ŋajogjɔˈkart̪ɔ], pelafalan tidak resmi: Jogja/Jogjakarta) adalah Daerah Istimewa setingkat provinsi di Indonesia yang merupakan peleburan dari Negara Kesultanan Yogyakarta dan Negara Kadipaten Paku Alaman. Daerah Istimewa Yogyakarta terletak di bagian selatan Pulau Jawa, dan berbatasan dengan Provinsi Jawa Tengah dan Samudra Hindia. Daerah Istimewa yang memiliki luas 3.185,80 km2 ini terdiri atas satu kota, dan empat kabupaten, yang terbagi lagi menjadi 78 kapanewon/kemantren, dan 438 kalurahan/kelurahan. Menurut sensus penduduk 2010 memiliki populasi 3.452.390 jiwa dengan proporsi 1.705.404 laki-laki, dan 1.746.986 perempuan, serta memiliki kepadatan penduduk sebesar 1.084 jiwa per km2.',

            'sejarah' => 'Sebelum Indonesia merdeka, Yogyakarta merupakan daerah yang mempunyai pemerintahan sendiri atau disebut Zelfbestuurlandschappen/Daerah Swapraja, yaitu Kasultanan Ngayogyakarta Hadiningrat dan Kadipaten Pakualaman. Kasultanan Ngayogyakarta Hadiningrat didirikan oleh Pangeran Mangkubumi yang bergelar Sultan Hamengku Buwono I pada tahun 1755, sedangkan Kadipaten Pakualaman didirikan oleh Pangeran Natakusuma (saudara Sultan Hamengku Buwono II) yang bergelar Adipati Paku Alam I pada tahun 1813. Pemerintah Hindia Belanda mengakui Kasultanan, dan Pakualaman sebagai kerajaan dengan hak mengatur rumah tangganya sendiri yang dinyatakan dalam kontrak politik. Kontrak politik yang terakhir Kasultanan tercantum dalam Staatsblaad 1942 Nomor 47, sedangkan kontrak politik Pakualaman dalam Staatsblaad 1941 Nomor 577. Eksistensi kedua kerajaan tersebut telah mendapat pengakuan dari dunia internasional, baik pada masa penjajahan Belanda, Inggris, maupun Jepang. Ketika Jepang meninggalkan Indonesia, kedua kerajaan tersebut telah siap menjadi sebuah negara sendiri yang merdeka, lengkap dengan sistem pemerintahannya (susunan asli), wilayah, dan penduduknya.'
        ]);
    }
}