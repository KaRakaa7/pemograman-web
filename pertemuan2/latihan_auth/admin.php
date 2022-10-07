<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location:login-page.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Admin Page</title>
</head>
<body>
<!--Header-->
<div class="header">
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color : #e3f2fd;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="img/logotoko.png" alt="Logo Toko" width="50px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Kategori
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Laptop</a></li>
                  <li><a class="dropdown-item" href="#">Keyboard</a></li>
                  <li><a class="dropdown-item" href="#">Mouse</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href='logout.php'>Logout</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary" type="submit">Cari</button>
            </form>
          </div>
        </div>
      </nav>
    </div>
<!--End Header-->

<!--Content-->
<div class="content">
        <div class="row my-3" style="height: 850px">
        <div class="col-lg mx-1 d-flex align-items-center justify-content-center" >
            <div class="card-light" style="width: 18rem;">
                <img src="img/laptop1.jpg" class="card-img-top" alt="Laptop1">
                <div class="card-body">
                  <h5 class="card-title">Axioo Mybook 14H - Grey [Celeron N4020-4GB-SSD 256GB]</h5>
                  <p class="card-text">
                    <h6>Spesifikasi : </h6>
                    <ul>
                      <li>Merek : Axioo</li>
                      <li>Layar : 13,3</li>
                      <li>VGA : - </li>
                      <li>Ram : 4GB</li> </li>
                      <li>Penyimpanan : SSD 256GB</li>
                      <li>Prosesor : Intel Celeron N4020</li>
                      <li>Sistem Operasi : Windows 10</li>
                      <li>Berat Produk : - </li>
                    </ul>
                    <h6 style="color: red;">Rp :<p style="color: red;"><b>3,999,000</b></p></h6>
                  </p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-success">Beli Sekarang</a>
                  <a href="#" class="btn btn-danger">Keranjang</a>
                </div>
            </div>
        </div>

        <div class="col-lg mx-1 d-flex align-items-center justify-content-center">
            <div class="card-light" style="width: 18rem;">
                <img src="img/laptop2.jpg" class="card-img-top" alt="Laptop2">
                <div class="card-body">
                  <h5 class="card-title">Lenovo IdeaPad Slim 1-11IGL05 8RID - Platinum Grey [Celeron N4020-4GB-SSD 256GB]</h5>
                  <p class="card-text">
                    <h6>Spesifikasi : </h6>
                    <ul>
                      <li>Merek : Lenovo</li>
                      <li>Layar : 11,6</li>
                      <li>VGA : - </li>
                      <li>Ram : 4GB</li> </li>
                      <li>Penyimpanan : 256GB</li>
                      <li>Prosesor : Intel Celeron N4020</li>
                      <li>Sistem Operasi : Windows 10</li>
                      <li>Berat Produk : - </li>
                    </ul>
                    <h6 style="color: red;">Rp :<p style="color: red;"><b>3,199,000
</b></p></h6>
                  </p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-success">Beli Sekarang</a>
                  <a href="#" class="btn btn-danger">Keranjang</a>
                </div>
            </div>
        </div>
        <div class="col-lg mx-1 d-flex align-items-center justify-content-center">
            <div class="card-light" style="width: 18rem;">
                <img src="img/laptop3.jpg" class="card-img-top" alt="Laptop3">
                <div class="card-body">
                  <h5 class="card-title">Lenovo IdeaPad D330-10 0MID 2in1 - Grey [Celeron N4020-8GB-SSD 128GB-W10]</h5>
                  <p class="card-text">
                    <h6>Spesifikasi : </h6>
                    <ul>
                      <li>Merek : Lenovo</li>
                      <li>Layar : 10</li>
                      <li>VGA : - </li>
                      <li>Ram : 8GB</li> </li>
                      <li>Penyimpanan : 128GB</li>
                      <li>Prosesor : Intel Celeron N4020</li>
                      <li>Sistem Operasi : Windows 10</li>
                      <li>Berat Produk : - </li>
                    </ul>
                    <h6 style="color: red;">Rp :<p style="color: red;"><b>3,349,000
