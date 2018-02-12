<?php
	$stmt = $db->prepare('SELECT postID, postTitle, postCont, postDate FROM blog_posts WHERE postID = :postID');
	$stmt->execute(array(':postID' => $_GET['id']));
	$row = $stmt->fetch();
?>
