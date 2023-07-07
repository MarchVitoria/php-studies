<?php
$nome = $_POST['nome'];
$checkin = $_POST['check-in'];
$checkout = $_POST['check-out'];
$data_atual = date('Y-m-d');

if (!empty($nome) && !empty($checkin) && !empty($checkout)) {
    $dados = "Nome: $nome\n Data check-in: $checkin\n Data check-out: $checkout\n";
    $file = "4_reservas.txt";

    if (strlen($nome) > 50) {
        echo "Quantidade de caracteres excedida (máx. 50).";
    }

    elseif ($checkin < $data_atual) {
        echo "Data inválida. A data de check-in ($checkin) não pode ser anterior à data de hoje.\n Favor selecionar outra data. $data_atual";
    }

    elseif ($checkout < $checkin) {
        echo "Data inválida. A data de check-out não pode ser anterior à data de check-in.\n Favor selecionar outra data.";
    }
  
    elseif (file_put_contents($file, $dados, FILE_APPEND)) {
        echo "Reserva efetuada com sucesso!";
        // header("Location: 4_nova_reserva.html");
        exit;
    } else {
        echo "Erro ao efetuar reserva. Tente novamente.";
    }
} else {
    echo "Por favor, preencha todos os campos.";
}
?>