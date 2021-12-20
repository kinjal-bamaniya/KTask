
<h3>Records</h3>
<table border=1>
<tr>
<td>NO</td>
<td>NAME</td>
<td>ADDRESS</td>
<td>GENDER</td>
<td>CITY</td>
<td>Language</td>
<td>Action</td>
<?php
include 'conn.php';
$qry="select * from user";
$r=mysqli_query($conn,$qry);
while($row=mysqli_fetch_array($r)){
 ?>
</tr>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['city']; ?></td>
<td><?php echo $row['lang']; ?></td>
<td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
</tr>
<?php } ?>
</table>