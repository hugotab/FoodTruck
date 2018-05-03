<?php
session_start();
unset($_SESSION['UserPdo']);
//$_SESSION['flash']['success'] = 'Vous etes maintenant déconnecté';
header('Location: ../../index.php');
