<?php

namespace App\Http\Controllers;
use App\Models\Conductore;
use App\Models\Planta;
use App\Models\Vehiculo;
use App\Models\Viaje;
use Illuminate\Http\Request;

/**
 * Class ViajeController
 * @package App\Http\Controllers
 */
class ViajeController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-viaje|crear-viaje|editar-viaje|borrar-viaje')->only('index');
         $this->middleware('permission:crear-viaje', ['only' => ['create','store']]);
         $this->middleware('permission:editar-viaje', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-viaje', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viajes = Viaje::paginate();

        return view('viaje.index', compact('viajes'))
            ->with('i', (request()->input('page', 1) - 1) * $viajes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $viaje = new Viaje();
        $plantas = Planta::pluck('nombreplanta','id');
        $conductor = Conductore::pluck('nombreconductor','id');
        $vehiculo = Vehiculo::pluck('placavehiculo','id');

        return view('viaje.create', compact('viaje','plantas','conductor','vehiculo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Viaje::$rules);

        $viaje = Viaje::create($request->all());

        return redirect()->route('viajes.index')
            ->with('success', 'Viaje created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $viaje = Viaje::find($id);

        return view('viaje.show', compact('viaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $viaje = Viaje::find($id);
        $plantas = Planta::pluck('nombreplanta','id');
        $conductor = Conductore::pluck('nombreconductor','id');
        $vehiculo = Vehiculo::pluck('placavehiculo','id');

        return view('viaje.edit', compact('viaje','plantas','conductor','vehiculo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Viaje $viaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Viaje $viaje)
    {
        request()->validate(Viaje::$rules);

        $viaje->update($request->all());

        return redirect()->route('viajes.index')
            ->with('success', 'Viaje updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $viaje = Viaje::find($id)->delete();

        return redirect()->route('viajes.index')
            ->with('success', 'Viaje deleted successfully');
    }
}
