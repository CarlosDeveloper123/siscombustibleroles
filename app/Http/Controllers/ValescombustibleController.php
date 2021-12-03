<?php

namespace App\Http\Controllers;
use App\Models\Vehiculo;
use App\Models\Conductore;
use App\Models\Grifo;
use App\Models\Valescombustible;
use Illuminate\Http\Request;
use PDF;
use Carbon\Carbon;
/**
 * Class ValescombustibleController
 * @package App\Http\Controllers
 */
class ValescombustibleController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-combustible|crear-combustible|editar-combustible|borrar-combustible')->only('index');
         $this->middleware('permission:crear-combustible', ['only' => ['create','store']]);
         $this->middleware('permission:editar-combustible', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-combustible', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valescombustibles = Valescombustible::paginate();

        return view('valescombustible.index', compact('valescombustibles'))
            ->with('i', (request()->input('page', 1) - 1) * $valescombustibles->perPage());
    }
//PETICION AJAX
    public function all(Request $request){

        $valescombustible = \DB::table('valescombustibles')
        ->select('valescombustibles.*')
        ->orderBy('fecha','desc')
        ->take(10)
        ->get();

        return response(json_encode($valescombustible),200)->header('Content-type','text/plain');

    }


    //FUNCION PARA PDF
    public function pdf()
    {
        $valescombustibles = Valescombustible::paginate();
        //$valescombustibles = Valescombustible::where('fecha','2021-11-16')->get();
        $pdf = PDF::loadview('valescombustible.pdf',['valescombustibles'=>$valescombustibles]);
        //$pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();
 
        //return view('valescombustible.pdf', compact('valescombustibles'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $valescombustible = new Valescombustible();

        $vehiculo = Vehiculo::pluck('placavehiculo','id');
        $conductor = Conductore::pluck('nombreconductor','id');
        $grifo = Grifo::pluck('direcciongrifo','id');

        return view('valescombustible.create', compact('valescombustible','vehiculo','conductor','grifo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Valescombustible::$rules);

        $valescombustible = Valescombustible::create($request->all());

        return redirect()->route('valescombustibles.index')
            ->with('success', 'Valescombustible created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $valescombustible = Valescombustible::find($id);

        return view('valescombustible.show', compact('valescombustible'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $valescombustible = Valescombustible::find($id);

        $vehiculo = Vehiculo::pluck('placavehiculo','id');
        $conductor = Conductore::pluck('nombreconductor','id');
        $grifo = Grifo::pluck('direcciongrifo','id');

        return view('valescombustible.edit', compact('valescombustible','vehiculo','conductor','grifo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Valescombustible $valescombustible
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Valescombustible $valescombustible)
    {
        request()->validate(Valescombustible::$rules);

        $valescombustible->update($request->all());

        return redirect()->route('valescombustibles.index')
            ->with('success', 'Valescombustible updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $valescombustible = Valescombustible::find($id)->delete();

        return redirect()->route('valescombustibles.index')
            ->with('success', 'Valescombustible deleted successfully');
    }
}
