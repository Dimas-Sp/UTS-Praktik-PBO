<?php 

  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');

include '../Controllers/Controller_spp.php';
// Membuat Object dari Class siswa
$spp = new Controller_spp();
$id_spp = base64_decode($_GET['id_spp']);
$GetSpp = $spp->GetData_Where($id_spp);
?>

<style>
  .card{
    margin-top:200px;
        margin-left:300px;
        margin-bottom:50px;
        margin-right:300px;

  }
</style>


<?php
    foreach($GetSpp as $Get) {
?>



<div class="card">
  <div class="card-body">
  <form class="row g-3 m-auto" action="../Config/Routes.php?function=put_spp" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<input type="hidden" name="id_spp" value="<?php echo $Get['id_spp']; ?>">
  <div class="col-md-12">
    <label class="form-label">tahun</label>
    <input type="text" class="form-control" name="tahun" value="<?php echo $Get['tahun']; ?>">
  </div>
  <div class="col-md-12">
    <label class="form-label">Nominal</label>
    <input type="text"  class="form-control" name="nominal" value="<?php echo $Get['nominal']; ?>">
  </div>

  <div class="col-6">
    <button type="submit" class="btn btn-primary">Update</button>
  </div>
</form>
  </div>
</div>
<?php
    }
?>