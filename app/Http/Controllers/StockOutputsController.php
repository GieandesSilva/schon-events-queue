<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\StockOutput;
use Illuminate\Http\Request;

class StockOutputsController extends Controller
{
    private $paginate = 10;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $movements = StockOutput::paginate($this->paginate);
        return view('stock-outputs.index', compact('movements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $products = Product::all()->pluck('name', 'id');
        $movements = StockOutput::paginate($this->paginate);
        return view('stock-outputs.create', compact(['products', 'movements']));
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
        $data = array_except($request->all(), '_token');
        StockOutput::forceCreate($data);

        return redirect()->route('stock_outputs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StockOutput  $stockOutput
     * @return \Illuminate\Http\Response
     */
    public function show(StockOutput $stockOutput)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StockOutput  $stockOutput
     * @return \Illuminate\Http\Response
     */
    public function edit(StockOutput $stockOutput)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StockOutput  $stockOutput
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StockOutput $stockOutput)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StockOutput  $stockOutput
     * @return \Illuminate\Http\Response
     */
    public function destroy(StockOutput $stockOutput)
    {
        //
    }
}
