<!DOCTYPE HTML>

<?php
	
	session_start();
	$_SESSION['loggedin']=false;
	$username ="Saikan";
	$password ="1234";
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
		header("Location: home.php");
	}
	if(isset($_POST['username']) && isset($_POST)){
		if($_POST['username'] == $username && $_POST['password'] == $password)
		{
			$_SESSION['loggedin']=true;
			header("Location: booking.html");
		}
	}
?>

<html>
 
	<style>

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #eee;
}

body{
    margin: 0;
    padding: 0;
    background: url(https://wpblink.com/sites/default/files/wallpaper/food/68857/meal-wallpapers-hd-68857-9548098.png);
    background-size: 340px 265px;
    background-position: center;
    font-family: sans-serif;
}

.loginbox{
    width: 320px;
    height: 420px;
    background: #000;
    color: #fff;
    top: 10%;
    left: 40%;
    position: absolute;
  
    box-sizing: border-box;
    padding:80px 30px;
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.loginbox input{
    width: 100%;
    margin-bottom: 20px;
}
.loginbox input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
.loginbox input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}

.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}

</style>
<body>

<div class="loginbox"  >
<img src="avatar.png" class="avatar">
        <h1 align="center">Login Here</h1>
		<form method="post" action="login.php">
			Username<br/>
			<input type="text" name="username"><br/>
			Password<br/>
			<input type="password" name="password"><br/>
			<input type="submit" value="Login!">
		</form>
		</div>
	</body>
</html>
