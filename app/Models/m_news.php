<?php

namespace App\Models;

use CodeIgniter\Model;

class m_news extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'id_berita';
    protected $allowedFields = ['id_berita', 'judul', 'deskripsi', 'konten', 'penulis', 'tanggal_publikasi', 'gambar'];

    public function getAllBerita()
    {
        return $this->findAll();
    }
}
