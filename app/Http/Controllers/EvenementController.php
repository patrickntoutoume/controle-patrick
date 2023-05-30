<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
   
    public function event(){
        return view('page.save');
    }

    public function liste(){
       return view('page.liste_prod');
    }
    
    public function save_produit(Request $request){

        $request->validate([
            'title' =>'required|min:3',
            'description' =>'required|min:3',
            'Start_date' =>'required',
            'End_date' =>'required',
            'price'=>'required' 
        ]);

        $evenement= new Evenement();

        $evenement->title= $request->title;
        $evenement->description= $request->description;
        $evenement->Start_date= $request->Start_date;
        $evenement->End_date= $request->End_date;
        $evenement->price= $request->price;
        $evenement->save();
    
        return redirect()-> route('home');
        

    }

    public function supprimer($id){
    
        Evenement::destroy($id);
        return redirect()->route('liste');
    }

    public function liste_event(){
        $Evenements = Evenement::all();
        return view('page.liste_prod', compact('Evenements'));
    }

    public function update($id){
        $Evenement=Evenement::find($id);
        return view('page.update', compact('Evenement'));
    }

    public function update_prod(Request $request, $id){

        $request->validate([
            'title' =>'required|min:3',
            'description' =>'required|min:3',
            'Start_date' =>'date',
            'End_date' =>'date',
            'price'=>'required' 

        ]);

        $evenement= Evenement::findOrFail($id);

        $evenement->title= $request->title;
        $evenement->description= $request->description;
        $evenement->Start_date= $request->Start_date;
        $evenement->End_date= $request->End_date;
        $evenement->price= $request->price;
        
        $evenement->save();
        
        return redirect()-> route('liste');
        

    }
}


