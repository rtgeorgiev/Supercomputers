<! ––
*    Title: User Registration System
*    Author: Awa Melvine
*    Date: 2019
*    Availability: https://codewithawa.com/posts/complete-user-registration-system-using-php-and-mysql-database 
––>

<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Supercomputers | Login</title>
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
            <li class="current"><a href="index.php">Login</a></li>
        </ul>
        </nav>
    </div>
    </header>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		<footer><p>Supercomputers, Copyright &copy; 2020</p></footer>
</body>
</html>