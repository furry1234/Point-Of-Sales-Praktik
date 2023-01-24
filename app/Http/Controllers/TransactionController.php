<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::latest()->paginate(5);
        return view('transactions.index',compact('transactions'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = Item::all();
        return view('transactions.create', compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            // 'item'  => 'required', 
            // 'price'  => 'required',
            // 'total_item'  => 'required',
            // 'total_price'  => 'required',
            // 'payment'  => 'required',
            // 'change'  => 'required',
            // 'purchased_at' => 'required'
            ]);
            Transaction::create([
                'item'  => $request->item,
                'price'  => $request->price,
                'total_item'  => $request->total_item,
                'total_price'  => $request->total_item * $request->price,
                'payment'  => $request->payment,
                'change'  => $request->payment - $request->total_item * $request->price,
                'purchased_at'  => date('Y-m-d'),
            ]);
            return redirect()->route('transactions.index')
            ->with('success','Transaction created successfully.');
            
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        return view('transactions.show',compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        $item = Item::all();
        return view('transactions.edit',compact('transaction','item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        $request->validate([
            // 'item'  => 'required', 
            // 'price'  => 'required',
            // 'total_item'  => 'required',
            // 'total_price'  => 'required',
            // 'payment'  => 'required',
            // 'change'  => 'required',
            // 'purchased_at' => 'required'
            ]);
            $transaction->update([
                'item'  => $request->item,
                'price'  => $request->price,
                'total_item'  => $request->total_item,
                'total_price'  => $request->total_item * $request->price,
                'payment'  => $request->payment,
                'change'  => $request->payment - $request->total_item * $request->price,
                'purchased_at'  => date('Y-m-d'),
            ]);
            $transaction->update($request->all());
            return redirect()->route('transactions.index')
            ->with('success','Transaction updated successfully');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return redirect()->route('transactions.index')
        ->with('success','Transaction deleted successfully');
            }
}
