<?php /*

# Definición de variables

  En PHP todas las variables empiezan por el simbolo de dolar $.
  El nombre de las variables debe empezar con una letra o barra baja.
  $this es una variable especial que no puede ser asignada.


# Las varaibles siempre se pasan por valor

  Si queremos pasar por referencia el contenido de una variable anteponemos el simbolo &

  $y = true;
  $x = &$y;   <- Pasamos por referencia el valor de $y


# Variables predefinidas

  superglobals:

    $GLOBALS  -  array con todas las variables disponibles en el ámbito global. Los nombres de las variables
                son los keys del array.

    $_SERVER  -  array que contiene información del entorno del servidor y de ejecución (headers, rutas,
                ubicaciones de script...). Son creadas por el servidor web. Contiene información importante sobre
                request headers HTTP.

    $_GET     -  array asociativo de variables enviadas al script a través de parámetros URL.

    $_POST    -  array asociativo de variables enviadas al script a través del método POST de HTTP
                cuando se emplea application/x-www-form-urlencoded o multipart/form-data como Content-Type de
                HTTP en el request.

    $_FILES   -  array asociativo de elementos enviados al script a través del método POST.

    $_COOKIE  -  array asociativo de variables enviadas al script a través de Cookies HTTP.

    $_SESSION -  array asociativo de variables de sesión disponibles en el script.

    $_REQUEST -  array asociativo que por defecto contiene $_GET, $_POST y $_COOKIE.

    $_ENV     -  array asociativo de variables enviadas al script a través del método del entorno.  


  Otras

   $php_errormsg - variable que contiene el texto del último mensaje de error generado por PHP
                   (track_errors tiene que estar activado).

   $http_response_header - array que contiene las cabeceras de respuesta HTTP enviadas por el
                           servidor, similar a la función get_headers().

   $argc - número de argumentos enviados al script a través de la línea de comandos. Su valor mínimo
           es siempre 1, que es el nombre del script (tiene que estar activado register_argc_argv).

   $argv - array de argumentos pasados a un script cuando se ejecuta a través de la línea de comandos.


# Ámbito de variables

  En PHP hay solo 2 ámbitos para las variables, global y local.

  Toda variable definida fuera de cualquier función, pertenece al ámbito global.
  Las funciones manejan su propio ámbito para las variables, este es el ámbito local.


$x = 10;

# Incorrecto ---

function test() {
    echo $x;
}

# Correcto -----

function test() {
    global $x
    echo $x;
}

# Otra alternativa usando $GLOBALS

function test() {
    echo $GLOBALS['x'];
}

test();


# Uso de static dentro de funciones

  crear una variable con static hace que su valor no se pierda cuando se termine de ejecutar la función, 
  seguira conservando su anterior valor en la siguiente llamada.

function counter() {
    static $count = 0;
    return ++$count;
}

counter();  $count = 1
counter();  $count = 2
counter();  $count = 3


# Variables variables

  Se pueden crear variables a partir del valor de otra variable.

  $x = 'var';
  $$x = 'Hello';

  echo $var;

