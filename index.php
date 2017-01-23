<?php

require __DIR__ . '/vendor/autoload.php';

use Penjualan\Toko;
use Penjualan\Penjual;
use Penjualan\DaftarBarang;

echo "Selamat datang di GT-fondation store ! \n";
echo str_repeat("_ ",13) ."\n"."\n";

// $toko = new Toko();
// $toko->jumlahBarang(10);
// $afri = new Penjual('afri',$toko);
// sleep(2);
// echo "\n \n";
// $afri->jual('jambu',5);
// $afri->jual('keju', 10);
// $toko->cekJumlahBarang();

# Home
echo "Masukkan saldo anda sebelum belanja : Rp. ";
$saldo = fopen("php://stdin", "r");
$saldo = fgets($saldo);
$login->saldo = trim($saldo);


system('clear');

$buah = new DaftarBarang();

do {
	$buah->tampilBuah();

	echo "Silahkan input no buah yang anda inginkan : ";
	$pilih	=	fopen("php://stdin", "r");
	$pilih	=	fgets($pilih);
	$buah->pilihBuah(trim($pilih));

	if(trim($pilih) <= count($buah->buah)) {
		echo "Quantity = ";
		$quantity = fopen("php://stdin", "r");
		$quantity = fgets($quantity);
		$buah->quantity = trim($quantity);
	}

	echo "Mau tambah cart anda ? (yes/no) : ";
	$tambah = fopen("php://stdin", "r");
	$tambah = fgets($tambah);
} while (trim($tambah) == 'yes');

system('clear');

$buah->getharga();
echo "Sisa saldo anda Rp. " . number_format($login->saldo - $buah->harga) . "\n";

?>
