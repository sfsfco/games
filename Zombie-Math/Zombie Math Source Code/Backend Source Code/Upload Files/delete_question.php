<?php
include './init.php';

if(!empty($_POST["id"])) {
	$id = trim(strip_tags($_POST["id"]));
	$stmt = $connection->prepare("DELETE FROM questions WHERE id = ?");
	$stmt->bind_param("i", $id);
	$stmt->execute();
	$stmt->close();
	header('Location: manage_questions.php?msg=Question was successfully deleted.&typ=success');
}else{
	header('Location: manage_questions.php?msg=Question was not deleted.&typ=danger');
}