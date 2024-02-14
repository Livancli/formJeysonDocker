<?php

$nome = "Livancli Silvestre";
$sobrenome = "Oliveira";
$idade = 50;
$numero = 10;
$mediaIdade = 50;

//echo $idade . '<br>';
echo $nome . ' ' . $sobrenome . ' e a sua idade é' . ' ' . $idade . '<p>';
$total = $idade + $numero;
echo 'A soma de idade e numero é' . ' ' . $total  . '. <p>';

//TOMADA DE DECISÃO IF

if ($idade > $mediaIdade) {
  echo '<p> Idade é maior que' . ' ' . $mediaIdade . '. <p>';
} else if ($idade === $mediaIdade) {
  echo '<p> Idade é igual que' . ' ' . $mediaIdade . '. <p>';
} else {
  echo '<p> Idade é menor que' . ' ' . $mediaIdade . '. <p>';
}


//LAÇOS DE REPETIÇÃO
for ($i = 0; $i <= 5; $i++) {
  echo '<br> o valor de i é ' . $i;

  if ($i == 3) {
    echo '<p>Passamos pelo 3<p>';
  }
  
}
