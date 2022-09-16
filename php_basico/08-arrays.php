<?php
//ARRAYS
$carros = array("BMW", "Veloster", "Hilux");
$carros[] = "Amarok";
print_r($carros);
echo "<hr>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
print_r($motos);
echo "<hr>";

$clientes = ["Lucas", "Rafael", "Souza"];
print_r($clientes);
echo "<hr>";

//COUNT
$totalClientes = count($clientes);
echo $totalClientes;
echo "<hr>";

//FOREACH
foreach ($carros as $valor) {
    echo $valor . "<br>";
}
echo "<hr>";
//ARRAYS ASSOCIATIVOS

$pessoa = array("nome" => "Lucas", "idade" => 23, "altura" => 1.75,);
$pessoa["cidade"] = "Joinville";
echo $pessoa["idade"];

foreach ($pessoa as $indice => $valor) {
    echo $indice . ":" . $valor . "<br>";
}
echo "<hr>";

//ARRAY MULTIDIMENCIONAIS
$times = array(
    "cariocas" => array("Campeao"=>"Flamengo", "Vice"=> "Vasco", "Terceiro colocado"=> "Fluminense"),
    "paulistas" => array("São paulo", "Corinthians", "Santos"),
    "Sulistas" => array("Grêmio", "Joinville", "Curitiba")
);

echo "<br>";

foreach ($times["cariocas"] as $indice => $valor) {
    echo $indice.": " .$valor."<br>";
}