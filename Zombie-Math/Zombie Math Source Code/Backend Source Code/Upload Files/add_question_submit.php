<?php
include './init.php';
if($_POST&&!empty($_POST["question"]) && !empty($_POST["answer"]) && !empty($_POST["skill"]) && !empty($_POST["grade"])) {
    $question = trim(strip_tags($_POST["question"]));
    $answer = trim(strip_tags($_POST["answer"]));
    $skill = trim(strip_tags($_POST["skill"]));
    $grade = trim(strip_tags($_POST["grade"]));

    $query = $connection->prepare("INSERT INTO `questions` (`grade`, `skill`, `question`, `answer`) VALUES (?, ?, ?, ?);");
    $query->bind_param("isss", $grade, $skill, $question, $answer);
    $query->execute();
    if($query->affected_rows === 0) header('Location: add_question.php?msg=Check entered values, question was not added.&typ=danger');
    $connection->close();
    header('Location: add_question.php?msg=Question was successfully added.&typ=success');
}