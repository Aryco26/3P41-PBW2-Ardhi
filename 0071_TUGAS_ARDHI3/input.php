<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-3">
      <h1>Tambah Data User</h1>
      <hr class="mt-0">
     
      <form method="POST" action="proses.php?aksi=tambah" enctype="multipart/form-data">
  <!-- Kolom lain... -->
  

        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
        <div class="mb-3">
          <label for="nohp" class="form-label">No HP</label>
          <input type="text" class="form-control" id="nohp" name="nohp">
        </div>
        <div class="mb-3">
          <label for="kelas" class="form-label">Kelas</label>
          <input type="text" class="form-control" id="kelas" name="kelas">
        </div>
        <div class="mb-3">
          <label for="nim" class="form-label">NIM</label>
          <input type="text" class="form-control" id="nim" name="nim">
        </div>
        <div class="mb-3">
          <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
          <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="foto" class="form-label">Upload Foto</label>
          <input type="file" class="form-control" id="foto" name="foto">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
