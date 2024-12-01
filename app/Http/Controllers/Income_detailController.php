<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Income_detailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $providers = Provider::all();
        $users = User::all();
        $articles = Article::all();
        return view('dashboard.income.create', compact('providers', 'users', 'articles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $income = new Income();
        $income->provider_id = $request->provider_id;
        $income->user_id = $request->user_id;
        $income->receipt_type = $request->receipt_type;
        $income->receipt_serier = $request->receipt_serier;
        $income->receipt_number = $request->receipt_number;
        $income->date = $request->date;
        $income->tax = $request->tax;
        $income->total = $request->total;
        $income->status = $request->status;
        $income->save();

        foreach ($request->details as $detail) {
            $incomeDetail = new IncomeDetail();
            $incomeDetail->income_id = $income->id;
            $incomeDetail->article_id = $detail['article_id'];
            $incomeDetail->quantity = $detail['quantity'];
            $incomeDetail->price = $detail['price'];
            $incomeDetail->save();
        }

        return redirect()->route('dashboard.income.index')->with('success', 'Ingreso registrado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
