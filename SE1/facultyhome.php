<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
<style type="text/css">
	.bs-example{
    	margin: 20px;
    }
body, html {
    height: 100%;
    margin: 0;
}

.bg {
    /* The image used */
    background-image: url("theme.png");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
table {
    width: auto;
    margin-left: 400px;
    margin-right: auto;
}
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

</head>
<body  >
  <div class="bg">  
  <div class="bs-example">
                <ul class="nav navbar-nav">
                    <li><a href="facultyhome.html">pending requests</a></li>
                    <li><a href="attendance">attendance list</a></li>
                    <li><a href="#">section details</a></li>
					<li><a href="#">counsellor details</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                     
                    <li><a href="#">help</a></li>
                     <li><a href="login.html"><button   name="logout" id="logout"  value="Log Out">Log Out</button></a></li>
                    </ul>
                    </li>
                </ul>
           
<form action="/action_page.php">
<span><table >
<thead>
<td></td>
<td></td>
</thead>
<tbody>
<tr>
<td>
    <div class="form-group">
      <label for="name">name:</label>
    </div>
	</td>
	<td><?php 
	
	echo $_SESSION['sname1'];
  	?> </td>
	</tr>
<tr>
<td>
  <div class="form-group">
      <label for="registration-id">id:</label>
    </div>
	</td>
	<td> <?php 
	
	echo $_SESSION['rid1'];
  	?> </td>
	</tr>

<tr>
<td>
  <div class="form-group">
      <label for="section">section:</label>
    </div>
	</td>
	<td> <?php 
	
	echo $_SESSION['sec1'];
  	?> </td>
	</tr>

<tr>
<td>
  <div class="form-group">
      <label for="year">year:</label>
    </div>
	</td>
	<td> <?php 
	
	echo $_SESSION['year1'];
  	?> </td>
	</tr>

<tr>
<td>
  <div class="form-group">
      <label for="department">department:</label>
    </div>
	</td>
	<td><?php 
	
	echo $_SESSION['dept1'];
  	?>  </td>
	</tr>

<tr>
<td>
  <div class="form-group">
      <label for="counsellor">counsellor-name:</label>
    </div>
	</td>
	<td><?php 
	
	echo $_SESSION['cname1'];
  	?>  </td>
	</tr>

<tr>
<td>
  <div class="form-group">
      <label for="no of permissions taken">permissions taken:</label>
    </div>
	</td>
	<td><?php 
	//session_start();
	
	echo $_SESSION['npt1'];
  	?></td>
	</tr>

<tr>
<td>
  <div class="form-group">
      <label for="reason for leave">reason for leave:</label>
    </div>
	</td>
	<td><?php 
	//session_start();
	
	echo $_SESSION['comment'];
  	?></td>
	</tr>

<tr>
<td>
  <div class="form-group">
      <label for="date&time">date&time:</label>
    </div>
	</td>
	<td> </td>
	</tr>

	</tbody>
  </table></span>
                               <div style="margin-left: 400px">
                                    <input type="button" class="button" value="Request" style="margin-left": 750px">
<input type="button" class="button" value="cancel"  style="margin-left": 850px"  >

</div>                                           
                                        
                              
                                          
   
  
</div>



</body>
</html>                            