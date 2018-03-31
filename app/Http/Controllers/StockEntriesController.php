<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\StockEntry;
use Illuminate\Http\Request;

class StockEntriesController extends Controller
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
        $movements = StockEntry::paginate($this->paginate);
        return view('stock-entries.index', compact('movements'));
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
        $movements = StockEntry::paginate($this->paginate);
        return view('stock-entries.create', compact(['products', 'movements']));
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
        StockEntry::forceCreate($data);

        return redirect()->route('stock_entries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StockEntry  $stockEntrie
     * @return \Illuminate\Http\Response
     */
    public function show(StockEntry $stockEntrie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StockEntry  $stockEntrie
     * @return \Illuminate\Http\Response
     */
    public function edit(StockEntry $stockEntrie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StockEntry  $stockEntrie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StockEntry $stockEntrie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StockEntry  $stockEntrie
     * @return \Illuminate\Http\Response
     */
    public function destroy(StockEntry $stockEntrie)
    {
        //
    }
}
