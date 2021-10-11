<?php

//Memanggil fungsi dari Csrf
include('Csrf.php');


include '../Controllers/Controller_siswa.php';
include '../Controllers/Controller_petugas.php';
include '../Controllers/Controller_spp.php';
include '../Controllers/Controller_kelas.php';
include '../Controllers/Controller_pembayaran.php';


// Membuat Variabel dari Get URL
$function = $_GET['function'];



//Routes SISWA


// Decision variabel create
if($function == "create_siswa"){
    // Membuat Object dari Class siswa
    $db = new Controller_siswa();

    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->POSTData(
            $_POST['nisn'],
            $_POST['nis'],
            $_POST['nama'],
            $_POST['id_kelas'],
            $_POST['alamat'],
            $_POST['id_telp'],
            $_POST['id_spp']
        );
    }
    header("location:../Views/main.php?menu=".base64_encode(1));

}

// Decision variabel put
elseif($function == "put_siswa"){
    // Membuat Object dari Class siswa
    $db = new Controller_siswa();
    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->PUTData(
            $_POST['nisn'],
            $_POST['nis'],
            $_POST['nama'],
            $_POST['id_kelas'],
            $_POST['alamat'],
            $_POST['id_telp'],
            $_POST['id_spp']
        );   
    }
    header("location:../Views/main.php?menu=".base64_encode(1));
}
// Decision variabel delete
elseif($function == "delete_siswa"){
    // Membuat Object dari Class siswa
    $db = new Controller_siswa();
    $nisn = base64_decode ($GET_['nisn']);
    $db->DELETEData($_GET['nisn']);
    header("location:../Views/main.php?menu=".base64_encode(1));
}



/* ROUTES PETUGAS */


// Decision variabel create
if($function == "create_petugas"){
    // Membuat Object dari Class siswa
    $db = new Controller_petugas();
    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->POSTData(
            $_POST['id_petugas'],
            $_POST['username'],
            $_POST['password'],
            $_POST['nama_petugas'],
            $_POST['level']
        );
    }
    header("location:../Views/main.php?menu=".base64_encode(10));
}

// Decision variabel put
elseif($function == "put_petugas"){
    // Membuat Object dari Class siswa
    $db = new Controller_petugas();
    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->PUTData(
            $_POST['id_petugas'],
            $_POST['username'],
            $_POST['password'],
            $_POST['nama_petugas'],
            $_POST['level']
        );   
    }
    header("location:../Views/main.php?menu=".base64_encode(10));
}
// Decision variabel delete
elseif($function == "delete_petugas"){
    // Membuat Object dari Class siswa
    $db = new Controller_petugas();
    $id_petugas = base64_decode($_GET['id_petugas']);
    $db->DELETEData($_GET['id_petugas']);
    header("location:../Views/main.php?menu=".base64_encode(10));
}



/* ROUTES SPP */


// Decision variabel create
if($function == "create_spp"){
    // Membuat Object dari Class siswa
    $db = new Controller_spp();
    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->POSTData(
            $_POST['id_spp'],
            $_POST['tahun'],
            $_POST['nominal']
        );
    }
    header("location:../Views/main.php?menu=".base64_encode(7));

}

// Decision variabel put
elseif($function == "put_spp"){
    // Membuat Object dari Class siswa
    $db = new Controller_spp();
    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->PUTData(
            $_POST['id_spp'],
            $_POST['tahun'],
            $_POST['nominal']
        );   
    }
    header("location:../Views/main.php?menu=".base64_encode(7));
}
// Decision variabel delete
elseif($function == "delete_spp"){
    // Membuat Object dari Class siswa
    $db = new Controller_spp();
    $id_spp = base64_decode($_GET['id_spp']);
    $db->DELETEData($_GET['id_spp']);
    header("location:../Views/main.php?menu=".base64_encode(7));
}



/* ROUTES Kelas */


// Decision variabel create
if($function == "create_kelas"){
    // Membuat Object dari Class siswa
    $db = new Controller_kelas();
    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->POSTData(
            $_POST['id_kelas'],
            $_POST['nama_kelas'],
            $_POST['kompetensi_keahlian']
        );
    }
    header("location:../Views/main.php?menu=".base64_encode(4));

}

// Decision variabel put
elseif($function == "put_kelas"){
    // Membuat Object dari Class siswa
    $db = new Controller_kelas();
    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->PUTData(
            $_POST['id_kelas'],
            $_POST['nama_kelas'],
            $_POST['kompetensi_keahlian']
        );   
    }
    header("location:../Views/main.php?menu=".base64_encode(4));
}
// Decision variabel delete
elseif($function == "delete_kelas"){
    // Membuat Object dari Class siswa
    $db = new Controller_kelas();
    $id_kelas = base64_decode($_GET['id_kelas']);
    $db->DELETEData($_GET['id_kelas']);
    header("location:../Views/main.php?menu=".base64_encode(4));
}



/* ROUTES Pembayaran */


// Decision variabel create
if($function == "create_pembayaran"){
    // Membuat Object dari Class siswa
    $db = new Controller_pembayaran();
    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->POSTData(
            $_POST['id_pembayaran'],
            $_POST['id_petugas'],
            $_POST['nisn'],
            $_POST['tgl_bayar'],
            $_POST['bulan_dibayar'],
            $_POST['tahun_dibayar'],
            $_POST['id_spp'],
            $_POST['jumlah_bayar']
        );
    }
    header("location:../Views/main.php?menu=".base64_encode(13));

}

// Decision variabel put
elseif($function == "put_pembayaran"){
    // Membuat Object dari Class siswa
    $db = new Controller_pembayaran();
    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->PUTData(
            $_POST['id_pembayaran'],
            $_POST['id_petugas'],
            $_POST['nisn'],
            $_POST['tgl_bayar'],
            $_POST['bulan_dibayar'],
            $_POST['tahun_dibayar'],
            $_POST['id_spp'],
            $_POST['jumlah_bayar']
        );   
    }
    header("location:../Views/main.php?menu=".base64_encode(13));
}
// Decision variabel delete
elseif($function == "delete_pembayaran"){
    // Membuat Object dari Class siswa
    $db = new Controller_pembayaran();
    $id_pembayaran = base64_decode($_GET['id_pembayaran']);
    $db->DELETEData($_GET['id_pembayaran']);
    header("location:../Views/main.php?menu=".base64_encode(13));
}

?>