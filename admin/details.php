<?php
  include_once('utilities.php');
  include_once('db/database_utilities.php');

  $id = isset( $_GET['id'] ) ? $_GET['id'] : '';

  if( $_POST )
  {

    header('Location: index.php');
    //die();
    $nombre = isset( $_POST['nombre'] ) ? $_POST['nombre'] : '';
    $precio = isset( $_POST['precio'] ) ? $_POST['precio'] : '';
    $description = isset( $_POST['description'] ) ? $_POST['description'] : '';
    $stock = isset( $_POST['stock'] ) ? $_POST['stock'] : '';

    updateP( $id, $nombre, $precio, $description, $stock );
    die();

  }

  $producto = get_product_by_id( $id );

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detalles</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    <div class="row">
 
      <div class="large-9 columns">
        <h3>Modifica registro</h3>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <form method="post">
                
                <div class="row">
                  <div class="large-12 columns">
                    <label>Nombre
                      <input type="text" name="nombre" value="<?php echo $producto['nombre']; ?>" placeholder="" />
                    </label>
                  </div>
                </div>

                <div class="row">
                  <div class="large-12 columns">
                    <label>Precio
                      <input type="text" name="precio" value="<?php echo $producto['precio']; ?>" placeholder="" />
                    </label>
                  </div>
                </div>

                <div class="row">
                  <div class="large-12 columns">
                    <label>Stock
                      <input type="text" name="stock" value="<?php echo $producto['stock']; ?>" placeholder="" />
                    </label>
                  </div>
                </div>

                <div class="row">
                  <div class="large-12 columns">
                    <label>Descripción
                      <textarea name="description" rows="10" type="text" value="" placeholder=""><?php echo $producto['descripcion']; ?></textarea>
                    </label>
                  </div>
                </div>

                <div class="row">
                  <div class="large-4 columns">
                    <label>
                      <input type="submit" class="button success" value="MODIFICAR" />
                    </label>
                  </div>
                </div>
              </form>
            </div>
          </section>
        </div>
      </div>