<?php
	//include config
	require_once('../includes/config.php');

	//if not logged in redirect to login page
	if(!$user->is_logged_in()){ header('Location: login.php'); }
	
	
?>


<table>
<tr>
    <th>Title</th>
    <th>Date</th>
    <th>Action</th>
</tr>

<?php
    try {

        $stmt = $db->query('SELECT post_id, postTitle, postDate FROM blog_posts ORDER BY postID DESC');
        while($row = $stmt->fetch()){
            
            echo '<tr>';
            echo '<td>'.$row['postTitle'].'</td>';
            echo '<td>'.date('jS M Y', strtotime($row['postDate'])).'</td>';
            ?>

            <td>
                <a href="edit-post.php?id=<?php echo $row['postID'];?>">Edit</a> | 
                <a href="javascript:delpost('<?php echo $row['postID'];?>','<?php echo $row['postTitle'];?>')">Delete</a>
            </td>
            
            <?php 
            echo '</tr>';

        }

    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>

</table>
