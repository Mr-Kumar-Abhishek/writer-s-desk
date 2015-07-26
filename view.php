<?php
$cm=$db->prepare('SELECT pid, ptitle, pcont, pdate FROM posts WHERE pid = :pid');
$cm->excute(array(':pid' => $_GET['id']));
$row=$cm->fetch();
if($row['pid']==''){
	header('Location: ./');
	exit;
}
echo '<div>';
	echo '<h1>'.$row['pid'].'<h1>';
	echo '<p>Posted on '.date('jS M Y', strtotime($row['pdate'])). '<p>';
echo '</div>';
?>
