<?php

namespace Makhluk\Spesies;

class Tumbuhan
{
	public $nama = 'Jambu';
	public $daun;
	public $biji;

	public function setNama($arg)
	{
		return $this->nama = $arg;
	}
}

// $tumbuhan = new Tumbuhan();

// echo $tumbuhan->setNama('Telo');

?>