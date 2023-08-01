<?php

include './core/core.php';
if($_GET&&!empty($_GET["grade"])&&!empty($_GET["skill"])&&!empty($_GET["id"])){

	$grade = trim(strip_tags($_GET["grade"]));
	$skill = trim(strip_tags($_GET["skill"]));

	$stmt = $connection->prepare("SELECT * FROM questions WHERE grade=? AND skill=? order by RAND()"); 
	$stmt->bind_param("ss", $grade, $skill);
	$stmt->execute();
	$raw = $stmt->get_result();
	$result = $raw->fetch_assoc();
	$response = array(
		'question' => $result['question'],
		'answer' => $result['answer'],
	 );

}else{
	$response = array(
		'question' => null,
		'answer' => null,
	 );
}

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-type: application/json');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"".$_GET["id"].".json"); 
echo '{"c2dictionary":true, "data":'.json_encode($response).'}';
$connection->close();
exit;