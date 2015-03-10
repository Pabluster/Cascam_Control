<?php 
include("connect.php");
?>

<select name="ejecutor" id="ejecutor">
	<?php  
	$consultaejecutor = "SELECT * FROM  tbl_ejecutor ORDER BY Nom_Ejecutor ASC";
	$ejecutaejecutor = mysql_query($consultaejecutor)or die(mysql_error());
	while($rowejecutor = mysql_fetch_array($ejecutaejecutor)){
	?>
	<option value="<?php echo $rowejecutor['id_ejecutor'] ?>"><?php echo $rowejecutor['Nom_Ejecutor']; ?></option>
	<?php } ?>
</select>