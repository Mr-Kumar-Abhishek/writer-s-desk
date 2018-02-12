<?php
	$stmt = $db->prepare('SELECT post_id, postTitle, postCont, postDate FROM blog_posts WHERE postID = :postID');
	$stmt->execute(array(':postID' => $_GET['id']));
	$row = $stmt->fetch();
	
	if($row['post_id'] == ''){
		header('Location: ./');
		exit;
	}
?>
