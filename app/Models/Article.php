<?php

namespace App\Models;

class Article
{
    // Fungsi "seolah-olah" mengambil dari database
    protected static function getDummyData()
    {
        return [
            ['id' => 1, 'title' => 'Belajar Laravel', 'content' => 'Laravel adalah framework PHP...'],
            ['id' => 2, 'title' => 'Pengenalan MVC', 'content' => 'MVC membantu memisahkan logika...'],
            ['id' => 3, 'title' => 'Routing di Laravel', 'content' => 'Routing menghubungkan URL ke controller...'],
        ];
    }

    // Mengambil semua data
    public static function all()
    {
        return self::getDummyData();
    }

    // Mencari satu data berdasarkan id
    public static function find($id)
    {
        $articles = self::getDummyData();
        foreach ($articles as $article) {
            if ($article['id'] == $id) {
                return $article;
            }
        }

        return null;
    }

    // Fungsi untuk membuat data baru
    public static function create($data)
    {
        // Simulasi penambahan data baru
        $newId = count(self::getDummyData()) + 1;
        $data['id'] = $newId;
        // Simpan data baru ke dummy data (ini hanya simulasi)
        return $data;
    }

    // Fungsi untuk memperbarui data
    public static function update($id, $data)
    {
        // Simulasi pembaruan data
        return $data; // Kembalikan data yang diperbarui
    }

    // Fungsi untuk menghapus data
    public static function delete($id)
    {
        // Simulasi penghapusan data
        return true; // Kembalikan true jika berhasil dihapus
    }
}