<?php
session_start();
$word0 = 'Lease';
$word1 = htmlspecialchars($_SESSION['word'][1]);
$word2 = htmlspecialchars($_SESSION['word'][2]);
$word3 = htmlspecialchars($_SESSION['word'][3]);
$word4 = htmlspecialchars($_SESSION['word'][4]);
$word5 = htmlspecialchars($_SESSION['word'][5]);
$word6 = htmlspecialchars($_SESSION['word'][6]);
$word7 = htmlspecialchars($_SESSION['word'][7]);
$word8 = htmlspecialchars($_SESSION['word'][8]);

include 'inc/header.php';

echo '<h1>Lease Offer</h1>';
echo '<br>';
echo ' TEXT: ';
echo '<p>Bienvenido a ' . $word1 . ' donde hablamos su idioma!. 
      Mira este ' . $word2. ' por solo $' .$word3. '/mes mas impuestos, arrendamiento por ' . $word4 . ' meses, $'. $word5 . '
      pago inicial (down payment).  No incluye impuestos, título, licencia, opciones ni cargos del concesionario. 
      Sin depósito de garantía. Para clientes altamente calificados  </p>';

echo '<br>';
echo ' HEADLINE: ';
echo '<p>$' . $word3 . '/Mes por ' .$word4. ' Meses </p>';

echo '<br>';
echo ' DESCRIPTION: ';
echo '<p>';
if(!empty($word7)){
    echo 'VIN # ' . $word7 . '. ';
}
if(!empty($word8)){
    echo 'Stock # ' . $word7 . '. ';
}
if(!empty($word6)){
    echo 'Precio de venta: $' . $word6 . '.';
}
if(!empty($word5)){
    echo ' $' . $word5 . ' pago inicial (down payment). ';
}
echo 'No incluye impuestos, título, licencia, opciones ni cargos del concesionario. Sin depósito de garantía. Para
        clientes altamente calificados  </p>';
echo '<br>';

echo ' <a class="btn btn-default btn-lg" href="index.php" role="button">Make another offer</a>';


include 'inc/footer.php';