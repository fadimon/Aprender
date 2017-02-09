<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Category::orderBy('id', 'Desc')->paginate(5);
        return view('admin.categories.index')->with('categorias' /*nombre de la variable a usar en */, $categorias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $categoria = new Category($request->all());
        $categoria->save();

        flash('La categoria ' . $categoria->name . ' ha sido creada exitosamente!', 'success')->important();
        return redirect()->route('categories.index');
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
    public function edit($id)
    {
        $categoria_edit = Category::find($id);
        return view('admin.categories.edit')->with('categoria_edit', $categoria_edit);

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
        $categoria_actualizada = Category::find($id);

        $categoria_actualizada->fill($request->all());
        $categoria_actualizada->save();
        flash('La categoria ' . $categoria_actualizada->name . ' ha sido actualizada de forma exitosa!', 'success')->important();
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Category::find($id);
        $categoria->delete();

        flash('La categoria ' . $categoria->name . ' ha sido ELIMINADA exitosamente!', 'info')->important();
        return redirect()->route('categories.index');
    }
}
