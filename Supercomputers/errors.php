<! ––
*    Title: User Registration System
*    Author: Awa Melvine
*    Date: 2019
*    Availability: https://codewithawa.com/posts/complete-user-registration-system-using-php-and-mysql-database 
––>

<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>