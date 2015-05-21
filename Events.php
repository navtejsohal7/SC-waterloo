<?php

$schedule = array(array("22 dec 2015","8:00pm","Uni of Waterloo","SC Waterloo","London SC"),
				 array("23 dec 2015","8:00pm","Uni of Guelph","SC Guelph","Windsor SC"),
				 array("24 dec 2015","8:00pm","Uni of Ottawa","SC Ottawa","Brampton SC"),
				 array("25 dec 2015","8:00pm","Uni of Windsor","SC Windsor","Missisuaga SC"),
				 array("26 dec 2015","8:00pm","Uni of Toronto","SC Toronto","Waterloo SC"));

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <title>EVENTS</title>

    <link rel="stylesheet" type="text/css" href="HomePage.css">
        

</head>
<body>
    
    <header>
        <div>
            
            <div id="greeting" style="color:yellow">    <script>
        
        var x=document.cookie;
                var splitter=x.split("name=");
                
       document.write(splitter);
                
                
    </script> </div>
            
            <script>
                function clearCookie()
                {
                    document.cookie = "name=; expires=Thu, 01 Jan 1970 00:00:00 UTC";   
                    window.location = "http://localhost/Major%20Assignment/home.html";  
                }
                
            </script>        
        <div class="banner1">
<img src="logo.png" class="logoImage" style="width:150px; height:150px; vertical-align:middle" >
    <span class="text1">SC WATERLOO</span>
        
            </br>
            </br>
            </br>
    </br>
 
    <nav>        
       <ul>
            <li><a href="HomePage.html">Home</a></li>
            <li><a href="Players.html">Players</a></li>
            <li><a href="News.html">News</a></li>
            <li><a href="Events.php">Events</a></li>
            <li><a href="Gallery.html">Gallery</a></li>
            <li style="margin-top:5px; margin-left:30px; background-color : green;"><button onclick="clearCookie()">Log Out</button></li>

</ul>
</nav>
</div>
  
</header>

</br>
</br>
</br>
<table id="new">
	<tr>
		<td>Date</td>
		<td>Time</td>
		<td>Location</td>
		<td>Home Team</td>
		<td>Away Team</td>
	</tr>
	<tr>
		<td><?php echo $schedule[0][0];?></td>
		<td><?php echo $schedule[0][1];?></td>
		<td><?php echo $schedule[0][2];?></td>
		<td><?php echo $schedule[0][3];?></td>
		<td><?php echo $schedule[0][4];?></td>

	</tr>
	<tr>
		<td><?php echo $schedule[1][0];?></td>
		<td><?php echo $schedule[1][1];?></td>
		<td><?php echo $schedule[1][2];?></td>
		<td><?php echo $schedule[1][3];?></td>
		<td><?php echo $schedule[1][4];?></td>

	</tr>
	<tr>
		<td><?php echo $schedule[2][0];?></td>
		<td><?php echo $schedule[2][1];?></td>
		<td><?php echo $schedule[2][2];?></td>
		<td><?php echo $schedule[2][3];?></td>
		<td><?php echo $schedule[2][4];?></td>

	</tr>
	<tr>
		<td><?php echo $schedule[3][0];?></td>
		<td><?php echo $schedule[3][1];?></td>
		<td><?php echo $schedule[3][2];?></td>
		<td><?php echo $schedule[3][3];?></td>
		<td><?php echo $schedule[3][3];?></td>

	</tr>
	<tr>
		<td><?php echo $schedule[4][0];?></td>
		<td><?php echo $schedule[4][1];?></td>
		<td><?php echo $schedule[4][2];?></td>
		<td><?php echo $schedule[4][3];?></td>
		<td><?php echo $schedule[4][3];?></td>

	</tr>


</table>

<?php 


?>







</body>
</html>