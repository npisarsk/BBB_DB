<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>New Web Project</title>
        <style>
			div
			{
			border:2px solid blue;
			margin:0 auto;
			width: 220px;
			padding-left: 40px;
			padding-bottom:20px;
			padding-top:10px;
			margin-top:30px;
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
		</style>
		<?php
		$optionView = isset($_POST['optionView']) ? $_POST['optionView'] : null;
		if($optionView === "newCustomer"){		
			header("Location: customerReg.php ");
		}
		else if($optionView === "searchOnly"){
			header("Location: search.php");
		}
		?>
    </head>
    <body>
        <div><table cellspacing="0" cellpadding="0">
        	<tr align="center">
        		<td>Book Buy (3-B.com)</td>
        	</tr>
        	<tr align="center">
        		<td id="smallT">Online Bookstore</td>
        	</tr>
        	<tr>
        		<td style="padding: 10px 0px 10px 0px">
        			<fieldset style="background-color:#FEC;">
        			<form  name="input" action="index.php" method="post" id="form1">
        				<input type="radio" name="optionView" value="searchOnly" />Search Only<br>
        				<input type="radio" name="optionView" value="newCustomer" />New Customer<br>
        				<input type="radio" name="optionView" value="retCustomer" />Returning Customer<br>
        				<input type="radio" name="optionView" value="Administrator" />Administrator<br></form></fieldset>

        		</td>
        	</tr>
        	<tr>
        		<td align="center">
         			<input type="submit" value="ENTER" form="form1">       			
        		</td>
        	</tr>     	
        </table></div>
</html>
