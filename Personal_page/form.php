<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["fernandoalextech@gmail.com"];
  
    // Faz algo com os dados recebidos
    // Por exemplo, envia um email com os dados
  
    // Redireciona o usuário para uma página de confirmação
    header("Location: contato.html");
    exit;
  }
  ?>