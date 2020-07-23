<! ––
*    Title: User Registration System
*    Author: Awa Melvine
*    Date: 2019
*    Availability: https://codewithawa.com/posts/complete-user-registration-system-using-php-and-mysql-database 
––>

<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  
    <header>
    <div class="container">
     <div id="branding">
         <h1><span class="highlight">Supercomputers</span></h1>
        </div>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="history.html">History</a></li>
            <li><a href="special.html">Special</a></li>
            <li><a href="quiz.html">Quiz</a></li>
            <li class="current"><a href="register.php">Login</a></li>
        </ul>
        </nav>
    </div>
    </header>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
    <footer><p>Supercomputers, Copyright &copy; 2020</p></footer>
</body>
</html>