<?php

function isVoyelle($lettre)
{
   $isVoyelle = false;
   if (is_string($lettre) && (strlen($lettre) == 1)) {
       $lettre = strtoupper($lettre);
       if (
           ($lettre == 'A') ||
           ($lettre == 'E') ||
           ($lettre == 'I') ||
           ($lettre == 'O') ||
           ($lettre == 'U')
          ) {
           $isVoyelle = true;
       }
   } else {
       var_dump($lettre);
       echo "paramètre erroné\n";
   }
   return($isVoyelle);
}
function testerVoyelle($lettre)
{
   if (isVoyelle($lettre)) {
       echo "$lettre est une voyelle\n";
   } else {
       echo "$lettre n'est pas une voyelle\n";
   }
}