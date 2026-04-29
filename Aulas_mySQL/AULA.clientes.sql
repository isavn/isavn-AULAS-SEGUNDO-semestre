CREATE DATABASE empresa_congelados;
USE empresa_congelados;

CREATE TABLE clientes (
  ID_CLIENTE INT NOT NULL PRIMARY KEY,
  NOME VARCHAR(40) NOT NULL,
  ENDERECO VARCHAR(60) NOT NULL,
  REFERENCIA VARCHAR(40), -- Pode ser vazio (NULL)
  TELEFONE VARCHAR(20)
);

CREATE TABLE cardapio (
  COD_PRATO INT NOT NULL PRIMARY KEY,
  DESCRICAO VARCHAR(40) NOT NULL,
  PRECO DECIMAL(10, 2),
  DATA_ALTERACAO DATE
);

CREATE TABLE comandas (
  NUM_COMANDA INT NOT NULL PRIMARY KEY,
  ID_CLIENTE INT,
  COD_PRATO INT
);

DESC clientes;
DESC cardapio;
DESC comandas;

-- Inserindo 5 clientes (sendo 3 sem referência conforme a dica)
INSERT INTO clientes VALUES (1, 'Isabella Vieira', 'Rua das Flores, 10', 'Perto da Igreja', '11988887777');
INSERT INTO clientes VALUES (2, 'Leandro Pereira', 'Av. Central, 500', NULL, '11977776666');
INSERT INTO clientes VALUES (3, 'Elaine Maria', 'Rua da Liberdade, 22', 'Ao lado do Mercado', '11966665555');

-- Inserindo 3 itens no cardápio
INSERT INTO cardapio VALUES (10, 'Lasanha Congelada', 25.50, '2024-05-20');
INSERT INTO cardapio VALUES (20, 'Nhoque ao Sugo', 22.00, '2024-05-21');
INSERT INTO cardapio VALUES (30, 'Feijoada Pronta', 35.00, '2024-05-22');

#inserção em lote (10 comandas múltiplas)  
INSERT INTO comandas VALUES 
(1, 1, 10),
(2, 2, 20),
(3, 3, 30),

(4, 4, 10),
(5, 5, 20),
(6, 1, 30),

(7, 2, 10),
(8, 3, 20),
(9, 4, 30),
(10, 5, 10);

SELECT * FROM clientes;
SELECT * FROM cardapio;
SELECT * FROM comandas;