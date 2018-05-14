<!DOCTYPE html>
<?PHP
session_start();
?>
<html lang="en">
<head>
  <title>Leave form</title>
<h3>STUDENT LEAVE APPLICATION FORM</h3>
 <hr>
 <br>
 <br>
</head>
<style>
body  {
    
    background-color: 33d4ff;
}
</style>
<style>
.button {
    background-color: black;
    border: none;
    color: white;
    padding: 10px 40px;
    text-align: left;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;

}

</style>
<body style="text-align:center"> 

<label for="sname"><b>Student Name :</b></label>
<?php
$vr = $_GET["id"]; 
mysql_connect("localhost","root","") or die("connection failed");
mysql_select_db("spt") or die("connection failed");
$query="select sname from students where studentid='$vr'";
$result=mysql_query($query);
while($line=mysql_fetch_array($result)){
	$sn=$line['sname'];
print $line['sname'];
print " ";	
}
 $_SESSION['sname1']=$sn;

?>

<br>
<br>
<label for="sid"><b>Registration_id :</b></label>
<?php echo $_GET["id"];
$rid=$_GET["id"];
$_SESSION['rid1']=$rid;
 ?>

<br>
<br>
<label for="sec"><b>Section:</b></label>
<?php
$vr = $_GET["id"]; 
mysql_connect("localhost","root","") or die("connection failed");
mysql_select_db("spt") or die("connection failed");
$query="select section from students where studentid='$vr'";
$result=mysql_query($query);
while($line=mysql_fetch_array($result)){
	$sec=$line['section'];
print $line['section'];

print " ";	
}
 $_SESSION['sec1']=$sec;
?><br>
<br>


<label for="year1"><b>year:</b></label>
<?php
$vr = $_GET["id"]; 
mysql_connect("localhost","root","") or die("connection failed");
mysql_select_db("spt") or die("connection failed");
$query="select batch from students where studentid='$vr'";
$result=mysql_query($query);
while($line=mysql_fetch_array($result)){
	$year=$line['batch'];
print $line['batch'];

print " ";	
}
 $_SESSION['year1']=$year;
?><br>
<br>

<label for="dept"><b>Department :</b></label>
<?php
$vr = $_GET["id"]; 
mysql_connect("localhost","root","") or die("connection failed");
mysql_select_db("spt") or die("connection failed");
$query="select department from students where studentid='$vr'";
$result=mysql_query($query);
while($line=mysql_fetch_array($result)){
	$dept=$line['department'];
print $line['department'];
print " ";	
}
 $_SESSION['dept1']=$dept;
?><br>
<br>
<label for="cname"><b>Counsellor Name :</b></label> <?php
$vr = $_GET["id"]; 
mysql_connect("localhost","root","") or die("connection failed");
mysql_select_db("spt") or die("connection failed");
$query="select counsellorname from students where studentid='$vr'";
$result=mysql_query($query);
while($line=mysql_fetch_array($result)){
	$cname=$line['counsellorname'];
print $line['counsellorname'];
print " ";	
}
 $_SESSION['cname1']=$cname;
?><br>
<br>
<label for="per"><b>No; of permissions taken:</b></label>
<label> <?php
//session_start();
$vr = $_GET["id"]; 
mysql_connect("localhost","root","") or die("connection failed");
mysql_select_db("spt") or die("connection failed");
$query="select noofpermissionstaken from students where studentid='$vr'";
$result=mysql_query($query);
$npt;

while($line=mysql_fetch_array($result)){
	$npt=$line['noofpermissionstaken'];
print $line['noofpermissionstaken'];
print " ";	
}

$_SESSION['npt1']=$npt;


?>

</label><br>
<br>
<form action="rfl.php" method="GET">
<label for="rea"><b>Enter reason for leave:</b></label>

 
  
    <textarea class="form-control" rows="3" colomns="3" name="comment"></textarea>
    
  


<br>
<center>
<!-- <label for="dt"><b>Date & Time :</b></label>
    <input size="16" type="text" value="">
     
    <script type="text/javascript">
        $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
    </script> -->           
<br>
<br>
<br>

<input type="submit" name="submit" class="button" value="Request" style="margin-left": 750px">
<input type="submit" class="button" value="cancel"  style="margin-left": 850px"  >

  <div class="container">
  
</div>

</form>
</body>
</html>

