<?php 
include '../../config.php';

    $kode = $_POST['p_kode'];
    $nama = $_POST['p_nama'];
    $satuan = $_POST['p_satuan'];
    $harga = $_POST['p_harga'];
    $kat = $_POST['p_kp'];
    
    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
    if(!in_array($ext,$ekstensi) ) {
        echo "<script>
        window.location.href = './Data_Product.php';
        alert('Gagal EKstensi ');
  </script>"; 
    }else{
        if($ukuran < 4444070){		
            $xx = $rand.'_'.$filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], '../../file/'.$rand.'_'.$filename);
            mysqli_query($conn, "INSERT INTO produk VALUES('$kode','$nama','$satuan', '$harga', '$kat', '$xx')");
            echo "<script>
                window.location.href = './Data_Product.php';
                alert('Insert Berhasil ');
          </script>"; 
        }else{
            header("location:Data_Product.php?alert=gagal_ukuran");
        }
    }