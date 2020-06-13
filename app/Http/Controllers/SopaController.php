<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SopaController extends Controller
{


    public function buscar(Request $request){

      // Validación de request vacío
      if ($request->patron == 0 || $request->patron == null || !isset($request->patron)) {
        return back()->with('error', 'Debe seleccionar algún patron para analizar');
      }


      // Pegar a la api para buscar el contenido de la sopa de letras seleccionada
      $client = new Client([
      'base_uri' => 'http://localhost:3000',
      'timeout'  => 2.0,
      ]);


      $response = $client->request('GET', '/'. $request->patron);
      $contenido = json_decode( $response->getBody()->getContents() );


      $columnas = $contenido[0]->columnas;
      $filas = $contenido[0]->filas;
      $cant_cols = count($columnas);
      $cant_filas = count($filas);
      $palabra_clave = 'oie';
      $coincidencias = 0;
      $palabra_encontrada = 0;
      $diagonal = 0;

      foreach ($columnas as $columna) {
        $coincidencias += buscarOrdenado($columna->letras, $palabra_clave, $palabra_encontrada);
        $coincidencias += buscarRevez($columna->letras, $palabra_clave, $palabra_encontrada);
      }

      foreach ($filas as $fila) {
        $coincidencias += buscarOrdenado($fila->letras, $palabra_clave, $palabra_encontrada);
        $coincidencias += buscarRevez($fila->letras, $palabra_clave, $palabra_encontrada);
      }
      if($cant_cols >= 3 && $cant_filas >= 3){
        $coincidencias += buscarDiagonalOrdenado($filas, $diagonal);
        $coincidencias += buscarDiagonalRevez($filas, $diagonal);
      }


      return back()->with('success', 'Ha habido '. $coincidencias . ' coincidencias de la palabra ' . $palabra_clave);

    }

}
