<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Las toninas beach | Contacto</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="scripts/jquery.timers.1.2.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.2.1.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.setup.js"></script>
<style type="text/css">
<!--
#top .wrapper #header .fl_left p strong em {
	color: #099;
}
body,td,th {
	color: #333;
}
#top .wrapper .container .column .holder p a em {
	text-align: center;
}
-->
</style>
</head>
<body id="top">
<div class="wrapper col0">
  <div id="topline">
    <p>Tel: (011) 4621.1253 | lastoninasbeach@gmail.com</p>
    <br class="clear" />
</div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="header">
    <div class="fl_left">
      <h2 align="center"><img src="images/op/logo.png" width="388" height="71" /><a href="#"><em>Complejo Vacacional la Comarca</em></a><br />
      <em>La MEJOR opci&oacute;n, para TUS vacaciones!!!</em></h2>
    </div>
    <div class="fl_right">
      <p align="justify"><img src="images/banner.jpg" width="468" height="120" /></p>
      <p><br />
      </p>
    </div>
    <div align="justify"><br class="clear" />
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
     <ul>
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="hospedaje.html">Complejo</a></li>
        <li><a href="fotos.html">Duplex</a></li>
        <li><a href="fotos_3.html">Departamentos</a></li>
        <li><a href="fotos_8.html">Calle 1</a></li>
        <li><a href="fotos_9.html">cHALET </a></li>
        <li>
        <li><a href="contacto.html">Contacto</a>
        </li>
      </ul>
    </div>
    <div id="search">
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper"></div>
<!-- ####################################################################################################### -->


<?php 
$myemail = 'lucasbritez111@gmail.com';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>









<!-- ####################################################################################################### -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <h1><a href="#"><em>Complejo Vacacional la Comarca</em></a></h1>
      <p align="justify">Este es un emprendimiento familiar que, como cada a&ntilde;o, tiene como objetivo, brindales a nuestros hu&eacute;spedes una mejor estad&iacute;a , por eso <em><strong>somos muy respetuosos  con nuestros clientes</strong></em> y pedimos que tambi&eacute;n ellos lo sean para con los dem&aacute;s,  como&nbsp; todos vienen a descansar en  familia,<strong> no aceptamos ni mascotas, ni adolescentes solos</strong>, de esta manera <em><strong>cada ocupante de nuestro  complejo regresa realmente conforme y descansado de sus vacaciones</strong></em></p>
      <p align="justify"><em><strong>Si recomienda a un amigo, como agradecimiento, le regalaremos la estad&iacute;a de un fin de semana en el a&ntilde;o <a href="#">(fuera de  temporada alta) </a></strong></em></p>
      <p align="right"><strong><a href="#"><em>Gracias por elegirnos y confiar en nosotros !!!</em></a></strong></p>
      <p>&nbsp;</p>
      <h2><strong><em>Su consulta no molesta!!!</em></strong></h2>
      <div id="respond">
        <form method="post" action="enviar.php">
            <input type="text" name="nombre" placeholder="NOMBRE" size="22" />
            <input type="email" name="email" placeholder="CORREEO" size="22" />
            <textarea type="text" name="mensaje" placeholder="MENSAJE" cols="100%" rows="10"></textarea>
            <input type="submit" value="ENVIAR" />
        </form>
      </div>
    </div>
    <div class="column">
      <div class="subnav">
        <h2 align="center">No dejes de contactarnos</h2>
        <p>lastoninasbeach@gmail.com<br />
        </p>
        <p>Tel.: (011) 4621.1253 </p>
        <p>Cel.:(011) 15.5690.9484 | 15.5487.2145 <br />
        </p>
        <h2 align="center"><br />
          Ubicaci&oacute;n<br />
          </p>
        </h2>
        <p>Los Duplexs est&aacute;n ubicados calle 5 <br />
          (N&ordm; 1568) entre 34 y 36<br />
        </p>
        <p>Los chalet est&aacute;n ubicadas calle 5 <br />
          (N&ordm; 1547) entre 34 y 36 <br />
        </p>
        <p>Los deptos est&aacute;n ubicadas calle 48 <br />
          (N&ordm; 457) entre 7 y 9 <br />
        </p>
        <p>El depto &quot;calle 1&quot; est&aacute;n ubicado calle 1 <br />
          (N&ordm; 990) entre 24 y 22</p>
      </div>
      <div class="holder">
        <p align="center"><a href="http://www.facebook.com/pages/Las-Toninas-Beach-La-Comarca-de-Tavi-/221270627951831" target="_blank"><img src="images/facebook_1.gif" alt="" width="301" height="48" /><em>Seguinos en Facebook <br />
        </em></a><a href="#"><em></em>Complejos Vacacionales&quot; La Comarca&quot;</a><a href="#"><br />
          </a></p>
      </div>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="footer"></div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper"></div>
<!-- ####################################################################################################### -->
<div class="wrapper col8">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2011 - All Rights Reserved - <a href="#">Las Toninas Beach</a></p>
    <p class="fl_right">Rediseñado por Lucas Martín Britez</p>
    <br class="clear" />
  </div>
</div>
</body>
</html>
