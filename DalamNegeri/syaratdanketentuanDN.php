<?php
session_start();
if($_SESSION['level']==""){
	header("location:../index.php?alert=belum_login");
}
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$result = mysqli_query($connection, "SELECT * FROM dokumendn");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Syarat dan Ketentuan BUDI-DN (DALAM NEGERI) REKOMENDASI BEASISWA DOSEN</h1>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
        <li>1.	Mendapatkan Persetujuan Pemimpin Perguruan Tinggi Swasta.</li>
        <p></p>
        <li>2.	Tidak untuk mendapatkan gelar kedua pada strata yang sama.</li>
        <p></p>
        <li>3.	Pembiayaan tidak dapat di gabung dengan beasiswa dari sumber lain (double funding) </li>
         <p>&emsp;&emsp;&ensp;dengan melampirkan surat pernyataan tidak sedang menerima beasiswa lain.</p> 
        <li>4.	Batas Usia penerima BUDI-DN Dosen adalah 45 tahun untuk S2 dan 50 tahun </li>
         <p>&emsp;&emsp;&ensp;untuk S3 terhitung pada tanggal 1 desember tahun berjalan.</p>
         <li>5.	Jangka waktu studi yang di biayai untuk menempuh program Pendidikan S3 adalah maksimum 48 bulan yang di pecah menjadi dua bagian,</li>
         <p>&emsp;&emsp;&ensp;yaitu 36 bulan di biayai langusng, dan dapat di perpanjang dua kali 6 (enam) bulan bagi yang memenuhi semua persyaratan, sedangkan untuk <br> &emsp;&emsp;&ensp;program Pendidikan S2 maksimum 24 bulan.</p>
         <li>6.	Tidak sedang melaksanakan studi lanjut atau berstatus mahasiswa aktif jenjang S3 </li>
         <p>&emsp;&emsp;&ensp;pada Perguruan tinggi yang di tuju di luar negeri.</p>
         <li>7.	Usia Pelamar tidak melebihi 47 tahun ketika mendaftar beasiswa.</li>
        <p></p>
        <li>8. Pelamar yang berstatus suami dan istri dan memiliki bidang keilmuan yang sama,	</li>
         <p>&emsp;&emsp;&ensp;tidak di perkenankan di bimbing oleh promotor yang sama.</p>
         <li>9.	Pelamar BUDI-DN hanya di perbolehkan mengajukan usulan kepada satu perguruan tinggi (PT) penyelenggara </li>
         <p>&emsp;&emsp;&ensp; BUDI-DN.</p>
         <li>10.	Menulis essay (500 sampai 700 kata) dengan tema 'Kontribusiku Bagi Indonesia: kontribusi yang telah, sedang dan akan</li>
         <p>&emsp;&emsp;&ensp; saya lakukan untuk masyarakat/lembaga/instansi/profesi komunitas saya' dan 'Sukses Terbesar dalam Hidupku' .</p>
         <li>11. Apabila terdapat pemalsuan data atau dokumen, maka pendaftar dinyatakan gugur dan tidak berhak mendaftar lagi </li>
         <p></p>
         <li>12.	Penerima BUDI-DN berkewajiban memutakhiran perkembangan studinya secara periodik ke laman http://studi.dikti.go.id </li>
         <p></p>
         <li>13.	Setelah menyelesaikan studi, penerima BUDI-DN di wajibkan untuk kembali mengabdi ke perguruan tinggi tempat bekerja</li>
         <p>&emsp;&emsp;&ensp; selama 1n+1 tahun (n adalah lama masa menerima BUDI-DN dalam satuan tahun) sesuai Permendiknas Nomor 48 tahun 2009 .</p>
         <li>14.	Penerima BUDI-DN yang melanggar ketentuan-ketentuan tersebut dikenakan BUDI-DN sebesar dua kali jumlah yang dikeluarkan</li>
         <p>&emsp;&emsp;&ensp; oleh Pemerintah ke kantor pelayanan perbendaharaan Negara (KPPN) melalui mekanisme pengembalian yang berlaku .</p>
         <li>15.	Dosen pelamar BUDI-DN harus terdaftar di Daftar Rencana Studi PTS yang bersangkutan </li>
         <p></p>
         
        <a href="../daftarDN/create.php" class="btn btn-primary">DAFTAR</a>
        <a href="../dashboard/index.php"class="btn btn-light">Kembali</a>
          </div>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>
<!-- Page Specific JS File -->
<?php
if (isset($_SESSION['info'])) :
  if ($_SESSION['info']['status'] == 'success') {
?>
    <script>
      iziToast.success({
        title: 'Sukses',
        message: `<?= $_SESSION['info']['message'] ?>`,
        position: 'topCenter',
        timeout: 5000
      });
    </script>
  <?php
  } else {
  ?>
    <script>
      iziToast.error({
        title: 'Gagal',
        message: `<?= $_SESSION['info']['message'] ?>`,
        timeout: 5000,
        position: 'topCenter'
      });
    </script>
<?php
  }

  unset($_SESSION['info']);
  $_SESSION['info'] = null;
endif;
?>
<script src="../assets/js/page/modules-datatables.js"></script>