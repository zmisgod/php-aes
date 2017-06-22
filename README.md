# php-aes
> using OpenSSL extention

This Aes Class is using OpenSSL Extention of PHP.
[The official of PHP manual suggest us using OpenSSL to replace Mcrypt extention](http://php.net/manual/en/migration71.deprecated.php "Why am i using OpenSSL extention")
When you are ready to use this class,
You may check your OpenSSL extention is avaliable.

##check
* Check your php extention and find OpenSSL.
`php -m | grep openssl` 
* if you are not find, you'd better build this extention.

## useage
* Copy this class into your code
* Replace the `$this->key`(need 24 strings) and `$this->iv`(need 16 strings)
<pre>
$aes = new Aes();
echo $en = $aes->encrypt('123');
echo $de = $aes->decrypt($en);
</pre>