<?php 
include("connect.php");
?>

<select name="area" id="area">
	<?php  
	$consultaArea = "SELECT * FROM tbl_area ORDER BY Nom_Area ASC";
	$ejecutaArea = mysql_query($consultaArea)or die(mysql_error());
	while($rowArea = mysql_fetch_array($ejecutaArea)){
	?>
	<option value="<?php echo $rowArea['id_area'] ?>"><?php echo $rowArea['Nom_Area']; ?></option>
	<?php } ?>

</select>