<?php 

  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');

include '../Controllers/Controller_petugas.php';
// Membuat Object dari Class siswa
$petugas = new Controller_petugas();
$id_petugas = base64_decode($_GET['id_petugas']);
$GetPetugas = $petugas->GetData_Where($id_petugas);
?>

<style>
  .card{
    margin-top:200px;
    margin-left:300px;
    margin-right:300px;
  }
</style>

<?php
    foreach($GetPetugas as $Get) {
?>

<!-- Awal -->
<div class="card">
<div class="card-body">
<form class="row g-3" action="../Config/Routes.php?function=put_petugas" method="POST">
  <input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
  <input type="hidden" name="id_petugas" value="<?php echo $Get['id_petugas']; ?>">
    <div class="col-md-6">
      <label class="form-label">Username</label>
      <input type="text" class="form-control" name="username" value="<?php echo $Get['username']; ?>">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Password</label>
      <input type="text"  class="form-control" name="password" value="<?php echo $Get['password']; ?>">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Nama Petugas</label>
      <input type="text"  class="form-control" name="nama_petugas" value="<?php echo $Get['nama_petugas']; ?>">
    </div>
    <div class="col-md-6">
      <label for="inputState" class="form-label">Level</label>
      <select class="form-select" name="level">

                  <!-- Logic combo Get database -->
                  <option value="<?php echo $Get['level']; ?>">
                  <?php
                      if($Get['level']=="admin")
                      {
                          echo "admin";
                      }
                      else{
                          echo "petugas";
                      }
                  ?>
                  </option>
                  <!-- Logic combo Get database -->
              
                  <option value="admin">Administrator</option>
                  <option value="petugas">Petugas</option>
              </select>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>
</div>
<!-- Akhir -->
<?php
    }
?>