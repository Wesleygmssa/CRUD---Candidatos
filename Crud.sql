
use crud;

create database crud;


Create table Candidatos(

id int auto_increment primary key,
Nome varchar(50) not null,
Sobrenome varchar(50) not null,
CPF varchar(20) not null,
RG varchar(20) not null,
Nome_Mae varchar(100) not null,
Nome_Pai varchar(100) not null
);

select * from Candidatos;

select * from Candidatos

INSERT INTO Candidatos VALUES ('Wesley', 'Guerra', '221.213.235-59', '595.597.159.12', 'Maria Guerra Ssa', 'Jose Guerra Ssa')


