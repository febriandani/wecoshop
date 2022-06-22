<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weco</title>
     <!-- Core theme CSS (includes Bootstrap)-->
     <link href="css/styles-2.css" rel="stylesheet" />
    <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
rel="stylesheet"
/>

<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
<!-- Bootstrap icons-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
<!-- Google fonts-->
<link rel="preconnect" href="https://fonts.gstatic.com" />
<link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
</head>
<body>
    <header>
        <!-- Navbar -->
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
                <li class="nav-item">
                <a href="./auth/login.php" target="_blank" class="btn btn-warning btn-md btn-rounded" role="button" aria-pressed="true">Log In</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- Navbar -->
      
        <!-- Jumbotron -->
        <div class="p-5 text-center bg-dark" style="margin-top: 58px;">
          <h1 class="mb-3">Shop with Weco</h1>
          <h4 class="mb-3">You can shop whatever you want</h4>
          <!-- <a class="btn btn-warning btn-rounded" href="./dt-products/detail-product.html" role="button">Call to shoping</a> -->
          <a href="./shop-product.php" class="btn btn-secondary btn-lg btn-rounded" role="button" aria-pressed="true">Call to shoping</a>
        </div>
        <!-- Jumbotron -->
      </header>

      <div class="container">
      <div class="d-flex justify-content-center">
        <div class="row">
        <?php
        include './config.php';   
        $query = "SELECT P_Nama,P_Photo FROM produk limit 6";
        $result = mysqli_query($conn,$query);

        while ($row = mysqli_fetch_array($result)){
          
            echo "<div class='col-md-4 p-4 '>
            <div class='card shadow-5'>
            ";
            echo "<img src='./file/".$row['P_Photo']."'style='width:200px;  display: flex; margin: 0px 100px 0px 100px; height:170px;'>";
              echo "<div class='card-body'>
                  <h5 class='card-title'>".$row['P_Nama']."</h5>
                  <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href='#!' class='btn btn-dark'>More</a>
              </div>
              </div>
          </div>";
          }

        ?>

  <div class="d-flex justify-content-center">
            <div class="col-md-4 p-4">
              <div class="card ">
                <!-- <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" class="card-img-top" alt="Fissure in Sandstone"/> -->
                <div class="card-body">
                    <h5 class="card-title">Other's</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#!" class="btn btn-dark">More Product</a>
                </div>
                </div>
            </div>
            </div>
            <!-- <div class="col-md-6 p-4">
              <div class="card">
                <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" class="card-img-top" alt="Fissure in Sandstone"/>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#!" class="btn btn-primary">Button</a>
                </div>
                </div>
            </div>
            <div class="col-md-6 p-4">
              <div class="card">
                <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" class="card-img-top" alt="Fissure in Sandstone"/>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#!" class="btn btn-primary">Button</a>
                </div>
                </div>
            </div> --> 


          </div>
      </div>
    </div>


    <section id="features">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                    <div class="container-fluid px-5">
                        <div class="row gx-5">
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-phone icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Handphone</h3>
                                    <p class="text-muted mb-0">Ready to shop</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-camera icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Camera</h3>
                                    <p class="text-muted mb-0">All professional cameras are available with us</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-5 mb-md-0">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-gift icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Gift to someone</h3>
                                    <p class="text-muted mb-0">Buy through us, and send to loved ones</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-patch-check icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Safe payment method</h3>
                                    <p class="text-muted mb-0">We guarantee your payment is safe</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-0">
                    <!-- Features section device mockup-->
                    <div class="col-sm-8 col-md-6">
                        <div class="px-5 px-sm-0"><img class="img-fluid rounded-circle" src="https://source.unsplash.com/u8Jn2rzYIps/900x900" alt="..." /></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <!-- Footer-->
  <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; by.MuhammadFebriAndani 2022</p></div>
        </footer>
  <!-- MDB -->
<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"
></script>

 <!-- Bootstrap core JS-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
 <!-- Core theme JS-->
 <script src="js/scripts.js"></script>
 <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
 <!-- * *                               SB Forms JS                               * *-->
 <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
 <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
 <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>