<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","Juan_Aya","1234","login");

$consulta=" SELECT * FROM usuarios WHERE usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:homeCol.php");
}else{
?>
<?php
include("index.php");
?>
<h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);