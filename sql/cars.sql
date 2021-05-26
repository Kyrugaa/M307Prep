DROP DATABASE IF EXISTS car_db;
CREATE DATABASE car_db;
USE car_db;

DROP USER IF EXISTS USER 'cars'@'%';
CREATE USER 'cars'@'%' IDENTIFIED BY 'cars';
GRANT SELECT ON car_db.* TO 'cars'@'%';
FLUSH PRIVILEGES;

CREATE TABLE auto (
id INT UNSIGNED NOT NULL AUTO_INCREMENT,
marke VARCHAR(45) NOT NULL,
modell VARCHAR(45) NOT NULL,
PRIMARY KEY (id)
);

INSERT INTO auto VALUES
(1,"VW","Lupo"),
(2,"VW","Polo"),
(3,"VW","Golf"),
(4,"VW","Passat"),
(5,"Audi","A3"),
(6,"Audi","A4"),
(7,"Audi","A5"),
(8,"Audi","A6"),
(9,"Audi","A8"),
(10,"Renault","Twingo"),
(11,"Renault","Clio"),
(12,"Renault","Kangoo"),
(13,"Renault","Captur"),
(14,"Renault","Megane"),
(15,"Subaru","Impreza"),
(16,"Subaru","Legacy"),
(17,"Subaru","Forester"),
(18,"Subaru","Acent"),
(19,"Subaru","Outback");
