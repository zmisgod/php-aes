<?php

class Aes
{
    protected $iv;
    protected $key;

    public function __construct()
    {
        $this->key = base64_encode('1234567890qwertyuiopasdf');
        $this->iv = base64_encode('qwertyuiopasdfgh');
    }

    /**
     * 加密
     *
     * @param $str
     * @return string
     */
    public function encode($str)
    {
        $encrypted = openssl_encrypt($str, 'aes-256-cbc', base64_decode($this->key), OPENSSL_RAW_DATA, base64_decode($this->iv));
        return base64_encode($encrypted);
    }

    /**
     * 解密
     *
     * @param $str
     * @return string
     */
    public function decode($str)
    {
        $baseDecode = base64_decode($str);
        return openssl_decrypt($baseDecode, 'aes-256-cbc', base64_decode($this->key), OPENSSL_RAW_DATA, base64_decode($this->iv));
    }
