<?php
	//include config
	require_once('../includes/config.php');

	//if not logged in redirect to login page
	if(!$user->is_logged_in()){ header('Location: login.php'); }
	
	try {

        $stmt = $db->prepare('SELECT memberID, username, email FROM blog_members WHERE memberID = :memberID') ;
        $stmt->execute(array(':memberID' => $_GET['id']));
        $row = $stmt->fetch(); 

    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>
