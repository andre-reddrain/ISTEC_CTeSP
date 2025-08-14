<?php
const nl = '<br>';

$ficha = $_SERVER['PHP_SELF'];
echo '$_SERVER[PHP_SELF] = ' . $ficha . nl;

$method = $_SERVER['REQUEST_METHOD'];
echo '$_SERVER[REQUEST_METHOD] = ' . $method . nl;

$querystring = $_SERVER['QUERY_STRING'];
echo '$_SERVER[QUERY_STRING] = ' . $querystring . nl;

$host = $_SERVER['HTTP_HOST'];
echo '$_SERVER[HTTP_HOST] = ' . $host . nl;

$raiz = rtrim(dirname($ficha), '/\\');
echo 'Caminho = ' . $raiz . nl;

//http://
$target = '/um.php';

$uri = "http://$host$raiz$target";
echo $uri . nl;

//header("Location: $uri");
