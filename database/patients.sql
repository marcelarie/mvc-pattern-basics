CREATE DATABASE IF NOT EXISTS patients;
USE patients;

DROP TABLE IF EXISTS tests_info, tests, patients;

create table patients (
    id_pat int auto_increment not null,
    first_name varchar(10) not null,
    last_name varchar(10) not null,
    email varchar(50) not null,
    gender varchar(10) not null,
    age int not null,
    city varchar(10) not null,
    --  phone_number varchar(20) not null,
    PRIMARY KEY(id_pat)
);
create table tests_info (
    test_type varchar(10) not null,
    price int not null,
    PRIMARY KEY(test_type)
);
create table tests (
    id_test int auto_increment not null,
    id_pat int not null,
    test_type varchar(10) not null,
    results varchar(10) not null,
    date_test date not null,
    PRIMARY KEY(id_test),
    FOREIGN KEY(id_pat) REFERENCES patients (id_pat) ON DELETE CASCADE, 
    FOREIGN KEY(test_type) REFERENCES tests_info (test_type)
);



insert into patients (first_name, last_name, email, gender, age, city)
values
('Mike', 'Navarro', 'mike@navarro.com', 'male', 18, 'Sevilla'),
('Julia', 'Santos', 'julia@santos.com', 'female', 44, 'Barcelona'),
('Jorge', 'Pistacho', 'jorge@pistacho.com', 'male', 25, 'Madrid');

insert into tests (id_pat, test_type, results, date_test)
values
(1, 'PCR', 'positive', 20210221),
(2, 'PCR', 'negative', 20210221),
(3, 'Test Anticuerpo','positive', 20210221);

insert into tests_info ( test_type, price)
values
('PCR', 125),
('Test Anticuerpo', 15),
('Test Antigeno', 60);