<html>
    <head>
        <title>Aplikasi Pembayaran</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: black;
  color: white;
  text-align: center;
  opacity:0.5;
}
.footer p{
    margin-top:5px;
    margin-bottom:5px;
    font-family: Arial, Helvetica, sans-serif;
}
a img{
    height:30px;

        margin-right:10px;
}
</style>
    </head>
    <body>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img">
        <title>Bootstrap</title>
        <img src="https://tarunakelapa.files.wordpress.com/2016/02/logo-smkn4.png"></svg>SMK Negeri 4 Kota Bogor</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="main.php?menu=<?php echo base64_encode(1) ?>" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Home
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="main.php?menu=<?php echo base64_encode(1) ?>">
                                View Siswa</a></li>
                                <li><a class="dropdown-item" href="main.php?menu=<?php echo base64_encode(4) ?>">
                                View Kelas</a></li>
                                <li><a class="dropdown-item" href="main.php?menu=<?php echo base64_encode(7) ?>">
                                View SSP</a></li>
                                <li><a class="dropdown-item" href="main.php?menu=<?php echo base64_encode(10) ?>">
                                View Petugas</a></li>
                                <li><a class="dropdown-item" href="main.php?menu=<?php echo base64_encode(13) ?>">
                                View Pembayaran</a></li>
                                <li><a class="dropdown-item" href="#"></a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="../Views/main.php">Go to Main menu</a></li>
                            </ul>
                        </li>
                        </ul>
                    </div>
                </div>
            </nav>


            <div class="container-fluid">
                <?php
                if(isset($_GET['menu']))
                {
                    $id = base64_decode($_GET['menu']);
                }
                else
                {
                    $id="";
                }
                    
                    if($id==1)
                    {
                        include('View_siswa.php');
                    }
                    elseif($id==2)
                    {
                        include('View_post_siswa.php');
                    }
                    elseif($id==3)
                    {
                        include('View_put_siswa.php');
                    }
                    elseif($id==4){
                        include('view_kelas.php');
                    }
                    elseif($id==5){
                        include('view_post_kelas.php');
                    }
                    elseif($id==6){
                        include('view_put_kelas.php');
                    }
                    elseif($id==7){
                        include('view_spp.php');
                    }
                    elseif($id==8){
                        include('view_post_spp.php');
                    }
                    elseif($id==9){
                        include('view_put_spp.php');
                    }
                    elseif($id==10){
                        include('view_petugas.php');
                    }
                    elseif($id==11){
                        include('view_post_petugas.php');
                    }
                    elseif($id==12){
                        include('view_put_petugas.php');
                    }
                    elseif($id==13){
                        include('view_pembayaran.php');
                    }
                    elseif($id==14){
                        include('view_post_pembayaran.php');
                    }
                    elseif($id==15){
                        include('view_put_pembayaran.php');
                    }
                    else
                    {
                        include('Welcome.php');
                    }
                ?>
            </div>
            <div class="footer">
            
                <p>Thanks for Coming <br> ©2021</p>
                
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>