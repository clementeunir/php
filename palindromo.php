<?php
function palindromo($palabra)

{
    $revpalabra = $palabra;
    $newpalabra = $palabra;

    $search = explode(",", "ç,æ,œ,á,é,í,ó,ú,à,è,ì,ò,ù,ä,ë,ï,ö,ü,ÿ,â,ê,î,ô,û,å,e,i,ø,u");
    $replace = explode(",", "c,ae,oe,a,e,i,o,u,a,e,i,o,u,a,e,i,o,u,y,a,e,i,o,u,a,e,i,o,u");

    $revpalabra = str_replace($search, $replace, $revpalabra);
    $newpalabra = str_replace($search, $replace, $newpalabra);

    $revpalabra = str_replace(" ", "", $revpalabra);
    $revpalabra = strrev($revpalabra);
    $revpalabra = strtolower($revpalabra);

    $newpalabra = str_replace(" ", "", $newpalabra);
    $newpalabra = strtolower($newpalabra);

    if ($palabra == "") {
        echo $palabra . "String vacío, intenta de nuevo";
        return;
    }
    if (strcmp($newpalabra, $revpalabra) != 0) {
        echo $palabra . " no es un palíndromo ";
        return;
    }
    echo $palabra . " es un palíndromo";
    // return $palabra . " es un palíndromo";
}

function palindromoVainilla($palabra)
{

    setlocale(LC_ALL, "es_MX");

    $splitPalabra = str_split($palabra);

    // print_r($splitPalabra);
    // Primero vamos a quitar los acentos
    $arrSearch = ["," => ",", "á" => "a", "é" => "e", "í" => "i", "ó" => "o", "ú" => "u"];
    for ($i = 0; $i < count($splitPalabra); $i++) {
        foreach ($arrSearch as $key => $valor) {
            print(utf8_encode($splitPalabra[$i]) . " no es $key\n");
            if (utf8_encode($splitPalabra[$i]) == $key) {
                print("true");

                $splitPalabra[$i] = utf8_encode($valor);
            }
        }
    }

    print_r($splitPalabra);
}
