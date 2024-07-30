<?php

const ERROR_FILE = "ERROR_FILE";
const PAYPAL_ID  = "ASMPec4jwvtHFWPZ4I5uNW6Whvg6uG_Udu20yFga3WaKEl5fdIhHyJN-jAPjjDk_G91hvCOxPvf670KQ";
const PAYPAL_SECRET  = "EEW1wmSoQ_X67azSAKrpzSIvO4PO7qdSGY4dLFiDwaDMI3z3QkuxMS4oXprYV-dK9oIfki18ALz85ayM";
const DOLLAR_RATE = 4500;
const CURRENCY = 'Ar';
$nInCart = isset($_SESSION['cart']) && $_SESSION['cart'] ? count($_SESSION['cart']) : 0;

function truncateText($text, $maxLength = 100)
{
    if (strlen($text) > $maxLength) {
        $text = substr($text, 0, $maxLength) . '...';
    }
    return $text;
}
function dump($mVar)
{
    echo "<pre>";
    var_dump($mVar);
    echo "</pre>";
}
