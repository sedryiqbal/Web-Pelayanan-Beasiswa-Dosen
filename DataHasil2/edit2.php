<?php
session_start();
if($_SESSION['level']==""){
	header("location:../index.php?alert=belum_login");
}
require_once '../layout2/_top.php';
require_once '../helper/connection.php';

$Id = $_GET['Id'];
$query = mysqli_query($connection, "SELECT * FROM dokumenln WHERE id='$Id'");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ubah Data Keterangan</h1>
    <a href="./hasil.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./update2.php" method="post">
            <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
              <input type="hidden" name="Id" value="<?= $row['Id'] ?>">
              <table cellpadding="8" class="w-100">
                <tr>
                  <td>Keterangan</td>
                  <td>
                    <select class="form-control" name="Ket" id="Ket" required>
                      <option value="ACC" <?php if ($row['Ket'] == "ACC") {
                                              echo "selected";
                                            } ?>>ACC</option>
                      <option value="Belum ACC" <?php if ($row['Ket'] == "Belum ACC") {
                                                echo "selected";
                                              } ?>>Belum ACC</option>
                    </select>
                  </td>
                  <tr>
                  <td>Note :</td>
                  <td> <textarea name="Note"  cols="40" rows="5"></textarea></td>
                  </tr>
                </tr>
                <tr>
                  <td>
                    <input class="btn btn-primary d-inline" type="submit" name="proses" value="Ubah">
                    <a href="./hasil.php" class="btn btn-danger ml-1">Batal</a>
                  <td>
                </tr>
              </table>

            <?php } ?>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout2/_bottom.php';
?>