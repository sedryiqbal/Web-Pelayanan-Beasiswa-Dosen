<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$prodi = mysqli_query($connection, "SELECT * FROM tb_umum");

?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>DAFTAR BUDI LUAR NEGERI REKOMENDASI BEASISWA DOSEN</h1>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="store.php" method="POST" enctype="multipart/form-data>
            <table cellpadding="8" class="w-100">
              <tr>
                <td>NIDN</td>
                <td><input class="form-control" type="number" name="NIDN" size="20" required></td>
              </tr>
              <tr>
                <td>Nama Dosen</td>
                <td><input class="form-control" type="text" name="Nama" size="20" required></td>
              </tr>
              <tr>
                <td>Email</td>
                <td><input class="form-control" type="text" name="Email" size="20" required></td>
              </tr>
              <br></br>
              <tr>
                <td>Surat Pengantar dari Pimpinan Perguruan Tinggi Swasta </td>
                <br></br>  
                <td><input type="file" name="SPPT" accept="application/pdf"></td>
              </tr>
              <br></br>
              <tr>
                <td>Surat Kuputusan Pengangkatan sebagai Dosen Tetap </td>
                <br></br>  
                <td><input type="file" name="SSKP" accept="application/pdf"></td>
              </tr>
              <br></br>
              <tr>
                <td>Ijazah S1/D.IV, S2/Sp.I, dan S3/Sp.2 </td>
                <br></br>  
                <td><input type="file" name="SI" accept="application/pdf"></td>
              </tr>
              <br></br>
              <tr>
                <td>Surat keputusan jabatan terakhir dan penetepan angka kredit</td>
                <br></br>  
                <td><input type="file" name="SSKJ" accept="application/pdf"></td>
              </tr>
              <br></br>
              <tr>
                <td>Surat Keputusan kenaikan pangkat terakhir</td>
                <br></br>  
                <td><input type="file" name="SKKP" accept="application/pdf"></td>
              </tr>
              <br></br>
              <tr>
                <td>KTP</td>
                <br></br>  
                <td><input type="file" name="SKTP" accept="application/pdf"></td>
              </tr>
              <br></br>
              <tr>
                <td>Surat Pernyataan bukan PNS/POLRI/TNI/BUMN/BUMD/Instansi lainnya</td>
                <br></br>  
                <td><input type="file" name="SBPNS" accept="application/pdf"></td>
              </tr>
              <br></br>
              <tr>
                <td>Salinan Ijazah S2/Sp</td>
                <br></br>  
                <td><input type="file" name="SIS2" accept="application/pdf"></td>
              </tr>
              <br></br>
              <tr>
                <td>TOEFL / IELTS / TOEIC</td>
                <br></br>  
                <td><input type="file" name="TIT" accept="application/pdf"></td>
              </tr>
              <br></br>
              <tr>
                <td>Letter Of Acceptance (LoA)</td>
                <br></br>  
                <td><input type="file" name="LOA" accept="application/pdf"></td>
              </tr>
              <br></br>
              <tr>
                <td>Research Proposal </td>
                <br></br>  
                <td><input type="file" name="RP" accept="application/pdf"></td>
              </tr>
              <br></br>
              <tr>
                <td>Kartu Pendaftaran Beasiswa (BUDI LN)</td>
                <br></br>  
                <td><input type="file" name="SBPNS" accept="application/pdf"></td>
              </tr>
              <br></br>
              <tr>
              <td>Tanggal Pengajuan</td>
              <td><input class="form-control" type="date" id="datepicker" name="TGLP"></td>
              </tr>
              <br></br>
              <tr>
                <td>
                   <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                  <input class="btn btn-danger" type="reset" name="batal" value="Bersihkan"></td>
                  <a href="../LuarNegeri/index.php" class="btn btn-light">Kembali</a>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>