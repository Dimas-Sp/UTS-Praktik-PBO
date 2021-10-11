<?php
  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');
  include '../Controllers/Controller_spp.php';
?>

    <style>
      .card{
        margin-top:200px;
        margin-left:300px;
        margin-bottom:50px;
        margin-right:300px;
      }
    </style>
<!-- form baru --->
<div class="card">
  <div class="card-body">
<form class="row g-3 m-auto" action="../Config/Routes.php?function=create_spp" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
  <div class="col-md-12">
    <label class="form-label">Tahun</label>
    <input required type="number" class="form-control" name="tahun" placeholder="Example : 0033801221">
  </div>
  
  <div class="col-12">
    <label for="inputAddress" class="form-label">Nominal</label>
    <input required type="text" class="form-control" name="nominal" onKeyPress="return ValidateAlpha(event);">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="proses">Tambah</button>
  </div>
</form>
</div>
</div>
<!-- Akhir form baru --->