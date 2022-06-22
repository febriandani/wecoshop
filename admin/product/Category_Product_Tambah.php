<?php 


if(isset($_POST['simpan'])) {

$kode = $_POST['kp_kode'];
$nama = $_POST['kp_nama'];

	if(!empty($nama)){
		include '../../config.php';
		$query = "INSERT INTO kategori_produk(KP_Kode, KP_Nama) VALUES('$kode','$nama')";
		$result = mysqli_query($conn, $query);
		if($result){
			echo "<script>
			window.location.href = './Category_Product.php';
			alert('insert Berhasil ');
	  </script>"; 
		} else {
			echo "<script>
                window.location.href = './Category_Product.php';
                alert('Gagal Insert ');
          </script>"; 
		}
	} else {
		echo "<script>
                window.location.href = './Category_Product.php';
                alert('Field tidak boleh kosong ');
          </script>"; 
	}

}
?>