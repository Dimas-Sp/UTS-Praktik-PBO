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
  include '../Controllers/Controller_pembayaran.php';

  $pembayaran = new Controller_pembayaran();
  $GetPembayaran = $pembayaran->GetData_Petugas();
?>

<!-- Awal -->
<div class="card" >
  <div class="card-body">
<form class="row g-3 m-auto" action="../Config/Routes.php?function=create_pembayaran" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<input type="hidden" name="id_pembayaran">
<div class="col-md-6">
    <label for="inputZip" class="form-label">ID Petugas</label>
    <select required name="id_petugas" class="form-select">
        <option selected value="">Choose...</option>
        <option value="1">Nalin</option>
        <option value="2">Nandi</option>
        <option value="3">Ujang</option>
        
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputZip" class="form-label">NISN</label>
    <select required name="nisn" class="form-select">
        <option selected value="">Choose...</option>
        <option value="003381231">33801279</option>
        <option value="33801279">33801279</option>
        <option value="338012791">338012791</option>
        <option value="338012792">338012792</option>
        
    </select>
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Tanggal Bayar</label>
    <input required type="date" class="form-control" name="tgl_bayar" onKeyPress="return ValidateAlpha(event);">
  </div>
  <div class="col-md-6">
    <label class="form-label" >Bulan Bayar</label>
    <input required type="text" class="form-control" name="bulan_dibayar" Placeholder="Example : Sept">
  </div>
  <div class="col-md-6">
    <label class="form-label" >Tahun Bayar</label>
    <input required type="text" class="form-control" name="tahun_dibayar" Placeholder="Example : 2021">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Pilih Nominal SPP</label>
    <select required name="id_spp" class="form-select">
        <option selected value="">Choose...</option>
        <option value="1">300000</option>
        <option value="2">350000</option>
        <option value="3">700000</option>
        <option value="4">150000</option>
    </select>
  </div>
  
  <div class="col-md-4">
    <label for="inputState" class="form-label">Jumlah Bayar</label>
    <input required type="number" class="form-control" name="jumlah_bayar">
  </div>
 
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="proses">Tambah</button>
  </div>
</form>
</div>
</div>
<!-- Akhir -->