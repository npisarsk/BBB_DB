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
			width: 460px;
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
        			<form  name="input" action="searchResults.php" method="post" id="form3">
        				Search For:&nbsp; <input type="text" name="searchText" size="15"/>&emsp; <input type="submit" value="Search"><br>
        				<div class="bubble"><p>Search In:</p><select class="multiSelect" name="searchIn" multiple>
        					<option selected> Keyword Anywhere </option>
        					<option> Title </option>
        					<option> Author </option>
        					<option> Publisher </option>
        					<option> ISBN </option>
        				</select> 
        					<p><input type="button" value="Manage Shopping Cart" onclick="location.href='shoppingCart.php'"></p></div>
        				<br>
        				 Category:&nbsp;&nbsp;<select name="category">
        		 			<option>Fiction</option>
        		 			<option>Fantasy</option>
        		 			<option>Nonfiction</option>
        		 			<option>History</option>
        		 			<option>Biography</option>
        		 			<option>Children's</option>
        		 		</select>
        		 			&emsp;&emsp;&emsp;&emsp;&nbsp;<input type="button" value="Exit" onclick="location.href='index.php'">
						<br>
        		</td>
        	</tr>    	
        </table></div>
</html>
