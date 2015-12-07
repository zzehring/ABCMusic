<?php

namespace App\Http\Controllers;

use App\Musician;
use App\Home;

use Request;
use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MusicianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musicians=Musician::all();
        return view('musicians.index',compact('musicians'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('musicians.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $home_values =[
            'address',
            'phone_number'
        ];
        $musician_values =[
            'name',
            'ssn',
            'address',
        ];
        $home=Request::only($home_values);
        $results = DB::select('select * from Homes where address = ?', array($home['address']));
        if ($results == null) {
            Home::create($home);
        }
        $musician=Request::only($musician_values);
        Musician::create($musician);
        return redirect('musicians');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $musician=Musician::find($id);
        return view('musicians.edit', compact('musician'));
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
        $musicianUpdate = Request::all();
        $musician=Musician::find($id);
        $musician->update($musicianUpdate);
        return redirect('musicians');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Musician::find($id)->delete();
        return redirect('musicians');
    }
}
