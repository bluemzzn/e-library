<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Home</title>
</head>
<body>
	<div id="mainwrapper">
  <header> 
    <div id="logo"><a href="#"><img src="pic/logo.png" width="50px" height="50px">ระบบห้องสมุดอิเล็กทรอนิกส์</a></div>
    <nav> <a href="index.php" title="Link">&#127968 Home</a> 
    	<a href="login.php" title="Link">&#128274 Login</a>
    	<a href="signup.php" title="Link">&#128272 Signup</a> </nav>
  </header>
    <div class="container">
  	<div id="content">
    <section class="sidebar"> 
      <!-- This adds a sidebar with 1 searchbox,2 menusets, each with 4 links -->
      <div class="search">
      	<input type="search"  id="search" placeholder="Search..."> 
      	<span>&#128269</span>
      </div>
      <div id="menubar">
        <nav class="menu">
          <h2>Categories</h2>
          <hr>
          <ul >
            <!-- List of links under menuset 1 -->
            <li><a href="#" title="Link">000 หนังสือทั่วไป</a></li>
            <li><a href="#" title="Link">100 ปรัชญาและจิตวิทยา</a></li>
            <li><a href="#" title="Link">200 ศาสนา</a></li>
            <li><a href="#"  title="Link">300 สังคมศาสตร์</a></li>
			<li><a href="#" title="Link">400 ภาษา</a></li>
            <li><a href="#" title="Link">500 วิทยาศาสตร์และคณิตศาสตร์</a></li>
            <li><a href="#" title="Link">600 เทคโนโลยี</a></li>
            <li><a href="#"  title="Link">700 ศิลปะ วิจิตรศิลป์</a></li>
			 <li><a href="#" title="Link">800 วรรณคดี</a></li>
            <li><a href="#"  title="Link">900 ประวัติศาสตร์และภูมิศาสตร์</a></li>
          </ul>
        </nav>
      </div>
    </section>


      <section class="mainContent">
      <div class="productRow"><!-- Each product row contains info of 3 elements -->
        <article class="productInfo"><!-- Each individual product description -->
          <div><img src="pic/book.png" ></div>
          <p class="productName">หนังสือคณิตจิ๋วแจ๋ว </p>
          <p class="productContent">ผู้แต่ง : นิ้วเหลี่ยม </p>
          <p class="price">ราคา : 50B</p>
          <form>
          <input type="submit" name="button" value="view" class="buyButton">
          </form>
        </article>

        <article class="productInfo"><!-- Each individual product description -->
          <div><img src="pic/book.png" ></div>
          <p class="productName">หนังสือคณิตจิ๋วแจ๋ว </p>
          <p class="productContent">ผู้แต่ง : นิ้วเหลี่ยม </p>
          <p class="price">ราคา : 50B</p>
          <input type="button" name="button" value="view" class="buyButton">
        </article>

        <article class="productInfo"><!-- Each individual product description -->
          <div><img src="pic/book.png" ></div>
          <p class="productName">หนังสือคณิตจิ๋วแจ๋ว </p>
          <p class="productContent">ผู้แต่ง : นิ้วเหลี่ยม </p>
          <p class="price">ราคา : 50B</p>
          <input type="button" name="button" value="view" class="buyButton">
        </article>

        <article class="productInfo"><!-- Each individual product description -->
          <div><img src="pic/book.png" ></div>
          <p class="productName">หนังสือคณิตจิ๋วแจ๋ว </p>
          <p class="productContent">ผู้แต่ง : นิ้วเหลี่ยม </p>
          <p class="price">ราคา : 50B</p>
          <input type="button" name="button" value="view" class="buyButton">
        </article>
        
        <article class="productInfo"><!-- Each individual product description -->
          <div><img src="pic/book.png" ></div>
          <p class="productName">หนังสือคณิตจิ๋วแจ๋ว </p>
          <p class="productContent">ผู้แต่ง : นิ้วเหลี่ยม </p>
          <p class="price">ราคา : 50B</p>
          <input type="button" name="button" value="view" class="buyButton">
        </article>

         <article class="productInfo"><!-- Each individual product description -->
          <div><img src="pic/book.png" ></div>
          <p class="productName">หนังสือคณิตจิ๋วแจ๋ว </p>
          <p class="productContent">ผู้แต่ง : นิ้วเหลี่ยม </p>
          <p class="price">ราคา : 50B</p>
          <input type="button" name="button" value="view" class="buyButton">
        </article>
   
      </div>
</body>
</html>
