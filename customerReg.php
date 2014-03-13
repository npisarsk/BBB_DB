<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Customer Registration</title>
        <style>
        div
			{
			border:2px solid blue;
			margin:0 auto;
			width: 360px;
			padding-left: 10px;
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
			input
			{
				float: left;
			}
			select{
				float:left;
			}
			</style>
    </head>
    <body>
    	<div>
       	<form name="custReg" method="post" action="search.php">
       		<table style="text-align: right;" >
       			<tr>
       				<td>Username: </td> <td><input type="text" name="Username" size="12"></td>
       			</tr>
       			<tr>
       				<td>Pin: </td><td><input type="text" name="Pin" size="5"> &nbsp; &nbsp; &nbsp; Re-type Pin:</td><td><input type="text" name="rePin" size="5"></td>
       			</tr>
       			<tr>
       				<td>First Name: </td><td><input type="text" name="firstName" size="20"></td>
       			</tr>
       			<tr>
       				<td>Last Name: </td><td><input type="text" name="lastName" size="20"></td>
       			</tr>
       			<tr>
       				<td>Address: </td><td><input type="text" name="address" size="20"></td>
       			</tr>
       			<tr>
       				<td>City: </td><td><input type="text" name="city" size="20"></td>
       			</tr>
       			<tr>
       			<td>State: </td><td><select name="state">
				<option value="AL">AL</option>
				<option value="AK">AK</option>
				<option value="AZ">AZ</option>
				<option value="AR">AR</option>
				<option value="CA">CA</option>
				<option value="CO">CO</option>
				<option value="CT">CT</option>
				<option value="DE">DE</option>
				<option value="DC">DC</option>
				<option value="FL">FL</option>
				<option value="GA">GA</option>
				<option value="HI">HI</option>
				<option value="ID">ID</option>
				<option value="IL">IL</option>
				<option value="IN">IN</option>
				<option value="IA">IA</option>
				<option value="KS">KS</option>
				<option value="KY">KY</option>
				<option value="LA">LA</option>
				<option value="ME">ME</option>
				<option value="MD">MD</option>
				<option value="MA">MA</option>
				<option value="MI">MI</option>
				<option value="MN">MN</option>
				<option value="MS">MS</option>
				<option value="MO">MO</option>
				<option value="MT">MT</option>
				<option value="NE">NE</option>
				<option value="NV">NV</option>
				<option value="NH">NH</option>
				<option value="NJ">NJ</option>
				<option value="NM">NM</option>
				<option value="NY">NY</option>
				<option value="NC">NC</option>
				<option value="ND">ND</option>
				<option value="OH">OH</option>
				<option value="OK">OK</option>
				<option value="OR">OR</option>
				<option value="PA">PA</option>
				<option value="RI">RI</option>
				<option value="SC">SC</option>
				<option value="SD">SD</option>
				<option value="TN">TN</option>
				<option value="TX">TX</option>
				<option value="UT">UT</option>
				<option value="VT">VT</option>
				<option value="VA">VA</option>
				<option value="WA">WA</option>
				<option value="WV">WV</option>
				<option value="WI">WI</option>
				<option value="WY">WY</option>
			</select> 
			ZIP: </td><td><input type="text" name="ZIP" size="4"></td>
       		</tr>
       		<tr>
       			<td>Credit Card</td><td><select name="cardType">
       				<option value="VISA">VISA</option>
       				<option value="MC">Master Card</option>
       				<option value="AMEX">American Express</option>
       				<option value="Discover">Discover</option>
       			</select></td><td><input type="text" name="cardNumber" size="10" placeholder="Card Number"></td>
       		</tr>
       		<tr>
       			<td>Exp Date: </td>
       			<td>
       				<select name="expMonth">
       					<option value="1">1</option>
       					<option value="2">2</option>
       					<option value="3">3</option>
       					<option value="4">4</option>
       					<option value="5">5</option>
       					<option value="6">6</option>
       					<option value="7">7</option>
       					<option value="8">8</option>
       					<option value="9">9</option>
       					<option value="10">10</option>
       					<option value="11">11</option>
       					<option value="12">12</option>
       				</select>
       				<select name="expYear">
       					<option value="2014">2014</option>
       					<option value="2015">2015</option>
       					<option value="2016">2016</option>
       					<option value="2017">2017</option>
       					<option value="2018">2018</option>
       					<option value="2019">2019</option>
       					<option value="2020">2020</option>
       					<option value="2021">2021</option>
       					<option value="2022">2022</option>
       					<option value="2023">2023</option>
       					<option value="2024">2024</option>
       					<option value="2025">2025</option>
       					<option value="2026">2026</option>
       					<option value="2027">2027</option>
       					<option value="2028">2028</option>
       					<option value="2029">2029</option>
       					<option value="2030">2030</option>
       					<option value="2031">2031</option>
       					<option value="2032">2032</option>
       					<option value="2033">2034</option>
       					<option value="2034">2034</option>
       				</select>
       			</td>
       		</tr>
       		<tr>
       			<td> &nbsp; </td><td>
       				<input type="submit" name="register" value="Register">
       				<input type="button" value="Cancel" style="float:none;" onclick="location.href='index.php'">
       			</td>
       		</tr>
       	</table>
       	</form></div>   	
    </body>
</html>