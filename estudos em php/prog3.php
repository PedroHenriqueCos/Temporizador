<?php
$nome = $_GET["nome"]; // campo 'nome' do form
$ano = $_GET["nasc"]; // campo 'nasc' do form
$dif = 2020 - $ano;
echo $nome . " tem " . $dif . " anos de idade";
?>

<?php 
// O nome de uma variável deve iniciar pelo caracter ‘$’, como, por exemplo, ‘$nome’.
// Os dados submetidos são recebidos por meio de $_GET["atributo name do componente do form"]
// O ponto ( . ) no comando ‘echo’ é o operador de concatenação
?>