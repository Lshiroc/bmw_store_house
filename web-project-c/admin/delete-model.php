<?php
// databaseye elave etmek ucun
include "../controller/database.php";

// silinecek masinin id-ni almaq
$id = $_GET['id'];

// database de silmek ucun 
$sql = "DELETE FROM carseries WHERE id='$id'";
$result = mysqli_query($conn, $sql);

// errorlari yoxlamaq ucun olmayacaq yeqin
if (!$result) {
  echo "Error: " . mysqli_error($conn);
} else {
  // admin panele geri qayitmasi ucun
  header("Location: series-models.php");
}

// databaseden cixis
mysqli_close($conn);
?>