create table membre(
    id_membre integer primary key not null auto_increment,
    nom char(100),
    prenom char(100),
    datenaissance date,
    sexe char,
    mail char(100),
    passwd char(255)
);
insert into membre values(null,"RAKOTOMALALA","Boodah","1997/11/24","M","boodahaina@gmail.com","123456");