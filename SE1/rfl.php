<?php

 
echo "YOUR REQUEST HAS BEEN SENT TO THE RESPECTED FACULTY";
session_start();

//require_once('includes.php');

 

 

    //Connect to server

   mysql_connect("localhost","root","") or die("connection failed");
mysql_select_db("spt") or die("connection failed");

 if (isset($_REQUEST['submit']))
		{
 $rfl1=$_GET['comment'];
 $id1=$_SESSION['rid1'];
 mysql_query("INSERT INTO RFL (studentid,reasonforleave) VALUES ('$id1','$rfl1')") or die (mysql_error());
 }
		?>