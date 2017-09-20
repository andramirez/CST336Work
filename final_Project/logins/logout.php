 <?php
session_start();  //starting or resuming existing session
session_destroy();  //kills session

//redirects user to login after destroying session
header("Location: login.php");


?> 