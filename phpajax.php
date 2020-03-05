<?php
   // Array with names
   $a[] = "Martin Alejandro Cabatuan";
   $a[] = "Thommy Calledo";
   $a[] = "Noel De Ramos";
   $a[] = "Aljun Marcellana";
   $a[] = "Lovely Joy Rivera";
   $a[] = "Alvin Romaguera";
   $a[] = "Josephine Salonoy";
   $a[] = "Carl Benedict Sarsonas";
   $a[] = "Alfie Villarin";
   $a[] = "Reymartin Ybanez";
   $a[] = "Mark Ronald Manalop";
  
   
   $q = $_REQUEST["q"];
   $hint = "";
   
   if ($q !== "") {
      $q = strtolower($q);
      $len = strlen($q);
      
      foreach($a as $name) {
      
         if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
               $hint = $name;
            }else {
               $hint .= ", $name";
            }
         }
      }
   }
   echo $hint === "" ? "Please enter a valid course name" : $hint;
?>