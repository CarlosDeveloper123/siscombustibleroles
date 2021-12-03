<?php

namespace App\Http\Controllers;

use App\Models\Grifo;
use Illuminate\Http\Request;

/**
 * Class GrifoController
 * @package App\Http\Controllers
 */
class GrifoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-grifo|crear-grifo|editar-grifo|borrar-grifo')->only('index');
         $this->middleware('permission:crear-grifo', ['only' => ['create','store']]);
         $this->middleware('permission:editar-grifo', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-grifo', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grifos = Grifo::paginate();

        return view('grifo.index', compact('grifos'))
            ->with('i', (request()->input('page', 1) - 1) * $grifos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grifo = new Grifo();
        return view('grifo.create', compact('grifo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Grifo::$rules);

        $grifo = Grifo::create($request->all());

        return redirect()->route('grifos.index')
            ->with('success', 'Grifo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grifo = Grifo::find($id);

        return view('grifo.show', compact('grifo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grifo = Grifo::find($id);

        return view('grifo.edit', compact('grifo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Grifo $grifo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grifo $grifo)
    {
        request()->validate(Grifo::$rules);

        $grifo->update($request->all());

        return redirect()->route('grifos.index')
            ->with('success', 'Grifo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $grifo = Grifo::find($id)->delete();

        return redirect()->route('grifos.index')
            ->with('success', 'Grifo deleted successfully');
    }
}
