<?php

if(isset($_POST['submit'])){
	$name = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$produk = $_POST['produk'];
	$harga = $_POST['harga'];
	$catatan = $_POST['catatan'];
	$no_wa = $_POST['noWA'];	
	header("location:https://api.whatsapp.com/send?phone=$no_wa&text=Hai%20Lembu%20Pedia!%0ANama:%20*$name*%0AAlamat:%20*$alamat*%0A%0ASaya%20Pesan:%0A*$produk*%0AHarga:%0A*Rp.$harga*%0ACatatan:%0A*$catatan*%0A%0ATerimakasih.");
}

?>