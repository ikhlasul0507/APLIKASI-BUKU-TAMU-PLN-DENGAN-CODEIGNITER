<?php
require_once('./include/mysqli_connect.php');

$postDetails = array();

$search_key = $_GET['term'];

//get rows query
$query = "SELECT * FROM li_ajax_post_load where post_title like '%$search_key%'";
$result = mysqli_query($con, $query);

//number of rows
$rowCount = mysqli_num_rows($result);

if($rowCount > 0){
    while($row = mysqli_fetch_assoc($result)){
			$postDetails[] = ucfirst($row['post_title']);
	}
}
echo json_encode($postDetails);
?>