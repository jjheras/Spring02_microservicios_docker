CREATE TABLE 'usuarios' (
    'id' INT AUTO_INCREMENT PRIMARY KEY,
    'nombre' VARCHAR(255) NOT NULL,
    'email' VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO 'usuarios' ('nombre', 'email') VALUES
('Juan', 'juan@hotmail.com'),
('María', 'maria@hotmail.com'),
('Pedro', 'pedro@hotmail.com');