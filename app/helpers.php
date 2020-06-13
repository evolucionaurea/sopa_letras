<?php


function buscarOrdenado($array, $palabra_clave, $palabra_encontrada)
{

  for ($i=0; $i < count($array); $i++) {
    if ($array[$i] === 'o') {
      if(isset($array[$i+1]) && $array[$i+1] === 'i' && isset($array[$i+2]) && $array[$i+2] === 'e'){
        $palabra_encontrada++;
      }
    }
  }

  return $palabra_encontrada;
}


function buscarRevez($array, $palabra_clave, $palabra_encontrada)
{
  $reversa = array_reverse($array);
  for ($i=0; $i < count($reversa); $i++) {
    if ($reversa[$i] === 'o') {
      if(isset($reversa[$i+1]) && $reversa[$i+1] === 'i' && isset($reversa[$i+2]) && $reversa[$i+2] === 'e'){
        $palabra_encontrada++;
      }
    }
  }
  return $palabra_encontrada;
}


function buscarDiagonalOrdenado($array, $diagonal)
{

  foreach ($array as $key => $value) {

    for ($i=0; $i < count($value->letras); $i++) {
      if ($value->letras[$i] === 'o') {
        if(isset($array[$i+1]->letras[$i+1]) && $array[$i+1]->letras[$i+1] === 'i'){
          if(isset($array[$i+2]->letras[$i+2]) && $array[$i+2]->letras[$i+2] === 'e'){
            $diagonal+= 1;
          }
        }
        if(isset($array[$i-1]->letras[$i-1]) && $array[$i-1]->letras[$i-1] === 'i'){
          if(isset($array[$i-2]->letras[$i-2]) && $array[$i-2]->letras[$i-2] === 'e'){
            $diagonal+= 1;
          }
        }
      }
    }
  }

  return $diagonal;
}



function buscarDiagonalRevez($array, $diagonal)
{

  $reversa = array_reverse($array);
  foreach ($array as $key => $value) {
    for($i=count($value->letras)-1;$i>=0;$i--){
      if ($value->letras[$i] === 'o') {
        if(isset($array[$i-1]->letras[$i-1]) && $array[$i-1]->letras[$i-1] === 'i'){
          if(isset($array[$i-2]->letras[$i-2]) && $array[$i-2]->letras[$i-2] === 'e'){
            $diagonal+= 1;
          }
          if(isset($array[$i+1]->letras[$i+1]) && $array[$i+1]->letras[$i+1] === 'i'){
            if(isset($array[$i+2]->letras[$i+2]) && $array[$i+2]->letras[$i+2] === 'e'){
              $diagonal+= 1;
            }
          }
        }
      }
    }
  }

  return $diagonal;
}


 ?>
