CREATE DATABASE IF NOT EXISTS patients;
USE patients;

DROP TABLE IF EXISTS patients;

create table patients (
    id int auto_increment not null,
    first_name varchar(10) not null,
    last_name varchar(10) not null,
    email varchar(50) not null,
    gender varchar(10) not null,
    --  phone_number varchar(20) not null,
    PRIMARY KEY(id)
);

create table tests (
    id int not null,
    results varchar(10) not null,
    date_test date not null,
    FOREIGN KEY(id) REFERENCES patients (id) ON DELETE CASCADE
);

insert into patients (first_name, last_name, email, gender)
values
('Mike', 'Navarro', 'mike@navarro.com', 'male'),
('Julia', 'Santos', 'julia@santos.com', 'female'),
('Jorge', 'Pistacho', 'jorge@pistacho.com', 'male');

insert into tests ( id, results, date_test)
values
(1, 'positive', 20210221),
(2, 'negative', 20210221),
(3, 'positive', 20210221);
