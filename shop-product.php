<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>weco</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container-fluid">
              <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarExample01"
                aria-controls="navbarExample01"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarExample01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" aria-current="page" href="#">  <video width="50px" playsinline autoplay muted loop>
          <source src="https://cdn.dribbble.com/users/1299339/screenshots/16518398/media/ce77e40f069b4ca95e52ebb26778ee11.mp4" />
          </video></a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./shop-product.php">Shop</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Latest</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shop with weco</h1>
                    <p class="lead fw-normal text-white-50 mb-0">You can shop whatever you want</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    
                  <?php
                   include './config.php';   
                   $query = "SELECT P_Nama,P_Harga,P_Photo FROM produk limit 6";
                   $result = mysqli_query($conn,$query);
                    
                   while ($row = mysqli_fetch_array($result)){ 
                    echo "<div class='col mb-5'>
                    <div class='card h-100'>
                        <!-- Product image-->
                        <img class='card-img-top' src='./file/".$row['P_Photo']."' alt='...' />
                        <!-- Product details-->
                        <div class='card-body p-4'>
                            <div class='text-center'>
                                <!-- Product name-->
                                <h5 class='fw-bolder'>".$row['P_Nama']."</h5>
                                <!-- Product price-->
                                <br>
                                <div class='price'>";
                                $today = date('d');
                                $harga_awal = $row['P_Harga'];
                                $diskon = 80;
                                $harga_diskon = $harga_awal * $diskon / 100;
                                if($today == 21){
                                  echo "<h6 class='text-muted text-decoration-line-through'>".number_format($harga_awal)."</h6>".number_format($harga_diskon);
                                  
                                  // echo "<h6 class='fw-lighter'>Rp.".number_format($harga_diskon)."</h6>";
                               
                                }else{
                                  echo $today;
                                  echo "<h6 class='fw-lighter'>Rp. ".number_format($row['P_Harga'])."</h6>";
                                }
                                echo "</div>

                                

                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
                            <div class='text-center'><a class='btn btn-outline-dark mt-auto' href='#'>Add to cart</a></div>
                        </div>
                    </div>
                </div>";


                   }
                  
                  ?>
                    
                 

                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <!-- <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." /> -->
                            <video playsinline autoplay muted loop>
                            <source src="https://cdn.dribbble.com/users/542812/screenshots/9711446/media/24fcbda66fb57026373abdc531ee81c3.mp4" />
                            </video>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">For Page Not Found</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">Rp. 20,000</span>
                                    Rp. 18,000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>

                

                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; by.MuhammadFebriAndani 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
