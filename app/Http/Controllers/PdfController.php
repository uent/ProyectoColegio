<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use resources\views;

class PdfController extends Controller
{
  public static function GenerarPdfAnamnesis($datos) {

      $view =  \View::make('pdf.GenerarAnamnesis')->with("datos",$datos )->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);

      return $pdf->stream('invoice');
  }

    public static function GenerarPdfCuestionario($datos) {

      $view =  \View::make('pdf.GenerarCuestionario')->with("datos",$datos )->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);

      return $pdf->stream('invoice');
    }
}
