<?php
$id=filter_input(INPUT_GET,"id",FILTER_SANITIZE_STRING);
include_once("config.php");
$sql = "DELETE FROM student WHERE roll_no='$id'";

if ($conn->query($sql) === TRUE) {
echo "<script>";
echo"
alert('Record deleted !');
";

echo "window.location.href='../index.php'";
echo "</script>";
} else {
    echo "Error deleting record: " . $conn->error;
}
?>