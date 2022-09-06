<?php 

  require_once 'SQL_login.php';

if(isset($_POST['username']) && isset($_POST['pwd'])){

      try
      {
        $pdo = new PDO($attr, $user, $pass, $opts);
      }
      catch (\PDOException $e)
      {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
      }
	
	// username and password sent from form and sanitise
	$myusername= sanitise($pdo,$_POST['username']);
	$mypassword=  sanitise($pdo,$_POST['pwd']);
        $mypassword     = password_hash($mypassword, PASSWORD_DEFAULT);
	$dob=  sanitise($pdo,$_POST['dob']);
        $email=  sanitise($pdo,$_POST['email']);
        $fullName=  sanitise($pdo,$_POST['full_name']);
        
	$query = "INSERT INTO $tbl_name (userid, name, dob, email, login, pass) 
        VALUES(NULL,$fullName, $dob, $email, $myusername, '$mypassword')";
        //dob datetime format = 2013-02-02 10:13:20
    
	
        $result = $pdo->query($query);
        
	if (! $result){
		 die('Error: ' . mysqli_error());
	}
	header("location:registered.php");
}

   function sanitise($pdo, $str)
  {
    $str = htmlentities($str);
    return $pdo->quote($str);
  }	
?>


<html>
	<body>
		<form method="post">
			<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
				<tr>	
					<td colspan="2"><strong>Register</strong></td>
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
					<td><label>Re-Enter Password</label></td>
					<td><input type="password"  />
				</tr>
				<tr>
					<td><label>Date of Brith</label></td>
					<td><input type="text" name="dob"  />
				</tr> 
				<tr>
					<td><label>email</label></td>
					<td><input type="text" name ="email"  />
				</tr>
				<tr>
					<td><label>Full Name</label></td>
					<td><input type="text" name= "full_name"  />
				</tr> 
                                                                                                                                            
				<tr>
					<td></td>
					<td><input type="submit" value="submit">
				</tr>
			</table>		
		</form>
	</body>
</html>

