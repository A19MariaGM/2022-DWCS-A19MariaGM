<?php
$producto = $_POST["producto"];
$cantidad = $_POST["cantidad"];
$preciosProductos = array("Coke" => 4, "Pepsi" => 3, "Orange" => 2, "Apple" => 1);


echo $cantidad . " de " . $producto . " cústanche " . $preciosProductos[$producto] * $cantidad . " euros";
