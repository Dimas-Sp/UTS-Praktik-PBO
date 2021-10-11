<style>
    .card{
        margin-top:200px;
        margin-left:200px;
        margin-bottom:50px;
        margin-right:200px;
    }
</style>

<?php
  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');
  include '../Controllers/Controller_petugas.php';
?>

<!-- Awal -->
<div class="card" >
  <div class="card-body">
<form class="row g-3 m-auto" action="../Config/Routes.php?function=create_petugas" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<input type="hidden" name="id_petugas">
  <div class="col-md-6">
    <label class="form-label">Username</label>
    <input required type="text" class="form-control" name="username" placeholder="Example : 0033801221">
  </div>
  <div class="col-md-6">
    <label class="form-label">Password</label>
    <input required type="password" class="form-control" name="password" >
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Nama Petugas</label>
    <input required type="text" class="form-control" name="nama_petugas" onKeyPress="return ValidateAlpha(event);">
  </div>
  <div class="col-4">
    <label for="inputAddress2" class="form-label">Pilih Level</label>
    <select required name="level" class="form-select">
        <option selected value="">Choose...</option>
        <option value="admin">Administrator</option>
        <option value="petugas">Petugas</option>
    </select>
    <!-- <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor"> -->
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="proses">Tambah</button>
  </div>
</form>
</div>
</div>
<!-- Akhir -->

<!-- <form action="../Config/Routes.php?function=create_petugas" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
    <tr>
        <input type="hidden" name="id_petugas">
    </tr>
    <tr>
        <td>Username</td>
        <td><input required type="text" name="username" onkeypress="return event.charCode < 48 || event.charCode  >57"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input required type="number" name="password"></td>
    </tr>
    <tr>
        <td>Nama Petugas</td>
        <td><input required type="text" name="nama_petugas" onkeypress="return event.charCode < 48 || event.charCode  >57"></td>
    </tr>
    <tr>
        <td>Pilih Level</td>
        <td>
            <select required name="level">
                <option value="admin">Administrator</option>
                <option value="Petugas">Petugas</option>
            </select>
        </td>

    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
    </tr>
</table
</form> -->
