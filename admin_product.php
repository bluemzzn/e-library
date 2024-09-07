<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Admin User</title>
</head>
<body>
	<div id="mainwrapper">
  <header> 
    <div id="logo"><a href="#"><img src="pic/logo.png" width="50px" height="50px">ผู้ใช้งานเจ้าหน้าที่ลงทะเบียน</a></div>
    <nav> <a href="index.php" title="Link">&#127968 Home</a> 
    	<a href="#" title="Link">&#128274 Login</a>
    	<a href="#" title="Link">&#128272 Log out</a> </nav>
  </header>
  <center>
  <section class="add-pro">

  	<h1 class="title">Shop Products</h1>
  	<form action="" method="post" enctype="multipart/form-data">
  		<h3>Add product</h3>
  		<input type="text" name="name" class="box" placeholder="Enter product name" required>
  		<input type="text" name="author" class="box" placeholder="Enter author" required><br>
  		<table>
  			<label>หมวดหมู่:</label>
  			<select>
  				<option value="000 หนังสือทั่วไป">000 หนังสือทั่วไป</option>
  				<option value="100 ปรัชญาและจิตวิทยา"> 100 ปรัชญาและจิตวิทยา</option>
  				<option value="200 ศาสนา">200 ศาสนา</option>
  				<option value="300 สังคมศาสตร์">300 สังคมศาสตร์</option>
  				<option value="400 ภาษา">400 ภาษา</option>
  				<option value="500 วิทยาศาสตร์และคณิตศาสตร์">500 วิทยาศาสตร์และคณิตศาสตร์</option>
  				<option value="600 เทคโนโลยี">600 เทคโนโลยี</option>
  				<option value="700 ศิลปะ วิจิตรศิลป์">700 ศิลปะ วิจิตรศิลป์</option>
  				<option value="800 วรรณคดี">800 วรรณคดี</option>
  				<option value="900 ประวัติศาสตร์และภูมิศาสตร์">900 ประวัติศาสตร์และภูมิศาสตร์</option>
  			</select>
  		</table>
  		<input type="text" name="copy"  class="box" placeholder="Enter สำนักพิมพ์" required>
  		<input type="number" name="date" class="box" placeholder="Enter date" required>
  		<input type="number" name="time" class="box" placeholder="Enter ครั้งที่พิมพ์" required>
  		<input type="text" name="key" class="box" placeholder="Enter keyword" required>
  		<input type="number" name="price" class="box" placeholder="Enter ราคาหนังสือ" required>
  		<input type="number" name="amount" class="box" placeholder="Enter จำนวนหนังสือ" required>
  		<input type="file" name="image" accept="image/jpg, image/jpeg, image/png" class="box" required>
  		<input type="submit" name="submit" value="add product" class="btn-add">
  	</form>
  </section>
  </center>
</body>
</html>