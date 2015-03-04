<?php
include('Crypt/AES.php');

$cipher = new Crypt_AES(CRYPT_AES_MODE_ECB);
// keys are null-padded to the closest valid size
// longer than the longest key and it's truncated
//$cipher->setKeyLength(128);
$cipher->setKey('abcdefghqrstuvwxyz123456ijklmnop');

$size = 10 * 1024;
$plaintext = str_repeat('a', $size);

echo $cipher->decrypt($cipher->encrypt($plaintext));
?>