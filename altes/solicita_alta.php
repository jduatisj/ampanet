<?php
   session_start();
   $path = '../usr/lib/bd'.PATH_SEPARATOR.'../usr/lib/etc';
   set_include_path(get_include_path() . PATH_SEPARATOR . $path);   
   include("../usr/lib/etc/ampanet_errors.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<HEAD>
<link rel="stylesheet" type="text/css" href="../ampanet.css" />
<TITLE>Altes</TITLE>
</HEAD>
<BODY>
<H1>AMPANET</H1>
<HR>
<H2>Solicitar alta usuari:</H2>
<TABLE>
<FORM NAME="SolicitaAltaUsuari" ACTION="envia_alta.php" METHOD=post>
<TR>
<TD>Nom: </TD>
<TD><INPUT ID="Nom" TYPE=TEXT NAME="Nom" VALUE="" SIZE=28 MAXLENGTH=28></TD>
</TR>
<TR>
<TD>Primer Cognom: </TD>
<TD><INPUT ID="Cognom1" TYPE=TEXT NAME="Cognom1" VALUE="" SIZE=28 MAXLENGTH=28></TD>
</TR>
<TR>
<TD>Segon Cognom: </TD>
<TD><INPUT ID="Cognom2" TYPE=TEXT NAME="Cognom2" VALUE="" SIZE=28 MAXLENGTH=28></TD>
</TR>
<TR>
<TD>Correu: </TD>
<TD><INPUT ID="Correu" TYPE=TEXT NAME="Correu" VALUE="" SIZE=30 MAXLENGTH=40></TD>
</TR>
<TD><INPUT TYPE=SUBMIT NAME="Enviar" VALUE="Enviar" ID="Enviar"></TD>
</TR>
</FORM>
</TABLE>
<?
   print_error($_SESSION["Error"]);
?>   
</BODY>
</BODY>
</HTML>
