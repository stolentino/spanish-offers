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
echo '<h2>' .$word2. '</h2>';
echo '<br>';
echo ' TEXT: ';
echo '<p>Bienvenido a <b>' . $word1 . '</b> donde hablamos su idioma!. 
      Mira este <b>' . $word2. '</b> por solo $<b>' .$word3. '</b>/mes mas impuestos, arrendamiento por <b>' . $word4 . '</b> meses, $<b>'. number_format($word5) . '</b>
      pago inicial (down payment).  No incluye impuestos, título, licencia, opciones ni cargos del concesionario. 
      Sin depósito de garantía. Para clientes altamente calificados  </p>';

echo '<br>';
echo ' HEADLINE: ';
echo '<p>$<b>' . $word3 . '</b>/Mes por <b>' .$word4. '</b> Meses </p>';

echo '<br>';
echo ' DESCRIPTION: ';
echo '<p>';
if(!empty($word7)){
    echo 'VIN # <b>' . $word7 . '</b>. ';
}
if(!empty($word8)){
    echo 'Stock # <b>' . $word7 . '</b>. ';
}
if(!empty($word6)){
    echo 'Precio de venta: $<b>' . number_format($word6) . '</b>.';
}
if(!empty($word5)){
    echo ' $<b>' . number_format($word5) . '</b> pago inicial (down payment). ';
}
echo 'No incluye impuestos, título, licencia, opciones ni cargos del concesionario. Sin depósito de garantía. Para
        clientes altamente calificados  </p>';
echo '<br>';

echo ' <a class="btn btn-default btn-lg" href="index.php" role="button">Make another offer</a>';


include 'inc/footer.php';