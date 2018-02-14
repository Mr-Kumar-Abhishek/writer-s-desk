<?php
	//include config
	require_once('../includes/config.php');

	//if not logged in redirect to login page
	if(!$user->is_logged_in()){ header('Location: login.php'); }
	
	 
	try {

		$stmt = $db->prepare('SELECT postID, postTitle, postDesc, postCont FROM blog_posts WHERE postID = :postID');
		$stmt->execute(array(':postID' => $_GET['id']));
		$row = $stmt->fetch(); 

	} catch(PDOException $e) {
		echo $e->getMessage();
	}
	
	if(isset($_POST['submit'])){

		$_POST = array_map( 'stripslashes', $_POST );

		//collect form data
		extract($_POST);

		//very basic validation
		if($postID ==''){
			$error[] = 'This post is missing a valid id!.';
		}

		if($postTitle ==''){
			$error[] = 'Please enter the title.';
		}

		if($postDesc ==''){
			$error[] = 'Please enter the description.';
		}

		if($postCont ==''){
			$error[] = 'Please enter the content.';
		}
	}
	

?>


<form action='' method='post'>
    <input type='hidden' name='postID' value='<?php echo $row['postID'];?>'>

    <p><label>Title</label><br />
    <input type='text' name='postTitle' value='<?php echo $row['postTitle'];?>'></p>

    <p><label>Description</label><br />
    <textarea name='postDesc' cols='60' rows='10'><?php echo $row['postDesc'];?></textarea></p>

    <p><label>Content</label><br />
    <textarea name='postCont' cols='60' rows='10'><?php echo $row['postCont'];?></textarea></p>

    <p><input type='submit' name='submit' value='Update'></p>

</form>


