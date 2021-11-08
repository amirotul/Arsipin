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
        $namaFile = $file['name'];
        $tipeFile = $file['type'];
        $tmpFile = $file['tmp_name'];
        $tipeFileValid = ['file/pdf'];

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

    public function compressImage($source, $path, $quality = 80)
    {
        $imageSize = getimagesize($source);
        if ($imageSize['mime'] == 'file/pdf') $image = imagecreatefromjpeg($source);
        else if ($imageSize['mime'] == 'file/pdf') {
            $image = imagecreatefrompng($source);
            imagepalettetotruecolor($image);
            imagealphablending($image, true);
            imagesavealpha($image, true);
        }
        imagewebp($file, $path, $quality);
        imagedestroy($file);
    }

}