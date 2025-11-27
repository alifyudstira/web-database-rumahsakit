<?php

include "../koneksi.php";

$id = $_GET['id'];
$hapus = $_GET['hapus'];

switch($hapus) {
    case 'dokter':
        $query = "delete from dokter where ID_Dokter='$id'";
        break;
    case 'perawat':
        $query = "delete from perawat where ID_Perawat='$id'";
        break;
    case 'pasien':
        $query = "delete from pasien where ID_Pasien='$id'";
        break;
    case 'obat':
        $query = "delete from obat where ID_Obat='$id'";
        break;
    case 'kamar':
        $query = "delete from kamar where ID_Kamar='$id'";
        break;
    case 'jadwalJaga':
        $query = "delete from jadwal_jaga where ID_jadwal_jaga='$id'";
        break;
    case 'detailObat':
        $query = "delete from detail_pemberian_obat where ID_Detail_Obat='$id'";
        break;
    case 'rawatInap':
        $query = "delete from rawat_inap where ID_Rawat_Inap='$id'";
        break;
    default:
        die('aksi tidak dikenali');
}

$proses = mysqli_query($koneksi, $query)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Telah Dihapus!</h1>
    <a href="../dokter.php"><button>Kembali</button></a>
</body>
</html>