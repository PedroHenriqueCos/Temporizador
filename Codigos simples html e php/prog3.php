<?php
$nome = $_GET["nome"]; // campo 'nome' do form
$ano = $_GET["nasc"]; // campo 'nasc' do form
$dif = 2020 - $ano;
echo $nome . " tem " . $dif . " anos de idade";
?>