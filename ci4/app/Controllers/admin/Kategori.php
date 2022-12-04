<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Kategori extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo "<h1>belajar ci4</h1>";
    }

    public function select()
    {
        echo view ("template/header");
        echo view ("kategori/select");
        echo view ("template/footer");
    }

    public function selectWhere($id = null)
    {
        echo "<h1>menampilkan data yang dipilih $id</h1>";
    }

    public function formInsert()
    {
        echo "<h1>menampilkan form insert</h1>";
    }

    public function formUpdate($id=null)
    {
        echo "<h1>menampilkan form update $id</h1>";
    }

    public function update($id = null)
    {
        echo "proses update data $id";
    }

    public function delete($id = null)
    {
        echo "proses delete data";
    }
}
