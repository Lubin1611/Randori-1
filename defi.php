<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 20/12/2018
 * Time: 15:16
 */


$tab = [1, -4, 7, 12, 0.8];

   function calcTab ($tab) {

       $compteur = 0;

       foreach ($tab as $toto) {

           if ($toto > 0 and is_int($toto)) {

               $compteur += $toto;

           }
       }

       return $compteur;
   }


  echo calcTab($tab);