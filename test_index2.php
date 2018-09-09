<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Set Charset
mysqli_set_charset($conn, "utf8");
 
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// define variables and set to empty values
$firstname = $Nationality = $gender = $date = $age= $Address = $Tel = $email = $disease = $size = $type = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $firstname = trim($_POST["firstname"]);
      $Nationality = trim($_POST["Nationality"]);
      $gender = trim($_POST["gender"]);
      $date = trim($_POST["date"]);
	  $age = trim($_POST["age"]);
      $Address = trim($_POST["Address"]);
      $Tel = trim($_POST["Tel"]);
      $email = trim($_POST["mail"]);
      $disease = trim($_POST["disease"]);
      $size = trim($_POST["size"]);
      $type = trim($_POST["type"]);
    }
    
//insert data
$sql = "INSERT INTO Run (firstname,Nationality,gender,date,age, Address, Tel,email,disease,size,type) 
VALUES ('$firstname','$Nationality','$gender','$date','$age', '$Address', '$Tel','$email','$disease','$size','$type')";

//echo $sql."<br>";
if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="th">
<head>
    	<meta charset="UTF-8">
        <title>Run for ตุ๊ดตู่</title>
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
    background-color: #666;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: ;
    
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 20%;
    height: 800px; /* only for demonstration, should be removed */
    background: #ccc;
    padding: 20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: left;
    padding: 20px;
    width: 80%;
    background-color: #f1f1f1;
    height: 800px; /* only for demonstration, should be removed */
	background: url(IMG/running-marathon.jpg) 50% 30% ;
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    background-color: #777;
    padding: 10px;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}
</style>
</head>
<body>
<header>
  <h2>Run for ตุ๊ตตู่ กันเถอะ</h2>

</header>

<section>
  <nav>
    <ul>
      <li><a href="new2.php">สมัคร Run</a></li>
      <li><a href="report.php">ตรวจสอบ BIB</a></li>
      <li><a href="#">ดูแผนที่ เส้นทางวิ่ง</a></li>
    </ul>
  </nav>

  <article>
    <h1>ทำไมต้อง Run</h1>
    <img src="IMG/ptoon.jpg" width="100" height="120">
    <?php
    echo "<br>";
    echo "ชื่อ-นามสกุล : ".$firstname."<br>";
    echo "สัญชาติ : ".$Nationality."<br>";
    echo "เพศ : ".$gender."<br>";
    echo "วันเกิด : ".$date."<br>";
    echo "ที่อยู่ : ".$Address."<br>";
    echo "โทรศัพท์ : ".$Tel."<br>";
    echo "E-mail : ".$email."<br>";
    echo "โรคประจำตัว : ".$disease."<br>";
    echo "ขนาดเสื้อ : ".$size."<br>";
    echo "ประเภทการวิ่ง : ".$type."<br>";
	
        ?>
    </article>
</section>

<footer>
  <p>วิ่ง วิ่ง วิ่งแบบพี่ตูน</p>
</footer>

    </body>
</html>
