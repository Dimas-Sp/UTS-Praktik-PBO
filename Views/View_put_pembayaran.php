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

include '../Controllers/Controller_pembayaran.php';
// Membuat Object dari Class siswa
$pembayaran = new Controller_pembayaran();
$id_pembayaran = base64_decode($_GET['id_pembayaran']);
$GetPembayaran = $pembayaran->GetData_Where($id_pembayaran);
?>



<?php
    foreach($GetPembayaran as $Get) {
?>


<!-- Awal -->
<div class="card">
<div class="card-body">
<form class="row g-3" action="../Config/Routes.php?function=put_pembayaran" method="POST">
  <input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
  <input type="hidden" name="id_pembayaran" value="<?php echo $Get['id_pembayaran']; ?>">
    <div class="col-6">
      <label for="inputAddress" class="form-label">ID Petugas</label>
        <select class="form-select" name="id_petugas">
            <?php 
            $GetPembayaran = $pembayaran->GetData_Petugas();
            foreach ($GetPembayaran as $GetP) : ?>
            <option value="<?php echo $GetP['id_petugas'] ?>"><?php echo $GetP['nama_petugas']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="col-md-6">
      <label for="inputState" class="form-label">NISN</label>
      <select class="form-select" name="nisn">

                  <!-- Logic combo Get database -->
                  <option value="<?php echo $Get['nisn']; ?>">
                  <?php
                      if($Get['nisn']=="003381231"){
                          echo "003381231";
                      } elseif ($Get['nisn']=="33801279") {
                          echo "33801279";
                      } elseif ($Get['nisn']=="338012791") {
                          echo "338012791";
                      } else {
                          echo "338012792";
                      }
                  ?>
                  </option>
                  <!-- Logic combo Get database -->
              
                  <option value="003381231">003381231</option>
                  <option value="33801279">33801279</option>
                  <option value="338012791">338012791</option>
                  <option value="338012792">338012792</option>
              </select>
    </div>
    <div class="col-6">
      <label for="inputAddress2" class="form-label">Tanggal Bayar</label>
      <input type="date" class="form-control" name="tgl_bayar" value="<?php echo $Get['tgl_bayar']; ?>">
    </div>
    <div class="col-md-3">
      <label for="inputCity" class="form-label">Bulan Bayar</label>
      <input type="text" class="form-control" name="bulan_dibayar" value="<?php echo $Get['bulan_dibayar']; ?>">
    </div>
    <div class="col-md-3">
      <label for="inputCity" class="form-label">Tahun Bayar</label>
      <input type="text" class="form-control" name="tahun_dibayar" value="<?php echo $Get['tahun_dibayar']; ?>">
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
    <div class="col-md-6">
      <label for="inputCity" class="form-label">Jumalah Bayar</label>
      <input type="text" class="form-control" name="jumlah_bayar" value="<?php echo $Get['jumlah_bayar']; ?>">
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