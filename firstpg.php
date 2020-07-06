
<html>
<head>
	<meta charset="utf-8">
	<title>login</title>
	<link rel="stylesheet" href="logstyle1.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</head>
<body>
<div class="heading">


<h1 class="ml1">
  <span class="text-wrapper">
    <span class="line line1"></span>
    <span class="letters">STUDENT COMPLAINT PORTAL</span>
    <span class="line line2"></span>
  </span>
</h1>
</div>
<script>
var textWrapper = document.querySelector('.ml1 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml1 .letter',
    scale: [0.3,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 600,
    delay: (el, i) => 70 * (i+1)
  }).add({
    targets: '.ml1 .line',
    scaleX: [0,1],
    opacity: [0.5,1],
    easing: "easeOutExpo",
    duration: 700,
    offset: '-=875',
    delay: (el, i, l) => 80 * (l - i)
  }).add({
    targets: '.ml1',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
  </script>
<div class="login-box">
			<h1 style="color:#CA94C7"><center>LOGIN</h1>
<form action="login_db.php" method="POST">
	<p>USERNAME<p>
	<input type="text" placeholder="Enter Username" name="userid"/>
	<p>PASSWORD<p>
	<input type="password" placeholder="Enter password" name="pass"/>
	<?php
	if(isset($_GET['error'])==true){
		echo '<font color="#FF0000"><p align="center">invalid username or password</p>';
	}
?>
<input type="submit" name="login" value="Sign In">
</form>

</div>
</body>
</html>