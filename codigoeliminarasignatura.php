
<?
	session_start();
  $numero = count($_GET);
$tags = array_keys($_GET);// obtiene los nombres de las varibles
$valores = array_values($_GET);// obtiene los valores de las varibles

// crea las variables y les asigna el valor
for($i=0;$i<$numero;$i++){
$$tags[$i]=$valores[$i];
}

/***VARIABLES POR POST ***/

$numero2 = count($_POST);
$tags2 = array_keys($_POST); // obtiene los nombres de las varibles
$valores2 = array_values($_POST);// obtiene los valores de las varibles

// crea las variables y les asigna el valor
for($i=0;$i<$numero2;$i++){ 
$$tags2[$i]=$valores2[$i]; 
}
	include("config.php");
	$conexion=mysql_connect($servidor,$usuario,$clave);	
	mysql_select_db ($basededatos, $conexion);
	$consulta="DELETE FROM asignaturas WHERE idasignatura = '$busqueda'";
	$resul=mysql_query($consulta);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<link rel="shortcut icon" href="escudo.ico">

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>.. Ingreso de Estudiante a la Plataforma Lyons ..</title>
<link href="REVISTA%20DINERS_files/estilos.css" rel="stylesheet" type="text/css">
<script src="REVISTA%20DINERS_files/074c0ded835b6184.js" type="text/javascript"></script><script src="REVISTA%20DINERS_files/074c0ded835b6184_002.js" type="text/javascript"></script>
<style type="text/css">
<!--
a:link {
	color: #FE9305;
	text-decoration: none;
}
a:visited {
	color: #FE9305;
	text-decoration: none;
}
a:hover {
	color: #FFFFFF;
	text-decoration: none;
}
a:active {
	color: #FE9305;
	text-decoration: none;
}
.Estilo11 {
	font-family: Arial;
	color: #333333;
}
.Estilo16 {font-size: 10px}
.Estilo18 {color: #FFFFFF}
body {
	background-color: #F9F9F9;
}
.Estilo26 {font-family: Arial; color: #333333; font-size: 9px; }
-->
</style>
</head><body leftmargin="0" topmargin="0" class="fondo" marginheight="0" marginwidth="0">
<table width="971" height="589" align="center" cellpadding="0" cellspacing="0" background="imagenes/fond.png">
  <tbody><tr>
	  <td width="1012" height="19" colspan="3" align="left" valign="top">&nbsp;</td>
			</tr>


  <tr>
    <td height="110" colspan="3" align="right" valign="top"><table width="101%" height="147" align="left" cellpadding="0" cellspacing="0" background="REVISTA DINERS_files/cabezote_naraja22.png">
      <tbody>
        <tr>
          <td valign="bottom" width="1%" height="145">&nbsp;</td>
          <td width="12%">&nbsp;</td>
          <td width="87%"><p>&nbsp;</p>
              <p>&nbsp;</p>
            <p>&nbsp;</p></td>
        </tr>
      </tbody>
    </table></td>
  </tr>
  
  <tr>
    <td height="435" colspan="3" class="fondocwentro"><table width="92%" height="402" cellpadding="0" cellspacing="0">
      <tbody><tr>
							<td width="999" height="388" align="left" valign="top"><table width="969" height="376" border="0">
                              <tr>
                                <td width="1004" height="372" valign="top"><form id="form1" name="form1" method="post" action="">
                                  <table width="963" height="190" border="0">
                                    <tr>
                                      <td height="25" colspan="5" valign="top"><div align="center"><span class="Estilo11">Bienvenido(a), <? echo $_SESSION["nombre"] ?></span> <span class="Estilo11">a la Plataforma Lyons.</span></div></td>
                                    </tr>
                                    <tr>
                                      <td width="165" height="21">&nbsp;</td>
                                      <td width="212">&nbsp;</td>
                                      <td width="190">&nbsp;</td>
                                      <td width="180">&nbsp;</td>
                                      <td width="194">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td height="21"><div align="center"><span class="fmenuTop Estilo18 Estilo20"><a href="plataformaindex_directivos_ingresoasignatura.php" class="TITULOart1">INGRESAR ASIGNATURA </a></span></div></td>
                                      <td>&nbsp;</td>
                                      <td><div align="center"><span class="fmenuTop Estilo18"><a href="plataformaindex_directivos_modificarasignatura.php">MODIFICAR ASIGNATURA </a></span></div></td>
                                      <td>&nbsp;</td>
                                      <td><div align="center"><span class="fmenuTop Estilo18"><a href="plataformaindex_directivos_eliminarasignatura.php">ELIMINAR ASIGNATURA </a></span></div></td>
                                    </tr>
                                    <tr>
                                      <td height="21" colspan="5"><p align="center" class="TITULOart2"><img src="imagenes/dialog-apply copia.PNG" width="128" height="128" /></p>                                      </td>
                                    </tr>
                                    <tr>
                                      <td height="21" colspan="5"><label>
                                        </label>
                                        <div align="center"><span class="TITULOart2">Se ha Eliminado la Asignatura con Exito. </span></div>                                        
                                      <div align="center"></div>                                        <div align="center"></div></td>
                                    </tr>
                                    <tr>
                                      <td height="21">&nbsp;</td>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td height="21">&nbsp;</td>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td height="21">&nbsp;</td>
                                      <td bordercolor="#FFFFFF">&nbsp;</td>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                      <td><div align="center" class="fmenuTop Estilo18"><a href="plataformaindex_directivos.php"><a href="plataformaindex_directivos.php"><img src="imagenes/go-home.png" width="50" height="50" border="0" /></a></a></div></td>
                                    </tr>
                                  </table>
                                                                </form>
                                </td>
                              </tr>
              </table></td>
      </tr>
      <tr>
							<td valign="top" align="left"></td>
			</tr>
      <tr>
			  <td height="12" align="left" valign="top"><p align="center" class="fmenuTop Estilo16"><span class="Estilo26">Instituci&oacute;n Educativa &quot;San Jos&eacute;&quot; |  Monter&iacute;a - C&oacute;rdoba - Colombia | Calle 39 N&deg; 16 B&#8722;55 | Nit&deg; 8122000635-2 | Codigo Postal: 354 <br />
</span><br />
<span class="Estilo26">Copyright&copy; 2010 Todos los Derechos Reservados&reg;</span></p></td>
      </tr>
      <tr>
        <td valign="top" align="left"></td>
        </tr>
      <tr>
        <td height="2" align="left" valign="top"></td>
      </tr>
      
    </tbody></table></td>
  </tr>
  <tr>
    <td colspan="3" height="2"><script type="text/javascript" src="REVISTA%20DINERS_files/epl-40.js"></script>
<script type="text/javascript"><!--
var eplArgs = { sV:"http://ads.us.e-planning.net/",vV:"4",sI:"36f6",kC:"tp",eClassName:"txt"};
var eplAdsArray=new Array();
function eplInit() {
	if (this.readyState == 'complete') {
		document.epl.eplInit(eplArgs);
		for (var i=0; i<eplAdsArray.length; i++) { document.epl.eplPushAd(eplAdsArray[i][0], eplAdsArray[i][1], eplAdsArray[i][2], eplAdsArray[i][3]); }
	}
}
if (document.epl != undefined) {
	document.epl.eplInit(eplArgs);
} else {
	var array = document.getElementsByTagName('script');
	var e = undefined;
	for (var i=0; i<array.length; i++) {
		if (array[i].src.indexOf('epl-40.js') != -1) {
			e = array[i];
		}
	}
	if (e != undefined) { e.onreadystatechange = eplInit; }
}
function eplAD4(espacio_id, tipo, timeout, maxAds) {
	document.write('<div id="eplAdDiv'+ espacio_id +'"></div>');
	if (document.epl != undefined) {
		document.epl.eplPushAd(espacio_id, tipo, timeout, maxAds);
	} else {
		eplAdsArray.push(new Array(espacio_id, tipo, timeout, maxAds));
	}
}
//--></script>

<script>eplAD4("074c0ded835b6184",3,0,1)</script><!-- e-planning v3 - Fin espacio Revista Diners Co _ Notas Internas _ Notas Internas -->    </td>
  </tr>  
</tbody></table>

</body></html>