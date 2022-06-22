<?php
session_start();
 
if (!isset($_SESSION['U_NAMA'])) {
  echo "Anda Harus Login Terlebih Dahulu";
    header("Location: ../auth/login.php");
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>ShopFeb</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="./style/style5.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    
</head>

<body>

    <div class="wrapper">
    
  <nav id="sidebar">
    <div class="sidebar-header">
        <h3>Menu</h3>
    </div>

    <ul class="list-unstyled components">
        <p>ShopFeb</p>
        <li>
            <a href="./index.php"> Home</a>
        </li>
        <!-- data product -->
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Customize Data Product</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="./product/Category_Product.php">Page Category Data Product</a>
                </li>
                <li>
                    <a href="./product/Data_Product.php">Page Data Product</a>
                </li>
            </ul>
        </li>
        <!-- data customer -->
        <li>
            <a href="#pageSubmenuCus" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Customize Data Customer</a>
            <ul class="collapse list-unstyled" id="pageSubmenuCus">
                <li>
                    <a href="./customer/Data_Customer.php">Page Data Customer</a>
                </li>
            </ul>
        </li>
       
        <li>
            <a href="#">About</a>
        </li>
        <li>
            <a href="#">Contact</a>
        </li>
    </ul>
    <button type="button" class="btn btn-danger"><a href="../auth/logout.php" class="btn">Logout</a></button>
</nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                   
                </div>
               
            </nav>
            <?php echo "<h3>Selamat Datang, " . $_SESSION['U_NAMA'] ."!". "</h5>"; ?>
        <div class="d-flex justify-content-center">
        <!-- <form action="" method="POST" class="login-email">
            
             
            <!-- <div class="input-group">
            <a href="./auth/logout.php" class="btn">Logout</a>
            </div> -->
        </form> 
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">Total Customer's</i>
              </div>
              <div class="text-start pt-5">
               
              <?php
                include '../config.php';

                $result=mysqli_query($conn, "SELECT count(CUS_NAMA) as total from customer");
                $data=mysqli_fetch_assoc($result);
                echo "<h4 class='mb-0'>".$data['total']."</h4>";
                // echo "<p>".$data['total']."</p>";

                ?>
              </div>
            </div>
            <hr class="dark horizontal my-0">
          </div>
        </div>
            
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">Total Product's</i>
              </div>
              <div class="text-start pt-5">
               
              <?php
                include '../config.php';

                $result=mysqli_query($conn, "SELECT count(P_Nama) as total from produk");
                $data=mysqli_fetch_assoc($result);
                echo "<h4 class='mb-0'>".$data['total']."</h4>";
                ?>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            
          </div>
        </div>
            
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">Total Category Product's</i>
              </div>
              <div class="text-start pt-5">
               
              <?php
                include '../config.php';

                $result=mysqli_query($conn, "SELECT count(KP_Kode) as total from kategori_produk");
                $data=mysqli_fetch_assoc($result);
                echo "<h4 class='mb-0'>".$data['total']."</h4>";
                ?>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            
          </div>
        </div>

        </div>


            <div class="line"></div>

           
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>