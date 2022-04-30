<?php
session_start();
if($_SESSION['level']==""){
	header("location:../index.php?alert=belum_login");
}
require_once '../helper/connection.php';

$Id = $_GET['Id'];
$sql = mysqli_query($connection, "SELECT * FROM dokumendn WHERE id='$Id'");

?>
<!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<link rel="stylesheet" href="asset/base.min.css"/>
<link rel="stylesheet" href="asset/fancy.min.css"/>
<link rel="stylesheet" href="asset/main.css"/>
<script src="asset/compatibility.min.js"></script>
<script src="asset/theViewer.min.js"></script>
<script>
try{
theViewer.defaultViewer = new theViewer.Viewer({});
}catch(e){}
</script>
<title></title>
</head>
<body>
<div id="sidebar">
<div id="outline">
</div>
</div>
<div id="page-container">
    
<div id="pf1" class="pf w0 h0" data-page-no="1"><div class="pc pc1 w0 h0"><img class="bi x0 y0 w0 h0" alt="" src="asset/bg1.png"/>
    <div class="t m0 x1 h1 y1 ff1 fs0 fc0 sc0 ls0 ws0">   <span class="ff2">  KEMENTERIAN PENDIDIKAN, KEBUDAYAAN,</span></div>
    <div class="t m0 x2 h2 y2 ff2 fs0 fc0 sc0 ls0 ws0">RISET, DAN TEKNOLOGI</div>
    <div class="t m0 x3 h3 y3 ff1 fs1 fc0 sc0 ls0 ws0">     <span class="ff2"> LEMBAGA LAYANAN PENDIDIKAN TINGGI</span></div>
    <div class="t m0 x4 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0"> WILAYAH II</div>
    <div class="t m0 x5 h5 y5 ff1 fs2 fc0 sc0 ls0 ws0">     Jalan Srijaya No. 883 Palembang 30153</div>
    <div class="t m0 x6 h5 y6 ff1 fs2 fc0 sc0 ls0 ws0">      Telepon (0711) 410722-410423 Faksimile (0711) 419421</div>
    <div class="t m0 x7 h5 y7 ff1 fs2 fc0 sc0 ls0 ws0">        Laman : http://lldikti2.id, Surel : persuratan.lldikti2@kemdikbud.go.id</div>
    <div class="t m0 x8 h6 y8 ff3 fs2 fc0 sc0 ls0 ws0">SURAT IZIN</div>
    <div class="t m0 x9 h6 y9 ff3 fs2 fc0 sc0 ls0 ws0">Nomor :      /LL2/PT/2021</div>
    <div class="t m0 xa h6 ya ff3 fs2 fc0 sc0 ls0 ws0">Yang bertanda tangan di bawah ini:</div>
    <div class="t m0 xa h6 yb ff3 fs2 fc0 sc0 ls0 ws0">Nama<span class="_ _0"> </span>:  Prof. Yuliansyah, S.E., M.S.A., Ph.D.Akt., CA</div>
    <div class="t m0 xa h6 yc ff3 fs2 fc0 sc0 ls0 ws0">NIP*)<span class="_ _1"> </span>:  197307231999031002</div>
    <div class="t m0 xa h6 yd ff3 fs2 fc0 sc0 ls0 ws0">Pangkat/Gol<span class="_ _2"> </span>:  Pembina/ IV.a</div>
    <div class="t m0 xa h6 ye ff3 fs2 fc0 sc0 ls0 ws0">Jabatan<span class="_ _3"> </span>:  Kepala</div>
    <div class="t m0 xa h6 yf ff3 fs2 fc0 sc0 ls0 ws0">Instansi                         :  Lembaga Layanan Pendidikan Tinggi Wilayah II</div>
    <div class="t m0 xa h6 y10 ff3 fs2 fc0 sc0 ls0 ws0">Alamat Instansi<span class="_ _4"> </span>:  Jalan Srijaya No. 883 Palembang</div>
    <div class="t m0 xa h6 y11 ff3 fs2 fc0 sc0 ls0 ws0">No Telp/Handphone<span class="_ _5"> </span>:  082179769602</div>
    <div class="t m0 xa h6 y12 ff3 fs2 fc0 sc0 ls0 ws0">E-mail<span class="_ _6"> </span>:  Yuliansyah@feb.unila.ac.id</div>
    <div class="t m0 xa h6 y13 ff3 fs2 fc0 sc0 ls0 ws0">Memberikan izin untuk mendaftar Beasiswa Pendidikan Dosen Perguruan Tinggi </div>
    <div class="t m0 xa h6 y14 ff3 fs2 fc0 sc0 ls0 ws0">Akademik kepada:</div>
    <?php 
		$no = 1;
  
		while($data = mysqli_fetch_array($sql)){
		?>
    <div class="t m0 xa h6 y15 ff3 fs2 fc0 sc0 ls0 ws0">Nama<span class="_ _0"> </span>: <?php echo $data['Nama']; ?></div>
    <div class="t m0 xa h6 y16 ff3 fs2 fc0 sc0 ls0 ws0">Instansi<span class="_ _7"> </span>: <?php echo $data['Instansi']; ?> </div>
    <div class="t m0 xa h6 y17 ff3 fs2 fc0 sc0 ls0 ws0">Alamat<span class="_ _8"> </span>: <span class="fc1"><?php echo $data['Alamat']; ?></span></div>
    <?php 
		}
		?>
    <div class="t m0 xa h6 y18 ff3 fs2 fc0 sc0 ls0 ws0">Deskripsi alasan pemberian izin:</div>
    <div class="t m0 xa h6 y19 ff3 fs2 fc0 sc0 ls0 ws0">Demikian <span class="_ _9"> </span>surat <span class="_ _9"> </span>izin <span class="_ _9"> </span>ini <span class="_ _9"> </span>dibuat <span class="_ _9"> </span>dengan <span class="_ _9"> </span>sebenar-benarnya <span class="_ _9"> </span>untuk <span class="_ _9"> </span>dapat </div>
    <div class="t m0 xa h6 y1a ff3 fs2 fc0 sc0 ls0 ws0">digunakan sebagaimana mestinya.</div>
    <div class="t m0 xb h6 y1b ff3 fs2 fc0 sc0 ls0 ws0">Palembang,     Juli  2021 </div>
    <div class="t m0 xb h6 y1c ff3 fs2 fc0 sc0 ls0 ws0">          </div>
    <div class="t m0 xa h6 y1d ff3 fs2 fc0 sc0 ls0 ws0">                                              (Prof. Yuliansyah, S.E., M.S.A., Ph.D.Akt., CA)</div><a class="l" href="http://lldikti2.ristekdikti.go.id/">
        <div class="d m1" style="border-style:none;position:absolute;left:194.518997px;bottom:853.713013px;width:75.673996px;height:13.799011px;background-color:rgba(255,255,255,0.000001);"></div></a></div>
        <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
</div>
<div class="loading-indicator">
<script>
		window.print();
	</script>
 
</div>
</body>
</html>
