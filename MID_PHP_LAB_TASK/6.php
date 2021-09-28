<?php

      $arr=[10,20,30,40,50];

      echo "Array number is  [10, 20, 30, 40,50]";
      echo " <br/>"."Searching for 20 from array";

      for($i=0; $i<count($arr); $i++){
        if($arr[$i]==30){
        	echo "<br>"."The number is found in the array.";
        }

        else{
            echo "";
        }
   }

?>