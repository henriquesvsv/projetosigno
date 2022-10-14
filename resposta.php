<?php
   
   $xml = simplexml_load_file('signo.xml');
   $data =  $_POST['data'][8].$_POST['data'][9].'/'.$_POST['data'][5].$_POST['data'][6];
    
   //$data = DateTime::createFromFormat( $_POST['data']);
   
   foreach($xml->signo as $registro):
      $datafinal1 = DateTime::createFromFormat('d/m', $registro->dataFim);
      $datafinal= strtotime( $datafinal1->format('m/d'));
      $datainicio1 = DateTime::createFromFormat('d/m', $registro->dataInicio);
      $datainicio = strtotime($datainicio1->format('m/d'));
      $dataatual1 = DateTime::createFromFormat('d/m', $data);
      $dataatual = strtotime($dataatual1->format('m/d'));
      
   
      
     if($dataatual>=1671663600 || $dataatual<=1642633200){
      echo $registro->signoNome.$registro->dataFim.'<br>';
      
      break;
     }
   if( $dataatual>=$datainicio && $dataatual<=$datafinal){
	echo $registro->signoNome.$registro->dataFim.'<br>';
      
   }
endforeach;
?>