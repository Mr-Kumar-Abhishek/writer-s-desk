<?php
$cm=$db->prepare('SELECT pid, ptitle, pcont, pdate FROM posts WHERE pid = :pid');
$cm->excute(array(':pid' => $_GET['id']));
$row=$cm->fetch();
?>