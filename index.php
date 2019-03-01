<?php
   session_start();
   $path = './usr/lib/etc';
   set_include_path(get_include_path() . PATH_SEPARATOR . $path);
?>   
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
	<TITLE>Ampanet Angeleta Ferrer</TITLE>
	<link rel="stylesheet" type="text/css" href="ampanet.css" />
</HEAD>
<BODY>
	<H1>AMPANET - AMPA Angeleta Ferrer</H1>
	<HR>
    <TABLE WIDTH="100%">
        <TR>
                <P>Benvinguts a la Web AMPANET que d&oacute;na servei a l'AMPA del CEIP Angeleta Ferrer.</P>
                <P>Si no esteu donats d'alta, primer us heu de sol.licitar l'alta enviant un correu a <a href="mailto:correu.ampanet@gmail.com">correu.ampanet(Garrofa)gmail.com</a></P>
                <P>Indiqueu el vostre nom, cognom i el dels vostres fills, indicant tamb&eacute; el nom, cognoms i el curs.</P>
                <P>Poseu en el subjecte del correu 'Alta AMPANET'</P>
        </TR>
	<TR>
        </TR>
        <TR>
                <FORM NAME="formInici" ACTION="/usuari/validar.php" METHOD=POST>
                    <TABLE>
                        <TR>
				<TD><P>Usuari:</P></TD>
                                <TD><INPUT ID="Usuari" TYPE=TEXT NAME="Usuari" VALUE="" SIZE=17 MAXLENGTH=17></TD>
                        </TR>
                        <TR>
				<TD><P>Contrassenya:</P></TD>
                                <TD WIDTH=136><INPUT ID="Contrassenya" TYPE=PASSWORD NAME="Contrassenya" VALUE="" SIZE=17 MAXLENGTH=17></TD>
                        </TR>
                        <TR>
				 <TD><INPUT TYPE=SUBMIT NAME="FormsButton1" VALUE="Entrar" ID="Forms Button1"></TD>
                         </TR>
                     </TABLE>
                </FORM>
        </TR>
    </TABLE>
<?php
   include("ampanet_errors.php");
   print_error($_SESSION["Error"])
?>
</BODY>
</HTML>
 
