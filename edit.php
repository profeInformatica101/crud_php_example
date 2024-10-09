<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    $stmt = $pdo->prepare("UPDATE libros SET nombre = ?, descripcion = ?, precio = ?, stock = ? WHERE id = ?");
    $stmt->execute([$nombre, $descripcion, $precio, $stock, $id]);

    header('Location: index.php');
    exit;
}

$id = $_GET['id'];
$stmt = $pdo->query("SELECT * FROM libros WHERE id = $id");
$libro = $stmt->fetch();

echo '<form action="edit.php" method="post">';
echo '<input type="hidden" name="id" value="' . $libro['id'] . '">';
echo 'Nombre: <input type="text" name="nombre" value="' . $libro['nombre'] . '" required><br>';
echo 'Descripción: <textarea name="descripcion">' . $libro['descripcion'] . '</textarea><br>';
echo 'Precio: <input type="number" step="0.01" name="precio" value="' . $libro['precio'] . '" required><br>';
echo 'Stock: <input type="number" name="stock" value="' . $libro['stock'] . '" required><br>';
echo '<input type="submit" value="Guardar Cambios">';
echo '</form>';
?>