<?php
system('clear');
echo "Nexmo Balance Checker - IdiotPeople69\n => Enter Your API Key : ";
$key = trim(fgets(STDIN));
echo " => Enter Your API Secret : ";
$secret = trim(fgets(STDIN));
$URL = "https://rest.nexmo.com/account/get-balance?api_key=$key&api_secret=$secret";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$URL);
curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout after 30 seconds
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$result = curl_exec ($ch);

echo "Result : \n".$result."\n";
?>

