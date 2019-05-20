create database ex2;

use ex2;

create table courses(
    id int auto_increment primary key,
    name varchar(100),
    start_date date
);

create table contacts(
    id int auto_increment primary key,
    name varchar(100),
    email varchar(100),
    message text
);

create table news(
    id int auto_increment primary key,
    date date,
    title varchar(100),
    body text
);

insert into courses(name,start_date) values 
('Teste','2019-05-04'),
('Testando','2018-04-05'),
('Testezao','2016-05-04'),
('Testezinho','2019-01-24'),
('Testezito','2018-09-10');

insert into news(date,title,body) values
('2019-01-24','Potato falls from sky','Poof it hit the ground oh my god cover your head'),
('2019-02-10','Peanut falls from sky','Poof it hit the ground oh my god get your monkey out'),
('2019-03-01','Man falls from potato','what has our world come to'),
('2019-04-06','Potato Conquers the world','All hail our mighty lord potato'),
('2019-05-20','Potato! Potato! Potato! Potato! Potato! ','Potato! Potato! Potato! Potato! Potato! Potato! Potato! Potato! Potato! ');

insert into contacts(name,email,message) values
('Sr Herminio', 'reidelas@gmail.com', 'Herminio verdadeiramente rei do mundo'),
('Sra Herminia', 'nulherdoreidelas@gmail.com', 'Herminia verdadeiramente rainha do mundo'),
('Josefina', 'omeutacoestafrio@gmail.com', 'Marcada por um taco quente que gela a espinha'),
('Ideias', 'semelas@gmail.com', 'Procuram-se'),
('Jervásio', 'gostodomangusto@gmail.com', 'Homem caracterizado pela sua barba barbuda');