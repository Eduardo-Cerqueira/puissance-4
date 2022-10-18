/*Show messages from the last 24 hours*/

SELECT
  username,
  message,
  game_time,
  CASE
    player_id
    WHEN player_id = Users.id THEN "true"
    ELSE "false"
  END as estExpediteur
FROM
  Message
  INNER JOIN Users ON Users.id = Message.player_id
WHERE
  game_time >= (CURRENT_TIMESTAMP() - INTERVAL 1 DAY)

/*
On affiche le nom du joueur, le message et l'heure d'envoi du message effectuées dans les 24 dernières heures.
Pour obtenir le nom du joueur, on lie la table Users et Message.
On utiliser Case pour définir si l'id donné du joueur est celui du message envoyé.
*/