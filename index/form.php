<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="form.css">
  </head>
  <body>
    <h2 class="judul">Tambah Data Pegawai</h2>
    <form method="post" action="../content/pegawai_insert.php">
      <div class="form-group">
        <label for="foto">FOTO</label>
        <div class="input"><input type="file" id="foto"></div>
      </div>

      <div class="form-group">
        <label for="nama">Nama</label>
        <div class="input"><input type="text" id="nama"></div>
      </div>

      <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="L">Laki - Laki
        <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="P">Perempuan
      </div>

      <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <div class="input"><input type="date" id="tanggal_lahir"></div>
      </div>

      <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <div class="input">
          <select id="jabatan">
            <option value="direktur"> Direktur </option>
            <option value="manajer"> Manajer </option>
            <option value="marketing"> Marketing </option>
            <option value="sekretaris"> Sekretaris </option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <input type="submit" value="Simpan" class="tombol_simpan">
        <input type="reset" value="Batal" class="tombol_reset">
      </div>
    </form>

  </body>
</html>
