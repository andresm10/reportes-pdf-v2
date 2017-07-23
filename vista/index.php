<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reportes  en PDF con PHP- MYSQL</title>
</head>

<body>
	<form method="post" action="../control/controlador.php">
	<div align="center">
    <font color="#FF0000" size="+3" face="Lucida Sans Unicode, Lucida Grande, sans-serif">
	    <b><i>Generar reportes PDF en PHP - MySQL.</i></b>
    </font>  
    <br />
    <font size="+2" color="#006600" face="Palatino Linotype, Book Antiqua, Palatino, serif">Autor: codigoweblibre</font>
    <br /><br />
    <table border="0">
    <tr>
    	<td>Nombres</td>
        <td><input type="text" name="nombres" required="required" autofocus="autofocus" maxlength="50" /></td>
    </tr><tr>
    	<td>Apellidos</td>
        <td><input type="text" name="apellidos" required="required" maxlength="50" /></td>
    </tr><tr>
    	<td>Tel&eacute;fono</td>
        <td><input type="text" name="telefono" required="required" maxlength="10" /></td>
    </tr>
    <tr>
    	<td>Ciudad</td>
        <td><input type="text" name="ciudad" required="required" maxlength="30" /></td></td>
    </tr>
    <tr>
	    <td><input type="submit" name="registrar" value="Registrar Usuario" /></td>
    	<td><a href="reporte_usuarios_pdf.php" target="_blank">Generar Reporte</a></td>        
    </tr>
    </table>
    
    <br />
	Para mas tutoriales visita: 
    	<h2><a href="http://codigoweblibre.comli.com" target="_blank">codigoweblibre</a></h2>
        </div>
        </form>
</body>
</html>