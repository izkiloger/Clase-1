<?php

namespace App\Http\Controllers;
use App\Models\datoss;
use Illuminate\Http\Request;

class RegistrarController extends Controller
{
    public function index(){
        return view('registrar');
    }
    public function registrar(Request $request) {
        $request->validate([
            'pname' => 'required|string',
            'sname' => 'required',
            'papellido' => 'required',
            'sapellido' => 'required',
            'cedula' => 'required',
            'email' => 'required',
            'celular' => 'required',
            'estrato' => 'required',
            'ingresos' => 'required',
            'direccion' => 'required',
            'ciudad' => 'required',

        ]);
if(($request ->pname)=="juan"){
    return redirect()->back()->withInput()->with('error','Acá en el Departamento de Planeación no aceptamos a Juan. Por favor,
    regístrate con otro nombre.'); 
}
if ($request->estrato == 0 && $request->ingreso < 100000) {
    return redirect()->back()->withInput()->with('A1','Pobresa extrema'); 
}


   

        
        $data = $request->all();
        $this->create($data);
        return redirect()->back()->withInput()->with('correcto', 'Usuario registrado correctamente');

    }
    public function create(array $data)
    {
        //dd($data);//imprimir el array
        datoss::create([
            'primer_nombre' => $data['pname'],
            'segundo_nombre' => $data['sname'],
            'primer_apellido' => $data['papellido'],
            'segundo_apellido' => $data['sapellido'],
            'cedula' => $data['cedula'],
            'email' => $data['email'],
            'celular' => $data['celular'],
            'estrato' => $data['estrato'],
            'ingreso_mensuales' => $data['ingresos'],
            'direccion' => $data['direccion'],
            'ciudad' => $data['ciudad']
            
        ]);
    }
}