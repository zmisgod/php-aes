# php-aes
> based on PHP OpenSSL extension

This Aes Class using OpenSSL extension of PHP.
[The official of PHP manual suggest us using OpenSSL to replace Mcrypt extention](http://php.net/manual/en/migration71.deprecated.php "Why am i using OpenSSL extension")

## before using this

* Check your php extension and find OpenSSL.

`php -m | grep openssl` 

## install

`composer require zmisgod/php-aes`

## usage

Here is a example

```
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
```