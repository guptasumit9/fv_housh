 
<!DOCTYPE html>
<html>
<head>
	<?php
include 'link.php';
?>
	<title>My Cart</title>
</head>
<body>
	<?php
	include 'nev.php';
	include 'conn.php';
	$id=$_GET['id'];
	$select="select * from product where id=$id";
	$query=mysqli_query($con,$select);
	$count=mysqli_num_rows($query);
	while ($fetch=mysqli_fetch_array($query)) {
		 ?>
            <tr>
                <td><?php echo $fetch['id']; ?></td>
                <td><?php echo $fetch['Name']; ?></td>
                <td><?php echo $fetch['Descriptoin']; ?></td>
                <td><?php echo $fetch['Quantity']; ?></td>
                <td><?php echo $fetch['Price']; ?></td>
                <td><?php echo $fetch['M_Price']; ?></td>
                <td >
                	<img src="../fv_admin/<?php echo $fetch['Img_file']; ?>" style="height: 100px; width: 200px;"> </td>
                <td><?php echo $fetch['Img_file']; ?></td>
           
            </tr>
    <?php
	}
	?>


</body>
</html>