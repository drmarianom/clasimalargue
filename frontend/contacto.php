<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require_once("header_conf.php"); ?>
  </head>
  <body>
    <!-- header begin -->
    <?php require_once("header.php"); ?>
    <!-- header end -->
    <!-- body begin -->

    <div style="border:1px solid silver; margin:30px 100px 30px 100px;">
      <table border="0" width="100%">
	<tr>
      <td>
	<h2>Contacto</h2>
	<div>Todo lo que quiera preguntar lo puede hacer tanto por via telefónica como a través de nuestra página.</div>
	<div>A continuación puede ver nuestro formulario de contacto.</div>
	
	<h3>Teléfono</h3>
	0810234567890
	
	<h3>Envianos un mensaje</h3>
        <form>
	  <label>Nombre</label><div><input type="text" style="width:500px;"></div>
	  <label>Apellido</label><div><input type="text" style="width:500px;"></div>
	  <label>Correo</label><div><input type="text" style="width:500px;"></div>
	  <label>Tipo de Ususario</label>
	  <div><select style="width:506px;">
	    <option>Particular</option>
	    <option>Empresa</option>
	  </select></div>
	  <label>Teléfono de contacto</label>
	  <div><input type="text" style="width:500px;"></div>
	  <label>Asunto del Mensaje:</label>
	  <div><input type="text" style="width:500px;"></div>
	  <label>Contenido:</label>
	  <div><textarea style="width:500px;" rows="15"></textarea></div>
	  <label>Texto verificador</label>
	  <div>[ capacha img ] <input type="text"></div>
	  <input type="submit" value="Enviar" />
	  <input type="reset" value="Cancelar" onclick="confirm('¿Está seguro que desea borrar el formulario?');" />
        </form>
      </td>
        </tr>
      </table>
    
    </div>
    
    <!-- body end -->
    <!-- foot begin -->
    <?php require_once("footer.php"); ?>
    <!-- foot end -->
  </body>
</html>