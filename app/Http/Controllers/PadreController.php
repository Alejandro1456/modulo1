<?php

namespace App\Http\Controllers;
use App\Models\Padre;
use Illuminate\Http\Request;

class PadreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $padres = Padre::latest()->paginate(5);
        return view('padres.index', compact('padres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('padres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'ci'  => 'required',
            'apellidos'  => 'required',
            'nombres'    => 'required',
            'celtel'  => 'required',
            'direccion'  => 'required',
            'parentesco' => 'required',
            'distrito'     => 'required'
        ]);

        $padre = Padre::create([
            'ci'  => $request->ci,
            'apellidos'  => $request->apellidos,
            'nombres'    => $request->nombres,
            'celtel'  => $request->celtel,
            'direccion'  => $request->direccion,
            'parentesco' => $request->parentesco,
            'distrito'     => $request->distrito
        ]);

        if($padre){
            //Redirigir con mensaje de éxito
            return redirect()->route('padres.index')->with(['success' => 'Datos ingresados exitosamente...']);
        }else{
            //Redirigir con mensaje de error
            return redirect()->route('padres.index')->with(['error' => 'No se pudieron guardar los datos...']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Padre $padre)
    {
        //
        return view('padres.show', compact('padre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Padre $padre)
    {
        //
        return view('padres.edit', compact('padre'));
        //return $padre;
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
        //
        $this->validate($request, [
            'ci'  => 'required',
            'apellidos'  => 'required',
            'nombres'    => 'required',
            'celtel'  => 'required',
            'direccion'  => 'required',
            'parentesco' => 'required',
            'distrito'     => 'required'
        ]);

        //Obtener datos de catequista por ID
        $padre = Padre::findOrFail($id);

        $padre->update([
            'ci'  => $request->ci,
            'apellidos'  => $request->apellidos,
            'nombres'    => $request->nombres,
            'celtel'  => $request->celtel,
            'direccion'  => $request->direccion,
            'parentesco' => $request->parentesco,
            'distrito'     => $request->distrito
        ]);        

        if($padre){
            //Redirigir con mensaje de éxito
            return redirect()->route('padres.index')->with(['success' => 'Datos actualizados...']);
        }else{
            //Redirigir con mensaje de error
            return redirect()->route('padres.index')->with(['error' => 'No se pudieron actualizar los datos...!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $padre = Padre::findOrFail($id);
        $padre->delete();

        if($padre){
            //Redirigir con mensaje de éxito
            return redirect()->route('padres.index')->with(['success' => 'Datos eliminados con éxito...']);
        }else{
            //Redirigir con mensaje de error
            return redirect()->route('padres.index')->with(['error' => 'No se pudieron borrar los datos...']);
        }
    }
}
