SELECT game_name,username,game_difficulty,game_score 
FROM scores 
INNER JOIN user,game 
WHERE scores.game_id = game.id and scores.player_id = user.id
ORDER BY game_name ASC, game_difficulty DESC, game_score ASC