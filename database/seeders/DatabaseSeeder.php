<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Opd;
use App\Models\Role;
use App\Models\Agenda;
use App\Models\Jenisagenda;
use App\Models\Domain;
use App\Models\Aspek;
use App\Models\Indikator;
use App\Models\Evaluasi;
use App\Models\Pertanyaan;
use App\Models\PertanyaanUmum;
use App\Models\Wifi;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'role_id' => "1",
            'opd_id' => 2,
            'nama_user' => "super admin",
            'email_user' => "superadmin@gmail.com",
            'username' => "super admin",
            'password' => bcrypt('super admin'),
            'alamat_user' => "Surakarta",
            'foto_user' => "superadmin.jpg",

        ]);

        User::create([
            'role_id' => "2",
            'opd_id' => 1,
            'nama_user' => "admin",
            'email_user' => "admin@gmail.com",
            'username' => "admin",
            'password' => bcrypt('admin'),
            'alamat_user' => "Surakarta",
            'foto_user' => "admin.jpg",

        ]);

        Opd::create([
            'nama_opd' => "Dinas Kebudayaan",
            'email_opd' => "dinaskebudayaan@surakarta.go.id",
            'telepon_opd' => "(0271) 714942",
            'alamat_opd' => "Jl. Brigjend Slamet Riyadi No.275, Sriwedari, Laweyan, Kota Surakarta, Jawa Tengah 57141, Indonesia",
        ]);

        Opd::create([
            'nama_opd' => "Dinas Komunikasi, Informatika, Statistik dan Persandian",
            'email_opd' => "diskominfosp@surakarta.go.id",
            'telepon_opd' => "(0271) 2931669",
            'alamat_opd' => "Jl. Jenderal Sudirman No. 2 Kompleks Balaikota Surakarta",
        ]);

        Role::create([
            'nama_role' => "Super Admin",
        ]); 

        Role::create([
            'nama_role' => "Admin",
        ]); 

        Jenisagenda::create([
            'nama_jenis' => "Seminar",
        ]); 

        Jenisagenda::create([
            'nama_jenis' => "Pelatihan",
        ]); 
        
        Domain::create([
            'evaluasi_id' => "1",
            'nama_domain' => "Kebijakan Internal SPBE",
            'bobot_domain' => "2",
        ]); 

        Domain::create([
            'evaluasi_id' => "1",
            'nama_domain' => "Tata Kelola SPBE",
            'bobot_domain' => "2",
        ]); 

        Domain::create([
            'evaluasi_id' => "1",
            'nama_domain' => "Manajemen SPBE",
            'bobot_domain' => "2",
        ]); 

        Domain::create([
            'evaluasi_id' => "1",
            'nama_domain' => "Layanan SPBE",
            'bobot_domain' => "2",
        ]); 

        Aspek::create([
            'domain_id' => "1",
            'nama_aspek' => "Kebijakan Internal Tata Kelola SPBE",
            'bobot_aspek' => "2",
        ]); 
        Aspek::create([
            'domain_id' => "2",
            'nama_aspek' => "Perencanaan Strategi SPBE",
            'bobot_aspek' => "2",
        ]); 
        Aspek::create([
            'domain_id' => "2",
            'nama_aspek' => "Teknologi Informasi dan Komunikasi",
            'bobot_aspek' => "2",
        ]); 
        Aspek::create([
            'domain_id' => "2",
            'nama_aspek' => "Penyelanggara SPBE",
            'bobot_aspek' => "2",
        ]); 
        Aspek::create([
            'domain_id' => "3",
            'nama_aspek' => "Penerapan Manajemen SPBE",
            'bobot_aspek' => "2",
        ]);
        Aspek::create([
            'domain_id' => "3",
            'nama_aspek' => "Pelaksanaan Audit TIK",
            'bobot_aspek' => "2",
        ]);
        Aspek::create([
            'domain_id' => "4",
            'nama_aspek' => "Layanan Adm.Pemerintahan Berbasis Elektronik",
            'bobot_aspek' => "2",
        ]);
        Aspek::create([
            'domain_id' => "4",
            'nama_aspek' => "Layanan Publik Berbasis Elektronik",
            'bobot_aspek' => "2",
        ]);
        Indikator::create([
            'opd_id' => "1",
            'aspek_id' => "1",
            'nama_indikator' => "Tingkat kematangan kebijakan internal arsitektur SPBE Instansi Pusat/Pemerintah Daerah",
            'bobot_indikator' => "2",
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
            'opd_id' => "1",
            'aspek_id' => "1",
            'nama_indikator' => "Tingkat kematangan kebijakan internal peta rencana SPBE Instansi Pusat/Pemerintah Daerah",
            'bobot_indikator' => "2",
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
            'opd_id' => "1",
            'aspek_id' => "1",
            'nama_indikator' => "Tingkat kematangan kebijakan internal manajemen data",
            'bobot_indikator' => "2",
            'penjelasan_indikator' => " Manajemen Data bertujuan untuk menjamin terwujudnya data yang akurat, mutakhir, terintegrasi, dan dapat diakses sebagai dasar perencanaan, pelaksanaan, evaluasi, dan pengendalian pembangunan nasional.
                                        Manajemen Data dilakukan melalui serangkaian proses pengelolaan Arsitektur Data, Data Induk, Data Referensi, Basis Data, Kualitas Data dan Interoperabilitas Data.
                                        Kebijakan Internal Manajemen Data merupakan pengaturan mengenai Manajemen Data di Instansi Pusat dan Pemerintah Daerah yang bertujuan untuk memberikan panduan arah dan langkah dalam pengelolaan data di Instansi Pusat dan Pemerintah Daerah.
                                        Instansi Pusat dan Pemerintah Daerah menyusun kebijakan internal Manajemen Data mengacu pada pedoman Manajemen Data SPBE.",
        ]); 

        Evaluasi::create([
            'nama_evaluasi' => "Evaluasi SPBE 2021",
            'tahun_evaluasi' => "2021",
            'deskripsi_evaluasi' => "Evaluasi SPBE 2021",
        ]); 

        Pertanyaan::create([
            'indikator_id' => "1",
            'tingkat' => "1",
            'kriteria' => "Konsep kebijakan internal terkait Arsitektur SPBE Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.",
            'evaluasi_id' => "1"
        ]); 

        Pertanyaan::create([
            'indikator_id' => "1",
            'tingkat' => "2",
            'kriteria' => "Kebijakan internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah ditetapkan. Kondisi: Kebijakan internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah tersebut belum memuat secara lengkap pengaturan mengenai referensi Arsitektur dan domain Arsitektur SPBE (Proses Bisnis, Data dan Informasi, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Layanan SPBE).",
            'evaluasi_id' => "1"
        ]); 

        Pertanyaan::create([
            'indikator_id' => "1",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan kebijakan internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah memuat secara lengkap pengaturan mengenai referensi Arsitektur dan domain Arsitektur SPBE (Proses Bisnis, Data dan Informasi, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Layanan SPBE).",
            'evaluasi_id' => "1"
        ]); 
        Pertanyaan::create([
            'indikator_id' => "1",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi, kebijakan internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah mengatur integrasi SPBE antar Instansi Pusat, antar Pemerintah Daerah, dan/atau antar Instansi Pusat dan Pemerintah Daerah, dan kebijakan internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.",
            'evaluasi_id' => "1"
        ]); 
        Pertanyaan::create([
            'indikator_id' => "1",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal Arsitektur Instansi Pusat/Pemerintah Daerah SPBE telah ditindaklanjuti dengan kebijakan baru.",
            'evaluasi_id' => "1"
        ]); 
        Pertanyaan::create([
            'indikator_id' => "2",
            'tingkat' => "1",
            'kriteria' => "Konsep kebijakan internal terkait Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.",
            'evaluasi_id' => "1"
        ]); 
        Pertanyaan::create([
            'indikator_id' => "2",
            'tingkat' => "2",
            'kriteria' => "Kebijakan internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah ditetapkan. Kondisi: Kebijakan internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah tersebut belum mengatur muatan Peta Rencana SPBE secara lengkap (Tata Kelola SPBE, Manajemen SPBE, Layanan SPBE, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Audit TIK).",
            'evaluasi_id' => "1"
        ]); 
        Pertanyaan::create([
            'indikator_id' => "2",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan kebijakan internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah mengatur seluruh muatan Peta Rencana SPBE secara lengkap (Tata Kelola SPBE, Manajemen SPBE, Layanan SPBE, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Audit TIK).",
            'evaluasi_id' => "1"
        ]); 
        Pertanyaan::create([
            'indikator_id' => "2",
            'tingkat' => "4",
            'kriteria' => "	Kriteria tingkat 3 telah terpenuhi, kebijakan internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah mengatur keselarasan antara Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah dan Peta Rencana SPBE Nasional. Selain itu, Kebijakan internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.",
            'evaluasi_id' => "1"
        ]); 
        Pertanyaan::create([
            'indikator_id' => "2",
            'tingkat' => "5",
            'kriteria' => "	Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal Peta Rencana SPBE Instansi. ",
            'evaluasi_id' => "1"
        ]); 
        Wifi::create([
            'nama_wifi' => "DISKOMINFO SP",
            'alamat_wifi' => "Jl. Jend. Sudirman, Kedung Lumbu, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah 57133",
            'latitude' => "-7.569533935697417",
            'longitude' => "110.82952170446538",
        ]);
        Wifi::create([
            'nama_wifi' => "Solo Paragon Mall",
            'alamat_wifi' => "Jl. Yosodipuro No.133, Mangkubumen, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57139",
            'latitude' => "-7.562266077623731",
            'longitude' => "110.80993971181434",
        ]);
        Wifi::create([
            'nama_wifi' => "Universitas Sebelas Maret",
            'alamat_wifi' => "Jl. Ir. Sutami No.36, Kentingan, Kec. Jebres, Kota Surakarta, Jawa Tengah 57126",
            'latitude' => "-7.555347373399256",
            'longitude' => "110.8567077847702",
        ]);
        PertanyaanUmum::create([
            'soal' => "Jelaskan Visi Penerapan Sistem Pemerintahan Berbasis Elektronik di Lingkungan Instansi Pusat/Pemerintah Daerah Anda?",
        ]);
        PertanyaanUmum::create([
            'soal' => "Jelaskan Misi Penerapan Sistem Pemerintahan Berbasis Elektronik di Lingkungan Instansi Pusat/Pemerintah Daerah Anda?",
        ]);
        /*
        Agenda::create([
            'jenisagenda_id' => 1,
            'nama_acara' => "Webinar Asik",
            'perihal' => "HUT KOMINFO",
            'tanggal_acara' => "super admin",
            'waktu_acara' => "super admin",
            'tempat_acara' => "Surakarta",
            'surat' => "WEBINARASIK.pdf",
        ]);
        */

    }
}
