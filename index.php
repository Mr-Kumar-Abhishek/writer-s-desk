<?php
	try{
		$cm = $db->query('SELECT pid, ptitle, pdesc, pdate FROM posts ORDER BY pid DESC');
		while($row=$cm->fetch()){
			echo '<div>';
				echo '<h1><a href="view.php?id='.$row['pid'].'">'.$row['ptitle'].'</a></h1>';
				echo '<p>Published on '.date('jS M Y H:i:s', strtotime($row['pdate'])).'<p>';
				echo '<p><a href="view.php?id='.$row['pid'].'">View</a></p>';
			echo '</div>';
		}
	}catch(PDOException $e){
		echo $e->getMessage();
	}
?>