</b></p></h6>
                  </p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-success">Beli Sekarang</a>
                  <a href="#" class="btn btn-danger">Keranjang</a>
                </div>
            </div>
        </div>
        </div>

<!--End Laptop-->

<!--Laptop-->

<div class="row my-3" style="height: 850px">
        <div class="col-lg mx-1 d-flex align-items-center justify-content-center" >
            <div class="card-light" style="width: 18rem;">
                <img src="img/laptop4.jpg" class="card-img-top" alt="Laptop4">
                <div class="card-body">
                  <h5 class="card-title">Asus BR1100CKA-GJ0614W - Dark Grey [Celeron N4500-4GB-eMMC 128GB]</h5>
                  <p class="card-text">
                    <h6>Spesifikasi : </h6>
                    <ul>
                      <li>Merek : Asus</li>
                      <li>Layar : 11,6</li>
                      <li>VGA : - </li>
                      <li>Ram : 4GB</li> </li>
                      <li>Penyimpanan : 128GB</li>
                      <li>Prosesor : Intel Celeron N4500</li>
                      <li>Sistem Operasi : Windows 10</li>
                      <li>Berat Produk : - </li>
                    </ul>
                    <h6 style="color: red;">Rp :<p style="color: red;"><b>3,399,000
</b></p></h6>
                  </p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-success">Beli Sekarang</a>
                  <a href="#" class="btn btn-danger">Keranjang</a>
                </div>
            </div>
        </div>

        <div class="col-lg mx-1 d-flex align-items-center justify-content-center">
            <div class="card-light" style="width: 18rem;">
                <img src="img/laptop5.jpg" class="card-img-top" alt="Laptop5">
                <div class="card-body">
                  <h5 class="card-title">Avita Essential Lite - Purple Network [Celeron N4020-8GB-SSD 256GB] (Special Edition)</h5>
                  <p class="card-text">
                    <h6>Spesifikasi : </h6>
                    <ul>
                      <li>Merek : Avita</li>
                      <li>Layar : 14</li>
                      <li>VGA : - </li>
                      <li>Ram : 8GB</li> </li>
                      <li>Penyimpanan : 256GB</li>
                      <li>Prosesor : Intel Celeron N4020</li>
                      <li>Sistem Operasi : Windows 11</li>
                      <li>Berat Produk : - </li>
                    </ul>
                    <h6 style="color: red;">Rp :<p style="color: red;"><b>3,399,000</b></p></h6>
                  </p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-success">Beli Sekarang</a>
                  <a href="#" class="btn btn-danger">Keranjang</a>
                </div>
            </div>
        </div>
        <div class="col-lg mx-1 d-flex align-items-center justify-content-center">
            <div class="card-light" style="width: 18rem;">
                <img src="img/laptop6.jpg" class="card-img-top" alt="Laptop6">
                <div class="card-body">
                  <h5 class="card-title">Axioo Slimbook 13 - Grey [Celeron N4020-6GB-SSD 256GB]</h5>
                  <p class="card-text">
                    <h6>Spesifikasi : </h6>
                    <ul>
                      <li>Merek : Axioo</li>
                      <li>Layar : 13,3</li>
                      <li>VGA : - </li>
                      <li>Ram : 6GB</li> </li>
                      <li>Penyimpanan : 256GB</li>
                      <li>Prosesor : Intel Celeron N4020</li>
                      <li>Sistem Operasi : Windows 10</li>
                      <li>Berat Produk : - </li>
                    </ul>
                    <h6 style="color: red;">Rp :<p style="color: red;"><b>3,399,000</b></p></h6>
                  </p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-success">Beli Sekarang</a>
                  <a href="#" class="btn btn-danger">Keranjang</a>
                </div>
            </div>
        </div>
        </div>

<!--End Laptop-->

<!--Laptop-->

