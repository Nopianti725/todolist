<?php
include("../config.php");
$hasil=mysqli_query($mysqli,"select * from tbtodo where id='$_GET[id]'");
$row=mysqli_fetch_array($hasil);
?>
<div class="d-felx justify-content-center">
<div class="card  col-md-6">
  <div class="card-header">
    Edit Tugas
  </div>
  <form method="POST" action="aksi_edit_todo.php">
  <div class="card-body">
  <div class="mb-3">
  <label class="form-label text-body">Tugas</label>
  <input type="text" class="form-control"  placeholder="Tugas" name="tugas" value="<?= $row['tugas'] ?>">
  <input type="hidden" name="id" value="<?= $row['id'] ?>">
</div>
<div class="mb-3">
  <label class="form-label text-body">Jangka Waktu</label>
  <input type="date" class="from-control" name="jangkawaktu"  value="<?= $row['jangkawaktu'] ?>">
</div>
<div class="mb-3">
  <label class="form-label text-body">Keterangan</label>
  <select class="from-control" name="keterangan">
    <option>Belum Selesai</option>
    <option>Selesai</option>
  </select>
      </div>
  </div>
  <div class="card-footer text-muted">
    <a href="../index.php?halaman=todo">
  <button type="button" class="btn btn-secondary"><i class="fa fa-arrow left"></i> Kembali</button>
</a>
  <button type="submit" class="btn btn-primary">Simpan</button>
  </div>
  </form>
</div>
</div></div>