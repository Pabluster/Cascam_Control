<?php 
include("connect.php");
?>

<select name="gerencia" id="gerencia">
	<?php  
	$consultaGerencia = "SELECT id_gerencia,Nom_Gerencia FROM tbl_gerencia ORDER BY Nom_Gerencia ASC";
	$ejecutaGerencia = mysql_query($consultaGerencia)or die(mysql_errro());
	while($rowGerencia = mysql_fetch_array($ejecutaGerencia)){
	?>
	<option value="<?php echo $rowGerencia['id_gerencia'] ?>"><?php echo $rowGerencia['Nom_Gerencia']; ?></option>
	<?php } ?>

</select>