<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;

//use Laracasts\Flash\Flash; //

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'ASC')->paginate(5);
        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create'); //me envia al formulario de registro de usuario
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $usuario           = new User($request->all());
        $usuario->password = bcrypt($request->password);
        $usuario->save();
        flash('Se ha registrado' . ' ' . $usuario->name . ' ' . 'de forma exitosa!', 'success')->important();
        return redirect()->route('users.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) // envia el usuario que deseamos modificar hacia la vista Update donde lo procesaremos

    {
        $usuario_edit = User::find($id);
        return view('admin.users.edit')->with('usuario_edit', $usuario_edit);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $usuario_actualizado = User::find($id);
        // $usuario_actualizado->fill($request->all());//realiza la misma función de las siguientes tres lineas reemplata los datodel en el objeto User con los nuevos datos que esta recibiendo.
        $usuario_actualizado->name  = $request->name;
        $usuario_actualizado->email = $request->email;
        $usuario_actualizado->type  = $request->type;
        $usuario_actualizado->save();
        flash('El usuario ' . $usuario_actualizado->name . ' ha sido actualizado de forma exitosa!', 'success')->important();
        return redirect()->route('users.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->delete();

        flash('El usuario ' . $usuario->name . ' ha sido ELIMINADO exitosamente!', 'info')->important();
        return redirect()->route('users.index');

    }
}
