<?php
include "../koneksi.php";

$tambah = $_POST['tambah'];

switch($tambah) {
    case 'tambah_dokter':
        $nama = $_POST['nama_dokter'];
        $spesialisasi = $_POST['spesialisasi'];
        $noTelp = $_POST['no_telepon'];
        $query = "insert into dokter (Nama_Dokter, Spesialisasi, No_Telepon) values ('$nama', '$spesialisasi', '$noTelp')";
        break;
    case 'tambah_perawat':
        $nama = $_POST['nama_perawat'];
        $noTelp = $_POST['no_telepon'];
        $query = "insert into perawat (Nama_Perawat, No_Telepon) values ('$nama', '$noTelp')";
        break;
    case 'tambah_pasien':
        $nama = $_POST['nama_pasien'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        if ($jenis_kelamin == "Laki-laki") {
            $jenis_kelamin = "L";
        } elseif ($jenis_kelamin == "Perempuan") {
            $jenis_kelamin = "P";
        }
        $alamat = $_POST['alamat'];
        $noTelp = $_POST['no_telepon'];
        $query = "insert into pasien (Nama_Pasien, Jenis_Kelamin, Alamat, No_Telepon) values ('$nama', '$jenis_kelamin', '$alamat', '$noTelp')";
        break;
    case 'tambah_obat':
        $nama = $_POST['nama_obat'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];
        $query = "insert into obat (Nama_Dokter, Stok, Harga) values ('$nama', '$stok', '$harga')";
        break;
    case 'tambah_kamar':
        $no_kamar = $_POST['no_kamar'];
        $tipe_kamar = $_POST['tipe_kamar'];
        $status = $_POST['status_kamar'];
        $harga_hari = $_POST['harga_hari'];
        $query = "insert into kamar (No_Kamar, Tipe_Kamar, Status_Kamar, Harga_Per_Hari) values ('$no_kamar', '$tipe_kamar', '$status', '$harga_hari')";
        break;
    case 'tambah_jadwalJaga':
        $shift = $_POST['shift'];
        $id_perawat = $_POST['id_perawat'];
        $id_rawat_inap = $_POST['id_rawat_inap'];
        $query = "insert into jadwal_jaga (Shift, ID_Perawat, ID_Rawat_Inap) values ('$shift', '$id_perawat', '$id_rawat_inap')";
        break;
    case 'tambah_detailObat':
        $jumlah = $_POST['jumlah'];
        $dosis = $_POST['dosis'];
        $id_obat = $_POST['id_obat'];
        $query = "insert into detail_pemberian_obat (jumlah, ID_Perawat, ID_Rawat_Inap) values ('$shift', '$id_perawat', '$id_rawat_inap')";
        break;
    case 'tambah_rawatInap':
        $masuk = $_POST['tgl_masuk'];
        $keluar = $_POST['tgl_keluar'];
        $diagAwal = $_POST['diagnosa_awal'];
        $id_pasien = $_POST['id_pasien'];
        $id_dokter = $_POST['id_dokter'];
        $id_kamar = $_POST['id_kamar'];
        $query = "insert into rawat_inap (Tgl_Masuk, Tgl_Keluar, Diagnosa_Awal, ID_Pasien, ID_Dokter, ID_Kamar) values ('$masuk', '$keluar', '$diagAwal', '$id_pasien', '$id_dokter', '$id_kamar')";
        break;
    default:
        die('aksi tidak dikenali');
}

$proses = mysqli_query($koneksi, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Telah Ditambahkan!</h1>
    <a href="../dokter.php"><button>Kembali</button></a>
</body>
</html>