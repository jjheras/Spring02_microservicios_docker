CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT,
    categoria VARCHAR(50) NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    cantidad INT NOT NULL
);

INSERT INTO productos (nombre, descripcion, categoria, precio, cantidad) VALUES
('Camisa de algodón', 'Camisa de manga larga, ideal para el uso diario.', 'Camisas', 29.99, 50),
('Pantalones vaqueros', 'Pantalones vaqueros de corte recto y lavado oscuro.', 'Pantalones', 39.99, 30),
('Zapatillas deportivas', 'Zapatillas deportivas cómodas y ligeras para correr o hacer ejercicio.', 'Calzado', 49.99, 20);