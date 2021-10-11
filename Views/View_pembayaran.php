<body style="background:url('https://1.bp.blogspot.com/-VjXRQlM-FPA/XuDsvuN9GgI/AAAAAAAAF_4/qRQhfndGWFApxPa9DIWcgxn4ghk1rWiSwCLcBGAsYHQ/s1920/cat-air-biru.jpg');">
<?php 

include '../Controllers/Controller_pembayaran.php';
 // Membuat Object dari Class siswa
$pembayaran = new Controller_pembayaran();
$GetPembayaran = $pembayaran->GetData_All();

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
        .card{
            margin: 70px 70px 0px 70px;
        }
    </style>

        <div class="card">
        <div class="card-body">
            <h3 class="text-center">Table Pembayaran</h3>
            <div class="tombol">
                <a class="btn btn-primary btn-lg d-grid gap-2" href="main.php?menu=<?php echo base64_encode(14) ?>" role="button">Add Data</a>
            </div>
        <div class="tabel">
        <table class="table table-bordered border-secondary m-auto" >
            <tr>
                <th>No</th>

                <th>Nama Petugas</th>
                <th>Nisn</th>
                <th>Tanggal Bayar</th>
                <th>Bulan Bayar</th>
                <th>Tahun Bayar</th>
                <th>ID Spp</th>
                <th>Jumlah Bayar</th>
                <th>Tools</th>

            </tr>
            <?php
                // Decision validation variabel
                if(isset($GetPembayaran))
                {
                        $no = 1;
                        foreach($GetPembayaran as $Get){
                        ?>
                        <tr>
                            <td style="width:2%;"><?php echo $no++; ?></td>
                            
                            <td><?php echo $Get['nama_petugas']; ?></td>
                            <td><?php echo $Get['nisn']; ?></td>
                            <td><?php echo $Get['tgl_bayar']; ?></td>
                            <td><?php echo $Get['bulan_dibayar']; ?></td>
                            <td><?php echo $Get['tahun_dibayar']; ?></td>
                            <td><?php echo $Get['id_spp']; ?></td>
                            <td><?php echo $Get['jumlah_bayar']; ?></td>
                            
                            <td>
                                <a class="btn btn-primary" href="main.php?menu=<?php echo base64_encode(15) ?>&id_pembayaran=<?php echo base64_encode($Get['id_pembayaran']) ?>" role="button">View</a>
                                <a class="btn btn-danger" href="../Config/Routes.php?function=delete_pembayaran&id_pembayaran=<?php echo $Get['id_pembayaran'] ?>" onclick="return konfirmasi(<?php echo $Get['id_pembayaran']?>)">Delete</a>
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
            var a=id_pembayaran;
            function konfirmasi()
            {
                return confirm('Apakah Anda yakin Ingin menghapus Data ini ?');
            }
        </script>
        </body>