<?php
// Definición del inventario de cómics
$inventario = [
    'suspense_terror' => 
    [
        ['titulo' => 'The Long Halloween', 'editorial' => 'DC', 'autor' => 'Tim Sale', 'idioma' => 'Inglés', 'precio' => 20, 'stock' => 10],
        ['titulo' => 'Uzumaki', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 15],
        ['titulo' => 'Tomie', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 20],
    ],
    'accion' => 
    [
        ['titulo' => 'Berserk Deluxe Edition 1', 'editorial' => 'Dark Horse', 'autor' => 'Kentaro Miura', 'idioma' => 'Japonés', 'precio' => 30, 'stock' => 12],
    ],
    // Puedes agregar más categorías y cómics según sea necesario
];

// main
// antes descuento
mostrarComicsEnTabla();
mostrarValorAlmacen();

// mostramos el inventario actualizado
aplicarDescuentoManga();
mostrarComicsEnTabla();
mostrarValorAlmacen();

function mostrarComicsEnTabla()
{
    global $inventario;
    echo '<br>';
    echo '<table border="1">';
    echo '<tr><th>Categoría</th><th>Título</th><th>Editorial</th><th>Autor</th><th>Idioma</th><th>Precio</th><th>Stock</th></tr>';

    foreach ($inventario as $categoria => $comics) {
        foreach ($comics as $comic) {
            echo '<tr>';
            echo "<td>$categoria</td>";
            echo "<td>{$comic['titulo']}</td>";
            echo "<td>{$comic['editorial']}</td>";
            echo "<td>{$comic['autor']}</td>";
            echo "<td>{$comic['idioma']}</td>";
            echo "<td>{$comic['precio']}</td>";
            echo "<td>{$comic['stock']}</td>";
            echo '</tr>';
        }
    }
    echo '</table>';
}

function mostrarValorAlmacen()
{
    global $inventario;

    //Creamos una nueva variable para guardar el valor total
    $valorTotal = 0;
    
    //Utilizamos un foreach para recorrer todo el inventario de comics. Multiplicamos el precio por el stock disponible de cada comic y lo vamos sumando a la variable $valorTotal
    foreach ($inventario as $categoria => $comics) 
    {
        foreach ($comics as $comic) 
        {
            $precio = $comic['precio'];
            $stock = $comic['stock'];
            $valorTotal += ($precio * $stock);
        }
    }

    //Mostramos el valor final del almacen
    echo "Total valor almacen es: " .  $valorTotal;
    echo "<br>";
}

function aplicarDescuentoManga()
{
    global $inventario;

    foreach ($inventario['accion'] as &$comic) 
    {
        if ($comic['idioma'] == 'Japonés') 
        {
            $comic['precio'] = $comic['precio'] * 0.7; // Aplicar descuento del 30%
        }
    }

    //Copiamos y pegamos la estructura de arriba, pero cambiando la categoría por "suspense_terror", para calcular su 30%
    foreach ($inventario['suspense_terror'] as &$comic) 
    {
        if ($comic['idioma'] == 'Japonés') 
        {
            $comic['precio'] = $comic['precio'] * 0.7; // Aplicar descuento del 30%
        }
    }

}
?>


