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

        <!-- Sidebar -->
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

        <div class="flex-1 p-10">
            <div class="flex justify-center">
                <form action="../action/action_tambah.php" method="POST" 
                    class="bg-gray-200 p-6 rounded-xl shadow-md w-full max-w-md">
                    <h2 class="text-lg font-semibold text-gray-700 mb-4">Tambah Kamar</h2>
                    
                    <label class="block text-sm font-medium text-gray-700 mb-1">No Kamar</label>
                    <input type="text" name="no_kamar" 
                        class="w-full p-2 mb-3 rounded-md bg-gray-100 border border-gray-300 focus:ring-2 focus:ring-sky-400 focus:outline-none" 
                        placeholder="Masukkan no kamar" required>

                    <label class="block text-sm font-medium text-gray-700 mb-1">Tipe Kamar</label>
                    <input type="text" name="tipe_kamar" 
                        class="w-full p-2 mb-3 rounded-md bg-gray-100 border border-gray-300 focus:ring-2 focus:ring-sky-400 focus:outline-none" 
                        placeholder="Masukkan tipe kamar" required>

                    <label class="block text-sm font-medium text-gray-700 mb-1">Status Kamar</label>
                    <input type="text" name="status_kamar" value="Tersedia"
                        class="w-full p-2 mb-3 rounded-md bg-gray-100 border border-gray-300 focus:ring-2 focus:ring-sky-400 focus:outline-none" 
                        placeholder="Masukkan tipe kamar" required>

                    <label class="block text-sm font-medium text-gray-700 mb-1">Harga Per Hari</label>
                    <input type="number" name="harga_hari" 
                        class="w-full p-2 mb-5 rounded-md bg-gray-100 border border-gray-300 focus:ring-2 focus:ring-sky-400 focus:outline-none" 
                        placeholder="Masukkan harga per hari" required>

                    <button type="submit" name="tambah" value="tambah_kamar" class="w-full bg-green-500 text-white py-2 rounded-md hover:bg-green-600 transition">
                        Tambah
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
