create database controlechaves;
use controlechaves;

create table funcionario (matricula VARCHAR(20) PRIMARY KEY NOT NULL, nome VARCHAR(30), senha VARCHAR(20));
create table administrador (identificacao INT PRIMARY KEY NOT NULL, senha VARCHAR(20));
create table chave (num_chave INT PRIMARY KEY NOT NULL, descricao VARCHAR(50));
CREATE TABLE reserva (turno VARCHAR(5) not null);
alter table reserva add column num_chave int;
alter table reserva add column id_professor varchar(20);
alter table reserva add foreign key (num_chave) references chave (num_chave);
alter table reserva add foreign key (id_professor) references funcionario (matricula);
create table historico(matricula VARCHAR(20), nome VARCHAR(30), num_chave int, dataReserva date);
alter table historico add column turno VARCHAR(5);

create view view_chaves as
select f.matricula, r.num_chave, c.descricao, r.turno from reserva r left join funcionario f
on r.id_professor=f.matricula join chave c
on r.num_chave=c.num_chave;

create view view_frc as 
select f.nome, r.num_chave, c.descricao, r.turno from reserva r left join funcionario f
on r.id_professor=f.matricula join chave c
on r.num_chave=c.num_chave;

create view insertion as 
select f.nome, f.matricula, num_chave, turno from reserva r left join funcionario f
on r.id_professor=f.matricula;

delimiter //
create trigger insere_historico after insert
on reserva
for each row
begin
	insert into historico values(NEW.id_professor, (select nome from insertion where matricula=NEW.id_professor limit 1), NEW.num_chave, curdate(), (select turno from insertion where turno=NEW.turno limit 1));
end //
delimiter ;

insert into administrador values(123, "123");