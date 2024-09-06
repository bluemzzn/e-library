<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Signup</title>
	<style type="text/css">
		body{
			background-color: skyblue;
		}
	</style>
</head>
<body class="signup-page">
	<div class="signup-all">
		<div class="signup-group">
			<h3>Sign up</h3>

			<form method="post" class="signup-form">
				<div>
					<label for="name">Fullname :</label><br>
					<input type="text" name="name"  id="name" class="box" placeholder="Enter your fullname" required>
				</div>
				<div>
					<label for="signup-user">Username :</label><br>
					<input type="text" name="user"  id="signup-user" class="box" placeholder="Enter your username" required>
				</div>

				<div>
					<label for="signup-pass">Password :</label><br>
					<input type="password" name="pass"  id="signup-pass" class="box" placeholder="Enter your password" minlength="6" required>
				</div>

				<div>
					<label for="phone">Phone number :</label><br>
					<input type="text" name="user"  id="signup-user" class="box" placeholder="Enter your phone num" pattern="[0-9]{10}" required>
				</div>

				<table>
					<div>
					<label>position: </label>
					<select>position
						<option value="บรรณารักษ์">บรรณารักษ์</option>
						<option value="เจ้าหน้าที่">เจ้าหน้าที่</option>
						<option value="ลูกจ้างประจำ">ลูกจ้างประจำ</option>
					</select>
					</div>
				</table>

				<div >
					<input type="submit" name="submit"  class="btn" value="Sign up">
				</div>
			</form>
		</div>
	</div>
</body>
</html>