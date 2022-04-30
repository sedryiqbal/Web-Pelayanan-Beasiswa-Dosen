<?php
session_start();
if($_SESSION['level']==""){
	header("location:../index.php?alert=belum_login");
}
require_once '../layout/_top.php';
require_once '../helper/connection.php';
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>DAFTAR BUDI-LN REKOMENDASI BEASISWA DOSEN</h1>
    
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="proses_upload2.php" method="POST" enctype="multipart/form-data">
            <table cellpadding="8" class="w-100">
              <tr>
               <td>NIDN</td>
               <td><input class="form-control" type="text" name="Nidn" placeholder="NIDN.." required="required"></td>
              </tr>
              <tr>
               <td>Nama</td>
               <td><input class="form-control" type="text" name="Nama" placeholder="Nama.." required="required"></td>
              </tr>
              <tr>
               <td>Email</td>
               <td><input class="form-control" type="text" name="Email" placeholder="Email.." required="required"></td>
              </tr>
              <tr>
               <td>Asal Instansi</td>
               <td><input class="form-control" type="text" name="Instansi" placeholder="Instansi.." required="required"></td>
              </tr>
              <tr>
               <td>Alamat</td>
               <td><input class="form-control" type="text" name="Alamat" placeholder="Alamat.." required="required"></td>
              </tr>
              <tr>
               <td>KTP </td>
               <td><input type="file" name="NamaFile" accept="application/pdf" placeholder="KTP.." required="required"></td>
              </tr>
              <tr>
               <td>Surat Pengantar dari Pimpinan Perguruan Tinggi Swasta </td>
               <td><input type="file" name="NamaFile1" accept="application/pdf"  required="required"></td>
              </tr>
              <tr>
               <td>Surat Kuputusan Pengangkatan sebagai Dosen Tetap </td>
               <td><input type="file" name="NamaFile2" accept="application/pdf"  required="required"></td>
              </tr>
              <tr>
               <td>Ijazah S1/D.IV, S2/Sp.I, dan S3/Sp.2 </td>
               <td><input type="file" name="NamaFile3" accept="application/pdf"  required="required"></td>
              </tr>
              <tr>
               <td>Surat keputusan jabatan terakhir dan penetepan angka kredit</td>
               <td><input type="file" name="NamaFile4" accept="application/pdf"  required="required"></td>
              </tr>
              <tr>
               <td>Surat Keputusan kenaikan pangkat terakhir</td>
               <td><input type="file" name="NamaFile5" accept="application/pdf"  required="required"></td>
              </tr>
              <tr>
               <td>Surat Pernyataan bukan PNS/POLRI/TNI/BUMN/BUMD/Instansi lainnya</td>
               <td><input type="file" name="NamaFile6" accept="application/pdf"  required="required"></td>
              </tr>
              <tr>
              <tr>
               <td>Salinan Ijazah S2/Sp</td>
               <td><input type="file" name="NamaFile7" accept="application/pdf"  required="required"></td>
              </tr>
              <tr>
               <td>TOEFL / IELTS / TOEIC</td>
               <td><input type="file" name="NamaFile8" accept="application/pdf"  required="required"></td>
              </tr>
              <tr>
               <td>Letter Of Acceptance (LoA)</td>
               <td><input type="file" name="NamaFile9" accept="application/pdf"  required="required"></td>
              </tr>
              <tr>
               <td>Research Proposal </td>
               <td><input type="file" name="NamaFile10" accept="application/pdf"  required="required"></td>
              </tr>
              <tr>
               <td>Kartu Pendaftaran Beasiswa (BUDI LN) </td>
               <td><input type="file" name="NamaFile11" accept="application/pdf"  required="required"></td>
              </tr>
              <tr>
                <td><br></br></td>
              </tr>
              <tr>
                <td>Anda Yakin Semua Data Telah Terisi ? <input type='checkbox' name='Ket' value='Masih Diproses' checked='checked' />
    					</td>
		      		</tr>
              <tr>
               <td>  
               <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
               <input class="btn btn-danger"  type="reset" name="batal" value="Bersihkan">
               <a href="../dashboard/index.php"class="btn btn-light">Kembali</a>
               </td>
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