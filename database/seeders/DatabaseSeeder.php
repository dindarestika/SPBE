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
use App\Models\Visi;
use App\Models\Tujuan;
use App\Models\Misi;
use App\Models\Sasaran;
use App\Models\Kontak;
use App\Models\Dasarhukum;
use App\Models\Masterplan;
use App\Models\Infrastruktur;


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
            'evaluasi_id' => "1",
            'soal' => "Jelaskan Visi Penerapan Sistem Pemerintahan Berbasis Elektronik di Lingkungan Instansi Pusat/Pemerintah Daerah Anda?",
        ]);
        PertanyaanUmum::create([
            'evaluasi_id' => "1",
            'soal' => "Jelaskan Misi Penerapan Sistem Pemerintahan Berbasis Elektronik di Lingkungan Instansi Pusat/Pemerintah Daerah Anda?",
        ]);


        Visi::create([
            'visi' => "Terwujudnya sistem pemerintahan berbasis elektronik yang terpadu dan menyeluruh untuk mencapai birokrasi dan pelayanan publik yang berkinerja tinggi.",
        ]);
        Misi::create([
            'misi' => "Melakukan penataan dan penguatan organisasi dan tata kelola sistem pemerintahan berbasis elektronik yang terpadu.",
        ]);
        Misi::create([
            'misi' => "Mengembangkan pelayanan publik berbasis elektronik yang terpadu, menyeluruh, dan menjangkau masyarakat luas.",
        ]);
        Misi::create([
            'misi' => "Membangun fondasi teknologi informasi dan komunikasi yang terintegrasi, aman, dan andal.",
        ]);
        Misi::create([
            'misi' => "Membangun SDM yang kompeten dan inovatif berbasis teknologi informasi dan komunikasi.",
        ]);
        Tujuan::create([
            'tujuan' => "Mewujudkan tata kelola pemerintahan yang bersih, efektif, efisien, transparan, dan akuntabel.",
        ]);
        Tujuan::create([
            'tujuan' => "Mewujudkan pelayanan publik yang berkualitas dan terpercaya.",
        ]);
        Tujuan::create([
            'tujuan' => "Mewujudkan sistem pemerintahan berbasis elektronik yang terpadu.",
        ]);
        Sasaran::create([
            'sasaran' => "Terwujudnya tata kelola dan manajemen SPBE yang efektif dan efisien.",
        ]);
        Sasaran::create([
            'sasaran' => "Terwujudnya layanan SPBE yang terpadu dan berorientasi kepada pengguna.",
        ]);
        Sasaran::create([
            'sasaran' => "Terselenggaranya infrastruktur SPBE yang terintegrasi.",
        ]);
        Sasaran::create([
            'sasaran' => "Meningkatnya kapasitas SDM SPBE.",
        ]);
        Kontak::create([
            'alamat' => "Jl. Jend. Sudirman, Kedung Lumbu, Ps. Kliwon, Surakarta, Jawa Tengah 57133",
            'email' => "diskominfosp@surakarta.go.id",
            'no_telephone' => "(0271) 643454",
        ]);

        Dasarhukum::create([
            'nama_dasarhukum' => "Undang-Undang Nomor 23 Tahun 2004 Tentang Pemerintah Daerah",
            'link_dasarhukum' => "https://drive.google.com/file/d/1d6On5F3IwS0e8SIOPl5GvMKQQKbRcLws/view?usp=sharing",
        ]);
        Dasarhukum::create([
            'nama_dasarhukum' => "Undang-Undang Nomor 11 Tahun 2008 Tentang Informasi dan Transaksi Elektronik",
            'link_dasarhukum' => "https://drive.google.com/file/d/1REl5WZ2_YK_wsFBX0j6DWWI8MaU6hhyg/view?usp=sharing",
        ]);
        Dasarhukum::create([
            'nama_dasarhukum' => "Undang Undang Republik Indonesia Nomor 14 Tahun 2008 Tentang Keterbukaan Informasi Publik",
            'link_dasarhukum' => "https://drive.google.com/file/d/1vCFx8jvu-Rj3c6wCpNkS4n6dGRZ-DOcR/view?usp=sharing",
        ]);
        Dasarhukum::create([
            'nama_dasarhukum' => "Instruksi Presiden Nomor 3 Tahun 2003 Tentang Kebijakan dan Strategi Nasional Pengembangan e-Government",
            'link_dasarhukum' => "https://drive.google.com/file/d/1lZg0iTl0jLECe6w0fc6oM1NFuXxLzkYZ/view?usp=sharing",
        ]);
        Dasarhukum::create([
            'nama_dasarhukum' => "Keputusan Menteri Komunikasi dan Informasi Nomor 57 Tahun 2003 Tentang Panduan Penyusunan Rencana Induk Pengembangan e-Government Lembaga",
            'link_dasarhukum' => "https://drive.google.com/file/d/10PpT1MIoVJh0YrI4MzW3qK72mrb4swvA/view?usp=sharing",
        ]);
        Dasarhukum::create([
            'nama_dasarhukum' => "Peraturan Pemerintah Nomor 82 Tahun 2012 Tentang Penyelengaraan Sistem dan Transaksi Elektronik",
            'link_dasarhukum' => "https://drive.google.com/file/d/19CeuV7a9lyTsFlWUPmqWnPPpXcLPN8Hj/view?usp=sharing",
        ]);
        Dasarhukum::create([
            'nama_dasarhukum' => "Peraturan Menteri Komunikasi dan Informatika Nomor 41 Tahun 2007 Tentang Panduan Umum Tata Kelola Teknologi Informasi dan Komunikasi Nasional",
            'link_dasarhukum' => "https://drive.google.com/file/d/1_s4LUAlS6HI69fblV0w44I2rDg7mYe1M/view?usp=sharing",
        ]);
        Dasarhukum::create([
            'nama_dasarhukum' => "Peraturan Presiden Nomor 95 Tahun 2018 tentang Sistem Pemerintahan Berbasis Elektronik",
            'link_dasarhukum' => "https://drive.google.com/file/d/1DqKgMsu9o8OxZkOLQ9efveoxbI_zCnaZ/view?usp=sharing",
        ]);
        Dasarhukum::create([
            'nama_dasarhukum' => "Peraturan Wali Kota Surakarta Nomor 28 Tahun 2019 tentang Pedoman Penyelenggaraan e-Government",
            'link_dasarhukum' => "https://drive.google.com/file/d/1EUPnEc7J6dIrO65JOLtir_SskBf1XkZN/view?usp=sharing",
        ]);
        Dasarhukum::create([
            'nama_dasarhukum' => "Peraturan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Republik Indonesia Nomor 59 Tahun 2020 tentang Pemantauan dan Evaluasi Sistem Pemerintahan Berbasis Elektronik",
            'link_dasarhukum' => "https://drive.google.com/file/d/1kJrlGpHwkNsLLDvdyr6FWGq0Rm_UVFWm/view?usp=sharing",
        ]);

        Masterplan::create([
            'nama_masterplan' => "Buku I Masterplan Smart City Tahun 2021-2026",
            'link_masterplan' => "https://drive.google.com/file/d/1kGosqtoKW4PLs4JWT3CGX1z9yELBzl6N/view?usp=sharing",
        ]);
        Masterplan::create([
            'nama_masterplan' => "Buku II Masterplan Smart City Tahun 2021-2026",
            'link_masterplan' => "https://drive.google.com/file/d/17h-yJod31iNX0r4FHR8y5qWikEzZZzSI/view?usp=sharing",
        ]);
        Masterplan::create([
            'nama_masterplan' => "Buku III Masterplan Smart City Tahun 2021-2026",
            'link_masterplan' => "https://drive.google.com/file/d/1Qdy9KrDcUlTic5TcnMWsvVVj3ErUeTcC/view?usp=sharing",
        ]);
        Masterplan::create([
            'nama_masterplan' => "Laporan Akhir Masterplan E-Government Kota Surakarta - Pemenuhan Smart Governance dalam Masterplan Smart City",
            'link_masterplan' => "https://drive.google.com/file/d/1iWjuybb2QP7Ri_gFZRqhWXVL2v36yMUP/view?usp=sharing",
        ]);
        Agenda::create([
            'jenisagenda_id' => 1,
            'nama_acara' => "Webinar Asik",
            'perihal' => "HUT KOMINFO",
            'tanggal_acara' => "super admin",
            'waktu_acara' => "super admin",
            'tempat_acara' => "Surakarta",
            'link_upload' => "https://drive.google.com/drive/folders/17yHfZubLCrvk0mTf9mgHGwT1Sii7T2CS",
            'surat' => "WEBINARASIK.pdf",
        ]);
    }
}
