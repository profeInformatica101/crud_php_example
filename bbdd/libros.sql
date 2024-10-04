CREATE DATABASE libreria;

USE libreria /*tienda*/;
CREATE TABLE libros /*jabones*/(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL
);

INSERT INTO libros (nombre, descripcion, precio, stock) VALUES
('Memorias de Idhún', 'libro de fantasía de dragones y uniconios', 14.99, 45),
('Colección Spiderman nº1', 'Primer volumen de una colección de comics de spiderman ', 9.99, 40),
('Mar embravecido', 'historia emotiva sobre un pescador', 19.89, 60),
('Manual de mecánica', 'Manual de mećanica de vehículos motorizados', 29.99, 10),
('La vida extraterreste', 'Investigación sobre la vida en el universo que conocemos', 25.89, 60),