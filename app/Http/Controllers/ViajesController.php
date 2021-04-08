<?php

namespace App\Http\Controllers;

use App\Models\Viaje;
use Illuminate\Http\Request;

class ViajesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $viajes = Viaje::where('origen', 'like', '%'.$request->buscar.'%')
            ->orWhere('destino', 'like', '%'.$request->buscar.'%')
            ->orderBy('created_at', 'asc')->paginate(12);

        return view('viajes.index', [
            'viajes' => $viajes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('viajes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $viaje = Viaje::create([
            'origen' => $request->origen,
            'destino' => $request->destino,
            'fecha' => $request->fecha .' '. $request->hora
        ]);

        session()->flash('message', 'Viaje registrado exitosamente.');

        alert()->success('Exito', 'Viaje registrado exitosamente.')->autoClose(3000);

        return redirect()->route('viajes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Viaje $viaje)
    {
        return view('viajes.show', [
            'viaje' => $viaje
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Viaje $viaje)
    {
        return view('viajes.edit', [
            'viaje' => $viaje
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Viaje $viaje)
    {
        $viaje->update([
            'origen' => $request->origen,
            'destino' => $request->destino,
            'fecha' => $request->fecha.' '.$request->hora
        ]);

        //session()->flash('message', 'Información de viaje actualizado.');

        alert()->success('Bien', 'Viaje actualizado exitosamente.')->autoClose(3000);

        return redirect()->route('viajes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Viaje $viaje)
    {
        $message = '';

        if ( $viaje->delete() ) {
            
            alert()->success('Exito', 'Viaje eliminado exitosamente.')->autoClose(3000);

            return redirect()->route('viajes');
        }

        alert()->error('SuccessAlert', 'NO se pudo eliminar el viaje.')->autoCLose(3000);

        return redirect()->route('viajes');
    }
}