<div class="row my-3" style="height: 850px">
        <div class="col-lg mx-1 d-flex align-items-center justify-content-center" >
            <div class="card-light" style="width: 18rem;">
                <img src="img/laptop7.jpg" class="card-img-top" alt="Laptop7">
                <div class="card-body">
                  <h5 class="card-title">Lenovo V14-ADA EJID - Iron Grey [Athlon 3050U-4GB-SSD 256GB]</h5>
                  <p class="card-text">
                    <h6>Spesifikasi : </h6>
                    <ul>
                      <li>Merek : Lenovo</li>
                      <li>Layar : 14</li>
                      <li>VGA : - </li>
                      <li>Ram : 4GB</li> </li>
                      <li>Penyimpanan : 256GB</li>
                      <li>Prosesor : AMD Athlon 3050U</li>
                      <li>Sistem Operasi : Windows 10</li>
                      <li>Berat Produk : - </li>
                    </ul>
                    <h6 style="color: red;">Rp :<p style="color: red;"><b>3,899,000</b></p></h6>
                  </p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-success">Beli Sekarang</a>
                  <a href="#" class="btn btn-danger">Keranjang</a>
                </div>
            </div>
        </div>

        <div class="col-lg mx-1 d-flex align-items-center justify-content-center">
            <div class="card-light" style="width: 18rem;">
                <img src="img/laptop8.jpg" class="card-img-top" alt="Laptop8">
                <div class="card-body">
                  <h5 class="card-title">Asus ExpertBook BR1100FKA-BP0831W Touch 360⁰ - Dark Grey [Celeron N4500-4GB-eMMC 128GB] W11</h5>
                  <p class="card-text">
                    <h6>Spesifikasi : </h6>
                    <ul>
                      <li>Merek : Asus</li>
                      <li>Layar : 11,6</li>
                      <li>VGA : - </li>
                      <li>Ram : 4GB</li> </li>
                      <li>Penyimpanan : 256GB</li>
                      <li>Prosesor : Intel Celeron N4500</li>
                      <li>Sistem Operasi : Windows 11</li>
                      <li>Berat Produk : - </li>
                    </ul>
                    <h6 style="color: red;">Rp :<p style="color: red;"><b>3,999,000</b></p></h6>
                  </p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-success">Beli Sekarang</a>
                  <a href="#" class="btn btn-danger">Keranjang</a>
                </div>
            </div>
        </div>
        <div class="col-lg mx-1 d-flex align-items-center justify-content-center">
            <div class="card-light" style="width: 18rem;">
                <img src="img/laptop9.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Lenovo V14-IGL 3GID - Grey [Pentium Silver N5030-4GB-SSD 256GB]</h5>
                  <p class="card-text">
                    <h6>Spesifikasi : </h6>
                    <ul>
                      <li>Merek : Lenovo</li>
                      <li>Layar : 11,3</li>
                      <li>VGA : - </li>
                      <li>Ram : 4GB</li> </li>
                      <li>Penyimpanan : 256GB</li>
                      <li>Prosesor : Intel Pentium  N5030</li>
                      <li>Sistem Operasi : Windows 10</li>
                      <li>Berat Produk : - </li>
                    </ul>
                    <h6 style="color: red;">Rp :<p style="color: red;"><b>3,999,000
</b></p></h6>
                  </p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-success">Beli Sekarang</a>
                  <a href="#" class="btn btn-danger">Keranjang</a>
                </div>
            </div>
        </div>
        </div>
      </div>      
<!--End Content-->

<!--Footer-->
<div class="footer">
  <footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Jika ada yang mau ditanyakan bisa chat : </span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Kaa Store
            </h6>
            <p>
              Website ini digunakan untuk jual beli aksesoris dan komponen komputer dan laptop.
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">-</a>
            </p>
            <p>
              <a href="#!" class="text-reset">-</a>
            </p>
            <p>
              <a href="#!" class="text-reset">-</a>
            </p>
            <p>
              <a href="#!" class="text-reset">-</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Home</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Blog</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Kategori</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Contact Us</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> Jln Mandiri, 50000, IND</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              kaastore@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 62 000 000 000</p>
            <p><i class="fas fa-print me-3"></i> + 62 000 000 000</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2022 Copyright:
      <a class="text-reset fw-bold" href="#">KaRakaa7</a>
    </div>
    <!-- Copyright -->
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </div>
<!--End Footer-->
</body>
</html>