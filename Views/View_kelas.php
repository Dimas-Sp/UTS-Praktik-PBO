
<body style="background:url('https://1.bp.blogspot.com/-VjXRQlM-FPA/XuDsvuN9GgI/AAAAAAAAF_4/qRQhfndGWFApxPa9DIWcgxn4ghk1rWiSwCLcBGAsYHQ/s1920/cat-air-biru.jpg');">
<?php 

include '../Controllers/Controller_kelas.php';
 // Membuat Object dari Class siswa
$kelas = new Controller_kelas();
$GetKelas = $kelas->GetData_All();

// untuk mengecek di object $siswa ada berapa banyak Property
// echo var_dump($GetSiswa);
?>
<style>
    .tombol{
        margin: 7px 7px 0px 7px;
    }
    .tabel{
        margin: 7px 7px 0px 7px;
    }
    .card{
        margin: 70px 70px 0px 70px;
    }
</style>    
    <div class="card">
    <div class="card-body">
        <h3 class="text-center">Table Kelas</h3>
            <div class="tombol">
                <a class="btn btn-primary btn-lg d-grid gap-2" href="main.php?menu=<?php echo base64_encode(5) ?>" role="button">Add Data</a>
            </div>

    <div class="tabel">
        <table class="table table-bordered border-secondary m-auto" >
            <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Kompetensi Keahlian</th>
                <th>Tools</th>

            </tr>
            <?php
                // Decision validation variabel
                if(isset($GetKelas))
                {
                        $no = 1;
                        foreach($GetKelas as $Get){
                        ?>
                        <tr>
                            <td style="width:2%;"><?php echo $no++; ?></td>
                            <td><?php echo $Get['nama_kelas']; ?></td>
                            <td><?php echo $Get['kompetensi_keahlian']; ?></td>
                            <td style="width:9%;">
                                <a class="btn btn-primary" href="main.php?menu=<?php echo base64_encode(6) ?>&id_kelas=<?php echo base64_encode($Get['id_kelas']) ?>" role="button">View</a>
                                <a class="btn btn-danger" href="../Config/Routes.php?function=delete_kelas&id_kelas=<?php echo $Get['id_kelas'] ?>" onclick="return konfirmasi(<?php echo $Get['id_kelas']?>)">Delete</a>
                            </td>
                        </tr>
                        <?php 
                        }
                }
            ?>
        </table>
    </div>
    </div>
    </div>
    <script>
        var a=id_kelas;
        function konfirmasi()
        {
                return confirm('Apakah Anda yakin Ingin menghapus Data ini ?');
        }
    </script>
</body>