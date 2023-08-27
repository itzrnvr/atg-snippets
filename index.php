<?php
$publicKey = "-----BEGIN PUBLIC KEY-----
(ENTER THE PUBLIC KEY HERE AFTER GETTING IT FROM REQUEST)
-----END PUBLIC KEY-----";

$plaintext = "The quick brown fox jumps over the lazy dog";
$ciphertext = "";

if (openssl_public_encrypt($plaintext, $ciphertext, $publicKey))
    $encrypted = base64_encode($ciphertext); // send this back to client
    print $encrypted
?>