CREATE DATABASE gestao_brinquedos;
USE gestao_brinquedos;

CREATE TABLE brinquedo(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nome VARCHAR(250) NOT NULL,
    categoria VARCHAR(250) NOT NULL,
    faixa_etaria ENUM ('6-12 meses', '1-3 anos', '3-6 anos', '7-10 anos') NOT NULL,
    preco FLOAT NOT NULL,
    quantidade INT NOT NULL
);

INSERT INTO brinquedo (nome, categoria, faixa_etaria, preco, quantidade) VALUES
('Cubo magico', 'jogo', '7-10 anos', '20', '200');