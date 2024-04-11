<?php
function UploadFoto($namafile, $folder, $ukuran){
    $fileupload = $folder . $namafile;
    
    // Simpan file ukuran asli
    move_uploaded_file($_FILES['foto']['tmp_name'], $fileupload);

    // Cek apakah file yang diunggah adalah gambar JPEG
    $info = getimagesize($fileupload);
    if ($info['mime'] != 'image/jpeg') {
        echo "File yang diunggah bukan gambar JPEG.";
        return false;
    }

    // Identitas file asli
    $gbr_asli = imagecreatefromjpeg($fileupload);
    $lebar = imagesx($gbr_asli);
    $tinggi = imagesy($gbr_asli);

    // Hitung ukuran thumbnail sesuai proporsi yang diinginkan
    $thumb_lebar = $ukuran;
    $thumb_tinggi = ($thumb_lebar / $lebar) * $tinggi;

    // Buat gambar thumbnail
    $gbr_thumb = imagecreatetruecolor($thumb_lebar, $thumb_tinggi);
    imagecopyresampled($gbr_thumb, $gbr_asli, 0, 0, 0, 0, $thumb_lebar, $thumb_tinggi, $lebar, $tinggi);

    // Simpan gambar thumbnail
    imagejpeg($gbr_thumb, $folder . "thumb_" . $namafile);

    // Hapus gambar di memori komputer
    imagedestroy($gbr_asli);
    imagedestroy($gbr_thumb);

    return true;
}

function kecilkangambar($gambar, $lebar = 0, $tinggi = 0){
    if ($lebar == 0 && $tinggi == 0) $lebar = 50;
    
    // Buat gambar dari file
    $im1 = imagecreatefromjpeg($gambar);
    $lebar1 = imagesx($im1);
    $tinggi1 = imagesy($im1);
    
    // Tentukan ukuran gambar baru
    $lebar2 = 0;
    $tinggi2 = 0;
    if ($lebar > 0 && $lebar1 > $lebar) {
        $lebar2 = $lebar;
        $tinggi2 = ($lebar2 / $lebar1) * $tinggi1;
        $tinggi2 = round($tinggi2);
    } elseif ($tinggi > 0 && $tinggi1 > $tinggi) {
        $tinggi2 = $tinggi;
        $lebar2 = ($tinggi2 / $tinggi1) * $lebar1;
        $lebar2 = round($lebar2);
    }
    
    // Resize gambar jika diperlukan
    if ($lebar2 < $lebar1 || $tinggi2 < $tinggi1) {
        $im2 = imagecreatetruecolor($lebar2, $tinggi2);
        imagecopyresized($im2, $im1, 0, 0, 0, 0, $lebar2, $tinggi2, $lebar1, $tinggi1);
        imagejpeg($im2, $gambar, 90);
    }

    // Hapus gambar di memori komputer
    imagedestroy($im1);
    if (isset($im2)) {
        imagedestroy($im2);
    }
}
?>
