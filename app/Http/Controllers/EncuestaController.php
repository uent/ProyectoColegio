<?php

namespace App\Http\Controllers;

use View;

use Illuminate\Http\Request;

class EncuestaController extends Controller
{
   

    public function IngresarEncuesta()
    {
        $this->validate(request(), [
            'Nombre' => ['required', 'max:200'],
            'Rut' => ['required', 'max:200'],
            'Fnacimiento' => ['required', 'max:200'],
            'Edad' => ['required', 'max:200'],
            'Escolaridad' => ['required', 'max:200'],
            'Nhermanos' => ['required', 'max:200'],
            'Phermanos' => ['required', 'max:200'],
            'NomPadre'=>['required','max:200'],
            'NomMadre'=>['required','max:200'],
            'Direccion'=>['required','max:200'],
            'Telefono'=>['required','max:200'],
            'CorrElec'=>['required','max:200'],
            'NomCompFicha/Fecha'=>['required','max:200'],
            'p21'=>['required','max:200'],
            'p22'=>['required','max:200'],
            'p23'=>['required','max:200'],
            'p24'=>['required','max:200'],
            'p25'=>['required','max:200'],
            'p31'=>['required','max:200'],
            'p32'=>['required','max:200'],
            'p41'=>['required','max:200'],
            'p42'=>['required','max:200'],
            'p43'=>['required','max:200'],
            'p44'=>['required','max:200'],
            'p45'=>['required','max:200'],
            'p51'=>['required','max:200'],
            'p52'=>['required','max:200'],
            'p53'=>['required','max:200'],
            'p54'=>['required','max:200'],
            'p55'=>['required','max:200'],
            'p56'=>['required','max:200'],
            'p57'=>['required','max:200'],
            'p58'=>['required','max:200'],
            'p59'=>['required','max:200'],
            'p510'=>['required','max:200'],
            'p61'=>['required','max:200'],
            'p62'=>['required','max:200'],
            'p63'=>['required','max:200'],
            'p64'=>['required','max:200'],
            'p65'=>['required','max:200'],
            'p66'=>['required','max:200'],
            'p71'=>['required','max:200'],
            'p72'=>['required','max:200'],
            'p73'=>['required','max:200'],
            'p74'=>['required','max:200'],
            'p75'=>['required','max:200'],
            'p76'=>['required','max:200'],
      
        ]);

      $data = request()->all();

      /*$resultado = User::Agregar($data['Nombre'],$data['Apellidos'],
                                  $data['Rut'],$data['Profesion'],$data['Email'],$data['Password']);

      if ($resultado == true)
      {
        return redirect()->to('Mi_menu');
      }
      else echo "ya existe usuario";*/

    }

    /*private function Agregar($data)
    {
      if(User::ExisteRut($data["Rut"]) == false)
      {
        return User::agregar($data['Nombre'],$data['Apellidos'],$data['Rut']);

      }
      else return NULL;
    }*/

}
