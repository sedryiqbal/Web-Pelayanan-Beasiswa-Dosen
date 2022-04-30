<?php
 $koneksi = mysqli_connect("localhost","root","","beasiswa");

 if(isset($_POST['proses'])) {

    $nidn = $_POST['Nidn'];
    $nama = $_POST['Nama'];
    $email = $_POST['Email'];
    $instansi = $_POST['Instansi'];
    $alamat = $_POST['Alamat'];
    
    $direktori = "berkas/KTP/";
    $direktori1 = "berkas/Surat Pengantar dari Pimpinan Perguruan Tinggi Swasta/";
    $direktori2 = "berkas/Surat Kuputusan Pengangkatan sebagai Dosen Tetap/";
    $direktori3 = "berkas/Ijazah S1D.IV, S2Sp.I, dan S3Sp.2/";
    $direktori4 = "berkas/Surat keputusan jabatan terakhir dan penetepan angka kredit/";
    $direktori5 = "berkas/Surat Keputusan kenaikan pangkat terakhir/";
    $direktori6 = "berkas/Surat Pernyataan bukan PNS,POLRI,TNI,BUMN,BUMD,Instansi lainnya/";
    $direktori7 = "berkas/Salinan Ijazah S2,Sp/";
    $direktori8 = "berkas/TOEFL,ELTS,TOEIC/";
    $direktori9 = "berkas/Letter Of Acceptance (LoA)/";
    $direktori10 = "berkas/Research Proposal/";
    $direktori11 = "berkas/Kartu Pendaftaran Beasiswa (BUDI LN)/";
    
    

    $file_name=$_FILES['NamaFile']['name'];
    $file_type=$_FILES['NamaFile']['type'];
    
    $file_name1=$_FILES['NamaFile1']['name'];
    $file_type1=$_FILES['NamaFile1']['type'];

    $file_name2=$_FILES['NamaFile2']['name'];
    $file_type2=$_FILES['NamaFile2']['type'];

    $file_name3=$_FILES['NamaFile3']['name'];
    $file_type3=$_FILES['NamaFile3']['type'];

    $file_name4=$_FILES['NamaFile4']['name'];
    $file_type4=$_FILES['NamaFile4']['type'];
    
    $file_name5=$_FILES['NamaFile5']['name'];
    $file_type5=$_FILES['NamaFile5']['type'];

    $file_name6=$_FILES['NamaFile6']['name'];
    $file_type6=$_FILES['NamaFile6']['type'];

    $file_name7=$_FILES['NamaFile7']['name'];
    $file_type7=$_FILES['NamaFile7']['type'];

    $file_name8=$_FILES['NamaFile8']['name'];
    $file_type8=$_FILES['NamaFile8']['type'];
    
    $file_name9=$_FILES['NamaFile9']['name'];
    $file_type9=$_FILES['NamaFile9']['type'];

    $file_name10=$_FILES['NamaFile10']['name'];
    $file_type10=$_FILES['NamaFile10']['type'];

    $file_name11=$_FILES['NamaFile11']['name'];
    $file_type11=$_FILES['NamaFile11']['type'];

    $file_name12=$_FILES['NamaFile12']['name'];
    $file_type12=$_FILES['NamaFile12']['type'];


    if ($file_type=="application/pdf") {
       if(move_uploaded_file($_FILES['NamaFile']['tmp_name'],$direktori.$file_name))
       {
        echo "<b>File berhasil diupload  ". basename( $_FILES['NamaFile']['name']). " is uploaded";        
       }
      }

   if ($file_type1 =="application/pdf") {
         if(move_uploaded_file($_FILES['NamaFile1']['tmp_name'],$direktori1.$file_name1))
         {
          echo "<b>File berhasil diupload  ". basename( $_FILES['NamaFile1']['name']). " is uploaded";        
         }
      }

      if ($file_type2 =="application/pdf") {
         if(move_uploaded_file($_FILES['NamaFile2']['tmp_name'],$direktori2.$file_name2))
         {
          echo "<b>File berhasil diupload  ". basename( $_FILES['NamaFile2']['name']). " is uploaded";        
         }
      }

      if ($file_type3 =="application/pdf") {
         if(move_uploaded_file($_FILES['NamaFile3']['tmp_name'],$direktori3.$file_name3))
         {
          echo "<b>File berhasil diupload  ". basename( $_FILES['NamaFile3']['name']). " is uploaded";        
         }
      }

      if ($file_type4 =="application/pdf") {
         if(move_uploaded_file($_FILES['NamaFile4']['tmp_name'],$direktori4.$file_name4))
         {
          echo "<b>File berhasil diupload  ". basename( $_FILES['NamaFile4']['name']). " is uploaded";        
         }
      }

      if ($file_type5 =="application/pdf") {
         if(move_uploaded_file($_FILES['NamaFile5']['tmp_name'],$direktori5.$file_name5))
         {
          echo "<b>File berhasil diupload  ". basename( $_FILES['NamaFile5']['name']). " is uploaded";        
         }
      }

      if ($file_type6 =="application/pdf") {
         if(move_uploaded_file($_FILES['NamaFile6']['tmp_name'],$direktori6.$file_name6))
         {
          echo "<b>File berhasil diupload  ". basename( $_FILES['NamaFile6']['name']). " is uploaded";        
         }
      }

      if ($file_type7 =="application/pdf") {
         if(move_uploaded_file($_FILES['NamaFile7']['tmp_name'],$direktori7.$file_name7))
         {
          echo "<b>File berhasil diupload  ". basename( $_FILES['NamaFile7']['name']). " is uploaded";        
         }
      }

      if ($file_type8 =="application/pdf") {
         if(move_uploaded_file($_FILES['NamaFile8']['tmp_name'],$direktori8.$file_name8))
         {
          echo "<b>File berhasil diupload  ". basename( $_FILES['NamaFile8']['name']). " is uploaded";        
         }
      }

      if ($file_type9 =="application/pdf") {
         if(move_uploaded_file($_FILES['NamaFile9']['tmp_name'],$direktori9.$file_name9))
         {
          echo "<b>File berhasil diupload  ". basename( $_FILES['NamaFile9']['name']). " is uploaded";        
         }
      }

      if ($file_type10 =="application/pdf") {
         if(move_uploaded_file($_FILES['NamaFile10']['tmp_name'],$direktori10.$file_name10))
         {
          echo "<b>File berhasil diupload  ". basename( $_FILES['NamaFile10']['name']). " is uploaded";        
         }
      }

      if ($file_type11 =="application/pdf") {
         if(move_uploaded_file($_FILES['NamaFile11']['tmp_name'],$direktori11.$file_name11))
         {
          echo "<b>File berhasil diupload  ". basename( $_FILES['NamaFile11']['name']). " is uploaded";        
         }
      }

   


    else {
        echo "Hanya Boleh upload PDF<br>";
        return;
       }
       header("Location: hasil.php");
       mysqli_query($koneksi, "insert into dokumenln(Nidn,Nama,Email,Instansi,Alamat,KTP, SPPPTS,SKPDT,IJ,SKJT,SKKP,SPB,SI,TOF,LOA,RPP,KPB) value ('$nidn','$nama','$email','$instansi','$alamat','$file_name','$file_name1','$file_name2','$file_name3','$file_name4','$file_name5','$file_name6','$file_name7','$file_name8','$file_name9','$file_name10','$file_name11')");
      }
?>