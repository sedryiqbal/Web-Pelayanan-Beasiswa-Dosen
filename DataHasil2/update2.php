<?php
session_start();
require_once '../helper/connection.php';

$Id = $_POST['Id'];
$Ket = $_POST['Ket'];
$Note = $_POST['Note'];

$query = mysqli_query($connection, "UPDATE dokumenln SET Ket = '$Ket', Note = '$Note' WHERE Id = '$Id'");
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil mengubah data'
  ];
  header('Location: ./hasil.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./hasil.php');
}
