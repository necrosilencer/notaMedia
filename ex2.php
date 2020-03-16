<?php 

header('content-type: text/html; charset=utf-8');


if (!empty($_GET["nome"]) &&
	!empty($_GET["nota1"]) &&
	!empty($_GET["nota2"]) &&
	!empty($_GET["nota3"]))

{
$nota1 =$_GET['nota1'];
$nota2 =$_GET['nota2'];
$nota3 =$_GET['nota3'];
$nome  =$_GET['nome'];
$resultado = ($nota1+$nota2+$nota3)/3;

echo $nome;
echo '<br>';
echo $resultado;
}

else
{
	echo "<script> alert('Favor prencher os campos!');</script>)";
}


?>
