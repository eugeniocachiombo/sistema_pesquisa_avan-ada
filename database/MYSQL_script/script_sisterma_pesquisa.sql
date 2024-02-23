
create database sistema_pesquisa_avancada;

use sistema_pesquisa_avancada;

create table cidadao_nacional (
    id int primary key auto_increment not null,
    nome varchar(60),
    numero_bi int,
    data_nascimento date,
    naturalidade varchar(20),
    nome_pai varchar(60),
    nome_mae varchar(60),
    data_emissao date,
    data_validade date,
    sexo enum('M', 'F'),
    estado_civil varchar(20),
    altura decimal(3,2),
    residencia varchar(30),
    provincia varchar(30)
);