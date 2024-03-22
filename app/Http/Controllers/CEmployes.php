<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class CEmployes extends Controller
{
    private static function getData(){
        return [
            ['id'=>1,'name'=>'Rami','Salaire'=>10000],
            ['id'=>2,'name'=>'Alaoui','Salaire'=>11000],
            ['id'=>3,'name'=>'Ahmed','Salaire'=>9800]
        ];
    }
    public function index()
    {
        return view('employes.index',['employes'=>Employe::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employes.ajouter',);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $employe=new Employe();
        $employe->name=$request->input('name');
        $employe->salaire=$request->input('salary');
        $employe->save();
        return redirect('employes/ajouter');
    }

    /**
     * Display the specified resource.
     */
    public function show($employe)
    {
        $employes=self::getData();
        $index=array_search($employe,array_column($employes,'id'));
        if($index===false){
            abort(404);
        }
        return view('employes.show',['employe'=>$employes[$index]]);
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