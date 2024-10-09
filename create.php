<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    $sql = "INSERT INTO libros (nombre, descripcion, precio, stock) VALUES (:nombre, :descripcion, :precio, :stock)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nombre' => $nombre, 'descripcion' => $descripcion, 'precio' => $precio, 'stock' => $stock]);

    header('Location: index.php');
    exit;
}

echo '<form action="create.php" method="post">';
echo 'Nombre: <input type="text" name="nombre" required><br>';
echo 'Descripción: <textarea name="descripcion"></textarea><br>';
echo 'Precio: <input type="number" step="0.01" name="precio" required><br>';
echo 'Stock: <input type="number" name="stock" required><br>';
echo '<input type="submit" value="Crear Libro">';
echo '</form>';
?>