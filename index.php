<?php
$publicKey = "-----BEGIN PUBLIC KEY-----
(ENTER THE PUBLIC KEY HERE AFTER GETTING IT FROM REQUEST) 
-----END PUBLIC KEY-----";

$data = "The quick brown fox jumps over the lazy dog"; //replace this data with the contents of the encrypted key
$ciphertext = "";

if (openssl_public_encrypt($data, $ciphertext, $publicKey))
    $encrypted = base64_encode($ciphertext); // send this back to app in response
    print $encrypted
?>
