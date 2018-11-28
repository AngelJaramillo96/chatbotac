<?php
include_once "somosioticos_dialogflow.php";
credenciales('angeljara96','alicia1996');
$cUsuarios=mysqli_connect('localhost','root','','usuarios') or die("no se pudo conectar en usurios");
$concunec=mysqli_connect('localhost','root','','concurrencia') or die("no se pudo conectar");
if(intent_recibido("num")){
	$val = obtener_variables()['num1'];
	$val2 = obtener_variables()['num2'];
	$val3 = $val + $val2;
	enviar_texto($val3." es la suma de ".$val." y ".$val2);
}else if(intent_recibido("InsertarN")){
	$status=0;
	$apellidos=obtener_variables()['last'];
	$contra=obtener_variables()['contra'];
	$edad=obtener_variables()['edad'];
	$mail=obtener_variables()['mail'];
	$name=obtener_variables()['name'];
	$sql=mysql_query("INSERT INTO usuarios (apellidos,contra,edad,mail,nombre,sesion,status) VALUES ('$apellidos','$contra','$edad','$mail','$name','$status','')");

}
?>