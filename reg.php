<?php

$documento=$_POST['documentou'];
$nombre=$_POST['nombreu'];
$nick=$_POST['nicku'];
$correo=$_POST['correou'];
$password=$_POST['passwordu'];
$rpassword=$_POST['rpasswordu'];

$link = mysqli_connect("localhost", "root", "", "usuarios");

if ($link){
echo "conexion exitosa a usuarios";
}else{
echo "error en la conexion " .mysqli_error($link);
}

if($password = $rpassword){

$contraseñau = md5($password);
$sql = "INSERT INTO datos VALUES ('$documento','$nombre','$nick','$correo','$contraseñau')";
$consulta = mysqli_query($link, $sql);

if ($consulta){
echo "<p>registro exitoso</p>" .$consulta;
}else{
echo "<p>Error al registrar</p>" .$mysqli_error($link, $sql);
}
}else{
echo "las contraseñas no coinciden";
}  
?>
