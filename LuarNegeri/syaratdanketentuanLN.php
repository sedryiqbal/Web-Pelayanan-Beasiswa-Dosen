<?php
session_start();
if($_SESSION['level']==""){
	header("location:../index.php?alert=belum_login");
}
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$result = mysqli_query($connection, "SELECT * FROM tb_pasien");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Syarat dan Ketentuan BUDI-LN (LUAR NEGERI) REKOMENDASI BEASISWA DOSEN</h1>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
        <li>1.	Proses pelamaran harus dilakukan secara daring(on-line).</li>
        <p></p>
        <li>2.	Mendapatkan persetujuan Pemimpin Perguruan Tinggi.</li>
        <p></p>
        <li>3.	Tidak untuk mendapatkan gelar kedua pada strata yang sama.</li>
        <p></p> 
        <li>4.	Pembiayaan tidak dapat digabung dengan beasiswa dari sumber lain (double funding)  </li>
         <p>&emsp;&emsp;&ensp;dengan melampirkan surat pernyataan tidak sedang menerima beasiswa lain.</p> 
         <li>5.	Jangka waktu studi yang di biayai untuk menempuh program Pendidikan S3 adalah maksimum 48 bulan yang di pecah menjadi dua bagian,</li>
         <p>&emsp;&emsp;&ensp;yaitu 36 bulan di biayai langusng, dan dapat di perpanjang dua kali 6 (enam) bulan bagi yang memenuhi semua persyaratan, sedangkan untuk <br>&emsp;&emsp;&ensp;program Pendidikan S2 maksimum 24 bulan.</br></p>
         <p></p> 
        <li>6.	TOEFL institusional (ITP) minimal 550 atau IBT minimal 80, atau  </li>
        <p>&emsp;&emsp;&ensp;IELTS minimal 6.0, atau TOEIC minimal 650 yang masih berlaku maksimal 2 tahun sejak sertifikat di keluarkan.</p> 
        <li>7.	Melampirkan Letter of Acceptance (LoA) tanpa syarat (unconditional) dari perguruan tinggi yang dituju.</li>
        <p></p>
        <li>8.	Melampirkan usulan penelitian (research proposal) dalam bahasa inggris..</li>
        <p>&emsp;&emsp;&ensp;Kerangka (out-line) usulan penelitian yang telah didiskusikan dengan calon promotor.</p>
        <li>9.	Melampirkan Letter of Motivation dalam bahasa inggris maksimal 3 halaman.</li>
        <p></p>
        <li>10.	Usia Pelamar tidak lebih dari 50 tahun ketika mendaftar BUDI-LN.</li>
        <p></p>
        <a href="../daftarLN/create.php" class="btn btn-primary">DAFTAR</a>
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