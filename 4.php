<?php
function diskon($voucher,$bayar){
	if ($voucher == "DumbWaysAsik") {
		echo "Uang yang harus dibayar : Rp. ".$hasil = $bayar * 0.5;
		echo "<br>";
		echo "Diskon : Rp. ".$hasil;
		echo "<br>";
		echo "Kembalian : Rp. ".($bayar-$hasil);
	}if($voucher == "DumbWaysMantap") {
		echo "Uang yang harus dibayar : Rp. ".$hasil = $bayar * 0.3;
		echo "<br>";
		echo "Diskon : Rp. ".$hasil;
		echo "<br>";
		echo "Kembalian : Rp. ".($bayar-$hasil);
	}
}
echo diskon("DumbWaysAsik",30000);
?>