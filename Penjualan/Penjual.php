<?php

namespace Penjualan;

use Penjualan\Penjual;

class Penjual
{
	private $nama;
	private $toko;

	public function __construct($nama = "seseorang",Toko $toko)
	{
		$this->nama = $nama;
		$this->toko = $toko;
	}

	public function jual($nama = "Barang", $jumlah = 0)
	{
		$this->toko->cekJumlahBarang($jumlah);
		echo "Barang anda melakukan penjualan $nama sebanyak $jumlah buah \n";
	}
	public function cekJumlahBarang()
	{
		echo $this->cekJumlahBarang();
	}
}