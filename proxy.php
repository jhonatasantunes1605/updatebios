<?php
// Obtenha a URL da consulta do parâmetro GET
$url = $_GET['url'];

// Verifique se a URL é válida
if (filter_var($url, FILTER_VALIDATE_URL)) {
    // Permitir apenas URLs HTTP e HTTPS
    if (strpos($url, 'http://') !== 0 && strpos($url, 'https://') !== 0) {
        $url = 'http://' . $url;
    }

    // Busque o conteúdo da URL usando cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    // Imprima o conteúdo da resposta
    echo $response;
} else {
    // Se a URL não for válida, retorne um erro
    http_response_code(400);
    echo "URL inválida";
}
?>
