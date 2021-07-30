<?php
  $ano = $_POST['ano'];
  $seculo = substr((($ano / 100) + 1), 0 ,2); 

  echo "O Seculo é ", $seculo;
?>