<?php // continue.php
  session_start();

  if (isset($_SESSION['name']))
  {
    $name = htmlspecialchars($_SESSION['name']);
   

    echo "Welcome back $name.<br>
           <br><p><a href='session_logout.php'>Click here to logout</a></p>
           
            <br><p><a href='session_time_logout.php'>Click here to try session timeout</a></p>";
  }
  else echo "Please <a href='main_login.php'>Click Here</a> to log in.";
?>
