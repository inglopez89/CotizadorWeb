<?php
session_start();
session_unset();
session_destroy();
session_cache_expire(0);
$cache_expire = session_cache_expire();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fin de la Cotizacion</title>
</head>

<body>
<div id="header">
</div>
<div id="contenidofin">
<center><table>
<tr>
<td><p><i><h3>!!Ha salido correctamente de la aplicacion!!</h3></i></p></td>
</tr>
<tr>
<td><center><a href="index.php">Volver al inicio</a></center></td>
</tr>
</table>
</center>
<div id="pie"></div>
</div>
</body>
</html>
