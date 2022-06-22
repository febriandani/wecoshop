<?php 
        include '../../config.php';

		if(isset($_POST['update'])){
            $id2 =  $_POST['p_kode'];
            $nama =  $_POST['nama'];
            $satuan =  $_POST['satuan'];
            $harga =  $_POST['harga'];
            $photo =  $_POST['photo'];

      		//query update data ke dalam database berdasarkan ID
			$query = "UPDATE produk SET P_Nama = '$nama', P_Satuan = '$satuan', P_Harga = '$harga', P_Photo = '$photo' WHERE P_Kode in('$id2')";
			$result = mysqli_query($conn, $query);
			// die($query);

          //kondisi pengecekan apakah data berhasil diupdate atau tidak
			if($result) {
				//redirect ke halaman index.php 
				header("location: Data_Product.php");
			} else {
				//pesan error gagal update data
				echo "Data Gagal Diupate!";
			}
		}
        ?>