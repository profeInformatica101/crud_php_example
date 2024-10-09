<?php
include 'config.php';

$stmt = $pdo->query('SELECT * FROM libros');
$libros = $stmt->fetchAll();

foreach ($libros as $libro) {
    echo $libro['nombre'] . ' - $' . $libro['precio'];
    echo ' <a href="edit.php?id=' . $libro['id'] . '">Editar</a>';
    echo ' <a href="delete.php?id=' . $libro['id'] . '">Eliminar</a>';
    echo '<br>';
}

echo '<a href="create.php">Crear nuevo Libro</a>';
?>