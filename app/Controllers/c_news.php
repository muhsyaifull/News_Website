<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\m_news;

class c_news extends Controller
{
    public function index()
    {
        $beritaModel = new m_news();
        $data['berita'] = $beritaModel->getAllBerita();
        // var_dump($data);
        return view("v_news_page", $data);
    }

}