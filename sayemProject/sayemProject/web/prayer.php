<?php
	session_start();
	
	if($_SESSION['userSession']=='123' || isset($_COOKIE['abc']) )
	{
?>

<html>

<head>
    <title></title>
</head>

<body>
<table border="1" height="300px" width="550px" align="center">
<tr><td height="300px" width="50px">
    <table  height="300px" width="100px" >
        <tr><tr><td ><a href="prayer.php">prayer_timing</a></td></tr>		
		<tr><td ><a href="weeklypyr.php">weekly_prayer_timing </a></td></tr>		
		<tr><td > <a href="home.php">Go_Home </a></td></tr>
		<tr><td > <a href="login.php">logout </a></td></tr>
    </table>
	</td>
	
	<td height="300px" width="545px" align="left" valign="top">
	<table border="1" height="100px" width="545px" >
                 <tr ><td colspan="2" align="center" valign="center"><h3>Todays Prayer Time</h3>Sunday,July 15,2018
					<p align="left" valign="bottom">Dhaka,Bangladesh </td></tr>
						
						
						<tr >
					<td>
					  <table border="1" height="190px" width="550px">
                        <tr >
						<td>Fajar</td>
						   <td>sunrise</td>
                            <td height="90px">Johor</td>
							<td>Asr</td>
							<td>Maghrib</td>
							<td>Isha</td>
							
							
							
						</tr>
						 <tr >
						 
                            <td align="left" valign="top">04.15am</td>
							<td align="left" valign="top">05.20 </td>
							<td align="left" valign="top">12.40pm </td>
							<td align="left" valign="top">4.20pm </td>
							<td align="left" valign="top"> 6.47pm </td>
							<td align="left" valign="top"> 7.47pm </td>
							
							
						</tr>
                      </table> 
	</td></tr>
	
	
	
	
	

					
</tr></table>
</body>

</html>
<?php
}else{
		header("location: login.php");

	}
?>