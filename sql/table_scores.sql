CREATE TABLE
  scores (
    id int(255) unsigned NOT NULL AUTO_INCREMENT,
    player_id int(255) DEFAULT NULL,
    game_id int(255) DEFAULT NULL,
    game_difficulty int(255) DEFAULT NULL,
    game_score int(255) DEFAULT NULL,
    game_time timestamp NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (id)
  ) 