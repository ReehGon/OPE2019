Create database OPETCC;
Use OPE;

Create Table Tb_Cliente(
	idCliente int primary key auto_increment,
    Nome varchar(100),
    Idade varchar(3),
    Sexo varchar(40),
    Telefone varchar(10),
    Celular varchar(11)
);
drop table Tb_Cliente;
select * from tb_Cliente;

Create Table Tb_Produto(
	idProduto int primary key auto_increment,
    Nome_Produto varchar(150),
    Nome_Distribuidora varchar(150),
    Valor float(6,2),
    Validade date,
    Qtd_em_Estoque int(5)
);

create Table Usuario(
	ID_usuario int primary key auto_increment,
    Login varchar(300) NOT NULL,
    Senha varchar(300) NOT null
       
);

select * from Usuario where Login = "teste2" and Senha = md5("teste2");

select * from Usuario where Login = "teste" and senha = md5("senhateste");

select * from Usuario;

drop table Usuario;

insert into Usuario (Login, Senha) values ('teste', md5('senhateste'));


SELECT * FROM Usuario;

select * from Tb_Cliente;

insert into Tb_Cliente 
(Nome, Idade, Sexo, Telefone_Fixo, Telefone_Celular)
values
('Bianca Juliana Alessandra Ferreira','22','F','1134786948','11997545536');

insert into Tb_Cliente 
(Nome, Idade, Sexo, Telefone_Fixo, Telefone_Celular)
values
('Brenda Renata Aragão','25','F','1135577238','11978469753');

insert into Tb_Cliente 
(Nome, Idade, Sexo, Telefone_Fixo, Telefone_Celular)
values
('Emanuelly Adriana da Silva','21','F','1134588792','11945627788');

insert into Tb_Cliente 
(Nome, Idade, Sexo, Telefone_Fixo, Telefone_Celular)
values
('Luan Gustavo Julio Carvalho','29','M','1135465723','11979896822');

insert into Tb_Cliente 
(Nome, Idade, Sexo, Telefone_Fixo, Telefone_Celular)
values
('Maitê Luiza Peixoto','26','F','1137985260','11993945660');

select * from Tb_Produto;

insert into Tb_Produto
(Nome_Produto, Nome_Distribuidora)
values
('Cenzi','Botanica Mineral');

insert into Tb_Produto
(Nome_Produto, Nome_Distribuidora)
values
('Fluido Monodoze','Mezzo');

insert into Tb_Produto
(Nome_Produto, Nome_Distribuidora)
values
('Protetor Solar 18hs','Cosmobeauty');

insert into Tb_Produto
(Nome_Produto, Nome_Distribuidora)
values
('Serum','Tulipia');

insert into Tb_Produto
(Nome_Produto, Nome_Distribuidora)
values
('Efeito pele nova','Bioage');

insert into Tb_Produto
(Nome_Produto, Nome_Distribuidora)
values
('Esfoliante','Spa da pele');

select count(*) as total from Tb_Cliente where Nome ='teste';
