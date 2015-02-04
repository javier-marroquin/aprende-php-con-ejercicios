<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
  <title></title>
  </head>
  <body>
  <?php
    require_once 'twig/lib/Twig/Autoloader.php';
    Twig_Autoloader::register();
    $loader = new Twig_Loader_Filesystem(__DIR__.'/plantillas');
    $twig = new Twig_Environment($loader);

    $infoUsuario = $twig->loadTemplate('infoUsuario.html.twig');

    $datos = array(
      'nombre' => 'Elena',
      'apellido1' => 'Nito',
      'apellido2' => 'Del Bosque',
      'dni' => '1234567X');

    $paginaUsuario = $infoUsuario->render($datos);
    echo $paginaUsuario;
  ?>
  </body>
</html>