<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confsenha = $_POST['confsenha'];



if (!empty($nome) && !empty($email) && !empty($senha)) {
$dados = "Nome: $nome\nEmail: $email\nSenha: $senha\n";

    if (strlen($nome) < 3) {
        echo "O nome deve ter no mínimo 3 caracteres.\n";exit;
    }

    elseif (!preg_match("/^\w+([.-_]?\w+)*@\w+([\.-_]?\w+)*(\.\w{2,3})+$/", $email)) {
        echo "Por favor insira um endereço de email válido.\n";
    }

    elseif (strlen($senha) < 8 || !preg_match("/[A-Za-z]/", $senha) || !preg_match("/[0-9]/", $senha)) {
        echo "Por favor digite uma senha válida. A senha deve conter no mínimo 8 caracteres, 
        incluindo pelo menos uma letra maiúscula, uma letra minúscula e um número.";
    }

    elseif ($confsenha != $senha) {
        echo "As duas senhas não batem. Favor verificar e tentar novamente.";
    }

    $file = '3_usuarios_cadastrados.txt';
    if (file_put_contents($file, $dados, FILE_APPEND)) {
        echo "Usuario cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar usuário. Tente novamente.";
        exit;
    }
} else {
    echo "Por favor, preencha todos os campos.";
}

header("Location: 3_cad_novo_usuario.html");
exit;
?>