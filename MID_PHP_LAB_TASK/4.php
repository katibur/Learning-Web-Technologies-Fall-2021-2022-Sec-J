<?php

  $n1=100;
  echo "First Given Number is=> ". $n1;
  $n2=500;
  echo "<br/>"."Second Given Number is=> ". $n2;
  $n3=1000;
  echo "<br/>"."Thrid Given  Number is=> ". $n3;


  if($n1>$n2 && $n1>$n3){
        echo "<br/>The Gratter Number is:".$n1;
      }


      elseif($n2>$n1 && $n2>$n3){
          echo "<br/>"."The Gratter Number is:".$n2;
      }
      
        elseif ($n3>$n1 && $n3>$n2){
          echo "<br/>"."The Gratter Number is:".$n3;
           
        }
        
        else
         echo "None"
          
?>