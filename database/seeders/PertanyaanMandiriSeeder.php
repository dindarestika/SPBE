<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pertanyaan;

class PertanyaanMandiriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pertanyaan::create([
            'indikator_id' => "1",
            'tingkat' => "1",
            'kriteria' => "Konsep kebijakan internal terkait Arsitektur SPBE Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.",
        ]);

        Pertanyaan::create([
            'indikator_id' => "1",
            'tingkat' => "2",
            'kriteria' => "Kebijakan internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah ditetapkan. Kondisi: Kebijakan internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah tersebut belum memuat secara lengkap pengaturan mengenai referensi Arsitektur dan domain Arsitektur SPBE (Proses Bisnis, Data dan Informasi, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Layanan SPBE).",
        ]);

        Pertanyaan::create([
            'indikator_id' => "1",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan kebijakan internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah memuat secara lengkap pengaturan mengenai referensi Arsitektur dan domain Arsitektur SPBE (Proses Bisnis, Data dan Informasi, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Layanan SPBE).",
        ]);
        Pertanyaan::create([
            'indikator_id' => "1",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi, kebijakan internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah mengatur integrasi SPBE antar Instansi Pusat, antar Pemerintah Daerah, dan/atau antar Instansi Pusat dan Pemerintah Daerah, dan kebijakan internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "1",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal Arsitektur Instansi Pusat/Pemerintah Daerah SPBE telah ditindaklanjuti dengan kebijakan baru.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "2",
            'tingkat' => "1",
            'kriteria' => "Konsep kebijakan internal terkait Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "2",
            'tingkat' => "2",
            'kriteria' => "Kebijakan internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah ditetapkan. Kondisi: Kebijakan internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah tersebut belum mengatur muatan Peta Rencana SPBE secara lengkap (Tata Kelola SPBE, Manajemen SPBE, Layanan SPBE, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Audit TIK).",
        ]);
        Pertanyaan::create([
            'indikator_id' => "2",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan kebijakan internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah mengatur seluruh muatan Peta Rencana SPBE secara lengkap (Tata Kelola SPBE, Manajemen SPBE, Layanan SPBE, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Audit TIK).",
        ]);
        Pertanyaan::create([
            'indikator_id' => "2",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi, kebijakan internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah mengatur keselarasan antara Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah dan Peta Rencana SPBE Nasional. Selain itu, Kebijakan internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "2",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal Peta Rencana SPBE Instansi",
        ]);

        Pertanyaan::create([
            'indikator_id' => "3",
            'tingkat' => "1",
            'kriteria' => "Konsep kebijakan internal terkait Manajemen Data di Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "3",
            'tingkat' => "2",
            'kriteria' => "Kebijakan internal Manajemen Data di Instansi Pusat/Pemerintah Daerah telah ditetapkan.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "3",
            'tingkat' => "3",
            'kriteria' => "Kondisi: Kebijakan internal Manajemen Data di Instansi Pusat/Pemerintah Daerah tersebut hanya mengatur sebagian dari rangkaian proses pengelolaan arsitektur data, data induk, data referensi, basis data, kualitas data dan interoperabilitas data.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "3",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan kebijakan internal Manajemen Data di Instansi Pusat/Pemerintah Daerah telah mengatur seluruh rangkaian proses pengelolaan arsitektur data, data induk, data referensi, basis data, kualitas data dan interoperabilitas data.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "3",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal Manajemen Data di Instansi Pusat/Pemerintah Daerah telah ditindaklanjuti dengan kebijakan baru.",
        ]);

        Pertanyaan::create([
            'indikator_id' => "4",
            'tingkat' => "1",
            'kriteria' => "Konsep kebijakan internal terkait siklus Pembangunan Aplikasi SPBE di Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "4",
            'tingkat' => "2",
            'kriteria' => "Kebijakan internal terkait siklus Pembangunan Aplikasi SPBE di Instansi Pusat/Pemerintah Daerah telah ditetapkan. Kondisi: Kebijakan internal terkait Pembangunan Aplikasi SPBE telah mengatur siklus pembangunan aplikasi.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "4",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan Kebijakan internal terkait siklus Pembangunan Aplikasi SPBE telah mengatur proses konsultasi terkait siklus Pembangunan Aplikasi SPBE dengan unit kerja/perangkat daerah yang menjalankan fungsi pengelolaan TIK di Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "4",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi, kebijakan internal terkait siklus Pembangunan Aplikasi SPBE di Instansi Pusat/Pemerintah Daerah telah mengatur keterpaduan dan pengendalian Pembangunan Aplikasi SPBE oleh unit kerja/perangkat daerah yang menjalankan fungsi pengelolaan TIK di Instansi Pusat/Pemerintah Daerah. Selain itu, kebijakan internal Pembangunan Aplikasi SPBE direviu dan dievaluasi secara periodik.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "4",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal Pembangunan Aplikasi SPBE di Instansi Pusat/Pemerintah Daerah SPBE telah ditindaklanjuti dengan kebijakan baru.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "5",
            'tingkat' => "1",
            'kriteria' => "Konsep kebijakan internal terkait Layanan Pusat Data yang digunakan di Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "5",
            'tingkat' => "2",
            'kriteria' => "Kebijakan internal terkait Layanan Pusat Data yang digunakan di Instansi Pusat/Pemerintah Daerah telah ditetapkan. Kondisi: Kebijakan internal terkait Layanan Pusat Data telah mengatur penggunaan Layanan Pusat Data untuk sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "5",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan kebijakan internal terkait Layanan Pusat Data telah mengatur penggunaan Layanan Pusat Data untuk seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "5",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi, kebijakan internal terkait Layanan Pusat Data yang digunakan di Instansi Pusat/Pemerintah Daerah telah mengatur interkoneksi Layanan Pusat Data dengan Pusat Data Nasional dan/atau mengatur penggunaan Layanan Pusat Data Nasional. Selain itu, kebijakan internal terkait penggunaan Layanan Pusat Data di Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "5",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal terkait Layanan Pusat Data yang digunakan di Instansi Pusat/Pemerintah Daerah SPBE telah ditindaklanjuti dengan kebijakan baru.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "6",
            'tingkat' => "1",
            'kriteria' => "Konsep kebijakan internal terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "6",
            'tingkat' => "2",
            'kriteria' => "Kebijakan internal terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah ditetapkan. Kondisi: Kebijakan internal terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah mengatur Layanan Jaringan Intra untuk sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "6",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan kebijakan internal terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah mengatur Layanan Jaringan Intra untuk seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "6",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan kebijakan internal terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah mengatur interkoneksi Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah dengan Jaringan Intra Pemerintah dan/atau Jaringan Intra Instansi Pusat/Pemerintah Daerah lain. Selain itu, kebijakan internal terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "6",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah ditindaklanjuti dengan kebijakan baru.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "7",
            'tingkat' => "1",
            'kriteria' => "Konsep kebijakan internal terkait Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "7",
            'tingkat' => "2",
            'kriteria' => "Kebijakan internal terkait Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah telah ditetapkan. Kondisi: Kebijakan internal terkait Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah telah mengatur penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah untuk sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "7",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan kebijakan internal terkait Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah telah mengatur penggunaan Sistem Penghubung Layanan untuk seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "7",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi, kebijakan internal terkaitPenggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah telah mengatur keterhubungan dengan Sistem Penghubung Layanan Pemerintah. Selain itu, kebijakan internal terkait Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "7",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal terkait Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah telah ditindaklanjuti dengan kebijakan baru.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "8",
            'tingkat' => "1",
            'kriteria' => "Konsep kebijakan internal terkait Manajemen Keamanan Informasi belum atau telah tersedia.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "8",
            'tingkat' => "2",
            'kriteria' => "Kebijakan internal terkait Manajemen Keamanan Informasi telah ditetapkan. Kondisi: Kebijakan internal terkait Manajemen Keamanan Informasi belum mengatur secara lengkap mengenai cakupan Manajemen Keamanan Informasi (penetapan ruang lingkup, penetapan penanggung jawab, perencanaan, dukungan pengoperasian, evaluasi kinerja, dan perbaikan berkelanjutan terhadap Keamanan Informasi).",
        ]);
        Pertanyaan::create([
            'indikator_id' => "8",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan kebijakan internal terkait Manajemen Keamanan Informasi mengatur seluruh cakupan Manajemen Keamanan Informasi secara lengkap (penetapan ruang lingkup, penetapan penanggung jawab, perencanaan, dukungan pengoperasian, evaluasi kinerja, dan perbaikan berkelanjutan terhadap Keamanan Informasi).
            ",
        ]);
        Pertanyaan::create([
            'indikator_id' => "8",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi, dan kebijakan internal terkait Manajemen Keamanan Informasi telah mengatur penerapan untuk seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah. Selain itu, kebijakan internal terkait Manajemen Keamanan Informasi telah direviu dan dievaluasi secara periodik.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "8",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal terkait Manajemen Keamanan Informasi telah ditindaklanjuti dengan kebijakan baru.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "9",
            'tingkat' => "1",
            'kriteria' => "Konsep kebijakan internal terkait Audit TIK belum atau telah tersedia.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "9",
            'tingkat' => "2",
            'kriteria' => "Kebijakan internal Audit TIK telah ditetapkan. Kondisi: Kebijakan internal terkait Audit TIK hanya mengatur pelaksanaan sebagian Audit TIK (Audit Infrastruktur SPBE, Audit Aplikasi SPBE, dan Audit Keamanan SPBE).",
        ]);
        Pertanyaan::create([
            'indikator_id' => "9",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan kebijakan internal terkait Audit TIK telah mengatur pelaksanaan seluruh Audit TIK (Audit Infrastruktur SPBE Audit Aplikasi SPBE, dan Audit Keamanan SPBE).",
        ]);
        Pertanyaan::create([
            'indikator_id' => "9",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan kebijakan internal terkait Audit TIK telah direviu dan dievaluasi secara periodik.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "9",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal terkait Audit TIK telah ditindaklanjuti dengan kebijakan baru.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "10",
            'tingkat' => "1",
            'kriteria' => "Konsep kebijakan internal terkait Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "10",
            'tingkat' => "2",
            'kriteria' => "Kebijakan internal Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah ditetapkan. Kondisi: Kebijakan internal terkait Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah mencakup pengaturan tugas-tugas Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah yang mendukung penerapan SPBE pada sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "10",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan kebijakan internal terkait Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah mencakup pengaturan tugas-tugas Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah yang mendukung penerapan SPBE pada seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "10",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi, kebijakan internal terkait Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah yang mendukung penerapan SPBE antar Instansi Pusat, antar Pemerintah Daerah, dan/atau antar Instansi Pusat dan Pemerintah Daerah, dan kebijakan internal terkait Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "10",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal terkait Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah ditindaklanjuti dengan kebijakan baru.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "11",
            'tingkat' => "1",
            'kriteria' => "Konsep dokumen Arsitektur SPBE belum atau telah tersedia.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "11",
            'tingkat' => "2",
            'kriteria' => "Dokumen Arsitektur SPBE telah tersedia. Kondisi: Dokumen Arsitektur SPBE tidak/belum mencakup referensi dan domain Arsitektur SPBE Instansi Pusat/Pemerintah Daerah secara lengkap yaitu referensi dan domain arsitektur Proses Bisnis, Data dan Informasi, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Layanan SPBE.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "11",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan dokumen Arsitektur SPBE telah mencakup seluruh referensi dan domain Arsitektur SPBE Instansi Pusat/Pemerintah Daerah yaitu referensi dan domain arsitektur Proses Bisnis, Data dan Informasi, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Layanan SPBE.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "11",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan dokumen Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah berpedoman pada Arsitektur SPBE Nasional. Selain itu, dokumen Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah dilakukan reviu dan evaluasi secara periodik.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "11",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi dan dokumen Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah dilakukan pemutakhiran sebagai tindak lanjut hasil reviu dan evaluasi.",
        ]);

        Pertanyaan::create([
            'indikator_id' => "12",
            'tingkat' => "1",
            'kriteria' => "Konsep dokumen Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "12",
            'tingkat' => "2",
            'kriteria' => "Dokumen Peta Rencana SPBE telah tersedia. Kondisi: dokumen Peta Rencana SPBE tidak/belum mencakup muatan Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah secara lengkap yaitu peta rencana Tata Kelola SPBE, Manajemen SPBE, Layanan SPBE, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, Audit Teknologi SPBE dan Audit TIK.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "12",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan dokumen Peta Rencana SPBE telah mencakup seluruh muatan Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah secara lengkap yaitu peta rencana Tata Kelola SPBE, Manajemen SPBE, Layanan SPBE, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, Audit Teknologi SPBE dan Audit TIK.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "12",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan dokumen Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah diterapkan secara konsisten melalui rencana kerja dan anggaran 3 (tiga) tahun terakhir. Selain itu, dokumen Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah dilakukan reviu dan evaluasi secara periodik.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "12",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi dan dokumen Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah dilakukan pemutakhiran sebagai tindak lanjut hasil reviu dan evaluasi.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "13",
            'tingkat' => "1",
            'kriteria' => "Rencana dan Anggaran SPBE belum atau telah tertuang dalam rencana kerja dan anggaran tahunan.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "13",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan Rencana dan Anggaran SPBE pada unit kerja/perangkat daerah tidak seluruhnya dikonsultasikan kepada unit pengelola TIK di Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "13",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan seluruh Rencana dan Anggaran SPBE unit kerja/perangkat daerah telah dikonsultasikan kepada unit pengelola TIK di Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "13",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi. Seluruh Rencana dan Anggaran SPBE Instansi Pusat/Pemerintah Daerah telah terpadu dan dapat dikendalikan oleh unit kerja/lembaga daerah yang menjalankan fungsi perencanaan dan penganggaran. Selain itu, Rencana dan Anggaran SPBE telah direviu dan dievaluasi secara periodik.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "13",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi serta Rencana dan Anggaran SPBE telah dilakukan perbaikan untuk tahun anggaran berikutnya sebagai tindak lanjut hasil reviu dan evaluasi.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "14",
            'tingkat' => "1",
            'kriteria' => "Dokumen Proses Bisnis Instansi Pusat/Pemerintah belum atau telah tersedia. Kondisi: Dokumen Proses Bisnis Instansi Pusat/Pemeritah Daerah belum memenuhi standar.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "14",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan dokumen Proses Bisnis Instansi Pusat/Pemeritah Daerah telah memenuhi standar.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "14",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan Proses Bisnis Instansi Pusat/Pemeritah Daerah telah dilakukan perbaikan sebagai bentuk inovasi Proses Bisnis untuk mewujudkan proses bisnis yang lebih efisien.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "14",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi, Inovasi Proses bisnis telah diterapkan ke dalam sistem elektronik/sistem aplikasi, serta telah dilakukan reviu dan evaluasi secara periodik.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "14",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi dan melakukan perbaikan Inovasi Proses Bisnis yang diterapkan ke dalam sistem elektronik/ sistem aplikasi sebagai tindak lanjut hasil reviu dan evaluasi.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "15",
            'tingkat' => "1",
            'kriteria' => "Proses pembangunan Aplikasi SPBE belum atau telah dilakukan secara adhoc (sewaktu-waktu, tidak terencana). Kondisi: Proses pembangunan Aplikasi SPBE belum memenuhi siklus pembangunan aplikasi.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "15",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan proses pembangunan Aplikasi SPBE telah dilakukan sesuai siklus pembangunan aplikasi.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "15",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan proses pembangunan aplikasi SPBE telah dikonsultasikan kepada unit kerja/perangkat daerah yang melaksanakan fungsi pengelolaan TIK di Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "15",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan Pembangunan Aplikasi SPBE Instansi Pusat/Pemerintah Daerah telah terpadu dan dapat dikendalikan oleh unit kerja/lembaga daerah yang menjalankan fungsi pengelolaan TIK di Instansi Pusat/Pemerintah Daerah. selain itu, Pembangunan Aplikasi SPBE direviu dan dievaluasi secara periodik.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "15",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi dan Aplikasi SPBE telah dikembangkan secara optimal untuk meningkatkan efektivitas dan efisiensi terhadap perubahan lingkungan, teknologi, dan kebutuhan Instansi Pusat/Pemerintah Daerah sebagai tindak lanjut hasil reviu dan evaluasi.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "16",
            'tingkat' => "1",
            'kriteria' => "Layanan Pusat Data belum atau telah tersedia digunakan oleh Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "16",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi. Kondisi: Layanan Pusat Data tidak/belum digunakan oleh seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "16",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan Layanan Pusat Data telah digunakan oleh seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah. Selain itu, terdapat prosedur pengoperasian baku Layanan Pusat Data.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "16",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan terdapat interkoneksi Layanan Pusat Data dengan Pusat Data Nasional/Pusat Data Instansi Pusat/Pusat Data Pemerintah Daerah lain dan/atau penggunaan Layanan Pusat Data Nasional. Selain itu, penggunaan Layanan Pusat Data di Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "16",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi penggunaan Layanan Pusat Data di Instansi Pusat/Pemerintah Daerah telah ditindaklanjuti dengan melakukan perbaikan terhadap Layanan Pusat Data.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "17",
            'tingkat' => "1",
            'kriteria' => "Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "17",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi. Kondisi: Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah tidak/belum diterapkan di seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "17",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah diterapkan di seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "17",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan terdapat interkoneksi Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah dengan Jaringan Intra Pemerintah dan/atau Jaringan Intra Instansi Pusat/Pemerintah Daerah lain. Selain itu, Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "17",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah ditindaklanjuti dengan melakukan perbaikan terhadap Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "18",
            'tingkat' => "1",
            'kriteria' => "Sistem penghubung layanan Instansi Pusat dan Pemerintah Daerah belum atau telah tersedia.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "18",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi. Kondisi: Sistem penghubung layanan Instansi Pusat dan Pemerintah Daerah tidak/belum diterapkan di seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "18",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan sistem penghubung layanan Instansi Pusat dan Pemerintah Daerah telah diterapkan di seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "18",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi, sistem penghubung layanan Instansi Pusat dan Pemerintah Daerah telah terintegrasi dengan sistem penghubungan layanan pemerintah dan/atau sistem penghubung layanan Instansi Pusat/Pemerintah Daerah lain. Selain itu, sistem penghubung layanan Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "18",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi sistem penghubung layanan Instansi Pusat dan Pemerintah Daerah telah ditindaklanjuti dengan melakukan perbaikan.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "19",
            'tingkat' => "1",
            'kriteria' => "Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah belum atau telah terbentuk. Kondisi: Tugas/program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dilaksanakan sewaktu-waktu atau tanpa perencanaan.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "19",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan tugas/program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah dilaksanakan sesuai perencanaan. Kondisi: tugas/program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah tidak/belum dilaksanakan seluruhnya.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "19",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan tugas/program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah dilaksanakan seluruhnya. Kondisi: program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah belum dikomunikasikan/dikoordinasikan kepada semua unit kerja/perangkat daerah terkait di Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "19",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah dikomunikasikan/dikoordinasikan kepada semua unit kerja/perangkat daerah terkait di Instansi Pusat/Pemerintah Daerah. Selain itu, tugas/program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah dilakukan reviu dan evaluasi.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "19",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi dan hasil reviu dan evaluasi tugas/program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah ditindaklanjuti melalui perbaikan tugas/program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dan pelaksanaannya.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "20",
            'tingkat' => "1",
            'kriteria' => "Kolaborasi antar unit kerja/perangkat daerah di Instansi Pusat/Perangkat Daerah dalam penerapan SPBE belum atau telah dilaksanakan. Kondisi: Kolaborasi antar unit kerja/perangkat daerah di Instansi Pusat/Perangkat Daerah dalam penerapan SPBE dilaksanakan sewaktu-waktu atau tanpa perencanaan.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "20",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan kolaborasi antar unit kerja/perangkat daerah di Instansi Pusat/Perangkat Daerah dalam penerapan SPBE telah dilaksanakan sesuai perencanaan. Kondisi: Kolaborasi antar unit kerja/perangkat daerah di Instansi Pusat/Perangkat Daerah dalam penerapan SPBE tidak dibentuk secara formal.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "20",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan kolaborasi antar unit kerja/perangkat daerah di Instansi Pusat/Perangkat Daerah dalam penerapan SPBE telah dilaksanakan oleh tim yang dibentuk secara formal. Kondisi: Kolaborasi antar unit kerja/perangkat daerah dalam penerapan SPBE tidak/belum dilaksanakan pada seluruh unit kerja/perangkat daerah di Instansi Pusat/Perangkat Daerah (kolaborasi dibentuk berdasarkan adanya kegiatan bersama).",
        ]);
        Pertanyaan::create([
            'indikator_id' => "20",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan kolaborasi antar unit kerja/perangkat daerah dalam penerapan SPBE telah dilaksanakan secara terpadu pada seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah yang dikoordinasikan oleh menteri/kepala lembaga/kepala daerah atau sekretaris kementerian/lembaga/pemerintah daerah. Selain itu, kolaborasi dalam penerapan SPBE telah dilakukan reviu dan evaluasi.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "20",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi dan hasil reviu dan evaluasi kolaborasi dalam penerapan SPBE telah ditindaklanjuti melalui perbaikan pelaksanaan kolaborasi dalam penerapan SPBE.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "21",
            'tingkat' => "1",
            'kriteria' => "Kegiatan Manajemen Risiko SPBE belum atau telah diterapkan. Kondisi: Kegiatan Manajemen Risiko SPBE diterapkan tanpa program kegiatan yang terarah dan terencana.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "21",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan kegiatan Manajemen Risiko SPBE diterapkan dengan program kegiatan yang terarah dan terencana. Kondisi: Penerapan Manajemen Risiko SPBE dilaksanakan tanpa mengacu pada pedoman manajemen risiko SPBE.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "21",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan Manajemen Risiko SPBE telah dilaksanakan dengan mengacu pada pedoman manajemen risiko SPBE.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "21",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan kebijakann strategis Manajemen Risiko SPBE telah ditetapkan oleh Komite Manajemen Risiko SPBE atau Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dan diterapkan ke seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah. Selain itu, penerapan Manajemen Risiko SPBE telah direviu dan dievaluasi secara periodik.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "21",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi Manajemen Risiko SPBE ditindaklanjuti melalui perbaikan penerapan Manajemen Risiko SPBE.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "22",
            'tingkat' => "1",
            'kriteria' => "Pengendalian Keamanan Informasi belum atau telah tersedia dalam tahap pembangunan.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "22",
            'tingkat' => "2",
            'kriteria' => "Pengendalian Keamanan Informasi telah tersedia. Kondisi: Pengendalian Keamanan Informasi telah dilaksanakan pada sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "22",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan pengendalian Keamanan Informasi telah dilaksanakan pada seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah dengan berdasarkan Risiko SPBE.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "22",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan pengendalian Keamanan Informasi dilakukan melalui strategi Keamanan Informasi yang ditetapkan oleh Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah. Selain itu, pengendalian Keamanan Informasi telah dilakukan reviu dan evaluasi secara periodik.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "22",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi pengendalian Keamanan Informasi ditindaklanjuti melalui perbaikan penerapan proses pengendalian Keamanan Informasi.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "23",
            'tingkat' => "1",
            'kriteria' => "Kegiatan Manajemen Data belum atau telah diterapkan. Kondisi: Kegiatan Manajemen Data diterapkan tanpa program kegiatan yang terarah dan terencana.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "23",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan kegiatan Manajemen Data diterapkan dengan program kegiatan yang terarah dan terencana. Kondisi: Manajemen Data dilaksanakan tanpa mengacu pada pedoman Manajemen Data.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "23",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan Manajemen Data telah dilaksanakan dengan mengacu pada pedoman Manajemen Data yang mencakup pengelolaan arsitektur data, data induk, data referensi, basis data, kualitas data, dan interoperabilitas data.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "23",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan Manajemen Data dilaksanakan melalui strategi pengelolaan data yang ditetapkan Forum Satu Data atau Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dan diterapkan ke seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah. Selain itu, penerapan Manajemen Data telah direviu dan dievaluasi secara periodik.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "23",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi Manajemen Data ditindaklanjuti melalui perbaikan penerapan Manajemen Data.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "24",
            'tingkat' => "1",
            'kriteria' => "Kegiatan Manajemen Aset TIK belum atau telah diterapkan. Kondisi: Kegiatan Manajemen Aset TIK diterapkan tanpa program kegiatan yang terarah dan terencana.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "24",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan kegiatan Manajemen Aset TIK diterapkan dengan program kegiatan yang terarah dan terencana. Kondisi: Manajemen Aset TIK dilaksanakan tanpa mengacu pada pedoman Manajemen Aset TIK yang mencakup proses perencanaan, pengadaan, pemanfaatan/penggunaan, dan penghapusan aset TIK.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "24",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan Manajemen Aset TIK telah dilaksanakan dengan mengacu pada pedoman Manajemen Aset TIK yang mencakup proses perencanaan, pengadaan, pemanfaatan/penggunaan, dan penghapusan aset TIK.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "24",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi, Manajemen Aset TIK dilaksanakan melalui strategi pengelolaan aset TIK oleh unit kerja/ perangkat daerah yang menjalankan fungsi pengelolaan TIK di Instansi Pusat/Pemerintah Daerah dan diterapkan ke seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah. Selain itu, penerapan Manajemen Aset TIK telah direviu dan dievaluasi secara periodik.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "24",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi Manajemen Aset TIK ditindaklanjuti melalui perbaikan penerapan Manajemen Aset TIK.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "25",
            'tingkat' => "1",
            'kriteria' => "Pemenuhan kompetensi Sumber Daya Manusia belum atau telah diupayakan. Kondisi: Pemenuhan kompetensi Sumber Daya Manusia SPBE dilakukan tanpa perencanaan Sumber Daya Manusia.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "25",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan pemenuhan kompetensi Sumber Daya Manusia SPBE dilakukan sesuai dengan perencanaan Sumber Daya Manusia. Kondisi: Kompetensi Sumber Daya Manusia SPBE tidak/belum terpenuhi seluruhnya yaitu kompetensi di bidang proses bisnis memerintahan, arsitektur SPBE, data dan informasi, keamanan SPBE, aplikasi SPBE, dan infrastruktur SPBE.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "25",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan kompetensi Sumber Daya Manusia SPBE telah terpenuhi seluruhnya yaitu kompetensi di bidang proses bisnis memerintahan, arsitektur SPBE, data dan informasi, keamanan SPBE, aplikasi SPBE, dan infrastruktur SPBE.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "25",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi, peningkatan dan penilaian kompetensi Sumber Daya Manusia SPBE telah dilakukan. Selain itu, pemenuhan kompetensi Sumber Daya Manusia SPBE telah dilakukan reviu dan evaluasi secara periodik.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "25",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi telah ditindaklanjuti melalui perbaikan perencanaan dan pemenuhan kompetensi Sumber Daya Manusia SPBE.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "26",
            'tingkat' => "1",
            'kriteria' => "Manajemen Pengetahuan SPBE belum atau telah diterapkan. Kondisi: Manajemen Pengetahuan SPBE diterapkan tanpa perencanaan.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "26",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan dilaksanakan dengan perencanaan. Kondisi: Manajemen Pengetahuan SPBE telah dilaksanakan tanpa pedoman di Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "26",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi, Manajemen Pengetahuan SPBE dilaksanakan dengan mengacu pada pedoman di Instansi Pusat/Pemerintah Daerah dan Manajemen Pengetahuan SPBE diterapkan dengan menggunakan sistem aplikasi manajemen pengetahuan.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "26",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi, semua unit kerja/perangkat daerah telah menerapkan Manajemen Pengetahuan SPBE dengan menggunakan sistem aplikasi manajemen pengetahuan yang terintegrasi serta telah dilakukan reviu dan evaluasi terhadap penerapan Manajemen Pengetahuan SPBE.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "26",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi terhadap penerapan Manajemen Pengetahuan SPBE telah ditindaklanjuti melalui perbaikan Manajemen Pengetahuan SPBE.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "27",
            'tingkat' => "1",
            'kriteria' => "Kegiatan Manajemen Perubahan SPBE belum atau telah dilaksanakan. Kondisi: Kegiatan Manajemen Perubahan SPBE dilaksanakan tanpa perencanaan.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "27",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan kegiatan Manajemen Perubahan SPBE dilaksanakan dengan perencanaan. Kondisi: Kegiatan Manajemen Perubahan SPBE tidak/belum dilaksanakan oleh seluruh unit kerja/perangkat daerah terkait di Instansi Pusat/Pemerintah Daerah dengan caranya masingmasing.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "27",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan kegiatan Manajemen Perubahan SPBE dilaksanakan oleh seluruh unit kerja/perangkat daerah terkait di Instansi Pusat/Pemerintah Daerah sesuai pedoman Manajemen Perubahan.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "27",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan kegiatan Manajemen Perubahan SPBE telah dilakukan reviu dan evaluasi.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "27",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi telah ditindaklanjuti melalui perbaikan Manajemen Perubahan SPBE.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "28",
            'tingkat' => "1",
            'kriteria' => "Manajemen Layanan SPBE belum atau telah dilaksanakan. Kondisi: Manajemen Layanan SPBE dilaksanakan tanpa perencanaan.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "28",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan Manajemen Layanan SPBE dilaksanakan dengan perencanaan. Kondisi: Manajemen Layanan SPBE tidak/belum dilaksanakan pada seluruh proses Manajemen Layanan SPBE yaitu Pelayanan Pengguna SPBE dan Pengoperasian Layanan SPBE.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "28",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan Manajemen Layanan SPBE dilaksanakan pada seluruh proses Manajemen Layanan SPBE yaitu Pelayanan Pengguna SPBE dan Pengoperasian Layanan SPBE.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "28",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi, Manajemen Layanan SPBE telah diterapkan dengan menggunakan sistem aplikasi manajemen layanan, dan kegiatan Manajemen Layanan SPBE telah dilakukan reviu dan evaluasi.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "28",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi telah ditindaklanjuti melalui perbaikan Manajemen Layanan SPBE.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "29",
            'tingkat' => "1",
            'kriteria' => "Kegiatan Audit Infrastruktur SPBE belum atau telah dilaksanakan. Kondisi: Kegiatan Audit Infrastruktur dilaksanakan tanpa perencanaan yang berkesinambungan.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "29",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan kegiatan Audit Infrastruktur dilaksanakan sesuai dengan perencanaan yang berkesinambungan. Kondisi: Kegiatan Audit Infrastruktur dilaksanakan tanpa pedoman Audit Infrastruktur.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "29",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan kegiatan Audit Infrastruktur dilaksanakan sesuai dengan pedoman Audit Infrastruktur. Kondisi: kegiatan Audit Infrastruktur dilaksanakan oleh auditor TIK/Sistem Informasi internal Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "29",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan kegiatan Audit Infrastruktur dilaksanakan oleh auditor TIK/Sistem Informasi eksternal yang memiliki sertifikasi auditor TIK/Sistem Informasi.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "29",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi dan hasil audit Infrastruktur SPBE telah ditindaklanjuti melalui perbaikan penerapan Infrastruktur SPBE.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "30",
            'tingkat' => "1",
            'kriteria' => "Kegiatan Audit Aplikasi SPBE belum atau telah dilaksanakan. Kondisi: Kegiatan Audit Aplikasi dilaksanakan tanpa perencanaan yang berkesinambungan.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "30",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan kegiatan Audit Aplikasi dilaksanakan sesuai dengan perencanaan yang berkesinambungan. Kondisi: Kegiatan Audit Aplikasi dilaksanakan tanpa pedoman Audit Aplikasi SPBE.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "30",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan kegiatan Audit Aplikasi dilaksanakan sesuai dengan pedoman Audit Aplikasi SPBE. Kondisi: kegiatan Audit Aplikasi dilaksanakan oleh auditor TIK/Sistem Informasi internal Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "30",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan kegiatan Audit Aplikasi dilaksanakan oleh auditor TIK/Sistem Informasi eksternal yang memiliki sertifikasi auditor TIK/Sistem Informasi.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "30",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi dan hasil audit Aplikasi SPBE telah ditindaklanjuti melalui perbaikan penerapan Aplikasi SPBE.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "31",
            'tingkat' => "1",
            'kriteria' => "Kegiatan Audit Keamanan SPBE belum atau telah dilaksanakan. Kondisi: Kegiatan Audit Keamanan dilaksanakan tanpa perencanaan yang berkesinambungan.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "31",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan kegiatan Audit Keamanan dilaksanakan sesuai dengan perencanaan yang berkesinambungan. Kondisi: Kegiatan Audit Keamanan dilaksanakan tanpa pedoman Audit Keamanan.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "31",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan kegiatan Audit Keamanan dilaksanakan sesuai dengan pedoman Audit Keamanan. Kondisi: kegiatan Audit Keamanan dilaksanakan oleh auditor TIK/Sistem Keamanan Informasi internal Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "31",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan kegiatan Audit Keamanan dilaksanakan oleh auditor TIK/Sistem Keamanan Informasi eksternal yang memiliki sertifikasi auditor TIK/Sistem Keamanan Informasi.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "31",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi dan hasil audit Keamanan SPBE telah ditindaklanjuti melalui perbaikan penerapan Keamanan SPBE.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "32",
            'tingkat' => "1",
            'kriteria' => "Layanan Perencanan Berbasis Elektronik hanya memberikan layanan informasi terkait perencanaan kegiatan pemerintah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "32",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan Layanan Perencanan Berbasis Elektronik memberikan layanan interaksi terkait perencanaan kegiatan pemerintah seperti pencarian informasi, pengunggahan dan pengunduhan dokumen perencanaan.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "32",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan Layanan Perencanaan Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait perencanaan kegiatan pemerintah seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "32",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan Layanan Perencanaan Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya layanan penganggaran berbasis elektronik, layanan keuangan berbasis elektronik, layanan pengadaan berbasis elektronik, layanan perencanaan berbasis elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "32",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi dan Layanan Perencanaan Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundangundangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "33",
            'tingkat' => "1",
            'kriteria' => "Layanan Penganggaran Berbasis Elektronik hanya memberikan layanan informasi terkait penganggaran kegiatan pemerintah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "33",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan Layanan Penganggaran Berbasis Elektronik memberikan layanan interaksi terkait penganggaran kegiatan pemerintah seperti pencarian informasi, pengunggahan dan pengunduhan dokumen penganggaran.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "33",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan Layanan Penganggaran Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait penganggaran kegiatan pemerintah seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "33",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan Layanan Penganggaran Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya layanan perencanaan berbasis elektronik, layanan keuangan berbasis elektronik, layanan pengadaan berbasis elektronik, layanan penganggaran berbasis elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "33",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi dan Layanan Penganggaran Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "34",
            'tingkat' => "1",
            'kriteria' => "Layanan Keuangan Berbasis Elektronik hanya memberikan layanan informasi terkait keuangan di Instansi Pusat/Pemerintah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "34",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan Layanan Keuangan Berbasis Elektronik memberikan layanan interaksi terkait keuangan seperti pencarian informasi, pengunggahan dan pengunduhan dokumen.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "34",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan Layanan Keuangan Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait keuangan seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "34",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan Layanan Keuangan Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Penganggaran Berbasis Elektronik, Layanan Pengadaan Berbasis Elektronik, Layanan Perencanaan Berbasis Elektronik, Layanan Keuangan Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "34",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi dan Layanan Keuangan Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundangundangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "35",
            'tingkat' => "1",
            'kriteria' => "Layanan Pengadaan Barang dan Jasa Berbasis Elektronik hanya memberikan layanan informasi terkait pengadaan barang dan jasa di Instansi Pusat/Pemerintah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "35",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan Layanan Pengadaan Barang dan Jasa Berbasis Elektronik memberikan layanan interaksi terkait pengadaan barang dan jasa seperti pencarian informasi, pengunggahan dan pengunduhan dokumen.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "35",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan Layanan Pengadaan Barang dan Jasa Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait pengadaan barang dan jasa seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "35",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan Layanan Pengadaan Barang dan Jasa Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Penganggaran Berbasis Elektronik, Layanan Perencanaan Berbasis Elektronik, Layanan Keuangan Berbasis Elektronik, Layanan Pengadaan Barang dan Jasa Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "35",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi dan Layanan Pengadaan Barang dan Jasa Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "36",
            'tingkat' => "1",
            'kriteria' => "Layanan Kepegawaian Berbasis Elektronik hanya memberikan layanan informasi terkait kepegawaian.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "36",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan Layanan Kepegawaian Berbasis Elektronik memberikan layanan interaksi terkait kepegawaian seperti pencarian informasi, pengunggahan dan pengunduhan dokumen.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "36",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan Layanan Kepegawaian Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait kepegawaian seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "36",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan Layanan Kepegawaian Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Kinerja Berbasis Elektronik, Layanan Keuangan Berbasis Elektronik, Layanan Kepegawaian Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "36",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi dan Layanan Kepegawaian Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundangundangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "37",
            'tingkat' => "1",
            'kriteria' => "Layanan Kearsipan Dinamis Berbasis Elektronik hanya memberikan layanan informasi terkait kearsipan dinamis.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "37",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan Layanan Kearsipan Dinamis Berbasis Elektronik memberikan layanan interaksi terkait kearsipan dinamis seperti pencarian informasi, pengunggahan dan pengunduhan dokumen.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "37",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan Layanan Kearsipan Dinamis Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait kearsipan dinamis seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "37",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan Layanan Kearsipan Dinamis Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Pengadaan Barang dan Jasa Berbasis Elektronik, Layanan Kepegawaian Berbasis Elektronik, Layanan Kearsipan Dinamis Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "37",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi dan Layanan Kearsipan Dinamis Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "38",
            'tingkat' => "1",
            'kriteria' => "Layanan Pengelolaan Barang Milik Negara/Daerah Berbasis Elektronik hanya memberikan layanan informasi terkait pengelolaan barang milik negara.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "38",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan Layanan Pengelolaan Barang Milik Negara/Daerah Berbasis Elektronik memberikan layanan interaksi terkait pengelolaan barang milik negara/daerah seperti pencarian informasi, pengunggahan dan pengunduhan dokumen.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "38",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan Layanan Pengelolaan Barang Milik Negara/Daerah Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait pengelolaan barang milik negara/daerah seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "38",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan Layanan Pengelolaan Barang Milik Negara/Daerah Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Penganggaran Berbasis Elektronik, Layanan Pengadaan Barang dan Jasa Berbasis Elektronik, Layanan Keuangan Berbasis Elektronik, Layanan Pengelolaan Barang Milik Negara/Daerah Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "38",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi dan Layanan Pengelolaan Barang Milik Negara/Daerah Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "39",
            'tingkat' => "1",
            'kriteria' => "Layanan Pengawasan Internal Pemerintah Berbasis Elektronik hanya memberikan layanan informasi terkait pengawasan internal pemerintah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "39",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan Layanan Pengawasan Internal Pemerintah Berbasis Elektronik memberikan layanan interaksi terkait pengawasan internal pemerintah seperti pencarian informasi, pengunggahan dan pengunduhan dokumen.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "39",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan Layanan Pengawasan Internal Pemerintah Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait pengawasan internal pemerintah seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "39",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan Layanan Pengawasan Internal Pemerintah Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Kepegawaian Berbasis Elektronik, Layanan Akuntabilitas Kinerja Berbasis Elektronik, Layanan Pengawasan Internal Pemerintah Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "39",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi dan Layanan Pengawasan Internal Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "40",
            'tingkat' => "1",
            'kriteria' => "Layanan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah Berbasis Elektronik hanya memberikan layanan informasi terkait akuntabilitas kinerja Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "40",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan Layanan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah Berbasis Elektronik memberikan layanan interaksi terkait akuntabilitas kinerja Instansi Pusat/Pemerintah Daerah seperti pencarian informasi, pengunggahan dan pengunduhan dokumen.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "40",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan Layanan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait akuntabilitas kinerja Instansi Pusat/Pemerintah Daerah seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "40",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan Layanan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Penganggaran Berbasis Elektronik, Layanan Pengadaan Berbasis Elektronik, Layanan Perencanaan Berbasis Elektronik, Layanan Keuangan Berbasis Elektronik, Layanan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "40",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi dan Layanan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "41",
            'tingkat' => "1",
            'kriteria' => "Layanan Kinerja Pegawai Berbasis Elektronik hanya memberikan layanan informasi terkait kinerja pegawai.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "41",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan Layanan Kinerja Pegawai Berbasis Elektronik memberikan layanan interaksi terkait kinerja pegawai seperti pencarian informasi, pengunggahan dan pengunduhan dokumen.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "41",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan Layanan Kinerja Pegawai Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait kinerja pegawai seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "41",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan Layanan Kinerja Pegawai Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Perencanaan Berbasis Elektronik, Layanan Akuntabilitas Berbasis Elektronik, Layanan Kinerja Pegawai Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "41",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi dan Layanan Kinerja Pegawai Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "42",
            'tingkat' => "1",
            'kriteria' => "Layanan Pengaduan Pelayanan Publik Berbasis Elektronik hanya memberikan layanan informasi terkait pengaduan pelayanan publik.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "42",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan Layanan Pengaduan Pelayanan Publik Berbasis Elektronik memberikan layanan interaksi terkait pengaduan pelayanan publik seperti pencarian informasi, pengunggahan dan pengunduhan dokumen.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "42",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan Layanan Pengaduan Pelayanan Publik Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait pengaduan pelayanan publik seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "42",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan Layanan Pengaduan Pelayanan Publik Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Kepegawaian Berbasis Elektronik, Layanan Pengaduan Pelayanan Publik Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "42",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi dan Layanan Pengaduan Pelayanan Publik Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "43",
            'tingkat' => "1",
            'kriteria' => "Layanan Data Terbuka Berbasis Elektronik hanya memberikan layanan informasi terkait data terbuka.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "43",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan Layanan Data Terbuka Berbasis Elektronik memberikan layanan interaksi terkait data terbuka seperti pencarian informasi, pengunggahan dan pengunduhan dokumen.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "43",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan Layanan Data Terbuka Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait data terbuka seperti otomasi pertukaran data, otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "43",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan Layanan Data Terbuka Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Data Terbuka Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "43",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi dan Layanan Data Terbuka Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundangundangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "44",
            'tingkat' => "1",
            'kriteria' => "Layanan Jaringan Dokumentasi dan Informasi Hukum Berbasis Elektronik hanya memberikan layanan informasi terkait jaringan dokumentasi dan informasi hukum.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "44",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan Layanan Jaringan Dokumentasi dan Informasi Hukum Berbasis Elektronik memberikan layanan interaksi terkait jaringan dokumentasi dan informasi hukum seperti pencarian informasi, pengunggahan dan pengunduhan dokumen.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "44",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan Layanan Jaringan Dokumentasi dan Informasi Hukum Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait jaringan dokumentasi dan informasi hukum seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "44",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan Layanan Jaringan Dokumentasi dan Informasi Hukum Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Jaringan Dokumentasi dan Informasi Hukum Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "44",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi dan Layanan Jaringan Dokumentasi dan Informasi Hukum Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "45",
            'tingkat' => "1",
            'kriteria' => "Layanan Publik Sektoral Berbasis Elektronik hanya memberikan layanan informasi terkait Publik Sektoral kegiatan pemerintah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "45",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik memberikan layanan interaksi terkait Publik Sektoral kegiatan pemerintah seperti pencarian informasi, pengunggahan dan pengunduhan dokumen Layanan Publik Sektoral.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "45",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait Publik Sektoral kegiatan pemerintah seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "45",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Publik Sektoral Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "45",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi dan kebutuhan Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "46",
            'tingkat' => "1",
            'kriteria' => "Layanan Publik Sektoral Berbasis Elektronik hanya memberikan layanan informasi terkait Publik Sektoral kegiatan pemerintah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "46",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik memberikan layanan interaksi terkait Publik Sektoral kegiatan pemerintah seperti pencarian informasi, pengunggahan dan pengunduhan dokumen Layanan Publik Sektoral.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "46",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait Publik Sektoral kegiatan pemerintah seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "46",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Publik Sektoral Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "46",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi dan kebutuhan Instansi Pusat/Pemerintah Daerah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "47",
            'tingkat' => "1",
            'kriteria' => "Layanan Publik Sektoral Berbasis Elektronik hanya memberikan layanan informasi terkait Publik Sektoral kegiatan pemerintah.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "47",
            'tingkat' => "2",
            'kriteria' => "Kriteria tingkat 1 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik memberikan layanan interaksi terkait Publik Sektoral kegiatan pemerintah seperti pencarian informasi, pengunggahan dan pengunduhan dokumen Layanan Publik Sektoral.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "47",
            'tingkat' => "3",
            'kriteria' => "Kriteria tingkat 2 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait Publik Sektoral kegiatan pemerintah seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "47",
            'tingkat' => "4",
            'kriteria' => "Kriteria tingkat 3 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Publik Sektoral Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.",
        ]);
        Pertanyaan::create([
            'indikator_id' => "47",
            'tingkat' => "5",
            'kriteria' => "Kriteria tingkat 4 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi dan kebutuhan Instansi Pusat/Pemerintah Daerah.",
        ]);
    }
}
