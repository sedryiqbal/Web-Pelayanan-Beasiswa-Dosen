<?php
session_start();
if($_SESSION['level']==""){
	header("location:../index.php?alert=belum_login");
}

require_once '../layout/_top.php';
require_once '../helper/connection.php';

$DataDN = mysqli_query($connection, "SELECT COUNT(*) FROM dokumendn");
$DataLN = mysqli_query($connection, "SELECT COUNT(*) FROM dokumenln");
// $pasien = mysqli_query($connection, "SELECT COUNT(*) FROM tb_pasien");
// $resep = mysqli_query($connection, "SELECT COUNT(*) FROM tb_resep");

$total_DN = mysqli_fetch_array($DataDN)[0];
$total_LN = mysqli_fetch_array($DataLN)[0];
// $total_pasien = mysqli_fetch_array($pasien)[0];
// $total_resep = mysqli_fetch_array($resep)[0];
?>

<section class="section">
  <div class="section-header">
    <h1>STANDAR PELAYANAN PEMBERIAN REKOMENDASI BEASISWA DOSEN DALAM NEGERI</h1>
  </div>
  <div class="column">
    <div class="row">
      <div class="col-lg-5 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>

           <div class="card-wrap">
            
           <div class="card-header">
              <h4>Total Pengajuan BUDI DN</h4>
            </div>

            <div class="card-body">
              <?= $total_DN ?>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-5 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Pengajuan BUDI LN</h4>
            </div>
            <div class="card-body">
              <?= $total_LN ?>
            </div>
          </div>
        </div>
      </div>
    </div>


    </section>

<?php
require_once '../layout/_bottom.php';
?>