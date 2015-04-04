<?php 
include("connect.php");
?>

<select name="proceso" id="proceso">
	<?php  
	$consultaGerencia = "SELECT id_proceso,Nom_Proceso FROM tbl_proceso ORDER BY id_proceso ASC";
	$ejecutaGerencia = mysql_query($consultaGerencia)or die(mysql_errro());
	while($rowGerencia = mysql_fetch_array($ejecutaGerencia)){
	?>
	<option value="<?php echo $rowGerencia['id_proceso'] ?>"><?php echo $rowGerencia['Nom_Proceso']; ?></option>
	<?php } ?>

</select>