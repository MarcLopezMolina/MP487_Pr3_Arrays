<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <?php

        //EJERCICIO 1
        echo "<h1>Ejercicio 1</h1>";

        //Array asociativo donde asignamos a cada clave su valor correspondiente.
        $datos = array('nombre' => 'Sara', 'apellido' => 'Martinez', 'edad' => 23, 'ciudad' => 'Barcelona');

        //Variable auxiliar para contar el número de dato.
        $num1 = 1;

        //Estructura foreach donde mostramos cada número de dato seguido de su valor correspondiente. 
        foreach ($datos as $valor) 
        {
            echo "dato " . $num1 . "º: " . $valor . "<br>";
            $num1++;
        }



        //EJERCICIO 2
        echo "<br><h1>Ejercicio 2</h1>";

        //Estructura foreach donde mostramos cada clave seguido de su valor correspondiente.
        foreach ($datos as $clave => $valor) 
        {
            echo $clave . ": " . $valor . "<br>";
        }



        //EJERCICIO 3
        echo "<br><h1>Ejercicio 3</h1>";

        //Actualizamos el valor de la clave edad a 24.
        $datos['edad'] = 24;

        //Variable auxiliar para contar el número de dato.
        $num2 = 1;

        //Estructura foreach donde mostramos cada número de dato seguido de su valor correspondiente. 
        foreach ($datos as $valor) {
            echo "dato " . $num2 . "º: " . $valor . "<br>";
            $num2++;
        }



        //EJERCICIO 4
        echo "<br><h1>Ejercicio 4</h1>";

        //Borramos la clave de ciudad del array $datos.
        unset($datos['ciudad']);

        //Mostramos su contenido utilizando la función var_dump.
        var_dump($datos);



        //EJERCICIO 5
        echo "<br><br><h1>Ejercicio 5</h1>";

        //Declaramos un nuevo array con letras del abecedario como valores.
        $letters = 'a,b,c,d,e,f';

        //Separamos sus valores por coma usando la función explode.
        $letters = explode(',', $letters);

        //Ordenamos el array de forma inversa. 
        arsort($letters);

        //Variable auxiliar para contar el número de dato de manera inversa.
        $num3 = 6;

        //Estructura foreach donde mostramos cada letra ordenada de forma inversa junto con el valor del array correspondiente también ordenado de forma inversa.
        foreach ($letters as $valor) 
        {
            echo "letter " . $num3 . "º: " . $valor . "<br>";
            $num3--;
        }



        //EJERCICIO 6
        echo "<br><h1>Ejercicio 6</h1>";

        //Array asociativo donde asignamos a cada clave su valor correspondiente.
        $notas = array('Miguel' => 5, 'Luís' => 7, 'Marta' => 10, 'Isabel' => 8, 'Aitor' => 4, 'Pepe' => 1);

        //Ordenamos el array anterior de mayor a menor por el valor de cada clave.
        arsort($notas);

        //Simple mensaje
        echo "Notas de los estudiantes: ";

        //Estructura foreach donde mostramos cada clave seguido de su valor correspondiente.
        foreach ($notas as $clave => $valor) 
        {
            echo $clave . ": " . $valor . " ";
        }
        


        //EJERCICIO 7
        echo "<br><br><h1>Ejercicio 7</h1>";

        //Dos simples variables para contar la suma de todas las notas y la cantidad total de alumnos.
        $sumaTotal = 0;
        $cantidadAlumnos = 0;

        //Estructura foreach donde recorremos el array de $notas con el objetivo de conocer la suma de todas las notas y la cantidad total de alumnos.
        foreach ($notas as $nota) 
        {
            $sumaTotal += $nota;
            $cantidadAlumnos++;
        }

        //Variable para calcular la media de todas las notas de los alumnos, con solo 2 decimales.
        $notaMedia = round(($sumaTotal / $cantidadAlumnos), 2);

        //Simple mensaje para mostrar la media de las notas.
        echo "Media de las notas: " . $notaMedia . "<br>";

        //Simple mensaje
        echo "Alumnos con nota por encima de la media: <br>";

        //Estructura foreach donde mostramos las claves (nombres de los alumnos) cuyos valores superan la media de la clase.
        foreach ($notas as $clave => $valor) 
        {
            if ($valor > $notaMedia) 
            {
                echo "$clave <br>";
            }
        }



        //EJERCICIO 8
        echo "<br><h1>Ejercicio 8</h1>";

        //Dos simples variables para almacenar los datos de cual es la nota más alta y el alumno que ha obtenido dicho resultado.
        $notaMasAlta = 0;
        $alumno;

        //Estructura foreach donde recorremos el array $notas para ir comparando cada valor con el más grande obtenido préviamente, hasta dar con la nota más alta y su alumno en cuestión.
        foreach ($notas as $clave => $valor) 
        {
            if($valor > $notaMasAlta)
            {
                $notaMasAlta = $valor;
                $alumno = $clave;
            }
        }

        //Simple mensaje informativo de cual es la nota más alta y su alumno en cuestión.
        echo "La nota mas alta es " . $notaMasAlta . " y el mejor alumno es " . $alumno . "<br>";
    ?>

</body>

</html>