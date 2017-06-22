# php-aes
> using OpenSSL extention

## useage
* Check your php extention and find openssl
* Copy this class into your code
* Replace the `$this->key`(need 24 strings) and `$this->iv`(need 16 strings)
<pre>
$aes = new Aes();
echo $en = $aes->encode('123');
echo $de = $aes->edcode($en);
</pre>

##ok
