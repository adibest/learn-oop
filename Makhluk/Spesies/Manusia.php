<?php

namespace Makhluk\Spesies;

class Manusia
{
	//di awal
	public function __construct()
	{
		echo "ini construct<br>";
	}

	//di akhir
	public function __destruct()
	{
		echo "<br>ini destruct";
	}

	public $nama = 'Wagiman';
	protected $suku = 'Jawa';//hanya bisa dipanggil di kelasnya sendiri dan anaknya, tapi gak bisa dipanggil di luar
	private $bangsa = 'Inlander';//hanya bisa dipanggil di kelasnya sendiri, tapi gak bisa dipanggil di luar dan anaknya

	public function setNama($arg)
	{
		return $this->nama = $arg;
	}
}

$manusia = new Manusia();
echo $manusia->setNama('Wawa');
