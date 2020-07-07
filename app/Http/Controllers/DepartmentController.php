<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Member;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $departments = Department::all();
        return view('department.index', ['departments'=>$departments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('department.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $success = Department::insert($request);
        return redirect()->action('DepartmentController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $department = Department::where('id', $id)->get();
        return view('department.show', ['department'=>$department[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $department = Department::where('id', $id)->get();
        return view('department.edit', ['department'=>$department[0]]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        Department::where('id', $id)
          ->update([
              'name'=>$request->name,
              'description'=>$request->description
          ]);
        return redirect()->action('DepartmentController@show', ['department'=>$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $success = Department::where('id', $id)->delete();
        return redirect()->action('DepartmentController@index');
    }
}

