<?php

 

session_start();

//require_once('includes.php');

 

 

    //Connect to server

   mysql_connect("localhost","root","") or die("connection failed");
mysql_select_db("spt") or die("connection failed");

 

    // Get the login credentials from user

    $username =$_GET['id'];

    $userpassword = $_GET['pword'];

     echo $username;
	 echo $userpassword;

    // Secure the credentials

   // $username = mysql_real_escape_string($_POST['username']);

   // $userpassword = mysql_real_escape_string($_POST['password']);

 

    // Check the users input against the DB.

    $query = "SELECT * FROM FACULTY WHERE fid = '$username' AND password = '$userpassword'";

    $result = mysql_query($query) or die ("Unable to verify user because " . mysql_error());

     

    $count = mysql_num_rows($result);

     

    if ($count == 1)

    {

        $_SESSION['loggedIn'] = "true";

        header("action=facultyhome.php");
	//  echo " login success ful";

// I also tried the whole URL here, but same result.

 

    }

    else

    {

        $_SESSION['loggedIn'] = "false";

        echo "<p>Login failed, username or password incorrect.</p>";

    }

?>

