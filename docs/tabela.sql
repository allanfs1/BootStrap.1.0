
CREATE database agenda;
USE agenda;

CREATE TABLE tb_agenda(
 id INTEGER NOT NULL PRIMARY KEY,
 nome varchar(50) NOT NULL,
 fone_res varchar(15),
 fone_cel varchar(15) NOT NULL,
 email  varchar(50)  NOT NULL,
 dt_nasc DATE,
 endereço varchar(60),
 bairro varchar(40),
 cp varchar(9),
 uf char(2),
 foto varchar(200),
 facebook varchar(200),
 twitter varchar(200),
 instagram varchar(200)


);