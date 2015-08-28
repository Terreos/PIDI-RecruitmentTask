CREATE TABLE login(
id int(10) NOT NULL AUTO_INCREMENT,
username varchar(50) NOT NULL,
password varchar(50) NOT NULL,
PRIMARY KEY (id)
)
INSERT INTO login VALUES (null, 'root', '1234');

CREATE TABLE employees(
firstname varchar(50) NOT NULL,
surname varchar(50) NOT NULL,
branch varchar(50) NOT NULL,
station varchar(50) NOT NULL,
salary int(50) NOT NULL,
img varchar(50) NOT NULL
)