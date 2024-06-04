<?php 
    session_start();
    include "koneksi.php"; 
    if(!isset($_SESSION['user'])){
        header('location:login.php');
    }
  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Aplikasi Kasir</title>
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-secondary">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Aplikasi Kasir</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                
            </form>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">

                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Navigasi</div>
                            <a class="nav-link" href="?page=pelanggan">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Pelanggan
                            </a>
                            <a class="nav-link" href="?page=produk">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Produk/Barang
                            </a>
                            <a class="nav-link" href="?page=pembelian">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Pembelian
                            </a>
                              <a class="nav-link" href="?page=detail_penjualan">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Pendataan Barang
                            </a>
                             <?php if(isset($_SESSION["petugas"]) || isset($_SESSION["user"])) : ?><a class="nav-link" href="register.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Regis
                            </a>
                              <?php endif; ?>

                            <a class="nav-link" href="logout.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Logout
                            </a>
                           

                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $_SESSION['user']['nama']; ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    
                  <?php

                  $page = isset($_GET['page']) ? $_GET['page'] : 'home';
                  include $page .'.php';

                    ?>


                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Bhensenz Aplikasi Kasir</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
