CRIAR  DATABASE  livraria DEFAULT CHARACTER SET utf8;
USE livraria;

CRIAR  TABELA  livros (
    id INTEGER  NÃO NULL AUTO_INCREMENT PRIMARY KEY ,
    nome VARCHAR ( 255 ) NÃO NULL ,
    autor VARCHAR ( 255 ),
    preco VARCHAR ( 255 )
);