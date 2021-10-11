<body style="background:url('https://1.bp.blogspot.com/-VjXRQlM-FPA/XuDsvuN9GgI/AAAAAAAAF_4/qRQhfndGWFApxPa9DIWcgxn4ghk1rWiSwCLcBGAsYHQ/s1920/cat-air-biru.jpg');">
<?php 

include '../Controllers/Controller_spp.php';
 // Membuat Object dari Class siswa
$spp = new Controller_spp();
$GetSpp = $spp->GetData_All();

// untuk mengecek di object $siswa ada berapa banyak Property
// echo var_dump($GetSiswa);
?>

    <style>
        .tombol{
            margin: 7px 7px 0px 7px;
        }
        .tabel{
            margin: 7px 7px 7px 7px;
            
        }
        .btn{
            padding-right:40px;
            padding-left:40px;
        }
        .card{
            margin: 70px 70px 0px 70px;
        }
    </style>

        <div class="card">
        <div class="card-body">
   
        <center>
        <h3 class="">Table SPP</h3>
        </center>
        <div class="tombol">
            <a class="btn btn-primary btn-lg d-grid gap-2" href="main.php?menu=<?php echo base64_encode(8) ?>" role="button">Add Data</a>
        </div>

        <div class="tabel">
        <table class="table table-bordered border-secondary m-auto" >
            <tr>
                <th>No</th>  
                <th>Tahun</th>
                <th>Nominal</th>
                <th>Tools</th>

            </tr>
            <?php
                // Decision validation variabel
                if(isset($GetSpp))
                {
                        $no = 1;
                        foreach($GetSpp as $Get){
                        ?>
                        <tr>
                            <td style="width:2%;"><?php echo $no++; ?></td>
                            
                            <td><?php echo $Get['tahun']; ?></td>
                            <td><?php echo $Get['nominal']; ?></td>
                            <td style="width:15.6%;">
                                <a class="btn btn-primary" href="main.php?menu=<?php echo base64_encode(9) ?>&id_spp=<?php echo base64_encode($Get['id_spp']) ?>" role="button">View</a>
                                <a class="btn btn-danger" href="../Config/Routes.php?function=delete_spp&id_spp=<?php echo $Get['id_spp'] ?>" onclick="return konfirmasi(<?php echo $Get['id_spp']?>)" role="button">Delete</a>
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
            var a=id_spp;
            function konfirmasi()
            {
                return confirm('Apakah Anda yakin Ingin menghapus Data ini ?');
            }
        </script>
        </body>