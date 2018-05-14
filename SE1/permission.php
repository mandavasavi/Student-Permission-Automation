<?PHP
session_start();
?>
<?php

$conn = mysql_connect("localhost","root","");

// Check connection
if($conn == false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

}
echo "PERMISSION IS APPROVED";
$db=mysql_select_db("spt", $conn);
if($db == false)
{
	echo " not slect";
}
else
{
	echo "select";
}

	// Escape user inputs for security

if (isset($_REQUEST['submit']))
{
			$nam=$_SESSION['sname1'];
			$id1=$_SESSION['rid1'];
			$dept=$_SESSION['dept1'];
			$yr=$_SESSION['year1'];
			$fn=$_SESSION['cname1'];
		 
		 
			 
 mysql_query("INSERT INTO permission (studentid,sname,department,year,facultyname) VALUES ('$id1','$nam','$dept','$yr','$fn')") or die (mysql_error());		

}
	  
?>