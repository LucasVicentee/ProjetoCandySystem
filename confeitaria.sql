create database confeitaria;

use confeitaria;

CREATE TABLE ingrediente (
    nome VARCHAR(100),
    codigo int,
    pk_id int auto_increment PRIMARY KEY,
    data_validade date,
    descricao VARCHAR(255),
    fk_estoque int,
    fk_receita int
);

CREATE TABLE Funcionario (
    telefone VARCHAR(14),
    endereco VARCHAR(255),
    nome VARCHAR(100),
    pk_cpf int auto_increment PRIMARY KEY,
    fk_estoque int,
    fk_funcoes int
);

CREATE TABLE receita (
    descricao VARCHAR(255),
    nome VARCHAR(50),
    pk_receita int auto_increment PRIMARY KEY,
    categoria VARCHAR(100)
);

CREATE TABLE estoque (
    quantidade int,
    pk_item_estoque int auto_increment PRIMARY KEY
);

CREATE TABLE Funcoes (
    pk_id int PRIMARY KEY,
    salario float,
    funcao VARCHAR(20)
);

CREATE TABLE produto (
    preco float,
    pk_produto int auto_increment PRIMARY KEY,
    fk_receita int
);
 
ALTER TABLE ingrediente ADD CONSTRAINT FK_ingrediente_2
    FOREIGN KEY (fk_estoque)
    REFERENCES estoque (pk_item_estoque)
    ON DELETE CASCADE;
 
ALTER TABLE ingrediente ADD CONSTRAINT FK_ingrediente_3
    FOREIGN KEY (fk_receita)
    REFERENCES receita (pk_receita)
    ON DELETE CASCADE;
 
ALTER TABLE Funcionario ADD CONSTRAINT FK_Funcionario_2
    FOREIGN KEY (fk_estoque)
    REFERENCES estoque (pk_item_estoque)
    ON DELETE RESTRICT;
 
ALTER TABLE Funcionario ADD CONSTRAINT FK_Funcionario_3
    FOREIGN KEY (fk_funcoes)
    REFERENCES Funcoes (pk_id)
    ON DELETE RESTRICT;
 
ALTER TABLE produto ADD CONSTRAINT FK_produto_2
    FOREIGN KEY (fk_receita)
    REFERENCES receita (pk_receita)
    ON DELETE CASCADE;