<?php
// URL do site que você deseja acessar
$url = $_GET['url'];

// Faz a solicitação para a URL desejada
$response = file_get_contents($url);

// Retorna a resposta para o cliente
echo $response;
?>
