<?php
session_start();
   unset($_SESSION['valid']);
   unset($_SESSION['timeout']);
   unset($_SESSION['user_id']);
   unset($_SESSION['email']);
   unset($_SESSION['player_id']);
   unset($_SESSION['game_id']);
   
   echo ('You are disconnected -> redirection to main page');
   header('Refresh: 2; URL = ../../index.php');
   ?>