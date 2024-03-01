<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "gabrielsadasilveira@gmail.com";
    $subject = "Mensagem de Contato";
    $body = "Nome: $name\nEmail: $email\nMensagem:\n$message";

    if (mail($to, $subject, $body)) {
        echo "Sua mensagem foi enviada com sucesso.";
    } else {
        echo "Desculpe, ocorreu um erro ao enviar sua mensagem.";
    }
}
?>
