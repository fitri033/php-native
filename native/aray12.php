<?php
$email["subjek"] = "apa kabar?";
$email["pengirim"] = "diampetanikode.com";
$email["isi"] ="apa kabar? sudah lama tidak jumpa";

echo"<pre>";
print_r($email);
echo"</pre>";

echo $email["pengirim"];
?>