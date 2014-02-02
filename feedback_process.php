	<?php

//include database related function
require_once("model/db.php");


if ($_POST['action']==1) {
	//insert
	$email = trim($_POST['email']); 
	$type = $_POST['type'];
	$content = nl2br(addslashes(trim($_POST['content']))); 
	$result = insert_feedback($email, $type, $content);
} elseif ($_POST['action']==2) {
	//update
	$postid = explode(',', $_POST['postid']);
	foreach ($postid as $id) {
		$result = update_feedback($id, 1);
	}
} elseif ($_POST['action']==3) {
	//update
	$postid = explode(',', $_POST['postid']);
	foreach ($postid as $id) {
		$result = update_feedback($id, 0);
	} 
} elseif ($_POST['action']==4) {
	//update
	$postid = explode(',', $_POST['postid']);
	foreach ($postid as $id) {
		$result = delete_feedback($id);
	}
}
//callback
if($result) {
		$arr['success'] = 1; 
} else {
		$arr['success'] = 0; 
}
echo json_encode($arr);
?>





