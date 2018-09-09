<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Set Charset
mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM Runnn";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "userID: " . $row["userID"]. " - Name: " . $row["firstname"]. " " . $row["Nationality"]." " . $row["age"]." " . $row["Address"].
		" " . $row["gender"]." " .$row["date"]." ".$row["Tel"]." ".$row["email"]." ".$row["disease"]." ".$row["size"].
        " ".$row["type"]."<br>";
    }
} else {
    echo "0 results";
}

?>