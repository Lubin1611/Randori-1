<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 20/12/2018
 * Time: 15:16
 */


$tab = [1, -4, 7, 12];

   function calcTab ($tab) {

       $compteur = 0;

       foreach ($tab as $toto) {

           if ($toto > 0) {

               $compteur += $toto;

           }
       }

       return $compteur;
   }


  echo calcTab($tab);