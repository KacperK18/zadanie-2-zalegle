CREATE DATABASE football
create table regiony (
    id int(10) unsigned not null,
    nazwa_regionu VARCHAR(40) CHARACTER set utf8 DEFAULT NULL
);

insert into regiony (id, nazwa_regionu) values 
(1, 'Europa'),
(2, 'Ameryka Północna'),
(3, 'Ameryka Południowa'),
(4, 'Pozostałe ligi');

create table ligi(
    id int(10) unsigned not null AUTO_INCREMENT,
    nazwa VARCHAR(90),
    opis VARCHAR(250),
    region int(1) unsigned not null,
	PRIMARY KEY (id)
);


insert into ligi (nazwa ,opis , region) VALUES
('BVB', "Borussia Dortmund, niemiecki klub występujący w Bundeslidze", 1),
('Atletico Madrid', "Atletico Madrid, hiszpański klub występujący w La Liga Santander", 1),
('Spezia', "Spezia, włoski klub sportowy występujący w Seria A", 1);


