CREATE TABLE devoluciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT NOT NULL,
    producto_id INT NOT NULL,
    motivo VARCHAR(255) NOT NULL,
    fecha_devolucion DATE NOT NULL
);

CREATE TABLE seguimiento_pedido (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT NOT NULL,
    pedido_id INT NOT NULL,
    estado_pedido VARCHAR(100) NOT NULL,
    fecha_estado TIMESTAMP NOT NULL
);

CREATE TABLE historial_compras (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT NOT NULL,
    producto_id INT NOT NULL,
    cantidad INT NOT NULL,
    fecha_compra TIMESTAMP NOT NULL
);