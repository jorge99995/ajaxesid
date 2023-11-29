<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        //
        return view("Usuarios.index");
    }

    public function userView()
    {

        return view('Usuarios.crear');
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
        $file = $request->file('file');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->store('public/images', $filename);

        $empData = [
            'usuario_id' => $request->usuario_id,
            'name' => $request->name,
            'email' => $request->email,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'fecha_ingreso' => $request->fecha_ingreso,
            'numero_celular' => $request->numero_celular,
            'puesto' => $request->puesto,
            'departamento' => $request->departamento,
            'avatar' => $filename,
        ];

        User::create($empData);
        return response()->json([
            'status' => 200
        ]);
    }
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
