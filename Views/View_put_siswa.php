<style>
  .card{
    margin-top:200px;
    margin-left:300px;
    margin-right:300px;
  }
</style>
<?php 

  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');

include '../Controllers/Controller_siswa.php';
// Membuat Object dari Class siswa
$siswa = new Controller_siswa();
$nisn = base64_decode($_GET['nisn']);
$GetSiswa = $siswa->GetData_Where($nisn);

?>
<div class="isi">
<?php
    foreach($GetSiswa as $Get) :
?>
<div class="card">
<div class="card-body">
<form class="row g-3" action="../Config/Routes.php?function=put_siswa" method="POST">
  <input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
  <input type="hidden" name="nisn" value="<?php echo $Get['nisn']; ?>">
    <div class="col-md-6">
      <label class="form-label">Nama</label>
      <input type="text" class="form-control" name="nama" value="<?php echo $Get['nama']; ?>">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">NIS</label>
      <input type="text"  class="form-control" name="nis" value="<?php echo $Get['nis']; ?>">
    </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label">Kelas</label>
      <select class="form-select" name="id_kelas">
          
                  <?php 
                  $GetKelas = $siswa->GetData_Kelas();
                  foreach ($GetKelas as $GetK) : ?>
                  <option value="<?php echo $GetK['id_kelas'] ?>"><?php echo $GetK['nama_kelas']; ?></option>
                  <?php endforeach; ?>
              </select>
    </div>
    <div class="col-12">
      <label for="inputAddress2" class="form-label">Alamat</label>
      <input type="text" class="form-control" name="alamat" value="<?php echo $Get['alamat']; ?>">
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">No Telepon</label>
      <input type="text" class="form-control" name="id_telp" value="<?php echo $Get['id_telp']; ?>">
    </div>
    <div class="col-md-6">
      <label for="inputState" class="form-label">Nominal SPP</label>
      <select class="form-select" name="id_spp">

                  <!-- Logic combo Get database -->
                  <option value="<?php echo $Get['id_spp']; ?>">
                  <?php
                      if($Get['id_spp']=="1"){
                          echo "300000";
                      } elseif ($Get['id_spp']=="2") {
                          echo "350000";
                      } elseif ($Get['id_spp']=="3") {
                          echo "700000";
                      } else {
                          echo "150000";
                      }
                  ?>
                  </option>
                  <!-- Logic combo Get database -->
              
                  <option value="1">300000</option>
                  <option value="2">350000</option>
                  <option value="3">700000</option>
                  <option value="4">150000</option>
              </select>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>
</div>
<?php
    endforeach;
?>
</div>
