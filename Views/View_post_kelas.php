<?php
  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');
  
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
<form class="row g-3 m-auto" action="../Config/Routes.php?function=create_kelas" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
  <div class="col-md-12">
    <label class="form-label">Nama Kelas</label>
    <input required type="text" class="form-control" name="nama_kelas">
  </div>
  
  <div class="col-12">
    <label for="inputAddress" class="form-label">Kompetensi Keahlian</label>
    <input required type="text" class="form-control" name="kompetensi_keahlian" onKeyPress="return ValidateAlpha(event);">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="proses">Tambah</button>
  </div>
</form>
</div>
</div>
<!-- Akhir form baru --->
<!-- <form action="../Config/Routes.php?function=create_kelas" method="POST">
    <input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
    <table border="1">
        
            <input required type="hidden" name="id_kelas">
        
        <tr>
            <td>Nama Kelas</td>
            <td><input required type="text" name="nama_kelas"></td>
        </tr>
        <tr>
            <td>Kompetensi Keahlian</td>
            <td><input required type="text" name="kompetensi_keahlian" onKeyPress="return ValidateAlpha(event);"></td>
        </tr>
        <tr>
            <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
        </tr>
    </table
</form> -->

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
