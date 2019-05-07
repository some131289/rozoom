<?php

namespace App\Http\Controllers\Simulator;

use App\Models\Simulator\SimulatorDiscipline;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SimulatorDisciplineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('simulator.disciplines.index', [
            'disciplines' => SimulatorDiscipline::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('simulator.disciplines.create', [
            'discipline' => [],
            'disciplines' => SimulatorDiscipline::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SimulatorDiscipline::create($request->all());
        return redirect()->route('simulator.discipline.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Simulator\SimulatorDiscipline  $simulatorDiscipline
     * @return \Illuminate\Http\Response
     */
    public function show(SimulatorDiscipline $simulatorDiscipline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Simulator\SimulatorDiscipline  $simulatorDiscipline
     * @return \Illuminate\Http\Response
     */
    public function edit(SimulatorDiscipline $simulatorDiscipline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Simulator\SimulatorDiscipline  $simulatorDiscipline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SimulatorDiscipline $simulatorDiscipline)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Simulator\SimulatorDiscipline  $simulatorDiscipline
     * @return \Illuminate\Http\Response
     */
    public function destroy(SimulatorDiscipline $simulatorDiscipline)
    {
        //
    }
}
