CREATE DATABASE libreria;

USE libreria;
CREATE TABLE libros(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL
    
);

INSERT INTO libros(nombre,descripcion,precio,stock) VALUES
('Luna de Plutón', 'Libro de ciencia ficción',22.50 ,30),
('Don Quijote', 'Novela caballeresca', 17.50, 50),
('El último trabajo del Señor Luna','Libro de suspense', 20.00, 15);