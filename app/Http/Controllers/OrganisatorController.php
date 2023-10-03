<?php

namespace App\Http\Controllers;

use App\Models\Organisator;
use App\Models\User;
use Illuminate\Http\Request;

class OrganisatorController extends Controller
{
    public function index(){
        $organisators = response()->json(Organisator::all());
        return $organisators;
    }

    public function show($id){
        $organisators = response()->json(Organisator::find($id));
        return $organisators;
    }

    public function store(Request $request){
        $organisator = new Organisator();
        $organisator->name = $request->name;
        $organisator->description = $request->description;
        $organisator->save();
        return redirect('/organisator/list');
    }

    public function update(Request $request, $id){
        $organisator = Organisator::find($id);
        $organisator->name = $request->name;
        $organisator->description = $request->description;
        $organisator->save();
        return redirect('/organisator/list');
    }

    public function destroy($id){
        Organisator::find($id)->delete();
        return redirect('/organisator/list');
    }

    public function newView(){
        $organisators = Organisator::all();
        return view('organisator.new', ['organisators' => $organisators]);
    }

    public function editView($id){
        $organisator= Organisator::find($id);
        return view('organisator.edit', ['organisator' => $organisator]);
    }

    public function listView(){
        $organisators = Organisator::all();
        return view('organisator.list', ['organisators' => $organisators]);
    }

    public function deleteView() {
        $organisators = Organisator::all();
        return view("organisator.delete", ["organisators" => $organisators]);
    }
}
