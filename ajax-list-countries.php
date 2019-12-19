<?php
include('conexion2.php');
$res=odbc_exec($conexion,"select ID,nombre from toycli where Nombre like '".$letters."%'");
while($row=odbc_fetch_array($res)){
$var1=odbc_result($res,'nombre');
//echo 'var 1:'.$var1;
}
$aCountries = explode(',',$var1);
if(isset($_GET['getCountriesByLetters']) && isset($_GET['letters'])){
	$letters=$_GET['letters'];
	$letters=preg_replace("/[^a-z0-9 ]/si","",$letters);
	//$res = mysql_query("select ID,countryName from ajax_countries where countryName like '".$letters."%'") or die(mysql_error());
  foreach($aCountries as $key => $country) {
    $country = strtolower($country);
    if(strpos($country, $letters)!==false)
      echo $key."###".$country."|";
  }
}

?>