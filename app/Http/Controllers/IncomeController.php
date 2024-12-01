<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Income;
use App\Models\IncomeDetail;
use App\Models\Person;
use App\Models\User;
use App\Models\Article;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $income=Income::all();
        return view('dashboard.income.index', ['income'=>$income]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $providers = Person::all();
    $users = User::all();

    return view('dashboard.income.create', compact('providers', 'users'));
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
