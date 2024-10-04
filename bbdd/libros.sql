CREATE DATABASE libreria;

USE libreria;
CREATE TABLE libros(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    autor VARCHAR(255),
    descripcion TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL,
);

INSERT INTO libros (nombre, autor, descripcion, precio, stock) VALUES
('Memorias de Idhún', 'Natalia Quintana' ,'libro de fantasía de dragones y uniconios', 14.99, 45),
('Colección Spiderman nº1', 'Stan Lee' ,'Primer volumen de una colección de comics de spiderman ', 9.99, 40),
('Mar embravecido', 'Marcos Lorente','historia emotiva sobre un pescador', 19.89, 60),
('Manual de mecánica', 'Rafael Brigada','Manual de mećanica de vehículos motorizados', 29.99, 10),
('La vida extraterreste', 'Stephen Hawking','Investigación sobre la vida en el universo que conocemos', 25.89, 60),