<?php require_once("conection.php");

echo $_POST['om'];
if (isset($_POST['om']))
{
  $kapo=$_POST;
  $sql = "INSERT INTO kapcsolatok (om, baratOM) VALUES (".$kapo['om'].",".$kapo['baratOm'].")";

if ($conn->query($sql) === TRUE) {
  echo "sikeres barátfelvétel";
} 
//$ki="/[a-zA-Z]+([ ][1-5])+;/ ";
$conn->close();
}
?>
