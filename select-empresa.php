<?php 
include("connect.php");
?>

<select name="empresa" id="empresa">
	<?php  
	$consultaempresa = "SELECT * FROM  tbl_empresa ORDER BY Nom_Empresa ASC";
	$ejecutaempresa = mysql_query($consultaempresa)or die(mysql_error());
	while($rowempresa = mysql_fetch_array($ejecutaempresa)){
	?>
	<option value="<?php echo $rowempresa['id_empresa'] ?>"><?php echo $rowempresa['Nom_Empresa']; ?></option>
	<?php } ?>
</select>