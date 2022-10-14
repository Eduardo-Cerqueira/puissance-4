CREATE TABLE
  user (
    id int(255) unsigned NOT NULL AUTO_INCREMENT,
    mail varchar(255) DEFAULT NULL,
    password varchar(255) DEFAULT NULL,
    username varchar(255) DEFAULT NULL,
    register timestamp NOT NULL DEFAULT current_timestamp(),
    last_connexion timestamp NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (id)
  ) 
  

