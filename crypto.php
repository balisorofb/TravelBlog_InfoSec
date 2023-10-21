<?php 

function encryptData($data){
	$key = "NationalUniversity@1900";
	$iv = "1234567890123456";
	$encryption = openssl_encrypt($data, "AES-256-CBC", $key,0,$iv);
	return $encryption;
}

function decryptData($data) {
	$key = "NationalUniversity@1900";
	$iv = "1234567890123456";
	$decryption = openssl_decrypt($data, "AES-256-CBC", $key,0,$iv);
	return $decryption;
}

?>