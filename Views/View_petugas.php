<body style="background:url('https://1.bp.blogspot.com/-VjXRQlM-FPA/XuDsvuN9GgI/AAAAAAAAF_4/qRQhfndGWFApxPa9DIWcgxn4ghk1rWiSwCLcBGAsYHQ/s1920/cat-air-biru.jpg');">
<?php 

include '../Controllers/Controller_petugas.php';
 // Membuat Object dari Class siswa
$petugas = new Controller_petugas();
$GetPetugas = $petugas->GetData_All();

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
            <h3 class="text-center">Table Petugas</h3>
                <div class="tombol">
                    <a class="btn btn-primary btn-lg d-grid gap-2" href="main.php?menu=<?php echo base64_encode(11) ?>" role="button">Add Data</a>
                </div>

    <div class="tabel">
        <table class="table table-bordered border-secondary m-auto" >
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Nama Petugas</th>
                <th>Level</th>
                <th>Tools</th>
            </tr>
            <?php
                // Decision validation variabel
                if(isset($GetPetugas))
                {
                        $no = 1;
                        foreach($GetPetugas as $Get){
                        ?>
                        <tr>
                            <td style="width:2%;"><?php echo $no++; ?></td>
                            <td><?php echo $Get['username']; ?></td>
                            <td><?php echo $Get['password']; ?></td>
                            <td><?php echo $Get['nama_petugas']; ?></td>
                            <td><?php echo $Get['level']; ?></td>
                            <td style="width:9%;">
                                <a class="btn btn-primary" href="main.php?menu=<?php echo base64_encode(12) ?>&id_petugas=<?php echo base64_encode($Get['id_petugas']) ?>" role="button">View</a>
                                <a class="btn btn-danger" href="../Config/Routes.php?function=delete_petugas&id_petugas=<?php echo $Get['id_petugas'] ?>" onclick="return konfirmasi(<?php echo $Get['id_petugas']?>)">Delete</a>
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
            
            function konfirmasi(id_petugas)
            {
                return confirm('Apakah Anda yakin Ingin menghapus Data ini ?');
            }
        </script>            
        </body>