<?php
$con = new mysqli('localhost','root','pass','db');
if($con->connect_errno){
  die('sorry, we are having');
}

// how to select
$sql = "SELECT * FROM register";
$result = $con->query($sql);
while ($row = $result->fetch_object()) {
  echo '<strong> Name :</strong> '.$row->user_name ,' ','<strong>Age : </strong>',$row->user_age.'<br>';
}
// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo $row["user_name"], $row["user_age"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }
$conn->close();


// how to insert
// $sql = "INSERT INTO register (user_name, user_age)
// VALUES ('hello', 22)";
//
// if ($con->query($sql) === TRUE) {
//     echo "Inserted successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
//
// $conn->close();

// how to update
// if($result = $con->query("UPDATE register SET user_age= '18' WHERE user_id = 5") or die(error))
// {
//   echo "Updated successfully";
// }


// how to delete
// $sql = "DELETE FROM register WHERE user_id=5";
//
// if ($con->query($sql) === TRUE) {
//     echo "Deleted successfully";
// } else {
//     echo "Error deleting record: " . $conn->error;
// }
//
// $conn->close();

?>
