<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require_once("header_conf.php"); ?>
  </head>
  <body bgcolor="orange">
    <!-- header begin -->

    <!-- header end -->
    <!-- body begin -->

    <div style="text-align:center; margin-top: 10%; font-style: italic;">
      <img src="../images/logo3.png" />
      <img src="../images/logo.png" />
    </div>
    <div style="text-align:center; font-style: italic;color: white">
      Bienvenido al Sitio de Administración
    </div>
    <div style="margin-top: 5%;">
      <form name='login' action='main.php' method='post'>
	<table align='center' cellspacing='10px'>
          <tr>
            <td align='right'><label>Usuario:</label></td>
	    <td><input type='text'></td>
          </tr>
	  <tr>
	    <td align='right'><label>Constraseña:</label></td>
	    <td><input type='password'></td>
	  </tr>
	  <tr>
	    <td colspan=2 align='center'><button style="font-size: 15px;" onclick="Javascript:document.forms['login'].submit();">Ingresar</button></td>
	  </tr>
	</table>
      </form>
    </div>


    <!-- body end -->
    <!-- foot begin -->

    <!-- foot end -->
  </body>
</html>
