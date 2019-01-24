<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mydatabases;

// USE DB; --> FOR QUERIES DATABASE

class mydatabase extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  $datas = mydatabases::all(); // gettting all datas from tables sql and assigned to variable
        // paginate with link to viewpager more databases slot
        // getting by order or getting by name
      $datas= mydatabases::orderby('name', 'asc')->paginate(1);
          // mydatabases::where('name', 'danh')->get();
      // $datas = DB::select('SELECT * FROM mydatabases');

        return view('datafetching.mydata')->with('datas',$datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // finding data using tables id primary key
        $info = mydatabases::find($id);


        return $info;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
