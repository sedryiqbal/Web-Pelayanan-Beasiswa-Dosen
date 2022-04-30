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
  <div class="section-header" style="align-items:center">
  <h2>DATA PENGAJUAN REKOMENDASI BUDI DN</h2>
</div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-striped w-100" id="table-1">
              <thead>                
                <?php
                $no=1;
                while ($data = mysqli_fetch_array($result)) :
                ?>
                <tr>
                                  </tr>
                <br>
                  <tr>
                  <td>No: </td>
                    <th><?= $no++ ?></th>
                </tr>
                <tr>
                    <td>NIDN: </td>
                    <th><?= $data['Nidn'] ?></th>
                </tr>
                <tr>
                <td>Nama: </td>
                    <th><?= $data['Nama'] ?></th>
                </tr>
                <tr>
                <td>Email: </td>
                    <th><?= $data['Email'] ?></th>
                </tr>
                <tr>   
                <td>Instansi: </td>    
                <th><?= $data['Instansi'] ?></th>
                </tr>
                <tr>
                <td>Alamat: </td>
                <th><?= $data['Alamat'] ?></th>
                </tr>
                <tr>
                <td style="width:3%;">Keterangan: </td>
                <td>        
                  <a class="btn btn-sm btn-primary  mb-md-1 mb-5"  href="#"> 
                  <?php if($data['Ket']== 'Belum ACC') { ?> 
                      <?= $data['Ket'] ?> 
                      <?php } else { ?>
                      <?= $data['Ket'] ?>
                      <?php } ?>
                      </a>   
                    </td>
                    </tr>
                   <tr>
                    <td>Note: </td>
                    <td>        
                    <?php if($data['Ket']== 'ACC') { ?> 
                    
                      <a class="btn btn-sm btn-info   mb-md-1 mb-5" href="cetak.php?Id=<?= $data['Id'] ?>" target="_blank">Cetak <i class="fas fa-edit fa-fw"></i></a>
                      
                      <?php } else { ?>
                      <?= $data['Note']  ?>  
                      <?php } ?>
                     
                    </td>
                  </tr>
                  
                  <tr>
                    <td> <a href="../dashboard/index.php" class="btn btn-light">Kembali</a> </td>
                      </tr>


                <?php
                endwhile;
                ?>
                </thead>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>