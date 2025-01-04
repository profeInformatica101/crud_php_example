<?php
include 'config.php';

$stmt = $pdo->query('SELECT * FROM libros');
$libros = $stmt->fetchAll();
?>

<h2>Listado de libros</h2>

<!-- Botón para crear un nuevo libro -->
<a href="create.php">Crear nuevo libro</a>
<br><br>

<ul>
<?php foreach ($libros as $libro): ?>
    <li>
        <?php echo $libro['nombre']; ?> - $<?php echo $libro['precio']; ?>
        <a href="edit.php?id=<?php echo $libro['id']; ?>">Editar</a>
        <a href="delete.php?id=<?php echo $libro['id']; ?>">Eliminar</a>
    </li>
<?php endforeach; ?>
</ul>
