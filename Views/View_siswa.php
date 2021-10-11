
<body style="background:url('https://1.bp.blogspot.com/-VjXRQlM-FPA/XuDsvuN9GgI/AAAAAAAAF_4/qRQhfndGWFApxPa9DIWcgxn4ghk1rWiSwCLcBGAsYHQ/s1920/cat-air-biru.jpg');">
    


    <?php 

    include '../Controllers/Controller_siswa.php';
    // Membuat Object dari Class siswa
    $siswa = new Controller_siswa();
    $GetSiswa = $siswa->GetData_All();

    // untuk mengecek di object $siswa ada berapa banyak Property
    // echo var_dump($GetSiswa);
    // die;
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
            <h3 class="text-center">Table Siswa</h3>
            <div class="tombol">
                <a class="btn btn-primary btn-lg d-grid gap-2" href="main.php?menu=<?php echo base64_encode(2) ?>" role="button">Add Data</a>
            </div>
        <div class="tabel">
        <table class="table table-bordered border-secondary m-auto" >

        <tr>
            <th>No</th>
            <th>NISN</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Nominal</th>
            <th>Tools</th>
        </tr>


        <?php
            // Decision validation variabel
            if(isset($GetSiswa))
            {
                    $no = 1;
                    foreach($GetSiswa as $Get){
                    ?>
                    <tr>
                        <td style="width:2%;"><?php echo $no++; ?></td>
                        <td><?php echo $Get['nisn']; ?></td>
                        <td><?php echo $Get['nis']; ?></td>
                        <td><?php echo $Get['nama']; ?></td>
                        <td><?php echo $Get['nama_kelas']; ?></td>
                        <td><?php echo $Get['alamat']; ?></td>
                        <td><?php echo $Get['id_telp']; ?></td>
                        <td><?php echo $Get['nominal']; ?></td>
                        <td class="alat" style="width:9%;">
                            <a class="btn btn-primary" href="main.php?menu=<?php echo base64_encode(3) ?>&nisn=<?php echo base64_encode($Get['nisn']) ?>" role="button">View</a>
                            <a class="btn btn-danger" href="../Config/Routes.php?function=delete_siswa&nisn=<?php echo $Get['nisn'] ?>" onclick="return konfirmasi(<?php echo $Get['nisn']?>)" role="button">Delete</a>
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
        

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> -->
    <script>
                
                function konfirmasi(nisn)
                {
                    return confirm('Apakah Anda yakin Ingin menghapus Data ini ?');
                }
            </script>


</body>