<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Registrasi - Contoh Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body class="bg-light">
  <div class="container py-5">
    <h2 class="mb-4">Form Registrasi (Contoh)</h2>
    <form action="process.php" method="post" class="card p-4 bg-white">
      <div class="mb-3">
        <label class="form-label">Nama Depan</label>
        <input type="text" name="namaDpn" class="form-control" required />
      </div>
      <div class="mb-3">
        <label class="form-label">Nama Belakang</label>
        <input type="text" name="namaBlk" class="form-control" required />
      </div>
      <div class="mb-3">
        <label class="form-label">E-mail</label>
        <input type="email" name="email" class="form-control" required />
      </div>

      <label class="form-label">Jenis Member</label>
      <div class="mb-3 form-check">
        <input class="form-check-input" type="checkbox" name="cPengHobby" value="PengHobby" checked>
        <label class="form-check-label">PengHobby</label>
      </div>
      <div class="mb-3 form-check">
        <input class="form-check-input" type="checkbox" name="cPetani" value="Petani">
        <label class="form-check-label">Petani</label>
      </div>
      <div class="mb-3 form-check">
        <input class="form-check-input" type="checkbox" name="cPedagang" value="Pedagang">
        <label class="form-check-label">Pedagang</label>
      </div>

      <div class="mb-3">
        <label class="form-label">Pendidikan</label>
        <select name="cbPendidikan" class="form-select">
          <option value="TdkLulusSD">TdkLulusSD</option>
          <option value="SD">SD</option>
          <option value="SMP">SMP</option>
          <option value="SMA">SMA</option>
          <option value="Sarjana">Sarjana</option>
        </select>
      </div>

      <label class="form-label">Gender</label>
      <div class="mb-3">
        <input type="radio" name="rGender" value="Pria" checked> Pria
        <input type="radio" name="rGender" value="Wanita" class="ms-3"> Wanita
      </div>

      <div class="mb-3">
        <label class="form-label">Masukan terhadap kami</label>
        <textarea name="saran" class="form-control" rows="4"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Kirim</button>
    </form>

    <div class="mt-4">
      <a href="show_cookie.php" class="btn btn-outline-secondary">Tampilkan Cookie / Session</a>
    </div>
  </div>
</body>
</html>
