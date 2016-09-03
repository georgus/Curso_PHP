<?php
$action = isset( $_GET['action'] ) ? $_GET['action'] : FALSE;

if( $action )
{
    switch($action)
    {
        case 'redirect':

            //Redirect to google
            die('redirect');

        break;
        case 'render':

            //Open image and display
            die('render');

        break;
        case 'parse':

            //Display in browser as XML
            die('parse');

        break;
        case 'download':

            //Force a download with octet stream
            die('download');

        break;
        default:
            //Do nothing
    }
}

?><!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Curso PHP Intermedio</title>
    <link href=
    "http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css" rel=
    "stylesheet">
    <link href=
    'http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css'
    rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="row">
        <div class="medium-5 large-3 columns"></div>
    </div>
    <div class="row column">
        <p class="lead">Encabezados</p>
    </div>
    <div class="row small-up-1 medium-up-2 large-up-3">

        <table>
          <thead>
            <tr>
              <th width="200">Acción</th>
              <th>Encabezado</th>
              <th width="150">Resultado</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a href="./index.php?action=redirect">Redirección</a></td>
              <td>Location</td>
              <td>Redirige a otra página</td>
            </tr>
            <tr>
              <td><a href="./index.php?action=render">Visualización</a></td>
              <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
              <td>Content Goes Here</td>
            </tr>
            <tr>
              <td><a href="./index.php?action=parse">Interpretación</a></td>
              <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
              <td>Content Goes Here</td>
            </tr>
            <tr>
              <td><a href="./index.php?action=download">Descarga</a></td>
              <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
              <td>Content Goes Here</td>
            </tr>
          </tbody>
        </table>

    </div>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js">
    </script> 
    <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js">
    </script> 
    <script>
      $(document).foundation();
    </script> 
    <script src="https://intercom.zurb.com/scripts/zcom.js" type=
    "text/javascript">
    </script>
</body>
</html>