<HTML>
<head>
<style>
</style>
</head>
<body>
<h2>Registration Form</h2>
<form method=post action="insert.php">
<label>Name</label>	
<input  type="text" name=name><br>
<label>Address</label>
<textarea name=address></textarea><br>
<label>Gender</label>
<input type="radio" name=gender value="male">Male
<input type="radio" name=gender value="female">Female<br>
<label>City</label>
<select name=city>
<option value="valsad">Valsad</option>
<option value="anand">Anand</option>
<option value="surat">Surat</option>
</select><br>
<label>Language</label>
<input type="checkbox" id=lang name="lang[]" value="php">PHP
<input type="checkbox" id=lang name="lang[]" value="python">Python
<input type="checkbox" id=lang name="lang[]" value="html">HTML
<input type="checkbox" id=lang name="lang[]" value="css">CSS
<br>
<button type="submit" name=submit >Submit</button>
</form>
</body>
</HTML>