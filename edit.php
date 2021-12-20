<?php

include "conn.php";

$id = $_GET['id'];
$qry="select * from user";
$r=mysqli_query($conn,$qry);
$row=mysqli_fetch_array($r);
$lang = $row['lang'];
$langchk = explode(",",$lang);

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$address=$_POST['address'];
	$gen=$_POST['gender'];
	$city=$_POST['city'];
	$lang=$_POST['lang'];
	$langchk=implode(",",$lang);
	
	$update = "UPDATE user SET name ='$name',address = '$address',gender = '$gen',city = '$city',lang = '$langchk' WHERE id = '$id'";
$u1 = mysqli_query($conn,$update);
if($u1){
	echo "Data Updated";
header("Location:display.php");
}else{
echo "Error";
header("Location:display.php");
}
}
?>

<HTML>
<head>
<style>
</style>
</head>
<body>
<h2>Edit Form</h2>
<form method=post action="">
<label>Name</label>	
<input  type="text" name=name value="<?php echo $row['name']; ?>"><br>
<label>Address</label>
<textarea name=address><?php echo $row['address']; ?></textarea><br>
<label>Gender</label>
<input type="radio" name=gender value="male"
<?php

if($row['gender']=='male'){
	echo "checked";
}
?>
>Male
<input type="radio" name=gender value="female"
<?php

if($row['gender']=='female'){
	echo "checked";
}
?>>Female<br>
<label>City</label>
<select name=city>
<option value="valsad">Valsad</option>
<option value="anand">Anand</option>
<option value="surat">Surat</option>
</select><br>
<label>Language</label>
<input type="checkbox" id=lang name="lang[]" value="php"
<?php

if(in_array('php',$langchk)){
	echo "checked";
}
?>>PHP
<input type="checkbox" id=lang name="lang[]" value="python"
<?php

if(in_array('python',$langchk)){
	echo "checked";
}
?>>Python
<input type="checkbox" id=lang name="lang[]" value="html"
<?php

if(in_array('html',$langchk)){
	echo "checked";
}
?>>HTML
<input type="checkbox" id=lang name="lang[]" value="css"
<?php

if(in_array('css',$langchk)){
	echo "checked";
}
?>>CSS
<br>
<button type="submit" name=submit >Submit</button>
</form>
</body>
</HTML>