<?php
session_start();
require_once('cgi-bin/mysqli_functions.phtml');
if(isset($_SESSION['loggedin']))
{
	$butt = $_SESSION['name'];
	
    die("You are already logged in! <a href=/>Return to Main Page</a>");
}
if(isset($_POST['submit']))
{
   $link = connecttodb();
   $username = mysqli_real_escape_string($link, $_POST['username']); 
   $pass = mysqli_real_escape_string($link, $_POST['pass']); 
   $select = 
   "SELECT uid, urank, activepet
   FROM accounts 
   WHERE uname = '$username' 
   AND pass = '$pass'";
   $result = mysqli_query($link, $select) or die("FATAL ERROR! Query failed: " . mysqli_error()); 
   $numrows = mysqli_num_rows($result);

   
   if($numrows < 1)
   {
     die("Incorrect username or password.");
   } 
   $info = mysqli_fetch_array($result, MYSQLI_ASSOC);
   $uid = $info['uid'];
   $activepet = $info['activepet'];
   $_SESSION['loggedin'] = "YES"; 
   $_SESSION['username'] = $username; 
   $_SESSION['uid'] = $uid;
   $_SESSION['activepet'] = $activepet;
   
   die("You are now logged in! <br><a href=/>Return to Main Page</a>"); 
} 
echo "<form type='login.php' method='POST'>
Username: <br>
<input type='text' name='name'><br>
Password: <br>
<input type='password' name='pass'><br>
<input type='submit' name='submit' value='Login'>
</form>"; 
?>