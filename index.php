<?php

$req = key($_GET);
$urlOpcoes = explode("/",$req);
$req = $urlOpcoes[0];
$funcao = isset($urlOpcoes[1])?$urlOpcoes[1]:"/";

$controller = $req."Controller";

require_once "controller/".$controller.".php";

$solicitacao = new $controller();


$solicitacao->req($funcao);
