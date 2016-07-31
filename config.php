<?php
DEFINE ("HOST","localhost");
DEFINE ("USER","root");
DEFINE ("PASS","");
DEFINE ("DB","printers");
$db = mysqli_connect(HOST, USER,PASS,DB);
mysqli_set_charset($db,"UTF8");
?>