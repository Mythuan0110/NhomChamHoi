<?php
$name = $_POST["name"];
$price = $_POST["price"];

$fileName = "uploads/" . $_FILES["fileToUpload"]["name"];
$targetFile = "../" . $fileName;
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile);

require("../conn.php");

$sql = "INSERT INTO coffee(name, price,image)
VALUES ('$name', $price, '$fileName')";

if ($conn->query($sql) === TRUE) {
  header("Location: list.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>