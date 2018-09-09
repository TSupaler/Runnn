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
    background-color: #00CCCC;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
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
  <h3>Run for ตุ๊ตตู่ กันเถอะ</h3>
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
<h1>ฉันจะ Run For ตุ๊ดตู่</h1>
<p>
<form method="post" action="test_index2.php">  
  ชื่อ - นามสกุล (Full Name) : <input type="text" name="firstname"  >  <br><br>

  สัญชาติ (Nationality) : <input type="text" name="Nationality"  size="25.9">     <br><br>
  เพศ(Sex) : <br>
  <input type="radio" name="gender" value="male" checked> Male
  <input type="radio" name="gender" value="female"> Female<br><br>
  วัน เดือน ปีเกิด (Date of Birth) : <input type="date"" name="date" ><br><br>
  อายุ (Age) : <input type="Age" name="age" size="10">  ปี <br><br>
  ที่อยู่ (Postal Address) : <br>
  <textarea name = "Address" rows = "7" cols="45" >  </textarea><br><br>
  โทรศัพท์ (Tel) : <input type="Tel" name="Tel" > <br><br>
   E-mail : <input type="mail" name="mail" > <br><br>
  โรคประจำตัว (ถ้ามี) : <input type="text" name="disease" size = "25"> <br><br>
  ขนาดเสื้อ (Size)<br>
  <input type="radio" name="size" value="ss" checked> SS
  <input type="radio" name="size" value="s"> S
  <input type="radio" name="size" value="m" > M
  <input type="radio" name="size" value="l"> L
  <input type="radio" name="size" value="xl" > XL
  <input type="radio" name="size" value="2xl"> 2XL<br>

    ประเภทการวิ่ง : <br>
    <input type="radio" name="type" value="W" checked> Walk (5 km) <br>
  <input type="radio" name="type" value="m"> Mini Marathon(11 km) <br>
  <input type="radio" name="type" value="H" > Half Marathon(21 km) <br>
  <input type="radio" name="type" value="M" > Marathon(42 km) <br><br>

  <input type="submit" name="submit" value="Submit">  
</form>
<p>
</article>
</section>

<footer>
  <p>วิ่ง วิ่ง วิ่งแบบพี่ตูน</p>
</footer>
</body>
</html>