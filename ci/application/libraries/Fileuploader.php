<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fileuploader
{

    protected $res; 

    function __construct()
    {
        $this->res = &get_instance();
    }

   public function checkAndUploadImage($file, $path)
    {
        $namaFile = $foto['name'];
        $tipeFile = $foto['type'];
        $tmpFile = $foto['tmp_name'];
        $tipeFileValid = ['image/jpeg', 'image/jpg', 'image/png', 'image/pdf'];

        // cek apakah tipe file yg diupload berupa file gambar
        if (!in_array($tipeFile, $tipeFileValid)) return false;

        // ubah nama file menjadi random
        $ekstensiFile = explode('.', $namaFile);
        $ekstensiFile = strtolower(end($ekstensiFile));
        $namaFileBaru = date("Ymd_His");
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiFile;

        if (!is_dir($path)) mkdir($path, 0777, true);
        // move_uploaded_file($tmpFile, $path . $namaFileBaru);
        $this->compressImage($tmpFile, $path . $namaFileBaru, 60);

        return $namaFileBaru;
    }

}