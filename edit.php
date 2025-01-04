<?php
include 'config.php';

// Comprobando si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $id = $_POST['id'];

    $stmt = $pdo->prepare("UPDATE libros SET nombre = ?, precio = ? WHERE id = ?");
    $stmt->execute([$nombre, $precio, $id]);

    header('Location: index.php');
    exit;
}

$id = $_GET['id'];
$stmt = $pdo->query("SELECT * FROM libros WHERE id = $id");
$libros = $stmt->fetch();

?>

<h2>Editar Libros</h2>

<form action="edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $libros['id']; ?>">
    Nombre: <input type="text" name="nombre" value="<?php echo $libros['nombre']; ?>"><br>
    Precio: $<input type="text" name="precio" value="<?php echo $libros['precio']; ?>"><br>
    <input type="submit" value="Guardar Cambios">
</form>
