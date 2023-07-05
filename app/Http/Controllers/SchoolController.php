<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\Person;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    
    public function index()
    {
        return \response()->json(School::all(),200);
    }
    
    public function store(Request $request)
    {
        $input=$request->all();
        $school=School::create($input);
        return \response()->json($school,200);
    }
    
    public function show(School $school)
    {
        return \response()->json($school,200);
        
    }
    
    public function update(Request $request, School $school)
    {
        $school->update($request->all());
        return \response()->json($school,200);
    }
    
    public function destroy(School $school)
    {
        $school->delete();
        return \response()->json('',200);
    }
    /* public function index()
     {
         return view('schools',['schools'=>School::all()]);
     }
    
      public function store(Request $request)
    {
        $input=$request->all();
        School::create($input);
        return redirect('/');
    }

    public function edit($id)
    {
        $school=School::find($id);
        $arr=Person::all();
        $people=[];
        foreach($arr as $person){
            $flag=true;
            foreach($school->people as $job){
                if($person->id==$job->person->id){
                    $flag=false;
                    break;
                }
            }
            if($flag){
                $people[]=$person;
            }
        }
        return view('/school',['school'=>$school,'people'=>$people]);
    }

    public function update(Request $request,$id)
    {
        $school=School::find($id);
        if(isset($_POST['delete'])){
            $school->delete();
            return \redirect('/');
        }
        $input=$request->all();
        $school->update($input);
        return  \redirect('/schools/'.$id);
      
    }*/
}