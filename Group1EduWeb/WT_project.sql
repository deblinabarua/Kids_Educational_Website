CREATE DATABASE users;
USE users;
CREATE TABLE login(`username` varchar(30), `f_name` varchar(30), `l_name` varchar(30), `telephone` varchar(10), `pwd` varchar(30),  PRIMARY KEY(`username`));
INSERT INTO login VALUES('GreatNatsu','Natsu','Dragneel','1234567890','HappyCat'),('LuckyLucy','Lucy','Heartfilia','2345678901','PlueDog');
SELECT * FROM login;