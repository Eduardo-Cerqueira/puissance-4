SELECT message, username, message_time,
	CASE 
      WHEN chat.player_id = user.id THEN 'true'
      ELSE 'false'
    END
FROM chat
INNER JOIN user ON chat.player_id = user.id
WHERE DATE_SUB(current_time(), INTERVAL 1 DAY) 