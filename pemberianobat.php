<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Dokter</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<body class="bg-gray-100">

  <div class="flex min-h-screen">
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
          <a href="#" class="py-2 px-3 rounded-lg hover:bg-green-300 hover:translate-x-1 transition-all duration-200"><b>Detail Pemberian Obat</b></a>
          <a href="rawatinap.php" class="py-2 px-3 rounded-lg hover:bg-green-300 hover:translate-x-1 transition-all duration-200">Rawat Inap</a>
        </nav>
      </div>
      <footer class="text-xs text-gray-600 mt-8">© 2025 Klinik Sehat</footer>
    </aside>

    <main class="flex-1 p-8">
      <div class="mb-5"><a href="form/form_tambah_detailObat.php" class="inline-block text-black hover:bg-green-500 border border-green-500 px-3 py-1 rounded-lg transition"><button>Tambah</button></a></div>
      <div class="bg-white shadow-lg rounded-2xl overflow-hidden">
        <div class="bg-sky-300 text-gray-800 font-semibold text-base py-3 px-6">
          Daftar Dokter
        </div>
        <table class="w-full text-sm text-left border-t border-gray-200">
          <thead>
            <tr class="bg-sky-100 text-gray-700 uppercase text-xs tracking-wide">
              <th class="px-6 py-3">ID Pemberian Obat</th>
              <th class="px-6 py-3">Jumlah</th>
              <th class="px-6 py-3">Dosis</th>
              <th class="px-6 py-3">Nama Obat</th>
              <th class="px-6 py-3">No Kamar</th>
              <th class="px-6 py-3">Hapus</th>
            </tr>
          </thead>

            <?php
            include "koneksi.php";
            $query = "select d.ID_Detail_Obat, d.Jumlah, d.Dosis, o.Nama_Obat, k.No_Kamar from detail_pemberian_obat d
            left join obat o on d.ID_Obat=o.ID_Obat
            left join rawat_inap r on d.ID_Rawat_Inap=r.ID_Rawat_Inap
            left join kamar k on r.ID_Kamar=k.ID_Kamar
            order by ID_Detail_Obat
            ";
            $proses = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_all($proses, MYSQLI_ASSOC);

            foreach($data as $item){
                echo "
                <tbody class='divide-y divide-gray-100'>
                    <tr class='hover:bg-sky-50 transition-colors'>
                    <td class='italic px-6 py-3'>".$item['ID_Detail_Obat']."</td>
                    <td class='italic px-6 py-3'>".$item['Jumlah']."</td>
                    <td class='italic px-6 py-3'>".$item['Dosis']."</td>
                    <td class='italic px-6 py-3'>".$item['Nama_Obat']."</td>
                    <td class='italic px-6 py-3'>".$item['No_Kamar']."</td>
                    <td class='italic px-6 py-3'>
                      <div class='grid grid-cols-2 gap-3'>
                        <a href='action/action_hapus.php?hapus=derailObat&id=".$item['ID_Detail_Obat']."' class='inline-block text-red-600 hover:text-white hover:bg-red-600 border border-red-600 px-3 py-1 rounded-lg transition'>Hapus</a>

                        <a href='edit/form_edit_detailObat.php?id=".$item['ID_Detail_Obat']."' class='inline-block text-green-600 hover:text-white hover:bg-green-600 border border-green-600 px-3 py-1 rounded-lg transition'>Edit</a>
                      </div>
                    </td>
                    </tr>
                </tbody>
                ";
            }
            ?>
        </table>
      </div>
    </main>
  </div>

</body>
</html>
