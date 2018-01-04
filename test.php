<?php
require_once __DIR__ . '/vendor/autoload.php';

try {
	$aes     = new SimpleAes\Aes();
	$encrypt = $aes->encrypt( 'star zmisgod' );
	echo $encrypt . PHP_EOL;
	//output : xviTncBNkTIg/44a27uGzw==

	echo $aes->decrypt( $encrypt ) . PHP_EOL;
	//output : star zmisgod
} catch ( \Exception $e ) {
	echo $e->getMessage();
}