<!doctype html>
<html>
<head>
    <title>RELIER</title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body>
		<video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
        <source src="assets/a.mp4" type="video/mp4">
    </video>
		<div class="fullscreen-bg">
</div>
    <div class="login-box">
    <img src="assets/avatar.png" class="avatar">
        <h1>Login Here</h1>
            <form action="login.php" method="post" enctype="multipart/form-data">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="#">Forget Password</a>    
            </form>
        </div>
    
    </body>
</html>