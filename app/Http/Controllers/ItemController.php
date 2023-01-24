<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merk;
use App\Models\Distributor;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::latest()->paginate(5);
        return view('items.index',compact ('items'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merk = Merk::all();
        $distributor = Distributor::all();
        return view('items.create', compact('merk', 'distributor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'merk' => 'required',
            'distributor' => 'required',
            'price' => 'required',
            'buy_price' => 'required',
            'stock' => 'required',
            'tgl_masuk' => 'required',
            'service' => 'required',
                ]);
            Item::create($request->all());
            return redirect()->route('items.index')
            ->with('success','Item created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('items.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        $merk = Merk::all();
        $distributor = Distributor::all();
        return view('items.edit',compact('item','merk','distributor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $request->validate([
            'name' => 'required',
            'merk' => 'required',
            'distributor' => 'required',
            'price' => 'required',
            'buy_price' => 'required',
            'stock' => 'required',
            'tgl_masuk' => 'required',
            'service' => 'required',
        ]);

        $item->update($request->all());
            
        return redirect()->route('items.index')
        ->with('success','Item updated successfully');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index')
        ->with('success','Item deleted successfully');
    }
}
