<?php include_once("encabezado.php"); ?>
  <form action='<?php print RUTA_APP."libros/modificar/"; ?>' method="POST">
    <div class="form-group text-left">

    <input type="hidden" name="id" class="form-control" value="<?php print $data["id"]; ?>">

      <label for="titulo">Titulo:</label></td>
      <input type="text" name="titulo" class="form-control" value="<?php print $data["titulo"]; ?>">
    </div>
    <div class="form-group text-left">
      <label for="autor">Autor:</label>
      <input type="text" name="autor"  class="form-control" value="<?php print $data["autor"]; ?>">
    </div>
    <div class="form-group text-left">
      <label for="editorial">Editorial:</label>
      <input type="text" name="editorial" class="form-control" value="<?php print $data["titulo"]; ?>">
    </div>
    <div class="form-group text-left">
      <input type="submit" value="Enviar" class="btn btn-success">
      <a href='<?php print RUTA_APP."libros/"; ?>' class="btn btn-info">Regresar</a>
    </div>
  </form>
<?php include_once("piepagina.php"); ?>