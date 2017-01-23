<?php 

namespace Penjualan;

class DaftarBarang
{
	public $saldo;
	public $quantity;
	public $harga;
	public $buah = [
		['harga' => 5000, 'buah' => "mangga\n",],
		['harga' => 2500, 'buah' => "jambu\n",],
		['harga' => 3000, 'buah' => "pepaya\n",],

		];

	public function tampilBuah()
	{
		system('clear');

		foreach ($this->buah as $key => $val) {
			echo $key+1 . "." . $val['buah'];
		}
	}

	public function pilihBuah($pilih)
	{
		if ($pilih <=count($this->buah)){
			foreach ($this->buah as $key => $val) {
				if ($pilih == $key+1) {
					$this->harga = $val['harga'];
				}
			}
		}else{
			echo "Anda belum memilih buah istimewa ini :)\n";
		}
	}

	public function getharga()
	{
		echo "Total pembelian buah Anda Rp. " .number_format($this->harga) . "\n";
	}
}

?>