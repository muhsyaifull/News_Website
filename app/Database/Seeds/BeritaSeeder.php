<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BeritaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'judul' => 'Berita Pertama',
                'deskripsi' => 'Deskripsi singkat berita pertama',
                'konten' => 'Konten lengkap berita pertama.',
                'penulis' => 'Penulis Satu',
                'tanggal_publikasi' => date('Y-m-d H:i:s'),
                'gambar' => 'path/to/gambar1.jpg',
            ],
            [
                'judul' => 'Berita Kedua',
                'deskripsi' => 'Deskripsi singkat berita kedua',
                'konten' => 'Konten lengkap berita kedua.',
                'penulis' => 'Penulis Dua',
                'tanggal_publikasi' => date('Y-m-d H:i:s'),
                'gambar' => 'path/to/gambar2.jpg',
            ],
            [
                'judul' => 'Berita Ketiga',
                'deskripsi' => 'Deskripsi singkat berita ketiga',
                'konten' => 'Konten lengkap berita ketiga.',
                'penulis' => 'Penulis Tiga',
                'tanggal_publikasi' => date('Y-m-d H:i:s'),
                'gambar' => 'path/to/gambar3.jpg',
            ],
            [
                'judul' => 'Berita Keempat',
                'deskripsi' => 'Deskripsi singkat berita keempat',
                'konten' => 'Konten lengkap berita keempat.',
                'penulis' => 'Penulis Empat',
                'tanggal_publikasi' => date('Y-m-d H:i:s'),
                'gambar' => 'path/to/gambar4.jpg',
            ],
            [
                'judul' => 'Berita Kelima',
                'deskripsi' => 'Deskripsi singkat berita kelima',
                'konten' => 'Konten lengkap berita kelima.',
                'penulis' => 'Penulis Lima',
                'tanggal_publikasi' => date('Y-m-d H:i:s'),
                'gambar' => 'path/to/gambar5.jpg',
            ],
        ];

        // Menggunakan Query Builder untuk memasukkan data
        $this->db->table('berita')->insertBatch($data);
    }
}
