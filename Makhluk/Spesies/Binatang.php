<?php

namespace Makhluk\Spesies;

require __DIR__.'/Tumbuhan.php';

use Makhluk\Spesies\Tumbuhan;

class Binatang
{
	public $nama = '';

	public function setNama($arg)
	{
		return $this->nama = $arg;
	}

	public function makan($arg)
	{
		$tumbuhan = new Tumbuhan();

		return 'Binatang ' . $arg . ' makan ' . $tumbuhan->nama;
	}
}

$binatang = new Binatang();

echo $binatang->makan('Codot');

?>