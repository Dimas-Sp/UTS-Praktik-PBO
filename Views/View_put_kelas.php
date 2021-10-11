<?php 

  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');

include '../Controllers/Controller_kelas.php';
// Membuat Object dari Class siswa
$kelas = new Controller_kelas();
$id_kelas = base64_decode($_GET['id_kelas']);
$GetKelas = $kelas->GetData_Where($id_kelas);
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
foreach($GetKelas as $Get) {
?>

<!-- Awal -->
<div class="card">
  <div class="card-body">
  <form class="row g-3 m-auto" action="../Config/Routes.php?function=put_kelas" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<input type="hidden" name="id_kelas" value="<?php echo $Get['id_kelas']; ?>">
  <div class="col-md-12">
    <label class="form-label">Nama Kelas</label>
    <input type="text" class="form-control" name="nama_kelas" value="<?php echo $Get['nama_kelas']; ?>">
  </div>
  <div class="col-md-12">
    <label class="form-label">Kompetensi Kelahlian</label>
    <input type="text"  class="form-control" name="kompetensi_keahlian" value="<?php echo $Get['kompetensi_keahlian']; ?>">
  </div>

  <div class="col-6">
    <button type="submit" class="btn btn-primary">Update</button>
  </div>
</form>
  </div>
</div>
<!-- Akhir -->
<?php
    }
?>
