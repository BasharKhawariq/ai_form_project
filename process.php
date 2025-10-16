<?php
session_start();
function esc($v){return htmlspecialchars(trim($v), ENT_QUOTES|ENT_SUBSTITUTE,'UTF-8');}
$errors=[];
if($_SERVER['REQUEST_METHOD']!=='POST'){$errors[]='Form harus dikirim dengan metode POST.';}
$namaDpn=isset($_POST['namaDpn'])?esc($_POST['namaDpn']):'';
$namaBlk=isset($_POST['namaBlk'])?esc($_POST['namaBlk']):'';
$email=isset($_POST['email'])?esc($_POST['email']):'';
$jenis=[];
if(isset($_POST['cPengHobby']))$jenis[]=esc($_POST['cPengHobby']);
if(isset($_POST['cPetani']))$jenis[]=esc($_POST['cPetani']);
if(isset($_POST['cPedagang']))$jenis[]=esc($_POST['cPedagang']);
$pendidikan=isset($_POST['cbPendidikan'])?esc($_POST['cbPendidikan']):'';
$gender=isset($_POST['rGender'])?esc($_POST['rGender']):'';
$saran=isset($_POST['saran'])?esc($_POST['saran']):'';
$_SESSION['username']=$namaDpn.' '.$namaBlk;
setcookie('user',$_SESSION['username'],time()+86400,'/');
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Hasil Registrasi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="card p-4 bg-white">
      <h3>Hasil Pengisian Form</h3>
      <?php if(!empty($errors)):?><div class="alert alert-danger"><?php foreach($errors as $e)echo '<div>'.esc($e).'</div>';?></div><?php endif;?>
      <p><strong>Nama:</strong><?=esc($namaDpn)?> <?=esc($namaBlk)?></p>
      <p><strong>Email:</strong><?=esc($email)?></p>
      <p><strong>Jenis:</strong><?=esc(implode(', ',$jenis))?></p>
      <p><strong>Pendidikan:</strong><?=esc($pendidikan)?></p>
      <p><strong>Gender:</strong><?=esc($gender)?></p>
      <p><strong>Saran:</strong><br/><?=nl2br($saran)?></p>
      <hr/>
      <p>Cookie 'user' telah diset. Session username: <?=isset($_SESSION['username'])?esc($_SESSION['username']):'-'?></p>
      <a href="index.php" class="btn btn-secondary">Kembali</a>
      <a href="show_cookie.php" class="btn btn-outline-primary">Lihat Cookie/Session</a>
    </div>
  </div>
</body>
</html>
