<?php 
include("connect.php");
?>

<select name="su_int" id="su_int">
	<?php  
	$consultaSuperInt = "SELECT * FROM tbl_sup_int ORDER BY Nom_Sup_Int ASC";
	$ejecutaSuperInt = mysql_query($consultaSuperInt)or die(mysql_error());
	while($rowSuperInt = mysql_fetch_array($ejecutaSuperInt)){
	?>
	<option value="<?php echo $rowSuperInt['id_supint'] ?>"><?php echo $rowSuperInt['Nom_Sup_Int']; ?></option>
	<?php } ?>

</select>