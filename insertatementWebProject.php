<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

require("connect.php");

$sql = "INSERT INTO products (name, price, quantity, category_id, comments,Images  ) VALUES ( ?, ?, ?, ?, ?,?)";

if($stmt = $link->prepare($sql)){

    if (isset($_FILES['FileImage'])) {
      if ($_FILES['FileImage']['error'] > 0)
          echo "Upload lỗi rồi!";
      else {
          move_uploaded_file($_FILES['FileImage']['error'], 'images/' . $_FILES['FileImage']['name']);

      }
    }
    $img = $_FILES['FileImage']['name'];


   $stmt->bind_param("siisss", $name, $price, $quantity, $category_id, $comments, $Images);
   mysqli_set_charset($link,"utf8");
   $name = $_POST['Producs_name'];
   $price = $_POST['Price'];
   $quantity = $_POST['Quantity'];
   $category_id = $_POST['category'];
   $comments = $_POST['comment'];
   $Images = $_POST['FileImage'];
   $stmt->execute();
   
  
   echo "Records inserted successfully.";
} else{
   echo "ERROR: Could not prepare query: $sql. " . $link->error;
}

$stmt->close();

?>




