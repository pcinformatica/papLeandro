<?php
$con=mysqli_connect("localhost","root","","pap2021saopedro");
$id=intval($_GET['id']);
$sql= "delete from categorias where categoriaId = '$id'";

mysqli_query($con,$sql);
header("location:listaCategorias.php");
?>