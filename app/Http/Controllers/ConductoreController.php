<?php

namespace App\Http\Controllers;

use App\Models\Conductore;
use Illuminate\Http\Request;

/**
 * Class ConductoreController
 * @package App\Http\Controllers
 */
class ConductoreController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-conductor|crear-conductor|editar-conductor|borrar-conductor')->only('index');
         $this->middleware('permission:crear-conductor', ['only' => ['create','store']]);
         $this->middleware('permission:editar-conductor', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-conductor', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conductores = Conductore::paginate();

        return view('conductore.index', compact('conductores'))
            ->with('i', (request()->input('page', 1) - 1) * $conductores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $conductore = new Conductore();
        return view('conductore.create', compact('conductore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Conductore::$rules);

        $conductore = Conductore::create($request->all());

        return redirect()->route('conductores.index')
            ->with('success', 'Conductore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conductore = Conductore::find($id);

        return view('conductore.show', compact('conductore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $conductore = Conductore::find($id);

        return view('conductore.edit', compact('conductore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Conductore $conductore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conductore $conductore)
    {
        request()->validate(Conductore::$rules);

        $conductore->update($request->all());

        return redirect()->route('conductores.index')
            ->with('success', 'Conductore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $conductore = Conductore::find($id)->delete();

        return redirect()->route('conductores.index')
            ->with('success', 'Conductore deleted successfully');
    }
}
