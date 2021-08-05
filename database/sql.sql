create database Projeto_AIX;
use Projeto_AIX;
create table Curso(
	id int not null auto_increment,
    nome varchar(100) not null,
    primary key(id)    
);

create table Turma(
	id int not null auto_increment,
    nome varchar(50),
	primary key(id) 
); 

create table Aluno(
    matricula int not null auto_increment,
    situacao_aluno varchar(7) not null,
    cep varchar(9) not null,
    logradouro varchar(100) not null,
    numero varchar(5) not null,
    bairro varchar(100) not null,
    cidade varchar(100) not null,
    estado varchar(3) not null,
    complemento varchar(150) not null,
    id_curso int not null,
    id_turma int not null,
    data_matricula Date,
    FOREIGN KEY (id_curso) REFERENCES Curso(id),
    FOREIGN KEY (id_turma) REFERENCES Turma(id),
    primary key(matricula)
);
