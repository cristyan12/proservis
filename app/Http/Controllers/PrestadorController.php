<?php

namespace App\Http\Controllers;

use App\Prestador;
use Illuminate\Http\Request;

class PrestadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestadores = Prestador::orderBy('id', 'DESC')->paginate(10);

        return view('prestadores.index', compact('prestadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prestadores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prestador = Prestador::create($request->all());

        return redirect()->route('prestadores.edit', $prestador->id)
            ->with('info', 'Prestador creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prestador  $prestador
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prestador = Prestador::find($id);

        return view('prestadores.show', compact('prestador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prestador = Prestador::find($id);

        return view('prestadores.update', compact('prestador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prestador  $prestador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prestador = Prestador::find($id);

        $prestador->fill($request->all())->save();

        return redirect()->route('prestadores.edit', $prestador->id)
            ->with('info', 'Prestador actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prestador  $prestador
     * @return \Illuminate\Http\Response 
     */
    public function destroy($id)
    {
        Prestador::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
