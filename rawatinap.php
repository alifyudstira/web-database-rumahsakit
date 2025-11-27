<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Rawat Inap</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<body class="bg-gray-100">

  <div class="flex min-h-screen border-4 border-sky-400">
    <!-- Sidebar -->
    <aside class="w-56 bg-green-200 p-6 flex flex-col justify-between shadow-md">
      <div>
        <h1 class="text-lg font-semibold text-gray-700 mb-6">Menu</h1>
        <nav class="flex flex-col gap-3 text-gray-800 text-sm">
          <a href="dokter.php" class="py-2 px-3 rounded-lg hover:bg-green-300 hover:translate-x-1 transition-all duration-200">Daftar Dokter</a>
          <a href="perawat.php" class="py-2 px-3 rounded-lg hover:bg-green-300 hover:translate-x-1 transition-all duration-200">Daftar Perawat</a>
          <a href="pasien.php" class="py-2 px-3 rounded-lg hover:bg-green-300 hover:translate-x-1 transition-all duration-200">Daftar Pasien</a>
          <a href="obat.php" class="py-2 px-3 rounded-lg hover:bg-green-300 hover:translate-x-1 transition-all duration-200">Daftar Obat</a>
          <a href="kamar.php" class="py-2 px-3 rounded-lg hover:bg-green-300 hover:translate-x-1 transition-all duration-200">Daftar Kamar</a>
          <a href="jadwal.php" class="py-2 px-3 rounded-lg hover:bg-green-300 hover:translate-x-1 transition-all duration-200">Jadwal Jaga</a>
          <a href="pemberianobat.php" class="py-2 px-3 rounded-lg hover:bg-green-300 hover:translate-x-1 transition-all duration-200">Detail Pemberian Obat</a>
          <a href="#" class="py-2 px-3 rounded-lg hover:bg-green-300 hover:translate-x-1 transition-all duration-200"><b>Rawat Inap</b></a>
        </nav>
      </div>
      <footer class="text-xs text-gray-600 mt-8">© 2025 Klinik Sehat</footer>
    </aside>

    <!-- Konten Utama -->
    <main class="flex-1 p-6 overflow-y-auto">
      <div class="mb-5"><a href="form/form_tambah_rawatInap.php" class="inline-block text-black hover:bg-green-500 border border-green-500 px-3 py-1 rounded-lg transition"><button>Tambah</button></a></div>
      <h2 class="text-lg font-semibold text-sky-700 mb-6">Rawat Inap</h2>

      <!-- Daftar Rawat Inap -->
      <div class="space-y-6">
        <!-- Kartu Rawat Inap -->
         <?php
         include "koneksi.php";
         $query = "select r.ID_Rawat_Inap, r.Tgl_Masuk, r.Tgl_Keluar, r.Diagnosa_Awal, p.Nama_Pasien, d.Nama_Dokter, k.No_Kamar from rawat_inap as r
         left join pasien as p on r.ID_Pasien=p.ID_Pasien
         left join dokter as d on r.ID_Dokter=d.ID_Dokter
         left join kamar as k on r.ID_Kamar=k.ID_Kamar";
         $proses = mysqli_query($koneksi, $query);
         $data = mysqli_fetch_all($proses, MYSQLI_ASSOC);

         foreach($data as $item){
            echo "
            <div class='bg-gray-200 p-4 rounded-xl shadow-sm flex justify-between'>
                <div class='space-y-1 text-sm'>
                <p><strong>ID rawat inap : <span>".$item['ID_Rawat_Inap']."</span></strong></p>
                <p>No kamar: <span>".$item['No_Kamar']."</span></p>
                <div class='grid grid-cols-2 gap-20'>
                    <p>Tanggal masuk: <span>".$item['Tgl_Masuk']."</span></p>
                    <p>Tanggal keluar: <span>".$item['Tgl_Keluar']."</span></p>
                </div>
                <p>Nama dokter: <span>".$item['Nama_Dokter']."</span></p>
                <p>Nama pasien: <span>".$item['Nama_Pasien']."</span></p>
                <p>Diagnosis awal: <span>".$item['Diagnosa_Awal']."</span></p>
            </div>
            <div class='text-sm text-right'>
                <a href='action/action_hapus.php?hapus=rawatInap&id=".$item['ID_Rawat_Inap']."' class='inline-block text-red-600 hover:text-white hover:bg-red-600 border border-red-600 px-3 py-1 rounded-lg transition'>hapus</a>

                <a href='action/action_edit.php?id=".$item['ID_Rawat_Inap']."' class='inline-block text-green-600 hover:text-white hover:bg-green-600 border border-green-600 px-3 py-1 rounded-lg transition'>Edit</a>
            </div>
            </div>
            ";
         }
         ?>
      </div>
    </main>
  </div>

</body>
</html>
