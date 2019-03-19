<?php

namespace Makhluk\Spesies\Jenis;

require __DIR__.'/../Manusia.php';

use Makhluk\Spesies\Manusia;

class Muslim extends Manusia
{
	// public function santri($arg)
	// {
	// 	return $this->setNama($arg);
	// }
}

$muslim = new Muslim();

$muslim->setNama('adib');
echo $muslim->nama;