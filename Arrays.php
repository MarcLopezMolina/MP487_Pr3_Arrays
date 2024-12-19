<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <?php

        //Mensaje básico por consola
        echo "<h1>Ejercicio 1</h1>";

        $datos = array('nombre' => 'Sara', 'apellido' => 'Martínez', 'edad' => 23, 'ciudad' => 'Barcelona');

        $num = 1;

        foreach ($datos as $value) 
        {
            echo "dato $num º: $value <br>";
            $num++;
        }

        //
        echo "<br><h1>Ejercicio 2</h1>";

        foreach ($datos as $clave => $value) 
        {
            echo "$clave: $value <br>";
        }


        echo "<br><h1>Ejercicio 3</h1>";

        $datos['edad'] = 24;

        $num = 1;

        foreach ($datos as $value) {
            echo "dato $num º: $value <br>";
            $num++;
        }


        echo "<br><h1>Ejercicio 4</h1>";

        unset($datos['ciudad']);

        var_dump($datos);


        echo "<br><br><h1>Ejercicio 5</h1>";

        $letters = 'a,b,c,d,e,f';

        $letras = explode(',', $letters);

        arsort($letras);

        $num = 6;

        foreach ($letras as $abecedario) 
        {
            echo "value $num º: $abecedario <br>";
            $num--;
        }


        echo "<br><h1>Ejercicio 6</h1>";

        $notas = array('Miguel' => 5, 'Luís' => 7, 'Marta' => 10, 'Isabel' => 8, 'Aitor' => 4, 'Pepe' => 1);

        arsort($notas);

        echo "Notas de los estudiantes: ";
        foreach ($notas as $clave => $value) 
        {
            echo "$clave: $value, ";
        }


        echo "<br><br><h1>Ejercicio 7</h1>";

        $sumaNotas = 0;

        $cantidad = 0;

        foreach ($notas as $nota) 
        {
            $sumaNotas += $nota;
            $cantidad++;
        }

        $notaMedia = round(($sumaNotas / $cantidad), 2);

        echo "Media de las notas: $notaMedia <br>";
        echo "Alumnos con nota por encima de la media: <br>";


        foreach ($notas as $clave => $value) 
        {
            if ($value > $notaMedia) {
                echo "$clave <br>";
            }
        }


        echo "<br><h1>Ejercicio 8</h1>";

        $notaAlta = 0;
        $alumno;

        foreach ($notas as $clave => $value) 
        {
            if($value > $notaAlta){
                $notaAlta = $value;
                $alumno = $clave;
            }
        }
        echo "La nota mas alta es $notaAlta y el mejor alumno es $alumno. <br>";
    ?>

</body>

</html>