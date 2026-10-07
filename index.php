<?php
function verificarURL($url) {
    return $url == parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

}

function verificarMetodo($metodo){
    return $metodo == $_SERVER ['REQUEST_METHOD'];

}

$rotas = [
    [
        "url" => "/",
        "metodo" => "GET",
        "conteudo" => "Parque de diversão"
    ],
    [
        "url" => "/parque/carrinhobatebate",
        "metodo" => "GET",
        "conteudo" => "carrinho bate-bate"
    ],
    [
        "url" => "/parque/rodagigante",
        "metodo" => "GET",
        "conteudo" => "roda gigante"
    ],
    [
        "url" => "/parque/montanharussa",
        "metodo" => "GET",
        "conteudo" => "Montanha-russa"
    ],
    [
        "url" => "/parque/carrossel",
        "metodo" => "GET",
        "conteudo" => "carrossel"
    ],
    [
        "url" => "/parque/barcodireto",
        "metodo" => "GET",
        "conteudo" => "barco direto"
    ],
    [
        "url" => "/parque/casasustos",
        "metodo" => "GET",
        "conteudo" => "casa sustos"
    ],
    [
        "url" => "/parque/torrequeda",
        "metodo" => "GET",
        "conteudo" => "torre queda"
    ],
    ];

    foreach ($rotas as $rota) {
      if(verificarURL($rota['url']) && verificarMetodo($rota['metodo'])) {
        echo $reto['conteudo'];
      }
    }






    
?>