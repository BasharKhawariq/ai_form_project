<?php
session_start();
function esc($v){return htmlspecialchars($v,ENT_QUOTES|ENT_SUBSTITUTE,'UTF-8');}
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Cookie dan Session</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="card p-4 bg-white">
      <h3>Cookie & Session (Contoh)</h3>
      <p><strong>Session username:</strong><?=isset($_SESSION['username'])?esc($_SESSION['username']):'-'?></p>
      <p><strong>Cookie 'user':</strong><?=isset($_COOKIE['user'])?esc($_COOKIE['user']):'-'?></p>
      <hr/>
      <p>Untuk mencoba: jalankan index.php, submit form, lalu lihat halaman ini.</p>
      <a href="index.php" class="btn btn-secondary">Form</a>
    </div>
  </div>
</body>
</html>
