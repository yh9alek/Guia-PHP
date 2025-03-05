<?php /*

# Operadores Aritméticos

    Suma               $x + $y
    Resta              $x - $y
    Multiplicación     $x * $y
    División           $x / $y
    Módulo             $x % $y
    Exponenciación     $x ** $y
    Negación          -$x

# División devuelve un (int) si $x y $y son divisibles, o (float) si no lo son.


# Operadores de asignación

    Se pueden asignar valores y resultados de expresiones
    $x = 3;         $x vale 3
    $x = (5 + 2)    expresión, $x vale 7


# Operadores combinados 

    += Suma y asignación
    -= Resta y asignación
    *= Multiplicación y asignación
    /= División y asignación
    %= Módulo y asignación
    .= Concatenación y asignación  
 

# Hay una excepción a la asignación por valor en PHP, y son los objetos, que se asignan por referencia. Los
# objetos se copian mediante la palabra clone.

# Asignación por referencia (Mediante &)

    $x = 5;
    $y = &$x;

    $y = 10;
    echo "$x - $y";   Resultado: 10 - 10


# Operadores de comparación

    $x == $y   Igual       true sean del mismo tipo o no
    $x === $y  Idéntico    true sólo si son del mismo tipo
    $x != $y   Distinto    true si son diferentes sean del mismo tipo o no
    $x <> $y   Distinto    true si son diferentes sean del mismo tipo o no
    $x !== $y  No idéntido true sólo si no son iguales y tampoco del mismo tipo
    $x < $y    Menor que   true si $x es menor que $y
    $x > $y    Mayor que   true si $x es mayor que $y
    $x <= $y   Menor o igual que   true si $x es menor o igual que $y
    $x >= $a   Mayor o igual que   true si $x es mayor o igual que $y


# Operador ternario

    $x      = "";
    $accion = empty($x) ? 'Valor 1' : 'Valor 2';

# Forma reducida

    $x ?: $y;     Se asigna $x en caso verdadero, caso falso se asigna $y


# Operador de control de errores @

    Cuando se antepone el símbolo de arroba @ ante cualquier expresión, cualquier mensaje de error que
    pueda generar esa expresión será ignorado.

    Si track_errors está activado, el último error se guardará en la variable $php_errormsg y podrá
    emplearse.

    $miArchivo = @file('archivo_que_no_existe') or
    die("No se ha podido abrir, el error ha sido '$php_errormsg'");


# Operadores de incremento - decremento

    Los operadores de incremento y decremento sólo afectan a números y strings, sin afectar a arrays,
    objects o resources. Decrementar un valor NULL no tiene efecto, pero si se incrementa se obtiene 1.
    Incrementar o decrementar booleanos no tiene efecto.

    ++$x Incrementa $x en 1 y luego devuelve $x
    $x++ Retorna $x, y luego incrementa $x en 1

    --$x Decrementa $x en 1, y luego retorna $x
    $x-- Retorna $x, y luego decrementa $x en 1


# Operadores Lógicos

    $x and $y   true si $x y $y son true
    $x or $y    true si uno de los dos es true (o los dos)
    $x xor $y   true si sólo uno de los dos es true
    !$x         true si $x no es true
    $x && $y    true si $x y $y son true
    $x || $y    true si uno de los dos es true (o los dos)

# && y || tienen precedencia sobre and y or.

    Actúa como: ($m = (false || true))
    $m = false || true;

    Actúa como: (($n = false) or true)
    $n = false or true;
    
    Actúa como: ($a = (true && false))
    $a = true && false;

    Actúa como: (($b = true) and false)
    $b = true and false; 


# Operadores con string

    Existen dos operadores para strings:

    Operador de concatenación '.' concatena los argumentos derecho e izquierdo.
    Operador de asignación sobre concatenación '.=', añade el argumento del lado derecho al
    argumento del lado izquierdo. 


# Operadores de tipo

    instanceof es utilizado para saber si una variable es un objeto instanciado de una clase.

    class MiClase { }
    class NoEsMiClase { }
    
    $x = new MiClase;

    var_dump($x instanceof MiClase);      true
    var_dump($y instanceof NoEsMiClase);  false


# Operadores bit a bit

   $x & $y  AND   Comparar si todas las secuencias de bits coinciden
   $x | $y  OR    Fusionar ambas secuencias de bits
   $x ^ $y  XOR   Comparar solo los bits que sean idénticos
   $x ~ $y  NOT   Invertir toda la secuencia de bits


# Operadores de desplazamiento de bits

   $x << $y  (Potencia)  4 << 2 = 16
   $x >> $y  (Contrario a Potencía, división entre 2)  64 >> 3 = 8


# Spaceship operator

    <=>  -  usado para evaluar si un valor es menor, igual o mayor a otro valor:
    
    1 <=> 1  =  0
    1 <=> 2  = -1
    2 <=> 1  =  1

    Solo devuelve 0, 1 y -1 como resultado.