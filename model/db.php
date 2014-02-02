<?php
require_once("config/config.php");


//connect to the database using the defined setting.
function connect_db() {
	$mysql = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD,DB_NAME);
	if(!$mysql) {
      echo "Cannot connect to database.";
      exit;
    }
  return $mysql;
}

//insert a feedback into the database
function insert_feedback($email, $type, $content) {
  $mysql = connect_db();
  $date = date('dS-M');
  $query = "insert into feedback values
          (NULL, \"".$date."\",\"".$email."\", \"".$type."\", \"".$content."\",0);";
  $result = mysqli_query($mysql, $query);
  if(!$result) {
      return false;
    } else {
      return true;
    }
}

//get a feedback information from the database
function get_feedback() {
  $id = 1;
  $mysql=connect_db();
  $query = "select * from feedback order by postid desc";
  $result = mysqli_query($mysql, $query);
  $row = mysqli_fetch_assoc($result);
  while ($row) {
    display_item($id, $row['postid'] ,$row['date'], $row['email'], $row['type'], $row['content'], $row['alr_read']);
    $row = mysqli_fetch_assoc($result);
    $id++;
  }
}

//$setting: 1 for set as read, 0 for set as unread
function update_feedback($id, $setting) {
  $mysql=connect_db();
  $query = "update feedback
            set alr_read = ".$setting."
            where postid = ".$id.";";
  $result = mysqli_query($mysql, $query);
  if(!$result) {
      return false;
    } else {
      return true;
    }
}

//delete a feedback from the database
function delete_feedback($id) {
  $mysql=connect_db();
  $query = "delete from feedback where postid =".$id.";";
  $result = mysqli_query($mysql, $query);
  if(!$result) {
      return false;
    } else {
      return true;
    }
}
?>