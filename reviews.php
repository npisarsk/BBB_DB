<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>New Web Project</title>
        <style>
			.frame
			{
			border:2px solid blue;
			margin:0 auto;
			width: 560px;
			padding-left: 40px;
			padding-bottom:20px;
			padding-top:10px;
			margin-top:15px;
			}
			body
			{
				font-size: 15pt;
			}
			form
			{
				font-size:11pt;
			}
			#smallT
			{
				font-size:9pt;
			}
			.multiSelect{
				margin: 10px;
				height: 90px;
			}
			.bubble { 

  				display: table; 
			}

			.bubble p {
  				display: table-cell; 
  				vertical-align: middle; 
  				text-align: center; 
			}
			
		</style>
    </head>
    <body>
		<?php

        $mysqli = new mysqli("127.0.0.1", "root", "mag89num", "bbb_db_test", 3306);
        if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        							
		$isbn = $_GET['isbn'];

		$res = $mysqli->query("SELECT * FROM reviews WHERE isbn = {$isbn}");
		$res2 = $mysqli->query("SELECT * FROM books WHERE isbn = {$isbn}");
									
       	?>	
        <div class="frame"><table cellspacing="0" cellpadding="0">
        	<tr align="center">
        		<td>Book Buy (3-B.com)</td>
        	</tr>
        	<tr align="center">
        		<td id="smallT">Online Bookstore</td>
        	</tr>
        	<tr>
        		<td style="padding: 10px 0px 10px 0px">
        			<fieldset>
        			<form  name="input" action="index.php" method="post" id="form1">
        				Reviews for: 
        				<?php $res2->data_seek(0);
        					  while ($row2 = $res2->fetch_assoc()) {
								echo "{$row2['title']}<br>
										By: {$row2['author']}<br>";
								}	
							
        				?>
        				<div style="overflow-y:scroll; height:200px; width:450px; border:1px solid black;">
        						<?php         

        							$res->data_seek(0);
        							while ($row = $res->fetch_assoc()) {
										echo "<div style='width:440px; height:65px; border:1px solid black; margin:5px; padding:5px;'>			
        								{$row['review']}<br>
										</div>";

									}
       								?>
       					</div>
        				<br><div style="text-align:center;">
        		 			<input type="button" value="Done" onclick="closeWindow()"></div>
        		 			<script>
								function closeWindow(){
									window.close();
								}
        		 			</script>
        		</td>
        	</tr>    	
        </table></div>
</html>
