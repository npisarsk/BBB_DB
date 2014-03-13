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
        			<form  name="input" action="index.php" method="post" id="form1">
        				<div class="bubble"><p>Your shopping cart has 0 items in it.</p> &emsp; <input type="button" value="Manage shopping cart"></div><br>
        				<div style="overflow-y:scroll; height:200px; border:1px solid black;">
        					<div style="width:450px; height:75px; border:1px solid black;">
        						<table>
        							<tr>
        								<td>
        									<input type="button" value="Add to Cart" style="margin:5px;"><br>
        									<input type="button" value="Reviews" style="margin:5px; width:90px;">
        								</td>
        								<td>
        								SQL Server 2000 for experienced DBA's <br>
        								By: Brian Knight<br>
        								Publisher: McGraw-Hill Osborne Media, 2003<br>
        								ISBN: 72227885  &emsp; Price: $34.99<br>
        								</td>
        							</tr>
        						</table>
        					</div>
        					<div style="width:450px; height:75px; border:1px solid black;">
        						<table>
        							<tr>
        								<td>
        									<input type="button" value="Add to Cart" style="margin:5px;"><br>
        									<input type="button" value="Reviews" style="margin:5px; width:90px;">
        								</td>
        								<td>
        								SQL Server 2000 for experienced DBA's <br>
        								By: Brian Knight<br>
        								Publisher: McGraw-Hill Osborne Media, 2003<br>
        								ISBN: 72227885  &emsp; Price: $34.99<br>
        								</td>
        							</tr>
        						</table>
        					</div>
        					<div style="width:450px; height:75px; border:1px solid black;">
        						<table>
        							<tr>
        								<td>
        									<input type="button" value="Add to Cart" style="margin:5px;"><br>
        									<input type="button" value="Reviews" style="margin:5px; width:90px;">
        								</td>
        								<td>
        								SQL Server 2000 for experienced DBA's <br>
        								By: Brian Knight<br>
        								Publisher: McGraw-Hill Osborne Media, 2003<br>
        								ISBN: 72227885  &emsp; Price: $34.99<br>
        								</td>
        							</tr>
        						</table>
        					</div>
        				</div>
        				<br>
        		 			<input type="button" value="Proceed to Checkout" onclick="location.href='shoppingCart.php'">&emsp;
        		 			<input type="button" value="New Search" onclick="location.href='search.php'">&emsp;
        		 			<input type="button" value="Exit 3-B.com" onclick="location.href='index.php'">
						<br>
        		</td>
        	</tr>    	
        </table></div>
</html>
