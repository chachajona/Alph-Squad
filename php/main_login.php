<?php // authenticate3.php
  require_once 'SQL_login.php';

  try
  {
    $pdo = new PDO($attr, $user, $pass, $opts);
  }
  catch (\PDOException $e)
  {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
  }

if(isset($_POST['username']) && isset($_POST['pwd'])){
	
    $un_temp = sanitise($pdo,$_POST['username']);
    $pw_temp = sanitise($pdo,$_POST['pwd']);
    $query   = "SELECT * FROM userdb WHERE login=$un_temp";
    $result  = $pdo->query($query);

    if (!$result->rowCount()) die("User not found");

    $row = $result->fetch();
    $fn  = $row['name'];
    $un  = $row['login'];
    $pw  = $row['pass'];

    //if (password_verify(str_replace("'", "", $pw_temp), $pw))
    if (password_verify( $pw_temp, $pw))
    {
      session_start();

      $_SESSION['name'] = $fn;
     
      echo htmlspecialchars(" Hi $fn,
        you are now logged in as '$un'");
      die ("<p><a href='continue.php'>Click here to continue</a></p>
            <br><p><a href='session_logout.php'>Click here to logout</a></p>");
    }
    else echo("Invalid username/password combination");
  }
  else
  {

    echo ("Please enter your username and password");
  }

  function sanitise($pdo, $str)
  {
    $str = htmlentities($str);
    return $pdo->quote($str);
  }
?>

<html>
	<body>
		<form action="main_login.php" method="post">
			<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
				<tr>	
					<td colspan="2"><strong>login</strong></td>
				</tr>
				<tr>
					<td><label>User name</label></td>
					<td><input type="text" name="username" />
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td><input type="password" name="pwd" />
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="submit">
				</tr>
			</table>		
		</form>
	</body>
</html>
