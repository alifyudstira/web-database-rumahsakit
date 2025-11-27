<?php
include "../koneksi.php";

$id = $_GET['id'];
$edit = $_POST['edit'];

switch($edit) {
    case 'edit_dokter':
        $nama = $_POST['nama_dokter'];
        $spesialisasi = $_POST['spesialisasi'];
        $noTelp = $_POST['no_telepon'];
        $query = "update dokter set Nama_Dokter = '$nama', Spesialisasi = '$spesialisasi', No_Telepon = '$noTelp' where ID_Dokter = '$id'";
        break;
    case 'edit_perawat':
        $nama = $_POST['nama_perawat'];
        $noTelp = $_POST['no_telepon'];
        $query = "update perawat set Nama_Perawat = '$nama', No_Telepon = '$noTelp' where ID_Perawat = '$id'";
        break;
    case 'edit_pasien':
        $nama = $_POST['nama_pasien'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        if ($jenis_kelamin == "Laki-laki") {
            $jenis_kelamin = "L";
        } elseif ($jenis_kelamin == "Perempuan") {
            $jenis_kelamin = "P";
        }
        $alamat = $_POST['alamat'];
        $noTelp = $_POST['no_telepon'];
        $query = "update pasien set Nama_Pasien = '$nama', Jenis_Kelamin = '$jenis_kelamin', Alamat = '$alamat', No_Telepon = '$noTelp' where ID_Pasien = '$id'";
        break;
    case 'edit_obat':
        $nama = $_POST['nama_obat'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];
        $query = "update obat set Nama_Obat = '$nama', stok = '$stok', harga = '$harga' where ID_Obat = '$id'";
        break;
    case 'edit_kamar':
        $no_kamar = $_POST['no_kamar'];
        $tipe_kamar = $_POST['tipe_kamar'];
        $status = $_POST['status_kamar'];
        $harga_hari = $_POST['harga_hari'];
        $query = "update kamar set No_Kamar = '$no_kamar', Tipe_Kamar = '$tipe_kamar', Status_Kamar = '$status', Harga_Per_Hari = '$harga_hari'  where ID_Kamar = '$id'";
        break;
    case 'edit_jadwalJaga':
        $shift = $_POST['shift'];
        $id_perawat = $_POST['id_perawat'];
        $id_rawat_inap = $_POST['id_rawat_inap'];
        $query = "update jadwal_jaga set Shift = '$shift', ID_Perawat = '$id_perawat', ID_Rawat_Inap = '$id_rawat_inap' where ID_Jadwal_Jaga = '$id'";
        break;
    case 'edit_detailObat':
        $jumlah = $_POST['jumlah'];
        $dosis = $_POST['dosis'];
        $id_obat = $_POST['id_obat'];
        $id_rawat_inap = $_POST['id_rawat_inap'];
        $query = "update detail_pemberian_obat set Jumlah = '$jumlah', Dosis = '$dosis', ID_Obat = '$id_obat', ID_Rawat_Inap = '$id_rawat_inap' where ID_Detail_Obat = '$id'";
        break;
    case 'edit_rawatInap':
        $masuk = $_POST['tgl_masuk'];
        $keluar = $_POST['tgl_keluar'];
        $diagAwal = $_POST['diagnosa_awal'];
        $id_pasien = $_POST['id_pasien'];
        $id_dokter = $_POST['id_dokter'];
        $id_kamar = $_POST['id_kamar'];
        $query = "update rawat_inap set Tgl_Masuk = '$masuk', Tgl_Keluar = '$keluar', Diagnosa_Awal = '$diagAwal', ID_Pasien = '$id_pasien', ID_Dokter = '$id_dokter', ID_kamar = '$id_kamar' where ID_Rawat_Inap = '$id'";
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
    <h1>Data Telah Diedit!</h1>
    <a href="../dokter.php"><button>Kembali</button></a>
</body>
</html>