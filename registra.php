<?php
$data = $_POST['jsonString'];
//set mode of file to writable.
chmod("conto.json",0777);
$f = fopen("conto.json", "w+") or die("fopen failed");
fwrite($f, $data);
fclose($f);
