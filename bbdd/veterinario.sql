CREATE DATABASE veterinario;

USE veterinario;
CREATE TABLE animales (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT,
    peso DECIMAL(10, 2) NOT NULL,
    raza TEXT,
    tipo TEXT

);

INSERT INTO jabones (nombre, descripcion, peso, raza, tipo) VALUES
('Kronos', 'Jabón artesanal de lavanda', 5.99, 50),
