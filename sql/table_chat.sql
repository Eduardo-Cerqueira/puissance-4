CREATE TABLE
  chat (
    id int(255) unsigned NOT NULL AUTO_INCREMENT,
    game_id int(255) DEFAULT NULL,
    player_id int(255) DEFAULT NULL,
    message varchar(255) DEFAULT NULL,
    message_time timestamp NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (id)
  ) 