<?php
use App\controllers\LoginController;

//Pega o caminho da URL
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//Auxilia ao mudar a pasta destino
$base = '/Projeto_IF-Mais/Public';
$route = str_replace($base, '', $url);

switch ($route) {
    case '/':
        (new LoginController())->mostrarLogin();
        break;
    default:
        http_response_code(404);
        echo "Página não encontrada";
        echo "$url";
};

?>