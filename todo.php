<?php
require_once('connect.php');
    if(isset($_POST['todo'])
    {
        $todo = $_POST['todo'];
    })

$sql = INSERT into todoapp (todo) VALUES ('$todo');
$stmt = $connect -> prepare($sql);
$stmt -> execute();
?>
