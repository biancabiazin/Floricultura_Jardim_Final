<?php

function conectaBD()
{
  $servername = "localhost";
  $database = "Jardim";
  $username = "root";
  $password = "";

  $conexao = mysqli_connect(
    $servername,
    $username,
    $password,
    $database
  );
  if (!$conexao) {
    die("Conexão falhou! " . mysqli_connect_error());
  }
  return $conexao;
}

function desconectaBD($conexao)
{
  mysqli_close($conexao);
}
?>

<?php
   $conn = mysqli_connect("localhost","root","","Jardim");
   if(!$conn){
     die("Conexão Falhou!".mysqli_connect_error());
   }else{
    echo " ";
   }

   $idPlanta = $_POST["id_planta"];
   $nomePlanta = $_POST["nome"];
   $especie = $_POST["especie"];
   $preco = $_POST["preco"];
   $qtdEstoque = $_POST["qtd_estoque"];
   $tamanho = $_POST["tamanho"];

   $varSQL = "INSERT INTO Planta(id_planta,nome,especie,preco,qtd_estoque,tamanho) 
              VALUES({$idPlanta},'{$nomePlanta}','{$especie}','{$preco}', '{$qtdEstoque}', '{$tamanho}')";

   mysqli_query($conn,$varSQL)or die(mysqli_error());      
   
mysqli_close($conn);
?>

<?php
  $conn = mysqli_connect("localhost","root","","Jardim");
  if(!$conn){
    die("Conexão Falhou!".mysqli_connect_error());
  }else{
   echo " ";
  }

  $idPlanta = $_POST["id_planta"];
  $nomePlanta = $_POST["nome"];
  $especie = $_POST["especie"];
  $preco = $_POST["preco"];
  $qtdEstoque = $_POST["qtd_estoque"];
  $tamanho = $_POST["tamanho"];

  $varSQL = "UPDATE Planta 
             SET   nome = '$nomePlanta', especie = '$especie', preco = '$preco', qtd_estoque = '$qtdEstoque', tamanho = '$tamanho'
             WHERE id_planta = {$idPlanta};";

  mysqli_query($conn,$varSQL)or die(mysqli_error());
  
mysqli_close($conn);   
?>

<?php
   $conn = mysqli_connect("localhost","root","","Jardim");
   if(!$conn){
     die("Conexão Falhou!".mysqli_connect_error());
   }else{
    echo " ";
   }

   $idPlanta = $_POST["id_planta"];
   
   $varSQL = "DELETE FROM Planta WHERE id_planta ={$idPlanta}";

   mysqli_query($conn,$varSQL)or die(mysqli_error());

mysqli_close($conn);
?>