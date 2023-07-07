<?php

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$genero = $_POST['genero'];
$frutas = $_POST['frutas'];
$comentarios = $_POST['comentarios'];
$aceite = $_POST['aceite'];

$dados = "Nome: " . $nome . "\n" . "Email: " . $email . "\n" .
            "Endereço: " . $endereco . "\n" . "Celular: " . $celular . "\n" .
            "Gênero: ". $genero . "\n" . "Frutas: " . $frutas . "\n" . 
            "Comentário: " . $comentarios . "\n" . "Termos e condições: " . $aceite;

$file = '1_dados.txt';
file_put_contents($file, $dados, FILE_APPEND);

echo "Cadastro realizado com sucesso!";

// echo "Dados enviados usando o método POST:<br>";
// echo "Nome: " . $nome . "<br>";
// echo "Email: " . $email . "<br>";

?>
