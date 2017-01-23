<?php

namespace Penjualan;

class Toko
{
	private $barang;

	public function stok($jenis, $jumlah)
	{
		echo "Tercatat pemasok telah menambahkan stok $jenis sebanyak $jumlah ke dalam Toko. \n";
	} 

	public function jual($jumlah)
	{
		$this->stok('jual sebanyak', $jumlah);
		$this->barang -= $jumlah;
	}

	public function jumlahBarang($jumlah)
	{
		$this->stok('jambu', $jumlah);
		$this->stok('mangga', $jumlah);
		$this->stok('jeruk', $jumlah);
		$this->stok('durian', $jumlah);
		$this->stok('jagung', $jumlah);
		$this->stok('salak', $jumlah);
		$this->barang += $jumlah;
	}
	public function cekJumlahBarang()
	{
		return $this->barang;
	}
}