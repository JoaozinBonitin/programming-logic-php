<?php
$word1 = "invertebrado";
$word2 = "anelideo";
$word3 = "onivoro";

if ($word1 == "vertebrado"){
    if ($word2 == "ave"){
        if ($word3 == "carnivoro"){
            echo "aguia" . PHP_EOL;
        } elseif ($word3 == "onivoro"){
            echo "pomba" . PHP_EOL;
        }
    } elseif ($word2 == "mamifero"){
        if ($word3 == "onivoro"){
            echo "homem" . PHP_EOL;
        } elseif($word3 == "herbivoro"){
            echo "vaca" . PHP_EOL;
        }
    }
}

if ($word1 == "invertebrado"){
    if ($word2 == "inseto"){
        if ($word3 == "hematofago"){
            echo "pulga" . PHP_EOL;
        } elseif ($word3 == "herbivoro"){
            echo "lagarta" . PHP_EOL;
        }
    } elseif ($word2 == "anelideo"){
        if ($word3 == "hematofago"){
            echo "sanguessuga" . PHP_EOL;
        } elseif ($word3 == "onivoro"){
            echo "minhoca" . PHP_EOL;
        }
    }
}
