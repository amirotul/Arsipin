<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fileuploader
{

    protected $res; 

    function __construct()
    {
        $this->res = &get_instance();
    }

    public function checkAndUploadImage($file_sk, $path)
    {
        $config['upload_path'] = '../assets/upload/fotopengguna/';
        $config['allowed_types'] = 'pdf';
        $namaFile = $file_sk['name'];
        $tipeFile = $file_sk['type'];
        $tmpFile = $file_sk['tmp_name'];
        $tipeFileValid = ['file_sk/pdf'];

        // cek apakah tipe file yg diupload berupa file gambar
        if (!in_array($tipeFile, $tipeFileValid)) return false;

        // ubah nama file menjadi random
        $ekstensiFile = explode('.', $namaFile);
        $ekstensiFile = strtolower(end($ekstensiFile));
        $namaFileBaru = md5(uniqid());
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiFile;

        if (!is_dir($path)) mkdir($path, 0777, true);
        // move_uploaded_file($tmpFile, $path . $namaFileBaru);
        $this->compressImage($tmpFile, $path . $namaFileBaru, 60);

        return $namaFileBaru;
    }

    
}