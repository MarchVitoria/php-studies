<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

/*o parâmetro "required" dos campos de texto no arquivo html estão ativos, garantindo que não fiquem campos em branco.
porém, o passo abaixo é uma garantia extra de que isso realmentenão vai acontecer.
é uma boa prática definir duas camadas para evitar problemas.*/

if (!empty($nome) && !empty($email) && !empty($mensagem)) {
    $dados = "Nome: $nome\nE-mail: $email\nMensagem: $mensagem\n";

    $file = '2_dados_ex2.txt';
    if (file_put_contents($file, $dados, FILE_APPEND)) {
        echo "Dados armazenados com sucesso!";
    } else {
        echo "Erro ao armazenar os dados.";
    }
} else {
    echo "Por favor, preencha todos os campos.";
}

header("Location: 2_cadastrar_novo.html");
exit;
?>