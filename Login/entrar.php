<?php 

include('db.php');

$USUARIO=$_POST ['usuario'];
$PASSWORD=$_POST ['password'];

session_start();
$_SESSION['usuario']= $USUARIO;

$consulta = "SELECT* FROM persona WHERE usuario = '$USUARIO' and Password = '$PASSWORD' ";
$resultado= mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
	header("location:index.html");
}
else{
	include("login.html");
	?>
	<h1>Usuario o Contraseña Incorrecta</h1>

	<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>