<?php
include 'config.php';

// Comprobando si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $id = $_POST['id'];

    $stmt = $pdo->prepare("UPDATE libros SET nombre = ?, autor = ?, precio = ? WHERE id = ?");
    $stmt->execute([$nombre, $autor, $precio, $id]);

    header('Location: index.php');
    exit;
}

$id = $_GET['id'];
$stmt = $pdo->query("SELECT * FROM libros WHERE id = $id");
$libro= $stmt->fetch();

?>

<h2>Editar libro</h2>

<form action="edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $libro['id']; ?>">
    Nombre: <input type="text" name="nombre" value="<?php echo $libro['nombre']; ?>"><br>
    Autor: <input type="text" name="autor" value="<?php echo $libro['autor']; ?>"><br>
    Precio: $<input type="text" name="precio" value="<?php echo $libro['precio']; ?>"><br>
    <input type="submit" value="Guardar Cambios">
</form>
