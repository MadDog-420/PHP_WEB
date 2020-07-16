<?php
include_once('utilities.php');
include_once('db/database_utilities.php');

if( $_POST )
{

  header('Location: index.php');
  //die();
  $nombre = isset( $_POST['nombre'] ) ? $_POST['nombre'] : '';
  $precio = isset( $_POST['precio'] ) ? $_POST['precio'] : '';
  $description = isset( $_POST['description'] ) ? $_POST['description'] : '';
  $stock = isset( $_POST['stock'] ) ? $_POST['stock'] : '';

  addP( $nombre, $precio, $description, $stock );
  die();

}

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agregar</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body>
    <div class="row">
 
      <div class="large-9 columns">
        <h3>Agregar nuevo registro</h3>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <form method="post">
                
                <div class="row">
                  <div class="large-12 columns">
                    <label>Nombre*
                      <input type="text" name="nombre" placeholder="" />
                    </label>
                  </div>
                </div>

                <div class="row">
                  <div class="large-12 columns">
                    <label>Precio*
                      <input type="text" name="precio" placeholder="" />
                    </label>
                  </div>
                </div>

                <div class="row">
                  <div class="large-12 columns">
                    <label>Descripción*
                      <input type="text" name="description" placeholder="" />
                    </label>
                  </div>
                </div>

                <div class="row">
                  <div class="large-12 columns">
                    <label>Stock*
                      <input type="text" name="stock" placeholder="" />
                    </label>
                  </div>
                </div>

                <div class="row">
                  <div class="large-4 columns">
                    <label>
                      <input type="submit" class="button success" value="AGREGAR" />
                    </label>
                  </div>
                </div>

              </form>
            </div>
          </section>
        </div>
      </div>