create database reserva;
use reserva;
create table item(
    id int auto_increment primary key,
    nome varchar(20) not null,
    descricao varchar(255),
    patrimonio varchar(6) not null
);
create table servidor(
    id int auto_increment primary key,
    nome varchar(50) not null,
    matricula varchar(20) not null unique,
    cpf varchar(14) not null unique,
    telefone varchar(14),
    email varchar(50),
    endereco varchar(100),
    dtn date not null
);
create table emprestimo(
    id int auto_increment primary key,
    id_item int not null,
    id_servidor int not null,
    data_emprestimo datetime not null,
    data_devolucao datetime not null,
    foreign key (id_item) references item (id),
    foreign key (id_servidor) references servidor (id)
);