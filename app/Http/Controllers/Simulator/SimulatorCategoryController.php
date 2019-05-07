<?php

namespace App\Http\Controllers\Simulator;

use App\Models\Simulator\SimulatorCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SimulatorCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('simulator.categories.index', [
            'categories' => SimulatorCategory::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('simulator.categories.create', [
            'category' => [],
            'categories' => SimulatorCategory::all()
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
        SimulatorCategory::create($request->all());
        return redirect()->route('simulator.category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Simulator\SimulatorCategory  $simulatorCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SimulatorCategory $simulatorCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Simulator\SimulatorCategory  $simulatorCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SimulatorCategory $simulatorCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Simulator\SimulatorCategory  $simulatorCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SimulatorCategory $simulatorCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Simulator\SimulatorCategory  $simulatorCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SimulatorCategory $simulatorCategory)
    {
        //
    }
}
