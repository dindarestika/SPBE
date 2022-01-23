<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Domain;
use App\Models\Aspek;
use App\Models\Indikator;
use App\Models\Evaluasi;
use App\Models\PertanyaanUmum;


class EvaluasiMandiriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evaluasi::create([
            'nama_evaluasi' => "Evaluasi SPBE 2021",
            'tahun_evaluasi' => "2021",
            'deskripsi_evaluasi' => "Evaluasi SPBE 2021",
        ]);
        Domain::create([
            'evaluasi_id' => "1",
            'no_domain' => "1",
            'nama_domain' => "Kebijakan Internal SPBE",
            'bobot_domain' => "13.00",
        ]);

        Domain::create([
            'evaluasi_id' => "1",
            'no_domain' => "2",
            'nama_domain' => "Tata Kelola SPBE",
            'bobot_domain' => "25.00",
        ]);

        Domain::create([
            'evaluasi_id' => "1",
            'no_domain' => "3",
            'nama_domain' => "Manajemen SPBE",
            'bobot_domain' => "16.50",
        ]);

        Domain::create([
            'evaluasi_id' => "1",
            'no_domain' => "4",
            'nama_domain' => "Layanan SPBE",
            'bobot_domain' => "45.50",
        ]);
        Aspek::create([
            'domain_id' => "1",
            'no_aspek' => "1",
            'nama_aspek' => "Kebijakan Internal terkait Tata Kelola SPBE",
            'bobot_aspek' => "13.00",
        ]);
        Aspek::create([
            'domain_id' => "2",
            'no_aspek' => "2",
            'nama_aspek' => "Perencanaan Strategi SPBE",
            'bobot_aspek' => "10.00",
        ]);
        Aspek::create([
            'domain_id' => "2",
            'no_aspek' => "3",
            'nama_aspek' => "Teknologi Informasi dan Komunikasi",
            'bobot_aspek' => "10.00",
        ]);
        Aspek::create([
            'domain_id' => "2",
            'no_aspek' => "4",
            'nama_aspek' => "Penyelanggara SPBE",
            'bobot_aspek' => "5.00",
        ]);
        Aspek::create([
            'domain_id' => "3",
            'no_aspek' => "5",
            'nama_aspek' => "Penerapan Manajemen SPBE",
            'bobot_aspek' => "12.00",
        ]);
        Aspek::create([
            'domain_id' => "3",
            'no_aspek' => "6",
            'nama_aspek' => "Audit TIK",
            'bobot_aspek' => "4.50",
        ]);
        Aspek::create([
            'domain_id' => "4",
            'no_aspek' => "7",
            'nama_aspek' => "Layanan Administrasi Pemerintahan Berbasis Elektronik",
            'bobot_aspek' => "27.50",
        ]);
        Aspek::create([
            'domain_id' => "4",
            'no_aspek' => "8",
            'nama_aspek' => "Layanan Publik Berbasis Elektronik",
            'bobot_aspek' => "18.00",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "1",
            'no_indikator' => "1",
            'nama_indikator' => "Tingkat Kematangan Kebijakan Internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah",
            'bobot_indikator' => "1.30",
            'penjelasan_indikator' => " Arsitektur SPBE adalah kerangka dasar yang mendeskripsikan integrasi proses bisnis, data dan informasi, infrastruktur SPBE, aplikasi SPBE, dan keamanan SPBE untuk menghasilkan layanan SPBE yang terintegrasi.
                                        Kebijakan internal Arsitektur SPBE merupakan pengaturan mengenai Arsitektur SPBE di Instansi Pusat dan Pemerintah Daerah yang bertujuan untuk memberikan panduan dalam pelaksanaan integrasi Proses Bisnis, Data dan Informasi, Infrastruktur SPBE, Aplikasi SPBE, dan Keamanan SPBE untuk menghasilkan Layanan SPBE yang terpadu.
                                        Referensi Arsitektur dan Domain Arsitektur SPBE terdiri dari:
                                        Domain Arsitektur Proses Bisnis;
                                        Domain Arsitektur Data dan Informasi;
                                        Domain Arsitektur Layanan;
                                        Domain Arsitektur Aplikasi;
                                        Domain Arsitektur Infrastruktur SPBE; dan,
                                        Domain Arsitektur Keamanan SPBE.",
        ]);

        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "1",
            'no_indikator' => "2",
            'nama_indikator' => "Tingkat kematangan kebijakan internal peta rencana SPBE Instansi Pusat/Pemerintah Daerah",
            'bobot_indikator' => "1.30",
            'penjelasan_indikator' => " Peta Rencana SPBE adalah dokumen yang mendeskripsikan arah dan langkah penyiapan dan pelaksanaan SPBE yang terintegrasi.
                                        Kebijakan internal Peta Rencana SPBE merupakan pengaturan mengenai Peta Rencana SPBE di Instansi Pusat/Pemerintah Daerah yang bertujuan untuk memberikan panduan arah dan langkah dalam penyiapan dan pelaksanaan SPBE di Instansi Pusat/Pemerintah Daerah.
                                        Peta Rencana SPBE memuat:
                                        Tata Kelola SPBE;
                                        Manajemen SPBE;
                                        Layanan SPBE;
                                        Infrastruktur SPBE;
                                        Aplikasi SPBE;
                                        Keamanan SPBE; dan,
                                        Audit TIK.",
        ]);

        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "1",
            'no_indikator' => "3",
            'nama_indikator' => "Tingkat Kematangan Kebijakan Internal Manajemen Data",
            'bobot_indikator' => "1.30",
            'penjelasan_indikator' => " Manajemen Data bertujuan untuk menjamin terwujudnya data yang akurat, mutakhir, terintegrasi, dan dapat diakses sebagai dasar perencanaan, pelaksanaan, evaluasi, dan pengendalian pembangunan nasional.
                                        Manajemen Data dilakukan melalui serangkaian proses pengelolaan Arsitektur Data, Data Induk, Data Referensi, Basis Data, Kualitas Data dan Interoperabilitas Data.
                                        Kebijakan Internal Manajemen Data merupakan pengaturan mengenai Manajemen Data di Instansi Pusat dan Pemerintah Daerah yang bertujuan untuk memberikan panduan arah dan langkah dalam pengelolaan data di Instansi Pusat dan Pemerintah Daerah.
                                        Instansi Pusat dan Pemerintah Daerah menyusun kebijakan internal Manajemen Data mengacu pada pedoman Manajemen Data SPBE.",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "1",
            'no_indikator' => "4",
            'nama_indikator' => "Tingkat Kematangan Kebijakan Internal Pembangunan Aplikasi SPBE",
            'bobot_indikator' => "1.30",
            'penjelasan_indikator' => " Aplikasi SPBE adalah satu atau sekumpulan program komputer dan prosedur yang dirancang untuk melakukan tugas atau fungsi Layanan SPBE.
            Pembangunan Aplikasi SPBE merupakan suatu proses perancangan aplikasi melalui siklus pembangunan aplikasi.
            Kebijakan internal Aplikasi SPBE merupakan pengaturan mengenai Pembangunan Aplikasi SPBE di Instansi Pusat dan Pemerintah Daerah yang bertujuan untuk memberikan panduan dalam pelaksanaan pembangunan aplikasi SPBE untuk menghasilkan Layanan SPBE yang terpadu.
            Siklus Pembangunan Aplikasi terdiri dari:
            Perencanaan;
            Analisis;
            Desain;
            Implementasi; dan,
            Pemeliharaan.",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "1",
            'no_indikator' => "5",
            'nama_indikator' => "Tingkat Kematangan Kebijakan Internal Layanan Pusat Data",
            'bobot_indikator' => "1.30",
            'penjelasan_indikator' => "Layanan Pusat Data adalah penyediaan penyimpanan aplikasi dan data.
            Layanan Pusat Data bertujuan untuk menjamin ketersediaan penyimpanan data bagi Instansi Pusat dan Pemerintah Daerah.
            Pusat Data Nasional adalah sekumpulan pusat data yang digunakan secara bersama dan bagi pakai oleh Instansi Pusat dan Pemerintah Daerah, dan saling terhubung yang terdiri atas pusat data yang diselenggarakan oleh Instansi Pusat/Pemerintah Daerah dengan memenuhi persyaratan pusat data atau pusat data yang dibangun khusus untuk digunakan secara bersama dan bagi pakai oleh Instansi Pusat dan Pemerintah Daerah.
            Kebijakan Layanan Pusat Data merupakan pengaturan mengenai layanan pusat data di Instansi Pusat dan Pemerintah Daerah yang bertujuan untuk memberikan panduan dalam pelaksanaan layanan pusat data untuk menghasilkan Layanan SPBE yang terpadu.
            Instansi Pusat dan Pemerintah Daerah menyusun kebijakan internal layanan pusat data mengacu pada pedoman layanan pusat data.",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "1",
            'no_indikator' => "6",
            'nama_indikator' => "Tingkat Kematangan Kebijakan Internal Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah",
            'bobot_indikator' => "1.30",
            'penjelasan_indikator' => "Jaringan Intra adalah jaringan tertutup yang menghubungkan antar simpul jaringan dalam suatu organisasi.
            Jaringan Intra Instansi Pusat dan Pemerintah Daerah merupakan Jaringan Intra yang diselenggarakan oleh Instansi Pusat dan Pemerintah Daerah untuk menghubungkan antar simpul jaringan dalam Instansi Pusat/Pemerintah Daerah, dengan Jaringan Intra Pemerintah dan/atau Jaringan Intra Instansi Pusat/Pemerintah Daerah lain.
            Penggunaan Jaringan Intra Instansi Pusat dan Pemerintah Daerah bertujuan untuk menjaga keamanan dalam melakukan pengiriman data dan informasi antar simpul jaringan dalam Instansi Pusat/Pemerintah Daerah.
            Penyelenggaraan Jaringan Intra Instansi Pusat/Pemerintah Daerah sebagaimana dimaksud, dapat menggunakan jaringan fisik yang dibangun sendiri oleh Instansi Pusat/Pemerintah Daerah dan/atau yang dibangun oleh penyedia jasa layanan jaringan.
            Kebijakan internal dalam hal ini mengatur pengoperasian jaringan intra Instansi Pusat/Pemerintah Daerah.",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "1",
            'no_indikator' => "7",
            'nama_indikator' => "Tingkat Kematangan Kebijakan Internal Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah",
            'bobot_indikator' => "1.30",
            'penjelasan_indikator' => "Sistem Penghubung Layanan adalah perangkat integrasi/penghubung untuk melakukan pertukaran Layanan SPBE.
            Penggunaan Sistem Penghubung Layanan Pemerintah bertujuan untuk memudahkan dalam melakukan integrasi antar Layanan SPBE.
            Syarat sebuah Sistem Penghubung Layanan:
            Tersedia jalur/bus (sistem koneksi bukan point-to-point);
            Tersedia metadata repository; dan
            Tersedia service directory.
            Kebijakan internal dalam hal ini mengatur penerapan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah.",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "1",
            'no_indikator' => "8",
            'nama_indikator' => "Tingkat Kematangan Kebijakan Internal Manajemen Keamanan Informasi",
            'bobot_indikator' => "1.30",
            'penjelasan_indikator' => "Manajemen Keamanan Informasi dilakukan melalui serangkaian proses yang meliputi penetapan ruang lingkup, penetapan penanggung jawab, perencanaan, dukungan pengoperasian, evaluasi kinerja, dan perbaikan berkelanjutan terhadap keamanan informasi dalam SPBE.
            Manajemen Keamanan Informasi bertujuan untuk menjamin keberlangsungan SPBE dengan meminimalkan dampak risiko keamanan informasi.
            Kebijakan internal dalam hal ini mengatur terkait penerapan Manajemen Keamanan Informasi pada Instansi Pusat/Pemerintah Daerah.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "1",
            'no_indikator' => "9",
            'nama_indikator' => "Tingkat Kematangan Kebijakan Internal Audit TIK",
            'bobot_indikator' => "1.30",
            'penjelasan_indikator' => "Audit Teknologi Informasi dan Komunikasi (TIK) adalah proses yang sistematis untuk memperoleh dan mengevaluasi bukti secara objektif terhadap aset teknologi informasi dan komunikasi dengan tujuan untuk menetapkan tingkat kesesuaian antara teknologi informasi dan komunikasi dengan kriteria dan/atau standar yang telah ditetapkan.
            Audit TIK terdiri atas:
            Audit Infrastruktur SPBE;
            Audit Aplikasi SPBE; dan,
            Audit Keamanan SPBE.
            Audit Teknologi Informasi dan Komunikasi meliputi pemeriksaan hal pokok teknis pada:
            Penerapan tata kelola dan manajemen teknologi informasi dan komunikasi;
            Fungsionalitas teknologi informasi dan komunikasi;
            Kinerja teknologi informasi dan komunikasi yang dihasilkan; dan,
            Aspek teknologi informasi dan komunikasi lainnya.
            Kebijakan internal dalam hal ini mengatur terkait penerapan Audit TIK pada Instansi Pusat/Pemerintah Daerah.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "1",
            'no_indikator' => "10",
            'nama_indikator' => "Tingkat Kematangan Kebijakan Internal Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah",
            'bobot_indikator' => "1.30",
            'penjelasan_indikator' => "Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah adalah para pejabat dalam tim yang diberi tugas untuk mengendalikan, mengarahkan, dan mengevaluasi SPBE, termasuk didalamnya melaksanakan perumusan kebijakan dan penerapan SPBE di Instansi Pusat dan Pemerintah Daerah masing-masing.
            Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dapat disejajarkan dengan Tim Pengarah TIK, Komite Pengarah TIK, ataupun Steering Committee yang mempunyai tugas seperti dimaksud pada huruf a.
            Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dipimpin oleh seorang koordinator yang ditetapkan oleh pimpinan Instansi Pusat/Kepala Daerah.
            Kebijakan internal dalam hal ini mengatur terkait tugas dan fungsi Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "2",
            'no_indikator' => "11",
            'nama_indikator' => "Tingkat Kematangan Arsitektur SPBE Instansi Pusat/Pemerintah Daerah",
            'bobot_indikator' => "2.50",
            'penjelasan_indikator' => "Arsitektur SPBE adalah kerangka dasar yang mendeskripsikan integrasi proses bisnis, data dan informasi, infrastruktur SPBE, aplikasi SPBE, dan keamanan SPBE untuk menghasilkan layanan SPBE yang terintegrasi.
            Arsitektur SPBE Instansi Pusat/Pemerintah Daerah merupakan Arsitektur SPBE yang diterapkan di Instansi Pusat/Pemerintah Daerah yang bertujuan untuk memberikan panduan dalam pelaksanaan integrasi Proses Bisnis, Data dan Informasi, Infrastruktur SPBE, Aplikasi SPBE, dan Keamanan SPBE untuk menghasilkan Layanan SPBE yang terpadu.
            Referensi Arsitektur dan Domain Arsitektur SPBE terdiri dari:
            Domain arsitektur Proses Bisnis;
            Domain arsitektur Data dan Informasi;
            Domain arsitektur Layanan;
            Domain arsitektur Aplikasi;
            Domain arsitektur Infrastruktur SPBE; dan,
            Domain arsitektur Keamanan SPBE.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "2",
            'no_indikator' => "12",
            'nama_indikator' => "Tingkat Kematangan Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah",
            'bobot_indikator' => "2.50",
            'penjelasan_indikator' => "Peta Rencana SPBE adalah dokumen yang mendeskripsikan arah dan langkah penyiapan dan pelaksanaan SPBE yang terintegrasi.
            Peta Rencana SPBE memuat:
            Tata Kelola SPBE;
            Manajemen SPBE;
            Layanan SPBE;
            Infrastruktur SPBE;
            Aplikasi SPBE;
            Keamanan SPBE; dan
            Audit TIK.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "2",
            'no_indikator' => "13",
            'nama_indikator' => "Tingkat Kematangan Rencana dan Anggaran SPBE",
            'bobot_indikator' => "2.50",
            'penjelasan_indikator' => "Rencana dan Anggaran SPBE adalah dokumen yang mendeskripsikan program, kegiatan dan pemanfaatan anggaran SPBE.
            Rencana dan Anggaran SPBE disusun sesuai dengan proses perencanaan dan penganggaran tahunan pemerintah.
            Rencana dan Anggaran SPBE Instansi Pusat/Pemerintah Daerah berpedoman pada Arsitektur SPBE Instansi Pusat/Pemerintah Daerah dan Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "2",
            'no_indikator' => "14",
            'nama_indikator' => "Tingkat Kematangan Inovasi Proses Bisnis SPBE",
            'bobot_indikator' => "2.50",
            'penjelasan_indikator' => "Proses Bisnis adalah dokumen yang mendeskripsikan hubungan kerja yang efektif dan efisien antar unit organisasi untuk menghasilkan kinerja sesuai dengan tujuan pendirian organisasi agar menghasikan keluaran yang bernilai tambah bagi pemangku kepentingan (PermenPANRB No 19 Tahun 2018).
            Penyusunan Proses Bisnis bertujuan untuk memberikan pedoman dalam penggunaan data dan informasi serta penerapan Aplikasi SPBE, Keamanan SPBE, dan Layanan SPBE.
            Instansi Pusat/Pemerintah Daerah menyusun Proses Bisnis yang selaras dengan Arsitektur SPBE Instansi Pusat/Pemerintah Daerah.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "3",
            'no_indikator' => "15",
            'nama_indikator' => "Tingkat Kematangan Pembangunan Aplikasi SPBE",
            'bobot_indikator' => "2.50",
            'penjelasan_indikator' => "Aplikasi SPBE adalah satu atau sekumpulan program komputer dan prosedur yang dirancang untuk melakukan tugas atau fungsi Layanan SPBE.
            Pembangunan Aplikasi SPBE merupakan suatu proses perancangan aplikasi melalui siklus pembangunan aplikasi.
            Siklus Pembangunan Aplikasi terdiri dari:
            Perencanaan;
            Analisis;
            Desain;
            Implementasi; dan,
            Pemeliharaan.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "3",
            'no_indikator' => "16",
            'nama_indikator' => "Tingkat Kematangan Layanan Pusat Data",
            'bobot_indikator' => "2.50",
            'penjelasan_indikator' => "Pusat Data adalah fasilitas yang digunakan untuk penempatan sistem elektronik dan komponen terkait lainnya untuk keperluan penempatan, penyimpanan dan pengolahan data, dan pemulihan data baik yang dimiliki secara fisik dan non-fisik (cloud).
            Layanan Pusat Data adalah penyediaan penyimpanan aplikasi dan data.
            Layanan Pusat Data bertujuan untuk menjamin ketersediaan penyimpanan data bagi Instansi Pusat dan Pemerintah Daerah.
            Pusat Data Nasional adalah sekumpulan pusat data yang digunakan secara bersama dan bagi pakai oleh Instansi Pusat dan Pemerintah Daerah, dan saling terhubung yang terdiri atas pusat data yang diselenggarakan oleh Instansi Pusat/Pemerintah Daerah dengan memenuhi persyaratan pusat data atau pusat data yang dibangun khusus untuk digunakan secara bersama dan bagi pakai oleh Instansi Pusat dan Pemerintah Daerah.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "3",
            'no_indikator' => "17",
            'nama_indikator' => "Tingkat Kematangan Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah",
            'bobot_indikator' => "2.50",
            'penjelasan_indikator' => "Jaringan Intra adalah jaringan tertutup yang menghubungkan antar simpul jaringan dalam suatu organisasi.
            Jaringan Intra Instansi Pusat/Pemerintah Daerah merupakan Jaringan Intra yang diselenggarakan oleh Instansi Pusat/Pemerintah Daerah untuk menghubungkan antar simpul jaringan dalam Instansi Pusat/Pemerintah Daerah, dengan Jaringan Intra Pemerintah dan/atau Jaringan Intra Instansi Pusat/Pemerintah Daerah lain.
            Penggunaan Jaringan Intra Instansi Pusat/Pemerintah Daerah bertujuan untuk menjaga keamanan dalam melakukan pengiriman data dan informasi antar simpul jaringan dalam Instansi Pusat/Pemerintah Daerah.
            Penyelenggaraan Jaringan Intra Instansi Pusat/Pemerintah Daerah sebagaimana dimaksud, dapat menggunakan jaringan fisik yang dibangun sendiri oleh Instansi Pusat/Pemerintah Daerah dan/atau yang dibangun oleh penyedia jasa layanan jaringan.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "3",
            'no_indikator' => "18",
            'nama_indikator' => "Tingkat Kematangan Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah",
            'bobot_indikator' => "2.50",
            'penjelasan_indikator' => "Sistem Penghubung Layanan adalah perangkat integrasi/penghubung untuk melakukan pertukaran Layanan SPBE.
            Penggunaan Sistem Penghubung Layanan Pemerintah bertujuan untuk memudahkan dalam melakukan integrasi antar Layanan SPBE.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "4",
            'no_indikator' => "19",
            'nama_indikator' => "Tingkat Kematangan Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah",
            'bobot_indikator' => "2.50",
            'penjelasan_indikator' => "Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah adalah para pejabat dalam tim yang diberi tugas untuk mengendalikan, mengarahkan, dan mengevaluasi SPBE, termasuk didalamnya melaksanakan perumusan kebijakan dan penerapan SPBE di Instansi Pusat dan Pemerintah Daerah masing-masing.
            Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dapat disejajarkan dengan Tim Pengarah TIK, Komite Pengarah TIK, ataupun Steering Committee yang mempunyai tugas seperti dimaksud pada huruf a.
            Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dipimpin oleh seorang koordinator yang ditetapkan oleh pimpinan Instansi Pusat/Kepala Daerah.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "4",
            'no_indikator' => "20",
            'nama_indikator' => "Tingkat Kematangan Kolaborasi Penerapan SPBE",
            'bobot_indikator' => "2.50",
            'penjelasan_indikator' => "Kolaborasi SPBE merupakan wadah informal untuk pertukaran informasi dan peningkatan kapasitas pelaksanaan SPBE bagi Instansi Pusat, Pemerintah Daerah, perguruan tinggi, lembaga penelitian, pelaku usaha, dan masyarakat.
            Kolaborasi SPBE dapat dimanfaatkan untuk antara lain:
            penyampaian ide/gagasan SPBE;
            pengembangan infrastruktur dan Aplikasi SPBE dari kontribusi komunitas TIK;
            peningkatan kompetensi teknis;
            perbaikan kualitas Layanan SPBE;
            penelitian dan kajian pengembangan SPBE; dan
            penyelesaian masalah untuk kepentingan bersama.
            Kolaborasi SPBE dapat dilakukan dalam bentuk pertemuan informal dan pertemuan virtual.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "5",
            'no_indikator' => "21",
            'nama_indikator' => "Tingkat Kematangan Penerapan Manajemen Risiko SPBE",
            'bobot_indikator' => "1.50",
            'penjelasan_indikator' => "Manajemen Risiko SPBE adalah pendekatan sistematis yang meliputi proses, pengukuran, struktur, dan budaya untuk menentukan tindakan terbaik terkait Risiko SPBE;
            Risiko SPBE adalah peluang terjadinya suatu peristiwa yang akan mempengaruhi keberhasilan terhadap pencapaian tujuan penerapan SPBE;
            Manajemen Risiko bertujuan untuk menjamin keberlangsungan SPBE dengan meminimalkan dampak risiko dalam SPBE;
            Instansi Pusat dan Pemerintah Daerah menerapkan manajemen risiko SPBE berdasarkan pedoman Manajemen Risiko SPBE.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "5",
            'no_indikator' => "22",
            'nama_indikator' => "Tingkat Kematangan Penerapan Manajemen Keamanan Informasi",
            'bobot_indikator' => "1.50",
            'penjelasan_indikator' => "Manajemen Keamanan Informasi dilakukan melalui serangkaian proses yang meliputi penetapan ruang lingkup, penetapan penanggung jawab, perencanaan, dukungan pengoperasian, evaluasi kinerja, dan perbaikan berkelanjutan terhadap Keamanan Informasi dalam SPBE.
            Manajemen Keamanan Informasi bertujuan untuk menjamin keberlangsungan SPBE dengan meminimalkan dampak risiko Keamanan Informasi.
            Penerapan Keamanan Informasi berlandaskan penjaminan kerahasiaan, keutuhan, ketersediaan, keaslian, dan kenirsangkalan (non-repudiation) sumber daya terkait data dan informasi, Infrastruktur SPBE, dan aplikasi.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "5",
            'no_indikator' => "23",
            'nama_indikator' => "Tingkat Kematangan Penerapan Manajemen Data",
            'bobot_indikator' => "1.50",
            'penjelasan_indikator' => "Manajemen Data dilakukan melalui serangkaian proses pengelolaan arsitektur data, data induk, data referensi, basis data, kualitas data dan interoperabilitas data.
            Manajemen Data bertujuan untuk menjamin terwujudnya data yang akurat, mutakhir, terintegrasi, dan dapat diakses sebagai dasar perencanaan, pelaksanaan, evaluasi, dan pengendalian pembangunan nasional.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "5",
            'no_indikator' => "24",
            'nama_indikator' => "Tingkat Kematangan Penerapan Manajemen Aset TIK",
            'bobot_indikator' => "1.50",
            'penjelasan_indikator' => "Manajemen aset teknologi informasi dan komunikasi dilakukan melalui serangkaian proses perencanaan, pengadaan, pengelolaan, dan penghapusan perangkat keras dan perangkat lunak yang digunakan dalam SPBE.
            Manajemen aset teknologi informasi dan komunikasi bertujuan untuk menjamin ketersediaan dan optimalisasi pemanfaatan aset teknologi informasi dan komunikasi dalam SPBE.
            Aset TIK mencakup perangkat lunak, perangkat keras, data dan informasi, infrastruktur, SDM, lisensi, data, SOP, outsource services, dan IT asset register.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "5",
            'no_indikator' => "25",
            'nama_indikator' => "Tingkat Kematangan Penerapan Kompetensi Sumber Daya Manusia",
            'bobot_indikator' => "1.50",
            'penjelasan_indikator' => "Manajemen Sumber Daya Manusia dilakukan melalui serangkaian proses perencanaan, pengembangan, pembinaan, dan pendayagunaan Sumber Daya Manusia dalam SPBE.
            Manajemen Sumber Daya Manusia bertujuan untuk menjamin keberlangsungan dan peningkatan mutu layanan dalam SPBE.
            Manajemen Sumber Daya Manusia (SDM) SPBE termasuk didalamnya kegiatan peningkatan kompetensi Sumber Daya Manusia SPBE dan promosi literasi SPBE.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "5",
            'no_indikator' => "26",
            'nama_indikator' => "Tingkat Kematangan Penerapan Manajemen Pengetahuan",
            'bobot_indikator' => "1.50",
            'penjelasan_indikator' => "Manajemen Pengetahuan adalah proses yang dilakukan untuk mendokumentasi pengalaman dan pengetahuan dalam perencanaan, implementasi, dan evaluasi SPBE guna meningkatkan kualitas Layanan SPBE dan mendukung proses pengambilan keputusan dalam SPBE.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "5",
            'no_indikator' => "27",
            'nama_indikator' => "Tingkat Kematangan Penerapan Manajemen Perubahan",
            'bobot_indikator' => "1.50",
            'penjelasan_indikator' => "Manajemen Perubahan dilakukan melalui serangkaian proses perencanaan, analisis, pengembangan, implementasi, pemantauan dan evaluasi terhadap perubahan SPBE.
            Manajemen Perubahan bertujuan untuk menjamin keberlangsungan dan meningkatkan kualitas Layanan SPBE melalui pengendalian perubahan yang terjadi dalam SPBE.
            Lingkup Manajemen Perubahan SPBE:
            Perubahan Aplikasi;
            Perubahan Perangkat Keras;
            Perubahan Perangkat Lunak;
            Perubahan Infrastruktur;
            Perubahan Proses Bisnis;
            Perubahan Lingkungan Organisasi;
            Perubahan Layanan;
            Perubahan Data;
            Perubahan Keamanan;
            Perubahan Arsitektur.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "5",
            'no_indikator' => "28",
            'nama_indikator' => "Tingkat Kematangan Penerapan Manajemen Layanan SPBE",
            'bobot_indikator' => "1.50",
            'penjelasan_indikator' => "Manajemen Layanan merupakan serangkaian proses pelayanan kepada pengguna, pengoperasian layanan, dan pengelolaan Aplikasi SPBE agar Layanan SPBE dapat berjalan berkesinambungan dan berkualitas.
            Manajemen Layanan bertujuan untuk menjamin keberlangsungan dan meningkatkan kualitas Layanan SPBE kepada Pengguna SPBE.
            Penyelenggaraan Manajemen Layanan SPBE ditujukan untuk memberikan dukungan terhadap layanan publik berbasis elektronik dan layanan administrasi pemerintahan berbasis elektronik agar Layanan SPBE tersebut dapat berjalan secara berkesinambungan, berkualitas, responsif, dan adaptif.
            Penyelenggaraan Manajemen Layanan dapat diwujudkan dengan membangun portal pusat layanan untuk menjalankan proses:
            pengelolaan keluhan, gangguan, masalah, permintaan, dan perubahan Layanan SPBE dari pengguna;
            pendayagunaan dan pemeliharaan Infrastruktur SPBE dan Aplikasi SPBE; dan
            pembangunan dan pengembangan aplikasi yang berpedoman pada metodologi pembangunan dan pengembangan aplikasi.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "6",
            'no_indikator' => "29",
            'nama_indikator' => "Tingkat Kematangan Pelaksanaan Audit Infrastruktur SPBE",
            'bobot_indikator' => "1.50",
            'penjelasan_indikator' => "Audit Infrastruktur SPBE Instansi Pusat dan Pemerintah Daerah dilaksanakan berdasarkan standar dan tata cara pelaksanaan Audit Infrastruktur SPBE.
            Audit Infrastruktur SPBE meliputi pemeriksaan hal pokok teknis antara lain:
            penerapan tata kelola dan manajemen infrastruktur SPBE;
            infrastruktur SPBE;
            kinerja infrastruktur SPBE yang dihasilkan; dan
            aspek infrastruktur SPBE lainnya.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "6",
            'no_indikator' => "30",
            'nama_indikator' => "Tingkat Kematangan Pelaksanaan Audit Aplikasi SPBE",
            'bobot_indikator' => "1.50",
            'penjelasan_indikator' => "Audit Aplikasi SPBE Instansi Pusat dan Pemerintah Daerah dilaksanakan berdasarkan standar dan tata cara pelaksanaan Audit Aplikasi SPBE.
            Audit Aplikasi SPBE terdiri atas:
            Audit Aplikasi Umum
            Audit Aplikasi Khusus
            Standar/pedoman audit dapat berupa standar internal Instansi Pusat/Pemerintah Daerah, standar/pedoman nasional, atau standar/pedoman internasional.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "6",
            'no_indikator' => "31",
            'nama_indikator' => "Tingkat Kematangan Pelaksanaan Audit Keamanan SPBE",
            'bobot_indikator' => "1.50",
            'penjelasan_indikator' => "Audit Keamanan SPBE Instansi Pusat dan Pemerintah Daerah dilaksanakan berdasarkan standar dan tata cara pelaksanaan Audit Keamanan SPBE.
            Audit Keamanan SPBE terdiri atas:
            Audit Keamanan Aplikasi; dan
            Audit Keamanan Infrastruktur.
            Standar/pedoman audit dapat berupa standar internal Instansi Pusat/Pemerintah Daerah, standar/pedoman nasional, atau standar/pedoman internasional.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "7",
            'no_indikator' => "32",
            'nama_indikator' => "Tingkat Kematangan Layanan Perencanaan",
            'bobot_indikator' => "2.75",
            'penjelasan_indikator' => "Perencanaan adalah serangkaian proses untuk menghasilkan pengelolaan perencanaan yang efektif, efisien, dan akuntabel.
            Layanan Perencanaan Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan perencanaan Instansi Pusat dan/atau Pemerintah Daerah.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "7",
            'no_indikator' => "33",
            'nama_indikator' => "Tingkat Kematangan Layanan Penganggaran",
            'bobot_indikator' => "2.75",
            'penjelasan_indikator' => "Penganggaran adalah serangkaian proses untuk menghasilkan pengelolaan penganggaran yang efektif, efisien, dan akuntabel.
            Layanan Penganggaran Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan penganggaran Instansi Pusat dan/atau Pemerintah Daerah.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "7",
            'no_indikator' => "34",
            'nama_indikator' => "Tingkat Kematangan Layanan Keuangan",
            'bobot_indikator' => "2.75",
            'penjelasan_indikator' => "Keuangan adalah serangkaian proses untuk menghasilkan pengelolaan keuangan yang efektif, efisien, dan akuntabel.
            Layanan Keuangan Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan keuangan Instansi Pusat dan/atau Pemerintah Daerah.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "7",
            'no_indikator' => "35",
            'nama_indikator' => "Tingkat Kematangan Layanan Pengadaan Barang dan Jasa",
            'bobot_indikator' => "2.75",
            'penjelasan_indikator' => "Pengadaan Barang/Jasa adalah serangkaian proses untuk menghasilkan pengelolaan Pengadaan barang/jasa yang efektif, efisien, dan akuntabel.
            Layanan Pengadaan Barang/Jasa Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan pengadaan barang/jasa Instansi Pusat dan/atau Pemerintah Daerah.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "7",
            'no_indikator' => "36",
            'nama_indikator' => "Tingkat Kematangan Layanan Kepegawaian",
            'bobot_indikator' => "2.75",
            'penjelasan_indikator' => "Kepegawaian adalah serangkaian proses untuk menghasilkan pengelolaan kepegawaian yang efektif, efisien, dan akuntabel.
            Layanan Kepegawaian Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan kepegawaian Instansi Pusat dan/atau Pemerintah Daerah.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "7",
            'no_indikator' => "37",
            'nama_indikator' => "Tingkat Kematangan Layanan Kearsipan Dinamis",
            'bobot_indikator' => "2.75",
            'penjelasan_indikator' => "Kearsipan adalah serangkaian proses untuk menghasilkan pengelolaan kearsipan yang efektif, efisien, dan akuntabel.
            Arsip terbagi 2, yaitu Arsip Dinamis dan Arsip Statis.
            Arsip dinamis merupakan dokumen/naskah dinas yang masih digunakan.
            Arsip statis merupakan dokumen/naskah dinas yang telah melewati masa retensinya.
            Layanan Kearsipan Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan kearsipan Instansi Pusat dan/atau Pemerintah Daerah.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "7",
            'no_indikator' => "38",
            'nama_indikator' => "Tingkat Kematangan Layanan Pengelolaan Barang Milik Negara / Daerah",
            'bobot_indikator' => "2.75",
            'penjelasan_indikator' => "Pengelolaan Barang Milik Negara/Daerah (BMN/BMD) adalah serangkaian proses untuk menghasilkan pengelolaan BMN yang efektif, efisien, dan akuntabel.
            Layanan Pengelolaan BMN/BMD Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan BMN Instansi Pusat dan/atau BMD Pemerintah Daerah.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "7",
            'no_indikator' => "39",
            'nama_indikator' => "Tingkat Kematangan Layanan Pengawasan Internal Pemerintah",
            'bobot_indikator' => "2.75",
            'penjelasan_indikator' => "Pengawasan Internal adalah serangkaian proses untuk menghasilkan pengelolaan pengawasan internal yang efektif, efisien, dan akuntabel.
            Layanan Pengawasan Internal Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan Pengawasan Internal Instansi Pusat dan/atau Pemerintah Daerah.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "7",
            'no_indikator' => "40",
            'nama_indikator' => "Tingkat Kematangan Layanan Akuntabilitas Kinerja Organisasi",
            'bobot_indikator' => "2.75",
            'penjelasan_indikator' => "Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah adalah serangkaian proses untuk menghasilkan pengelolaan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel.
            Layanan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah Instansi Pusat dan/atau Pemerintah Daerah.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "7",
            'no_indikator' => "41",
            'nama_indikator' => "Tingkat Kematangan Layanan Kinerja Pegawai",
            'bobot_indikator' => "2.75",
            'penjelasan_indikator' => "Kinerja Pegawai adalah serangkaian proses untuk menghasilkan pengelolaan kinerja pegawai Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel.
            Layanan Kinerja Pegawai Instansi Pusat/Pemerintah Daerah Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan kinerja pegawai di Instansi Pusat dan/atau Pemerintah Daerah.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "8",
            'no_indikator' => "42",
            'nama_indikator' => "Tingkat Kematangan Layanan Pengaduan Pelayanan Publik",
            'bobot_indikator' => "3.00",
            'penjelasan_indikator' => "Pengaduan Pelayanan Publik adalah serangkaian proses untuk menghasilkan pengelolaan pengaduan pelayanan publik Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel.
            Layanan Pengaduan Pelayanan Publik Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan pengaduan pelayanan publik di Instansi Pusat dan/atau Pemerintah Daerah.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "8",
            'no_indikator' => "43",
            'nama_indikator' => "Tingkat Kematangan Layanan Data Terbuka",
            'bobot_indikator' => "3.00",
            'penjelasan_indikator' => "Data Terbuka(Open Data) adalah serangkaian proses untuk menghasilkan pengelolaan data terbuka Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel.
            Data Terbuka merupakan sekumpulan data yang dikelola oleh Instansi Pusat/Pemerintah Daerah yang dapat di bagi pakai oleh Instansi Pusat/Pemerintah Daerah lain.
            Layanan Data Terbuka Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan data terbuka Instansi Pusat/Pemerintah Daerah Instansi Pusat dan/atau Pemerintah Daerah.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "8",
            'no_indikator' => "44",
            'nama_indikator' => "Tingkat Kematangan Layanan Jaringan Dokumentasi dan Informasi Hukum (JDIH)",
            'bobot_indikator' => "3.00",
            'penjelasan_indikator' => "Jaringan Dokumentasi dan Informasi Hukum adalah serangkaian proses untuk menghasilkan pengelolaan jaringan dokumentasi dan informasi hukum Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel.
            Layanan Jaringan Dokumentasi dan Informasi Hukum Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan jaringan dokumentasi dan informasi hukum Instansi Pusat/Pemerintah Daerah Instansi Pusat dan/atau Pemerintah Daerah.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "8",
            'no_indikator' => "45",
            'nama_indikator' => "Tingkat Kematangan Layanan Publik Sektor 1",
            'bobot_indikator' => "3.00",
            'penjelasan_indikator' => "Layanan Publik Sektor adalah serangkaian proses untuk menghasilkan pengelolaan tugas dan fungsi sektoral Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel.
            Layanan Publik Sektor Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan Layanan Publik Sektoral Instansi Pusat/Pemerintah DaerahInstansi Pusat dan/atau Pemerintah Daerah.
            Layanan Publik Sektor yang dimaksud merupakan layanan sektoral selain pada indikator 32 – 44.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "8",
            'no_indikator' => "46",
            'nama_indikator' => "Tingkat Kematangan Layanan Publik Sektor 2",
            'bobot_indikator' => "3.00",
            'penjelasan_indikator' => "Layanan Publik Sektor adalah serangkaian proses untuk menghasilkan pengelolaan tugas dan fungsi sektoral Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel.
            Layanan Publik Sektor Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan Layanan Publik Sektoral Instansi Pusat/Pemerintah DaerahInstansi Pusat dan/atau Pemerintah Daerah.
            Layanan Publik Sektor yang dimaksud merupakan layanan sektoral selain pada indikator 32 – 44.
            ",
        ]);
        Indikator::create([
            'opd_id' => "2",
            'aspek_id' => "8",
            'no_indikator' => "47",
            'nama_indikator' => "Tingkat Kematangan Layanan Publik Sektor 3",
            'bobot_indikator' => "3.00",
            'penjelasan_indikator' => "Layanan Publik Sektor adalah serangkaian proses untuk menghasilkan pengelolaan tugas dan fungsi sektoral Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel.
            Layanan Publik Sektor Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan Layanan Publik Sektoral Instansi Pusat/Pemerintah DaerahInstansi Pusat dan/atau Pemerintah Daerah.
            Layanan Publik Sektor yang dimaksud merupakan layanan sektoral selain pada indikator 32 – 44.
            ",
        ]);
        PertanyaanUmum::create([
            'evaluasi_id' => "1",
            'opd_id' => "1",
            'soal' => "Jelaskan Visi Penerapan Sistem Pemerintahan Berbasis Elektronik di Lingkungan Instansi Pusat/Pemerintah Daerah Anda?",
        ]);
        PertanyaanUmum::create([
            'evaluasi_id' => "1",
            'opd_id' => "1",
            'soal' => "Jelaskan Misi Penerapan Sistem Pemerintahan Berbasis Elektronik di Lingkungan Instansi Pusat/Pemerintah Daerah Anda?",
        ]);
    }
}
