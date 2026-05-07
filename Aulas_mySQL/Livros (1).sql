CREATE DATABASE IF NOT EXISTS Sebo_books;
USE Livros;

CREATE TABLE cadlivros (
    id int not null primary key,
    titulo varchar(255) not null,
    autor char(255) not null,
    idade int,
    ano_publicacao char(10)
);

DESC cadlivros;

RENAME TABLE cadlivros TO livros;
ALTER TABLE livros MODIFY COLUMN ano_publicacao int;
ALTER TABLE livros ADD COLUMN genero varchar(50);
ALTER TABLE livros ADD COLUMN quant_disponivel int;
ALTER TABLE livros MODIFY COLUMN titulo varchar(50) not null;
ALTER TABLE livros DROP COLUMN idade;
ALTER TABLE livros CHANGE ano_publicacao anopubl int;
ALTER TABLE livros CHANGE quant_disponivel quantdisp int;
ALTER TABLE livros MODIFY COLUMN anopubl int not null;
ALTER TABLE livros ADD COLUMN editora varchar(50) not null;
DESC livros;