<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dokter</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <aside class="w-56 bg-green-200 p-6 flex flex-col justify-between shadow-md">
        <div>
            <h1 class="text-lg font-semibold text-gray-700 mb-6">Menu</h1>
            <nav class="flex flex-col gap-3 text-gray-800 text-sm">
                <a href="../dokter.php" class="py-2 px-3 rounded-lg hover:bg-green-300 hover:translate-x-1 transition-all duration-200">Daftar Dokter</a>
                <a href="../perawat.php" class="py-2 px-3 rounded-lg hover:bg-green-300 hover:translate-x-1 transition-all duration-200">Daftar Perawat</a>
                <a href="../pasien.php" class="py-2 px-3 rounded-lg hover:bg-green-300 hover:translate-x-1 transition-all duration-200">Daftar Pasien</a>
                <a href="../obat.php" class="py-2 px-3 rounded-lg hover:bg-green-300 hover:translate-x-1 transition-all duration-200">Daftar Obat</a>
                <a href="../kamar.php" class="py-2 px-3 rounded-lg hover:bg-green-300 hover:translate-x-1 transition-all duration-200">Daftar Kamar</a>
                <a href="../jadwal.php" class="py-2 px-3 rounded-lg hover:bg-green-300 hover:translate-x-1 transition-all duration-200">Jadwal Jaga</a>
                <a href="../pemberianobat.php" class="py-2 px-3 rounded-lg hover:bg-green-300 hover:translate-x-1 transition-all duration-200">Detail Pemberian Obat</a>
                <a href="../rawatinap.php" class="py-2 px-3 rounded-lg hover:bg-green-300 hover:translate-x-1 transition-all duration-200">Rawat Inap</a>
            </nav>
            </div>
            <footer class="text-xs text-gray-600 mt-8">© 2025 Klinik Sehat</footer>
        </aside>

        <?php
        include "../koneksi.php";
        $id = $_GET['id'];
        $query = "select * from detail_pemberian_obat where ID_Detail_Obat=$id";
        $proses = mysqli_query($koneksi, $query);
        $data = mysqli_fetch_assoc($proses);
        ?>

        <div class="flex-1 p-10">
            <div class="flex justify-center">
                <form action="../action/action_edit.php?id=<?php echo $id; ?>" method="POST" 
                    class="bg-gray-200 p-6 rounded-xl shadow-md w-full max-w-md">
                    <h2 class="text-lg font-semibold text-gray-700 mb-4">Edit Detail Pemberian Obat</h2>
                    
                    <label class="block text-sm font-medium text-gray-700 mb-1">Jumlah</label>
                    <input type="number" name="jumlah" value="<?php echo $data['Jumlah'] ?>"
                        class="w-full p-2 mb-3 rounded-md bg-gray-100 border border-gray-300 focus:ring-2 focus:ring-sky-400 focus:outline-none" 
                        placeholder="Masukkan jumlah" required>

                    <label class="block text-sm font-medium text-gray-700 mb-1">Dosis</label>
                    <input type="text" name="dosis" value="<?php echo $data['Dosis'] ?>"
                        class="w-full p-2 mb-3 rounded-md bg-gray-100 border border-gray-300 focus:ring-2 focus:ring-sky-400 focus:outline-none" 
                        placeholder="Masukkan dosis" required>

                    <label class="block text-sm font-medium text-gray-700 mb-1">ID Obat</label>
                    <input type="number" name="id_obat" value="<?php echo $data['ID_Obat'] ?>"
                        class="w-full p-2 mb-5 rounded-md bg-gray-100 border border-gray-300 focus:ring-2 focus:ring-sky-400 focus:outline-none" 
                        placeholder="Masukkan id obat" required>

                    <label class="block text-sm font-medium text-gray-700 mb-1">ID Rawat Inap</label>
                    <input type="number" name="id_rawat_inap" value="<?php echo $data['ID_Rawat_Inap'] ?>"
                        class="w-full p-2 mb-5 rounded-md bg-gray-100 border border-gray-300 focus:ring-2 focus:ring-sky-400 focus:outline-none" 
                        placeholder="Masukkan id rawat inap" required>

                    <button type="submit" name="tambah" value="tambah_detailObat" class="w-full bg-green-500 text-white py-2 rounded-md hover:bg-green-600 transition">
                        Tambah
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
