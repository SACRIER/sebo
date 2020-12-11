create database sebo;
use sebo;

create table admin(
	id int unsigned auto_increment not null,
    login varchar(30) not null,
    senha varchar(30) not null,
    primary key(id)
);

insert into admin values(null,'lucasmota@gmail.com','lucas123');
select * from admin;

create table cadastro(
	id int unsigned auto_increment not null,
    email varchar(50) not null,
    senha varchar(30) not null,
    nomecompleto varchar(60) not null,
    endereco varchar(40) not null,
    bairro varchar(40) not null,
    cidade varchar(50) not null,
    estado varchar(50) not null,
    cep int not null,
    primary key(id)
    );
    select * from cadastro;
    
    ALTER TABLE cadastro ADD cpf varchar(20) not null after senha;
    create table entrega(
    id int unsigned auto_increment not null,
    cep int not null,
    estado varchar(50) not null,
    bairro varchar(70) not null,
    pontoref varchar(100) not null,
    cidade varchar(60) not null,
    endereco varchar(80) not null,
    numcasa int not null,
    primary key(id)
    ); 
    select * from cadastro;
    
	create table comentarios(
    id int unsigned auto_increment not null,
    email varchar(80) not null,
    quando date not null,
    comentario varchar(255) not null,
    primary key(id)
    );
    ALTER TABLE comentarios ADD COLUMN id2 int not null after id;
   
    select * from comentarios;
  
   create table livro(
	id int unsigned auto_increment not null,
    titulo varchar(50) not null,
    autor varchar(50) not null,
    colecao varchar(50) not null,
    editora varchar(50) not null,
    ano int not null,
    idioma varchar(20) not null,
    encadernacao varchar(12) not null,
    paginas int not null,
    altura decimal(10,2) not null,
    largura decimal(10,2) not null,
    descricao varchar(1000) not null,
    conservacao varchar(1000) not null,
    preco double not null,
    foto1 varchar(80) not null,
    foto2 varchar(80) not null,
    foto3 varchar(80) not null,
    primary key(id)
);
ALTER TABLE livro DROP COLUMN preco;
ALTER TABLE livro ADD preco decimal(10,2) not null after conservacao;
ALTER TABLE livro ADD email varchar(50) not null after foto3;
ALTER TABLE livro ADD genero varchar(40) not null after idioma;

select * from cadastro;
    select * from livro;
    create table denuncia(
    id int unsigned auto_increment not null,
    titulo varchar(80) not null,
    email varchar(80) not null,
    mensagem varchar(255) not null,
    primary key(id)
    );
    
 create table carrinho( 
 id int unsigned auto_increment not null,
 titulo varchar(50) not null,
foto1 varchar(500) not null,
preco double not null,
primary key(id)
);
select * from carrinho;
 ALTER TABLE carrinho ADD carrinho_id int not null after id;
 create table exibir(
	id int unsigned auto_increment not null,
    extitulo varchar(50) not null,
    exautor varchar(50) not null,
    exfoto1 varchar(80) not null,
    primary key(id)
    );
    select * from exibir;

select * from entrega;

create table faleconosco(
id int unsigned auto_increment not null,
nome varchar(80) not null,
email varchar(80) not null,
mensagem varchar(1000) not null,
primary key(id)
);
ALTER TABLE faleconosco ADD COLUMN tipo varchar(50) not null after nome;
select * from faleconosco;

create table desejo(
id int unsigned auto_increment not null,
titulo varchar(80) not null,
autor varchar(90) not null,
idioma varchar(80) not null,
preco double not null,
primary key(id)
);
select * from desejo;
ALTER TABLE desejo ADD produto_id int not null after id;
create table carrinhoagora( 
 id int unsigned auto_increment not null,
 comprar_id varchar(50) not null,
titulo varchar(500) not null,
preco double not null,
primary key(id)
);
create table viewgenero(
id int unsigned auto_increment not null,
genero varchar(80) not null,
primary key(id)
);
ALTER TABLE viewgenero ADD email varchar(80) not null after id;
select * from viewgenero;
create table finaliza(
id int unsigned auto_increment not null,
formapagamento varchar(50) not null,
numeropedido int not null,
primary key(id)
);
select * from finaliza;




create table frete(
id int unsigned auto_increment not null,
preco decimal(10,2) not null,
cep int not null,
total decimal(10,2) not null,
primary key(id)
);
select * from frete;
