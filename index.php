<?php

echo "<h1>Ler um arquivo XML com PHP</h1>";

// Carrega o arquivo com XML e transforma o arquivo XML em Objeto
$xml = simplexml_load_file('arquivo.xml');

// Apresenta as informações do XML
echo 'ID: ' . $xml->id . '<br>';
echo 'Nome: ' . $xml->nome . '<br>';
echo 'E-mail: ' . $xml->email . '<br>';
echo 'Celular: ' . $xml->celular . '<br>';