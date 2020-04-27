<doctype !html>
	<title>FORMS</title>
	<head>
	<h1>This is my login form</h1>
</head>
	<body>
		<form action="output.php">
		<div>
			<label><ul><b>NAME:</b></ul></label>
<input  type="text" name="nm" value="" required placeholder="enter your name">
</div>
		
<div>
	<label><ul><b>EMAIL:</b></ul></label>
<input  type="email" name="em" value="" placeholder="put your email" required>
</div>
<div>
	<label><ul><b>Pasword:</b></ul></label>
<input  type="password" name="ps" value="" placeholder="put strong pasword" required>
</div>
<div>
	<ul><b>GENDER:</b></ul>
	<div>
		<lable>Male</lable>
		<input type="radio" name="gender"  value="male">
	</div>
<div>
		<lable>Female</lable>
		<input type="radio" name="gender" value="female">
	</div>
	</div>
<div>
	<ul><b>SUBJECTS:</b></ul>
	<div>
		Chemistry
		<input type="checkbox" name="check1" value="Chemistry">
	</div>
		<div>
		Math
		<input type="checkbox" name="check2" value="Math">
	</div>
	<div>
		English
		<input type="checkbox" name="check3" value="English">
	</div>
	<div>
		Biology
		<input type="checkbox" name="check4" value="Biology">
	</div>
</div>

	<label><ul><b>ABOUT YOURSELF: </b></ul></label>
	<div>
	<textarea  name="yourself" placeholder="tell us something interesting about yourself"></textarea>
</div>

<!--<div>
	About yourself <input type="textarea" name="yourself" placeholder="tell us something interesting about yourself">
</div>--->


<div>
	<button type="Submit" value="next page">submit</button></div>
</form>
</body>