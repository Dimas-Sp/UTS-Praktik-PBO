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

  include '../Controllers/Controller_siswa.php';
 // Membuat Object dari Class siswa
 $siswa = new Controller_siswa();
 $GetKelas = $siswa->GetData_Kelas();
?>
<div class="card" >
  <div class="card-body">
<form class="row g-3 m-auto" action="../Config/Routes.php?function=create_siswa" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<input type="hidden" name="id_spp">
  <div class="col-md-6">
    <label class="form-label">NISN</label>
    <input required type="number" class="form-control" name="nisn" placeholder="Example : 0033801221">
  </div>
  <div class="col-md-6">
    <label class="form-label">NIS</label>
    <input required type="number" class="form-control" name="nis" >
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Nama</label>
    <input required type="text" class="form-control" name="nama" onKeyPress="return ValidateAlpha(event);">
  </div>
  <div class="col-md-6">
    <label class="form-label" >Alamat</label>
    <input required type="text" class="form-control" name="alamat " Placeholder="Example : Jalan Singgahan no 16">
  </div>
  <div class="col-4">
    <label for="inputAddress2" class="form-label">Kelas</label>
    <select class="form-select" required name="id_kelas">
        <option selected value="">Choose...</option>
            <?php 
            foreach ($GetKelas as $Get) : ?>
                  <option value="<?php echo $Get['id_kelas'] ?>"><?php echo $Get['nama_kelas'] ?></option>
            
            <?php endforeach; ?>
    </select>
    <!-- <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor"> -->
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Nominal SPP</label>
    <select required name="id_spp" class="form-select">
        <option selected value="">Choose...</option>
        <option value="1">300000</option>
        <option value="2">350000</option>
        <option value="3">700000</option>
        <option value="4">150000</option>
    </select>
  </div>
  
  <div class="col-md-6">
    <label for="inputState" class="form-label">No Telepon</label>
    <input required type="number" class="form-control" name="id_telp" Placeholder="08xx-xxxx-xxxx">
    <!-- <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select> -->
  </div>
 
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="proses">Tambah</button>
  </div>
</form>
</div>
</div>

<script>
    function ValidateAlpha(evt) {
        var keyCode = (evt.which) ? evt.which : evt.keyCode
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)

            return false;
        return true;
    }

    function isNumberKey(evt) {
        //var e = evt || window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode
        if (charCode != 46 && charCode > 31 &&
            (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
</script>


