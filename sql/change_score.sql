UPDATE scores 
INNER JOIN game ON scores.game_id=game.id
SET game_score='120'
WHERE player_id='1' and game_difficulty='10'/*en fonction de la dif*/ 