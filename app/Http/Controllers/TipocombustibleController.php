<?php

namespace App\Http\Controllers;

use App\Models\Tipocombustible;
use Illuminate\Http\Request;

/**
 * Class TipocombustibleController
 * @package App\Http\Controllers
 */
class TipocombustibleController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-tipocombustible|crear-tipocombustible|editar-tipocombustible|borrar-tipocombustible')->only('index');
         $this->middleware('permission:crear-tipocombustible', ['only' => ['create','store']]);
         $this->middleware('permission:editar-tipocombustible', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-tipocombustible', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipocombustibles = Tipocombustible::paginate();

        return view('tipocombustible.index', compact('tipocombustibles'))
            ->with('i', (request()->input('page', 1) - 1) * $tipocombustibles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipocombustible = new Tipocombustible();
        return view('tipocombustible.create', compact('tipocombustible'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tipocombustible::$rules);

        $tipocombustible = Tipocombustible::create($request->all());

        return redirect()->route('tipocombustibles.index')
            ->with('success', 'Tipocombustible created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipocombustible = Tipocombustible::find($id);

        return view('tipocombustible.show', compact('tipocombustible'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipocombustible = Tipocombustible::find($id);

        return view('tipocombustible.edit', compact('tipocombustible'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tipocombustible $tipocombustible
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipocombustible $tipocombustible)
    {
        request()->validate(Tipocombustible::$rules);

        $tipocombustible->update($request->all());

        return redirect()->route('tipocombustibles.index')
            ->with('success', 'Tipocombustible updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipocombustible = Tipocombustible::find($id)->delete();

        return redirect()->route('tipocombustibles.index')
            ->with('success', 'Tipocombustible deleted successfully');
    }
}
