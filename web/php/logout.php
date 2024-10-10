<?php

$name = 0;
$f = fopen('login.txt','w');
fwrite($f,$name);
fclose($f);
echo "<script>window.location.href = 'http://localhost/project/';</script>";

?>