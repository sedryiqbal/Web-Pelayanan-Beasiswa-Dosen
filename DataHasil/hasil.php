<?php
session_start();
if($_SESSION['level']==""){
	header("location:../index.php?alert=belum_login");
}
require_once '../layout2/_top.php';
require_once '../helper/connection.php';

$result = mysqli_query($connection, "SELECT * FROM dokumendn");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Data Beasiswa Dosen Dalam Negeri</h1>
    <a href="../admin/index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-striped w-100" id="table-1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NIDN</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Instansi</th>
                  <th>Alamat</th>
                  <th>File1</th>
                  <th>File2</th>
                  <th>File3</th>
                  <th>File4</th>
                  <th>File5</th>
                  <th>File6</th>
                  <th>File7</th>
                  <th>File8</th>
                  <th>File9</th>
                  <th>Keterangan</th>
                  <th colSpan=2px >Note</th>
                  <th style="width: 200">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                while ($data = mysqli_fetch_array($result)) :
                ?>

                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['Nidn'] ?></td>
                    <td><?= $data['Nama'] ?></td>
                    <td><?= $data['Email'] ?></td>
                    <td><?= $data['Instansi'] ?></td>
                    <td><?= $data['Alamat'] ?></td>
                    <td><a href="../daftarDN/berkas/KTP/<?php echo $data['KTP']?>">Ktp </td>
                    <td><a href="../daftarDN/berkas/Surat Pengantar dari Pimpinan Perguruan Tinggi Swasta/<?php echo $data['SPPPTS']?>">Surat Pengantar dari Pimpinan Perguruan Tinggi Swasta</td>
                    <td><a href="../daftarDN/berkas/Surat Kuputusan Pengangkatan sebagai Dosen Tetap/<?php echo $data['SKPDT']?>">Surat Kuputusan Pengangkatan sebagai Dosen Tetap</td>
                    <td><a href="../daftarDN/berkas/Ijazah S1D.IV, S2Sp.I, dan S3Sp.2/<?php echo $data['IJ']?>">Ijazah S1/D.IV, S2/Sp.I, dan S3/Sp.2</td>
                    <td><a href="../daftarDN/berkas/Surat keputusan jabatan terakhir dan penetepan angka kredit/<?php echo $data['SKJT']?>">Surat keputusan jabatan terakhir dan penetepan angka kredit</td>
                    <td><a href="../daftarDN/berkas/Surat Keputusan kenaikan pangkat terakhir/<?php echo $data['SKKP']?>">Surat Keputusan kenaikan pangkat terakhir </td>
                    <td><a href="../daftarDN/berkas/Surat Pernyataan bukan PNS,POLRI,TNI,BUMN,BUMD,Instansi lainnya/<?php echo $data['SPB']?>">Surat Pernyataan bukan PNS/POLRI/TNI/BUMN/BUMD/Instansi lainnya</td>
                    <td><a href="../daftarDN/berkas/Form Rekomendasi sesuai pedoman BUDI DN/<?php echo $data['FRD']?>">Form Rekomendasi sesuai pedoman BUDI DN</td>
                    <td><a href="../daftarDN/berkas/Essay/<?php echo $data['ES']?>">Essay</td>
                    <td style="padding=5px" class="btn btn-sm btn-primary pt-7 mb-md-8 mb-10" >        
                    <?php if($data['Ket']== 'Belum ACC') { ?> 
                      <?= $data['Ket'] ?>
                      <?php } else { ?>
                      <?= $data['Ket'] ?>
                      <?php } ?>
                      <td>
                   <?php if($data['Ket']== 'ACC') { ?> 
                      <a class="btn btn-sm btn-info" href="cetak.php?Id=<?= $data['Id'] ?>"  target="_blank">Cetak
                      </a>
                      <?php } else { ?>
                      <?= $data['Note']  ?>
                      <?php } ?>
                    </td>
                    </td>
                    <td>
                      <a class="btn btn-sm btn-info" href="edit2.php?Id=<?= $data['Id'] ?>">
                        <i class="fas fa-edit fa-fw"></i>
                      </a>
                    </td>
                  </tr>
                <?php
                endwhile;
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout2/_bottom.php';
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